<?php

/* LJTrToolRegistrationBundle:Division:index.html.twig */
class __TwigTemplate_79551de7021b65879ec5549b525f5ccb30e9fec162deade33cf71e67fd29b0d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LJTrToolRegistrationBundle:Division:index.html.twig", 1);
        $this->blocks = array(
            'javascripts' => array($this, 'block_javascripts'),
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

    // line 3
    public function block_javascripts($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 5
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "199025b_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_199025b_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/199025b_confirm_1.js");
            // line 6
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "199025b"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_199025b") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/199025b.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 10
    public function block_title($context, array $blocks = array())
    {
        echo "Gliederungen";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<h1>Übersicht Gliederungen</h1>
    <table class=\"table table-hover\">
        <tr>
            <th>Gliederung</th>
            <th style=\"text-align: right\">
                <form method=\"GET\" action=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("division_new");
        echo "\" accept-charset=\"UTF-8\" style=\"display:inline\">
                    <button class=\"btn btn-xs btn-success\" type=\"submit\">
                        <i class=\"glyphicon glyphicon-plus\"></i> Neu
                    </button>
                </form>
            </th>
        </tr>
    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["divisions"]) ? $context["divisions"] : $this->getContext($context, "divisions")));
        foreach ($context['_seq'] as $context["_key"] => $context["division"]) {
            // line 26
            echo "        <tr>
            <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("division_show", array("divisionId" => $this->getAttribute($context["division"], "divisionId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["division"], "divisionName", array()));
            echo "</a></td>
            <td style=\"text-align: right\">
                <form method=\"GET\" action=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("division_edit", array("divisionId" => $this->getAttribute($context["division"], "divisionId", array()))), "html", null, true);
            echo "\" accept-charset=\"UTF-8\" style=\"display:inline\">
                    <button class=\"btn btn-xs btn-primary\" type=\"submit\">
                        <i class=\"glyphicon glyphicon-pencil\"></i> Ändern
                    </button>
                </form>
                <form method=\"GET\" action=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("division_delete", array("divisionId" => $this->getAttribute($context["division"], "divisionId", array()))), "html", null, true);
            echo "\" accept-charset=\"UTF-8\" style=\"display:inline\">
                    <button class=\"btn btn-xs btn-danger\" type=\"button\" data-toggle=\"modal\" data-target=\"#confirmDelete\" data-title=\"Gliederung löschen\" data-message=\"Möchtest du die Gliederung ";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["division"], "divisionName", array()), "html", null, true);
            echo " wirklich löschen?\">
                        <i class=\"glyphicon glyphicon-trash\"></i> Löschen
                    </button>
                </form>
            </td>
        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['division'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "    </table>

";
    }

    public function getTemplateName()
    {
        return "LJTrToolRegistrationBundle:Division:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 42,  110 => 35,  106 => 34,  98 => 29,  91 => 27,  88 => 26,  84 => 25,  74 => 18,  67 => 13,  64 => 12,  58 => 10,  42 => 6,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
