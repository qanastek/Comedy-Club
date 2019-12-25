<?php

namespace App\Form;

use App\Entity\Artist;
use App\Entity\Event;
use App\Entity\Location;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EventType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title', TextType::class, [
                'label' => 'Name',
                'label_attr' => [
                    'class' => 'mt-3'
                ],
                'required' => true,
                'attr' => [
                    'placeholder' => 'Enter the name of the event',
                    'class' => 'form-control mt-1'
                ]
            ])
            ->add('description', TextareaType::class, [
                'label' => 'Description',
                'label_attr' => [
                    'class' => 'mt-3'
                ],
                'required' => true,
                'attr' => [
                    'placeholder' => 'Enter the description of the event',
                    'class' => 'form-control mt-1'
                ]
            ])
            ->add('prix', MoneyType::class, [
                'label' => 'Booking price in ',
                'label_attr' => [
                    'class' => 'mt-3'
                ],
                'required' => true,
                'attr' => [
                    'class' => 'form-control mt-1'
                ]
            ])
            ->add('date', DateTimeType::class, [
                'label' => 'Date of start',
                'label_attr' => [
                    'class' => 'mt-3'
                ],
                'required' => true,
                'html5' => true,
                'widget' => 'single_text',
                'attr' => [
                    'class' => 'form-control mt-1'
                ]
            ])
            ->add('image', FileType::class, [
                'label' => 'Thumbnail',
                'label_attr' => [
                    'class' => 'mt-3'
                ],
                'data_class' => null,
                'required' => true,
                'attr' => [
                    'class' => 'form-control-file mt-1'
                ],
            ])
            ->add('ticket_url', UrlType::class, [
                'label' => 'URL to the booking platform',
                'label_attr' => [
                    'class' => 'mt-3'
                ],
                'required' => true,
                'attr' => [
                    'placeholder' => 'Enter the booking URL',
                    'class' => 'form-control mt-1'
                ]
            ])
            ->add('seats', NumberType::class, [
                'label' => 'Number of seats available',
                'label_attr' => [
                    'class' => 'mt-3'
                ],
                'required' => true,
                'attr' => [
                    'placeholder' => 'Enter the number of seats availables for the event',
                    'class' => 'form-control mt-1'
                ]
            ])
            // ->add('artists')
            ->add('artists')
            ->add('location', EntityType::class, [
                'class' => Location::class,
                'choice_label' => 'displayName',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Event::class,
        ]);
    }
}
