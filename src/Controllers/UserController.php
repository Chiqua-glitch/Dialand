<?php

namespace Darland\Controllers;

use Darland\Models\UserManager;
use Darland\Validator;

/** Class UserController **/
class UserController
{
    private $manager;
    private $validator;

    public function __construct()
    {
        $this->manager = new UserManager();
        $this->validator = new Validator();
    }

    public function showLogin()
    {
        require VIEWS . 'Auth/login.php';
    }

    public function showRegister()
    {
        require VIEWS . 'Auth/register.php';
    }

    public function logout()
    {
        session_start();
        session_destroy();
        header('Location: /login');
    }

    public function register()
    {
        $this->validator->validate([
            "username" => ["required", "min:3", "alpha"],
            "password" => ["required", "min:6", "alphaNum", "confirm"],
            "passwordConfirm" => ["required", "min:6", "alphaNum"],
            "email" => ["required", "email"],
            "lastName" => ["required", "min:3", "alpha"]
        ]);
        $_SESSION['old'] = $_POST;

        if (!$this->validator->errors()) {
            $res = $this->manager->find($_POST["email"]);
            if (empty($res)) {
                $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
                $this->manager->store($password);

                $_SESSION["user"] = [
                    "id" => $this->manager->getBdd()->lastInsertId(),
                    "username" => $_POST["username"]
                ];
                header("Location: /");
            } else {
                $_SESSION["error"]['email'] = "L'email choisi est déjà utilisé !";
                header("Location: /register");
            }
        } else {
            header("Location: /register");
        }
    }

    public function login()
    {
        $this->validator->validate([
            "email" => ["required", "email"],
            "password" => ["required", "min:6", "alphaNum"]
        ]);

        $_SESSION['old'] = $_POST;
        if (!$this->validator->errors()) {

            $res = $this->manager->find($_POST["email"]);
            if ($res && password_verify($_POST['password'], $res->getPassword_user())) {

                $_SESSION["user"] = [
                    "id" => $res->getId_user(),
                    "username" => $res->getNom_user()
                ];
                header("Location: /");
            } else {
                $_SESSION["error"]['message'] = "Une erreur sur les identifiants";
                header("Location: /login");
            }
        } else {
            header("Location: /login");
        }
    }
}
