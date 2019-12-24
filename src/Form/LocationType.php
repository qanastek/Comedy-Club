<?php

namespace App\Form;

use App\Entity\Location;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class LocationType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name',
                'label_attr' => [
                    'class' => 'mt-3'
                ],
                'required' => true,
                'attr' => [
                    'placeholder' => 'Enter the name of the location',
                    'class' => 'form-control mt-1'
                ]
            ])
            ->add('address', TextType::class, [
                'label' => 'Address',
                'label_attr' => [
                    'class' => 'mt-3'
                ],
                'required' => true,
                'attr' => [
                    'placeholder' => 'Enter the address of the location',
                    'class' => 'form-control mt-1'
                ]
            ])
            ->add('latitude', NumberType::class, [
                'label' => 'Latitude',
                'label_attr' => [
                    'class' => 'mt-3'
                ],
                'required' => false,
                'attr' => [
                    'placeholder' => 'Enter the latitude of the location',
                    'class' => 'form-control mt-1'
                ]
            ])
            ->add('longitude', NumberType::class, [
                'label' => 'Longitude',
                'label_attr' => [
                    'class' => 'mt-3'
                ],
                'required' => false,
                'attr' => [
                    'placeholder' => 'Enter the longitude of the location',
                    'class' => 'form-control mt-1'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Location::class,
        ]);
    }
}
