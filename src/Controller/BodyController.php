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
     * @Route("/body/1", name="body_clk")
     */
    public function clk()
    {
        return $this->render('body.html.twig', [
            'controller_name' => 'BodyController',
        ]);
    }

}
