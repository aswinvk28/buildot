<?php

namespace App\Bundle\CompanyBundle\Controller;

use App\Form\CompanyAccountRegistrationType;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class CompanyAccountRegistrationController extends Controller
{
    /**
     * @Route("/company/account/registration", name="company_account_registration")
     */
    public function index(Request $request, SessionInterface $session, UserPasswordEncoderInterface $encoder)
    {
        $form = $this->createForm(CompanyAccountRegistrationType::class, array(), array(
            'container' => $this->container
        ));
        
        $form->handleRequest($request);
        
        $em = $this->getDoctrine()->getManager();

        if($form->isSubmitted() && $form->isValid()) {
            $companyAccount = $form->getData();
            $user = $companyAccount->getUser();
            $user->setPassword($encoder->encodePassword($user, $user->getPassword()));
            
            $member = $companyAccount->getMember();
            $company = $companyAccount->getCompany();
            
            $em->persist($user);
            $em->persist($member);
            if(!$em->getRepository(Company::class)->isRegistered($company->getname())) {
                $em->persist($company);
            }
            $em->flush();
            
            $session->set('user_id', $user->getUserId());
            $this->redirectToRoute('company_projects');
        }
        
        return $this->render('company_account_registration/index.html.twig', [
            'controller_name' => 'CompanyAccountRegistrationController',
            'form' => $form->createView()
        ]);
    }
}
