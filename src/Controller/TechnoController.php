<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TechnoController extends AbstractController
{
    /**
     * @Route("/", name="techno_home")
     */
    public function home(): Response
    {
        return $this->render('techno/index.html.twig', [
            'controller_name' => 'TechnoController',
        ]);
    }
}
