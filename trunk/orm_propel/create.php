<?php
/* initialize Propel, etc. */

include ( 'init.php' ) ;

$author = new Author();
$author->setFirstName("Jack");
$author->setLastName("London");
$author->save();

?>
