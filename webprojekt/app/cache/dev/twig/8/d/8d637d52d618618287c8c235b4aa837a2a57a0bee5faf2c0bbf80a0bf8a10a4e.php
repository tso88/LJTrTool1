<?php

/* ::base.html.twig */
class __TwigTemplate_8d637d52d618618287c8c235b4aa837a2a57a0bee5faf2c0bbf80a0bf8a10a4e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" media=\"screen\">

        <!-- HTML5 Shim and Respond.js add IE8 support of HTML5 elements and media queries -->
        ";
        // line 11
        $this->loadTemplate("BraincraftedBootstrapBundle::ie8-support.html.twig", "::base.html.twig", 11)->display($context);
        // line 12
        echo "
        <link rel=\"stylesheet\" href = \"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/dateTimepicker/css/bootstrap-datetimepicker.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href = \"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ljtrtool/css/main.css"), "html", null, true);
        echo "\" />

        <!-- RoleApproval New -->
        <link rel=\"stylesheet\" href = \"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/matmtypeahead/css/typeahead.css"), "html", null, true);
        echo "\" />
        <link rel=\"stylesheet\" href = \"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bootstrap-switch/css/bootstrap-switch.css"), "html", null, true);
        echo "\" />

        ";
        // line 20
        $this->displayBlock('head', $context, $blocks);
        // line 21
        echo "    </head>
     
    <body role=\"document\">

        <nav class=\"navbar navbar-default\" role=\"navigation\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span> <span class=\"icon-bar\"></span><span
                            class=\"icon-bar\"></span><span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"http://www.jquery2dotnet.com\">Brand</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li class=\"active\"><a href=\"#\"><span class=\"glyphicon glyphicon-home\"></span>Dashboard</a></li>
                    <!--
                        <li><a href=\"#\"><span class=\"glyphicon glyphicon-calendar\"></span>Calendar</a></li>
                    -->

                    <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span
                                    class=\"glyphicon glyphicon-tasks\"></span>Admin <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"";
        // line 45
        echo $this->env->getExtension('routing')->getPath("event_index");
        echo "\">Veranstaltungen</a></li>
                            <li><a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("person_index");
        echo "\">Personenverwaltung</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("division_index");
        echo "\">Gliederungsverwaltung</a></li>
                            <li><a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("role_index");
        echo "\">Rollenverwaltung</a></li>
                            <li><a href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("condition_index");
        echo "\">Anforderungsverwaltung</a></li>
                        </ul>
                    </li>

                    ";
        // line 54
        if ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array(), "any", false, true), "attributes", array(), "any", false, true), "get", array(0 => "_route_params"), "method", false, true), "eventLinkName", array(), "array", true, true)) {
            // line 55
            echo "                        <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span
                                        class=\"glyphicon glyphicon-tasks\"></span>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), "eventLinkName", array(), "array"), "html", null, true);
            echo " <b class=\"caret\"></b></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_show", array("eventLinkName" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), "eventLinkName", array(), "array"))), "html", null, true);
            echo "\">Veranstaltung</a></li>

                                <li class=\"divider\"></li>
                                <li><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("roleApproval_index", array("eventLinkName" => $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route_params"), "method"), "eventLinkName", array(), "array"))), "html", null, true);
            echo "\">Rollenverwaltung</a></li>
                            </ul>
                        </li>
                    ";
        }
        // line 65
        echo "                    <li class=\"dropdown\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
                            <span class=\"glyphicon glyphicon-tasks\"></span> <span class=\"badge bg-success\" style=\"position: absolute;left: 30px;top: 9px;\">";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('todo')->getTodoCount(), "html", null, true);
        echo "</span> </a>
                        <ul class=\"dropdown-menu\" style=\"font-size: 11px;width: 300px;\">
                            ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('todo')->getTodos());
        foreach ($context['_seq'] as $context["_key"] => $context["todo"]) {
            // line 70
            echo "                                <li><a>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["todo"], "todo", array()));
            echo "</a></li>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['todo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                        </ul>
                    </li>

                    <li class=\"dropdown\"><!--
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span
                                    class=\"glyphicon glyphicon-search\"></span>Search <b class=\"caret\"></b></a>
                        <ul class=\"dropdown-menu\" style=\"min-width: 300px;\">
                            <li>
                                <div class=\"row\">
                                    <div class=\"col-md-12\">
                                        <form class=\"navbar-form navbar-left\" role=\"search\">
                                            <div class=\"input-group\">
                                                <input type=\"text\" class=\"form-control\" placeholder=\"Search\" />
                                            <span class=\"input-group-btn\">
                                                <button class=\"btn btn-primary\" type=\"button\">
                                                    Go!</button>
                                            </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>-->
                </ul>

                <ul class=\"nav navbar-nav navbar-right\">
                    <!--
                    <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span
                                    class=\"glyphicon glyphicon-comment\"></span>Chats <span class=\"label label-primary\">42</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\"><span class=\"label label-warning\">7:00 AM</span>Hi :)</a></li>
                            <li><a href=\"#\"><span class=\"label label-warning\">8:00 AM</span>How are you?</a></li>
                            <li><a href=\"#\"><span class=\"label label-warning\">9:00 AM</span>What are you doing?</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\" class=\"text-center\">View All</a></li>
                        </ul>
                    </li>
                    <li class=\"dropdown\"><a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\"><span
                                    class=\"glyphicon glyphicon-envelope\"></span>Inbox <span class=\"label label-info\">32</span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\"><span class=\"label label-warning\">4:00 AM</span>Favourites Snippet</a></li>
                            <li><a href=\"#\"><span class=\"label label-warning\">4:30 AM</span>Email marketing</a></li>
                            <li><a href=\"#\"><span class=\"label label-warning\">5:00 AM</span>Subscriber focused email
                                    design</a></li>
                            <li class=\"divider\"></li>
                            <li><a href=\"#\" class=\"text-center\">View All</a></li>
                        </ul>
                    </li>
                    -->
                    <li class=\"dropdown\">


                        <a ";
        // line 127
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            echo "href=\"#\" data-toggle=\"dropdown\" ";
        } else {
            echo "href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\" ";
        }
        echo " class=\"dropdown-toggle\">
                            <span class=\"glyphicon glyphicon-user\"></span>
                            ";
        // line 129
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 130
            echo "                                ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " <b class=\"caret\"></b>
                            ";
        } else {
            // line 132
            echo "                                Login
                            ";
        }
        // line 134
        echo "                        </a>
                        ";
        // line 135
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 136
            echo "                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
            // line 137
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("person_show", array("personId" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "person", array()), "personId", array()))), "html", null, true);
            echo "\"><span class=\"glyphicon glyphicon-user\"></span>Profile</a></li>
                                <li><a href=\"#\"><span class=\"glyphicon glyphicon-cog\"></span>Settings</a></li>
                                <li class=\"divider\"></li>
                                <li><a href=\"";
            // line 140
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><span class=\"glyphicon glyphicon-off\"></span>Logout</a></li>
                            </ul>
                        ";
        }
        // line 143
        echo "                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
         
        <div class='container theme-showcase' role='main'>

            <div class='row'>
                <div class='col-md-12'>
                    <!--Body content-->
                    ";
        // line 154
        $this->displayBlock('body', $context, $blocks);
        // line 155
        echo "                </div>
            </div>
             
        </div>

        ";
        // line 160
        if ((array_key_exists("modal_dialog", $context) && ((isset($context["modal_dialog"]) ? $context["modal_dialog"] : $this->getContext($context, "modal_dialog")) == true))) {
            // line 161
            echo "            <!-- Modal Dialog -->
            <div class=\"modal fade\" id=\"confirmDelete\" role=\"dialog\" aria-labelledby=\"confirmDeleteLabel\" aria-hidden=\"true\">
                <div class=\"modal-dialog\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                            <h4 class=\"modal-title\">Unwiderruflich löschen</h4>
                        </div>
                        <div class=\"modal-body\">
                            <p>Bist du dir sicher, dass du fortfahren möchtest?</p>
                        </div>
                        <div class=\"modal-footer\">
                            <button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Abbrechen</button>
                            <button type=\"button\" class=\"btn btn-danger\" id=\"confirm\">Löschen</button>
                        </div>
                    </div>
                </div>
            </div>
        ";
        }
        // line 180
        echo "


        ";
        // line 183
        $this->displayBlock('javascripts', $context, $blocks);
        // line 191
        echo "         
    </body>
</html>";
    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
    }

    // line 20
    public function block_head($context, array $blocks = array())
    {
    }

    // line 154
    public function block_body($context, array $blocks = array())
    {
    }

    // line 183
    public function block_javascripts($context, array $blocks = array())
    {
        // line 184
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "696a6fb_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_696a6fb_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/696a6fb_jquery_1.js");
            // line 185
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "696a6fb"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_696a6fb") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/696a6fb.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 187
        echo "            ";
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "0f305f1_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0f305f1_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0f305f1_bootstrap_1.js");
            // line 188
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        } else {
            // asset "0f305f1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_0f305f1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/0f305f1.js");
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
            ";
        }
        unset($context["asset_url"]);
        // line 190
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  376 => 190,  362 => 188,  357 => 187,  343 => 185,  338 => 184,  335 => 183,  330 => 154,  325 => 20,  320 => 6,  314 => 191,  312 => 183,  307 => 180,  286 => 161,  284 => 160,  277 => 155,  275 => 154,  262 => 143,  256 => 140,  250 => 137,  247 => 136,  245 => 135,  242 => 134,  238 => 132,  232 => 130,  230 => 129,  219 => 127,  162 => 72,  153 => 70,  149 => 69,  144 => 67,  140 => 65,  133 => 61,  127 => 58,  122 => 56,  119 => 55,  117 => 54,  110 => 50,  106 => 49,  102 => 48,  97 => 46,  93 => 45,  67 => 21,  65 => 20,  60 => 18,  56 => 17,  50 => 14,  46 => 13,  43 => 12,  41 => 11,  35 => 8,  30 => 6,  23 => 1,);
    }
}
