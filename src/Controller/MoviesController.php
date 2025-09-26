<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class MoviesController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em)
    {
        $this->em = $em;
    }
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
    #[Route('/movies_new', name: 'movies_new')]
    public function index_new(): Response
    {
        $repository = $this->em->getRepository(Movie::class);
        $movies = $repository->findAll();
        # dd($movies);
        return $this->render('index.html.twig', array('movies' => $movies));
    }
}
