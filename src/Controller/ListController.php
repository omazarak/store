<?php
// src/Controller/ListController.php
namespace App\Controller;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

// require_once "../../bootstrap.php";

class ListController extends AbstractController
{
    public function number(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $productRepository = $entityManager->getRepository('Product');
        $products = $productRepository->findAll();
        
        foreach ($products as $product) {
            echo sprintf("-%s\n", $product->getName());
        }

        return new Response(
            '<html><body>List number: '.$number.'</body></html>'
        );
    }
}