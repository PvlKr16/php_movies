<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class MoviesController extends AbstractController
{
//    #[Route('/movies/{name}', name: 'movies', defaults: ['name' => null], methods:['GET', 'HEAD'])]
//    public function index($name): JsonResponse
//    {
//        return $this->json([
//            # 'message' => 'Welcome to your new controller!',
//            'message' => $name,
//            'path' => 'src/Controller/MoviesController.php',
//        ]);
//    }
    #[Route('/movies', name: 'movies')]
    public function index(): Response
    {
        return $this->render('index.html.twig', [
            'title' => '',
        ]);
    }
}
