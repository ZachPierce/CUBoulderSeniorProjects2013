#!/usr/bin/python 
import sys
import time
import datetime
import atexit


blueLED = open ('/dev/talos/led/blue', 'w', 0)
greenLED = open ('/dev/talos/led/green','w', 0)
redLED = open ('/dev/talos/led/red', 'w', 0)
yellowLED = open ('/dev/talos/led/yellow', 'w', 0)

buzzer = open('/dev/talos/buzzer', 'w', 0)

st = datetime.datetime.fromtimestamp(time.time()).strftime('auto_%Y-%m-%d_%H:%M:%S')
logfh = open(st, 'w+')

def log(msg):
	st = datetime.datetime.fromtimestamp(time.time()).strftime('[%Y-%m-%d %H:%M:%S] ')
	logfh.write(st + msg + '\n')

@atexit.register
def end():
	blueLED.close()
	greenLED.close()
	redLED.close()
	yellowLED.close()
	buzzer.close()
	log('Exiting Autonomuous Code')
	logfh.close()



log('Starting Autonomous Code')
while True:
	log('B and G on  ... R and Y off')
	blueLED.write(str(1))
	greenLED.write(str(1))
	redLED.write(str(0))
	yellowLED.write(str(0))

	time.sleep(1)
	
	log('B and G off ... R and Y on')
	blueLED.write(str(0))
	greenLED.write(str(0))	
	redLED.write(str(1))	
	yellowLED.write(str(1))	

	time.sleep(1)
