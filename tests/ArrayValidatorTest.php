<?php


namespace Tests\IIMEhsan\Rendu_Master_POO;
use IIMEhsan\Rendu_Master_POO;
class ArrayRendu_Master_POOTest extends \PHPUnit_Framework_TestCase
{
    public function testIsEmpty()
    {
        $array = array();
        $test = Rendu_Master_POO\ArrayRendu_Master_POO::isEmpty($array);
        $this->assertTrue($test);
    }
    public function testNumberElements()
    {
        $array = array('item1', 'item2', 'item3');
        $expected = 3;
        $test = Rendu_Master_POO\ArrayRendu_Master_POO::numberElements($array);
        $this->assertEquals($expected, $test);
    }
    public function testKeyExists()
    {
        $array = array('key1' => 'item1', 'key2' => 'item2');
        $key = 'key2';
        $test = Rendu_Master_POO\ArrayRendu_Master_POO::keyExists($array, $key);
        $this->assertTrue($test);
    }
    public function testValueExists()
    {
        $array = array('key1' => 'item1', 'key2' => 'item2');
        $value = 'item1';
        $test = Rendu_Master_POO\ArrayRendu_Master_POO::valueExists($array, $value);
        $this->assertTrue($test);
    }
} 