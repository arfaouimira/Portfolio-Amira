<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioDetailsController extends AbstractController
{
    /**
     * @Route("/portfolio/details", name="app_portfolio_details")
     */
    public function index(): Response
    {
        return $this->render('portfolio_details/index.html.twig', [
            'controller_name' => 'PortfolioDetailsController',
        ]);
    }
}
