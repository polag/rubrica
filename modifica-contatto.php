<?php
require __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/FormHandle.php';
require __DIR__ . '/includes/Rubrica.php';
require __DIR__ . '/includes/util.php';
$args = array(
    'id' => $_GET['id'],
);
$contatto = \DataHandling\Rubrica::selectData($args);
if (count($contatto) > 0) :
    if (isset($_GET['stato'])) {
        show_alert("modifica", $_GET['stato']);
    }
    ?>

    <h1>Modifica il contatto: <span class="name-hover"><?php echo $contatto[0]['Nome'] ?></span> </h1>
    <form action="./includes/contatti.php?id=<?php echo $contatto[0]['ID'] ?>" method="POST">
        <div class="row">
            <div class="col">

                <label for="nome" class="form-label">Nome</label>
                <input type="text" name="nome" id="nome" value="<?php echo $contatto[0]['Nome'] ?>" class="form-control"
                 required>
            </div>
            <div class="col">
                <label for="telefono" class="form-label">Numero di telefono</label>
                <input type="tel" name="telefono" id="telefono" value="<?php echo $contatto[0]['Telefono'] ?>" 
                class="form-control" required>
            </div>
        </div>
        <h2>Informazioni Aggiuntive</h2>
        <div class="row">
            <div class="col">
                <label for="organizzazione" class="form-label">Organizzazione</label>
                <input type="text" name="organizzazione" id="organizzazione" 
                value="<?php echo $contatto[0]['organizzazione'] ?>" class="form-control">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" value="<?php echo $contatto[0]['email'] ?>" 
                class="form-control">
            </div>
            <div class="col">
                <label for="indirizzo" class="form-label">Indirizzo</label>
                <input type="text" name="indirizzo" id="indirizzo" value="<?php echo $contatto[0]['indirizzo'] ?>" 
                class="form-control">
                <label for="compleanno" class="form-label">Compleanno</label>
                <input type="date" name="compleanno" id="compleanno" value="<?php echo $contatto[0]['compleanno'] ?>" 
                class="form-control">
            </div>
        </div>
        <input type="submit" value="Aggiorna Contatto" class="btn btn-dark">
        <a href="./dettaglio-contatto.php?id=<?php echo $contatto[0]['ID'] ?>" class="btn btn-outline-dark">Torna</a>
    </form>
<?php else : ?>
    <h1>Contatto non trovato!</h1>
    <p>Spiacente, il contatto con ID <?php echo $_GET['id']; ?> non esiste o è stato rimosso. <a class="link-light" 
    href="/rubrica">Torna alla lista dei contatti</a></p>
<?php endif; ?>
</main>
</body>

</html>