#!/bin/bash

cd /www/helloxb
git checkout local
git add .
git commit -a -m 'auto_git'
git checkout test
git merge local
git push origin test
git checkout local
