<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('print', 'Home::printpdf');
$routes->get('badges', 'Home::index1');
$routes->get('printBadges', 'Home::printBadges');
