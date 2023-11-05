<?php
views("session/create.view.php", [
    'errors' => $_SESSION['_flash']['errors'] ?? [],
]);