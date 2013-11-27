#!/usr/bin/python
# vim: tabstop=8 expandtab shiftwidth=4 softtabstop=4 
import sys
import os
from time import sleep

#This is the file we read in to get configuration data
globalConfigFile = "config.txt"


def main():
    configList = []
    parseConfig(teleCode, autoCode, teleTime, autoTime, mode, globalConfigFile)
    
    runCode(mode, autoTime, autoCode)
    runCode(mode, teleTime, teleCode)



def parseConfig(teleCode, autoCode, teleTime, autoTime, mode, configFile):
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
            os.kill(newPid, 0)
        else:
            os.wait()
            


main()
