<?php

namespace App\Form;

use App\Entity\Youtube;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\UrlType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\Length;

class YoutubeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('url', UrlType::class, [
                'label'=>'URL de votre vidéo',

                'attr'=>[
                    'placeholder'=>'exemple: https://youtu.be/HshvFBtOQxo',
                ]
                    ])
            ->add('name', TextType::class, [
                'label'=>'Nom de votre vidéo',

                'attr'=>[
                    'placeholder'=>'exemple: The Time traveler s wife',
                ]
            ])
            ->add('submit', SubmitType::class, [
                'label'=>'envoyer'
            ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Youtube::class,
        ]);
    }
}
