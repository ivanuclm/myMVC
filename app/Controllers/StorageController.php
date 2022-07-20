<?php 

namespace App\Controllers;

use App\Models\Storage;
use Symfony\Component\Routing\RouteCollection;

class StorageController
{
    // Show the product attributes based on the id.
	public function showAction(RouteCollection $routes)
	{
        $storage = new Storage();
        $data = $storage->read();
        
        require_once APP_ROOT . '/views/storage.php';
	}

    public function searchAction(string $searchQuery, RouteCollection $routes)
	{
        $storage = new Storage();
        $fullData = $storage->read();
        $data = $fullData->search($searchQuery);

        require_once APP_ROOT . '/views/storage.php';
	}
}