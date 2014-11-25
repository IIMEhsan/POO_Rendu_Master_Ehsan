<?php

namespace Tests\IIMEhsan\Rendu_Master_POO;
use IIMEhsan\Rendu_Master_POO;
class StringRendu_Master_POOTest extends \PHPUnit_Framework_TestCase
{
    public function testLengthIsEqualTo()
    {
        $string = 'Test Chaîne de Charactère';
        $expected = mb_strlen($string);
        $test = Rendu_Master_POO\StringRendu_Master_POO::lengthIsEqualTo($string, $expected);
        $this->assertTrue($test);
    }
    public function testLengthIsSuperiorTo()
    {
        $string = 'test';
        $nb = 3;
        $test = Rendu_Master_POO\StringRendu_Master_POO::lengthIsSuperiorTo($string, $nb);
        $this->assertTrue($test);
    }
    public function testLengthIsInferiorTo()
    {
        $string = 'test';
        $nb = 10;
        $test = Rendu_Master_POO\StringRendu_Master_POO::lengthIsInferiorTo($string, $nb);
        $this->assertTrue($test);
    }
    public function testLengthBetween()
    {
        $string = 'test';
        $min = 1;
        $max = 10;
        $test = Rendu_Master_POO\StringVRendu_Master_POO::lengthBetween($string, $min, $max);
        $this->assertTrue($test);
    }
    public function testNoWhiteSpaceBeginAndEnd()
    {
        $string = 'No space';
        $test = Rendu_Master_POO\StringRendu_Master_POO::noWhiteSpaceBeginAndEnd($string);
        $this->assertTrue($test);
    }
    public function testNoWhiteSpace()
    {
        $string = 'noSpaceHere';
        $test = Rendu_Master_POO\StringRendu_Master_POO::noWhiteSpace($string);
        $this->assertTrue($test);
    }
} 