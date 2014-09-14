<?php

/* CmsCoreBundle:Auth:forget-password.html.twig */
class __TwigTemplate_387deabf09445cb05ab9cf01b57cbc2408c52749d4d7055d94187ed7d7288c79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("CmsCoreBundle:Layout:login.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CmsCoreBundle:Layout:login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Recuperação de senha";
    }

    public function getTemplateName()
    {
        return "CmsCoreBundle:Auth:forget-password.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,);
    }
}
