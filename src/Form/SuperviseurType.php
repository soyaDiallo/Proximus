<?php

namespace App\Form;

use App\Entity\Superviseur;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SuperviseurType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('id')
            ->add('email')
            ->add('roles')
            ->add('password')
            ->add('code')
            ->add('nom')
            ->add('prenom')
            ->add('login')
            ->add('tel')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Superviseur::class,
        ]);
    }
}
