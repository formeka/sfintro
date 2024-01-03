<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DefaultController 
{
    #[Route('/')]
    public function index(): Response
    {
        return new Response('Bonne année !');
    }

    #[Route('/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);
        return new Response($number);
    }
}