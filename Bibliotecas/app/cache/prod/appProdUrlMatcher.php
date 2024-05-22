<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
