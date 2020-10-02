<?php

use PHPUnit\Framework\TestCase;

/**
 * Class ComparisonTest
 */
class ComparisonTest extends TestCase
{
    public function test_相等(): void
    {
        // arrange
        $comparison = new App\Comparison;

        // act
        $result = $comparison->isEquals(1, 1);

        // assert
        $this->assertTrue($result);
    }

    public function test_大於(): void
    {
        // arrange
        $comparison = new App\Comparison;

        // act
        // assert
        $this->assertTrue($comparison->isGreaterThan(5, 3));
        $this->assertFalse($comparison->isGreaterThan(4, 4));
    }

    public function test_小於(): void
    {
        // arrange
        $comparison = new App\Comparison;

        // act
        // assert
        $this->assertTrue($comparison->isSmallerThan(3, 5));
        $this->assertFalse($comparison->isSmallerThan(4, 4));
    }
}
