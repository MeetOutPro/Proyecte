<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class QuedadasType extends AbstractType
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
            ->add('fechaQuedada',DateTimeType::class,array(
                'widget' => 'single_text',
                'attr' => array(
                'placeholder' => 'Fecha del Evento',
                'class'       => 'datepicker'
            )))
            ->add('lugar',TextType::class,array('label' => false,
                    'attr' => array(
                        'placeholder'=> 'Lugar'
                    )))
            ->add('municipio', EntityType::class, array(
                    'label' => 'Provincia',
                    'class' => 'AppBundle:Provincias',
                    'choice_label' => 'Nombre',
            ))
            ->add('imagen',FileType::class,array(
                'multiple' => true,
                'label' => false,
                'attr' => array(
                    'class' => 'photofile'
                )
            ))
            ->add('save',SubmitType::class,array(
                'label'=>'¡Crear Evento!',
                'attr'=> array(
                    'class' => 'publicarpost'
                )));;
    }
    
    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\Quedadas'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_quedadas';
    }


}
