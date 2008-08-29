<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/chapitre/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'chapitre')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
