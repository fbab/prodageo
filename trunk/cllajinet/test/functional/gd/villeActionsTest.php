<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/ville/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'ville')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
