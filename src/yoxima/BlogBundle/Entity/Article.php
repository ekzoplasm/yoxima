<?php

namespace yoxima\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation\Slug as Gedmo;
/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="yoxima\BlogBundle\Entity\ArticleRepository")
 * @ORM\HasLifeCycleCallbacks()
 */
class Article
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_creation", type="datetime")
     */
    private $date;

    /**
     *
     * @var \DateTime
     * @ORM\Column(name="date_edition",type="datetime")
     */
    private $dateEdition;
    
    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="author", type="string", length=255)
     */
    private $author;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="test", type="json_array")
     */
    private $test;
    
    /**
     * @ORM\OneToOne(targetEntity="yoxima\BlogBundle\Entity\Image",cascade={"persist"})
     */
    private $image;
 
    /**
     * @ORM\ManyToMany(targetEntity="yoxima\BlogBundle\Entity\Category",cascade={"persist"})
     */
    private $categories;
    
    /**
     * @var boolean
     *
     * @ORM\Column(name="published", type="boolean")
    */
    private $published;
    
    /**
     * @ORM\OneToMany(targetEntity="yoxima\BlogBundle\Entity\Comments", mappedBy="article")
     */
    private $comments;
    
    /*
     * managed by events
     */
    private $nbComments;
    
    /**
     *
     * @var type 
     * @Gedmo\Slug(fields={"title"})
     * @ORM\Column(length=128,unique=true)
     */
    private $slug;
    
    public function __construct() {
        //default date is today
        $this->date = new \DateTime();
        $this->dateEdition = new \DateTime();
        $this->nbComments = 0;
        $this->published = true;
    }
    
    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Article
     */
    public function setTitle($title)
    {
        $this->title = $title;
    
        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set author
     *
     * @param string $author
     * @return Article
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return string 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set content
     *
     * @param string $content
     * @return Article
     */
    public function setContent($content)
    {
        $this->content = $content;
    
        return $this;
    }

    /**
     * Get content
     *
     * @return string 
     */
    public function getContent()
    {
        return $this->content;
    }
    

    /**
     * Set test
     *
     * @param array $test
     * @return Article
     */
    public function setTest($test)
    {
        $this->test = $test;
    
        return $this;
    }

    /**
     * Get test
     *
     * @return array 
     */
    public function getTest()
    {
        return $this->test;
    }

    /**
     * Set published
     *
     * @param boolean $published
     * @return Article
     */
    public function setPublished($published)
    {
        $this->published = $published;
    
        return $this;
    }

    /**
     * Get published
     *
     * @return boolean 
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * Set image
     *
     * @param \yoxima\BlogBundle\Entity\Image $image
     * @return Article
     */
    public function setImage(\yoxima\BlogBundle\Entity\Image $image = null)
    {
        $this->image = $image;
    
        return $this;
    }

    /**
     * Get image
     *
     * @return \yoxima\BlogBundle\Entity\Image 
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Add categories
     *
     * @param \yoxima\BlogBundle\Entity\Category $categories
     * @return Article
     */
    public function addCategorie(\yoxima\BlogBundle\Entity\Category $categories)
    {
        $this->categories[] = $categories;
    
        return $this;
    }

    /**
     * Remove categories
     *
     * @param \yoxima\BlogBundle\Entity\Category $categories
     */
    public function removeCategorie(\yoxima\BlogBundle\Entity\Category $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Add comments
     *
     * @param \yoxima\BlogBundle\Entity\Comments $comments
     * @return Article
     */
    public function addComment(\yoxima\BlogBundle\Entity\Comments $comments)
    {
        $this->comments[] = $comments;
        $comments->setArticle($this);
        return $this;
    }

    /**
     * Remove comments
     *
     * @param \yoxima\BlogBundle\Entity\Comments $comments
     */
    public function removeComment(\yoxima\BlogBundle\Entity\Comments $comments)
    {
        $this->comments->removeElement($comments);
    }

    /**
     * Get comments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set dateEdition
     *
     * @param \DateTime $dateEdition
     * @return Article
     */
    public function setDateEdition($dateEdition)
    {
        $this->dateEdition = $dateEdition;
    
        return $this;
    }

    /**
     * Get dateEdition
     *
     * @return \DateTime 
     */
    public function getDateEdition()
    {
        return $this->dateEdition;
    }
    
    /**
     * @ORM\PreUpdate
     */
    function updateDateEdition(){
        $this->setDateEdition(new \DateTime());
    }
    
    function getNbComments(){
        return $this->nbComments;
    }
    
    function setNbComments($nbComments){
        $this->nbComments = $nbComments;
    }

    /**
     * Set slug
     *
     * @param string $slug
     * @return Article
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
}