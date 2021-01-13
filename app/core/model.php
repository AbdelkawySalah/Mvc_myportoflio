<?php
namespace MVC\core;

use Dcblogdev\PdoWrapper\Database as Database;
class model{
    static function db(){
        $options=[
         ////  'username'=>'root',
        //   'database'=>'myproflio',
   //         //optional
          //    'password'=>'',
           //  'type'=>'mysql',
         //   'charset'=>'utf8',
          //   'host'=>'localhost',
          //   'port'=>'3306'
       // ];

        'username'=>USERNAME,
        'database'=>DATABASE,
        //optional
        'password'=>PASSWORD,
        'type'=>DATABASE_TYPE,
        'charset'=>'utf8',
        'host'=>SERVER,
        'port'=>'3306'

        ];

      return $db=new Database($options);
}


}