<?php
namespace App\Controller;

use App\Controller\AppController;

class HeloController extends AppController{
    public function index(){
        $str = $this->request->data('text1');
        $msg = 'typed: '.$str;
        if($str == null){
            $this->set($msg = 'please type massege...');
        }
        $this->set('message' , $msg);
        /*$id = $this->request->query('id');
        $name = $this->request->query('name');
        $this->set('message' , 'your id: ' . $id . ', name: ' . $name);
        */

        //formデータの入力を表示する
        /*$str = $this->request->data('text1');
        if($str != null){
            $str = $this->request->data['text1'];
            $this->set('message' , 'you typed: ' . $str);
        }else{
            $this->set('message' , 'please type massege...');
        
        }
        */
        
    }

}