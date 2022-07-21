<?php 
namespace App\Models;

use mysqli;

class Storage
{

#typefile form para imagenes
// CRUD OPERATIONS (Create, Read, Update, Delete)
    public function create(array $newInfo)
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "storagemvc";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        #$addID = $newInfo['add_id'];
        $addTitle = $newInfo['add_title'];
        $addDescription = $newInfo['add_description'];
        $addPrice = $newInfo['add_price'];
        $addSKU = $newInfo['add_sku'];
        $addImage = $newInfo['add_image'];


        $sql = "INSERT INTO `products` (title, description, price, sku, image) 
                VALUES ('{$addTitle}', '{$addDescription}', '{$addPrice}', '{$addSKU}', '{$addImage}')";
        
        $result = $conn->query($sql);

        #exit(print_r($result));
        /*
        if ($result->num_rows > 0) {
            $rows = array();
        // output data of each row
        while($row = $result->fetch_assoc()) {
            
            //print_r($row);
            //echo "<br>";
            
            array_push($rows, $row);
            }
        return $rows;
        } else {
        echo "0 results";
        }
        */


        $conn->close();
    }

    public function read()       
    {
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "storagemvc";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, title, description, price, sku, image FROM products";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $rows = array();
        // output data of each row
        while($row = $result->fetch_assoc()) {
            /*
            print_r($row);
            echo "<br>";
            */
            array_push($rows, $row);
            }
        return $rows;
        } else {
        echo "0 results";
        }
        $conn->close();

    }

    
    public function search(string $searchQuery)       
    {
        #print_r($searchQuery);
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "storagemvc";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        

        $sql = "SELECT * FROM `products` WHERE `title` LIKE '%{$searchQuery}%'";
        
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $rows = array();
        // output data of each row
        while($row = $result->fetch_assoc()) {
            array_push($rows, $row);
            }
        return $rows;
        } else {
        return "0 results for '{$searchQuery}'";
        }
        $conn->close();
    }
    

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }

}
?>