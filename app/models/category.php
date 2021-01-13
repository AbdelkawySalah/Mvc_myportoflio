<?php
namespace MVC\models;
use MVC\core\model;

class category {
    public function getallcategory(){
        $data=model::db()->run("select * from category")->fetchAll();
       return $data;
    }

    public function getcategorybyid($id){
        // $data=model::db()->run("select * from category where id=?",$id)->fetch();
        // or this code 
        $data=model::db()->row("select * from category where id=?",$id);
       return $data;
    }
    public function deletecategry($id){
        // print_r($id);die;
      //  $data=model::db()->delete("category",['$id']);
        $data=model::db()->run("delete  from category where id=?",$id);

        return $data;
    }

    public function addcategory($data){
        $data=model::db()->insert("category",$data);
        return $data;
    }


    public function updatecategory($data,$id){
        $data=model::db()->update("category",$data,$id);
        return $data;


    }
  

}