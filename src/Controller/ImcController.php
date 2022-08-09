<?php

namespace App\Controller;

use App\Form\ImcType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class ImcController extends AbstractController
{
    /**
     * @Route("/imc", name="app_imc")
     */
    public function index(Request $request):Response
    {
        $form=$this->createForm(ImcType::class);                    // permet de créer le formulaire de la classe ImcType cree dans form

        $form->handleRequest($request);                                  // Permet de faire une requete dont d'appeler le formulaire

        if($form->isSubmitted() && $form->isValid()){                      //si le formulaire est soumis et valide

            $data=$form->getData();                                        //on cree une variable data, on y met le formaulaire  et les données du formulaire

            $nombre=$data['poids'];                                         //la variable nombre prends les données du formulaire poids soumis par l'utilisateur

            $nombre2=$data['taille'];                                        //la variable nombre 2 prend les données du formulaire taille soumis par l'utilisateur

            return $this->render('imc/resultats.html.twig',[           // on retourne la vue à résultats
                'chiffre1'=>$nombre,
                'chiffre2'=>$nombre2,
                'resultat'=>floor($nombre/($nombre2*$nombre2)*10000)
            ]);
        }else{
            return $this->renderForm('imc/index.html.twig',[
                'controller_name'=>'ImcController',
                'form1'=>$form                                // permet d'afficher la formulaire
            ]);
        }

}

}
