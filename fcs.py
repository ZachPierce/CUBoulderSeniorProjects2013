#!/usr/bin/python
# vim: tabstop=8 expandtab shiftwidth=4 softtabstop=4 
import sys
import os
import signal
import time
import datetime
import atexit
from time import sleep

#This is the file we read in to get configuration data
configFile = "/home/talos/config.txt"
configList = []
teleCode = '/dev/null'
autoCode = '/dev/null'
teleTime = 0
autoTime = 0
mode = 'competition'


#The following is everything needed for logging
st = datetime.datetime.fromtimestamp(time.time()).strftime('fcs_%Y-%m-%d_%H:%M:%S')
logfh = open(st, 'w+')

def log(msg):
	st = datetime.datetime.fromtimestamp(time.time()).strftime('[%Y-%m-%d %H:%M:%S] ')
	logfh.write(st + msg + '\n')

@atexit.register
def end():
	log('Exiting the fcs')
	logfh.close()


#This is the main control of the feild control system
log('Starting the fcs')
def main():
    log('Parsing the config file')
    parseConfig()
    killAll()
    log('Cleared the motor and LED states')
    log('Waiting for the user to trigger the autonomuous code')
    waitForStart()
    log('Autonomuos code started')
    runCode(mode, autoTime, autoCode)
    log('Autonomous code ended')
    killAll()
    log('Cleared the motor and LED states')
    log('Waiting for the user to trigger the tele-op code')
    waitForStart()
    log('Tele-op code started')
    runCode(mode, teleTime, teleCode)
    log('Tele-op code ended')
    killAll()
    log('Cleared the motor and LED states')



def parseConfig():
    global configList
    global teleCode
    global autoCode
    global teleTime
    global autoTime
    global mode

    configList = []
    for line in open(configFile):
        li=line.strip()
        if (not li.startswith("#")) and li:
            configList.append(line.rstrip())
    
    teleCode = configList.pop()
    autoCode = configList.pop()
    teleTime = configList.pop()
    autoTime = configList.pop()
    mode = configList.pop()[:1].lower()


    if (mode != 'p') & (mode != 'c'):
        print 'Error: What kind of a run mode is that?'
        print 'Practice or competition only, please!'
        exit()
    if (autoTime < 0):
        print 'Your autonomous time is less than zero, watchout!'
        autoTime =  0
    if (teleTime < 0):
        print 'Your tele-op time is  less than zero, watchout!'
        teleTime = 0



def killAll(): # this function still needs some works.
    mA = open('/dev/talos/motorA/speed', 'w', 0)
    mB = open('/dev/talos/motorB/speed', 'w', 0)
    mC = open('/dev/talos/motorC/speed', 'w', 0)
    mD = open('/dev/talos/motorD/speed', 'w', 0)
    mE = open('/dev/talos/motorE/speed', 'w', 0)
    mF = open('/dev/talos/motorF/speed', 'w', 0)
    mA.write('0')
    mB.write('0')
    mC.write('0')
    mD.write('0')
    mE.write('0')
    mF.write('0')
    mA.close()
    mB.close()
    mC.close()
    mD.close()
    mE.close()
    mF.close()

    bz = open ('/dev/talos/buzzer', 'w', 0)
    bz.write('0')
    bz.close()

    lr = open('/dev/talos/led/red', 'w', 0)
    lg = open('/dev/talos/led/green', 'w', 0)
    lb = open('/dev/talos/led/blue', 'w', 0)
    ly = open('/dev/talos/led/yellow', 'w', 0)
    lr.write('0')
    lg.write('0')
    lb.write('0')
    ly.write('0')
    lr.close()
    lg.close()
    lb.close()
    ly.close()



def waitForStart():
    start = open('/dev/talos/joystick1/button7', 'r')
    while int(start.readline()) == 0:
        pass
    start.close()



def runCode(mode, time, code):
    print code
    if time <= 0:
        return
    newPid = os.fork()
    if newPid == 0:
        os.execlp(code, '')
    else:
        # Wait for input function
        if mode == 'c':
            sleep(float(time))
            os.kill(newPid, signal.SIGKILL)
        else:
            os.wait()
            


main()
