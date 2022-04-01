<?php

namespace App\Tests\Unit\Entity;

use PHPUnit\Framework\TestCase;
use App\Entity\Product;


class ProductTest extends TestCase
{
    private $product;
    
    /**
     * Sets up the fixture.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->product = new Product();
    }

    public function testGetterAndSetter() {

        $this->assertNull($this->product->getId());

        $name = uniqid('test_product-', true);
        $price = rand(1, 1000);
        $description = 'Just some description';

        $this->product->setName($name);
        $this->assertEquals($name, $this->product->getName());

        $this->product->setPrice($price);
        $this->assertEquals($price, $this->product->getPrice());

        $this->product->setDescription($description);
        $this->assertEquals($description, $this->product->getDescription());
    }
}