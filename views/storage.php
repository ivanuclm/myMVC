<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link rel="shortcut icon" href="favicon.ico">
    <title>Almacenamiento total</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <section>
        <h1>Búsqueda por nombre:</h1>
        
        <form action = "storage" method="POST">
            <input id="search" name="search" type="text" placeholder="Escriba el nombre aquí.">
            <input id="submit" type="submit" value="Buscar">
        </form>
        <br>
        <br>
            <a href="<?php echo $routes->get('newentry')->getPath();?>" class="btn btn-success" role="button">Crear nueva entrada</a>
            <button type="button" class="btn btn-warning">Editar entrada</button>
            <!--<a href="<?php echo $routes->get('selectToDelete')->getPath();?>" class="btn btn-danger" role="button">Eliminar entradas</a>-->



        <h1>My Storage:</h1>

        <?php 
        if(is_string($data)) :
            echo $data;
        
        else : ?>
        
            <div class="container-fluid">

            <table class="table">
                <thead>
                    <tr>
                        <td><strong>id</strong></td>
                        <td><strong>title</strong></td>
                        <td><strong>description</strong></td>
                        <td><strong>price</strong></td>
                        <td><strong>sku</strong></td>
                        <td><strong>image</strong></td>
                    </tr>
                </thead>
                <tbody>
                <?php 
                    foreach($data as $item){
                        #print_r($item["image"]);
                        #echo "<br>";
                        echo "<tr>";
                            
                            echo "<td><input type=\"checkbox\" id=\"ckID\" name=\"ckID\">";
                            echo "<label for=\"ckID\">".$item["id"]."</label></td>";

                            echo "<td>".$item["title"]."</td>";
                            echo "<td>".$item["description"]."</td>";
                            echo "<td>".$item["price"]."</td>";
                            echo "<td>".$item["sku"]."</td>";

                            echo "<td>";
                            echo $item["image"];
                            echo "</td>";

                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            </div>

        <?php endif; ?>
        
        <br>
        <br>

        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    <section>
    <!--
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    -->
</body>

</html>