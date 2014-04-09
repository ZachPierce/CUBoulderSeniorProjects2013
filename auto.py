#!/usr/bin/python
import sys
import time


blueLED = open ('/dev/talos/led/blue', 'w', 0)
greenLED = open ('/dev/talos/led/green','w', 0)
redLED = open ('/dev/talos/led/red', 'w', 0)
yellowLED = open ('/dev/talos/led/yellow', 'w', 0)
mtrA = open('/dev/talos/motorA/speed', 'w', 0)
mtrB = open('/dev/talos/motorB/speed', 'w', 0)
mtrE = open('/dev/talos/motorE/speed', 'w', 0)
mtrF = open('/dev/talos/motorF/speed', 'w', 0)

buzzer = open('/dev/talos/buzzer', 'w', 0)


while True:
        blueLED.write(str(0))
        greenLED.write(str(1))
        redLED.write(str(0))
        yellowLED.write(str(0))

        time.sleep(1)

        mtrA.write(str(0))
        mtrB.write(str(0))
        mtrE.write(str(50))
        mtrF.write(str(50))

        time.sleep(0.8)

        mtrA.write(str(0))
        mtrB.write(str(0))
        mtrE.write(str(0))
        mtrF.write(str(0))


        blueLED.write(str(0))
        greenLED.write(str(0))
        redLED.write(str(1))
        yellowLED.write(str(0))

        time.sleep(1)

        mtrA.write(str(60))
        mtrB.write(str(60))
        mtrE.write(str(60))
        mtrF.write(str(60))

        time.sleep(0.8)

        mtrA.write(str(0))
        mtrB.write(str(0))
        mtrE.write(str(0))
        mtrF.write(str(0))
