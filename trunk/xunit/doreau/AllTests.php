<?php
require_once 'AscenseurTest.php';
require_once 'PersonneTest.php';

PHPUnit_Util_Filter::addFileToFilter(__FILE__);

class AllTests
{
    public static function main ()
    {
        PHPUnit_TextUI_TestRunner::run(self::suite());
    }
    
    public static function suite ()
    {
        $suite = new PHPUnit_Framework_TestSuite('Ma suite de tests');
        $suite->addTestSuite('AscenseurTest');
        $suite->addTestSuite('PersonneTest');
        return $suite;
    }
}

AllTests::main();
