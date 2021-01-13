<?php
namespace  MVC\models;
use MVC\core\model;
class article {
    public function getallarticles(){
        $data=model::db()->run("select articles.id,articles.artitle,
        articles.ardesc,articles.arimg,
        articles.category_id,articles.user_id,category.categoryname,users.email
         from articles
         inner join  category on articles.category_id=category.id
         inner join users on articles.user_id=users.id
        ")->fetchAll();
       return $data;
    }

   
    public function getArticlebyid($id){
        // $data=model::db()->run("select * from category where id=?",$id)->fetch();
        // or this code 
        $data=model::db()->row("select * from articles where id=?",$id);
        // var_dump($data);die;
       return $data;
    }

   

    
    public function deletearticle($id){
        $data=model::db()->run("delete  from articles where id=?",$id);
        return $data;
    }

    public function addarticle($data){
        $data=model::db()->insert("articles",$data);
        return $data;
    }

    public function updatearticle($data,$id){
        $data=model::db()->update("articles",$data,$id);
        return $data;


    }


}
