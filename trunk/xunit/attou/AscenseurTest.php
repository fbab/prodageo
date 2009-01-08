<?php
require_once '../library/Ascenseur.php';

class AscenseurTest extends PHPUnit_Framework_TestCase
{
    private $ascenseur;

    protected function setUp()
    {
        $this->ascenseur = new Ascenseur('ascenseur 1', 3);
    }
    
    public function testAscenseurInitialise()
    {
        $this->assertEquals($this->ascenseur->getName(), 'ascenseur 1'); // véfions le nom de l'ascenseur
        $this->assertEquals(3, $this->ascenseur->getEtage()); // véfions l'ége de l'ascenseur
        $this->assertTrue($this->ascenseur->isEmpty()); // véfions que l'ascenseur est vide
    }
    
    public function testAscenseurBouge()
    {
        $this->ascenseur->go(8); // Faisons aller l'ascenseur à'ége 8
        $this->assertEquals(8, $this->ascenseur->getEtage()); // Interrogeons l'ascenseur au sujet de son ége, la rénse doit êe 8
        $this->ascenseur->go(-9.9); 
        $this->assertEquals(9, $this->ascenseur->getEtage());
        $this->ascenseur->go(2);
        $this->assertEquals(2, $this->ascenseur->getEtage());
    }

    public function testAscenseurMonteUnPeuTropHautEchoue()
    {
        $this->setExpectedException('AscenseurException'); // Nous nous attendons àne exception par la suite
        $this->ascenseur->go(200);  // Faisons aller l'ascenseur à'ége 200, irréiste
    }
}
?>
