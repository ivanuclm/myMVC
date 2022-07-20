<?php 
namespace App\Models;

use mysqli;

class Product
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

    // TODO: modificar para que lea de mySQL
    /*
        You can now add your database connection, and return the values from the database, using a raw query or an ORM like Doctrine or Eloquent.

        Additional notes to the routing: your routes could overlap with each other, for example, if you write /{pageSlug} before any other route, such as /register. 
        You can easily overcome this problem simply by writing your general route /{pageSlug} at the end of all the routes. 
        This route will become your fallback. 
        Or, another solution is to add a prefix, such as /static/{pageSlug} or /public/{pageSlug}.
    */
    public function read(int $id)       
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
        // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "id: " . $row["id"]. 
                    " - Título: " . $row["title"]. 
                    " - Descripción:" . $row["description"]. 
                    " - Precio:" . $row["price"]. 
                    " - SKU:" . $row["sku"]. 
                    " - Imagen:" . $row["image"]. 
                    "<br>";
            
            $this->title = $row["title"];
            $this->description = $row["description"];
            $this->price = $row["price"];
            $this->sku = $row["sku"];
            $this->image = $row["image"];
        
            return $this;
        }
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