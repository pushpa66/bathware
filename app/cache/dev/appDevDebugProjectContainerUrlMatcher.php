<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not__profiler_home;
                    } else {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }
                not__profiler_home:

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ('/_profiler/purge' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#sD', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/products')) {
            if (0 === strpos($pathinfo, '/products/bath-accessories')) {
                // products_bath_accessories
                if ('/products/bath-accessories' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\BathAccessoriesController::products_bath_accessories',  '_route' => 'products_bath_accessories',);
                }

                // products_bath_accessories_towel_rack
                if ('/products/bath-accessories/towel-rack' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\BathAccessoriesController::products_bath_accessories_towel_rack',  '_route' => 'products_bath_accessories_towel_rack',);
                }

                // products_bath_accessories_soup_holder
                if ('/products/bath-accessories/soup-holder' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\BathAccessoriesController::products_bath_accessories_soup_holder',  '_route' => 'products_bath_accessories_soup_holder',);
                }

                // products_bath_accessories_mirror
                if ('/products/bath-accessories/mirror' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\BathAccessoriesController::products_bath_accessories_mirror',  '_route' => 'products_bath_accessories_mirror',);
                }

            }

            if (0 === strpos($pathinfo, '/products/ceramic')) {
                // products_ceramic
                if ('/products/ceramic' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CeramicController::products_ceramic',  '_route' => 'products_ceramic',);
                }

                if (0 === strpos($pathinfo, '/products/ceramic/w')) {
                    // products_ceramic_wc
                    if ('/products/ceramic/wc' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\CeramicController::products_ceramic_wc',  '_route' => 'products_ceramic_wc',);
                    }

                    // products_ceramic_wash_basin
                    if ('/products/ceramic/wash-basin' === $pathinfo) {
                        return array (  '_controller' => 'AppBundle\\Controller\\CeramicController::products_ceramic_wash_basin',  '_route' => 'products_ceramic_wash_basin',);
                    }

                }

                // products_ceramic_urinal
                if ('/products/ceramic/urinal' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CeramicController::products_ceramic_urinal',  '_route' => 'products_ceramic_urinal',);
                }

                // products_ceramic_bath_tub
                if ('/products/ceramic/bath-tub' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\CeramicController::products_ceramic_bath_tubs',  '_route' => 'products_ceramic_bath_tub',);
                }

            }

        }

        // homepage
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_homepage;
            } else {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }
        not_homepage:

        // cart
        if ('/cart' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::cartAction',  '_route' => 'cart',);
        }

        if (0 === strpos($pathinfo, '/products')) {
            if (0 === strpos($pathinfo, '/products/kitchen-gully')) {
                // products_kitchen_gully
                if ('/products/kitchen-gully' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\KitchenGullyController::products_kitchen_gully',  '_route' => 'products_kitchen_gully',);
                }

                // products_kitchen_gully_shower_channel
                if ('/products/kitchen-gully/shower-channel' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\KitchenGullyController::products_kitchen_gully_shower_channel',  '_route' => 'products_kitchen_gully_shower_channel',);
                }

                // products_kitchen_gully_floor_drain
                if ('/products/kitchen-gully/floor-drain' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\KitchenGullyController::products_kitchen_gully_floor_drain',  '_route' => 'products_kitchen_gully_floor_drain',);
                }

                // products_kitchen_gully_kitchen_bench_drain
                if ('/products/kitchen-gully/kitchen-bench-drain' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\KitchenGullyController::products_kitchen_gully_kitchen_bench_drain',  '_route' => 'products_kitchen_gully_kitchen_bench_drain',);
                }

            }

            if (0 === strpos($pathinfo, '/products/plumbing-accessories')) {
                // products_plumbing_accessories
                if ('/products/plumbing-accessories' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PlumbingAccessoriesController::products_plumbing_accessories',  '_route' => 'products_plumbing_accessories',);
                }

                // products_plumbing_accessories_flexible_hose
                if ('/products/plumbing-accessories/flexible-hose' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PlumbingAccessoriesController::products_plumbing_accessories_flexible_hose',  '_route' => 'products_plumbing_accessories_flexible_hose',);
                }

                // products_plumbing_accessories_angle_valve
                if ('/products/plumbing-accessories/angle-valve' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PlumbingAccessoriesController::products_plumbing_accessories_angle_valve',  '_route' => 'products_plumbing_accessories_angle_valve',);
                }

                // products_plumbing_accessories_bottle_tap
                if ('/products/plumbing-accessories/bottle-tap' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PlumbingAccessoriesController::products_plumbing_accessories_bottle_tap',  '_route' => 'products_plumbing_accessories_bottle_tap',);
                }

                // products_plumbing_accessories_pillar_tap
                if ('/products/plumbing-accessories/pillar-tap' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PlumbingAccessoriesController::products_plumbing_accessories_pillar_tap',  '_route' => 'products_plumbing_accessories_pillar_tap',);
                }

                // products_plumbing_accessories_bib_tap
                if ('/products/plumbing-accessories/bib-tap' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PlumbingAccessoriesController::products_plumbing_accessories_bib_tap',  '_route' => 'products_plumbing_accessories_bib_tap',);
                }

                // products_plumbing_accessories_two_way_tap
                if ('/products/plumbing-accessories/two-way-tap' === $pathinfo) {
                    return array (  '_controller' => 'AppBundle\\Controller\\PlumbingAccessoriesController::products_plumbing_accessories_two_way_tap',  '_route' => 'products_plumbing_accessories_two_way_tap',);
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
