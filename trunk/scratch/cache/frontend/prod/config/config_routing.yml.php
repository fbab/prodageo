<?php
// auto-generated by sfRoutingConfigHandler
// date: 2008/07/30 12:34:18
$this->connect('homepage', '/', array (
  'module' => 'default',
  'action' => 'index',
), array());
$this->connect('default_symfony', '/symfony/:action/*', array (
  'module' => 'default',
), array());
$this->connect('default_index', '/:module', array (
  'action' => 'index',
), array());
$this->connect('default', '/:module/:action/*', array(), array());