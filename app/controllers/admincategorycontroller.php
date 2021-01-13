<?php
namespace MVC\controllers;
use MVC\core\controller;
use MVC\core\session;
use MVC\core\helper;
use MVC\models\category;
class admincategorycontroller extends controller{
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
        $category=new category();
        $data=$category->getallcategory();
      //  var_dump($data);die;
        $this->view('adminback\category',['title'=>'category Page','categorydata'=>$data]);

    }

    public function add(){
        $this->view('adminback\addcategory',['title'=>'Add category']);
    }

    public function postadd(){

        $category=new category();
        $data=['categoryname'=>$_POST['categoryname'],'categorylink'=>$_POST['categorylink'],'user_id'=>$this->user_data->id];
        //var_dump($data);die;
        $date=$category->addcategory($data);
        if($data){
            helper::redirect('admincategory/index');
    
        }
    }

    public function delete($id){
       // print_r($id);die;
        $category=new category();
        $data=$category->deletecategry($id);
        if($data){
            helper::redirect('admincategory/index');
    
        }
    }

    public function update($id){
        $category=new category();
        $data=$category->getcategorybyid($id);
     //   var_dump($data);die;
        $this->view('adminback\updatecategory',['title'=>'category Page','categorydata'=>$data]);
    }

    public function postupdate(){
        $data=['categoryname'=>$_POST['categoryname'],'categorylink'=>$_POST['categorylink'],'user_id'=>$this->user_data->id];
        $id=['id'=>$_POST[id]];
        $category=new category();
        $data=$category->updatecategory($data,$id);
        if($data){
            helper::redirect('admincategory/index');
        }
     //   var_dump($data);die;
    }

}
 
