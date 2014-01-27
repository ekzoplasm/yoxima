<?php
// src/yoxima/BlogBundle/Controller/BlogController.php

namespace yoxima\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use yoxima\BlogBundle\Entity\Article;
use yoxima\BlogBundle\Entity\Image;
use yoxima\BlogBundle\Entity\Comments;
use yoxima\BlogBundle\Entity\Skill;
use yoxima\BlogBundle\Entity\ArticleSkill;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller{
	public function indexAction($page,$_format){
            //$text = 'test https://toto.com/t test http://toto.com/g test http://toto.com/o test http://toto.com/s, t@ff.com  g@lulu.com';
            //$antispam = $this->get('yoxima_blog.antispam');
            
            //preg_match_all('#(http|https|ftp)://([A-Z0-9][A-Z0-9_-]*(?:.[A-Z0-9][A-Z0-9_-]*)+):?(d+)?/?#i', $text,$matches);
            //echo count($matches[0]);
            //print_r($matches[0]);
            //if($antispam->isSpam($text)){
            //    throw new \Exception('Ce message est considéré comme spam !');
            //}
            /*
            $host='localhost'; // le chemin vers le serveur
$port='3306';
$bd='symfony'; // le nom de votre base de données
$user='root'; // nom d'utilisateur pour se connecter
$pass=''; // mot de passe de l'utilisateur pour se connecter
$conn = new \PDO('mysql:host='.$host.';port='.$port.';dbname='.$bd, $user, $pass);
$pdoStatement = $conn->query('select * from article');
             * while( ($resObj = $pdoStatement->fetch(\PDO::FETCH_LAZY)) != null ){
    echo $resObj->id ."<br/>";
    echo $resObj->title ."<br/>";
}
*/



//var_dump($results);

/*reach($results as $result){
        echo $result->id ."<br/>";
        echo $result->title."<br/>";
}          
  */          
           // $percent = $this->get("yoxima_blog.percentutil");
           // echo $percent->getPercentReduction(250,70)."%";
		if($page < 1){
			throw $this->createNotFoundException('Page introuvable : page '. $page);
		}
		$params = array('articles' => array(
                    array(
                        'id' => 1,
                        'titre' => 'Les choux de bruxelles',
                        'author' => 'Gerald Van Cauwenberghe',
                        'contenu' => 'Voici comment cultiver ce légume bla bla bla',
                        'date' => new \Datetime()
                    ),
                    array(
                        'id' => 2,
                        'titre' => 'La tielle',
                        'author' => 'Louis Ravin',
                        'contenu' => 'Voici comment bien préparer une tielle bla bla bla',
                        'date' => new \Datetime()
                    )
                ));
               $em = $this->getDoctrine()->getManager();
               $articles = $em->getRepository('yoximaBlogBundle:Article')->getArticleAndComments();//myFindAll();
               /*
               $articles = $em->getRepository('yoximaBlogBundle:Article')->getWithCategories(array('Doctrine2','Tutoriel','Evènement'));//myFindAll(); 
               foreach($articles as $art){
                   echo $art->getTitle().'<br/>';
            
                   foreach($art->getCategories() as $cat){
                       echo '-- '. $cat->getName();
                   }
               }
if(!is_null($articles[0]->getDateEdition())){
   // $t = new \DateTime();
    
               echo '<br/>updateDate : '.date('d m y', $articles[0]->getDateEdition()->getTimeStamp());
               $articles[0]->setTitle('Change date');
               $em->flush();
}
                //echo count($articles->getComments());
                *
                */
		return $this->render("yoximaBlogBundle:Blog:index.html.twig",$params);
        }

	public function viewAction($id){
            $em = $this->getDoctrine()->getManager();
            $article = $em->getRepository('yoximaBlogBundle:Article')->find($id);
            if($article === null){
                throw $this->createNotFoundException("L'article ". $id ." est introuvable !");
            }
            $comments = $em->getRepository("yoximaBlogBundle:Comments")->findAll();
            $params = array(
                'article' => $article,
                'comments' => $comments
            );        
/*
            $artSkill = $em->getRepository('yoximaBlogBundle:ArticleSkill')->findByArticle($id);
                        $params = array(
                'article' => $article,
                'comments' => $comments,
                'level' => $article->getNbComments(),
                'artskills' => $artSkill            
            );
  */                     
            return $this->render("yoximaBlogBundle:Blog:view.html.twig",$params);
	}
        
        public function addAction(){
            $article = new Article();
            $formBuilder = $this->createFormBuilder($article);
            $formBuilder
                    ->add('title','text')
                    ->add('content','textarea')
                    ->add('author','text')
                    ->add('published','checkbox')
                    ->add('test','textarea');
            $form = $formBuilder->getForm();
            $req = $this->getRequest();
            if($req->getMethod() == 'POST'){
                $form->bind($req);
                if($form->isValid()){
                    $em = $this->getDoctrine()->getManager();
                    $em->persist($article);
                    $em->flush();
                    return $this->redirect($this->generateUrl('yoxima_blog_view',array('id' => $article->getId())));
                }
            }
            
            
            /*
            $article->setTitle('Test de mise en base');
            $article->setAuthor('john doe');
            $article->setContent("Ceci est l'histoire de la mise en base d'un contenu.
                Incroyable !");
            $t = array('prenoms' => array('top'=>'Fabrice','medium'=>"Eric l'acrobate",'last'=>'Robert'),'noms'=>array('top'=>'Dupont','medium'=>'Durand','last'=>'Blanc'));
            $article->setTest(json_encode($t));
            $image = new Image();
            
            $image->setUrl('http://symfony.com/images/common/logo/logo_symfony_header.png');
            $image->setAlt('Logo Symfony');
            $article->setImage($image);
            $comment = new Comments();
            $comment->setAuthor('Roy');
            $comment->setContent('Cette histoire est formidable ! Encore une svp.');
            $comment->setArticle($article);
            $em = $this->getDoctrine()->getManager();
            //$repository_article =  $em->getRepository('yoximaBlogBundle:Article');
            $em->persist($article);
            $em->persist($comment);
            $em->flush();
            $article_skill = $em->getRepository("yoximaBlogBundle:Skill")->findAll();
            foreach($article_skill as $i=> $artsk){                
               $articleskill[$i] = new ArticleSkill();
               $articleskill[$i]->setArticle($article);
               $articleskill[$i]->setSkill($artsk);
               $articleskill[$i]->setLevel(Skill::MEDIUM);
               $em->persist($articleskill[$i]);
            }  
            $em->flush();
            */
            
            return $this->render("yoximaBlogBundle:Blog:add.html.twig",array('article' => $article,'form' => $form->createView()));
        }
        
        public function editAction($id){
            $em = $this->getDoctrine()->getManager();
            $article = $em->getRepository('yoximaBlogBundle:Article')->find($id);
            if($article === null){
                throw $this->createNotFoundException('Article '. $id .' introuvable !');
            }
            $list_cat = $em->getRepository('yoximaBlogBundle:Category')->findAll();
            foreach($list_cat as $cat){                
                if(!$article->getCategories()->contains($cat)){
                    $article->addCategorie($cat);
                }
            }

            $em->flush();
            return $this->render("yoximaBlogBundle:Blog:edit.html.twig",array('article' => $article));
        }
        
        public function delAction($id){
                $params = array('article' => array(
                        'id' => 1,
                        'titre' => 'Les choux de bruxelles',
                        'author' => 'Gerald Van Cauwenberghe',
                        'contenu' => 'Voici comment cultiver ce légume bla bla bla',
                        'date' => new \Datetime()
                    )
                );
            return $this->render("yoximaBlogBundle:Blog:del.html.twig",$params);
        }
        
        public function menuAction($nb){
            $liste = array(
                array('id' => 7, 'titre' => 'Le big bang'),
                array('id' => 8, 'titre' => 'La renaissance'),
                array('id' => 9, 'titre' => 'La royauté'),
                );
            return $this->render('yoximaBlogBundle:Blog:menu.html.twig',array('liste_articles' => $liste));
        }
}
