#!/bin/bash

TODAY=`date +'%Y-%m-%d %H:%M:%S'`

git add .
git commit -m "Update Code Automate at: ${TODAY}"
git push origin main