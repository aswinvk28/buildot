<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\Users;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class SecurityController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function login(Request $request, AuthenticationUtils $authUtils)
    {
        $error = $authUtils->getLastAuthenticationError();
        $lastUsername = $authUtils->getLastUsername();
        
        return $this->render('security/login.html.twig', [
            'controller_name' => 'SecurityController',
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }
    
    /**
     * @Route("/login_check", name="login_submit")
     */
    public function submit(Request $request, UserPasswordEncoderInterface $encoder) 
    {
        $session = $request->getSession();
        $user = new Users();
        $user->setEmail($request->get('_username'));
        $user->setPassword($encoder->encodePassword($user, $request->get('_password')));
        if($request->get('_username') == "aswinvk28@gmail.com" && 
                md5($request->get('password')) == $user->getPassword()) {
            return 'Logged In';
        }
        $this->denyAccessUnlessGranted($attributes);
        return $this->redirectToRoute('login');
    }
}
