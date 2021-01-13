<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\core\session;
use MVC\models\user;
use  GUMP;
use MVC\core\helper;

class usercontroller extends controller{
  public function __construct(){
        session::start();
      //  $user_data=session::Get('user');
      //  if(empty($user_data)){
      //      echo 'no access';
      //      die;
     //   }
   }

  //  public function index(){
    //    $title="admin";
    //    $this->view("adminback\index",['title'=>$title]);
   // }

    public function login()
    {
     $this->view("user\login",['title'=>"Login Page"]);   
   }
   public function postlogin() {
      // $v=GUMP::is_vaild($_POST,
      // ['password'=>'required']);
      // print_r ($v);

      $v=GUMP::is_valid($_POST,[
         'email'=>'required',
         'password'=>'required'
      ]);
      if($v==1){
         $user=new user();
         $data=$user->GetUser($_POST['email'],$_POST['password']);
        //  print_r($data);die;
       Session::Set('user',$data);
       // print_r($_SESSION['user']);die;
       helper::redirect('admincategory/index');
     }     

   }



    public function logout(){
        session::stop();
        helper::redirect('user/login');

    }

}