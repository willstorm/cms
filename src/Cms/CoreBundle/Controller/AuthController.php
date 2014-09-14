<?php

namespace Cms\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

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

        return $this->render('CmsCoreBundle:Auth:login.html.twig', array(
            'email' => $request->getSession()->get(SecurityContext::LAST_USERNAME),
            'error' => $error
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
    public function forgetPasswordAction()
    {
        return $this->render('CmsCoreBundle:Auth:forget-password.html.twig');
    }
}