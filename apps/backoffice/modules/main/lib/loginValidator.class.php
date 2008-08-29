<?php

class loginValidator extends sfValidatorBase
{
  public function configure($options = array(), $messages = array())
  {
    $this->setMessage('invalid', 'Identification erronée');
  }

  public function doClean($values)
  {
    /*if ($user = AdminPeer::getByLogin($values['login']))
    {
      $salt = substr(strtoupper($values['login']), 0, 2);

      if ($user->getPassword() == crypt($values['password'], $salt)true)
      {
        $values['user'] = $user;
        return $values;
      }
    }*/
    echo 'j\'y suis'/*$values['login']*/;
    if($values['login']=='hello'){
         echo $values['login'];
         $values['user'] = $values['login'];
    }
    throw new sfValidatorError($this, 'invalid');
  }
} 
