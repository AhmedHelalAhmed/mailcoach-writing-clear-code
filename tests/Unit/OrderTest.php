<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Tests\TestClasses\OrderFactory;

/**
 * Class OrderTest
 * @package Tests\Unit
 * save states of the code by this tests
 * Assume we have
 * 1- all countries has just two letters.
 * 2- status just Valid and Invalid.
 * this to keep it simple
 */
class OrderTest extends TestCase
{
    /** @test */
    public function it_can_ship()
    {
        $this->assertTrue(OrderFactory::create('Be', 'Valid')->ship());
        $this->assertFalse(OrderFactory::create('Be', 'Invalid')->ship());

        $this->assertFalse(OrderFactory::create('GB', 'Valid')->ship());
        $this->assertFalse(OrderFactory::create('GB', 'Invalid')->ship());

        // some special cases
        $this->assertFalse(OrderFactory::create('', '')->ship());
    }
}
