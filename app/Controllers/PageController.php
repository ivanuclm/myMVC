<?php 

namespace App\Controllers;

use App\Models\Product;
use Symfony\Component\Routing\RouteCollection;

class PageController
{
    // Homepage action
	public function indexAction(RouteCollection $routes)
	{
		$routeToProduct = str_replace('{id}', 1, $routes->get('product')->getPath());
        $routeToStorage = $routes->get('storage')->getPath();
		#$routeToNewEntry = $routes->get('newentry')->getPath();
		#$routeToAddEntry = $routes->get('addentry')->getPath();

        require_once APP_ROOT . '/views/home.php';
	}
}
?>