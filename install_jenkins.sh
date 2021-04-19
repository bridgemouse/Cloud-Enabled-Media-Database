#!/bin/bash

sudo apt update 
sudo apt install -y python3 python3-pip default-jdk
sudo pip3 install ansible 
sudo pip3 install openshift
ansible-galaxy install geerlingguy.jenkins

# This is very bad. Do not do this in production. 
sudo chmod 777 /var/run/docker.sock

