<?php

namespace App\Form;

use App\Entity\Adress;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class AdressType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('name', TextType::class,[
                'label'=>'Quel nom souhaitez vous donner à votre adresse?',
                'attr'=>[
                    'placeholder'=>'Nommez votre adresse içi'
                ]
            ])
            ->add('firstname', TextType::class,[
                'label'=>'Votre prénom',
                'attr'=>[
                    'placeholder'=>'Saisissez votre prénom içi'
                ]
            ])
            ->add('lastname', TextType::class,[
                'label'=>'Votre nom',
                'attr'=>[
                    'placeholder'=>'Saisissez votre nom içi'
                ]
            ])
            ->add('company', TextType::class,[
                'label'=>'Votre entreprise',
                'required'=>false,
                'attr'=>[
                    'placeholder'=>'(falcutatif) Saisissez le nom de votre entreprise içi'
                ]
            ])
            ->add('address', TextType::class,[
                'label'=>'Votre adresse',
                'attr'=>[
                    'placeholder'=>'Saisissez votre adresse içi'
                ]
            ])
            ->add('postal', TextType::class,[
                'label'=>'Votre code postal',
                'attr'=>[
                    'placeholder'=>'Saisissez votre code postal'
                ]
            ])
            ->add('city', TextType::class,[
                'label'=>'Votre ville',
                'attr'=>[
                    'placeholder'=>'Saisissez votre ville içi'
                ]
            ])
            ->add('country', CountryType::class,[
                'label'=>'Votre pays',
                'attr'=>[
                    'placeholder'=>'Saisissez votre pays içi'
                ]
            ])
            ->add('phone', TelType::class,[
                'label'=>'Votre téléphone',
                'attr'=>[
                    'placeholder'=>'Saisissez votre téléphone içi'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label'=>'Ajouter mon addresse',
                'attr'=>[
                    'class'=>'btn-block btn-info'
                ]
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Adress::class,
        ]);
    }
}
