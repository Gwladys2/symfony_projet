<?php

namespace App\Controller;

use App\Form\ChangePasswordType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class ComptePasswordController extends AbstractController
{
    private $entityManager;
    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager=$entityManager;
    }
    /**
     * @Route("/compte/modifier_passe", name="app_compte_password")
     */
    public function index(Request $request, UserPasswordEncoderInterface $encoder)
    {
        $notification=null;
        $utilisateur=$this->getUser();

        $form=$this->createForm(ChangePasswordType::class, $utilisateur);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){

            $old_pwd=$form->get('old_password')->getData();


            if($encoder->isPasswordvalid($utilisateur, $old_pwd)){
                $new_pwd=$form->get('new_password')->getData();
              $password=$encoder->encodePassword($utilisateur,$new_pwd);

              $utilisateur->setPassword($password);
                $this->entityManager->persist($utilisateur);
                $this->entityManager->flush();
                $notification="Votre mot de passe a bien été mis à jour";

            } else{
                $notification='Votre mot de passe actuel n\' est pas le bon';
            }

        }

        return $this->render('compte/password.html.twig',[
            'form'=>$form->createView(),
            'notification'=>$notification
        ]);
    }
}
