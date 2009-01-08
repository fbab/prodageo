<?php

require_once 'Enchere.php';
require_once 'Personne.php';

class EnchereTest extends PHPUnit_Framework_TestCase
{
	
	private $enchere;

	protected function setUp ()
	{
		$this->enchere = new Enchere(10,new Personne("Julien"));
	}
    
	public function testEnchereInitialise()
	{
		//Le montant initial de l'enchère est-il correctement initialisé ?
		$this->assertEquals($this->enchere->getCurrentPrice(),10);

		//La pesronne qui emporte l'enchère est-elle correctement initialisée ?
		$this->assertEquals("Julien",$this->enchere->getCurrentPersonne()->getName());
	}

	public function testEncherir(){
		$this->enchere->encherir(20,new Personne("Fred"));
		
		//Le montant de l'enchère est-il correctement mis à jour ?
		$this->assertEquals(20,$this->enchere->getCurrentPrice());

		//La personne qui emporte l'enchère est-elle correctement mise à jour ?
		$this->assertEquals("Fred",$this->enchere->getCurrentPersonne()->getName());
	}

	public function testSousEncherir(){
		//Une exception EnchereException doit être retournée
		$this->setExpectedException("EcnhereException");
		$this->enchere->encherir(9,new Personne("Fred"));
	}

	public function testEnchereCount(){
		$this->enchere->encherir(11,new Personne("Frederic"));
		$this->enchere->encherir(12,new Personne("Pierrick"));
		$this->enchere->encherir(13,new Personne("Julien"));
		$this->enchere->encherir(14,new Personne("Fred"));
		$this->enchere->encherir(15,new Personne("Julien"));
		$this->enchere->encherir(16,new Personne("Pierrick"));

		$this->assertEquals(7,$this->enchere->getCount());
	}

	public function testEnchereAverage(){
		$this->enchere->encherir(12,new Personne("Frederic"));
		$this->enchere->encherir(14,new Personne("Pierrick"));
		//$this->enchere->encherir(16,new Personne("Julien"));
		//$this->enchere->encherir(18,new Personne("Fred"));
		//$this->enchere->encherir(20,new Personne("Julien"));
		//$this->enchere->encherir(22,new Personne("Pierrick"));

		//Le montant de la surEnchere moyenne est-il correct ?
		$this->assertEquals(2,$this->enchere->getAverage());
	}
}
