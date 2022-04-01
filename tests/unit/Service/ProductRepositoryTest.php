<?php

namespace App\Tests\Unit\Service;


use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

use App\Entity\Product;
use App\Repository\ProductRepository;
use App\DataFixtures\ProductFixture;

class ProductRepositoryTest extends KernelTestCase
{
    public function testAddSavesANewRecordIntoTheDatabase()
    {
        // Arrange
        $product1 = ProductFixture::generate();
        $product2 = ProductFixture::generate();

        self::bootKernel();
        $container = static::getContainer();

        $repository = $container->get(ProductRepository::class);

        // Act
        $repository->add($product1);
        $repository->add($product2);

        // Assert
        $records = $repository->findAll();
        $this->assertEquals(2, count($records));

        $name = $product1->getName();
        $this->assertEquals($name, $repository->findOneByName($name)->getName());
    }
}
