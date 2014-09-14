<?php

namespace Cms\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\SecurityContext;

class DashboardController extends Controller
{
    public function indexAction()
    {
        return $this->render('CmsCoreBundle:Dashboard:index.html.twig');
    }
}
