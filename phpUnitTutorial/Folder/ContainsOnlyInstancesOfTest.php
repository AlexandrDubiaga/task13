<?php
class ContainsOnlyInstancesOfTest extends PHPUnit_Framework_TestCase
{
    public function testFailure()
    {
        $this->assertContainsOnlyInstancesOf('Std', array(new StdClass(), new StdClass(), new StdClass()));
    }
}
?>