#!/bin/sh

find . -name ".DS_Store" -delete

git add .
git commit -m "Update Code at: $(date +'%Y-%m-%d %H:%M:%S')"
git push origin main