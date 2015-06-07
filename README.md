Opal-base
==================
 
A boilerplate for smaller websites or webbapplications using PHP.
 
Built by Maria Jonsson as part of a course in php

Contents
---------

### webroot

*    config.php
     The webroot catalogue contains the config.php file.
     Config lets you change, amongst other things, the header, footer and navigation meny.
     A template for admin menu and regular menu are included in the config file.

*    hello.php 
     is an example of a simple page controller.

*    img.php
     This file uses the class CImage to show and transform images
     
*    gallery.php
     This pagecontroller uses the class CGallery to show a gallery of images. It also has support for breadcrumb navigation.
     
*    source.php
     This file uses the class CSource to show sourcecode

### webroot/css

Contains the stylesheet files. Which css-files are included is controlled by the config.php file.

### webroot/img

Catalogue for images

### webroot/cache

This catalogue is used by img.php, to store different versions of images. Make sure the catalogue is readable and writeable (777).

### theme

*    functions.php
     Some important functions
     
*    render.php
     Renders the page

*    index.tpl.php
     Page template
     
### src

Add modules here. Some basic ones are included. 

*    CDatabase
     Support for database

*    CGallery 
     Support for image galleries

*    CImage
     Show and transform images
     
*    CSource
     Show sourcecode
     
*    CTextFilter
     Use markdown and other text formats
     
*    CUser
     Some user functionality
 
License 
------------------
 
This software is free software and carries a MIT license.
 
 
------------------
 .
..:
 
Copyright (c) 2015 Maria Jonsson