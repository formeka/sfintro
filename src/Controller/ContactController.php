<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ContactController 
{
    #[Route('/contact','contact')]
    public function index(): Response
    {
        return new Response('<html><body><h1>Contact</h1></body></html>');
    }


}