<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $header_title?></title>
</head>
<body>
<?php include_once"./views/includes/nav.php"?>
<div class="container mt-2">
    <h2 class="container text-center" ><?= $title?></h2>
    <hr>
    <?= $content?>
</div>
</body>
</html>
