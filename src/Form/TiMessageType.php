<?php

/*
 * This file is part of the Restapi.
 */

namespace App\Form;

use App\Entity\TiMessage;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Valid;

/**
 * Class TiMessageType
 */
class TiMessageType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('cid', TextType::class, [
                'property_path' => 'clientId',
            ])
            ->add('url', TextType::class)
            ->add('sid', TextType::class, [
                'property_path' => 'sessionId',
            ])
            ->add('uid', TextType::class, [
                'property_path' => 'userId',
            ])
            ->add('vst', VirtualStateType::class, [
                'property_path' => 'virtualState',
                'constraints' => [
                    new Valid(),
                ],
            ])
        ;
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => TiMessage::class,
            'csrf_protection' => false,
        ]);
    }
}
