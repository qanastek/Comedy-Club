<?php

namespace App\Form;

use App\Entity\Website;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WebsiteType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('description')
            ->add('motto')
            ->add('favicon')
            ->add('logo')
            ->add('cover_home')
            ->add('company_name')
            ->add('phone_contact')
            ->add('phone_book')
            ->add('email')
            ->add('location_informations')
            ->add('facebook_url')
            ->add('instagram_url')
            ->add('twitter_url')
            ->add('terms_of_use')
            ->add('location')
            ->add('currency')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Website::class,
        ]);
    }
}
