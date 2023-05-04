<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>DataBase</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"/>

</head>
<body>
<nav class="navbar navbar-expand-lg bg-primary mb-5">
    <div class="container-fluid">
        <a class="navbar-brand  text-light">Configure</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">

                <li class="nav-item">
                    <a class="nav-link active text-light" href="index.html">Register</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="consultar.html">See logs</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="container ml-4">
<h2>Configurating Database ... </h2>
<?php

$serv = 'localhost';
$user = 'root';
$pass = '';
$db = 'database';

$connection = mysqli_connect($serv,$user,$pass,$db);

if(!$connection){
    die('Flaha ao conectar com o banco de dados' . mysqli_connect_error());
}

$TabelaSQL = "CREATE TABLE users (id int PRIMARY KEY AUTO_INCREMENT,
                                 f_name varchar(20),
                                 l_name varchar(100),
                                 email varchar(100),
                                 born_date date,
                                 pass varchar (100),
                                 chekt boolean);";
                                 
$create = mysqli_query($connection, $TabelaSQL);

if ($create == 1){
    echo "<h3>DataBase successfully cunfigured</h3>";}

mysqli_close($connection);
?>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>

</body>
</html>


