<?php

namespace Phortitude\Test;

use PHPUnit_Framework_TestCase;

abstract class AbstractTestCase extends PHPUnit_Framework_TestCase
{
    /**
     * @var array
     */
    protected $testFixtures = array();

    protected function tearDown()
    {
        $this->testFixtures = array();
    }
}
