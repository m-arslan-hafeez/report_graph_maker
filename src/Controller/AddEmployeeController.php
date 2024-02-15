<?php

namespace App\Controller;

use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use App\Form\SaveEmployeeType;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\EmployeeInfo;

class AddEmployeeController extends AbstractController
{
    private $doctrine;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->doctrine = $doctrine;
    }
    /**
     * @Route("/add/employee", name="app_add_employee", methods={"GET", "POST"})
     */
    public function index(Request $request): Response
    {

        $employee = new EmployeeInfo();
        $form = $this->createForm(SaveEmployeeType::class, $employee);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->doctrine->getManager();
            $entityManager->persist($employee);
            $entityManager->flush();

            return $this->redirectToRoute('employee_success'); // Redirect to success page
        }

        return $this->render('add_employee/index.html.twig', [
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/employee/success", name="employee_success")
     */
    public function success(): Response
    {
        return new Response('Employee data saved successfully');
    }
}
