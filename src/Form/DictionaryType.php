<?php

namespace App\Form;

use App\Entity\Dictionary;
use App\Entity\PareOfWords;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class DictionaryType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('stuff')
            ->add('pairs_of_words', CollectionType::class, [
                'entry_type' => PareOfWords::class,
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Dictionary::class,
        ]);
    }
}
