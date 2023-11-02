<?php
use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve(Database::class);
$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];
if (!Validator::email($email)) {
   $errors['email'] = 'Please provide a valid email address.';
}

if (!Validator::string($password)) {
    $errors['password'] = 'Please provide a valid password.';
}

if (! empty($errors)) {
    return views('session/create.view.php', [
        'errors' => $errors
    ]);
} 
//match with what i have in the database
$user = $db->query('select * from users where email = :email', [
    'email'=> $email
])->find();
if ($user) {
    if (password_verify($password, $user['password'])) {
        login([
            "email" => $email
            ]);
            header('location: /');
            exit;
    }
}

return views('session/create.view.php', [
    'errors' => [
        'email' => 'No matching account for the email address and password.'
    ]
]);