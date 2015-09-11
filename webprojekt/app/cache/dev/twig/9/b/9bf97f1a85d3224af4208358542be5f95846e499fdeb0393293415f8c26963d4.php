<?php

/* LJTrToolRegistrationBundle:RoleApproval:index.html.twig */
class __TwigTemplate_9bf97f1a85d3224af4208358542be5f95846e499fdeb0393293415f8c26963d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LJTrToolRegistrationBundle:RoleApproval:index.html.twig", 1);
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
        echo "Veranstaltungsverwaltung ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventName", array()));
        echo " - Anmeldung";
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    <h1>Veranstaltungsverwaltung ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventName", array()));
        echo "</h1>

    <ul class=\"nav nav-tabs\">
        <li role=\"presentation\"><a href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("event_edit", array("eventLinkName" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventLinkName", array()))), "html", null, true);
        echo "\">Allgemeines</a></li>
        <li role=\"presentation\" class=\"active\"><a href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("roleApproval_index", array("eventLinkName" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventLinkName", array()))), "html", null, true);
        echo "\">Anmeldungen</a></li>
        <li role=\"presentation\"><a href=\"#\">Messages</a></li>
    </ul>

    <br />
    <div class=\"row\">
        <table class=\"table table-hover table-bordered\">
            <tr>
                <th>Anmelderolle</th>
                <th>Anforderungen</th>
                <th>Anmeldezeitraum</th>
                <th></th>
                <th style=\"text-align: right\">
                    <form method=\"GET\" action=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("roleApproval_new", array("eventLinkName" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventLinkName", array()))), "html", null, true);
        echo "\" accept-charset=\"UTF-8\" style=\"display:inline\">
                        <button class=\"btn btn-xs btn-success\" type=\"submit\">
                            <i class=\"glyphicon glyphicon-plus\"></i> Neu
                        </button>
                    </form>
                </th>
            </tr>
            ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "roleApprovals", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["roleApproval"]) {
            // line 38
            echo "                <tr class=\"
                    ";
            // line 39
            if ( !$this->getAttribute($context["roleApproval"], "showRole", array())) {
                // line 40
                echo "                        active
                    ";
            } elseif ((twig_date_format_filter($this->env, "now", "YmdHi") > twig_date_format_filter($this->env, $this->getAttribute(            // line 41
$context["roleApproval"], "registrationEndTime", array()), "YmdHi"))) {
                // line 42
                echo "                        active
                    ";
            } elseif ((twig_date_format_filter($this->env, "now", "YmdHi") < twig_date_format_filter($this->env, $this->getAttribute(            // line 43
$context["roleApproval"], "registrationStartTime", array()), "YmdHi"))) {
                // line 44
                echo "                        active
                    ";
            } else {
                // line 46
                echo "                        success
                    ";
            }
            // line 47
            echo "\">
                    <td><a href=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("roleApproval_show", array("eventLinkName" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventLinkName", array()), "roleApprovalId" => $this->getAttribute($context["roleApproval"], "roleApprovalId", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["roleApproval"], "role", array()), "displayName", array()), "html", null, true);
            echo "</a></td>
                    <td>
                        ";
            // line 50
            if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["roleApproval"], "role", array()), "conditions", array())) > 0)) {
                // line 51
                echo "                            ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["roleApproval"], "role", array()), "conditions", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
                    // line 52
                    echo "                                ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["condition"], "displayName", array()));
                    echo "<br />
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 54
                echo "                        ";
            } else {
                // line 55
                echo "                            keine
                        ";
            }
            // line 57
            echo "                    </td>
                    <td style=\"border-right: 0;\">
                        ";
            // line 59
            if (( !(null === $this->getAttribute($context["roleApproval"], "registrationStartTime", array())) ||  !(null === $this->getAttribute($context["roleApproval"], "registrationEndTime", array())))) {
                // line 60
                echo "
                            ";
                // line 61
                if ((twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array()), "H:i") == "00:00")) {
                    // line 62
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array()), "d.m.Y"), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 64
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array()), "d.m.Y H:i"), "html", null, true);
                    echo "
                            ";
                }
                // line 66
                echo "                            bis
                            ";
                // line 67
                if ((twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array()), "H:i") == "00:00")) {
                    // line 68
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array()), "d.m.Y"), "html", null, true);
                    echo "
                            ";
                } else {
                    // line 70
                    echo "                                ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array()), "d.m.Y H:i"), "html", null, true);
                    echo "
                            ";
                }
                // line 72
                echo "                            (
                            <!-- aktiv -->
                            ";
                // line 74
                if (((twig_date_format_filter($this->env, "now", "YmdHi") >= twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array()), "YmdHi")) && (twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array()), "YmdHi") >= twig_date_format_filter($this->env, "now", "YmdHi")))) {
                    // line 75
                    echo "                                noch ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()), "html", null, true);
                    echo "
                                ";
                    // line 76
                    if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()) == 1)) {
                        echo " Tag ";
                    } else {
                        echo " Tage";
                    }
                    // line 77
                    echo "                                ";
                    if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()) <= 2)) {
                        // line 78
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "h", array()), "html", null, true);
                        echo "
                                    ";
                        // line 79
                        if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "h", array()) == 1)) {
                            echo "Stunde ";
                        } else {
                            echo "Stunden";
                        }
                        // line 80
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "i", array()), "html", null, true);
                        echo "
                                    ";
                        // line 81
                        if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "i", array()) == 1)) {
                            echo "Minute ";
                        } else {
                            echo "Minuten";
                        }
                        // line 82
                        echo "                                ";
                    }
                    // line 83
                    echo "                            ";
                } elseif ((twig_date_format_filter($this->env, "now", "YmdHi") < twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array()), "YmdHi"))) {
                    // line 84
                    echo "                                in ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()), "html", null, true);
                    echo "
                                ";
                    // line 85
                    if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()) == 1)) {
                        echo " Tag ";
                    } else {
                        echo " Tagen";
                    }
                    // line 86
                    echo "                                ";
                    if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()) <= 2)) {
                        // line 87
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "h", array()), "html", null, true);
                        echo "
                                    ";
                        // line 88
                        if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "h", array()) == 1)) {
                            echo "Stunde ";
                        } else {
                            echo "Stunden";
                        }
                        // line 89
                        echo "                                    ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "i", array()), "html", null, true);
                        echo "
                                    ";
                        // line 90
                        if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "i", array()) == 1)) {
                            echo "Minute ";
                        } else {
                            echo "Minuten";
                        }
                        // line 91
                        echo "                                ";
                    }
                    // line 92
                    echo "                            ";
                } elseif ((twig_date_format_filter($this->env, "now", "YmdHi") > twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array()), "YmdHi"))) {
                    // line 93
                    echo "                                abgelaufen <!-- seit
                                ";
                    // line 94
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()), "html", null, true);
                    echo "
                                ";
                    // line 95
                    if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()) == 1)) {
                        echo " Tag ";
                    } else {
                        echo " Tagen";
                    }
                    // line 96
                    echo "                                -->
                            ";
                }
                // line 98
                echo "                            )
                        ";
            } else {
                // line 100
                echo "                            kein Zeitraum angegeben
                        ";
            }
            // line 102
            echo "                    </td>
                    <td>";
            // line 103
            if ($this->getAttribute($context["roleApproval"], "showRole", array())) {
                echo "aktiviert";
            } else {
                echo "deaktiviert";
            }
            echo "</td>
                    <td style=\"text-align: right\">
                        <form method=\"GET\" action=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("roleApproval_new", array("eventLinkName" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventLinkName", array()), "roleApprovalId" => $this->getAttribute($context["roleApproval"], "roleApprovalId", array()))), "html", null, true);
            echo "\" accept-charset=\"UTF-8\" style=\"display:inline\">
                            <button class=\"btn btn-xs btn-primary\" type=\"submit\">
                                <i class=\"glyphicon glyphicon-pencil\"></i> Ändern
                            </button>
                        </form>
                        <form method=\"GET\" action=\"";
            // line 110
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("roleApproval_new", array("eventLinkName" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventLinkName", array()), "roleApprovalId" => $this->getAttribute($context["roleApproval"], "roleApprovalId", array()))), "html", null, true);
            echo "\" accept-charset=\"UTF-8\" style=\"display:inline\">

                            <button class=\"btn btn-xs btn-danger\" type=\"button\" data-toggle=\"modal\" data-target=\"#confirmDelete\" data-title=\"Rolle löschen\" data-message=\"Möchtest du die Rolle ";
            // line 112
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["roleApproval"], "role", array()), "displayName", array()), "html", null, true);
            echo " wirklich löschen?\">
                                <i class=\"glyphicon glyphicon-trash\"></i> Löschen
                            </button>
                        </form>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roleApproval'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 119
        echo "        </table>
    </div>

";
    }

    public function getTemplateName()
    {
        return "LJTrToolRegistrationBundle:RoleApproval:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  359 => 119,  346 => 112,  341 => 110,  333 => 105,  324 => 103,  321 => 102,  317 => 100,  313 => 98,  309 => 96,  303 => 95,  299 => 94,  296 => 93,  293 => 92,  290 => 91,  284 => 90,  279 => 89,  273 => 88,  268 => 87,  265 => 86,  259 => 85,  254 => 84,  251 => 83,  248 => 82,  242 => 81,  237 => 80,  231 => 79,  226 => 78,  223 => 77,  217 => 76,  212 => 75,  210 => 74,  206 => 72,  200 => 70,  194 => 68,  192 => 67,  189 => 66,  183 => 64,  177 => 62,  175 => 61,  172 => 60,  170 => 59,  166 => 57,  162 => 55,  159 => 54,  150 => 52,  145 => 51,  143 => 50,  136 => 48,  133 => 47,  129 => 46,  125 => 44,  123 => 43,  120 => 42,  118 => 41,  115 => 40,  113 => 39,  110 => 38,  106 => 37,  96 => 30,  80 => 17,  76 => 16,  69 => 13,  66 => 12,  58 => 10,  42 => 6,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
