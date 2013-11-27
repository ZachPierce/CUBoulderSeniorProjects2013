#!/usr/bin/python
import sys

def capture():
	pipe = open('/dev/input/js0','r')
	action = []
	spacing = 0
	while 1:
		for character in pipe.read(1):
			action += ['%02X' % ord(character)]
			if len(action) == 8:
	
				num = int(action[5], 16) # Translate back to integer form

				if action[6] == '01': # Button
					if action[4] == '01':
						buttonPress(action[7])
					else:
						buttonRelease(action[7])

				elif action[7] == '00': # Left Joystick left/right
					leftJoyX(num)

				elif action[7] == '01': # Left Joystick up/down
					leftJoyY(num)

				elif action[7] == '04': # D-pad left/right
					dPadX(action[4])

				elif action[7] == '05': # D-pad up/down
					dPadY(action[4])

				elif action[7] == '02': # Right Joystick left/right
					rightJoyX(num)

				elif action[7] == '03': # Right Joystick up/ down
					rightJoyY(num)
				action = []



# Tank drive with the two joysticks.
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

	if btn == '00':
		blueLED = open ('/dev/talos/led/blue')
		blueLED.write('1')
		blueLED.close()
	elif btn == '01':
		greenLED = open ('/dev/talos/led/green')
		greenLED.write('1')
		greenLED.close()
	elif btn == '02':
		redLED = open ('/dev/talos/led/red')
		redLED.write('1')
		redLED.close()
	elif btn == '03':
		yellowLED = open ('/dev/talos/led/yellow')
		yellowLED.write('1')
		yellowLED.close()


def buttonRelease(btn):
	if btn == '00':
		blueLED = open ('/dev/talos/led/blue')
		blueLED.write('0')
		blueLED.close()
	elif btn == '01':
		greenLED = open ('/dev/talos/led/green')
		greenLED.write('0')
		greenLED.close()
	elif btn == '02':
		redLED = open ('/dev/talos/led/red')
		redLED.write('0')
		redLED.close()
	elif btn == '03':
		yellowLED = open ('/dev/talos/led/yellow')
		yellowLED.write('0')
		yellowLED.close()

def leftJoyX(num):
	return # tank drive, disregard changes in x.

def leftJoyY(num):
	return
	# we need a motor connected or else the driver freezes.
	leftMotor = open('/dev/talos/motorF', w)
	leftMotor.write(num)
	leftMotor.close()

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
	return
	# we need a motor connected or else the driver freezes.
	rightMotor = open('/dev/talos/motorA', w)
	rightMotor.write(num)
	rightMotor.close()


capture()
