<?php

namespace App\Bundle\CompanyBundle\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class PersonalAccountRegistrationController extends Controller
{
    /**
     * @Route("/personal/account/registration", name="personal_account_registration")
     */
    public function index(Request $request, SessionInterface $session)
    {
        $form = $this->createForm(RegistrationType::class, array(), array(
            'container' => $this->container
        ));
        
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()) {
            $session->set('user_id', $user->getUserId());
            $this->redirectToRoute('personal_projects');
        }
        
        return $this->render('personal_account_registration/form.html.twig', [
            'form' => $form->createView(),
            'controller_name' => 'PersonalAccountRegistrationController'
        ]);
    }
    
}
