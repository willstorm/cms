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
            'content' => array($this, 'block_content'),
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

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"center-block\">
    <div class=\"login-block\">
        <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("core_auth_forget_password");
        echo "\" id=\"login-form\" class=\"orb-form\" method=\"post\">
            <header>
                <div class=\"image-block\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmscore/images/logo.png"), "html", null, true);
        echo "\" alt=\"User\" /></div>
                Recuperação de Senha
            </header>

            ";
        // line 12
        $this->env->loadTemplate("CmsCoreBundle:Layout:message.html.twig")->display($context);
        // line 13
        echo "
            <fieldset>
                <section>
                    <div class=\"row\">
                        <label class=\"label col col-3\">E-mail</label>
                        <div class=\"col col-9\">
                            <label class=\"input\">
                                <input type=\"email\" name=\"email\" ";
        // line 20
        if ((isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
            echo "\"";
        }
        echo ">
                            </label>
                            <div class=\"note\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("core_auth_login");
        echo "\">Voltar para login</a></div>
                        </div>
                    </div>
                </section>
            </fieldset>
            <footer>
                <button type=\"submit\" class=\"btn btn-default\">Enviar</button>
            </footer>
        </form>
    </div>
</div>
";
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
        return array (  74 => 22,  65 => 20,  56 => 13,  54 => 12,  47 => 8,  42 => 6,  38 => 4,  35 => 3,  29 => 2,);
    }
}
