<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Project;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\Forms;
use Symfony\Component\Form\Form;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Doctrine\Common\Persistence\ObjectManager;
use App\Form\ProjectType;
use Doctrine\ORM\EntityManager;
use App\Entity\User;


class PortfolioController extends AbstractController
{
    
    //page of the all projects in a database

    /**
     * @Route("/projects", name="projets")
     */
    public function index()
    {
        $projet = $this->getDoctrine()->getRepository(Project::class);
        $projets = $projet->findAll();
        return $this->render('portfolio/article.html.twig',[
            'projets' => $projets
        ]);
    }

    //home page

    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('portfolio/home.html.twig',[
            'title' => "Bienvenue sur mon Port-Folio.",
        ]);
    }

    // add a new project in the website

    /**
     * @Route("/projet/new", name="addNew")
     */
        public function formProject(Project $project = null, Request $request, ObjectManager $Manager){
            if(!$project){
                $project = new Project();
            }       

            $form = $this->createForm(ProjectType::class, $project); 

            $form->handleRequest($request);          

            if ($form->isSubmitted() && $form->isValid()){                     
                // ... perform some action, such as saving the task to the database             
                // for example, if Task is a Doctrine entity, save it!             
                // $entityManager = $this->getDoctrine()->getManager();          
                $Manager->persist($project);          
                $Manager->flush();
                return $this->redirectToRoute('projets');
            }
            return $this->render('portfolio/add.html.twig',[
                'formProject' => $form->createView(),         
                ]);
            }
            /**
             * @Route("/admin", name="admin")
             */
            public function admin(){
                $user = $this->getUser();
            
                return $this->render('portfolio/admin.html.twig',[
                    'user' => $user,
                ]);

            }
            /**
             * @Route("/moi", name="profile")
             */
            public function profile(){
                $user = $this->getUser();
                return $this->render('portfolio/profile.html.twig',[
                    'user' => $user,
                ]);
            }
}