<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Articleapi extends CI_Controller {

    public function getAll()
	{
        $data = array();
        array_push($data, array(
            "title"=> "Lorem ipsum dolor sit amet consectetur",
            "caption"=> "http://localhost/assets/main_page/recommend/1.jpg",
            "content"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore",
            "link"=> "1",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "Lorem ipsum dolor sit amet consectetur",
            "caption"=> "http://localhost/assets/main_page/recommend/2.jpg",
            "content"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "Lorem ipsum dolor sit amet consectetur",
            "caption"=> "http://localhost/assets/main_page/recommend/3.jpg",
            "content"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "Lorem ipsum dolor sit amet consectetur",
            "caption"=> "http://localhost/assets/main_page/recommend/4.jpg",
            "content"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "Lorem ipsum dolor sit amet consectetur",
            "caption"=> "http://localhost/assets/main_page/recommend/5.jpg",
            "content"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "Lorem ipsum dolor sit amet consectetur",
            "caption"=> "http://localhost/assets/main_page/recommend/6.jpg",
            "content"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));
        array_push($data, array(
            "title"=> "Lorem ipsum dolor sit amet consectetur",
            "caption"=> "http://localhost/assets/main_page/recommend/7.jpg",
            "content"=> "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ut omnis repudiandae nostrum cumque quod provident laboriosam eligendi error accusamus non dolore",
            "link"=> "#",
            "update"=> date("m-d-Y"),
        ));

		return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($data));
	}    

    public function getArticleDetail($id)
    {
        $data = array(
            "message" => "Chanankorn"
        );
        return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }
}
