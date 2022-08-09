<?php

namespace App\Form;

use App\Entity\User;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class RegisterType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('lastname', TextType::class, [
                'label'=>'Votre nom',
                'constraints'=>new Length (3,3,20 ),
                'attr'=>[
                    'placeholder'=>'Merci de saisir votre nom'
                ]
            ])
            ->add('firstname', TextType::class, [
                'label'=>'Votre prénom',
                'constraints'=>new Length (3,3,20 ),
                'attr'=>[
                    'placeholder'=>'Merci de saisir votre prénom'
                ]
            ])
            ->add('email', EmailType::class, [
                'label'=>'Votre email',
                'constraints'=>new Length (3,3,20 ),
                'attr'=>[
                    'placeholder'=>'Merci de saisir votre email'
                ]
            ])
            ->add('message', TextareaType::class, [
                'label'=>'Votre message',
                'constraints'=>new Length (10,10,1000 ),
                'attr'=>[
                    'placeholder'=>'Merci de saisir votre message içi'
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label'=>'Envoyer'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
