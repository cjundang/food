<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foodapi extends CI_Controller {
    private $data;

    public function __construct(){
        parent::__construct();
        $this->data = array(
            array(
                "title"=> "แกงส้มชะอมกุ้ง",
                "caption"=> "http://localhost/assets/main_page/food/1.png",
                "link"=> "1",
                "read"=> "150",
                "like"=> "50",
                "category" => 1,
                "update"=> date("m-d-Y"),
                "content" => "แกงส้ม หรือแกงเหลืองเป็นอาหารยอดนิยมในพื้นบ้านทางภาคใต้คำว่า 'ส้ม' ในภาษาใต้แปลว่า 'เปรี้ยว ' เพราะฉะนั้นแกงส้มจึงมีความหมายว่า แกงที่มีรสเปรี้ยว เพราะใช้ขมิ้นผสมลงไปแกง แกงจึงเหลืองและยังมีคุณสมบัติช่วยลดกลิ่นคาวของแกงและรวมทั้งมีคุณสมบัติ ทางด้านโภชนาการสารอาหารแคลเซียมอีกด้วย ส่วนประการที่สำคัญ เนื้อสัตว์ นิยมใช้ปลาน้ำจืด - น้ำเค็ม เช่น ปลาแขยง , ปลาดุก , ปลาหมอ , ปลากดน้ำกล่อย ปลากระบอกเป็นต้น หรือเนื้อปลาแห่งที่ได้มาจากการย่าง เช่น เนื้อปลาย่าง , กุ้งยาง รวมถึงเนื้ออื่น ๆ เช่น เนื้อวัว , ไก่ ,นก ส่วนใหญ่จะไม่ใช้ในแกงส้ม ผักที่ใช้ เช่นมะนาว , มะม่วง , มะปริง ,ละมุด ,ตะลิงปิง อาจใส่น้ำส้ม ประกอบด้วย ได้จากตาลโตนด และการหมักผสมกับหยวกกล้วยการใช้ผักที่นิยมไว้ คือ หยวกกล้วย แตงส้ม แตงไทย เปลือกแตงโม หรือมะพร้าว ผักกาดดอก หน่อไม้ดอกผักเขียว ดอกแค ผักกระเฉด แกงส้ม มักใส่เนื้อแดงบดให้ละเอียดเข้ากันจนดำเดือดจึงใส่เนื้อสัตว์ และผักต่าง ๆ จะไม่ในตอนต้มจะนิยม ไม่ใส่ผัก 2 ชนิดในหม้อ กันเพราะทำให้เสียรสชาติไปได้                 ",
                "ingredient" => array(
                    array(
                        "name" => "กุ้ง",
                        "portion" => "5 ขีด",
                        "medical" => ""
                    ),
                    array(
                        "name" => "ชะอม",
                        "portion" => "1 กำ",
                        "medical" => "ชะอมมีวิตามินเอสูง ช่วยบำรุงสายตา มีสารต้านอนุมูลอิสระสูง ช่วยลดความเสี่ยงในการเป็นโรคมะเร็ง ชะอมมีกากใยอาหารสูง ช่วยเพิ่มประสิทธิภาพในการขับถ่าย ยอดชะอม ช่วยลดความร้อนในร่างกายได้ จึงเหมาะกับอุณหภูมิร้อนๆ ในบ้านเรา รากชะอม สามารถนำมาฝนกิน ช่วยแก้อาการท้องอืด ท้องเฟ้อ และช่วยขับลมในท้องได้"
                    ),
                    array(
                        "name" => "พริกแกงปักษ์ใต้",
                        "portion" => "1-2 ช้อนโต๊ะ",
                        "medical" => ""
                    ),
                    array(
                        "name" => "น้ำมะขามเปียก",
                        "portion" => "5 ขีด",
                        "medical" => ""
                    )
                )
            ),
            array(
                "title"=> "กาแฟ",
                "caption"=> "http://localhost/assets/main_page/food/2.png",
                "link"=> "1",
                "read"=> "10",
                "like"=> "2",
                "category" => 1,
                "update"=> date("m-d-Y")
            ),
            array(
                "title"=> "น้ำมะนาวโซดา",
                "caption"=> "http://localhost/assets/main_page/food/3.png",
                "link"=> "1",
                "read"=> "50",
                "like"=> "5",
                "category" => 1,
                "update"=> date("m-d-Y")
            ),
            array(
                "title"=> "เค้ก",
                "caption"=> "http://localhost/assets/main_page/food/4.png",
                "link"=> "1",
                "read"=> "298",
                "like"=> "54",
                "category" => 1,
                "update"=> date("m-d-Y")
            ),
            array(
                "title"=> "สเต็กเนื้อ",
                "caption"=> "http://localhost/assets/main_page/food/5.png",
                "link"=> "1",
                "read"=> "65",
                "like"=> "3",
                "category" => 1,
                "update"=> date("m-d-Y")
            ),
            array(
                "title"=> "สเต็กหมู",
                "caption"=> "http://localhost/assets/main_page/food/6.png",
                "link"=> "1",
                "read"=> "150",
                "like"=> "50",
                "category" => 1,
                "update"=> date("m-d-Y")
            )
        );

    }
    public function getAll()
	{
		return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($this->data));
	}    

    public function get($id)
    {
        $info = array(
            array(
                "heading" => "แกงส้มชะอมกุ้ง",
                "content" => " เมนูแกงส้มชะอมกุ้ง อาหารไทยทั่วไปใครก็ทำได้ แค่จับแกงส้มมาเข้าคู่กับไข่เจียวชะอมแล้วใส่กุ้งสด แต่ถ้าอยากทำให้คนพิเศษทานต้องไม่ธรรมดา เพิ่มส่วนผสมทีเด็ดด้วยเนื้อปลาทูน่าในน้ำพริกแกง เชื่อเถอะว่า ใคร ๆ ก็ต้องชอบใจและอิ่มพุงกางแน่นอน",
                "caption"=> "http://localhost/assets/main_page/food/1.png",
                "ingredient" => array(
                    array(
                        "name" => "กุ้ง",
                        "portion" => 5,
                        "unit" => "ขีด",
                        "medical" => "",

                    ),
                    array(
                        "name" => "ชะอม",
                        "portion" => 1,
                        "unit" => "กำ",
                        "medical" => "ชะอมมีวิตามินเอสูง ช่วยบำรุงสายตา, มีสารต้านอนุมูลอิสระสูง ช่วยลดความเสี่ยงในการเป็นโรคมะเร็ง, ชะอมมีกากใยอาหารสูง ช่วยเพิ่มประสิทธิภาพในการขับถ่าย, ยอดชะอม ช่วยลดความร้อนในร่างกายได้ จึงเหมาะกับอุณหภูมิร้อนๆ ในบ้านเรา, รากชะอม สามารถนำมาฝนกิน ช่วยแก้อาการท้องอืด ท้องเฟ้อ และช่วยขับลมในท้องได้",
                    ),
                    array(
                        "name" => "พริกแกงส้ม",
                        "portion" => "2-3",
                        "unit" => "ช้อน",
                        "medical" => "",
                    ),
                    array(
                        "name" => "ไข่ไก่",
                        "portion" => 4,
                        "unit" => "ฟอง",
                        "medical" => "",
                    ),
                    array(
                        "name" => "น้ำตาลปีบ",
                        "portion" => "1-2",
                        "unit" => "ช้อน",
                        "medical" => "",
                    ),
                    array(
                        "name" => "น้ำมัน",
                        "portion" => "1",
                        "unit" => "ถ้วย",
                        "medical" => "",
                    ),
                ),
                "tools" => array(
                    array(
                        "name" => "จาน",
                        "content" => "",
                        "model3d" => "Dish"
                    ),
                    array(
                        "name" => "กาน้ำ",
                        "content" => "",
                        "model3d" => "Kanam"
                    ),                    
                )
            ),
        );

        return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($info));
    }

    
}
