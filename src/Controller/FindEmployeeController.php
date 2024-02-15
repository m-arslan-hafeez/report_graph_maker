<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\EmployeeInfo;

class FindEmployeeController extends AbstractController
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }

    #[Route('/find/employee', name: 'app_find_employee', methods: "GET")]
    public function index(Request $request): Response
    {
        $search = $request->query->get('search');
        $employees = [];

        if ($search) {
            $employees = $this->doctrine->getManager()
                ->getRepository(EmployeeInfo::class)
                ->createQueryBuilder('e')
                ->where('e.employeeName LIKE :search')
                ->setParameter('search', '%' . $search . '%')
                ->getQuery()
                ->getResult();
            }
            return $this->render('find_employee/index.html.twig', [
                'employees' => $employees,
            ]);
        }
}
