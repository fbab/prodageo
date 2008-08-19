<?php

// $http_header : we receive en array built by sfWebResponse->getHttpHeader
// return the last part of the uri
// uri_get_id ( '/web/get/id/23' ) returns 23
function uri_get_id ( $http_header )
{
	foreach ( $http_header as $cle => $valeur )
	{
	  // TO DO : check that the key Location is present in the array
	  // echo "$cle = $valeur\n" ;
	}

	$location = $http_header["Location"] ;
	echo "location : $location" ;

	$explosion = explode ( "/" , $location ) ;
	$id = $explosion [ count ( $explosion ) - 1 ] ;

  	return $id ;
}

?>

