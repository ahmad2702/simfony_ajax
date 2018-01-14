<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // start
        if ('' === $trimmedPathinfo) {
            $ret = array (  '_controller' => 'App\\Controller\\DefaultController::index',  '_route' => 'start',);
            if (substr($pathinfo, -1) !== '/') {
                return array_replace($ret, $this->redirect($rawPathinfo.'/', 'start'));
            }

            return $ret;
        }

        // add_newData
        if (0 === strpos($pathinfo, '/profil-') && preg_match('#^/profil\\-(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_newData')), array (  '_controller' => 'App\\Controller\\EditController::add',));
        }

        // profile
        if (0 === strpos($pathinfo, '/profile-') && preg_match('#^/profile\\-(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'profile')), array (  '_controller' => 'App\\Controller\\ProfileController::profile',));
        }

        // remove_newData
        if (0 === strpos($pathinfo, '/delete-') && preg_match('#^/delete\\-(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove_newData')), array (  '_controller' => 'App\\Controller\\EditController::remove',));
        }

        // app_export_exportasfile
        if (0 === strpos($pathinfo, '/export') && preg_match('#^/export/(?P<username>[^/]++)/(?P<fileName>[^/\\.]++)\\.(?P<_format>json|csv)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_export_exportasfile')), array (  '_controller' => 'App\\Controller\\ExportController::exportAsFile',));
        }

        if (0 === strpos($pathinfo, '/search')) {
            // search_user
            if ('/search' === $pathinfo) {
                return array (  '_controller' => 'App\\Controller\\SearchController::searchUser',  '_route' => 'search_user',);
            }

            // get
            if (0 === strpos($pathinfo, '/search=') && preg_match('#^/search\\=(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'get')), array (  '_controller' => 'App\\Controller\\SearchController::searchGet',));
            }

        }

        // go
        if ('/go' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SearchController::searchStart',  '_route' => 'go',);
        }

        // not_found
        if ('/404' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SearchController::notFound',  '_route' => 'not_found',);
        }

        // ajax_search
        if ('/ajax' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SearchController::ajaxSearch',  '_route' => 'ajax_search',);
        }

        // security_login
        if ('/login' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::loginAction',  '_route' => 'security_login',);
        }

        // security_logout
        if ('/logout' === $pathinfo) {
            return array (  '_controller' => 'App\\Controller\\SecurityController::logoutAction',  '_route' => 'security_logout',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
