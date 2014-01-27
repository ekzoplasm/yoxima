<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categories
 *
 * @author Fabrice
 */
//src/Sdz/BlogBundle/DataFixtures/ORM/Categories.php
namespace yoxima\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use yoxima\BlogBundle\Entity\Category;

class Categories implements FixtureInterface {
    public function load(ObjectManager $manager){
        $names = array('Symfony2','Doctrine2','Tutoriel','Evènement');
        foreach($names as $i => $name){
            $list_categories[$i] = new Category();
            $list_categories[$i]->setName($name);
            $manager->persist($list_categories[$i]);
        }
        $manager->flush();
    }
}

