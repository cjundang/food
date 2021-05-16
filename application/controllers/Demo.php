<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Demo extends CI_Controller {
    public static $data = "ssssss"; 
    public function test(){
        echo "toi";
    }
    public function index(){
        echo  Demo::$data;
    }
}