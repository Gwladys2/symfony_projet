<?php

namespace App\Controller;

use App\Form\MultiplicationType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MultiplicationController extends AbstractController
{
    /**
     * @Route("/multiplication", name="app_multiplication")
     */
    public function index(Request $request):Response
    {
        $form=$this->createForm(MultiplicationType::class);

        $form->handleRequest($request);

        if ($form->isSubmitted()&& $form->isValid()){
            $data=$form->getData();
            $nbre=$data['nombre'];


            return $this->render('multiplication/multiplie.html.twig', [
                'nombre' => $nbre]);
            }else{
        return $this->render('multiplication/index.html.twig', [
            'controller_name' => 'MultiplicationController',
            'form2'=>$form->createView()
        ]);
    }
}
}
