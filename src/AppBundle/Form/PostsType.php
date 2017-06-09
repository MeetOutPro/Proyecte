<?php

namespace AppBundle\Form;

use AppBundle\Entity\Imagenes;
use AppBundle\Entity\Temas;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PostsType extends AbstractType
{


    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titulo')
            ->add('descripcion',TextareaType::class,array('attr' => array(
                'class' => 'floatLabel',
                'id' => 'pub-post',
                'name' => 'pub-post'
            )))
            ->add('tema',EntityType::class, array(
                'class' => 'AppBundle:Temas',
                'choice_label' => 'id',
                'multiple' => false,
                'expanded' => true
            ))
            ->add('imagen',FileType::class,array(
                'multiple' => true,
                'label' => false,
            ));
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Posts'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_posts';
    }


}
