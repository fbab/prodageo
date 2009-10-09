<?php
/* initialize Propel, etc. */

include ( 'init.php' ) ;

$author = new Author();
$author->setFirstName("Jack");
$author->setLastName("London1");
$author->save();

$c = new Criteria();
$c->add(AuthorPeer::FIRST_NAME, "Jack");
$i = BookPeer::doCount($c);
print $i . "\n" ;

?>
