#!/usr/bin/env bash
set -o errexit

# Install PHP
apt-get update && apt-get install -y php php-cli php-curl php-mbstring
