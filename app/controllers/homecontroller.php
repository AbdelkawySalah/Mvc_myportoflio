<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\core\model;
use MVC\models\category;
use MVC\models\article;
use MVC\models\certified;

class homecontroller extends controller{

  
    public function index(){
         $CategoryData=category::getallcategory();
         $articleportodata=article::getallarticles();
         $certficatesdata=certified::getallcertifies();
       //  echo '<pre>';
       // print_r($articledata);die;
         $this->view("home\index",['title'=>"MYPORTOFOLIO",'CategoryData'=>$CategoryData,'articleData'=>$articleportodata,'certfdata'=>$certficatesdata]);
    }

 
 
}