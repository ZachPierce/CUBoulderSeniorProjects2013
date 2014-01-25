#!/usr/bin/python
# vim: tabstop=8 expandtab shiftwidth=4 softtabstop=4 
import sys
import os
import signal
from time import sleep

#This is the file we read in to get configuration data
configFile = "/home/talos/config.txt"
configList = []
teleCode = '/dev/null'
autoCode = '/dev/null'
teleTime = 0
autoTime = 0
mode = 'competition'


def main():
    parseConfig()
    killAll()
    waitForStart()
    runCode(mode, autoTime, autoCode)
    killAll()
    waitForStart()
    runCode(mode, teleTime, teleCode)
    killAll()



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
