<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Foodapi extends CI_Controller {
    private $data;

    public function __construct(){
        parent::__construct();
        $this->data = array(
            "pu" => array(
                "link" => 1,
                "title" => "แกงปูใบชะพลู",
                "content" => "",
                "update" => date('Y-m-d'),
                "like" => 0,
                "read" => 0,
                "models" => array(
                    "name" => "pu",
                    "position" => "0 0 50",
                ),
                "caption"=> "http://localhost/assets/main_page/food/1.jpg",
                "ingredient" => array(
                    array(
                        "name" => "เนื้อปู",
                        "portion" => "",
                        "unit" => "",
                        "medical" => "-	รักษาโรคกล้ามเนื้อฝ่อหรือลีบ ในปูทะเลจะมีสารอาหารสำคัญที่เรียกว่า ‘ไกลซีน’ โดยสารชนิดนี้จะทำหน้าที่สร้าง ‘ครีเอทีนีน’ ซึ่งเป็นสารประกอบสำคัญในการทำงานของระบบกล้ามเนื้อ ทำให้อาการกล้ามเนื้อตีบหรือฝ่อดีขึ้นได้",
                    ),
                    array(
                        "name" => "ใบชะพลู",
                        "portion" => "",
                        "unit" => "",
                            "medical" => "สามารถช่วยเจริญอาหาร, ช่วยขับเสมหะ ทำเสมหะให้งวดทำให้เลือดลมซ่าน, แก้ธาตุพิการ, รักษาโรคเบาหวาน, ช่วยทำให้ระบบหมุนเวียนโลหิตดี , แก้ศอเสมหะ ทำให้เสมหะแห้ง, ช่วยย่อยอาหาร, ช่วยขับลมในลำไส้",
                    ),
                    array(
                        "name" => "น้ำพริกแกง",
                        "portion" => "",
                        "unit" => "",
                        "medical" => "",
                    ),
                    array(
                        "name" => "กะทิ",
                        "portion" => "",
                        "unit" => "",
                        "medical" => "กะทิย่อยง่าย ทำให้ร่างกายสามารถนำไปใช้ประโยชน์ได้อย่างรวดเร็ว โดยร่างกายจะเผาพลาญกะทิให้กลายเป็นพลังงานในตับ เพื่อให้ร่างกายสามารถนำมาใช้ประโยชน์ได้อย่างทันที",
                    ),
                    array(
                        "name" => "น้ำปลา",
                        "portion" => "",
                        "unit" => "",
                        "medical" => "",
                    ),
                    array(
                        "name" => "น้ำตาล",
                        "portion" => "",
                        "unit" => "",
                        "medical" => "",
                    ),
                     
                ) 
            ),
            "kangsom" => array(
                "link" => 2,
                "title" => "แกงส้ม",
                "content" => "",
                "update" => date('Y-m-d'),
                "like" => 0,
                "read" => 0,
                "models" => array(
                    "name" => "kangsom",
                    "position" => "0 0 70"
                ),
                "caption"=> "http://localhost/assets/main_page/food/2.jpg",
                "ingredient" => array(
                    array(
                        "name" => "ปลากระพง",
                        "portion" => "",
                        "unit" => "",
                        "medical" => "",
                    ),
                    array(
                        "name" => "ยอดมะพร้าว",
                        "portion" => "",
                        "unit" => "",
                            "medical" => "",
                    ),
                    array(
                        "name" => "เครื่องแกงปักษ์ใต้",
                        "portion" => "",
                        "unit" => "",
                        "medical" => "",
                    ),
                    array(
                        "name" => "กะปิ",
                        "portion" => "",
                        "unit" => "",
                        "medical" => "กะปิช่วยบำรุงกระดูกและฟัน กะปิมีแคลเซียมสูง 1,565 มิลลิกรัม และมากกว่านมวัวหลายเท่า ช่วยป้องกันโรคกระดูกพรุน ฟันไม่ผุ
                        กะปิช่วยป้องกันโรคโลหิตจาง อุดมด้วยวิตามินบี 12 ซึ่งมีประโยชน์ต่อระบบเลือด
                        กะปิช่วยบำรุงสมอง ช่วยให้การทำงานดี กะปิเป็นแหล่งของไขมันดีอย่างโอเมก้า 3 ชนิดเดียวกับปลาน้ำลึกที่ดูดซึมง่าย
                        กะปิช่วยเสริมสร้างภูมิคุ้มกัน ทำให้ร่างกายแข็งแรง เพราะมีจุลินทรีย์ชนิดดีหลายชนิด
                        กะปิช่วยบำรุงสายตา ลดอาการเมื่อยล้าของดวงตาจากการใช้งานหนัก
                        กะปิช่วยทำให้อารมณ์แจ่มใส ป้องกันอาการซึมเศร้า เพราะวิตามินดีในกะปิที่ยังช่วยบำรุงกระดูกด้วย
                        กะปิช่วยให้การไหลเวียนของเลือดดี แก้ปัญหาการอุดตันของลิ่มเลือด ป้องกันโรคหัวใจ
                        ",
                    ),
                    
                ) 
            ), 
            "khanomjeen_namya" => array(
                "link" => 3,
                "title" => "ขนมจีนน้ายา",
                "content" => "",
                "update" => date('Y-m-d'),
                "like" => 0,
                "read" => 0,
                "models" => array(
                    "name" => "khanomjeen_namya",
                    "position" => "0 0 65"
                ),
                "caption"=> "http://localhost/assets/main_page/food/3.jpg",
                "ingredient" => array(
                    array(
                        "name" => "ใบมะกรูด",
                        "portion" => "",
                        "unit" => "",
                        "medical" => "",
                    ),
                    array(
                        "name" => "ตะไคร้ ",
                        "portion" => "",
                        "unit" => "",
                            "medical" => "ช่วยขับลม
                            ลดอาการท้องอืดท้องเฟ้อแน่นจุกเสียด
                            แก้อาการเกร็ง
                            ช่วยขับเหงื่อ
                            แก้โรคทางเดินปัสสาวะ แก้อาการขัดเบา
                            แก้นิ่ว แก้ปัสสาวะเป็นเลือด
                            แก้เบื่ออาหาร ทำให้เจริญอาหาร
                            ช่วยย่อยอาหาร
                            ลดความดันโลหิต
                            แก้กระษัย
                            เป็นยารักษาเกลื้อน
                            แก้ไข้หวัด
                            ขับประจำเดือน ขับระดูขาว
                            ใช้ภายนอกทาแก้อาการปวดบวมตามข้อ
                            ช่วยขับเหงื่อ แก้กระหายน้ำ
                            ช่วยป้องกันโรคมะเร็งลำไส้ใหญ่
                            บรรเทาอาการหวัด อาการไอ มีเสมหะ
                            ช่วยบรรเทาอาการวิงเวียนศีรษะ
                            ช่วยในการรักษาอหิวาตกโรค
                        ",
                    ),
                    array(
                        "name" => "กะทิ",
                        "portion" => "",
                        "unit" => "",
                        "medical" => "กะทิย่อยง่าย ทำให้ร่างกายสามารถนำไปใช้ประโยชน์ได้อย่างรวดเร็ว โดยร่างกายจะเผาพลาญกะทิให้กลายเป็นพลังงานในตับ เพื่อให้ร่างกายสามารถนำมาใช้ประโยชน์ได้อย่างทันที
                        ในกะทิมีกรดลอริค ซึ่งเป็นกรดที่สามารถช่วยต่อต้านเชื้อไวรัส และป้องกันเชื้อแบคทีเรีย เชื้อจุลรินทีย์ และต่อต้านเชื้อราภายในร่างกาย จึงจัดได้ว่ากะทิสามารถสร้างภูมิกันเชื้อโรคต่างๆ ภายในร่างกายได้เป็นย่างดี
                        ช่วยลดการสะสมของไขมัน เพราะเมื่อเราบริโภคกะทิเข้าไปแล้วนั้น กะทิจะมีส่วนในการช่วยดึงไขมันตามส่วนต่างๆ ของร่างกายที่ถูกสะสมไว้ไปแปรเปลี่ยนเป็นพลังงานได้อีกด้วย จึงสามารถช่วยลดการสะสมของไขมันได้เป็นอย่างดี
                        กะทิมีฤทธิ์ในการช่วยต้านอนุมูลอิสระ ป้องกันความเสี่ยงในการเกิดโรคมะเร็ง
                        ",
                    ),
                    
                    
                ) 
            ),             
            "kuankhao" => array(
                "link" => 4,
                "title" => "ขนมกวนขาว",
                "content" => "ขนมกวนขาว เป็นของหวานพื้นบ้านประจำ จังหวัดนครศรีธรรมราช นับเป็นของหวานยอดนิยมตั้งแต่อดีตจนถึงปัจจุบัน มีรสชาติไม่หวานจัด มีลักษณะมันเหมือนก้อนแป้งนุ่มคล้ายวุ้น แต่หนักไปทางแป้งมากกว่า เจือด้วยรสเค็มจากกะทิ กินง่าย และมีกลิ่นหอมของถั่วทองคั่วสุก เรียกได้ว่าเป็นของดีเมืองนครฯ ดังนั้นใครที่ไปเยือนจังหวัดนครศรีธรรมราชจึงไม่ควรพลาดเด็ดขาด",
                "update" => date('Y-m-d'),
                "like" => 0,
                "read" => 0,
                "models" => array(
                    "name" => "kuankhao",
                    "position" => "0 0 30"
                ),
                "caption"=> "http://localhost/assets/main_page/food/4.jpg",
                "ingredient" => array(
                    array(
                        "name" => "แป้งข้าวเจ้า",
                        "portion" => "",
                        "unit" => "",
                        "medical" => "",
                    ),
                    array(
                        "name" => "กะทิ",
                        "portion" => "",
                        "unit" => "",
                        "medical" => "กะทิย่อยง่าย ทำให้ร่างกายสามารถนำไปใช้ประโยชน์ได้อย่างรวดเร็ว โดยร่างกายจะเผาพลาญกะทิให้กลายเป็นพลังงานในตับ เพื่อให้ร่างกายสามารถนำมาใช้ประโยชน์ได้อย่างทันที
                        ในกะทิมีกรดลอริค ซึ่งเป็นกรดที่สามารถช่วยต่อต้านเชื้อไวรัส และป้องกันเชื้อแบคทีเรีย เชื้อจุลรินทีย์ และต่อต้านเชื้อราภายในร่างกาย จึงจัดได้ว่ากะทิสามารถสร้างภูมิกันเชื้อโรคต่างๆ ภายในร่างกายได้เป็นย่างดี
                        ช่วยลดการสะสมของไขมัน เพราะเมื่อเราบริโภคกะทิเข้าไปแล้วนั้น กะทิจะมีส่วนในการช่วยดึงไขมันตามส่วนต่างๆ ของร่างกายที่ถูกสะสมไว้ไปแปรเปลี่ยนเป็นพลังงานได้อีกด้วย จึงสามารถช่วยลดการสะสมของไขมันได้เป็นอย่างดี
                        กะทิมีฤทธิ์ในการช่วยต้านอนุมูลอิสระ ป้องกันความเสี่ยงในการเกิดโรคมะเร็ง
                        ",
                    ),
                    array(
                        "name" => "น้ำปูนใส",
                        "portion" => "",
                        "unit" => "",
                        "medical" => "",
                    ),
                    array(
                        "name" => "น้ำตาลทราย",
                        "portion" => "",
                        "unit" => "",
                        "medical" => "",
                    ),
                    array(
                        "name" => "เกลือ",
                        "portion" => "",
                        "unit" => "",
                        "medical" => "",
                    ),
                    array(
                        "name" => "ถั่วเขียว",
                        "portion" => "",
                        "unit" => "",
                        "medical" => "",
                    ),
                    
                ) 
            ),                      
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

        $info = array($this->data[$id]);

        return $this->output
            ->set_status_header(200)
            ->set_output(json_encode($info));
    }

    
}
