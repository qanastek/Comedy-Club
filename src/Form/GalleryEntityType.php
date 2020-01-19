<?php

namespace App\Form;

use App\Entity\GalleryEntity;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class GalleryEntityType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', TextType::class, [
                'label' => 'Name',
                'label_attr' => [
                    'class' => 'mt-3'
                ],
                'required' => false,
                'attr' => [
                    'placeholder' => 'Enter the name of the image',
                    'class' => 'form-control mt-1'
                ]
            ])
            ->add('category')
            ->add('image', FileType::class, [
                'label' => 'Image',
                'label_attr' => [
                    'class' => 'mt-3'
                ],
                'data_class' => null,
                'required' => true,
                'attr' => [
                    'class' => 'form-control-file mt-1'
                ],
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => GalleryEntity::class,
        ]);
    }
}
