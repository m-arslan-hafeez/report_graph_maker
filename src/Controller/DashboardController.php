<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Repository\EmployeeInfoRepository;

class DashboardController extends AbstractController
{
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(EmployeeInfoRepository $employeeRepository): Response
    {
        $employeesByCityData = $employeeRepository->getEmployeesByCityData();
        // Fetch other data as needed...

        return $this->render('dashboard/index.html.twig', [
            'employeesByCityData' => json_encode($employeesByCityData),
            // Pass other data to the template...
        ]);
    }
}
