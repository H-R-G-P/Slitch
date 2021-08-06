<?php

namespace App\Form;

use App\Entity\Languages;
use App\Entity\Stuff;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class StuffType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('yearOfIssue', IntegerType::class, [
                'constraints' => new Length([
                    'max' => 4,
                ])
            ])
            ->add('language', EntityType::class, [
                'class' => Languages::class,
                'choice_label' => 'name',
            ])
            ->add('type', EntityType::class, [
                'class' => \App\Entity\StuffType::class,
                'choice_label' => 'name',
            ])
            ->add('description')
            ->add('hasDelimiters', CheckboxType::class, [
                'label' => 'This text has sentence separator?',
                'required' => 'false',
            ])
            ->add('text', TextareaType::class, [
                'constraints' => [
                    new Length([
                        'max' => 1000000,
                        'maxMessage' => 'Cut text for performance reasons'
                    ]),
                    new NotBlank(),
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Stuff::class,
        ]);
    }
}
