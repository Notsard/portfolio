<?php

namespace App\Form;

use App\Entity\Project;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\Extension\Core\Type\UrlType;

class ProjectType extends AbstractType
{

    //create a new form for add new project

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('Name', TextType::class, ['attr' => [
                'placeholder' => "Titre du projet",
                'class' => "form-control"
            ]])
            ->add('Description',TextareaType::class, ['attr'=> [
                'placeholder' => "Description du projet",
                'class' => "form-control"
            ]])
            ->add('lien', UrlType::class, [
                'attr' => [
                    'placeholder' => "Lien du projet",
                    'class' => "form-control"
                ]
            ])
        ;
    }

    //function 
    
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Project::class,
        ]);
    }
}
