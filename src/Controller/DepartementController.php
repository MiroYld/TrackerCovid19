<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class DepartementController extends AbstractController
{
    /**
     * @Route("/departement", name="departement")
     */
    public function index(CallApiService $callApiService): Response
    {
        return $this->render('departement/index.html.twig', [
            'departements' => $callApiService->getDepData(),
        ]);
    }
}

