<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\Project;
class ProjetFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for($i = 1; $i<=10; $i++){
            $projet = new Project();
            $projet->setname("Nom du projet n°$i")
                    ->setdescription("Description du projet n°$i");
        $manager->persist($projet);
                }

        $manager->flush();
    }
}
