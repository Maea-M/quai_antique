<?php

namespace App\Form;

use App\Entity\Booking;
use Doctrine\DBAL\Types\FloatType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class BookingFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        // rajouter une ligne pour le nom de la résevation à mapper dans la bdd, voir l'entité
        ->add('number_guest')
        ->add('date')
        ->add('hour')
        ->add('allergy')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}
