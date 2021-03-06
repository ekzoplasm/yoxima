<?php

namespace Proxies\__CG__\yoxima\BlogBundle\Entity;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ORM. DO NOT EDIT THIS FILE.
 */
class Article extends \yoxima\BlogBundle\Entity\Article implements \Doctrine\ORM\Proxy\Proxy
{
    private $_entityPersister;
    private $_identifier;
    public $__isInitialized__ = false;
    public function __construct($entityPersister, $identifier)
    {
        $this->_entityPersister = $entityPersister;
        $this->_identifier = $identifier;
    }
    /** @private */
    public function __load()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;

            if (method_exists($this, "__wakeup")) {
                // call this after __isInitialized__to avoid infinite recursion
                // but before loading to emulate what ClassMetadata::newInstance()
                // provides.
                $this->__wakeup();
            }

            if ($this->_entityPersister->load($this->_identifier, $this) === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            unset($this->_entityPersister, $this->_identifier);
        }
    }

    /** @private */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int) $this->_identifier["id"];
        }
        $this->__load();
        return parent::getId();
    }

    public function setDate($date)
    {
        $this->__load();
        return parent::setDate($date);
    }

    public function getDate()
    {
        $this->__load();
        return parent::getDate();
    }

    public function setTitle($title)
    {
        $this->__load();
        return parent::setTitle($title);
    }

    public function getTitle()
    {
        $this->__load();
        return parent::getTitle();
    }

    public function setAuthor($author)
    {
        $this->__load();
        return parent::setAuthor($author);
    }

    public function getAuthor()
    {
        $this->__load();
        return parent::getAuthor();
    }

    public function setContent($content)
    {
        $this->__load();
        return parent::setContent($content);
    }

    public function getContent()
    {
        $this->__load();
        return parent::getContent();
    }

    public function setTest($test)
    {
        $this->__load();
        return parent::setTest($test);
    }

    public function getTest()
    {
        $this->__load();
        return parent::getTest();
    }

    public function setPublished($published)
    {
        $this->__load();
        return parent::setPublished($published);
    }

    public function getPublished()
    {
        $this->__load();
        return parent::getPublished();
    }

    public function setImage(\yoxima\BlogBundle\Entity\Image $image = NULL)
    {
        $this->__load();
        return parent::setImage($image);
    }

    public function getImage()
    {
        $this->__load();
        return parent::getImage();
    }

    public function addCategorie(\yoxima\BlogBundle\Entity\Category $categories)
    {
        $this->__load();
        return parent::addCategorie($categories);
    }

    public function removeCategorie(\yoxima\BlogBundle\Entity\Category $categories)
    {
        $this->__load();
        return parent::removeCategorie($categories);
    }

    public function getCategories()
    {
        $this->__load();
        return parent::getCategories();
    }

    public function addComment(\yoxima\BlogBundle\Entity\Comments $comments)
    {
        $this->__load();
        return parent::addComment($comments);
    }

    public function removeComment(\yoxima\BlogBundle\Entity\Comments $comments)
    {
        $this->__load();
        return parent::removeComment($comments);
    }

    public function getComments()
    {
        $this->__load();
        return parent::getComments();
    }

    public function setDateEdition($dateEdition)
    {
        $this->__load();
        return parent::setDateEdition($dateEdition);
    }

    public function getDateEdition()
    {
        $this->__load();
        return parent::getDateEdition();
    }

    public function updateDateEdition()
    {
        $this->__load();
        return parent::updateDateEdition();
    }

    public function getNbComments()
    {
        $this->__load();
        return parent::getNbComments();
    }

    public function setNbComments($nbComments)
    {
        $this->__load();
        return parent::setNbComments($nbComments);
    }

    public function setSlug($slug)
    {
        $this->__load();
        return parent::setSlug($slug);
    }

    public function getSlug()
    {
        $this->__load();
        return parent::getSlug();
    }


    public function __sleep()
    {
        return array('__isInitialized__', 'id', 'date', 'dateEdition', 'title', 'author', 'content', 'test', 'published', 'slug', 'image', 'categories', 'comments');
    }

    public function __clone()
    {
        if (!$this->__isInitialized__ && $this->_entityPersister) {
            $this->__isInitialized__ = true;
            $class = $this->_entityPersister->getClassMetadata();
            $original = $this->_entityPersister->load($this->_identifier);
            if ($original === null) {
                throw new \Doctrine\ORM\EntityNotFoundException();
            }
            foreach ($class->reflFields as $field => $reflProperty) {
                $reflProperty->setValue($this, $reflProperty->getValue($original));
            }
            unset($this->_entityPersister, $this->_identifier);
        }
        
    }
}