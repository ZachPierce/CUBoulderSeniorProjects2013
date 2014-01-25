#!/usr/bin/python 
import sys
import time


blueLED = open ('/dev/talos/led/blue', 'w', 0)
greenLED = open ('/dev/talos/led/green','w', 0)
redLED = open ('/dev/talos/led/red', 'w', 0)
yellowLED = open ('/dev/talos/led/yellow', 'w', 0)

buzzer = open('/dev/talos/buzzer', 'w', 0)


while True:
	blueLED.write(str(1))
	greenLED.write(str(1))
	redLED.write(str(0))
	yellowLED.write(str(0))

	time.sleep(1)
	
	blueLED.write(str(0))
	greenLED.write(str(0))	
	redLED.write(str(1))	
	yellowLED.write(str(1))	

	time.sleep(1)
