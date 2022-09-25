<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Produit;
use App\Form\ProduitType;
use Symfony\Component\HttpKernel\Exception\NotfoundHttpException;
use App\Entity\Image;
use Doctrine\Common\Persistence\ManagerRegistry;







class ProduitController extends AbstractController
{

     /**
     * @Route("/produit", name="produit")
     */
    public function index(): Response
    {
        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
        ]);
    }

        /**
     * @Route("menu", name="menu")
     */
    public function menu()
    {
        $mymenu = array(
            ['route' => 'produit', 'intitule' => 'Acceuil'],
            ['route' => 'afficher', 'intitule' => 'Mes Produits'],
            ['route' => 'ajouter', 'intitule' => 'Ajout un Prod']
        );

        return $this->render('produit/menu.html.twig',[
            'mymenu' => $mymenu
        ]);
    }


    /**
     * @Route("/afficher", name="afficher")
     */
    public function afficher(): Response
    {  
        $produits = $this->getDoctrine()->getRepository(produit::class)->findAll();

        return $this->render('produit/afficher.html.twig',[
            'produits' => $produits
        ]);
    }







/**
     * @Route("/ajouter", name="ajouter")
     * Method("GET", "POST")
     */
    public function ajouter(Request $request)
    {
        $produit = new Produit();
        $form = $this->createForm(ProduitType::class,$produit);
        $form->handleRequest($request);
        
        if ( $form->isSubmitted() && $form->isValid())
        {
            $em = $this->getDoctrine()->getManager();
            $em->persist($produit);
            $em->flush();
           // $session = new Session();
           // $session->getFlashBag()->add('notice','produit bien enregistré');
           // return $this->redirectToRoute('voir',array('id' => $produit->getId()));
        }
        


          return $this->render('produit/ajouter.html.twig',
          array('form' => $form->createView()));
    }




    /**
     * @Route("/voir/{id}", name="voir")
     */
    public function voir($id)
    {
        $produit = $this->getDoctrine()->getRepository(produit::class)->find($id);

        if(null === $produit){
            throw new NotFoundHttpException("le produit ayant l'id ".$id." n'existe pas");
        }

        return $this->render('produit/voir.html.twig',[
            'produit' => $produit
        ]);

    }


    /**
     * @Route("/modifier/{id}", name="modifier")
     * Method("GET", "POST")
     */
    public function modifier(Request $request , $id)
    {
        $produit = $this->getDoctrine()->getRepository(produit::class)->find($id);
        $form = $this->createForm(ProduitType::class,$produit);
        
        if($request->isMethod('POST'))
        {   
            $form->handleRequest($request);
               if ( $form->isSubmitted() && $form->isValid())
               {
                     $em = $this->getDoctrine()->getManager();
                     $em->persist($produit);
                     $em->flush();
                     //$request->getSession()->getFlashBag()->add('notice','Produit bien modifié');
                    // return $this->redirectToRoute('voir',['id' => $produit->getId()]);
               }
        }

        return $this->render('produit/modifier.html.twig',[
            'form' => $form->createView()
        ]);


    }
}
