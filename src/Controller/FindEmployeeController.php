<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FindEmployeeController extends AbstractController
{
    #[Route('/find/employee', name: 'app_find_employee')]
    public function index(): Response
    {
        return $this->render('find_employee/index.html.twig', [
            'controller_name' => 'FindEmployeeController',
        ]);
    }
}
