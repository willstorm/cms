<?php

namespace Cms\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;
use Exception;

/**
 * Controla a autenticação do usuário no sistema
 * As configurações estão armazenas no arquivo /app/config/security.yml
 */
class AuthController extends Controller
{
    /**
     * Formulário de autenticação
     *
     * @param Request $request
     * @return Response
     */
    public function loginAction(Request $request)
    {
        if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
            $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
        } else {
            $error = $request->getSession()->get(SecurityContext::AUTHENTICATION_ERROR);
        }
        
        if($error && ($message = $error->getMessage())) {
            $request->getSession()
                ->getFlashBag()
                ->add('danger', 'E-mail e/ou senha incorretos. Por favor, tente novamente.');
        }

        return $this->render('CmsCoreBundle:Auth:login.html.twig', array(
            'email' => $request->getSession()->get(SecurityContext::LAST_USERNAME)
        ));
    }

    /**
     * Método interceptado pelo security
     */
    public function checkAction()
    {

    }

    /**
     * Método intercepado pelo security
     */
    public function logoutAction()
    {

    }

    /**
     * Formulário de esqueci minha senha
     *
     * @return Response
     */
    public function forgetPasswordAction(Request $request)
    {
        try {
            if($request->isMethod('POST')) {
                if(!$email = trim($request->get('email'))) {
                    throw new Exception('Digite um e-mail válido.');
                }
                
                $user = $this->getDoctrine()
                    ->getRepository('CmsCoreBundle:User')
                    ->findOneBy(array('email' => $email));
                
                if($user) {                
                    // @TODO Sent an email to client                                    
                }
                
                $request->getSession()
                    ->getFlashBag()
                    ->add('success', 'Caso seja um usuário válido, um e-mail foi enviado com instruções para recuperação da senha.');
                
            }
        } catch(Exception $e) {
            $request->getSession()
                ->getFlashBag()
                ->add('danger', $e->getMessage());
        }

        return $this->render('CmsCoreBundle:Auth:forget-password.html.twig', array(
            'email' => isset($email) ? $email : null
        ));
    }
}