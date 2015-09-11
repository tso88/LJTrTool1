<?php

/* MatMTypeAheadBundle:Form:typeahead-form-theme.html.twig */
class __TwigTemplate_3f2419cdf76dd3a36de90fb5e885336bf2778d5829e8538285bccdbff9d60a4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'typeahead_widget' => array($this, 'block_typeahead_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!-- AUTOCOMPLETE -->
";
        // line 2
        $this->displayBlock('typeahead_widget', $context, $blocks);
    }

    public function block_typeahead_widget($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        ob_start();
        // line 4
        echo "    \t";
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "rtl", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "rtl", array())))) {
            // line 5
            echo "    \t    <div class=\"rtl-support\">
    \t";
        }
        // line 7
        echo "\t<div class=\"input-group\">
\t\t<input type=\"hidden\" ";
        // line 8
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " ";
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            echo "value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "id", array()), "html", null, true);
            echo "\" ";
        }
        echo "/>
        \t";
        // line 9
        $context["attr"] = twig_array_merge((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), array("class" => trim(((($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "class", array()), "")) : ("")) . " typeahead form-control"))));
        // line 10
        echo "        \t";
        $context["id"] = ((isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")) . "_typeahead");
        // line 11
        echo "        \t";
        $context["full_name"] = ("typeahead_" . (isset($context["full_name"]) ? $context["full_name"] : $this->getContext($context, "full_name")));
        // line 12
        echo "        \t<input type=\"text\" ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        echo " 
            \t";
        // line 13
        if ( !twig_test_empty((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")))) {
            // line 14
            echo "                \tvalue=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), $this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "display", array())), "html", null, true);
            echo "\" 
            \t";
        }
        // line 16
        echo "        \t/>
        \t<span class=\"input-group-addon tt-eraser\">
        \t\t<span class=\"glyphicon glyphicon-erase\"></span>
    \t\t</span>
        </div>
        ";
        // line 21
        if (($this->getAttribute((isset($context["attr"]) ? $context["attr"] : null), "rtl", array(), "any", true, true) &&  !twig_test_empty($this->getAttribute((isset($context["attr"]) ? $context["attr"] : $this->getContext($context, "attr")), "rtl", array())))) {
            // line 22
            echo "    \t    </div>
    \t";
        }
        // line 24
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "MatMTypeAheadBundle:Form:typeahead-form-theme.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  86 => 24,  82 => 22,  80 => 21,  73 => 16,  67 => 14,  65 => 13,  60 => 12,  57 => 11,  54 => 10,  52 => 9,  42 => 8,  39 => 7,  35 => 5,  32 => 4,  29 => 3,  23 => 2,  20 => 1,);
    }
}
