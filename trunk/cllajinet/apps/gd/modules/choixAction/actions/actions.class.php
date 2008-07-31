<?php

/**
 * choixAction actions.
 *
 * @package    cllajinet
 * @subpackage choixAction
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 9301 2008-05-27 01:08:46Z dwhittle $
 */
class choixActionActions extends sfActions
{
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex($request)
  {
    $this->setTemplate('index');
  }
}
