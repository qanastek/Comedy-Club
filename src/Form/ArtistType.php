<?php

namespace App\Form;

use App\Entity\Artist;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ArtistType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
        ->add('name', TextType::class, [
            'required' => true,
            'attr' => [
                'placeholder' => 'Enter the name of the artist',
                'class' => 'form-control'
            ]
        ])
        ->add('description', TextareaType::class, [
            'required' => false,
            'attr' => [
                'placeholder' => 'Enter the description of the artist',
                'class' => 'form-control'
            ]
        ])
        ->add('facebook_url', UrlType::class, [
            'required' => false,
            'attr' => [
                'placeholder' => 'https://www.facebook.com/zuck',
                'class' => 'form-control'
            ]
        ])
        ->add('instagram_url', UrlType::class, [
            'required' => false,
            'attr' => [
                'placeholder' => 'https://www.instagram.com/zuck/',
                'class' => 'form-control'
            ]
        ])
        ->add('twitter_url', UrlType::class, [
            'required' => false,
            'attr' => [
                'placeholder' => 'https://twitter.com/jack',
                'class' => 'form-control'
            ]
        ])
        ->add('image', FileType::class, [
            'data_class' => null,
            'required' => true,
            'attr' => [
                'class' => 'form-control-file'
            ],
        ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Artist::class,
        ]);
    }
}
