<?php

class superAdmin extends Controller {

    function __construct() {
        parent::__construct();

        if (!isset($_COOKIE['user_status']) && $_COOKIE['user_status'] != 'superAdmin') {
            header('location:' . baseurl . '/ONNEFE/Index');
        }
    }

    function Index($id = '') {
        $rs = $this->db->query("SELECT category_id,category_name from category WHERE category_id=any(SELECT category_id from user_interest where login_id='" .$id . "' and isActive=1)");
        while ($res = mysql_fetch_assoc($rs)) {
            $response[] = $res;
            // $news[]=$this->db->query("SELECT news_heading,news_content from news WHERE category_id=$res['category_id']");
        }
        $news = $this->db->query("SELECT n.news_heading,n.news_content from news n "
                . "INNER JOIN user_interest ui ON n.category_id=ui.category_id WHERE ui.login_id='" . $id . "'");
        while ($res1 = mysql_fetch_assoc($news)) {
            $newsResonse[] = $res1;
        }
        $this->load->view('Header', ['title' => 'Admin', 'user' => $this->session->getSessionVar('id'), 'interest' => $response]);
        $this->load->view('Main', ['status' => $this->session->getSessionVar('user'), 'id' => $id, 'news' => json_encode($newsResonse)]);
        // $this->news = $this->load->model('news');
        $this->load->view('footer');
    }

    function Profile($user) {
        $rs = $this->db->query("SELECT category_id,category_name from category WHERE category_id=any(SELECT category_id from user_interest where login_id='" . $user . "')");
        while ($res = mysql_fetch_assoc($rs)) {
            $response[] = $res;
        }
        $name = $this->db->selectFieldWhere('user_info', 'user_first_name', "login_id='$user'")
                . ' ' . $this->db->selectFieldWhere('user_info', 'user_mid_name', "login_id='$user'")
                . ' ' . $this->db->selectFieldWhere('user_info', 'user_last_name', "login_id='$user'") . ' Profile';

        $res1 = $this->db->query("SELECT ui.*,ua.country,ua.state,ua.city,ua.local_address from user_info ui INNER JOIN  login_info li on ui.login_id=li.login_id inner JOIN user_address ua on ui.login_id=ua.login_id where ui.login_id='$user'");
        while ($res = mysql_fetch_assoc($res1)) {
            $resp[] = $res;
        }
        $this->load->view('header', ['title' => $name, 'user' => $this->session->getSessionVar('id'), 'interest' => $response]);
        $this->load->view('Profile', ['profile' => json_encode($resp)]);
        $this->load->view('footer');
    }
    
    function userControl(){
        $res1 = $this->db->query("SELECT "
                . "ui.user_first_name,ui.user_mid_name,"
                . "ui.user_last_name,ll.login_id,us.u_id "
                . "from login_info ll "
                . "INNER JOIN user_type us "
                . "on ll.u_id=us.u_id "
                . "INNER JOIN  user_info ui "
                . "on ui.login_id=ll.login_id"
                . " and us.u_type<>'superAdmin' order by ll.signup_time ASC");
        while ($res = mysql_fetch_assoc($res1)) {
            $resp[] = $res;
        }
        $this->load->view('header', ['title' => 'User Control', 'user' => $this->session->getSessionVar('id')]);
        $this->load->view('UserAdmin', ['status' => $this->session->getSessionVar('user'), 'id' => $this->session->getSessionVar('id'), 'users' => json_encode($resp)]);
        $this->load->view('footer');
    }

     function userPODE() {
        $usertype = $this->db->selectFieldWhere('login_info', 'u_id', "login_id='" . $_GET['users_id'] . "'");
        echo '$usertype';
        if ($usertype == 1)
            $updateTo = 0;
        else
            $updateTo = 1;
        if ($this->db->query("update login_info set u_id='$updateTo' where login_id='" . $_GET['users_id'] . "'")) {
            echo True;
        } else {
            echo False;
        }
    }

}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

