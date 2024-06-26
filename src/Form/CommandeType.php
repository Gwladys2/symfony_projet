<?php

namespace App\Form;

use App\Entity\Adress;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class CommandeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $user=$options['user'];
        $builder
            ->add('addresses', EntityType::class,[
            'label'=>'Choisissez votre adresse de livraison',
                'required'=>true,
                'class'=>Adress::class,
                'choices'=>$user->getAdresses(),
                'multiple'=>false,
                'expanded'=>true

            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'user'=>array()
            // Configure your form options here
        ]);
    }
}
