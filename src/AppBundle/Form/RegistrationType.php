<?php

namespace AppBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use FOS\UserBundle\Util\LegacyFormHelper;

class RegistrationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $user = $options['data'];

        $builder
            ->add('imagenprofile',FileType::class,array(
                'multiple' => false,
                'required' => false,
                'label'    => false
            ))
            ->add('nombreCompleto',TextType::class, array('label'=> 'Nombre y apellidos'))
            ->add('username',TextType::class, array('label'=> 'Nombre de usuario','attr' => array(
                'value' => $user->getUsername()
            )))
            ->add('email',EmailType::class, array('label'=> 'Email','attr' => array(
                'value' => $user->getEmail()
            )))
            ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
                'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'Contraseña'),
                'second_options' => array('label' => 'Confirmar Contraseña'),
                'invalid_message' => 'fos_user.password.mismatch'))
            ->add('sexo', ChoiceType::class,array('choices' => array(
                'Hombre' => 'Hombre',
                'Mujer' => 'Mujer'
            )))
            ->add('provincia', EntityType::class, array(
                'label' => 'Provincia',
                'class' => 'AppBundle:Provincias',
                'choice_label' => 'Nombre',
            ))
            ->add('enabled',HiddenType::class,array('attr' => array('value' => 1)))
            ->add('tema',EntityType::class, array(
                'required'  => true,
                'label' => 'Provincia',
                'class' => 'AppBundle:Temas',
                'choice_label' => 'Nombre',
                'multiple' => TRUE,
                'expanded' => true
            ))
            ->add('save', SubmitType::class, array(
                'label' => '¡Registrate!',
                'attr' => array('class' => 'save'),
            ));

    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\User'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_user';
    }


}
