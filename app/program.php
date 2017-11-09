<?php
/**
 * Created by PhpStorm.
 * User: xuezhou
 * Date: 10/24/17
 * Time: 10:59 PM
 */

namespace app;


class program {
    private $program_title;
    private $program_date;
    private $program_location;
    private $program_duration;
    private $program_imgURL;
    private $program_img_lg;
    private $program_img_vertical;

    function __construct($program_title, $program_date, $program_location, $program_duration,$program_imgURL,$program_img_lg,$program_img_vertical, $url) {
        $this->program_title = $program_title;
        $this->program_date = $program_date;
        $this->program_location = $program_location;
        $this->program_duration =$program_duration;
        $this->program_imgURL = $program_imgURL; //small window
        $this->program_img_lg = $program_img_lg; //large window
        $this->program_img_vertical = $program_img_vertical; //vertical slider
        $this->url = $url; //used for sharing
    }

    function get_program_title(){
        return $this->program_title;
    }

    function get_program_date(){
        return $this->program_date;
    }

    function get_program_location(){
        return $this->program_location;
    }

    function get_program_duration(){
        return $this->program_duration;
    }

    //small window
    function get_program_imgURL(){
        return $this->program_imgURL;
    }

    //slider image
    function get_program_sliderURL(){
        return $this->program_img_lg;
    }

    //vertical slider
    function get_program_verticalURL(){
        return $this->program_img_vertical;
    }

    function get_url(){
        return $this->url;
    }



}


$program_g20 = new \app\program('全球青少年领袖模拟G20峰会','2018年2月','美国波士顿','11天','img/cover-G20-sm.jpg','img/SLIDER-G20.jpg','','https://knovva.com/g20');
$program_si = new \app\program('跨界Cross+','2017年12月','线上课程','每期6周','img/cover-SI-sm.jpg','img/SLIDER-SI.jpg','','https://knovva.com/social-innovation-leadership');
$program_redicorn = new \app\program('读角兽英语文学素养提高课程','2017年12月','线上课程','每期6周','img/cover-RD-sm.jpg','img/SLIDER-READICORN.jpg','img/vertical-RD.png
','https://knovva.com/readicorn');



