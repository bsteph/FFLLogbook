# Awesome FFL Log Book [![Awesome](https://cdn.rawgit.com/sindresorhus/awesome/d7305f38d29fed78fa85652e3a63e154dd8e8829/media/badge.svg)](https://github.com/sindresorhus/awesome)

This is a CakePHP based application.  It requires php 5.6.* and mysql.  
This application is based on the work from http://www.ar15.com/forums/t_1_5/1252871_.html and here https://sourceforge.net/p/gun/wiki/Instructions/

The code here is still under development ready for beta use.  Please feel free to contribute.

**Check out the screen shots in the screenshot directory**

## Installation
1. Clone a copy locally
1. create a mysql database called public
1. import the gun.sql script
1. Install wkhtmltopdf
    1. Go to https://wkhtmltopdf.org/downloads.html
    1. Download an installer for wkhtmltopdf for your platform
    1. Install the wkhtmltopdf application
    1. Edit config/bootstrap.php
    1. Go to the bottom of the file, at around line 227, change the line that says "'binary' => '/usr/local/bin/wkhtmltopdf'," 
       to point to your installation of wkhtmltopdf
1. Update config/app.php datasources configuration to point to your database
    1. edit app.php
    1. go to around line 212
        1. modify the host entry
        1. modify the username entry
        1. modify the password entry
        1. modify the database (database name) if necessary
1. run bin/cake server
1. go to the url lised (http://localhost:8765)
1. **Don't forget to backup the database on a daily basis**
1. If you're going to run it under Apache (instead of step 6 and 7), set the document root 
    as FFLLogbook/webroot

## Extra Stuff

This project makes use of friendsofcake/cakepdf: https://github.com/FriendsOfCake/CakePdf
It's currently configured to use the wkhtmltopdf engine http://wkhtmltopdf.org/
The engine will need to be installed separately and configured in the config/bootstrap.pdf
See Installation instructions above


## Misc Configuration

Read and edit `config/app.php` and setup the 'Datasources' and any other
configuration relevant for your application.

Set debug => true on line 13 of config/app.php while testing so it doesn't log modifications


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
