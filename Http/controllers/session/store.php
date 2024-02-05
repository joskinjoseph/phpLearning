<?php

use Core\App;
use Core\Database;
use Core\Validator;

$email = $_POST['email'];
$password = $_POST['password'];

//validate
$errors = [];
if (! Validator::email($email)) {
    $errors['email'] = 'Pls, provide a valid email address';
}
if (! Validator::string($password, 4, 225)) {
    $errors['email'] = 'Pls, provide a  valid password';
}
if (! empty($errors)) {
    return view('session/create.view.php', [
        'errors' => $errors
    ]);
}

$db = App::resolve(Database::class);
$user = $db->query('select * from user where email = :email', [
    'email' => $email
])->fetch();
if(! $user) {
    return view('session/create.view.php', [
        'errors' => [
            'email' => 'No corresponding email found.'
        ]
    ]);
}
    if (password_verify($password, $user['password'])) {
        login([
            'email' => $email
        ]);

        header('location: /');
        exit();
    }


return view('session/create.view.php', [
    'errors' => [
        'email' => 'No matching account found for that email address and password.'
    ]
]);