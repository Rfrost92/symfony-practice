<?php

namespace App\DataFixtures;

use App\Entity\Item;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ItemFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        // $product = new Product();
        // $manager->persist($product);

        for ($i = 0; $i<100; $i++) {
            $item = new Item();
            $item->setName('MyItem' . $i);
            $item->setSortOrder($i);
            $manager->persist($item);
        }

        $manager->flush();
    }
}
