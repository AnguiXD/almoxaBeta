<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<link rel="stylesheet" href="css/login_style.css">
<script src="<?php echo base_url()?>/Scripts/jquery3.6.0.js"></script>
<script src="<?php echo base_url()?>/Scripts/Auth.js"></script>
<title>Almoxarifado</title>
</head>
<body class="bg-dark">
    <div id="main">
    </div>

    <script>
        $('#main').load('<?php echo base_url()?>/html/login.html');
    </script>