<?php
use Core\Authenticator;
use Http\Forms\LoginForm;

$forms = LoginForm::validate($attributes = [
    'email' => $_POST['email'],
    'password' => $_POST['password']
]);
$signedIn = (new Authenticator)->attempt(
    $attributes['email'], $attributes['password']
);
if (! $signedIn) {
    $forms->error(
        'email', 'No matching account found for that email address and password.'
        )->throw();
}
redirect('/');


