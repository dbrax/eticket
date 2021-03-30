#!/bin/sh
set -e

vendor/bin/phpunit

(git push) || true

git pull

git add .


read -p "\e[1;42m Enter commit message: " message
echo -e "\e[1;31m  Your commit message is  $message !"

git commit -m " $message "

git push 

