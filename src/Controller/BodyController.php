<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BodyController extends AbstractController
{
    /**
     * @Route("/body", name="body")
     */
    public function index()
    {
        return $this->render('body.html.twig', [
            'controller_name' => 'BodyController',
        ]);
    }

    /**
     * @Route("/body/form", name="body_part")
     */
    public function part()
    {

        return $this->redirectToRoute('medical_record');
    }

}
