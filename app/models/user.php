<?php
namespace MVC\models;
use MVC\core\model;
class user extends model{
    public function GETUSER($email,$password){
        $data=model::db()->row("select * from users where email=? && password=?",[$email,$password]);
        return $data;
    }
    public function GetAlluser(){
        $data=model::db()->run("SELECT * FROM users")->fetchAll();
        return $data;
    }
}
