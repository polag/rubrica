<?php
include_once __DIR__ . '/includes/globals.php';
$args     = array(
    'id' => $_GET['id'],
    'userId' => $_SESSION['userId']
);
$contatto = \DataHandling\Rubrica::selectData($args);
if (count($contatto) > 0) :
    ?>
    <h1>Informazione di <span class="name-hover"><?php echo $contatto[0]['Nome'] ?></span></h1>

    <table class="table table-striped">

        <thead>
            <?php echo \DataHandling\Utils\get_table_head($contatto[0]); ?>
        </thead>
        <tbody>
            <?php echo \DataHandling\Utils\get_table_body($contatto); ?>
        </tbody>
    </table>

<?php else : ?>
    <h1>Contatto non trovato!</h1>
    <p>Spiacente, il contatto con ID <?php echo $_GET['id']; ?> non esiste o è stato rimosso. <a class="link-light" 
    href="/rubrica-paula">Torna alla lista dei contatti</a></p>
<?php endif; ?>
</body>

</html>
