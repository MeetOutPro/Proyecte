<?php

namespace AppBundle\Form;

use AppBundle\Entity\Provincias;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\ButtonType;
use FOS\UserBundle\Util\LegacyFormHelper;

class RegistrationType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

        $builder
            ->add('nombreCompleto',TextType::class, array('label'=> 'Nombre y apellidos'))
            ->add('username',TextType::class, array('label'=> 'Nombre de usuario'))
            ->add('email',EmailType::class, array('label'=> 'Email'))
            ->add('plainPassword', LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\RepeatedType'), array(
                'type' => LegacyFormHelper::getType('Symfony\Component\Form\Extension\Core\Type\PasswordType'),
                'options' => array('translation_domain' => 'FOSUserBundle'),
                'first_options' => array('label' => 'Contraseña'),
                'second_options' => array('label' => 'Confirmar Contraseña'),
                'invalid_message' => 'fos_user.password.mismatch'))
            ->add('imagen', FileType::class,array('label' => 'Foto de perfil'))
            ->add('sexo', ChoiceType::class,array('choices' => array(
                'Hombre' => 'Hombre',
                'Mujer' => 'Mujer'
            )))
            ->add('provincia', EntityType::class, array(
                'label' => 'Elige tu provincia',
                'class' => 'AppBundle:Provincias',
                'choice_label' => 'Nombre',
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
