<?php

namespace App\Tests\Unit\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class ProductControllerTest extends WebTestCase
{
    public function testSomething(): void
    {
        $client = static::createClient();
        $client->request('GET', '/product/');

        $this->assertResponseIsSuccessful();

        // $this->assertTrue(true);
    }
}
