<?php

namespace Darland\Models;

use Darland\Models\User;

/** Class UserManager **/
class UserManager
{

    private $bdd;

    public function __construct()
    {
        $this->bdd = new \PDO('mysql:host=' . HOST . ';dbname=' . DATABASE . ';charset=utf8;', USER, PASSWORD);
        $this->bdd->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    }

    public function getBdd()
    {
        return $this->bdd;
    }

    public function find($email)
    {
        $stmt = $this->bdd->prepare("SELECT * FROM Users WHERE Email_user = ?");
        $stmt->execute(array(
            $email
        ));
        $stmt->setFetchMode(\PDO::FETCH_CLASS, "Darland\Models\User");

        return $stmt->fetch();
    }

    public function all()
    {
        $stmt = $this->bdd->query('SELECT * FROM User');

        return $stmt->fetchAll(\PDO::FETCH_CLASS, "Darland\Models\User");
    }

    public function store($password)
    {
        $stmt = $this->bdd->prepare("INSERT INTO users(Id_user, Nom_user, Email_user, Password_user, Date_user) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute(array(
            uniqid(),
            $_POST["username"],
            $_POST["email"],
            $password,
            date("Y-m-d H:i:s")
        ));
        print("fghhh");
    }
}
