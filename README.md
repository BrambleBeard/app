![BrambleBeard Logo](https://github.com/BrambleBeard/bramblebeard.github.io/blob/master/assets/ico/favicon.png)
# BrambleBeard Application

## Screenshot
![Toolbox Dashboard](https://github.com/BrambleBeard/bramblebeard.github.io/blob/master/assets/img/screenshot.png)

## Prerequisites

You'll probably want the following:

* [Vagrant](https://www.vagrantup.com/)
* [VMware](http://www.vmware.com/)
* [Git](https://git-scm.com/)
* If you're running Windows, an ssh tool like [Putty](http://www.putty.org/)

## Installation

### Clone the repository
    $ git clone https://github.com/BrambleBeard/app.git /path/to/project

### Start
    $ cd /path/to/project
    $ vagrant up

## Initial Provisioning
Continue with these instructions if this is the first time you've provisioned your server.

### Install
    $ vagrant ssh
    $ cd /vagrant/project
    $ composer install

### Configure the database and environment
A blank database has been created named `bramblebeard`.  To configure the application to use this database, you must edit the `/vagrant/project/.env` file and set the following values:

    DB_DATABASE=bramblebeard
    DB_USERNAME=root
    DB_PASSWORD=root

### Seed the database
    $ cd /vagrant/project
    $ php artisan migrate
    $ php artisan db:seed

### Finish
Browse to [http://localhost:8080/](http://localhost:8080/).

### Notes
See notes: [notes.md](notes.md)
