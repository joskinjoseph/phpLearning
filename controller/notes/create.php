<?php
$heading = 'Create Note';
$errors = [];
views('notes/create.view.php', [
    'heading' => $heading,
    'errors' => $errors,
]);
