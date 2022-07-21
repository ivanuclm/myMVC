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
        #print_r($_POST);
        if(array_key_exists('search', $_POST)){
            
            #print_r($_POST['search']);
            #echo "<br>";
            $filter = $_POST['search'];
            $data = $storage->search($filter);
        }
        else{
            $data = $storage->read();
        }
        require_once APP_ROOT . '/views/storage.php';
	}

    public function newEntryAction(RouteCollection $routes)
    {
        require_once APP_ROOT . '/views/addstorage.php';
    }

    public function addEntryAction(RouteCollection $routes)
    {
        #exit(print_r("hellegao"));
        $storage = new Storage();

        $newInfo = $_POST;
        $storage->create($newInfo);

        $data = $storage->read();
        require_once APP_ROOT . '/views/addsuccess.php';
    }

}
?>