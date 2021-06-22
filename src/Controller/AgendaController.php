<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AgendaController extends AbstractController
{
    /**
     * @Route("/agenda", name="techno_agenda")
     */
    public function index(): Response
    {
        return $this->render('techno/agenda.html.twig', [
            'controller_name' => 'AgendaController',
        ]);
    }
}
