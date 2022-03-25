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
        $productRepository = $entityManager->getRepository('App\Entity\Product');
        $products = $productRepository->findAll();
        
        $s = '';
        foreach ($products as $product) {
            $s = $s . sprintf("<li><a href='description?id=" . $product->getId() . "'>%s</a>", $product->getName());
        }

        return new Response(
            '<html><body>List: '. $s . '</body></html>'
        );
    }
}