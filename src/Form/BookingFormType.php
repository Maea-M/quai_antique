<?php

namespace App\Form;

use App\Entity\Booking;
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
        ->add('guest', IntegerType::class, [
            'attr' => ['min' => 1, 'max' => 15],
        ] )
        ->add('date')
        ->add('hour',  TimeType::class,  [
            'label' => false, 
            'widget'=>'choice', 
            'placeholder'=>['hours'=>'Heure', 'minutes'=>'Minute'],
            'hours'=>[12, 13, 19 , 20, 21],
            'minutes'=>[00, 15, 30, 45]
        ]
        )
        ->add('allergy')
        ->add('name');

    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Booking::class,
        ]);
    }
}
