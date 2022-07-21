<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('product', new Route(constant('URL_SUBFOLDER') . '/product/{id}', array('controller' => 'ProductController', 'method'=>'showAction'), array('id' => '[0-9]+')));
$routes->add('storage', new Route(constant('URL_SUBFOLDER') . '/storage', array('controller' => 'StorageController', 'method'=>'showAction'), array()));
#$routes->add('search', new Route(constant('URL_SUBFOLDER') . '/storage', array('controller' => 'StorageController', 'method'=>'searchAction'), array()));
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', array('controller' => 'PageController', 'method'=>'indexAction'), array()));
$routes->add('newentry', new Route(constant('URL_SUBFOLDER') . '/storage/newEntry', array('controller' => 'StorageController', 'method'=>'newEntryAction'), array()));
$routes->add('addentry', new Route(constant('URL_SUBFOLDER') . '/storage/edited', array('controller' => 'StorageController', 'method'=>'addEntryAction'), array()));
$routes->add('selectToDelete', new Route(constant('URL_SUBFOLDER') . '/storage/deleting', array('controller' => 'StorageController', 'method'=>'selectToDeleteAction'), array()));


?>