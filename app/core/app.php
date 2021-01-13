<?php
namespace MVC\core;

class app{

    private $controller;
    private $method;
    private $params;

    public function __construct(){
        $this->url();
        $this->render();
    }



    private function url()
    {

        // header('Clear-Site-Data:"cache","cookies"');
    //    echo $_SERVER['QUERY_STRING'];
    if(!empty($_SERVER['QUERY_STRING']))
    {
    $url=explode("/",$_SERVER['QUERY_STRING']);

    $this->controller=isset($url[0])?$url[0]."controller":"homecontroller";
    // echo $this->controller;
    $this->method=isset($url[1])?$url[1]:"index";
    // echo $this->method;

    unset($url[0],$url[1]);
        $this->params=array_values($url);
        //  print_r($this->params);    

    }
    else{
        // echo 'not exsits';
        $this->controller='homecontroller';
        $this->method='index';
        $this->params='';
    }
}



private function render(){
    $controller="MVC\controllers\\".$this->controller;
    // echo $this->controller;
    // echo $this->method;die;
//echo $controller;die;
    if(class_exists($controller)){
        // echo 'hhhh';
        $controller=new $controller;
        if(method_exists($controller,$this->method)){
            // echo 'metho found';
          //   echo $this->controller;die;
            // echo $this->method;
            // echo $this->params;

            call_user_func([$controller,$this->method],$this->params);


        }
        else{
            echo 'method not found';
        }
       
    }else{
        echo 'no controller';
    }

}

}