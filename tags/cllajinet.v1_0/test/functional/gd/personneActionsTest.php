<?php

/*
Creer une nouvelle personne et effacer
*/


include(dirname(__FILE__).'/../../bootstrap/functional.php');

// create a new test browser
$browser = new sfTestBrowser();

// check that $disney is not in the database

$test_username = 'Mickey' ;

// /* DEBUT



// FBAB : commencer par show ou index provoque l'erreur Could redeclare
// Fatal error: Cannot redeclare class Personne in /var/www/cllajinet.integration/lib/model/Personne.php on line 123

$browser->get('/personne/edit/1') ;


// $browser->get('/personne/index') ;
$browser->get('/personne/index') ->
  isStatusCode(200)->
  checkResponseElement('body', "!/$test_username/" );

$browser->
  get('/personne/create')->
  isStatusCode(200)->
  isRequestParameter('module', 'personne')->
  isRequestParameter('action', 'create')->
  // setField ( 'personne_nom' , 'disney' ) ->
  setField ( 'personne[nom]' , $test_username ) ->
  click ( 'Save' ) ->
  checkResponseElement('body', '!/This is a temporary page/');


$request = $browser->getRequest() ;
$response = $browser->getResponse() ;
// NO $id = $browser->getRequest()->getParameter('id');
// NO echo $reponse ; NO
// NO echo $request ; NO

// recuperation de l'id du nouvel personne
$response_string = $response->getContent() ;
$parameters_string = $request->getUrlParameter ( 'id' ) ;
$uri = $request->getUri() ;
$http_header = $response->getHttpHeaders() ; 
$id = uri_get_id ( $http_header ) ;
echo "id : $id" ;


// pour effacer rapidement par URL
// $browser->get("/personne/delete/$id") ;

// pour effacer la personne comme sur l'interface
$browser->get("/personne/edit/$id")->
  click ( 'Delete' ) ;


// verfier qu'il ne figure plus dans la liste
$browser->get("/personne/index")->
  checkResponseElement('body', "!/$test_username/" );

// */


/*
// $browser->get('/personne/show/1') ;

$browser->get('/personne/edit/1') ;

//$browser->get('/personne/index') ; 
$browser->get('/personne/index')-> 
  checkResponseElement('body', "!/$test_username/" );

// $browser->get('/personne/show/1') ;

$browser->get('/personne/create')->click ( 'Save' )  ;

$browser->get('/personne') ;
*/

?>

