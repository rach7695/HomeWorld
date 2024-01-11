<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ContactRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AideetcontactController extends AbstractController
{
/**
 * cette route est pour la bdd
 * @Route("/aideetcontact", name="aide_et_contact")
 */
    
    
    public function index(ContactRepository $contactRepository): Response
    {
        $contact = $contactRepository->findAll(); 
        //dd($contact);
        return $this->render('aideetcontact/contact.html.twig', [
            'contact' => $contact]);
    
    }

/**
 * @Route("/contact/ajouter", name="contact_ajouter")
 * 
 */
public function produit_ajouter():response
{
    $contact = new Contact();
    dump($contact);

    $form = $this->createForm(ContactType::class, $contact);//creer un formuliare en ce basant sur contacttype.php
return $this-> render('contact/contact_ajouter.html.twig',[
     'formContact' => $form->createView(),]);
}


}
