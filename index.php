<body>
    <header>
        <h1>Rubrica</h1>
        <nav>
            <a class="btn btn-outline-dark" href="/rubrica-paula/inserisci-contatto.php">
            <i class="fas fa-plus"></i> Inserisci contatto</a>

        </nav>
    </header>
    <main>
        <?php
        include __DIR__ . '/includes/header.php';
        include __DIR__ . '/includes/FormHandle.php';
        include __DIR__ . '/includes/Rubrica.php';
        include __DIR__ . '/includes/util.php';
        
        $contatti = \DataHandling\Rubrica::selectData();

        if (isset($_GET['statocanc'])) {
            show_alert("cancellazione", $_GET['statocanc']);
        }
        if (count($contatti) > 0) :
            ?>

            <table class="table table-striped">
                <thead>
                    <?php echo get_table_head($contatti[0]); ?>
                </thead>
                <tbody>
                    <?php echo get_table_body($contatti); ?>
                </tbody>
            </table>
        <?php else : ?>
            <p>Non c'è nessun contatto, <a href="/rubrica-paula/inserisci-contatto.php">vuoi aggiungerne uno?</a></p>
        <?php endif; ?>


</body>

</html>
