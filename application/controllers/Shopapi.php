<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ShopApi extends CI_Controller {
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

    public function getTopShops(){
        $data = array();
        array_push($data, array(
            "id"=>"1001",
            "title"=> "ขนมจีนเมืองคอน",
            "caption"=> "upload/shop/1001/10.jpeg",
            "content"=> "",
            "link"=> "shop/shopsdetail/1001",
            "update"=> date("m-d-Y"),
            "point"=>"4.72",
            "ratting"=>"66",
            "review"=>"49",
            "type"=>"อาหารทะเล, อาหารไทย",
        ));

        array_push($data, array(
            "id"=>"1002",
            "title"=> "โกปี้",
            "caption"=> "upload/shop/Shop-002.jpeg",
            "content"=> "",
            "link"=> "shop/shopsdetail/1002",
            "update"=> date("m-d-Y"),
            "point"=>"4.3",
            "ratting"=>"66",
            "review"=>"49",
            "type"=>"อาหารทะเล, อาหารไทย",
        ));
        array_push($data, array(
            "id"=>"1003",
            "title"=> "ครัวนายหนัง",
            "caption"=> "upload/shop/Shop-003.jpeg",
            "content"=> "",
            "link"=> "shop/shopsdetail/1003",
            "update"=> date("m-d-Y"),
            "point"=>"4.6",
            "ratting"=>"66",
            "review"=>"49",
            "type"=>"อาหารทะเล, อาหารไทย",
        ));
        
        
         
        array_push($data, array(
            "id"=>"1004",
            "title"=> "ชาวเรือ",
            "caption"=> "upload/shop/Shop-005.jpeg",
            "content"=> "",
            "link"=> "shop/shopsdetail/1004",
            "update"=> date("m-d-Y"),
            "point"=>"3.5",
            "ratting"=>"66",
            "review"=>"49",
            "type"=>"อาหารทะเล, อาหารไทย",
        ));

        array_push($data, array(
            "id"=>"1005",
            "title"=> "ขนมจีนครูพร",
            "caption"=> "upload/shop/1006/KanomjeenPoonim.jpg",
            "content"=> "",
            "link"=> "shop/shopsdetail/1005",
            "update"=> date("m-d-Y"),
            "point"=>"4.1",
            "ratting"=>"66",
            "review"=>"49",
            "type"=>"อาหารทะเล, อาหารไทย",
        ));

        array_push($data, array(
            "id"=>"1006",
            "title"=> "ตังเกี๋ยแต่เตี้ยม",
            "caption"=> "upload/shop/Shop-004.jpeg",
            "content"=> "",
            "link"=> "shop/shopsdetail/1006",
            "update"=> date("m-d-Y"),
            "point"=>"3.5",
            "ratting"=>"66",
            "review"=>"49",
            "type"=>"อาหารทะเล, อาหารไทย",
        ));
         
        array_push($data, array(
            "id"=>"1007",
            "title"=> "ร้านป้าล้วน",
            "caption"=> "upload/shop/Shop-006.jpeg",
            "content"=> "",
            "link"=> "shop/shopsdetail/1007",
            "update"=> date("m-d-Y"),
            "point"=>"3.5",
            "ratting"=>"66",
            "review"=>"49",
            "type"=>"อาหารทะเล, อาหารไทย",
        ));
        
        array_push($data, array(
            "id"=>"1008",
            "title"=> "โกโด่ง",
            "caption"=> "upload/shop/Shop-007.jpeg",
            "content"=> "",
            "link"=> "shop/shopsdetail/1008",
            "update"=> date("m-d-Y"),
            "point"=>"3.5",
            "ratting"=>"66",
            "review"=>"49",
            "type"=>"อาหารทะเล, อาหารไทย",
        ));
        array_push($data, array(
            "id"=>"1009",
            "title"=> "ครัวสิชล เมืองนคร",
            "caption"=> "foods/Khrawsichon.jpg",
            "content"=> "",
            "link"=> "shop/shopsdetail/1009",
            "update"=> date("m-d-Y"),
            "point"=>"3.5",
            "ratting"=>"66",
            "review"=>"49",
            "type"=>"อาหารทะเล, อาหารไทย",
        ));
         
        array_push($data, array(
            "id"=>"10010",
            "title"=> "ริมเลซีฟู้ด",
            "caption"=> "upload/shop/Shop-008.jpeg",
            "content"=> "",
            "link"=> "shop/shopsdetail/1010",
            "update"=> date("m-d-Y"),
            "point"=>"3.5",
            "ratting"=>"66",
            "review"=>"49",
            "type"=>"อาหารทะเล, อาหารไทย",
        ));
        
        array_push($data, array(
            "id"=>"1011",
            "title"=> "ท่าศาลาซีฟู้ด",
            "caption"=> "upload/shop/Shop-010.jpeg",
            "content"=> "",
            "link"=> "shop/shopsdetail/1011",
            "update"=> date("m-d-Y"),
            "point"=>"3.5",
            "ratting"=>"66",
            "review"=>"49",
            "type"=>"อาหารทะเล, อาหารไทย",
        ));
        array_push($data, array(
            "id"=>"1012",
            "title"=> "สิชลซีฟู้ด",
            "caption"=> "foods/sichon-seafood.jpg",
            "content"=> "",
            "link"=> "shop/shopsdetail/1012",
            "update"=> date("m-d-Y"),
            "point"=>"3.72",
            "ratting"=>"66",
            "review"=>"49",
            "type"=>"อาหารทะเล, อาหารไทย",
        ));

        return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

}
