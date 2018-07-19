#!/bin/bash
git stash
git pull origin master
git stash pop
chmod -R 777 *
