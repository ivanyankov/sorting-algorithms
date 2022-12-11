<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Sort;

final class SortTest extends TestCase
{
    public function testInsertion() : void
    {
        $data = [3,2,1,7,4,5,6,9,8,10];
        $sorted = [1,2,3,4,5,6,7,8,9,10];

        $this->assertIsArray(Sort::insertion($data));
        $this->assertCount(count($data), Sort::insertion($data));
        $this->assertEqualsCanonicalizing($sorted, Sort::insertion($data));
    }
}