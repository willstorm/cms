<?php

/* CmsCoreBundle:Auth:login.html.twig */
class __TwigTemplate_f64c65fe348d9e03b83e780943b68e6ac307d999275e674a5f52fbdd9cb6cd48 extends Twig_Template
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
        echo "Identificação";
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "<div class=\"center-block\">
    <div class=\"login-block\">
        <form action=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("core_auth_check");
        echo "\" id=\"login-form\" class=\"orb-form\" method=\"post\">
            <header>
                <div class=\"image-block\"><img src=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/cmscore/images/logo.png"), "html", null, true);
        echo "\" alt=\"User\" /></div>
                Identificação
            </header>

            ";
        // line 12
        $this->env->loadTemplate("CmsCoreBundle:Layout:message.html.twig")->display($context);
        // line 13
        echo "
            <fieldset>
                <section>
                    <div class=\"row\">
                        <label class=\"label col col-4\">E-mail</label>
                        <div class=\"col col-8\">
                            <label class=\"input\"> <i class=\"icon-append fa fa-user\"></i>
                                <input type=\"email\" name=\"email\" ";
        // line 20
        if (array_key_exists("email", $context)) {
            echo "value=\"";
            echo twig_escape_filter($this->env, (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email")), "html", null, true);
            echo "\"";
        }
        echo ">
                            </label>
                        </div>
                    </div>
                </section>
                <section>
                    <div class=\"row\">
                        <label class=\"label col col-4\">Senha</label>
                        <div class=\"col col-8\">
                            <label class=\"input\"> <i class=\"icon-append fa fa-lock\"></i>
                                <input type=\"password\" name=\"password\">
                            </label>
                            <div class=\"note\"><a href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("core_auth_forget_password");
        echo "\">Perdeu sua senha?</a></div>
                        </div>
                    </div>
                </section>
                <section>
                    <div class=\"row\">
                        <div class=\"col col-4\"></div>
                        <div class=\"col col-8\">
                            <label class=\"checkbox\">
                                <input type=\"checkbox\" name=\"remember\" checked>
                                <i></i>Matenha-me logado
                            </label>
                        </div>
                    </div>
                </section>
            </fieldset>
            <footer>
                <button type=\"submit\" class=\"btn btn-default\">Entrar</button>
            </footer>
        </form>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "CmsCoreBundle:Auth:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 32,  65 => 20,  56 => 13,  54 => 12,  47 => 8,  42 => 6,  38 => 4,  35 => 3,  29 => 2,);
    }
}
