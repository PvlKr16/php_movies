<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class MoviesController extends AbstractController
{
    #[Route('/movie/{name}', name: 'movie', defaults: ['name' => null], methods:['GET', 'HEAD'])]
    public function movie($name): JsonResponse
    {
        return $this->json([
            # 'message' => 'Welcome to your new controller!',
            'message' => $name,
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }
    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        $movies = ["Avengers: Endgame", "Inception", "Loki", "Black Widow"];

        return $this->render('index.html.twig', array('movies' => $movies));
    }
}
