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
        $manager->persist($product);
        $product->setName('1-bdr apt.');
        $product->setPrice(14000);
        $product->setDescription('One bedroom appartment');
        $manager->flush();
    }
}
