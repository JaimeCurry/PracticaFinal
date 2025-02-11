<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
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

        }

        // listarBibliotecas
        if ($pathinfo === '/listarBibliotecas') {
            return array (  '_controller' => 'Biblioteca\\DemoBundle\\Controller\\BibliotecasController::listarBibliotecasAction',  '_route' => 'listarBibliotecas',);
        }

        if (0 === strpos($pathinfo, '/buscarBiblioteca')) {
            // buscarBibliotecaNombre
            if (0 === strpos($pathinfo, '/buscarBibliotecaNombre') && preg_match('#^/buscarBibliotecaNombre/(?P<nombre>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'buscarBibliotecaNombre')), array (  '_controller' => 'Biblioteca\\DemoBundle\\Controller\\BibliotecasController::buscarBibliotecaNombreAction',));
            }

            // buscarBibliotecasCiudad
            if (0 === strpos($pathinfo, '/buscarBibliotecasCiudad') && preg_match('#^/buscarBibliotecasCiudad/(?P<ciudad>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'buscarBibliotecasCiudad')), array (  '_controller' => 'Biblioteca\\DemoBundle\\Controller\\BibliotecasController::buscarBibliotecasCiudadAction',));
            }

        }

        if (0 === strpos($pathinfo, '/li')) {
            // listarLibrosBiblioteca
            if (0 === strpos($pathinfo, '/listarLibrosBiblioteca') && preg_match('#^/listarLibrosBiblioteca/(?P<idBiblioteca>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'listarLibrosBiblioteca')), array (  '_controller' => 'Biblioteca\\DemoBundle\\Controller\\LibrosController::listarLibrosBibliotecaAction',));
            }

            if (0 === strpos($pathinfo, '/libros')) {
                // librosTituloBiblioteca
                if (0 === strpos($pathinfo, '/librosTituloBiblioteca') && preg_match('#^/librosTituloBiblioteca/(?P<idBiblioteca>[^/]++)/(?P<titulo>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'librosTituloBiblioteca')), array (  '_controller' => 'Biblioteca\\DemoBundle\\Controller\\LibrosController::librosTituloBibliotecaAction',));
                }

                // librosAutorBiblioteca
                if (0 === strpos($pathinfo, '/librosAutorBiblioteca') && preg_match('#^/librosAutorBiblioteca/(?P<idBiblioteca>[^/]++)/(?P<autor>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'librosAutorBiblioteca')), array (  '_controller' => 'Biblioteca\\DemoBundle\\Controller\\LibrosController::librosAutorBibliotecaAction',));
                }

                // librosEditorialBiblioteca
                if (0 === strpos($pathinfo, '/librosEditorialBiblioteca') && preg_match('#^/librosEditorialBiblioteca/(?P<idBiblioteca>[^/]++)/(?P<editorial>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'librosEditorialBiblioteca')), array (  '_controller' => 'Biblioteca\\DemoBundle\\Controller\\LibrosController::librosEditorialBibliotecaAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/buscarLibroTitulo')) {
            // buscarLibroTitulo
            if (preg_match('#^/buscarLibroTitulo/(?P<titulo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'buscarLibroTitulo')), array (  '_controller' => 'Biblioteca\\DemoBundle\\Controller\\LibrosController::buscarLibroTituloAction',));
            }

            // buscarLibroTituloDisponibilidad
            if (0 === strpos($pathinfo, '/buscarLibroTituloDisponibilidad') && preg_match('#^/buscarLibroTituloDisponibilidad/(?P<titulo>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'buscarLibroTituloDisponibilidad')), array (  '_controller' => 'Biblioteca\\DemoBundle\\Controller\\LibrosController::buscarLibroTituloDisponibilidadAction',));
            }

        }

        // annadirBiblioteca
        if ($pathinfo === '/annadirBiblioteca') {
            return array (  '_controller' => 'Biblioteca\\DemoBundle\\Controller\\BibliotecasController::annadirBibliotecaAction',  '_route' => 'annadirBiblioteca',);
        }

        if (0 === strpos($pathinfo, '/e')) {
            // eliminarBiblioteca
            if (0 === strpos($pathinfo, '/eliminarBiblioteca') && preg_match('#^/eliminarBiblioteca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminarBiblioteca')), array (  '_controller' => 'Biblioteca\\DemoBundle\\Controller\\BibliotecasController::eliminarBibliotecaAction',));
            }

            // editarBiblioteca
            if (0 === strpos($pathinfo, '/editarBiblioteca') && preg_match('#^/editarBiblioteca/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editarBiblioteca')), array (  '_controller' => 'Biblioteca\\DemoBundle\\Controller\\BibliotecasController::editarBibliotecaAction',));
            }

        }

        // annadirLibro
        if ($pathinfo === '/annadirLibro') {
            return array (  '_controller' => 'Biblioteca\\DemoBundle\\Controller\\LibrosController::annadirLibroAction',  '_route' => 'annadirLibro',);
        }

        // eliminarLibro
        if (0 === strpos($pathinfo, '/eliminarLibro') && preg_match('#^/eliminarLibro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'eliminarLibro')), array (  '_controller' => 'Biblioteca\\DemoBundle\\Controller\\LibrosController::eliminarLibroAction',));
        }

        // modificarLibro
        if (0 === strpos($pathinfo, '/modificarLibro') && preg_match('#^/modificarLibro/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modificarLibro')), array (  '_controller' => 'Biblioteca\\DemoBundle\\Controller\\LibrosController::modificarLibroAction',));
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
