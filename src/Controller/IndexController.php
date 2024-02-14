<?php

namespace App\Controller;

use App\Entity\EmployeeInfo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Doctrine\Persistence\ManagerRegistry;

class IndexController extends AbstractController
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    #[Route('/', name: 'app_index')]
    public function index(): Response
    {
        // Access Doctrine using $this->doctrine
        $entityManager = $this->doctrine->getManager()
            ->getRepository(EmployeeInfo::class)
            ->findAll();
        return $this->render('index/index.html.twig', [
            'employees' => $entityManager,
        ]);
    }
}
