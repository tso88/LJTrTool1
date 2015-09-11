<?php

/* LJTrToolRegistrationBundle:Person:index.html.twig */
class __TwigTemplate_35d38d6919ff2de4db271edc9eef6baf520bc83ebd8456e6029dbd0b380d699f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LJTrToolRegistrationBundle:Person:index.html.twig", 1);
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
        echo "<h1>Welcome to the Person:index page</h1>
    <table class=\"table table-hover\">
        <tr>
            <th></th>
            <th>Name</th>
            <th>Vorname</th>
            <th>Gliederung</th>
            <th style=\"text-align: right\">
                <form method=\"GET\" action=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("person_new");
        echo "\" accept-charset=\"UTF-8\" style=\"display:inline\">
                    <button class=\"btn btn-xs btn-success\" type=\"submit\">
                        <i class=\"glyphicon glyphicon-plus\"></i> Neu
                    </button>
                </form>
            </th>
        </tr>
        ";
        // line 28
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["persons"]) ? $context["persons"] : $this->getContext($context, "persons")));
        foreach ($context['_seq'] as $context["_key"] => $context["person"]) {
            // line 29
            echo "            <tr>
                <td><img style=\"width: 20px; height: auto\" src=\"/";
            // line 30
            if ( !(null === $this->getAttribute($context["person"], "path", array()))) {
                echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "WebPath", array()), "html", null, true);
            } else {
                echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "uploadDir", array()), "html", null, true);
                echo "/dummy.jpg";
            }
            echo "\"></td>
                <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_show", array("personId" => $this->getAttribute($context["person"], "personId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()));
            echo "</a></td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "firstname", array()));
            echo "</td>
                <td>
                    ";
            // line 34
            if ( !(null === $this->getAttribute($context["person"], "division", array()))) {
                // line 35
                echo "                        ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["person"], "division", array()), "divisionName", array()));
                echo "
                    ";
            }
            // line 37
            echo "                </td>
                <td style=\"text-align: right\">
                    <form method=\"GET\" action=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_edit", array("personId" => $this->getAttribute($context["person"], "personId", array()))), "html", null, true);
            echo "\" accept-charset=\"UTF-8\" style=\"display:inline\">
                        <button class=\"btn btn-xs btn-primary\" type=\"submit\">
                            <i class=\"glyphicon glyphicon-pencil\"></i> Ändern
                        </button>
                    </form>
                    <form method=\"GET\" action=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_delete", array("personId" => $this->getAttribute($context["person"], "personId", array()))), "html", null, true);
            echo "\" accept-charset=\"UTF-8\" style=\"display:inline\">
                        <button class=\"btn btn-xs btn-danger\" type=\"button\" data-toggle=\"modal\" data-target=\"#confirmDelete\" data-title=\"Person löschen\" data-message=\"Möchtest du die ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["person"], "name", array()), "html", null, true);
            echo " ";
            if ( !(null === $this->getAttribute($context["person"], "division", array()))) {
                echo "aus ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["person"], "division", array()), "divisionName", array()), "html", null, true);
            }
            echo " wirklich löschen?\">
                            <i class=\"glyphicon glyphicon-trash\"></i> Löschen
                        </button>
                    </form>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['person'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "LJTrToolRegistrationBundle:Person:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 52,  138 => 45,  134 => 44,  126 => 39,  122 => 37,  116 => 35,  114 => 34,  109 => 32,  103 => 31,  94 => 30,  91 => 29,  87 => 28,  77 => 21,  67 => 13,  64 => 12,  58 => 10,  42 => 6,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
