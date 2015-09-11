<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/bundles/bootstrap')) {
            if (0 === strpos($pathinfo, '/bundles/bootstrap/css/bootstrap')) {
                // _assetic_bootstrap_css
                if ($pathinfo === '/bundles/bootstrap/css/bootstrap.css') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css',);
                }

                if (0 === strpos($pathinfo, '/bundles/bootstrap/css/bootstrap_')) {
                    // _assetic_bootstrap_css_0
                    if ($pathinfo === '/bundles/bootstrap/css/bootstrap_bootstrap_1.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_0',);
                    }

                    // _assetic_bootstrap_css_1
                    if ($pathinfo === '/bundles/bootstrap/css/bootstrap_form_2.css') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_css',  'pos' => 1,  '_format' => 'css',  '_route' => '_assetic_bootstrap_css_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/bundles/bootstrap/js')) {
                if (0 === strpos($pathinfo, '/bundles/bootstrap/js/bootstrap')) {
                    // _assetic_bootstrap_js
                    if ($pathinfo === '/bundles/bootstrap/js/bootstrap.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js',);
                    }

                    if (0 === strpos($pathinfo, '/bundles/bootstrap/js/bootstrap_')) {
                        // _assetic_bootstrap_js_0
                        if ($pathinfo === '/bundles/bootstrap/js/bootstrap_transition_1.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_0',);
                        }

                        // _assetic_bootstrap_js_1
                        if ($pathinfo === '/bundles/bootstrap/js/bootstrap_alert_2.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_1',);
                        }

                        // _assetic_bootstrap_js_2
                        if ($pathinfo === '/bundles/bootstrap/js/bootstrap_button_3.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 2,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_2',);
                        }

                        if (0 === strpos($pathinfo, '/bundles/bootstrap/js/bootstrap_c')) {
                            // _assetic_bootstrap_js_3
                            if ($pathinfo === '/bundles/bootstrap/js/bootstrap_carousel_4.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 3,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_3',);
                            }

                            // _assetic_bootstrap_js_4
                            if ($pathinfo === '/bundles/bootstrap/js/bootstrap_collapse_5.js') {
                                return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 4,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_4',);
                            }

                        }

                        // _assetic_bootstrap_js_5
                        if ($pathinfo === '/bundles/bootstrap/js/bootstrap_dropdown_6.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 5,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_5',);
                        }

                        // _assetic_bootstrap_js_6
                        if ($pathinfo === '/bundles/bootstrap/js/bootstrap_modal_7.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 6,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_6',);
                        }

                        // _assetic_bootstrap_js_7
                        if ($pathinfo === '/bundles/bootstrap/js/bootstrap_tooltip_8.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 7,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_7',);
                        }

                        // _assetic_bootstrap_js_8
                        if ($pathinfo === '/bundles/bootstrap/js/bootstrap_popover_9.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 8,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_8',);
                        }

                        // _assetic_bootstrap_js_9
                        if ($pathinfo === '/bundles/bootstrap/js/bootstrap_scrollspy_10.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 9,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_9',);
                        }

                        // _assetic_bootstrap_js_10
                        if ($pathinfo === '/bundles/bootstrap/js/bootstrap_tab_11.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 10,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_10',);
                        }

                        // _assetic_bootstrap_js_11
                        if ($pathinfo === '/bundles/bootstrap/js/bootstrap_affix_12.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 11,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_11',);
                        }

                        // _assetic_bootstrap_js_12
                        if ($pathinfo === '/bundles/bootstrap/js/bootstrap_bc-bootstrap-collection_13.js') {
                            return array (  '_controller' => 'assetic.controller:render',  'name' => 'bootstrap_js',  'pos' => 12,  '_format' => 'js',  '_route' => '_assetic_bootstrap_js_12',);
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/bundles/bootstrap/js/jquery')) {
                    // _assetic_jquery
                    if ($pathinfo === '/bundles/bootstrap/js/jquery.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_jquery',);
                    }

                    // _assetic_jquery_0
                    if ($pathinfo === '/bundles/bootstrap/js/jquery_part_1_jquery-1.11.1_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => 'jquery',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_jquery_0',);
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/js')) {
            if (0 === strpos($pathinfo, '/js/199025b')) {
                // _assetic_199025b
                if ($pathinfo === '/js/199025b.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '199025b',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_199025b',);
                }

                // _assetic_199025b_0
                if ($pathinfo === '/js/199025b_confirm_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '199025b',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_199025b_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/0')) {
                if (0 === strpos($pathinfo, '/js/0488e5d')) {
                    // _assetic_0488e5d
                    if ($pathinfo === '/js/0488e5d.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0488e5d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0488e5d',);
                    }

                    // _assetic_0488e5d_0
                    if ($pathinfo === '/js/0488e5d_typeahead.jquery_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0488e5d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0488e5d_0',);
                    }

                }

                if (0 === strpos($pathinfo, '/js/0987e15')) {
                    // _assetic_0987e15
                    if ($pathinfo === '/js/0987e15.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0987e15',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0987e15',);
                    }

                    // _assetic_0987e15_0
                    if ($pathinfo === '/js/0987e15_TypeAheadBundle_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '0987e15',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0987e15_0',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/51a3de5')) {
                // _assetic_51a3de5
                if ($pathinfo === '/js/51a3de5.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '51a3de5',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_51a3de5',);
                }

                if (0 === strpos($pathinfo, '/js/51a3de5_bootstrap-datetimepicker.')) {
                    // _assetic_51a3de5_0
                    if ($pathinfo === '/js/51a3de5_bootstrap-datetimepicker.min_1.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '51a3de5',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_51a3de5_0',);
                    }

                    // _assetic_51a3de5_1
                    if ($pathinfo === '/js/51a3de5_bootstrap-datetimepicker.de_2.js') {
                        return array (  '_controller' => 'assetic.controller:render',  'name' => '51a3de5',  'pos' => 1,  '_format' => 'js',  '_route' => '_assetic_51a3de5_1',);
                    }

                }

            }

            if (0 === strpos($pathinfo, '/js/80bbaf4')) {
                // _assetic_80bbaf4
                if ($pathinfo === '/js/80bbaf4.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '80bbaf4',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_80bbaf4',);
                }

                // _assetic_80bbaf4_0
                if ($pathinfo === '/js/80bbaf4_bootstrap-switch_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '80bbaf4',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_80bbaf4_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/34861a1')) {
                // _assetic_34861a1
                if ($pathinfo === '/js/34861a1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '34861a1',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_34861a1',);
                }

                // _assetic_34861a1_0
                if ($pathinfo === '/js/34861a1_roleApproval_new_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '34861a1',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_34861a1_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/6af462d')) {
                // _assetic_6af462d
                if ($pathinfo === '/js/6af462d.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6af462d',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_6af462d',);
                }

                // _assetic_6af462d_0
                if ($pathinfo === '/js/6af462d_registration_new_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '6af462d',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_6af462d_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/53ab26e')) {
                // _assetic_53ab26e
                if ($pathinfo === '/js/53ab26e.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '53ab26e',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_53ab26e',);
                }

                // _assetic_53ab26e_0
                if ($pathinfo === '/js/53ab26e_bootstrap-filestyle.min_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '53ab26e',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_53ab26e_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/f6e54ff')) {
                // _assetic_f6e54ff
                if ($pathinfo === '/js/f6e54ff.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f6e54ff',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_f6e54ff',);
                }

                // _assetic_f6e54ff_0
                if ($pathinfo === '/js/f6e54ff_event_new_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => 'f6e54ff',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_f6e54ff_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/039ae45')) {
                // _assetic_039ae45
                if ($pathinfo === '/js/039ae45.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '039ae45',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_039ae45',);
                }

                // _assetic_039ae45_0
                if ($pathinfo === '/js/039ae45_person_new_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '039ae45',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_039ae45_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/696a6fb')) {
                // _assetic_696a6fb
                if ($pathinfo === '/js/696a6fb.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '696a6fb',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_696a6fb',);
                }

                // _assetic_696a6fb_0
                if ($pathinfo === '/js/696a6fb_jquery_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '696a6fb',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_696a6fb_0',);
                }

            }

            if (0 === strpos($pathinfo, '/js/0f305f1')) {
                // _assetic_0f305f1
                if ($pathinfo === '/js/0f305f1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0f305f1',  'pos' => NULL,  '_format' => 'js',  '_route' => '_assetic_0f305f1',);
                }

                // _assetic_0f305f1_0
                if ($pathinfo === '/js/0f305f1_bootstrap_1.js') {
                    return array (  '_controller' => 'assetic.controller:render',  'name' => '0f305f1',  'pos' => 0,  '_format' => 'js',  '_route' => '_assetic_0f305f1_0',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/account')) {
            // account_index
            if ($pathinfo === '/accounts') {
                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\AccountController::indexAction',  '_route' => 'account_index',);
            }

            // account_show
            if (preg_match('#^/account/(?P<accountId>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_account_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account_show')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\AccountController::showAction',));
            }
            not_account_show:

            // ljtrtool_registration_account_delete
            if (preg_match('#^/account/(?P<accountId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ljtrtool_registration_account_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ljtrtool_registration_account_delete')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\AccountController::deleteAction',));
            }
            not_ljtrtool_registration_account_delete:

            // createAccount
            if ($pathinfo === '/account/new') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_createAccount;
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\AccountController::createAction',  '_route' => 'createAccount',);
            }
            not_createAccount:

            // changeAccount
            if ($pathinfo === '/account/change') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_changeAccount;
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\AccountController::changeAction',  '_route' => 'changeAccount',);
            }
            not_changeAccount:

            // ljtrtool_registration_account_newform
            if (rtrim($pathinfo, '/') === '/account') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_ljtrtool_registration_account_newform;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ljtrtool_registration_account_newform');
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\AccountController::newFormAction',  '_route' => 'ljtrtool_registration_account_newform',);
            }
            not_ljtrtool_registration_account_newform:

            // account_edit
            if (preg_match('#^/account/(?P<accountId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'account_edit')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\AccountController::editFormAction',));
            }

        }

        if (0 === strpos($pathinfo, '/condition')) {
            // condition_index
            if ($pathinfo === '/conditions') {
                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\ConditionController::indexAction',  '_route' => 'condition_index',);
            }

            // condition_show
            if (preg_match('#^/condition/(?P<conditionId>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_condition_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'condition_show')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\ConditionController::showAction',));
            }
            not_condition_show:

            // condition_delete
            if (preg_match('#^/condition/(?P<conditionId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_condition_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'condition_delete')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\ConditionController::deleteAction',));
            }
            not_condition_delete:

            // createCondition
            if ($pathinfo === '/condition/new') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_createCondition;
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\ConditionController::createAction',  '_route' => 'createCondition',);
            }
            not_createCondition:

            // changeCondition
            if ($pathinfo === '/condition/change') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_changeCondition;
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\ConditionController::changeAction',  '_route' => 'changeCondition',);
            }
            not_changeCondition:

            // condition_new
            if (rtrim($pathinfo, '/') === '/condition') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_condition_new;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'condition_new');
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\ConditionController::newFormAction',  '_route' => 'condition_new',);
            }
            not_condition_new:

            // condition_edit
            if (preg_match('#^/condition/(?P<conditionId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'condition_edit')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\ConditionController::editFormAction',));
            }

        }

        // ljtrtool_registration_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ljtrtool_registration_default_index')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/division')) {
            // division_index
            if ($pathinfo === '/divisions') {
                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\DivisionController::indexAction',  '_route' => 'division_index',);
            }

            // division_show
            if (preg_match('#^/division/(?P<divisionId>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_division_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'division_show')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\DivisionController::showAction',));
            }
            not_division_show:

            // division_delete
            if (preg_match('#^/division/(?P<divisionId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_division_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'division_delete')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\DivisionController::deleteAction',));
            }
            not_division_delete:

            // createDivision
            if ($pathinfo === '/division/new') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_createDivision;
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\DivisionController::createAction',  '_route' => 'createDivision',);
            }
            not_createDivision:

            // changeDivision
            if ($pathinfo === '/division/change') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_changeDivision;
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\DivisionController::changeAction',  '_route' => 'changeDivision',);
            }
            not_changeDivision:

            // division_new
            if (rtrim($pathinfo, '/') === '/division') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_division_new;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'division_new');
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\DivisionController::newFormAction',  '_route' => 'division_new',);
            }
            not_division_new:

            // division_edit
            if (preg_match('#^/division/(?P<divisionId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'division_edit')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\DivisionController::editFormAction',));
            }

        }

        if (0 === strpos($pathinfo, '/event')) {
            // event_index
            if ($pathinfo === '/events') {
                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\EventController::indexAction',  '_route' => 'event_index',);
            }

            // event_delete
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_event_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_delete')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\EventController::deleteAction',));
            }
            not_event_delete:

            // createEvent
            if ($pathinfo === '/event/new') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_createEvent;
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\EventController::createAction',  '_route' => 'createEvent',);
            }
            not_createEvent:

            // changeEvent
            if ($pathinfo === '/event/change') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_changeEvent;
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\EventController::changeAction',  '_route' => 'changeEvent',);
            }
            not_changeEvent:

            // event_new
            if (rtrim($pathinfo, '/') === '/event') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_event_new;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'event_new');
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\EventController::newFormAction',  '_route' => 'event_new',);
            }
            not_event_new:

            // event_edit
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_edit')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\EventController::editFormAction',));
            }

            // event_show
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'event_show')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\EventController::showAction',));
            }

        }

        // ljtrtool_registration_page_index
        if ($pathinfo === '/home') {
            return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\PageController::indexAction',  '_route' => 'ljtrtool_registration_page_index',);
        }

        if (0 === strpos($pathinfo, '/person')) {
            // person_index
            if ($pathinfo === '/persons') {
                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\PersonController::indexAction',  '_route' => 'person_index',);
            }

            // person_show
            if (preg_match('#^/person/(?P<personId>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_person_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_show')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\PersonController::showAction',));
            }
            not_person_show:

            // person_delete
            if (preg_match('#^/person/(?P<personId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_person_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_delete')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\PersonController::deleteAction',));
            }
            not_person_delete:

            // createPerson
            if ($pathinfo === '/person/new') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_createPerson;
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\PersonController::createAction',  '_route' => 'createPerson',);
            }
            not_createPerson:

            // changePerson
            if ($pathinfo === '/person/change') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_changePerson;
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\PersonController::changeAction',  '_route' => 'changePerson',);
            }
            not_changePerson:

            // person_new
            if (rtrim($pathinfo, '/') === '/person') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_person_new;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'person_new');
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\PersonController::newFormAction',  '_route' => 'person_new',);
            }
            not_person_new:

            // person_edit
            if (preg_match('#^/person/(?P<personId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'person_edit')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\PersonController::editFormAction',));
            }

        }

        // registration_index
        if ($pathinfo === '/registrations') {
            return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RegistrationController::indexAction',  '_route' => 'registration_index',);
        }

        if (0 === strpos($pathinfo, '/event')) {
            // registration_index_by_event
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)/registrations$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'registration_index_by_event')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RegistrationController::indexByEventAction',));
            }

            // registration_show
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)/registration/(?P<registrationId>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_registration_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'registration_show')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RegistrationController::showAction',));
            }
            not_registration_show:

            // registration_delete
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)/registration/(?P<registrationId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_registration_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'registration_delete')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RegistrationController::deleteAction',));
            }
            not_registration_delete:

            // createRegistration
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)/registration/new$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_createRegistration;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'createRegistration')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RegistrationController::createAction',));
            }
            not_createRegistration:

            // changeRegistration
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)/registration/change$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_changeRegistration;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'changeRegistration')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RegistrationController::changeAction',));
            }
            not_changeRegistration:

            // registration_new
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)/registration/role/(?P<roleApproval>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_registration_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'registration_new')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RegistrationController::newFormAction',));
            }
            not_registration_new:

            // registration_edit
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)/registration/(?P<registrationId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'registration_edit')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RegistrationController::editFormAction',));
            }

            // roleApproval_index
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)/roleApprovals$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'roleApproval_index')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RoleApprovalController::indexAction',));
            }

            // roleApproval_show
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)/roleApproval/(?P<roleApprovalId>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_roleApproval_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'roleApproval_show')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RoleApprovalController::showAction',));
            }
            not_roleApproval_show:

            // roleApproval_delete
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)/roleApproval/(?P<roleApprovalId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_roleApproval_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'roleApproval_delete')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RoleApprovalController::deleteAction',));
            }
            not_roleApproval_delete:

            // createRoleApproval
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)/roleApproval/new$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_createRoleApproval;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'createRoleApproval')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RoleApprovalController::createAction',));
            }
            not_createRoleApproval:

            // changeRoleApproval
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)/roleApproval/(?P<roleApprovalId>[^/]++)/change$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_changeRoleApproval;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'changeRoleApproval')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RoleApprovalController::changeAction',));
            }
            not_changeRoleApproval:

            // roleApproval_new
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)/roleApproval$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_roleApproval_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'roleApproval_new')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RoleApprovalController::newFormAction',));
            }
            not_roleApproval_new:

            // roleApproval_edit
            if (preg_match('#^/event/(?P<eventLinkName>[^/]++)/roleApproval/(?P<roleApprovalId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'roleApproval_edit')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RoleApprovalController::editFormAction',));
            }

        }

        if (0 === strpos($pathinfo, '/role')) {
            // role_index
            if ($pathinfo === '/roles') {
                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RoleController::indexAction',  '_route' => 'role_index',);
            }

            // role_show
            if (preg_match('#^/role/(?P<roleId>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_role_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_show')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RoleController::showAction',));
            }
            not_role_show:

            // role_delete
            if (preg_match('#^/role/(?P<roleId>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_role_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_delete')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RoleController::deleteAction',));
            }
            not_role_delete:

            // createRole
            if ($pathinfo === '/role/new') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_createRole;
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RoleController::createAction',  '_route' => 'createRole',);
            }
            not_createRole:

            // changeRole
            if ($pathinfo === '/role/change') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_changeRole;
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RoleController::changeAction',  '_route' => 'changeRole',);
            }
            not_changeRole:

            // role_new
            if (rtrim($pathinfo, '/') === '/role') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_role_new;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'role_new');
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RoleController::newFormAction',  '_route' => 'role_new',);
            }
            not_role_new:

            // role_edit
            if (preg_match('#^/role/(?P<roleId>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_edit')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RoleController::editFormAction',));
            }

            // role_edit_ajax
            if (preg_match('#^/role/(?P<roleId>[^/]++)/edit_ajax$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'role_edit_ajax')), array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RoleController::ajaxEditFormAction',));
            }

            // role_typeahead
            if ($pathinfo === '/role/typeahead') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_role_typeahead;
                }

                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\RoleController::addressTypeaheadAction',  '_route' => 'role_typeahead',);
            }
            not_role_typeahead:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array (  '_controller' => 'LJTrTool\\RegistrationBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'logout',);
            }

        }

        // homepage
        if ($pathinfo === '/app/example') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            // _welcome
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_welcome');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
            }

            if (0 === strpos($pathinfo, '/demo/demo')) {
                if (0 === strpos($pathinfo, '/demo/demo/secured')) {
                    if (0 === strpos($pathinfo, '/demo/demo/secured/log')) {
                        if (0 === strpos($pathinfo, '/demo/demo/secured/login')) {
                            // _demo_login
                            if ($pathinfo === '/demo/demo/secured/login') {
                                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                            }

                            // _demo_security_check
                            if ($pathinfo === '/demo/demo/secured/login_check') {
                                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                            }

                        }

                        // _demo_logout
                        if ($pathinfo === '/demo/demo/secured/logout') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                        }

                    }

                    if (0 === strpos($pathinfo, '/demo/demo/secured/hello')) {
                        // acme_demo_secured_hello
                        if ($pathinfo === '/demo/demo/secured/hello') {
                            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                        }

                        // _demo_secured_hello
                        if (preg_match('#^/demo/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                        }

                        // _demo_secured_hello_admin
                        if (0 === strpos($pathinfo, '/demo/demo/secured/hello/admin') && preg_match('#^/demo/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                        }

                    }

                }

                // _demo
                if (rtrim($pathinfo, '/') === '/demo/demo') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_demo');
                    }

                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
                }

                // _demo_hello
                if (0 === strpos($pathinfo, '/demo/demo/hello') && preg_match('#^/demo/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
                }

                // _demo_contact
                if ($pathinfo === '/demo/demo/contact') {
                    return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
