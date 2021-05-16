<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data  {
    public static $menu = array(
        array(
            "title" => "หน้าหลัก", "icon"=>"house-door",
            "link"=>"home"
        ),
        array(
            "title" => "บทความ", "icon"=>"journal-bookmark",
            "link"=>"article"
        ),
        array(
            "title" => "ร้านอาหาร", "icon"=>"shop",
            "link"=>"shop"
        ),
        array(
            "title" => "แผนที่", "icon"=>"map",
            "link"=>"map"
        ),
        array(
            "title" => "เครื่องครัว", "icon"=>"shop",
            "link"=>"tools"

        ),
        array(
            "title" => "ติดต่อเรา", "icon"=>"person-lines-fill",
            "link"=>"contact"
        )
    );

    public static $decoration = array(

    );
    
}