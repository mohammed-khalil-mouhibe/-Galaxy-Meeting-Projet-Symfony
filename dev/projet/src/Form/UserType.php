<?php

namespace App\Form;


use App\Entity\User;
use phpDocumentor\Reflection\Types\String_;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\ChoiceList;


class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('username')
            ->add('password')
            ->add('nomPrenom')
            ->add('Roles',ChoiceType::class, [
                'required' => true,
                'multiple' => true,
                'choices' => [
                    'Utilisateur' => 'ROLE_USER',
                    'Administrateur' => 'ROLE_ADMIN',

                ],])

            ->add('numTele')
            ->add('genre',ChoiceType::class, [
                'required' => true,
                'multiple' => false,
                'choices' => [
                    'Homme' => 'homme',
                    'Femme' => 'femme',
                    'Autre' => 'autre',

                ],])
            ->add('dateNaissance')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
