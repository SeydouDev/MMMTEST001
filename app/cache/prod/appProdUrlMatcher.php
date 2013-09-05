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
            // byebyeTheWorld
            if ($pathinfo === '/blog/byebye-world') {
                return array (  '_controller' => 'MMM\\BlogBundle\\Controller\\BlogController::byebyeAction',  '_route' => 'byebyeTheWorld',);
            }

            if (0 === strpos($pathinfo, '/blog/a')) {
                // mmmblog_accueil
                if ($pathinfo === '/blog/accueilBlog') {
                    return array (  '_controller' => 'MMM\\BlogBundle\\Controller\\BlogController::indexAction',  '_route' => 'mmmblog_accueil',);
                }

                // mmmblog_voir
                if (0 === strpos($pathinfo, '/blog/article') && preg_match('#^/blog/article/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mmmblog_voir')), array (  '_controller' => 'MMM\\BlogBundle\\Controller\\BlogController::voirAction',));
                }

                // mmmblog_ajouter
                if ($pathinfo === '/blog/ajouter') {
                    return array (  '_controller' => 'MMM\\BlogBundle\\Controller\\BlogController::ajouterAction',  '_route' => 'mmmblog_ajouter',);
                }

            }

            // mmmblog_voir_slug
            if (preg_match('#^/blog/(?P<annee>\\d{4})/(?P<slug>[^/\\.]++)(?:\\.(?P<format>html|xml))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mmmblog_voir_slug')), array (  '_controller' => 'MMM\\BlogBundle\\Controller\\BlogController::voirSlugAction',  'format' => 'html',));
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
