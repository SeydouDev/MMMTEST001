<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        'byebyeTheWorld' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MMM\\BlogBundle\\Controller\\BlogController::byebyeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/byebye-world',    ),  ),  4 =>   array (  ),),
        'mmmblog_accueil' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MMM\\BlogBundle\\Controller\\BlogController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/accueilBlog',    ),  ),  4 =>   array (  ),),
        'mmmblog_voir' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'MMM\\BlogBundle\\Controller\\BlogController::voirAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/blog/article',    ),  ),  4 =>   array (  ),),
        'mmmblog_ajouter' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'MMM\\BlogBundle\\Controller\\BlogController::ajouterAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/blog/ajouter',    ),  ),  4 =>   array (  ),),
        'mmmblog_voir_slug' => array (  0 =>   array (    0 => 'annee',    1 => 'slug',    2 => 'format',  ),  1 =>   array (    '_controller' => 'MMM\\BlogBundle\\Controller\\BlogController::voirSlugAction',    'format' => 'html',  ),  2 =>   array (    'annee' => '\\d{4}',    'format' => 'html|xml',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|xml',      3 => 'format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'slug',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d{4}',      3 => 'annee',    ),    3 =>     array (      0 => 'text',      1 => '/blog',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
