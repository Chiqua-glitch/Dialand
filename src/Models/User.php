<?php
namespace Darland\Models;

/** Class User **/
class User {

    private $Nom_user;
    private $Password_user;
    private $Id_user;

    public function getNom_user() {
        return $this->Nom_user;
    }

    public function getPassword_user() {
        return $this->Password_user;
    }

    public function getId_user() {
        return $this->Id_user;
    }

    public function setNom_user(String $Nom_user) {
        $this->Nom_user = $Nom_user;
    }

    public function setPassword_user(String $Password_user) {
        $this->Password_user = $Password_user;
    }

    public function setId_user(Int $Id_user) {
        $this->Id_user = $Id_user;
    }
}
