<?php 
namespace App\Models;

use mysqli;

class Storage
{
    protected $id;
    protected $title;
    protected $description;
    protected $price;
    protected $sku;         #Stock Keeping Unit (Número de referencia único)
    protected $image;

// GETTERS
    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function getImage()
    {
        return $this->image;
    }

// SETTERS
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setPrice(string $price)
    {
        $this->price = $price;
    }

    public function setSku(string $sku)
    {
        $this->sku = $sku;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

// CRUD OPERATIONS (Create, Read, Update, Delete)
    public function create(array $data)
    {

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

        $sql = "SELECT id, title, description, price, sku, image FROM products WHERE title LIKE %$searchQuery%";
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

    public function update(int $id, array $data)
    {

    }

    public function delete(int $id)
    {

    }

}
?>