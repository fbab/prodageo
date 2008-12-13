<?php

// Set the include_path to include your generated OM 'classes' dir.
set_include_path("/home/fbaucher/orm_propel/build/classes" . PATH_SEPARATOR . get_include_path());

require_once 'propel/Propel.php';

Propel::init("/home/fbaucher/orm_propel/build/conf/bookstore-conf.php");

?>
