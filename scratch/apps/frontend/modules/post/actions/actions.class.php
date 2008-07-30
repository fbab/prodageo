<?php

/**
 * post actions.
 *
 * @package    scratch
 * @subpackage post
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 8507 2008-04-17 17:32:20Z fabien $
 */
class postActions extends sfActions
{
  public function executeIndex()
  {
    $this->postList = PostPeer::doSelect(new Criteria());
  }

  public function executeShow($request)
  {
    $this->post = PostPeer::retrieveByPk($request->getParameter('id'));
    $this->forward404Unless($this->post);
  }

  public function executeCreate()
  {
    $this->form = new PostForm();

    $this->setTemplate('edit');
  }

  public function executeEdit($request)
  {
    $this->form = new PostForm(PostPeer::retrieveByPk($request->getParameter('id')));
  }

  public function executeUpdate($request)
  {
    $this->forward404Unless($request->isMethod('post'));

    $this->form = new PostForm(PostPeer::retrieveByPk($request->getParameter('id')));

    $this->form->bind($request->getParameter('post'));
    if ($this->form->isValid())
    {
      $post = $this->form->save();

      $this->redirect('post/edit?id='.$post->getId());
    }

    $this->setTemplate('edit');
  }

  public function executeDelete($request)
  {
    $this->forward404Unless($post = PostPeer::retrieveByPk($request->getParameter('id')));

    $post->delete();

    $this->redirect('post/index');
  }
}
