<?php

/* LJTrToolRegistrationBundle:Event:edit.html.twig */
class __TwigTemplate_9b8ad21dc97a1b8015d18f308bc3aaf7eb586d75082a95d20850d7d2a6886179 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LJTrToolRegistrationBundle:Event:edit.html.twig", 1);
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
        echo "Veranstaltungsverwaltung ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventName", array()));
        echo " - Allgemeines";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "    <h1>Veranstaltungsverwaltung ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventName", array()));
        echo "</h1>

    <ul class=\"nav nav-tabs\">
        <li role=\"presentation\" class=\"active\"><a href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_edit", array("eventLinkName" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), "eventLinkName", array(), "array"))), "html", null, true);
        echo "\">Allgemeines</a></li>
        <li role=\"presentation\"><a href=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("roleApproval_index", array("eventLinkName" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), "eventLinkName", array(), "array"))), "html", null, true);
        echo "\">Anmeldungen</a></li>
        <li role=\"presentation\"><a href=\"#\">Messages</a></li>
    </ul>

    <br />
    <div class=\"row\">
        ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal ")));
        echo "
            <fieldset>
                <div class=\"form-group\">
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eventLinkName", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                    <div class=\"col-sm-10\">
                        ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eventLinkName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Veranstaltungskürzel")));
        echo "
                        <span class=\"help-block\">Veranstaltungskürzel muss eindeutig sein und wird im Link geführt (z.B. ljtr2015).</span>
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eventName", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                    <div class=\"col-sm-10\">
                        ";
        // line 40
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "eventName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Veranstaltungsname")));
        echo "
                        <span class=\"help-block\">Veranstaltungsname wird den Teilnehmern angezeigt.</span>
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 45
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startTime", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                    <div class=\"col-sm-10\">
                        ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "startTime", array()), 'widget', array("attr" => array("class" => "form-control form_datetime", "placeholder" => "")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endTime", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                    <div class=\"col-sm-10\">
                        ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "endTime", array()), 'widget', array("attr" => array("class" => "form-control form_datetime", "placeholder" => "")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 57
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                    <div class=\"col-sm-10\">
                        ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "place", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Veranstaltungsort")));
        echo "
                    </div>
                </div>
                <div class=\"form-group\">
                    ";
        // line 63
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                    <div class=\"col-sm-10\">
                        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Beschreibung")));
        echo "
                    </div>
                </div>
            </fieldset>
            <div class=\"form-group\">
                <div class=\"col-sm-offset-2 col-sm-10\">
                    ";
        // line 71
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Anlegen", array()), 'widget', array("attr" => array("class" => "btn btn-default", "value" => "Speichern")));
        echo "
                </div>
            </div>
        ";
        // line 74
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
    }

    public function getTemplateName()
    {
        return "LJTrToolRegistrationBundle:Event:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 74,  198 => 71,  189 => 65,  184 => 63,  177 => 59,  172 => 57,  165 => 53,  160 => 51,  153 => 47,  148 => 45,  140 => 40,  135 => 38,  127 => 33,  122 => 31,  116 => 28,  107 => 22,  103 => 21,  96 => 18,  93 => 17,  85 => 15,  69 => 11,  65 => 10,  62 => 9,  42 => 7,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
