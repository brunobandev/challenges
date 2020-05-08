<?php

namespace Challenge\Test;

use Challenge\FooBar\FooBar;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
class FooBarTest extends TestCase
{
    public function testShouldReturnFooIfIsMultiplyByThree(): void
    {
        $foobar = new FooBar();
        $result = $foobar->check(15, [3 => 'Foo']);

        $this->assertEquals('Foo', $result);
    }

    public function testShouldReturnBarIfIsMultiplyByFive(): void
    {
        $foobar = new FooBar();
        $result = $foobar->check(15, [5 => 'Bar']);

        $this->assertEquals('Bar', $result);
    }

    public function testShouldReturnFoobuzzIfIsMultiplyByThreeAndFive(): void
    {
        $foobar = new FooBar();
        $result = $foobar->check(15, [5 => 'Bar', 3 => 'Foo']);

        $this->assertEquals('FooBar', $result);
    }

    public function testShouldReturnYourselfIfNotMultiplyByThreeOrFive(): void
    {
        $foobar = new FooBar();
        $number = 7;
        $result = $foobar->check($number, [5 => 'Bar', 3 => 'Foo']);

        $this->assertEquals($number, $result);
    }
}
