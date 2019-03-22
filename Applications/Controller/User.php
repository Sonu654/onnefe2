<?php

class User extends Controller {

    function __construct() {
        parent::__construct(); 
         if(!isset($_COOKIE['user_status']) && $_COOKIE['user_status']!='User'){
            header('location:'.baseurl.'/ONNEFE/Index');
        }
    }

    function Index($id){
        
        $rs = $this->db->query("SELECT category_id,category_name from category WHERE category_id=any(SELECT category_id from user_interest where login_id='" .$id . "' and isActive=1)");
        while ($res = mysql_fetch_assoc($rs)) {
            $response[] = $res;
        }
        $news=$this->db->query("SELECT n.news_heading,n.news_content from news n "
                . "INNER JOIN user_interest ui ON n.category_id=ui.category_id WHERE ui.login_id='" . $id . "'");
        while($res1=  mysql_fetch_assoc($news)){
            $newsResonse[]=$res1;
        }
        $name=$this->db->selectFieldWhere('user_info','user_first_name',"login_id='$id'")
              .' '.$this->db->selectFieldWhere('user_info','user_mid_name',"login_id='$id'")
              .' '.$this->db->selectFieldWhere('user_info','user_last_name',"login_id='$id'");
        
        $this->load->view('header', ['title' =>$name,'user' => $this->session->getSessionVar('id'),'interest' => $response]);
        $this->load->view('Main',['status'=>  $this->session->getSessionVar('user'),'id'=>$id,'news'=> json_encode($newsResonse)]);
        $this->load->view('footer');
    }

   
    
    function Profile($user){
       
    }

}
