<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\core\model;
use MVC\models\certified;
use MVC\core\session;
use MVC\core\helper;

class admincertifcontroller extends controller{

    public $user_data;
    public function __construct(){
        session::start();
     $this->user_data=session::Get('user');
    // print_r($this->user_data->id);die;
    // print_r($user_data->sname.$user_data->email);die;
     if(empty($this->user_data)){
     // echo 'no access 1';
     // die;
     helper::redirect('user/login');
    }

    }
   

  public function index(){
    $data=certified::getallcertifies();
   // print_r($data);die;
    $title="Certifieds page";
    $this->view('adminback\certified',['title'=>$title,'certfidata'=>$data]);
   }

   public function add(){

    $title="Add Certifieds";
    $this->view('adminback\addcertified',['title'=>$title]);

   }

   public function postadd(){
    $img=$_FILES['image1'];
    //  var_dump($img);die;
    move_uploaded_file($img['tmp_name'],'images/'.$img['name']);
    // print_r($_POST);die;
    $data=['cert_tit'=>$_POST['CertfiTitle'],'cert_img'=>$img['name']
          ,'user_id'=>$this->user_data->id];
    $PosData=certified::addaCertified($data);
    if($PosData){
        helper::redirect('admincertif\index');

    }
   }


   public function delete($id){
     $data=certified::deletecertfi($id);
     if($data){
      helper::redirect('admincertif\index');

     }
   }

   public function update($id){
     $certdata=certified::getcertfibyid($id);
    // print_r($certdata);die;
     $this->view("adminback\updatecertified",['title'=>"update",'certdata'=>$certdata]);
   }

   public function postupdate(){
    if(!empty($_FILES['image1']['name'])){
      $img=$_FILES['image1'];
      move_uploaded_file($img['tmp_name'],'images/'.$img['name']);
      $data=['cert_tit'=>$_POST['certTitle'],'cert_img'=>$img['name'],'user_id'=>$this->user_data->id];
  }else{
    $data=['cert_tit'=>$_POST['certTitle'],'user_id'=>$this->user_data->id];
  }
   $id=['id'=>$_POST['id']];
     $PosData=certified::updatecertifi($data,$id);
     if($PosData){
      helper::redirect('admincertif\index');

     }
   }
     
}