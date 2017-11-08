<?php
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Component\HttpFoundation\Request;

/**
 * Created by PhpStorm.
 * User: adrien.leduc
 * Date: 08/11/17
 * Time: 11:06
 */

class SecurityController extends Controller{
    public function login(Request $request, AuthenticationUtils $authUtils)
    {
        $error = $this->get('request_stack')->getCurrentRequest();
        $lastUsername = $this->get('security.authentication_utils');

        return $this->render('login.html.twig', array(
            'last_username' => $lastUsername,
            'error' => $error,
        ));
    }
}