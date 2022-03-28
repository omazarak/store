<?php

namespace App\Controller;

use App\Entity\Product;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MyProductController extends AbstractController
{
    #[Route('/view/{id}')]
    public function by_id(Product $product): Response   // id -> Product "param converter" by sensio/framework-extra-bundle
    {
        return $this->render('product.html.twig', [
            'id' => $product->getId(),
            'name' => htmlspecialchars($product->getName(), \ENT_COMPAT | \ENT_HTML5),
        ]);
    }
}