<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class HomeController extends AbstractController
{
    /**
     * @Route("/home", name="app_home")
     */
    public function index(CallApiService $callApiService, ChartBuilderInterface $chartBuilder): Response
    {
        $total = $callApiService->getTotalByCountry();
        $totalByStatus = [];
        foreach ($total as $dailyTotal)
        {
            $totalByStatus['confirmed'][] = $dailyTotal['Confirmed'];
            $totalByStatus['deaths'][] = $dailyTotal['Deaths'];
            $totalByStatus['recovered'][] = $dailyTotal['Recovered'];
            $totalByStatus['active'][] = $dailyTotal['Active'];
        }

        $chart = $chartBuilder->createChart(Chart::TYPE_LINE);
        $chart
            ->setData([
                'labels' => array_keys($total),
                'datasets' => [
                    [
                        'label' => 'Confirmed',
                        'backgroundColor' => 'rgb(120, 161, 187, 0.5)',
                        'data' => $totalByStatus['confirmed']
                    ],
                    [
                        'label' => 'Death',
                        'backgroundColor' => 'rgb(219, 80, 74, 0.5)',
                        'data' => $totalByStatus['deaths']
                    ],
                    [
                        'label' => 'Recovered',
                        'backgroundColor' => 'rgb(147, 196, 139, 0.5)',
                        'data' => $totalByStatus['recovered']
                    ],
                    [
                        'label' => 'Active',
                        'backgroundColor' => 'rgb(252, 191, 73, 0.5)',
                        'data' => $totalByStatus['active']
                    ]
                ]
            ]);

        return $this->render('home/index.html.twig', [
            'data' => $callApiService->getFranceData(),
            'chart' => $chart,
        ]);
    }
}

