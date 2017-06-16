<?php

namespace AppBundle\Form;

use AppBundle\Entity\Imagenes;
use AppBundle\Entity\Temas;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\RadioType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
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
            ->add('titulo',TextType::class,array('label' => false,
                'attr' => array(
                    'placeholder'=> 'Titulo'
                )))
            ->add('descripcion',TextareaType::class,array('label'=> false,
                'attr' => array(
                    'class' => 'floatLabel',
                    'id' => 'pub-post',
                    'name' => 'pub-post',
                    'placeholder' => 'Descripción'
            )))
            ->add('tema',EntityType::class, array(
                'label' => false,
                'class' => 'AppBundle:Temas',
                'choice_label' => 'nombre',
                'multiple' => false,
            ))
            ->add('imagen',FileType::class,array(
                'multiple' => true,
                'label' => false,
                'attr' => array(
                    'class' => 'photofile'
                )
            ))
            ->add('save',SubmitType::class,array(
                'label'=>'¡Cuéntalo!',
                'attr'=> array(
                    'class' => 'publicarpost'
            )));
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
