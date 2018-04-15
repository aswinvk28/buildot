<?php

namespace App\Bundle\CompanyBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Form\RegistrationType;

class PersonalAccountRegistrationController extends Controller
{
    /**
     * @Route("/personal/account/registration", name="personal_account_registration")
     */
    public function index()
    {
        $form = $this->createForm(RegistrationType::class, array(), array());
        
        return $this->render('personal_account_registration/form.html.twig', [
            'form' => $form->createView()
        ]);
    }
    
}
