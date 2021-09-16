<?php


namespace App\Form;


use App\Dto\Texts;
use App\Entity\Languages;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class TextsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('texts', CollectionType::class, [
                'entry_type' => TextareaType::class,
                'entry_options' => [
                    'attr' => ['class' => 'text-field '],
                    'required' => false,
                    'label' => false,
                ],
                'allow_add' => true,
                'allow_delete' => true,
                'delete_empty' => true,
                'label' => false,
                'prototype' => '<textarea id="___name__" name="texts[texts][__name__]" class="text-field  form-control"></textarea>'
            ])
            ->add('language', EntityType::class, [
                'class' => Languages::class,
                'choice_label' => 'name',
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Texts::class,
        ]);
    }
}