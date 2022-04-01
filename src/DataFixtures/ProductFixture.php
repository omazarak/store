<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $product = new Product();

        $name = uniqid('test_product-', true);
        $price = rand(1, 1000);

        $product->setName($name);
        $product->setPrice($price);
        
        $manager->persist($product);
        $manager->flush();
    }

    public static function generate(): Product
    {
        $product = new Product();

        $name = uniqid('test_product-', true);
        $price = rand(1, 1000);

        $product->setName($name);
        $product->setPrice($price);
        
        return $product;
    }

}
