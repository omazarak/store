<?php
// src/Controller/DescriptionController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DescriptionController extends AbstractController
{
    public function by_number(): Response
    {
        $number = random_int(0, 100);

        return $this->render('description.html.twig', [
            'number' => $number,
        ]);
    }
}