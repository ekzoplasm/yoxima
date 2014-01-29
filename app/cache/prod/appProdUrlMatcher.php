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

        if (0 === strpos($pathinfo, '/blog')) {
            // yoxima_blog_homepage
            if (preg_match('#^/blog(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'yoxima_blog_homepage')), array (  '_controller' => 'yoxima\\BlogBundle\\Controller\\BlogController::indexAction',  'page' => 1,  '_format' => 'html',  'lg' => 'fr',));
            }

            if (0 === strpos($pathinfo, '/blog/a')) {
                // yoxima_blog_view
                if (0 === strpos($pathinfo, '/blog/article') && preg_match('#^/blog/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'yoxima_blog_view')), array (  '_controller' => 'yoxima\\BlogBundle\\Controller\\BlogController::viewAction',  '_format' => 'html',));
                }

                // yoxima_blog_add
                if ($pathinfo === '/blog/add') {
                    return array (  '_controller' => 'yoxima\\BlogBundle\\Controller\\BlogController::addAction',  '_route' => 'yoxima_blog_add',);
                }

            }

            // yoxima_blog_edit
            if (0 === strpos($pathinfo, '/blog/edit') && preg_match('#^/blog/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'yoxima_blog_edit')), array (  '_controller' => 'yoxima\\BlogBundle\\Controller\\BlogController::editAction',));
            }

            // yoxima_blog_del
            if (0 === strpos($pathinfo, '/blog/del') && preg_match('#^/blog/del/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'yoxima_blog_del')), array (  '_controller' => 'yoxima\\BlogBundle\\Controller\\BlogController::delAction',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
