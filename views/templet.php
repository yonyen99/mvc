<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="views/bootstrap-4.3.1/css/bootstrap.min.css">
<script src="views/bootstrap-4.3.1/js/bootstrap.min.js"></script>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
    <!-- link in w3school -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<title>Document</title>
</head>
<body>
<div class="continer">
    <div class="row">
        <div class="col-12 text-center"><h2>This is the process of MVC:</h2></div>
        <hr>
        <?php
           include "Views/".$data['page'].".php";
        ?>
    </div>
</div>
</body>
</html>