<?php

namespace App\Form;

use App\Entity\BoutiqueUser;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class InscriptionBoutiqueType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('firstname', TextType::class,[
                'label'=>'Votre prenom',
                'constraints'=>new Length (3,3,20 ),
                'attr'=>[
                    'placeholder'=>'Merci de saisir içi votre prénom'
                ]
            ])
            ->add('lastname', TextType::class,[
                'label'=>'Votre nom',
                'constraints'=>new Length (3,3,20 ),
                'attr'=>[
                    'placeholder'=>'Merci de saisir içi votre nom'
                ]
            ])
            ->add('email', EmailType::class,[
                'label'=>'Votre email',
                'constraints'=>new Length (3,3,20 ),
                'attr'=>[
                    'placeholder'=>'Merci de saisir içi votre email'
                ]
            ])
            ->add('password', RepeatedType::class, [
                'type'=>PasswordType::class,
                'invalid_message'=>'Le mot de passe et la confirmation doivent être identiques',
                'label'=>'Mot de passe',
                'required'=>true,
                'first_options'=>['label'=>'Mot de passe'],
                'second_options'=>['label'=>'Confimez votre mot de passe']
            ])



            ->add('submit', SubmitType::class, [
                'label'=>'Envoyer'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => BoutiqueUser::class,
        ]);
    }
}
