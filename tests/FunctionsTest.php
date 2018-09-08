<?php

namespace Test\CodeInBB;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{

    public function testSumOfOddNumbers()
    {
        $this->assertEquals(9, sumOfOddNumbers(1,2,3,4,5,6));

    }

}