<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

final class MoviesController extends AbstractController
{
    #[Route('/movies/{name}', name: 'movies', defaults: ['name' => null], methods:['GET', 'HEAD'])]
    public function index($name): JsonResponse
    {
        return $this->json([
            # 'message' => 'Welcome to your new controller!',
            'message' => $name,
            'path' => 'src/Controller/MoviesController.php',
        ]);
    }
}
