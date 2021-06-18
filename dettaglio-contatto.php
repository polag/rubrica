<?php
include __DIR__ . './includes/rubrica.php';
include __DIR__ . './includes/util.php';
$contactId  = $_GET['id'];
$detail = Rubrica::select_data($contactId);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dettaglio contatto</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <!--  CSS -->
    <link rel="stylesheet" href="./styles/styles.css" />
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/402cc49e6e.js" crossorigin="anonymous"></script>
    <!--Google Fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400&display=swap" rel="stylesheet">
</head>

<body>
    <!-- Nav Bar -->
    <nav class="navbar ">

        <a class="navbar-brand" href="./index.php">Torna indietro</a>
    </nav>
    <h1>Informazione di <span class="name-hover"><?php echo $detail[0]['nome'] ?></span></h1>


    <table class="table table-striped">

        <thead>
            <?php echo get_table_head($detail[0]); ?>
        </thead>
        <tbody>
            <?php echo get_table_body($detail); ?>
        </tbody>
    </table>

</body>

</html>