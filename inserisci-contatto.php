<?php
//phpcs: ignore Generic.Files.LineEndings
include __DIR__ . '/includes/header.php';
include __DIR__ . '/includes/util.php';
if (isset($_GET['stato'])) {
    show_alert("inserimento", $_GET['stato']);
}
?>
<h1>Inserisci nuovo contatto </h1>
<form action="./includes/contatti.php" method="POST">
    <div class="row">
        <div class="col">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" name="nome" id="nome" class="form-control" required>
        </div>
        <div class="col">
            <label for="telefono" class="form-label">Numero di telefono</label>
            <input type="tel" name="telefono" id="telefono" class="form-control" required>


        </div>

    </div>

    <h2>Informazioni Aggiuntive</h2>
    <div class="row">
        <div class="col">
            <label for="organizzazione" class="form-label">Organizzazione</label>
            <input type="text" name="organizzazione" id="organizzazione" class="form-control">
            <label for="email" class="form-label">Email</label>
            <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="col">
            <label for="indirizzo" class="form-label">Indirizzo</label>
            <input type="text" name="indirizzo" id="indirizzo" class="form-control">
            <label for="compleanno" class="form-label">Compleanno</label>
            <input type="date" name="compleanno" id="compleanno" class="form-control">
        </div>

    </div>
    <input type="submit" value="Aggiungi Contatto" class="btn btn-dark">

    <a href="./index.php" class="btn btn-outline-dark">Torna</a>
</form>
</main>
</body>

</html>
