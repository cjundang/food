<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class UserModel extends CI_Model {
    public function get($id){
        $sql ="";
        if($id=="0"){
            $sql = "SELECT * FROM Users ";
        }else{
            $sql = "SELECT * FROM Users WHERE userID = '$id' ";
        }
        $data = array();
		$data["status"] = "success";
		$data["code"] = "200";
        $data["message"] = "";
        $query = $this->db->query($sql);
        $data["data"] = $query->result_array();
        return $data;
    }

    public function newUser($user_data){
        $data = array();
        if($this->checkdata($user_data)){
            if($this->checkUsernameemail($user_data["username"],$user_data["email"])){
                $sql = "INSERT INTO Users (userID, username, password, email, activeFlag, authorityID) 
                VALUES (NULL,'".$user_data['username']."','".md5($user_data['password'])."','".$user_data['email']."',1,'".$user_data['authority']."')";
                if($query = $this->db->query($sql) > 0){
                    $data["status"] = "success";
                    $data["code"] = "201";
			        $data["message"] ="Data insert successful.";
                }else{
                    $data["status"] = "unsuccess";
			        $data["code"] = "409";
			        $data["message"] ="Cann't insert data.";
                }
            }else{
                echo "Cannot In";
                $data["status"] = "unsuccess";
			    $data["code"] = "409";
			    $data["message"] ="Duplicate username or email.";
            }
        }else{
            echo "No";
            $data["status"] = "unsuccess";
			$data["code"] = "411";
			$data["message"] ="Request Entity can’t be fulfilled. ";
        }
        return $data;
    }

    public function editUser($user_data){
        $data = array();
    }

    public function getByUserName(){
        $sql = "SELECT * FROM Users WHERE userID = '$id' ";
    }

    public function getByEmail(){
        
    }

    public function checkUsernameemail($username,$email){
        $sql = "SELECT * FROM `Users` WHERE username='$username' or email='$email' ";
        $check = true;
        $query = $this->db->query($sql);
        foreach ($query->result_array() as $row){
            $check = false;
        }
        return $check;
    }
    public function checkdata($data){
        $checkList = array("username","password","email","authority");
        $dataList = array();
        $i=0;
        $check = true;
        $message = "";
        foreach($data as $key => $val){
            if(in_array($key,$checkList)){
                $dataList[$i] = $key;
                $i++;
            }
        }
        foreach($checkList as $key => $val){
            if(!in_array($val,$dataList)){
                $check = false;
                $message.=", ".$val;
            }
        }
        return $check;
    }
}