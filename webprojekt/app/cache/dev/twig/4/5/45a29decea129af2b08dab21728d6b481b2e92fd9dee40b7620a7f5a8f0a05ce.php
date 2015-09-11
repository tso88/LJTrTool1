<?php

/* LJTrToolRegistrationBundle:Event:show.html.twig */
class __TwigTemplate_45a29decea129af2b08dab21728d6b481b2e92fd9dee40b7620a7f5a8f0a05ce extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LJTrToolRegistrationBundle:Event:show.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventName", array()));
    }

    // line 12
    public function block_body($context, array $blocks = array())
    {
        // line 13
        echo "    <div class=\"container\">
        <h1>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventName", array()));
        echo "</h1>
        ";
        // line 15
        if ( !twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startTime", array()))) {
            // line 16
            echo "            <h4>
                ";
            // line 17
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startTime", array()), "d.m.Y"), "html", null, true);
            echo "
                ";
            // line 18
            if ( !twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endTime", array()))) {
                // line 19
                echo "                    bis ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endTime", array()), "d.m.Y"), "html", null, true);
                echo "
                ";
            }
            // line 21
            echo "            </h4>
        ";
        }
        // line 23
        echo "        ";
        if ( !twig_test_empty($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description", array()))) {
            // line 24
            echo "            ";
            echo nl2br(twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "description", array()), "html", null, true));
            echo "
        ";
        }
        // line 26
        echo "    </div>

    ";
        // line 28
        if ((twig_length_filter($this->env, (isset($context["registrations"]) ? $context["registrations"] : $this->getContext($context, "registrations"))) > 0)) {
            // line 29
            echo "        <div class=\"container\">
            <h3>Anmeldung</h3>
            <div class=\"row\">
                <table class=\"table table-hover table-bordered\">
                    <tr>
                        <th>Anmelderolle</th>
                        <th>Anforderungen</th>
                        <th>Anmelde-/Abmeldezeitraum</th>
                        <th></th>
                        <th></th>
                    </tr>
                    ";
            // line 40
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["registrations"]) ? $context["registrations"] : $this->getContext($context, "registrations")));
            foreach ($context['_seq'] as $context["_key"] => $context["registration"]) {
                // line 41
                echo "                        <tr>
                            <td>";
                // line 42
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "role", array()), "displayName", array()), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 44
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "role", array()), "conditions", array())) > 0)) {
                    // line 45
                    echo "                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "role", array()), "conditions", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
                        // line 46
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["condition"], "displayName", array()));
                        echo "<br />
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "                                ";
                } else {
                    // line 49
                    echo "                                    keine
                                ";
                }
                // line 51
                echo "                            </td>
                            <td style=\"border-right: 0;\">

                                <!-- aktiv -->
                                ";
                // line 55
                if (((twig_date_format_filter($this->env, "now", "YmdHi") >= twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationStartTime", array()), "YmdHi")) && (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationEndTime", array()), "YmdHi") >= twig_date_format_filter($this->env, "now", "YmdHi")))) {
                    // line 56
                    echo "                                    ";
                    if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationEndTime", array()), "H:i") == "00:00")) {
                        // line 57
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationEndTime", array()), "d.m.Y"), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 59
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationEndTime", array()), "d.m.Y H:i"), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 61
                    echo "                                    (noch ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()), "html", null, true);
                    echo "
                                    ";
                    // line 62
                    if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()) == 1)) {
                        echo " Tag ";
                    } else {
                        echo " Tage";
                    }
                    // line 63
                    echo "                                    ";
                    if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()) <= 2)) {
                        // line 64
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "h", array()), "html", null, true);
                        echo "
                                        ";
                        // line 65
                        if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "h", array()) == 1)) {
                            echo "Stunde ";
                        } else {
                            echo "Stunden";
                        }
                        // line 66
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "i", array()), "html", null, true);
                        echo "
                                        ";
                        // line 67
                        if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "i", array()) == 1)) {
                            echo "Minute ";
                        } else {
                            echo "Minuten";
                        }
                        // line 68
                        echo "                                    ";
                    }
                    // line 69
                    echo "                                    )
                                ";
                } elseif ((twig_date_format_filter($this->env, "now", "YmdHi") < twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(                // line 70
$context["registration"], "roleApproval", array()), "registrationStartTime", array()), "YmdHi"))) {
                    // line 71
                    echo "                                    ";
                    if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationStartTime", array()), "H:i") == "00:00")) {
                        // line 72
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationStartTime", array()), "d.m.Y"), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 74
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationStartTime", array()), "d.m.Y H:i"), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 76
                    echo "                                    bis
                                    ";
                    // line 77
                    if ((twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationEndTime", array()), "H:i") == "00:00")) {
                        // line 78
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationEndTime", array()), "d.m.Y"), "html", null, true);
                        echo "
                                    ";
                    } else {
                        // line 80
                        echo "                                        ";
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationEndTime", array()), "d.m.Y H:i"), "html", null, true);
                        echo "
                                    ";
                    }
                    // line 82
                    echo "                                    in ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()), "html", null, true);
                    echo "
                                    ";
                    // line 83
                    if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()) == 1)) {
                        echo " Tag ";
                    } else {
                        echo " Tagen";
                    }
                    // line 84
                    echo "                                    )
                                ";
                } elseif ((twig_date_format_filter($this->env, "now", "YmdHi") > twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(                // line 85
$context["registration"], "roleApproval", array()), "registrationEndTime", array()), "YmdHi"))) {
                    // line 86
                    echo "                                    abgelaufen
                                ";
                }
                // line 88
                echo "                            </td>
                            <td>
                                ";
                // line 90
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["registration"], "attendanceTimes", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attendanceTime"]) {
                    // line 91
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["attendanceTime"], "getTime", array(), "method"), "html", null, true);
                    echo "<br />
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attendanceTime'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 93
                echo "                            </td>
                            <td style=\"text-align: right;border-left: 0;\">
                                <!-- aktiv -->
                                ";
                // line 96
                if (((twig_date_format_filter($this->env, "now", "YmdHi") >= twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationStartTime", array()), "YmdHi")) && (twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "registrationEndTime", array()), "YmdHi") >= twig_date_format_filter($this->env, "now", "YmdHi")))) {
                    // line 97
                    echo "                                    <form method=\"GET\" action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registration_delete", array("registrationId" => $this->getAttribute($context["registration"], "registrationId", array()))), "html", null, true);
                    echo "\" accept-charset=\"UTF-8\" style=\"display:inline\">
                                        <button class=\"btn btn-xs btn-danger\" type=\"button\" data-toggle=\"modal\" data-target=\"#confirmDelete\" data-title=\"Abmeldung\" data-message=\"Möchtest du dich wirklich als ";
                    // line 98
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "role", array()), "DisplayName", array()), "html", null, true);
                    echo " für die Veranstaltung ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventName", array()), "html", null, true);
                    echo " abmelden?\">
                                            <i class=\"glyphicon glyphicon-list-alt\"></i> Abmelden
                                        </button>
                                    </form>

                                ";
                } elseif ((twig_date_format_filter($this->env, "now", "YmdHi") > twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute(                // line 103
$context["registration"], "roleApproval", array()), "registrationEndTime", array()), "YmdHi"))) {
                    // line 104
                    echo "                                    <form style=\"display:inline\">
                                        <button class=\"btn btn-xs btn-error\" type=\"button\">
                                            <i class=\"glyphicon glyphicon-remove\"></i> keine Abmeldung mehr möglich
                                        </button>
                                    </form>
                                ";
                }
                // line 110
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registration'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 113
            echo "                </table>
            </div>
        </div>
    ";
        }
        // line 117
        echo "
    ";
        // line 118
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "roleApprovals", array())) > 0)) {
            // line 119
            echo "        <div class=\"container\">
            <h3>Mögliche Anmeldungen</h3>
            ";
            // line 121
            if ((twig_length_filter($this->env, (isset($context["registrations"]) ? $context["registrations"] : $this->getContext($context, "registrations"))) > 0)) {
                // line 122
                echo "                Du bist angemeldet als ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["registrations"]) ? $context["registrations"] : $this->getContext($context, "registrations")));
                foreach ($context['_seq'] as $context["_key"] => $context["registration"]) {
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "role", array()), "displayName", array()), "html", null, true);
                    echo ". ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registration'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 123
                echo "            ";
            } else {
                // line 124
                echo "                Melde dich für die Veranstaltung ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventName", array()));
                echo " an.
            ";
            }
            // line 126
            echo "
            <div class=\"row\">
                <table class=\"table table-hover table-bordered\">
                    <tr>
                        <th>Anmelderolle</th>
                        <th>Anforderungen</th>
                        <th>Anmeldezeitraum</th>
                        <th></th>
                    </tr>
                    ";
            // line 135
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "roleApprovals", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["roleApproval"]) {
                // line 136
                echo "                        <tr";
                if ((twig_length_filter($this->env, (isset($context["registrations"]) ? $context["registrations"] : $this->getContext($context, "registrations"))) > 0)) {
                    // line 137
                    echo "                            ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["registrations"]) ? $context["registrations"] : $this->getContext($context, "registrations")));
                    foreach ($context['_seq'] as $context["_key"] => $context["registration"]) {
                        // line 138
                        echo "                                ";
                        if (($this->getAttribute($this->getAttribute($context["registration"], "roleApproval", array()), "roleApprovalId", array()) == $this->getAttribute($context["roleApproval"], "roleApprovalId", array()))) {
                            // line 139
                            echo "                                    class=\"hidden\"
                                ";
                        }
                        // line 141
                        echo "                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['registration'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 142
                    echo "                            ";
                }
                echo ">
                            <td>";
                // line 143
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["roleApproval"], "role", array()), "displayName", array()), "html", null, true);
                echo "</td>
                            <td>
                                ";
                // line 145
                if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute($context["roleApproval"], "role", array()), "conditions", array())) > 0)) {
                    // line 146
                    echo "                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($context["roleApproval"], "role", array()), "conditions", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["condition"]) {
                        // line 147
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["condition"], "displayName", array()));
                        echo "<br />
                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['condition'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 149
                    echo "                                ";
                } else {
                    // line 150
                    echo "                                    keine
                                ";
                }
                // line 152
                echo "                            </td>
                            <td style=\"border-right: 0;\">
                                ";
                // line 154
                if ((twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array()), "H:i") == "00:00")) {
                    // line 155
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array()), "d.m.Y"), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 157
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array()), "d.m.Y H:i"), "html", null, true);
                    echo "
                                ";
                }
                // line 159
                echo "                                bis
                                ";
                // line 160
                if ((twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array()), "H:i") == "00:00")) {
                    // line 161
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array()), "d.m.Y"), "html", null, true);
                    echo "
                                ";
                } else {
                    // line 163
                    echo "                                    ";
                    echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array()), "d.m.Y H:i"), "html", null, true);
                    echo "
                                ";
                }
                // line 165
                echo "                                (
                                <!-- aktiv -->
                                ";
                // line 167
                if (((twig_date_format_filter($this->env, "now", "YmdHi") >= twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array()), "YmdHi")) && (twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array()), "YmdHi") >= twig_date_format_filter($this->env, "now", "YmdHi")))) {
                    // line 168
                    echo "                                    noch ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()), "html", null, true);
                    echo "
                                    ";
                    // line 169
                    if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()) == 1)) {
                        echo " Tag ";
                    } else {
                        echo " Tage";
                    }
                    // line 170
                    echo "                                    ";
                    if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()) <= 2)) {
                        // line 171
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "h", array()), "html", null, true);
                        echo "
                                        ";
                        // line 172
                        if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "h", array()) == 1)) {
                            echo "Stunde ";
                        } else {
                            echo "Stunden";
                        }
                        // line 173
                        echo "                                        ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "i", array()), "html", null, true);
                        echo "
                                        ";
                        // line 174
                        if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "i", array()) == 1)) {
                            echo "Minute ";
                        } else {
                            echo "Minuten";
                        }
                        // line 175
                        echo "                                    ";
                    }
                    // line 176
                    echo "                                    ";
                } elseif ((twig_date_format_filter($this->env, "now", "YmdHi") < twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array()), "YmdHi"))) {
                    // line 177
                    echo "                                        in ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()), "html", null, true);
                    echo "
                                        ";
                    // line 178
                    if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()) == 1)) {
                        echo " Tag ";
                    } else {
                        echo " Tagen";
                    }
                    // line 179
                    echo "                                        ";
                    if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()) <= 2)) {
                        // line 180
                        echo "                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "h", array()), "html", null, true);
                        echo "
                                            ";
                        // line 181
                        if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "h", array()) == 1)) {
                            echo "Stunde ";
                        } else {
                            echo "Stunden";
                        }
                        // line 182
                        echo "                                            ";
                        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "i", array()), "html", null, true);
                        echo "
                                            ";
                        // line 183
                        if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "i", array()) == 1)) {
                            echo "Minute ";
                        } else {
                            echo "Minuten";
                        }
                        // line 184
                        echo "                                        ";
                    }
                    // line 185
                    echo "                                    ";
                } elseif ((twig_date_format_filter($this->env, "now", "YmdHi") > twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array()), "YmdHi"))) {
                    // line 186
                    echo "                                        abgelaufen seit
                                        ";
                    // line 187
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()), "html", null, true);
                    echo "
                                        ";
                    // line 188
                    if (($this->getAttribute($this->getAttribute(twig_date_converter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array())), "diff", array(0 => twig_date_converter($this->env, "now")), "method"), "days", array()) == 1)) {
                        echo " Tag ";
                    } else {
                        echo " Tagen";
                    }
                    // line 189
                    echo "                                ";
                }
                // line 190
                echo "                                )
                            </td>
                            <td style=\"text-align: right;border-left: 0;\">
                                <!-- aktiv -->
                                ";
                // line 194
                if (((twig_date_format_filter($this->env, "now", "YmdHi") >= twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationStartTime", array()), "YmdHi")) && (twig_date_format_filter($this->env, $this->getAttribute($context["roleApproval"], "registrationEndTime", array()), "YmdHi") >= twig_date_format_filter($this->env, "now", "YmdHi")))) {
                    // line 195
                    echo "                                    <form method=\"GET\" action=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registration_new", array("eventLinkName" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "eventLinkName", array()), "roleApproval" => $this->getAttribute($context["roleApproval"], "roleApprovalId", array()))), "html", null, true);
                    echo "\" accept-charset=\"UTF-8\" style=\"display:inline\">
                                        <button class=\"btn btn-xs btn-primary\" type=\"submit\">
                                            <i class=\"glyphicon glyphicon-list-alt\"></i> Anmelden
                                        </button>
                                    </form>
                                ";
                }
                // line 201
                echo "                            </td>
                        </tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['roleApproval'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 204
            echo "                </table>
            </div>
        </div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "LJTrToolRegistrationBundle:Event:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  607 => 204,  599 => 201,  589 => 195,  587 => 194,  581 => 190,  578 => 189,  572 => 188,  568 => 187,  565 => 186,  562 => 185,  559 => 184,  553 => 183,  548 => 182,  542 => 181,  537 => 180,  534 => 179,  528 => 178,  523 => 177,  520 => 176,  517 => 175,  511 => 174,  506 => 173,  500 => 172,  495 => 171,  492 => 170,  486 => 169,  481 => 168,  479 => 167,  475 => 165,  469 => 163,  463 => 161,  461 => 160,  458 => 159,  452 => 157,  446 => 155,  444 => 154,  440 => 152,  436 => 150,  433 => 149,  424 => 147,  419 => 146,  417 => 145,  412 => 143,  407 => 142,  401 => 141,  397 => 139,  394 => 138,  389 => 137,  386 => 136,  382 => 135,  371 => 126,  365 => 124,  362 => 123,  351 => 122,  349 => 121,  345 => 119,  343 => 118,  340 => 117,  334 => 113,  326 => 110,  318 => 104,  316 => 103,  306 => 98,  301 => 97,  299 => 96,  294 => 93,  285 => 91,  281 => 90,  277 => 88,  273 => 86,  271 => 85,  268 => 84,  262 => 83,  257 => 82,  251 => 80,  245 => 78,  243 => 77,  240 => 76,  234 => 74,  228 => 72,  225 => 71,  223 => 70,  220 => 69,  217 => 68,  211 => 67,  206 => 66,  200 => 65,  195 => 64,  192 => 63,  186 => 62,  181 => 61,  175 => 59,  169 => 57,  166 => 56,  164 => 55,  158 => 51,  154 => 49,  151 => 48,  142 => 46,  137 => 45,  135 => 44,  130 => 42,  127 => 41,  123 => 40,  110 => 29,  108 => 28,  104 => 26,  98 => 24,  95 => 23,  91 => 21,  85 => 19,  83 => 18,  79 => 17,  76 => 16,  74 => 15,  70 => 14,  67 => 13,  64 => 12,  58 => 10,  42 => 6,  38 => 5,  33 => 4,  30 => 3,  11 => 1,);
    }
}
