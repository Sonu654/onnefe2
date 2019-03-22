<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category
 *
 * @author sanwal
 */
class Category extends db {

    private $category_id;
    private $category_name;
    private $isActive;

    function __construct() {
        parent::__construct();
    }

    function get($id) {
        $this->category_id = $id;
        $this->category_name = $this->selectFieldWhere('category', 'category_name', "category_id='$id'");
        $this->isActive = $this->selectFieldWhere('category', 'isActive', "category_id='$id'");
    }

    function put() {
        echo $this->category_id;
        echo $this->category_name;
        echo $this->isActive;
    }

}
