<?php
require_once 'PHPUnit/Framework.php';
// un changement pour amorcer xinc
// (cf http://www.toosweettobesour.com/2008/05/15/automating-the-development-workflow/)
// encore un autre
// encore un autre
// encore un autre a 22h37
// encore un autre a 22h56
 
class ArrayTest extends PHPUnit_Framework_TestCase
{
    public function testNewArrayIsEmpty()
    {
        // Create the Array fixture.
        $fixture = array();
 
        // Assert that the size of the Array fixture is 0.
        $this->assertEquals(0, sizeof($fixture));
    }
 
    public function testArrayContainsAnElement()
    {
        // Create the Array fixture.
        $fixture = array();
 
        // Add an element to the Array fixture.
        $fixture[] = 'Element';
        $fixture[] = 'Element0';
 
        // Assert that the size of the Array fixture is 1.
        $this->assertEquals(1, sizeof($fixture));
    }
}
?>
