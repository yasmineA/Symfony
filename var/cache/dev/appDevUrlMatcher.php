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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // _security_login
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'Iabsis\\Bundle\\VideothequeBundle\\Controller\\SecurityController::loginAction',  '_route' => '_security_login',);
                }

                // _security_login_check
                if ($pathinfo === '/login_check') {
                    return array('_route' => '_security_login_check');
                }

            }

            // _security_logout
            if ($pathinfo === '/logout') {
                return array('_route' => '_security_logout');
            }

        }

        // videotheque_admin
        if (rtrim($pathinfo, '/') === '/admin') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_videotheque_admin;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'videotheque_admin');
            }

            return array (  '_controller' => 'Iabsis\\Bundle\\VideothequeBundle\\Controller\\AdminController::indexAction',  '_route' => 'videotheque_admin',);
        }
        not_videotheque_admin:

        if (0 === strpos($pathinfo, '/genre')) {
            // genre_index
            if (rtrim($pathinfo, '/') === '/genre') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_genre_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'genre_index');
                }

                return array (  '_controller' => 'Iabsis\\Bundle\\VideothequeBundle\\Controller\\GenreController::indexAction',  '_route' => 'genre_index',);
            }
            not_genre_index:

            // genre_new
            if ($pathinfo === '/genre/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_genre_new;
                }

                return array (  '_controller' => 'Iabsis\\Bundle\\VideothequeBundle\\Controller\\GenreController::newAction',  '_route' => 'genre_new',);
            }
            not_genre_new:

            // genre_show
            if (preg_match('#^/genre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_genre_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'genre_show')), array (  '_controller' => 'Iabsis\\Bundle\\VideothequeBundle\\Controller\\GenreController::showAction',));
            }
            not_genre_show:

            // genre_edit
            if (preg_match('#^/genre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_genre_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'genre_edit')), array (  '_controller' => 'Iabsis\\Bundle\\VideothequeBundle\\Controller\\GenreController::editAction',));
            }
            not_genre_edit:

            // genre_delete
            if (preg_match('#^/genre/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_genre_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'genre_delete')), array (  '_controller' => 'Iabsis\\Bundle\\VideothequeBundle\\Controller\\GenreController::deleteAction',));
            }
            not_genre_delete:

        }

        if (0 === strpos($pathinfo, '/film')) {
            // film_index
            if (rtrim($pathinfo, '/') === '/film') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_film_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'film_index');
                }

                return array (  '_controller' => 'Iabsis\\Bundle\\VideothequeBundle\\Controller\\FilmController::indexAction',  '_route' => 'film_index',);
            }
            not_film_index:

            // film_new
            if ($pathinfo === '/film/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_film_new;
                }

                return array (  '_controller' => 'Iabsis\\Bundle\\VideothequeBundle\\Controller\\FilmController::newAction',  '_route' => 'film_new',);
            }
            not_film_new:

            // film_show
            if (preg_match('#^/film/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_film_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_show')), array (  '_controller' => 'Iabsis\\Bundle\\VideothequeBundle\\Controller\\FilmController::showAction',));
            }
            not_film_show:

            // film_edit
            if (preg_match('#^/film/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_film_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_edit')), array (  '_controller' => 'Iabsis\\Bundle\\VideothequeBundle\\Controller\\FilmController::editAction',));
            }
            not_film_edit:

            // film_delete
            if (preg_match('#^/film/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_film_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'film_delete')), array (  '_controller' => 'Iabsis\\Bundle\\VideothequeBundle\\Controller\\FilmController::deleteAction',));
            }
            not_film_delete:

        }

        // _index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_index');
            }

            return array (  'label' => '',  '_controller' => 'Iabsis\\Bundle\\VideothequeBundle\\Controller\\DefaultController::indexAction',  '_route' => '_index',);
        }

        // _filter_by_genre
        if (0 === strpos($pathinfo, '/filter-by-genre') && preg_match('#^/filter\\-by\\-genre(?:/(?P<label>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => '_filter_by_genre')), array (  'label' => '',  '_controller' => 'Iabsis\\Bundle\\VideothequeBundle\\Controller\\DefaultController::indexAction',));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
