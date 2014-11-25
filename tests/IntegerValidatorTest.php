<?php


namespace Tests\IIMEhsan\Rendu_Master_POO;

use IIMEhsan\Rendu_Master_POO;

/**
 * Class IntegerRendu_Master_POOTest
 * @package Tests\IIMEhsan\Rendu_Master_POO
 */
class IntegerRendu_Master_POOTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testIsEqual()
    {
        $a = $b = 2;
        $expected = true;
        $test = Rendu_Master_POO\IntegerRendu_Master_POO::isEqual($a, $b);
        $this->assertEquals($expected, $test);
    }

    /**
     *
     */
    public function testIsSuperior()
    {
        $a = 10;
        $b = 5;
        $expected = true;
        $test = Rendu_Master_POO\IntegerRendu_Master_POO::isSuperior($a, $b);
        $this->assertEquals($expected, $test);
    }

    /**
     *
     */
    public function  testIsInferior()
    {
        $a = 5;
        $b = 10;
        $expected = true;
        $test = Rendu_Master_POO\IntegerRendu_Master_POO::isInferior($a, $b);
        $this->assertEquals($expected, $test);
    }

    /**
     *
     */
    public function testIsBetween()
    {
        $min = 1;
        $max = 10;
        $nb = 5;
        $expected = true;
        $test = Rendu_Master_POO\IntegerRendu_Master_POO::isBetween($nb, $min, $max);
        $this->assertEquals($expected, $test);
    }

    /**
     *
     */
    public function testIsNegative()
    {
        $nb = -5;
        $expected = true;
        $test = Rendu_Master_POO\IntegerRendu_Master_POO::isNegative($nb);
        $this->assertEquals($expected, $test);
    }

    /**
     *
     */
    public function testIsPositive()
    {
        $nb = 5;
        $expected = true;
        $test = Rendu_Master_POO\IntegerRendu_Master_POO::isPositive($nb);
        $this->assertEquals($expected, $test);
    }
} 