<?php

namespace App\Controller;

use App\Entity\TrackerLine;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\Routing\Annotation\Route;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use App\Entity\User;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;


use App\Form\LoginForm;

class SecurityController extends Controller
{

    /**
     * @Route("/login", name="security_login")
     *
     */
    public function loginAction(Request $request, AuthenticationUtils $authenticationUtils) {

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();

        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();


        $form = $this->createForm(LoginForm::class, [
            '_username' => $lastUsername
        ], [
            'action' => $this->generateUrl('security_login')
        ]);

        return $this->render(
            'authentications/login_explicit.php.twig',
            array(
                'form' => $form->createView(),
                'error' => $error,
                'username' => $lastUsername,
            )
        );

    }


    /**
     * @Route("/logout", name="security_logout")
     * @IsGranted("ROLE_USER")
     */
    public function logoutAction() {

    }



}