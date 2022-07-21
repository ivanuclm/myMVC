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
<a href="<?php echo $routes->get('homepage')->getPath(); ?>">Back to homepage</a>


        <h1>Añadir nueva entrada a la base de datos:</h1>
    

        <form action="edited" method="POST" role="form">
            <div class="form-group">

                <div class="col-sm-4">
                    <label for="title">Título:</label>
                    <input name="add_title" type="text" class="form-control" id="title2">
                </div>

                <div class="col-sm-8">
                    <label for="description">Descripción:</label>
                    <textarea name="add_description" class="form-control" id="description2" rows=3></textarea>
                </div>

                <div class="col-sm-4">
                    <label for="price">Precio:</label>
                    <input name="add_price" type="number" step="0.01" class="form-control" id="price2">
                </div>

                <div class="col-sm-4">
                    <label for="sku">SKU:</label>
                    <input name="add_sku" type="text" class="form-control" id="sku2">
                </div>

                <div class="col-sm-4">
                    <label for="image">URL de imagen:</label>
                    <input name="add_image" type="text" class="form-control" id="image2">
                </div>

                <div class="col-sm-8">
                    <input name="add_submit" id="submit" type="submit" value="Añadir" class="btn btn-block btn-success">
                </div>

            </div>

        
        </form>
</body>
</html>