<?php

class AscenseurException {

    private $_message;	

    public function __construct($_message)
    {
        $this->_message = $_message;
    } 

    public function getMessage(){
	return $this->_message;
    }

    public function __toString()
    {
        echo "Erreur : ". $this->getMessage();
    }
}

?>