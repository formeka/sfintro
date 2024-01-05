<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EmployeeController extends AbstractController
{
    #[Route('/employee', name: 'app_employee')]
    public function index(): Response
    {
        $employees = [
            [
                'Name' => 'Jane Doe',
                'Age' => 34,
                'Email' => 'jd@gmail.com'
            ],
            [
                'Name' => 'Jane Doe2',
                'Age' => 24,
                'Email' => 'jd2@gmail.com'
            ],
            [
                'Name' => 'Jane Doe3',
                'Age' => 45,
                'Email' => 'jd2@gmail.com'
            ]
        ];
        
        return $this->render('employee/index.html.twig', [
            'employees' => $employees,
            'title' => 'Liste des employés'
        ]);
    }
}
