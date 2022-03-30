<?php

namespace App\Controller;

use App\Entity\Product;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ListController extends AbstractController
{
    #[Route('/')]
    public function view(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        $productRepository = $entityManager->getRepository('App\Entity\Product');
        $products = $productRepository->findAll();
        
        $results = [];
        foreach ($products as $product) {
            $results[] = [
                'id' => $product->getId(),
                'name' => htmlspecialchars($product->getName(), \ENT_COMPAT | \ENT_HTML5),
            ];
        }
        return $this->render('list.html.twig', array('products' => $results));
        // return $this->json($results);
    }
}