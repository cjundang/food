<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shop extends CI_Controller {
    
    

	public function index()
	{
        $data = $this->set_menu();
		$this->load->view('shop/shop', $data);
    }
    
    public function shopsdetail($id=""){
        $data = $this->set_menu();
        $data["id"] = $id;

        if($id=='1001'){
            $this->load->view('shop/detail', $data);
        }else if($id=='1002'){
            $this->load->view('shop/detail_02', $data);
        }else if($id=='1003'){
            $this->load->view('shop/detail_03', $data);
        }else  if($id=='1004'){
            $this->load->view('shop/detail_04', $data);
        }else  if($id=='1005'){
            $this->load->view('shop/detail_05', $data);
        }else{
            $this->load->view('shop/detail_06', $data);
        }
		
    }

    public function set_menu(){
        $data = array(
            "menu" => array(
                array(
                    "title" => "หน้าหลัก", "icon"=>"house-door",
                    "link"=>"home"
                ),
                array(
                    "title" => "อาหาร", "icon"=>"journal-bookmark",
                    "link"=>"food"
                ),
                array(
                    "title" => "ร้านอาหาร", "icon"=>"shop",
                    "link"=>"shop"
                ),
/*                array(
                    "title" => "แผนที่", "icon"=>"map",
                    "link"=>"map"
                ),
*/                
                array(
                    "title" => "เครื่องครัว", "icon"=>"shop",
                    "link"=>"tools"

                ),
                array(
                    "title" => "ติดต่อเรา", "icon"=>"person-lines-fill",
                    "link"=>"contact"
                )
            )
        );
        return $data;
    }
}
