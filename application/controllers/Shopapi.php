<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Shopapi extends CI_Controller {

    public function getAll(){
        $data = array();
        array_push($data, array(
            "id" => "1",
            "caption"=> "http://localhost/assets/main_page/image/art1.png",
            "heading"=>"Lorem ipsum dolor sit amet consectetur",
            "content"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore ",
            "link"=> "index.php/fullarticle/01",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "id" => "1",
            "caption"=> "http://localhost/assets/main_page/image/art1.png",
            "heading"=>"Lorem ipsum dolor sit amet consectetur",
            "content"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore ",
            "link"=> "index.php/fullarticle/02",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "id" => "1",
            "caption"=> "http://localhost/assets/main_page/image/art1.png",
            "heading"=>"Lorem ipsum dolor sit amet consectetur",
            "content"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore ",
            "link"=> "index.php/fullarticle/03",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "id" => "1",
            "caption"=> "http://localhost/assets/main_page/image/art1.png",
            "heading"=>"Lorem ipsum dolor sit amet consectetur",
            "content"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore ",
            "link"=> "index.php/fullarticle/04",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "id" => "1",
            "caption"=> "http://localhost/assets/main_page/image/art1.png",
            "heading"=>"Lorem ipsum dolor sit amet consectetur",
            "content"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore ",
            "link"=> "index.php/fullarticle/05",
            "update"=> date("m-d-Y"),
        ));
        
        return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function getTopFour(){
        $data = array();
        array_push($data, array(
            "caption"=> "http://localhost/assets/main_page/cafe/1.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "http://localhost/assets/main_page/cafe/2.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "http://localhost/assets/main_page/cafe/3.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "http://localhost/assets/main_page/cafe/4.jpg",
            "link"=> "#",
        ));
        return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function getLastReview(){
        $data = array();
        array_push($data, array(
            "caption"=> "http://localhost/assets/main_page/cafe/1.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "http://localhost/assets/main_page/cafe/2.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "http://localhost/assets/main_page/cafe/3.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "http://localhost/assets/main_page/cafe/4.jpg",
            "link"=> "#",
        ));
        return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    
    public function getShopByMenu($shopid){
        $data = array();
        
        array_push($data, array(
            "caption"=> "http://localhost/assets/main_page/cafe/1.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "http://localhost/assets/main_page/cafe/2.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "http://localhost/assets/main_page/cafe/3.jpg",
            "link"=> "#",
        ));



        return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    
}
