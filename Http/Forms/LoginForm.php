<?php
namespace Http\Form;

use Core\Validator;

class LoginForm
{
    protected $errors = [];
    public function validate($email, $password)
    {
        if (!Validator::email($email)) {
            $this->errors['email'] = 'Pls, provide a valid email address';
        }
        if (!Validator::string($password, 4, 225)) {
            $this->errors['email'] = 'Pls, provide a  password of at least 4 characters';
        }
        return empty($this->errors);
    }
    public function errors()
    {
        return $this->errors;
    }
}
