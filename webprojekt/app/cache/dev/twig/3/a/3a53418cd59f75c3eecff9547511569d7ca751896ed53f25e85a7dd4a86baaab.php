<?php

/* LJTrToolRegistrationBundle:Event:new.html.twig */
class __TwigTemplate_3a53418cd59f75c3eecff9547511569d7ca751896ed53f25e85a7dd4a86baaab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LJTrToolRegistrationBundle:Event:new.html.twig", 1);
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
            // asset "51a3de5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51a3de5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/51a3de5_bootstrap-datetimepicker.min_1.js");
            // line 7
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
            // asset "51a3de5_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51a3de5_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/51a3de5_bootstrap-datetimepicker.de_2.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "51a3de5"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51a3de5") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/51a3de5.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 9
        echo "
    ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "f6e54ff_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f6e54ff_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f6e54ff_event_new_1.js");
            // line 11
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "f6e54ff"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_f6e54ff") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/f6e54ff.js");
            echo "        <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
    }

    // line 15
    public function block_title($context, array $blocks = array())
    {
        echo "Neue Veranstaltung";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "<h1>Veranstaltung anlegen</h1>
j
    <div class=\"row\">
        ";
        // line 21
        if (array_key_exists("formErrors", $context)) {
            // line 22
            echo "            ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["formErrors"]) ? $context["formErrors"] : $this->getContext($context, "formErrors")));
            foreach ($context['_seq'] as $context["_key"] => $context["formError"]) {
                // line 23
                echo "                <div class=\"alert alert-danger\">
                    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
                    <strong>Formular Fehler123</strong> ";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["formError"], "getMessage", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["formError"], "getMessageParameters", array(), "method"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["formError"], "getMessageTemplate", array(), "method"), "html", null, true);
                echo "
                </div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['formError'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "        ";
        }
        // line 29
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal ")));
        echo "
            <fieldset>
                <div class=\"form-group\">
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eventLinkName", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                    <div class=\"col-sm-10\">
                        ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eventLinkName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Veranstaltungskürzel")));
        echo "
                        <span class=\"help-block\">Veranstaltungskürzel muss eindeutig sein und wird im Link geführt (z.B. ljtr2015).</span>
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eventName", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                    <div class=\"col-sm-10\">
                        ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eventName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Veranstaltungsname")));
        echo "
                        <span class=\"help-block\">Veranstaltungsname wird den Teilnehmern angezeigt.</span>
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 46
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startTime", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                    <div class=\"col-sm-10\">
                        ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startTime", array()), 'widget', array("attr" => array("class" => "form-control form_datetime", "placeholder" => "")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endTime", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                    <div class=\"col-sm-10\">
                        ";
        // line 54
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endTime", array()), 'widget', array("attr" => array("class" => "form-control form_datetime", "placeholder" => "")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 58
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                    <div class=\"col-sm-10\">
                        ";
        // line 60
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Veranstaltungsort")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                    <div class=\"col-sm-10\">
                        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Beschreibung")));
        echo "
                    </div>
                </div>
            </fieldset>
            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    ";
        // line 72
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Anlegen", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
                </div>
            </div>
        ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "LJTrToolRegistrationBundle:Event:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  215 => 75,  209 => 72,  200 => 66,  195 => 64,  188 => 60,  183 => 58,  176 => 54,  171 => 52,  164 => 48,  159 => 46,  151 => 41,  146 => 39,  138 => 34,  133 => 32,  126 => 29,  123 => 28,  110 => 25,  106 => 23,  101 => 22,  99 => 21,  94 => 18,  91 => 17,  85 => 15,  69 => 11,  65 => 10,  62 => 9,  42 => 7,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
