<?php
namespace  MVC\models;
use MVC\core\model;
class certified {
    public function getallcertifies(){
        $data=model::db()->run("select certfieds.id,certfieds.cert_tit,
         certfieds.cert_img,
         certfieds.user_id,users.email
         from certfieds
         inner join users on certfieds.user_id=users.id
        ")->fetchAll();
       return $data;
    }

   
    public function getcertfibyid($id){
        // $data=model::db()->run("select * from category where id=?",$id)->fetch();
        // or this code 
        $data=model::db()->row("select * from certfieds where id=?",$id);
        // var_dump($data);die;
       return $data;
    }

   

    
    public function deletecertfi($id){
        $data=model::db()->run("delete  from certfieds where id=?",$id);
        return $data;
    }

    public function addaCertified($data){
        $data=model::db()->insert("certfieds",$data);
        return $data;
    }

    public function updatecertifi($data,$id){
        $data=model::db()->update("certfieds",$data,$id);
        return $data;


    }


}
