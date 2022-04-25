<?php

namespace App\Form;

use App\Entity\Position;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class PositionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('idEtoile')
            ->add('raHour')
            ->add('raMin')
            ->add('raSec')
            ->add('decDeg')
            ->add('decMin')
            ->add('decSec')
            ->add('magnitude')
            ->add('longitude')
            ->add('lattitude')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Position::class,
        ]);
    }
}
