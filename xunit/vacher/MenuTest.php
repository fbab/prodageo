<?php

require_once 'Menu.php';


class MenuTest extends PHPUnit_Framework_TestCase
{
	
	private $menu;

	protected function setUp ()
	{
		$this->menu = new Menu(1,2,3,4);
	}

	public function testPrixMenu()
	{
		//Le prix du menu est il correctement initialisé ?
		$this->assertEquals($this->menu->getCurrentPrice(),1);
	}
    
}
?>
