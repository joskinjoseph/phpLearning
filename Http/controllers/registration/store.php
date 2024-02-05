<?php
use Core\App;
use Core\Database;
use Core\Validator;
use Http\Form\LoginForm;

$email = $_POST['email'];
$password = $_POST['password'];

$form = new LoginForm();
if (! $form->validate($email, $password)){
        return view('registration/create.view.php', [
            'errors' => $forms->errors();
        ]);
}
$db = App::resolve(Database::class);
$user = $db->query('select * from user where email = :email', [
    'email' => $email
])->fetch();
if($user) {
    header('location: /');
    exit();
} else {
    $db->query('INSERT into user (email, password) VALUE (:email, :password)',[ 
    'email' => $email,
    'password' => password_hash($password, PASSWORD_BCRYPT)
    ]);
    login($user);
    header ('location: /');
    exit();
}

