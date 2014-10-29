<?php
/**
 * Created by PhpStorm.
 * User: yosefderay
 * Date: 10/25/14
 * Time: 9:27 PM
 */
$loader = require_once __DIR__ . '/vendor/autoload.php';

use Yjv\CodeProject\NestedNavigation\Repository\PageRepository;
use Symfony\Component\Routing\Matcher\UrlMatcher;
use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

$pages = include __DIR__ . '/NestedNavigation/Tests/Fixtures/pages.php';

$loader = new \Twig_Loader_Filesystem(__DIR__.'/twig');
$twig = new \Twig_Environment($loader, array(
    'cache' => __DIR__.'/twig_cache',
    'debug' => true
));
$routes = new RouteCollection();
$routes->add('explicit_page', new Route('/pages/{page}'));
$routes->add('first_page', new Route('/', array('page' => 1)));
$context = new RequestContext();
$matcher = new UrlMatcher($routes, $context);

$parameters = $matcher->match($_SERVER['REQUEST_URI']);

$pageRepository = new PageRepository($pages);
$page = $pages[$parameters['page'] - 1];




echo $twig->render('nested_pages.twig', array(
    'page' => $page,
    'children' => $pageRepository->findChildren($page),
    'parent' => $pageRepository->findParent($page)
));