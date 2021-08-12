<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SchoolController extends AbstractController
{
    /**
     * @Route("/school", name="school")
     */
    public function index(): Response
    {
        return $this->render('school/index.html.twig', [
            'controller_name' => 'SchoolController',
        ]);
    }
    /**
     * @Route("/about",name="about")
     */
    public function about(): Response 
    {
        return $this->render('school/about.html.twig');
    }
    /**
     * @Route("/dashboard",name="dashboard")
     */
    public function dashboard(): Response
    {
        return $this->render('school/dashboard.html.twig');
    }
}
