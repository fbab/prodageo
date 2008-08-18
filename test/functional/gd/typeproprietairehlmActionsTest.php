<?php

include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

$browser->
  get('/typeproprietairehlm/index')->
  isStatusCode(200)->
  isRequestParameter('module', 'typeproprietairehlm')->
  isRequestParameter('action', 'index')->
  checkResponseElement('body', '!/This is a temporary page/');
