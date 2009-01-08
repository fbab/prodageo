<?php

require_once 'Menu.php';


class MenuTest extends PHPUnit_Framework_TestCase
{
	
	private $menu;

	protected function setUp ()
	{
		$this->menu = new Menu(1,2,"Plat Nouille",4);
	}

	public function testTypePrix(){
		//test type prix = int	
		$this->assertType(int,$this->menu->getCurrentPrice());
	}    
	public function testTypePromo(){
		//test type promo = int	
		$this->assertType(int,$this->menu->getCurrentPromo());
	}    

	public function testTypePlat(){
		//test type plat = string	
		$this->assertType(string,$this->menu->getCurrentPlat());
	}    
	public function testTypeID(){
		//test type if = int	
		$this->assertType(int,$this->menu->getCurrentID());
	}  

	public function testPrix(){
		//test sur le prix positif	
		$this->assertTrue($this->menu->getCurrentPrice()>0);
	}
	public function testPromo(){
		//test sur promo <=100	
		$this->assertTrue($this->menu->getCurrentPromo()<=100);
	}
	public function testPlat(){
		//test sur plat contains "plat"	
		$this->assertContains("Plat",$this->menu->getCurrentPlat());
	}
	public function testID(){
		//test sur ID >0	
		$this->assertTrue($this->menu->getCurrentID()>0);
	}


	public function testMenu()
	{
		//Le prix du menu est il correctement initialisé ?
		$this->assertEquals($this->menu->getCurrentPrice(),1);
		//La promo du menu est il correctement initialisé ?
		$this->assertEquals($this->menu->getCurrentPromo(),2);
		//Le plat du menu est il correctement initialisé ?
		$this->assertEquals($this->menu->getCurrentPlat(),"Plat Nouille");
		//L'ID du menu est il correctement initialisé ?
		$this->assertEquals($this->menu->getCurrentID(),4);

	}



  


}
?>
