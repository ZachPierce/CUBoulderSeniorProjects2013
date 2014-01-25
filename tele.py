#!/usr/bin/python -u
import sys

blueLED =  open('/dev/talos/led/blue','w', 0)
greenLED = open('/dev/talos/led/green','w', 0)
redLED = open('/dev/talos/led/red', 'w', 0)
yellowLED = open('/dev/talos/led/yellow', 'w', 0)

leftFront = open('/dev/talos/motorF/speed', 'w', 0)
leftBack = open('/dev/talos/motorE/speed', 'w', 0)
rightFront = open('/dev/talos/motorA/speed', 'w', 0)
rightBack = open('/dev/talos/motorB/speed', 'w', 0)

joyR = open('/dev/talos/joystick1/axis3', 'r')
joyL = open('/dev/talos/joystick1/axis1', 'r')

buttonA = open('/dev/talos/joystick1/button0', 'r')
buttonB = open('/dev/talos/joystick1/button1', 'r')

rightFlipper = open('/dev/talos/servo1/position', 'w', 0)
leftFlipper = open('/dev/talos/servo4/position', 'w', 0)

def capture():
	pipe = open('/dev/input/js0','r')
	while 1:
		btnA = buttonA.readline()
		btnB = buttonB.readline()
		if btnA == '1\n':
			greenLED.write('1')
			leftFlipper.write('255') # fully out
		elif btnA == '0\n':
			greenLED.write('0')
			leftFlipper.write('1') # fully in
		if btnB == '1\n':
			redLED.write('1')
			rightFlipper.write('1') # fully out
		elif btnB == '0\n':
			redLED.write('0')
			rightFlipper.write('255') # fully in

		leftJoyY(joyL.readline())
		rightJoyY(joyR.readline())
		print buttonA.readline()
		print buttonB.readline()

# Tank drive with the two joysticks.
'''
def buttonPress(btn):
	# 00 -> x button
	# 01 -> a button
	# 02 -> b button
	# 03 -> y button
	# 04 -> lb/l1 button
	# 05 -> rb/r1 button
	# 06 -> lt/l2 button
	# 07 -> rt/r2 button
	# 08 -> back button
	# 09 -> start button
	# 0A -> right joy press
	# 0B -> left joy press

	if btn == '02':
		blueLED.write('1')
	elif btn == '00':
		greenLED.write('1')
	elif btn == '01':
		redLED.write('1')
	elif btn == '03':
		yellowLED.write('1')


def buttonRelease(btn):
	if btn == '02':
		blueLED.write('0')
	elif btn == '00':
		greenLED.write('0')
	elif btn == '01':
		redLED.write('0')
	elif btn == '03':
		yellowLED.write('0')
'''

def leftJoyX(num):
	return

def leftJoyY(num):
	s = str(num) # converting to str might be unnessacary.
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
