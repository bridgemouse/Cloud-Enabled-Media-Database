#!/bin/bash

sudo apt update
sudo apt install -y apache2
sudo ufw allow in "Apache Full"
sudo systemctl status apache2
