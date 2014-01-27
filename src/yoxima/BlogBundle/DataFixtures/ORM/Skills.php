<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Skills
 *
 * @author Fabrice
 */
//src/Sdz/BlogBundle/DataFixtures/ORM/Categories.php
namespace yoxima\BlogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use yoxima\BlogBundle\Entity\Skill;

class Skills implements FixtureInterface {
    public function load(ObjectManager $manager){
        $names = array('Symfony2','Doctrine2','Twig');
        foreach($names as $i => $name){
            $list_skills[$i] = new Skill();
            $list_skills[$i]->setName($name);
            $manager->persist($list_skills[$i]);
        }
        $manager->flush();
    }
}

