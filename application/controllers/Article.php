<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Data.php');

class Article extends CI_Controller {
	public function index()
	{
        $data = array(
            "menu" => Data::$menu
        );
		$this->load->view('article/index',$data);
	}

    public function details(){
        $data = array(
            "menu" => Data::$menu
        );
		$this->load->view('article/index',$data);
    }
}
