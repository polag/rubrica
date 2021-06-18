<?php

include __DIR__ . '/includes/rubrica.php';
$contatto = Rubrica::select_data($_GET['id']);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rubrica - Modifica Contatto</title>
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
    <?php
    if (isset($_GET['stato']) && $_GET['stato'] === 'ok') :
    ?>
        <div class="stato stato--ok alert alert-success">Contatto aggiornato con successo.</div>
    <?php
    elseif (isset($_GET['stato']) && $_GET['stato'] === 'ko') :
    ?>
        <div class="stato stato--ko alert alert-danger">Ops! C'è stato un problema, riprova più tardi.</div>
    <?php
    endif;
    ?>
    <!-- Nav Bar -->
    <nav class="navbar ">

        <a class="navbar-brand" href="./index.php">Torna indietro</a>
    </nav>
    <h1>Modifica il contatto: <span class="name-hover"><?php echo $contatto[0]['nome'] ?></span> </h1>
    <form action="./includes/contatti.php?id=<?php echo $contatto[0]['id'] ?>" method="POST">
        <div class="row">
            <div class="col">

                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $contatto[0]['nome'] ?>" class="form-control" required>
            </div>
            <div class="col">
                <label for="telefono" class="form-label">Numero di telefono</label>
                <input type="tel" name="telefono" id="telefono" value="<?php echo $contatto[0]['telefono'] ?>" class="form-control" required>
            </div>
        </div>
        <h2>Informazioni Aggiuntive</h2>
        <div class="row">
            <div class="col">
                <label for="organizzazione" class="form-label">Organizzazione</label>
                <input type="text" name="organizzazione" id="organizzazione" value="<?php echo $contatto[0]['organizzazione'] ?>" class="form-control">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $contatto[0]['email'] ?>" class="form-control">
            </div>
            <div class="col">
                <label for="indirizzo" class="form-label">Indirizzo</label>
                <input type="text" name="indirizzo" id="indirizzo" value="<?php echo $contatto[0]['indirizzo'] ?>" class="form-control">
                <label for="compleanno" class="form-label">Compleanno</label>
                <input type="date" name="compleanno" id="compleanno" value="<?php echo $contatto[0]['compleanno'] ?>" class="form-control">
            </div>
        </div>
        <input type="submit" value="Aggiorna Contatto" class="btn btn-dark">
        <a href="./dettaglio-contatto.php?id=<?php echo $contatto[0]['id'] ?>" class="btn btn-outline-dark">Torna</a>
    </form>
    </main>
</body>

</html>