<?php


namespace Tests\IIMEhsan\Rendu_Master_POO;
use IIMEhsan\Rendu_Master_POO;

/**
 * Class BooleanRendu_Master_POOTest
 * @package Tests\IIMEhsan\Rendu_Master_POO
 */
class BooleanRendu_Master_POOTest extends \PHPUnit_Framework_TestCase
{
    /**
     *
     */
    public function testIsTrue()
    {
        $boolean = true;
        $test = Rendu_Master_POO\BooleanRendu_Master_POO::isTrue($boolean);

        $this->assertEquals($boolean, $test);
    }

    /**
     *
     */
    public function testIsFalse()
    {
        $boolean = false;
        $test = Rendu_Master_POO\BooleanRendu_Master_POO::isFalse($boolean);

        $this->assertEquals(true, $test);
    }
} 