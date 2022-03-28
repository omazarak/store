<?php
// src/Controller/ProductController.php
namespace App\Controller;

use App\Entity\Product;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class ProductController extends AbstractController
{
    #[Route('/view/{id}')]
    public function by_id(Product $product): Response
    {
        return $this->render('product.html.twig', [
            'id' => $product->getId(),
            'name' => htmlspecialchars($product->getName(), \ENT_COMPAT | \ENT_HTML5),
        ]);
    }
}