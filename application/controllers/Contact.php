<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Data.php');
class Contact extends CI_Controller {
	public function index()
	{
		
        $data = array(
            "menu" => Data::$menu
        );
		$this->load->view('ui/contact', $data);
	}
}
