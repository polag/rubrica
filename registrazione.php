<?php
include __DIR__ . '/includes/header.php';

?>

    <h1>Registrati</h1>
    <form action="" method="POST" class="container">
        <div class="col">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" id="username" class="form-control" required>
        </div>
        <div class="col">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" id="password" class="form-control" required>
        </div>
        <input type="submit" value="Registrati" class="btn btn-dark">

    </form>

</main>
</body>

</html>