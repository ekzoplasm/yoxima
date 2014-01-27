<?php

namespace yoxima\BlogBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleSkill
 * @ORM\Table(name="articleskill")
 * @ORM\Entity
 */
class ArticleSkill
{
    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="yoxima\BlogBundle\Entity\Article")
     */
    private $article;

    /**
     * @ORM\Id
     * @ORM\ManyToOne(targetEntity="yoxima\BlogBundle\Entity\Skill")
     */
    private $skill;

    /**
     * @ORM\Column()
     */
    private $level;


    /**
     * Set article
     *
     * @param string $article
     * @return ArticleSkill
     */
    public function setArticle($article)
    {
        $this->article = $article;
    
        return $this;
    }

    /**
     * Get article
     *
     * @return string 
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * Set skill
     *
     * @param string $skill
     * @return ArticleSkill
     */
    public function setSkill($skill)
    {
        $this->skill = $skill;
    
        return $this;
    }

    /**
     * Get skill
     *
     * @return string 
     */
    public function getSkill()
    {
        return $this->skill;
    }

    /**
     * Set level
     *
     * @param string $level
     * @return ArticleSkill
     */
    public function setLevel($level)
    {
        $this->level = $level;
    
        return $this;
    }

    /**
     * Get level
     *
     * @return string 
     */
    public function getLevel()
    {
        return $this->level;
    }
}