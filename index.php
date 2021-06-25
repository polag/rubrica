<?php
include __DIR__ . '/includes/globals.php';

$contatti = \DataHandling\Rubrica::selectData(array( 'userId' => $_SESSION['userId'] ));

if (isset($_GET['statocanc'])) {
    \DataHandling\Utils\show_alert('cancellazione', $_GET['statocanc']);
}
if (count($contatti) > 0) :
    ?>
<body>
    <header>
        
        <nav>
            <a class="btn btn-outline-dark" href="/rubrica-paula/inserisci-contatto.php">
                <i class="fas fa-plus"></i> Inserisci contatto</a>

        </nav>
    </header>
    <main>
       

            <table class="table table-striped">
                <thead>
                    <?php echo \DataHandling\Utils\get_table_head($contatti[0]); ?>
                </thead>
                <tbody>
                    <?php echo \DataHandling\Utils\get_table_body($contatti); ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>Non c'è nessun contatto, <a href="/rubrica-paula/inserisci-contatto.php">vuoi aggiungerne uno?</a></p>
        <?php endif; ?>


</body>

</html>