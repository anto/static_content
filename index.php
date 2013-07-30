<?php

/*
* Static Content for Wolf CMS. <http://www.wolfcms.org>
*
* Copyright (C) 2013 Leedtech <http://leedtech.com>
* Copyright (c) 2008-2009 Mika Tuupola
*
* This file is part of the plugin Static Content for Wolf CMS. It is licensed
* under the GPL v3 license.
*
* For details, see: http://fsf.org/
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
  'author' => 'Leedtech <http://leedtech.com>',
  'require_wolf_version' => '0.7.7+',
  //'update_url' => '',
  'website' => 'http://leedtech.com'
  ));

/* Stuff for backend. */
if (defined('CMS_BACKEND')) {

  }
