<?php

namespace App\Form;

use App\Entity\Booking;
use Doctrine\DBAL\Types\FloatType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TimeType;

class BookingFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
        // rajouter une ligne pour le nom de la résevation à mapper dans la bdd, voir l'entité
        ->add('name')
        ->add('number_guest')
        ->add('date')
        ->add('hour',  TimeType::class,  [
            'label' => false, 
            'widget'=>'choice', 
            'placeholder'=>['hour'=>'Heure', 'minute'=>'Minute'],
            'hours'=>[12, 13, 19 , 20, 21],
            'minutes'=>[00, 15, 30, 45]
        ]
        )
        ->add('allergy');
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}
