# PHP Debug VM

This is an example for using Xdebug and phpdbg in a Vagrant box. It is part of the talk "die() hard" first performed at the PHP Stockholm Meetup on 19/10/2015.

## Prerequisites

- Vagrant
- Virtualbox

## Setup

Clone the repository and run ```vagrant up```. This will set up a new vagrant box based on Ubuntu Server 15.04 (Vivid Vervet) containing PHP 5.6 with the Xdebug extension and the phpdbg SAPI. A nginx webserver will also be installed and configured to serve ```restservice/public/index.php``` under ```http://localhost:8080``` for the host system.

Xdebug will try to establish a DBGP connection with the host system on Port 9000 whenever it is enabled. The easiest way to enable Xdebug for certain requests is using a browser extension (like "Xdebug helper" for Chrome).
