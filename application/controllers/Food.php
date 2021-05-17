<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Data.php');

class Food extends CI_Controller {
	public function index()
	{
        $data = array(
            "menu" => Data::$menu
        );
		$this->load->view('food/index',$data);
	}

    public function details($id){
        $data = array(
            "menu" => Data::$menu,
            "id" => $id
            
        );
        $this->load->view('food/detail',$data);
    }
}
