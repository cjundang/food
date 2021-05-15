<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {
	public function getLastArticle()
	{
        $data = array();
        array_push($data, array(
            "title"=> "8 ร้านอาหารทะเลหัวหิน 2020",
            "caption"=> "1.jpg",
            "content"=> "",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "8 ร้านอาหารทะเลหัวหิน 2020",
            "caption"=> "2.jpg",
            "content"=> "",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "8 ร้านอาหารทะเลหัวหิน 2020",
            "caption"=> "3.jpg",
            "content"=> "",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "8 ร้านอาหารทะเลหัวหิน 2020",
            "caption"=> "4.jpg",
            "content"=> "",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "8 ร้านอาหารทะเลหัวหิน 2020",
            "caption"=> "5.jpg",
            "content"=> "",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "8 ร้านอาหารทะเลหัวหิน 2020",
            "caption"=> "6.jpg",
            "content"=> "",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "8 ร้านอาหารทะเลหัวหิน 2020",
            "caption"=> "7.jpg",
            "content"=> "",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));

		return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($data));
	}

    public function getTopFourCafe(){
        $data = array();
        array_push($data, array(
            "caption"=> "1.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "2.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "3.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "4.jpg",
            "link"=> "#",
        ));
        return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function getTopEightRecommend(){
        $data = array();
        array_push($data, array(
            "caption"=> "1.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "2.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "3.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "4.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "5.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "6.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "7.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "8.jpg",
            "link"=> "#",
        ));
        return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function getLastSixCafe()
	{
        $data = array();
        array_push($data, array(
            "title"=> "Underworld",
            "caption"=> "1.jpg",
            "content"=> "",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "Mesa Cafe",
            "caption"=> "2.jpg",
            "content"=> "",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "8 ร้านอาหารทะเลหัวหิน 2020",
            "caption"=> "3.jpg",
            "content"=> "",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "8 ร้านอาหารทะเลหัวหิน 2020",
            "caption"=> "4.jpg",
            "content"=> "",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "8 ร้านอาหารทะเลหัวหิน 2020",
            "caption"=> "5.jpg",
            "content"=> "",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "8 ร้านอาหารทะเลหัวหิน 2020",
            "caption"=> "6.jpg",
            "content"=> "",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));

		return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($data));
	}

    public function getLastReivew(){
        $data = array();
        array_push($data, array(
            "caption"=> "1.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "2.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "3.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "4.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "5.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "6.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "7.jpg",
            "link"=> "#",
        ));
        array_push($data, array(
            "caption"=> "8.jpg",
            "link"=> "#",
        ));
        return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
    public function getCarousel(){
        $data = array();
        array_push($data, array(
            "id" => "1",
            "caption"=> "3.jpg",
            "heading"=>"",
            "link"=> "#",
        ));
        array_push($data, array(
            "id" => "2",
            "caption"=> "4.jpg",
            "heading"=>"",
            "link"=> "#",
        ));
        array_push($data, array(
            "id" => "2",
            "caption"=> "5.jpg",
            "heading"=>"",
            "link"=> "#",
        ));

        return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

    public function getTopArticle(){
        $data = array();
        array_push($data, array(
            "id" => "1",
            "caption"=> "art1.png",
            "heading"=>"Lorem ipsum dolor sit amet consectetur",
            "content"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore ",
            "link"=> "index.php/fullarticle/01",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "id" => "1",
            "caption"=> "art1.png",
            "heading"=>"Lorem ipsum dolor sit amet consectetur",
            "content"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore ",
            "link"=> "index.php/fullarticle/02",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "id" => "1",
            "caption"=> "art1.png",
            "heading"=>"Lorem ipsum dolor sit amet consectetur",
            "content"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore ",
            "link"=> "index.php/fullarticle/03",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "id" => "1",
            "caption"=> "art1.png",
            "heading"=>"Lorem ipsum dolor sit amet consectetur",
            "content"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore ",
            "link"=> "index.php/fullarticle/04",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "id" => "1",
            "caption"=> "art1.png",
            "heading"=>"Lorem ipsum dolor sit amet consectetur",
            "content"=>"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore ",
            "link"=> "index.php/fullarticle/05",
            "update"=> date("m-d-Y"),
        ));
        
        return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

}
