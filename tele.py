#!/usr/bin/python -u
import atexit
import datetime
import time
import sys


blueLED =  open('/dev/talos/led/blue','w', 0)
greenLED = open('/dev/talos/led/green','w', 0)
redLED = open('/dev/talos/led/red', 'w', 0)
yellowLED = open('/dev/talos/led/yellow', 'w', 0)

leftFront = open('/dev/talos/motorF/speed', 'w', 0)
leftBack = open('/dev/talos/motorE/speed', 'w', 0)
rightFront = open('/dev/talos/motorA/speed', 'w', 0)
rightBack = open('/dev/talos/motorB/speed', 'w', 0)

joyR = open('/dev/talos/joystick1/axis4', 'r')
joyL = open('/dev/talos/joystick1/axis1', 'r')

buttonA = open('/dev/talos/joystick1/button0', 'r')
buttonB = open('/dev/talos/joystick1/button1', 'r')

rightFlipper = open('/dev/talos/servo1/position', 'w', 0)
leftFlipper = open('/dev/talos/servo4/position', 'w', 0)



#The following is everything needed for logging
st = datetime.datetime.fromtimestamp(time.time()).strftime('/var/www/logs/tele_%Y-%m-%d_%H:%M:%S')
logfh = open(st, 'w+')

def log(msg):
        st = datetime.datetime.fromtimestamp(time.time()).strftime('[%Y-%m-%d %H:%M:%S] ')
        logfh.write(st + msg + '\n')

@atexit.register
def end():
        log('Exiting the fcs')
        logfh.close()




# Capture pulls for controller input to see if the state of the controller has changed.
def capture():
        pipe = open('/dev/input/js0','r')
        log('Starting Tele-operation mode')
        leftJoyValOld = 0
        rightJoyValOld = 0
        btnAOld = 0
        btnBOld = 0
        while 1:
                btnA = buttonA.readline()
                btnB = buttonB.readline()
                if btnA == '1\n':
                        greenLED.write('1\n')
                        leftFlipper.write('255') # fully out
                        if btnAOld == '0\n':
                                log('btnA was pressed')
                        btnAOld = '1\n'
                elif btnA == '0\n':
                        greenLED.write('0\n')
                        leftFlipper.write('1') # fully in
                        if btnAOld == '1\n':
                                log('btnA was released')
                        btnAOld = '0\n'
                if btnB == '1\n':
                        redLED.write('1\n')
                        rightFlipper.write('1') # fully out
                        if btnB == '0\n':
                                log('btnB was pressed')
                        btnBOld = '1\n'
                elif btnB == '0\n':
                        redLED.write('0\n')
                        rightFlipper.write('255') # fully in
                        if btnB == '0\n':
                                log('btnB was released')
                        btnBOld = '0\n'

                leftJoyVal = joyL.readline()
                rightJoyVal = joyR.readline()

                leftJoyY(leftJoyVal)
                rightJoyY(rightJoyVal)

                if leftJoyValOld != leftJoyVal:
                        log('Left joystick now at: ' + leftJoyVal)
                if rightJoyValOld != rightJoyVal:
                        log('Right joystick now at: ' + rightJoyVal)
                leftJoyValOld = leftJoyVal
                rightJoyValOld = rightJoyVal

# Tank drive with the two joysticks.

def leftJoyX(num):
        return

def leftJoyY(num):
        s = str(num)
        if s[0] == '-':
                leftFront.write(s[1:])
                leftBack.write(s[1:])
        else:
                leftFront.write('-'+s)
                leftBack.write('-'+s)

def dPadX(x):
        if x == '01':
                return #left
        elif x == 'FF':
                return #right

def dPadY(y):
        if y == '01':
                return # up
        elif y == 'FF':
                return #down

def rightJoyX(num):
        return # tank drive, disregard changes in x.

def rightJoyY(num):
        s = str(num)
        if s[0] == '-':
                rightFront.write(s[1:])
                rightBack.write(s[1:])
        else:
                rightFront.write('-'+s)
                rightBack.write('-'+s)


capture()
