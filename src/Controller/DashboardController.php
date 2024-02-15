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
        $employeesByCityData = $employeeRepository->findEmployeesByCityData();
        $employeesByMonthlySalaryData = $employeeRepository->findEmployeesByMonthlySalaryData();
        $employeesByJoiningDateData = $employeeRepository->findEmployeesByJoiningDateData();
        $employeesByDepartmentData = $employeeRepository->findEmployeesByDepartmentData();
        $employeesByRoleData2 = $employeeRepository->findEmployeesByRoleData();
        $employeesByTeamLeadData = $employeeRepository->findEmployeesByTeamLeadData();
        $employeesByOvertimeData = $employeeRepository->findEmployeesByOvertimeData();
        $employeesByAllowedLeavesData = $employeeRepository->findEmployeesByAllowedLeavesData();

        return $this->render('dashboard/index.html.twig', [
            'employeesByCityData' => json_encode($employeesByCityData),
            'employeesByMonthlySalaryData' => json_encode($employeesByMonthlySalaryData),
            'employeesByJoiningDateData' => json_encode($employeesByJoiningDateData),
            'employeesByDepartmentData' => json_encode($employeesByDepartmentData),
            'employeesByRoleData' => json_encode($employeesByRoleData2),
            'employeesByTeamLeadData' => json_encode($employeesByTeamLeadData),
            'employeesByOvertimeData' => json_encode($employeesByOvertimeData),
            'employeesByAllowedLeavesData' => json_encode($employeesByAllowedLeavesData),

        ]);
    }
}
