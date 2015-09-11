<?php

/* LJTrToolRegistrationBundle:Person:show.html.twig */
class __TwigTemplate_63e403a4c1f5d18e941f8d926c5ae91a424347b0398432d096dfa1932dc1a0a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::base.html.twig", "LJTrToolRegistrationBundle:Person:show.html.twig", 1);
        $this->blocks = array(
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
    public function block_title($context, array $blocks = array())
    {
        echo "LJTrToolRegistrationBundle:Person:show";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <h1>Persönliche Daten</h1>
    <div class=\"container\">
        <h3>Persönliches</h3>
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <dl class=\"dl-horizontal\">
                    <dt>Name:</dt>
                    <dd>";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "firstname", array()));
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "name", array()));
        echo "</dd>
                    ";
        // line 14
        if ( !twig_test_empty($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "birthday", array()))) {
            // line 15
            echo "                        <dt>Geburtstag:</dt>
                        <dd>";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "birthday", array()), "d.m.Y"), "html", null, true);
            echo "</dd>
                    ";
        }
        // line 18
        echo "                    ";
        if ( !(null === $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "division", array()))) {
            // line 19
            echo "                        <dt>Gliederung:</dt>
                        <dd>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "division", array()), "divisionName", array()));
            echo "</dd>
                    ";
        }
        // line 22
        echo "                    ";
        if ( !(null === $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "gender", array()))) {
            // line 23
            echo "                        <dt>Geschlecht:</dt>
                        <dd>";
            // line 24
            if (($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "gender", array()) == "w")) {
                echo "weiblich";
            } elseif (($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "gender", array()) == "m")) {
                echo "männlich";
            }
            echo "</dd>
                    ";
        }
        // line 26
        echo "                </dl>
            </div>
            <div class=\"col-sm-6\">
                <img style=\"width: 100px; height: auto\" src=\"/";
        // line 29
        if ( !(null === $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "path", array()))) {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "WebPath", array()), "html", null, true);
        } else {
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "uploadDir", array()), "html", null, true);
            echo "/dummy.jpg";
        }
        echo "\">
            </div>
        </div>
    </div>


    ";
        // line 35
        if ((( !(null === $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "address", array())) ||  !(null === $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "email", array()))) ||  !(null === $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "phone", array())))) {
            // line 36
            echo "        <div class=\"container\">
            <h3>Kontakt</h3>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <dl class=\"dl-horizontal\">
                        ";
            // line 41
            if ( !(null === $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "email", array()))) {
                // line 42
                echo "                            <dt>Email:</dt>
                            <dd>";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "email", array()));
                echo "</dt>
                        ";
            }
            // line 45
            echo "                        ";
            if ( !(null === $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "phone", array()))) {
                // line 46
                echo "                            <dt>Telefon:</dt>
                            <dd>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "phone", array()));
                echo "</dt>
                        ";
            }
            // line 49
            echo "
                        ";
            // line 50
            if ( !(null === $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "address", array()))) {
                // line 51
                echo "                            <dt>Adresse:</dt>
                            <dd>
                                ";
                // line 53
                if (( !(null === $this->getAttribute($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "address", array()), "street", array())) ||  !(null === $this->getAttribute($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "address", array()), "city", array())))) {
                    // line 54
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "address", array()), "street", array()));
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "address", array()), "houseNumber", array()));
                    echo "<br />
                                ";
                }
                // line 56
                echo "                                ";
                if (( !(null === $this->getAttribute($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "address", array()), "street", array())) ||  !(null === $this->getAttribute($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "address", array()), "city", array())))) {
                    // line 57
                    echo "                                    ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "address", array()), "postcode", array()));
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "address", array()), "city", array()));
                    echo "
                                ";
                }
                // line 59
                echo "                            </dd>
                        ";
            }
            // line 61
            echo "                    </dl>
                </div>
            </div>
        </div>
    ";
        }
        // line 66
        echo "
    ";
        // line 67
        if ( !(null === $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "feeding", array()))) {
            // line 68
            echo "        <div class=\"container\">
            <h3>Besonderheiten</h3>
            <div class=\"row\">
                <div class=\"col-sm-6\">
                    <dl class=\"dl-horizontal\">
                        ";
            // line 73
            if ( !(null === $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "feeding", array()))) {
                // line 74
                echo "                            <dt>Ernährung:</dt>
                            <dd>";
                // line 75
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "feeding", array()), "feedingName", array()));
                echo "</dd>
                        ";
            }
            // line 77
            echo "                    </dl>
                </div>
            </div>
        </div>
    ";
        }
        // line 82
        echo "
    ";
        // line 83
        if ( !(null === $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "accounts", array()))) {
            // line 84
            echo "        <div class=\"container\">
            <h3>Account</h3>
            <div class=\"row\">
                ";
            // line 87
            if ((twig_length_filter($this->env, $this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "accounts", array())) > 1)) {
                // line 88
                echo "                    <table class=\"table table-hover\">
                        <tr>
                            <th>Username</th>
                            <th>Email</th>
                            <th>aktiv</th>
                        </tr>
                        ";
                // line 94
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "accounts", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["account"]) {
                    // line 95
                    echo "                            <tr>
                                <td>";
                    // line 96
                    echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "username", array()));
                    echo "</td>
                                <td>";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($context["account"], "email", array()));
                    echo "</td>
                                <td>";
                    // line 98
                    if (($this->getAttribute($context["account"], "isActive", array()) == 1)) {
                        echo "aktiviert";
                    } else {
                        echo "deaktiviert";
                    }
                    echo "</td>
                            </tr>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['account'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "                    </table>
                ";
            } else {
                // line 103
                echo "                    <div class=\"col-sm-6\">
                        ";
                // line 104
                if ( !(null === $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "accounts", array()), 0, array(), "array"), "username", array()))) {
                    // line 105
                    echo "                            <dl class=\"dl-horizontal\">
                                <dt>Benutzername:</dt>
                                <dd>";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "accounts", array()), 0, array(), "array"), "username", array()));
                    if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["person"]) ? $context["person"] : $this->getContext($context, "person")), "accounts", array()), 0, array(), "array"), "isActive", array()) == 0)) {
                        echo "(deaktiviert)";
                    }
                    echo "</dd>
                            </dl>
                        ";
                }
                // line 110
                echo "                    </div>
                ";
            }
            // line 112
            echo "            </div>
        </div>
    ";
        }
        // line 115
        echo "

";
    }

    public function getTemplateName()
    {
        return "LJTrToolRegistrationBundle:Person:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 115,  282 => 112,  278 => 110,  269 => 107,  265 => 105,  263 => 104,  260 => 103,  256 => 101,  243 => 98,  239 => 97,  235 => 96,  232 => 95,  228 => 94,  220 => 88,  218 => 87,  213 => 84,  211 => 83,  208 => 82,  201 => 77,  196 => 75,  193 => 74,  191 => 73,  184 => 68,  182 => 67,  179 => 66,  172 => 61,  168 => 59,  160 => 57,  157 => 56,  149 => 54,  147 => 53,  143 => 51,  141 => 50,  138 => 49,  133 => 47,  130 => 46,  127 => 45,  122 => 43,  119 => 42,  117 => 41,  110 => 36,  108 => 35,  94 => 29,  89 => 26,  80 => 24,  77 => 23,  74 => 22,  69 => 20,  66 => 19,  63 => 18,  58 => 16,  55 => 15,  53 => 14,  47 => 13,  38 => 6,  35 => 5,  29 => 3,  11 => 1,);
    }
}
