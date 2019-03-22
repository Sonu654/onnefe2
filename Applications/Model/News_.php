<?php

class News_ extends db {

    private $news_id;
    private $category_id;
    private $nat_int;
    private $news_heading;
    private $time;
    private $news_content;
    private $ack_id;
    private $isActive;

    function __construct() {
        parent::__construct();
    }

    function get($id) {
        $this->news_id = $id;
        $this->category_id = $this->selectFieldWhere('News', 'category_id', "news_id='$id'");
        $this->nat_int = $this->selectFieldWhere('News', 'nat_int', "news_id='$id'");
        $this->news_heading = $this->selectFieldWhere('News', 'news_heading', "news_id='$id'");
        $this->time = $this->selectFieldWhere('News', 'time', "news_id='$id'");
        $this->news_content = $this->selectFieldWhere('News', 'news_content', "news_id='$id'");
        $this->ack_id = $this->selectFieldWhere('News', 'ack_id', "news_id='$id'");
        $this->isActive = $this->selectFieldWhere('News', 'isActive', "news_id='$id'");
      
    }
    
    function put() {
        $data['news_id']= $this->news_id;
        $data['category_id']= $this->category_id;
        $data['nat_int']= $this->nat_int;
        $data['news_heading']=$this->news_heading;
        $data['time']= $this->time;
        $data['news_content']= $this->news_content;
        $data['ack_id']=$this->ack_id;
        $data['isAcrive']=$this->isActive;
        return $data;
    }

}
