<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserLoginModel extends CI_Model {
    public function checkUserpass($user,$pass){
        $userDB = "";
        $passDB = "";
        $autority = "";
        $email = "";
        $select = 0;
        $pass = md5($pass);
        $sql = "SELECT * FROM Users WHERE username='$user' and password='$pass' and activeFlag='1' ";
        $query = $this->db->query($sql);
        foreach ($query->result_array() as $row){
            $userDB = $row["username"];
            $passDB = $row["password"];
            $autority = $row["authorityID"];
            $email = $row["email"];
            $select = 1;
        }
        if($select && $passDB==$pass){
            $data["status"] = "success";
			$data["code"] = "200";
			$data["message"] ="";
			$data["data"] = array('username'=>$userDB,'autority'=>$autority,'email'=>$email);
            return $data;
        }else{
            $data["status"] = "unsuccess";
			$data["code"] = "401";
			$data["message"] ="The username or password was not correct";
            return $data;
        }

    }

}