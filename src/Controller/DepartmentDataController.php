<?php

namespace App\Controller;

use App\Entity\EmployeeInfo;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class DepartmentDataController extends AbstractController
{
    private $doctrine;
    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    #[Route('/department/{department}', name: 'app_department_data')]
    public function index($department): Response
    {
        // Access Doctrine using $this->doctrine
        $entityManager = $this->doctrine->getManager()
            ->getRepository(EmployeeInfo::class)
            ->findBy(['departmentName' => $department]);
        return $this->render('department_data/index.html.twig', [
            'employees' => $entityManager,
            'department' => $department,
        ]);
    }
}
