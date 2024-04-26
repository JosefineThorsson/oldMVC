<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MVCControllerJson extends AbstractController
{
    #[Route("api/", name: "api_home")]
    public function index(): Response
    {

        $routes = [
            'quote' => '/api/quote',
        ];

        return $this->render('api/index.html.twig', [
            'routes' => $routes,
        ]);
    }

    #[Route("api/quote", name: "api_quote")]
    public function getQuote(): Response
    {

        $quotes = [
            'The grass is greener on the other side',
            'There is no such thing as bad weather, only bad clothes',
            'I came, I saw, I won!',
        ];

        $randomIndex = array_rand($quotes);
        $randomQuote = $quotes[$randomIndex];

    // Hämta den aktuella tidszonen
    $timezone = new \DateTimeZone('Europe/Stockholm'); // Byt ut 'Europe/Stockholm' mot din tidszon

    // Skapa en DateTime-instans med den aktuella tidszonen
    $date = new \DateTime('now', $timezone);

        $response = [
            'quote' => $randomQuote,
            'date' => $date->format('Y-m-d'),
            'timestamp' => $date->format('H:i:s'),
        ];

        // return new JsonResponse($data);
        $jsonresponse = new JsonResponse($response);
        $jsonresponse->setEncodingOptions(
            $jsonresponse->getEncodingOptions() | JSON_PRETTY_PRINT
        );
        return $jsonresponse;
    }
}
