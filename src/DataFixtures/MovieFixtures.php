<?php

namespace App\DataFixtures;

use App\Entity\Movie;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class MovieFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $movie1 = new Movie();
        $movie1->setTitle("The Dark Knight");
        $movie1->setDescription("The Dark Knight is a great movie");
        $movie1->setReleaseYear(2008);
        $movie1->setImagePath('https://cdn.pixabay.com/photo/2024/02/22/19/46/ai-generated-8590746_1280.png');
        $manager->persist($movie1);

        $movie2 = new Movie();
        $movie2->setTitle("Avengers: Endgame");
        $movie2->setDescription("Avengers: Endgame is a great movie");
        $movie2->setReleaseYear(2019);
        $movie2->setImagePath('https://cdn.pixabay.com/photo/2024/02/22/19/46/ai-generated-8590746_1280.png');
        $manager->persist($movie2);

        $manager->flush();

    }
}
