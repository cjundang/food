<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('Data.php');

class Tools extends CI_Controller {
	public function index()
	{
        $data = array(
            "menu" => Data::$menu
        );
		$this->load->view('tools/index', $data);
	}

	public function getall(){
		$data = array();
        array_push($data, array(
			'id' => 1, "tools"=>"Bowl",  "caption" => "ถ้วย",
			"content" => ""
        ));
        array_push($data, array(
			'id' => 2, "tools"=>"Dipper",  "caption" => "กระบวย",
			"content" => ""
        ));
		array_push($data, array(
			'id' => 3, "tools"=>"Dish",  "caption" => "จาน",
			"content" => ""
        ));
		array_push($data, array(
			'id' => 4, "tools"=>"GreenPot",  "caption" => "หม้อเขียว",
			"content" => ""
        ));
		array_push($data, array(
			'id' => 5, "tools"=>"Kanam",  "caption" => "กาน้ำ",
			"content" => ""
        ));				
		array_push($data, array(
			'id' => 6, "tools"=>"MaiPai",  "caption" => "ไม้พาย",
			"content" => ""
        ));        
		array_push($data, array(
			'id' => 7, "tools"=>"Pan",  "caption" => "กระทะ",
			"content" => ""
        ));
		array_push($data, array(
			'id' => 8, "tools"=>"Pinto",  "caption" => "ปิ่นโต",
			"content" => ""
        ));
		array_push($data, array(
			'id' => 9, "tools"=>"Pot",  "caption" => "หม้อ",
			"content" => ""
        ));
		array_push($data, array(
			'id' => 10, "tools"=>"RicePounder",  "caption" => "ครกตำข้าว",
			"content" => ""
        ));			
		array_push($data, array(
			'id' => 11, "tools"=>"StoneMill",  "caption" => "โม่หิน",
			"content" => "เครื่องโม่แป้ง หรือ โม่หิน เครื่องบดชนิดหนึ่งทำด้วยหิน ในสมัยก่อนโม่หินที่ใช้ตามบ้านมักมีขนาดเล็ก ประกอบด้วยตัวครกและฝาครก ตัวครกเป็นทรงกลมฐานเรียบมีแอ่งหรือคลองรอบๆ ให้     น้ำแป้งไหลออกทางปากครกได้ ส่วนกลางเป็นหน้าตัดแซะร่องลึก เรียกว่า ฟันครก นิยมทำจากหินแกรนิตที่มีความแกร่งและน้ำหนักมากโม่หินที่ดีร่องฟันต้องลึกเพียงพอและที่สำคัญแผ่นดินด้านบนและล่างต้องทับกันสนิทจึงจะทำให้เนื้อแป้งที่ละเอียด สมัยก่อนมาจาก 3 วิธีหลัก ได้แก่ การยีและด้วยมือ ตำด้วยครก และโม่ด้วยอุปกรณ์ที่เรียกว่า “โม่หิน”  หรือครกบด การโม่แป้งสดนิยมมากในอาหารว่างและขนมไทย 
			ปัจจุบัน เนื่องจากมีแป้งสำเร็จรูปขายตามท้องตลาด ซึ่งหาซื้อได้ง่าย ความจำเป็นในการใช้โม่แป้ง      จึงลดลงไป โม่แป้งจึงค่อยๆ หายไปจากครัวไทยในปัจจุบัน ซึ่งนิยมหันมาใช้เครื่องโม่แป้งไฟฟ้าทดแทน ซึ่งวัสดุผลิตจากเหล็กโครงสร้างหนา และแข็งแรง ส่วนตัวโม่ทำจากเหล็กชุบ หรือผลิตจากสแตนเลส สามารถใช้บดทั้งของเปียกและของแห้ง ใช้โม่งา, โม่น้ำถั่วเหลือง, โม่ข้าวทำขนมจีน, โม่ข้าวทำขนมครก, โม่ข้าวคั่ว ภายในมี  หินบด สามารถปรับความหยาบละเอียดได้  ถ้าโม่เปียกน้ำกับกากจะผสมกัน (ถั่วเหลือง,ข้าวกล้องผ่านการกรองอีกครั้งหนึ่ง) แข็งแรงทนทานต่อการใช้งานหนัก
			"
        ));	
		array_push($data, array(
			'id' => 12, "tools"=>"Thanan",  "caption" => "ทนาน",
			"content" => ""
        ));	
		array_push($data, array(
			'id' => 12, "tools"=>"Thappi",  "caption" => "ทัพพี",
			"content" => ""
        ));	
		array_push($data, array(
			'id' => 12, "tools"=>"Tray",  "caption" => "ถาด",
			"content" => ""
        ));	
		array_push($data, array(
			'id' => 12, "tools"=>"TreshingBasket",  "caption" => "กระด้ง",
			"content" => ""
        ));					
		return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($data));
    }

	
}
