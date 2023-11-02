<?php
use Core\App;
use Core\Database;
use Core\Validator;
use Http\Forms\LoginForm;

$db = App::resolve(Database::class);
$email = $_POST['email'];
$password = $_POST['password'];
$form = new LoginForm();
if ($form->validate($email, $password)) {

        return views('session/create.view.php', [
            'errors' => $forms->errors(),
        ]);
};

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