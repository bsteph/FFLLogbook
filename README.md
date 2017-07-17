This is a CakePHP based application.  It requires php 5.6.* and mysql.  
This application is based on the work from http://www.ar15.com/forums/t_1_5/1252871_.html and here https://sourceforge.net/p/gun/wiki/Instructions/

The code here is still under development and not ready for use.  Please feel free to contribute.

Installation:
1) Clone a copy locally
2) create a mysql database called public
3) import the gun.sql script
4) run bin/cake server
5) go to the url lised (http://localhost:8765

# CakePHP Application Skeleton

[![Build Status](https://api.travis-ci.org/cakephp/app.png)](https://travis-ci.org/cakephp/app)
[![License](https://poser.pugx.org/cakephp/app/license.svg)](https://packagist.org/packages/cakephp/app)

A skeleton for creating applications with [CakePHP](http://cakephp.org) 3.x.

The framework source code can be found here: [cakephp/cakephp](https://github.com/cakephp/cakephp).

## Installation

1. Download [Composer](http://getcomposer.org/doc/00-intro.md) or update `composer self-update`.
2. Run `php composer.phar create-project --prefer-dist cakephp/app [app_name]`.

If Composer is installed globally, run
```bash
composer create-project --prefer-dist cakephp/app [app_name]
```

You should now be able to visit the path to where you installed the app and see
the setup traffic lights.

## Configuration

Read and edit `config/app.php` and setup the 'Datasources' and any other
configuration relevant for your application.
