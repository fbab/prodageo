<?php
require_once './Page.php';

 class PageTest extends PHPUnit_Framework_TestCase
{ 
    public function testOutput()
    {
        $page = new Page();
        $this->assertEquals('<h1>Page output1</h1>',$page->getOutput());
    }
}
