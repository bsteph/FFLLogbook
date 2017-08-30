# Awesome FFL Log Book [![Awesome](https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/sindresorhus/awesome)

This is a CakePHP based application.  It requires php 5.6.* and mysql.  
This application is based on the work from http://www.ar15.com/forums/t_1_5/1252871_.html and here https://sourceforge.net/p/gun/wiki/Instructions/

The code here is still under development ready for beta use.  Please feel free to contribute.

## Installation
1) Clone a copy locally
2) create a mysql database called public
3) import the gun.sql script
4) run bin/cake server
5) go to the url lised (http://localhost:8765
6) Don't forget to backup the database on a daily basis
7) If you're going to run it under Apache, set the document root 
   as FFLLogbook/webroot

## Extra Stuff

This project makes use of friendsofcake/cakepdf: https://github.com/FriendsOfCake/CakePdf
It's currently configured to use the wkhtmltopdf engine http://wkhtmltopdf.org/
The engine will need to be installed separately and configured in the app/bootstrap.pdf


## Configuration

Read and edit `config/app.php` and setup the 'Datasources' and any other
configuration relevant for your application.

Added a new constant called 'SHOWDELETE' in the bootstrap.php to enable deleteting 
log entries while testing.

For the 4473 uploads, you may need to update some mysql related settings.
my.cnf:
- max_allowed_packet=1024*1024*16; (Allows for files up to 16mb to be sent).
- connect_timeout=28800; ()prevents "Database Server has gone away" errors)

php.ini:
- upload_max_filesize=20M
- default_socket_timeout = 28800
- mysql.connect_timeout = -1

## Features

- Trying to make it ATF compliant (https://www.atf.gov/file/104736/download)

- Standard FFL Log book stuff, written to a mysql database that can be backed up
using mysqldump

- Export Log book for ATF in CSV format

- Export Log book and particular entries in PDF format

- Automatically log any add, change and deletes to the gun database, along with
  old and new values and timestamped.

- ATF search compliant (#4 from https://www.atf.gov/file/104736/download)

- Record additional Customer information like phone number, email, etc. 

## New changes

- Added support for storing 4473's
