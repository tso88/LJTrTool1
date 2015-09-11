<?php

/* LJTrToolRegistrationBundle:RoleApproval:new.html.twig */
class __TwigTemplate_30a84cec82d22b50375f53a6da708c961ce398ac111dedf3c871a04514afcbf2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LJTrToolRegistrationBundle:RoleApproval:new.html.twig", 1);
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
    <script>
        var list = ";
        // line 6
        echo twig_jsonencode_filter((isset($context["list"]) ? $context["list"] : $this->getContext($context, "list")));
        echo ";
        var url = \"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("role_edit_ajax", array("roleId" => "ajax_roleId"));
        echo "\";

        \$(document).ready(function(){
            TypeAheadBundle.typeAheadProcessor(list, \"#ljtrtool_registrationbundle_roleapproval_role_typeahead\",
                    function() {
                        var selected_value = \$(\"#ljtrtool_registrationbundle_roleapproval_role_typeahead\").val();
                        url = url.replace(\"ajax_roleId\", selected_value);
                        \$( \"#ajax_input_role\" ).load(url);
                    })
        });
    </script>

    ";
        // line 19
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0488e5d_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0488e5d_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0488e5d_typeahead.jquery_1.js");
            // line 20
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "0488e5d"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0488e5d") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0488e5d.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 22
        echo "
    ";
        // line 23
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0987e15_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0987e15_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0987e15_TypeAheadBundle_1.js");
            // line 24
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "0987e15"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0987e15") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0987e15.js");
            echo "        <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 26
        echo "
    ";
        // line 27
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "51a3de5_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_51a3de5_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/51a3de5_bootstrap-datetimepicker.min_1.js");
            // line 29
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
        // line 31
        echo "
    ";
        // line 32
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "80bbaf4_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_80bbaf4_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/80bbaf4_bootstrap-switch_1.js");
            // line 33
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "80bbaf4"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_80bbaf4") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/80bbaf4.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 35
        echo "
    ";
        // line 36
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "34861a1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_34861a1_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/34861a1_roleApproval_new_1.js");
            // line 37
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        } else {
            // asset "34861a1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_34861a1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/34861a1.js");
            echo "    <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
    ";
        }
        unset($context["asset_url"]);
        // line 39
        echo "
";
    }

    // line 43
    public function block_title($context, array $blocks = array())
    {
        echo "LJTrToolRegistrationBundle:Event:new";
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "
    <h1>Welcome to the Person:new page</h1>

    ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal ")));
        echo "
        <fieldset>
            <div class=\"form-group\">
                <div class=\"col-sm-10\">
                    ";
        // line 53
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roleApprovalId", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
            </div>
        </fieldset>
        <fieldset>
            <div class=\"form-group\">
                ";
        // line 59
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                <div class=\"col-sm-10\">
                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "role", array()), 'widget');
        echo "
                </div>
            </div>
        </fieldset>
        <fieldset id=\"ajax_input_role\"><!-- Ajax -->
            <div class=\"form-group\">
                ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roleName", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                <div class=\"col-sm-10\">
                    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "roleName", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Rollenname")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 73
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conditions", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                <div class=\"col-sm-10\">
                    ";
        // line 75
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "conditions", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "conditions")));
        echo "
                </div>
            </div>
        </fieldset>
        <fieldset>
            <div class=\"form-group\">
                ";
        // line 81
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "registration_startTime", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                <div class=\"col-sm-10\">
                    ";
        // line 83
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "registration_startTime", array()), 'widget', array("attr" => array("class" => "form-control form_datetime", "placeholder" => "")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 87
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "registration_endTime", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                <div class=\"col-sm-10\">
                    ";
        // line 89
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "registration_endTime", array()), 'widget', array("attr" => array("class" => "form-control form_datetime", "placeholder" => "")));
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 93
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "showRole", array()), 'label', array("label_attr" => array("class" => "control-label col-sm-2")));
        echo "
                <div class=\"col-sm-10\">
                    ";
        // line 95
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "showRole", array()), 'widget', array("attr" => array("class" => "radio-inline")));
        echo "
                </div>
            </div>
        </fieldset>
        <div class=\"form-group\">
            <div class=\"col-sm-offset-2 col-sm-10\">
                ";
        // line 101
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "Anlegen", array()), 'widget', array("attr" => array("class" => "btn btn-default")));
        echo "
            </div>
        </div>
    ";
        // line 104
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
";
    }

    public function getTemplateName()
    {
        return "LJTrToolRegistrationBundle:RoleApproval:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  285 => 104,  279 => 101,  270 => 95,  265 => 93,  258 => 89,  253 => 87,  246 => 83,  241 => 81,  232 => 75,  227 => 73,  220 => 69,  215 => 67,  206 => 61,  201 => 59,  192 => 53,  185 => 49,  180 => 46,  177 => 45,  171 => 43,  166 => 39,  152 => 37,  148 => 36,  145 => 35,  131 => 33,  127 => 32,  124 => 31,  104 => 29,  100 => 27,  97 => 26,  83 => 24,  79 => 23,  76 => 22,  62 => 20,  58 => 19,  43 => 7,  39 => 6,  33 => 4,  30 => 3,  11 => 1,);
    }
}
