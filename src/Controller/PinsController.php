<?php

namespace App\Controller;

use App\Entity\Pin;
use App\Repository\PinRepository;

use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PinsController extends AbstractController
{
    /**
     * @Route("/pins", name="app_pins", methods="GET")
     */
    public function index(PinRepository $pinRepository): Response
    {
        $pins = $pinRepository->findBy([], ['createdAt' => 'DESC']);
        return $this->render('pins/index.html.twig', compact('pins'));
    }

    /**
     * @Route("/pins/create", name="app_pins_create", methods="GET|POST")
     */
    public function create(Request $request, EntityManagerInterface $em): Response
    {
        $form = $this->createFormBuilder()
            ->add('title', TextType::class)
            ->add('description', TextareaType::class)
            ->getForm();

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = ($form->getData());
            $pin = new Pin;
            $pin->setTitle($data['title']);
            $pin->setDescription($data['description']);
            $em->persist($pin);
            $em->flush();

            $this->addFlash('success', 'Pin créé avec succes!');

            return $this->redirectToRoute('app_pins');

        }


        return $this->render('pins/create.html.twig', [
            'form' => $form->createView()
        ]);
    }


    /**
     * @Route("/pins/{id<[0-9]+>}", name="app_pins_show", methods="GET")
     */
    public function show(Pin $pin): Response
    {
        return $this->render('pins/show.html.twig', compact('pin'));
    }

    /**
     * @Route("/pins/{id<[0-9]+>}/edit", name="app_pins_edit")

     */
    public function edit(Request $request, Pin $pin, EntityManagerInterface $em)
    {
        $form = $this->createFormBuilder($pin)
            ->add('title', TextType::class)
            ->add('description', TextareaType::class)
            ->getForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            $em->flush();

            $this->addFlash('success', 'Pin modifié avec succes!');

            return $this->redirectToRoute('app_pins');

        }

        return $this->render('pins/edit.html.twig', [
            'pin'=>$pin,
            'form' => $form->createView()
        ]);


    }


    /**
     * @Route("/pins/{id<[0-9]+>}/delete", name="app_pins_delete")

     */

    public function delete(Pin $pin, EntityManagerInterface $em)
    {
       $em->remove($pin);
       $em->flush();
        $this->addFlash('info', 'Pin supprimé avec succes!');
        return $this->redirectToRoute('app_pins');
    }
}
