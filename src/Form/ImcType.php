<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class ImcType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('poids', IntegerType::class,[
                'label'=>'Votre Poids',
                'constraints'=> new Length(2, 2, 3),
                'attr'=>[
                    'placeholder'=>'Merci de saisir votre poids en kg içi'
                ]
            ])

            ->add('taille', IntegerType::class,[
                'label'=>'Votre taille',
                'constraints'=>new Length(3),
                'attr'=>[
                    'placeholder'=>'Merci de saisir votre taille en cm içi'
    ]
            ])
            ->add('submit', SubmitType::class, [
                'label'=>'calculer'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
