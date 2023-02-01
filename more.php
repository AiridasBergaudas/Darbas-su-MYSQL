<?php

require_once 'db.php';
$id = $_GET['id'];
$stm = $db->prepare(SELECT * FROM `worker` WHERE  id=?);
$stm->execute([$id]);
$worker=$stm->fetchAll(PDO::FETCH_ASSOC);
?>
//neuzpildziau 5 eilutes
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 mt-5">
            <div class="card">
                <div class="card-header">Darbuotojas: </div>
                <div class="card-body">
                    Pareigos: <?=$worker['responsibilities']?><br>
                    Vardas:   <?=$worker['name']?><br>
                    Pavardė: <?=$worker['surname']?><br>
                    Alga: <?=$worker['salary']?><br>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
