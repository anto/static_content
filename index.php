<?php
/*
 * Static Content for Wolf CMS.
 * 
 * Copyright (C) 2013 Leedtech <http://www.leedtech.com>
 *
 * This file is part of the plugin Static Content for Wolf CMS.  It is
 * licensed under the GPLv3 license.
 * 
 * The license can be viewed at http://www.gnu.org/licenses/gpl-3.0-standalone.html
 */

/* Security Feature */
if (!defined('IN_CMS')) {
  exit(); //exit if plugin isn't installed
  }

Plugin::setInfos(array(
  'id' => 'static_content',
  'title' => 'Static Content for Wolf CMS',
  'description' => 'Enables delivery of static content from another web server.',
  'version' => '0.1',
  'license' => 'GPL v3',
  'author' => 'Leedtech <http://www.leedtech.com>',
  'require_wolf_version' => '0.7.7+',
  //'update_url' => '',
  'website' => 'http://leedtech.com'
  ));

$url_file = PLUGINS_ROOT.'/static_content/content.static';             // Static URL file location

if(file_exists($url_file)) {
  $static_url = file_get_contents('content.static', true);             // Read file contents
  $static_url = explode(';;',$static_url);                             // Explode file contents

  define('URL_STATIC', 'http://'.$static_url[0].'/');                  // Define URL_STATIC
  define('STHEMES_URI', 'http://'.$static_url[1].'/');                 // Define STHEMES_URI
  }

else {
  define('URL_STATIC', URL_PUBLIC.'public/');                          //File doesn't exist, URL_STATIC = public directory
  define('STHEMES_URI', THEMES_URI);                                    // File doesn't exist, STHEMES_URI = THEMES_URI
  }
  
/* Stuff for backend. */
if (defined('CMS_BACKEND')) {

  }
