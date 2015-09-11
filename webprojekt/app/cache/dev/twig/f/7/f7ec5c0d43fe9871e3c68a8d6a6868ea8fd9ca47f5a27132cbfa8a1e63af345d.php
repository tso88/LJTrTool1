<?php

/* LJTrToolRegistrationBundle:Event:index.html.twig */
class __TwigTemplate_f7ec5c0d43fe9871e3c68a8d6a6868ea8fd9ca47f5a27132cbfa8a1e63af345d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LJTrToolRegistrationBundle:Event:index.html.twig", 1);
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
        echo "LJTrToolRegistrationBundle:Person:index";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "<h1>Welcome to the Event:index page</h1>
    <table class=\"table table-hover\">
        <tr>
            <th>Veranstaltungsname</th>
            <th>Startzeit</th>
            <th>Endzeit</th>
            <th style=\"text-align: right\">
                <form method=\"GET\" action=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("event_new");
        echo "\" accept-charset=\"UTF-8\" style=\"display:inline\">
                    <button class=\"btn btn-xs btn-success\" type=\"submit\">
                        <i class=\"glyphicon glyphicon-plus\"></i> Neu
                    </button>
                </form>
            </th>
        </tr>
        ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["events"]) ? $context["events"] : $this->getContext($context, "events")));
        foreach ($context['_seq'] as $context["_key"] => $context["event"]) {
            // line 28
            echo "            <tr>
                <td><a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("eventLinkName" => twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventLinkName", array())))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventName", array()));
            echo "</a></td>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "startTime", array()), "d.m.Y H:i"), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["event"], "endTime", array()), "d.m.Y H:i"), "html", null, true);
            echo "</td>
                <td style=\"text-align: right\">
                    <form method=\"GET\" action=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_edit", array("eventLinkName" => $this->getAttribute($context["event"], "eventLinkName", array()))), "html", null, true);
            echo "\" accept-charset=\"UTF-8\" style=\"display:inline\">
                        <button class=\"btn btn-xs btn-primary\" type=\"submit\">
                            <i class=\"glyphicon glyphicon-pencil\"></i> Ändern
                        </button>
                    </form>
                    <form method=\"GET\" action=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_delete", array("eventLinkName" => $this->getAttribute($context["event"], "eventLinkName", array()))), "html", null, true);
            echo "\" accept-charset=\"UTF-8\" style=\"display:inline\">
                        <button class=\"btn btn-xs btn-danger\" type=\"button\" data-toggle=\"modal\" data-target=\"#confirmDelete\" data-title=\"Event löschen\" data-message=\"Möchtest du die Veranstaltung ";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["event"], "eventName", array()), "html", null, true);
            echo " wirklich löschen?\">
                            <i class=\"glyphicon glyphicon-trash\"></i> Löschen
                        </button>
                    </form>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['event'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "    </table>

";
    }

    public function getTemplateName()
    {
        return "LJTrToolRegistrationBundle:Event:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 46,  120 => 39,  116 => 38,  108 => 33,  103 => 31,  99 => 30,  93 => 29,  90 => 28,  86 => 27,  76 => 20,  67 => 13,  64 => 12,  58 => 10,  42 => 6,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
