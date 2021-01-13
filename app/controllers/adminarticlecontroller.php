<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\core\helper;
use MVC\core\session;
use MVC\core\model;
use MVC\models\article;

class adminarticlecontroller extends controller
{
    public $user_data;
    public function __construct(){
        session::start();
      $this->user_data=session::Get('user');
      if(empty($this->user_data)){
          helper::redirect("user/login");
      }
   }

   public function index(){
     //  $article=new article();
     //  $data=$article-->getallarticles();
     $data=article::getallarticles();
      // echo '<pre>';
      // print_r($data);die;
       $title="article page";
       $this->view('adminback\article',['title'=>$title,'data'=>$data]);
   }

   public function delete($id){
       $data=article::deletearticle($id);
       if($data){
           helper::redirect('adminarticle\index');
       }
    }

    public function add(){
        $title="add article";
        $this->view('adminback\addarticle',['title'=>$title]);
    }

  
    public function postadd(){
        $img=$_FILES['image1'];
        //  var_dump($img);die;
        move_uploaded_file($img['tmp_name'],'images/'.$img['name']);
        // print_r($_POST);die;
        $data=['artitle'=>$_POST['artTitle'],'ardesc'=>$_POST['artdec'],'arimg'=>$img['name']
              ,'category_id'=>$_POST['category_id'],'user_id'=>$this->user_data->id];
        $PosData=article::addarticle($data);
        if($PosData){
            helper::redirect('adminarticle\index');

        }
    }

    public function update($id){
        $data=article::getArticlebyid($id);
       // print_r($data);die;
        $title="update article";
        $this->view('adminback\updatearticle',['title'=>$title,'articledata'=>$data]); 
       }    
   
    
       public function postupdate(){
        //   echo '<pre>';
         //  print_r($_FILES);die;
        if(!empty($_FILES['image1']['name'])){
            $img=$_FILES['image1'];
            move_uploaded_file($img['tmp_name'],'images/'.$img['name']);
            $data=['artitle'=>$_POST['artTitle'],'ardesc'=>$_POST['artdec'],'arimg'=>$img['name']
            ,'category_id'=>$_POST['category_id'],'user_id'=>$this->user_data->id];
        }else{
            $data=['artitle'=>$_POST['artTitle'],'ardesc'=>$_POST['artdec']
            ,'category_id'=>$_POST['category_id'],'user_id'=>$this->user_data->id];
        }
         $id=['id'=>$_POST['id']];
         $data1=article::updatearticle($data,$id);
         if($data1){
            helper::redirect('adminarticle\index');
         }
       }

   }

