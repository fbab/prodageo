<?php

/**
 * comment actions.
 *
 * @package    scratch
 * @subpackage comment
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class commentActions extends sfActions
{
  public function executeIndex()
  {
    $this->commentList = CommentPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->comment = CommentPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->comment);
  }

  public function executeCreate()
  {
    $this->form = new CommentForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new CommentForm(CommentPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new CommentForm(CommentPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('comment'));
    if ($this->form->isValid())
    {
      $comment = $this->form->save();

      $this->redirect('comment/edit?id='.$comment->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($comment = CommentPeer::retrieveByPk($request->getParameter('id')));

    $comment->delete();

    $this->redirect('comment/index');
  }
}
