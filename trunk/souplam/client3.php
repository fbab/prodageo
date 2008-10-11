<?php

/*
http://devzone.zend.com/node/view/id/689
Published by Dmitry Stogov, Tuesday, March 16, 2004 
Zend Developer Zone
*/

  $client = new SoapClient("stockquote.wsdl");
  print($client->getQuote("ibm"));
?> 
