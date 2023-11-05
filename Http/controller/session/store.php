<?php
use Core\App;
use Http\Forms\LoginForm;
$email = $_POST['email'];
$password = $_POST['password'];
$form = new LoginForm();

if ($form->validate($email, $password)) {
    $auth = new Authenticator();
    if ($auth->attempt($email, $password)) 
    {
        redirect('/');
    } 
        $form->error('email', 'No matching email account for that email and password');       
}
    Session::flash('errors', $form->errors);
    redirect('/');  
        // return views('session/create.view.php', [
        //     'errors' => $forms->errors(),
        // ]);