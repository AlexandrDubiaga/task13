<?php
/**
 * Created by PhpStorm.
 * User: kentavr
 * Date: 18.08.2017
 * Time: 9:59
 */

namespace phpUnitTutorial\Test;


class StupidTest extends \PHPUnit_Framework_TestCase
{
    public function testTrueIsTrue()
    {
        $foo = true;
        $this->assertTrue($foo);
    }
}