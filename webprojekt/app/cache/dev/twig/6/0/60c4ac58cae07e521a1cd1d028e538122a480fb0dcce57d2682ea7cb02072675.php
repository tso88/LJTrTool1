<?php

/* LJTrToolRegistrationBundle:Security:login.html.twig */
class __TwigTemplate_60c4ac58cae07e521a1cd1d028e538122a480fb0dcce57d2682ea7cb02072675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("::base.html.twig", "LJTrToolRegistrationBundle:Security:login.html.twig", 2);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "LJTrToolRegistrationBundle:Registration:new";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
    ";
        }
        // line 10
        echo "
    <form action=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" role=\"form\">
        <div class=\"form-group\">
            <label for=\"username\"><span class=\"glyphicon glyphicon-user\"></span> Username:</label>
            <input type=\"text\" class=\"form-control\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" placeholder=\"Username\" />
        </div>
        <div class=\"form-group\">
            <label for=\"password\"><span class=\"glyphicon glyphicon-eye-open\"></span> Password:</label>
            <input type=\"password\" class=\"form-control\" id=\"password\" name=\"_password\" />
        </div>
        <div class=\"form-group\">
            <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderCsrfToken("authenticate"), "html", null, true);
        echo "\">
        </div>

        <div class=\"checkbox\">
            <label for=\"remember_me\"><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" checked=\"checked\" />Remember me</label>
        </div>

        <button type=\"submit\" class=\"btn btn-success btn-block\" name=\"login\"><span class=\"glyphicon glyphicon-off\"></span> Login</button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "LJTrToolRegistrationBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 21,  56 => 14,  50 => 11,  47 => 10,  41 => 8,  38 => 7,  35 => 6,  29 => 4,  11 => 2,);
    }
}
