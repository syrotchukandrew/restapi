<?php

/*
 * This file is part of the Restapi.
 */

namespace App\Form;

use App\Entity\VirtualState;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * Class VirtualStateType
 */
class VirtualStateType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ip', TextType::class)
            ->add('lg', TextType::class, [
                'property_path' => 'language',
            ])
            ->add('rf', TextType::class, [
                'property_path' => 'reference',
            ])
            ->add('ua', TextType::class, [
                 'property_path' => 'userAgent',
            ]);
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => VirtualState::class,
            'csrf_protection' => false,
        ]);
    }
}
