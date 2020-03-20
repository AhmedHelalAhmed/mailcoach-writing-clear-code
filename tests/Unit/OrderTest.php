<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use Tests\TestClasses\OrderFactory;

class OrderTest extends TestCase
{
    /** @test */
    public function it_can_ship()
    {
        $this->assertTrue(OrderFactory::create('Be','Valid')->ship());
    }
}
