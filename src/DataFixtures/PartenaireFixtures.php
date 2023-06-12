<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Partenaire;

class PartenaireFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $partenaire = new Partenaire();
        $partenaire->setName('Super U');
        $partenaire->setLink('https://www.magasins-u.com/accueil');
        $manager->persist($partenaire);

        $manager->flush();
    }
}
