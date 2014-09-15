<?php

/* CmsCoreBundle:ForgetPassword:form.html.twig */
class __TwigTemplate_239d2360c92a1e31dc6ff52ab1df97668f31b72d731511fb6f000c5524443b14 extends Twig_Template
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
        return "CmsCoreBundle:ForgetPassword:form.html.twig";
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
