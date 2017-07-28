This is a CakePHP based application.  It requires php 5.6.* and mysql.  
This application is based on the work from http://www.ar15.com/forums/t_1_5/1252871_.html and here https://sourceforge.net/p/gun/wiki/Instructions/

The code here is still under development ready for beta use.  Please feel free to contribute.

## Installation
1) Clone a copy locally
2) create a mysql database called public
3) import the gun.sql script
4) run bin/cake server
5) go to the url lised (http://localhost:8765

## Extra Stuff

This project makes use of friendsofcake/cakepdf: https://github.com/FriendsOfCake/CakePdf
It's currently configured to use the wkhtmltopdf engine http://wkhtmltopdf.org/
The engine will need to be installed separately and configured in the app/bootstrap.pdf


## Configuration

Read and edit `config/app.php` and setup the 'Datasources' and any other
configuration relevant for your application.

Added a new constant called 'SHOWDELETE' in the bootstrap.php to enable deleteting 
log entries while testing.

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
