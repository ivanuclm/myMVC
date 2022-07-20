<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.png">
    <title>titulo nada basado</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <section>
        <h1>Búsqueda por nombre:</h1>
        <!-- HAY QUE HACER EL routeToSearch PASANDO LA QUERY COMO PARÁMETRO
                quizá hay que mandar esto a otro php que ya llame a la accion del controlador o algo 
        -->
        <form action = "searching.php" method="POST">
            <input id="search" name="search" type="text" placeholder="Escriba el nombre aquí.">
            <input id="submit" type="submit" value="Buscar">
        </form>

        <h1>My Storage:</h1>
        <table>
            <tr>
                <td><strong>id</strong></td>
                <td><strong>title</strong></td>
                <td><strong>description</strong></td>
                <td><strong>price</strong></td>
                <td><strong>sku</strong></td>
                <td><strong>image</strong></td>
            </tr>
            <?php 
                foreach($data as $item){
                    echo "<tr>";
                    echo "<td>".$item["id"]."</td>";
                    echo "<td>".$item["title"]."</td>";
                    echo "<td>".$item["description"]."</td>";
                    echo "<td>".$item["price"]."</td>";
                    echo "<td>".$item["sku"]."</td>";
                    echo "<td>".$item["image"]."</td>";
                    echo "</tr>";
                }
            ?>

        </table>

        <a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>
    <section>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" 
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>