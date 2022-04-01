<?php 

namespace App\Tests\Controller;

use PHPUnit\Framework\TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

use App\Entity\Product;
use App\Repository\ProductRepository;


/*
use App\Tests\Support\CsrfTokenManager;
use App\Tests\Support\Database;
use App\Tests\Support\HttpClient;
use App\Tests\Support\Kernel;
use App\Tests\Support\Router
*/

final class ProductControllerTest extends WebTestCase
{
    // use Kernel, CsrfTokenManager, HttpClient, Router, Database;

    public function testSomething(): void
    {
        // Test product_is_saved_in_database_when_submitted_valid_form
        
        $client = static::createClient();
        $client->request('GET', '/product');

        /******** FIX THIS */
        $name = 'cde'; // uniqid('product_add_test_', true);
        $price = rand(1, 1000);
        $client->request('POST', '/product/new', [ // $client->request(Request::METHOD_POST, $this->generateUrl('app_product_new'), [
            'name' => $name,
            'price' => $price,
            'description' => 'desc',
        ]);
        /*************** */

        $response = $client->getResponse();
        echo $response->getStatusCode();
        // $this->assertResponseIsSuccessful();

        
        $productRepository = static::getContainer()->get(ProductRepository::class); // $this->entityManager->getRepository(Product::class);

        $product = $productRepository->findOneByName($name);

        // $this->assertEquals($price, $product->getPrice());
        // $this->assertSame(302, $response->getStatusCode());
        // $this->assertSame($response->getTargetUrl(), $this->generateUrl('product_show', ['id' => $product->getId()]));
        

        $this->assertTrue($productRepository->findOneBy(['name' => 'cde']) != null);
        
    }
}



