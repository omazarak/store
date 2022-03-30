<?php 

namespace App\Tests\Unit\Controller;

use App\Entity\Product;
use PHPUnit\Framework\TestCase;

final class ProductControllerTest extends TestCase
{
    public function test(): void
    {
        $stack = [];
        $this->assertSame(0, count($stack));
    }
}



