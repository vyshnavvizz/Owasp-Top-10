#!/bin/bash
if ! command -v php > /dev/null; then
   echo "php is !installed"
   exit
fi
sudo php -S 0.0.0.0:80