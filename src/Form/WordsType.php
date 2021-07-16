<?php

namespace App\Form;

use App\Dto\Words;
use App\Entity\Languages;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class WordsType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('language', EntityType::class, [
                'class' => Languages::class,
                'choice_label' => 'name',
            ])
            ->add('learnedWords', TextareaType::class, [
                'required' => false,
            ])
            ->add('untranslatableWords', TextareaType::class, [
                'required' => false,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Words::class,
        ]);
    }
}
