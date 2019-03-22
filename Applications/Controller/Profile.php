<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Profile
 *
 * @author sanwal
 */
class Profile extends Controller {

    function __construct() {
        parent::__construct();
        if (!isset($_COOKIE['user_status'])) {
            header('location:' . baseurl . '/ONNEFE/Index');
        }
    }

    //put your code here
    function Index($user) {
        $rs = $this->db->query("SELECT category_id,category_name from category WHERE category_id=any(SELECT category_id from user_interest where login_id='" . $user . "' and isActive=1)");
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
        $this->load->view('Profile', ['profile' => json_encode($resp), 'status' => $this->session->getSessionVar('user'), 'id' => $user]);
        $this->load->view('footer');
    }

    function Interest($id = '') {
        $qry = "SELECT c.category_id,c.category_name, ui.isActive from category c inner join user_interest ui on c.category_id=ui.category_id where login_id='$id'";
        $rs = $this->db->query($qry);
        while ($res = mysql_fetch_assoc($rs)) {
            $response[] = $res;
        }

        $this->load->view('header', ['title' => 'Interest', 'user' => $this->session->getSessionVar('id')]);
        $this->load->view('Interests', ['status' => $this->session->getSessionVar('user'), 'id' => $id, 'interest' => json_encode($response)]);
        $this->load->view('footer');
    }

    function Update($user) {

        print_r($_POST);
        $this->db->query("update user_info set user_first_name='" . $_POST['ufname'] . "',
        user_mid_name='" . $_POST['umname'] . "',user_last_name='" . $_POST['ulname'] . "',
        user_gender='" . $_POST['gender'] . "',user_contact='" . $_POST['contact'] . "' WHERE login_id='" . $user . "'");

        $this->db->query("update user_address set country='" . $_POST['country'] . "',state='" . $_POST['state'] . "',city='" . $_POST['city'] . "',local_address='" . $_POST['local_add'] . "' WHERE login_id='" . $user . "'");
        $this->Index($user);
    }

    function ChangePass($user) {
        $rs = $this->db->query("SELECT category_id,category_name from category WHERE category_id=any(SELECT category_id from user_interest where login_id='" . $user . "')");
        while ($res = mysql_fetch_assoc($rs)) {
            $response[] = $res;
        }

        $this->load->view('header', ['title' => 'Change Password', 'user' => $this->session->getSessionVar('id'), 'interest' => $response]);
        $this->load->view('ChangePassword', ['user' => $this->session->getSessionVar('id'), 'status' => $this->session->getSessionVar('user'), 'id' => $user,]);
        $this->load->view('footer');
    }

    function UpdatePass() {
        $res = $this->db->SelectFieldWhere('login_info', 'isActive', "login_id='" . $_POST['user'] . "' and login_password='" . md5($_POST['pass']) . "'");
        if ($res == '0')
            echo 'Password not Valid';
    }

    function getUser() {
        $rs = $this->db->selectAll('news');
        echo $rs = json_encode($rs);
    }

    function UserPassUpdate() {
        if ($this->db->query("UPDATE login_info set login_password='" . md5($_POST['pass']) . "' where login_id='" . $_POST['user'] . "'")) {
            echo 'Password Changed Successfully.';
        } else {
            echo 'Password Not Changed.';
        }
    }

    function ActiveBlock($user) {
        // echo $_GET['cat_id'];
        $val = $this->db->selectFieldWhere('user_interest', 'isActive', "login_id='$user' and category_id='" . $_GET['cat_id'] . "'");
        if ($val == 1)
            $up = 0;
        else
            $up = 1;
        if ($this->db->query("update user_interest set isActive='$up' where category_id='" . $_GET['cat_id'] . "' and login_id='$user'")) {
            echo True;
        } else {
            echo False;
        }
    }

    function NewsGroup($user) {
        $ActiveNG = $this->db->selectAllWhere('newsgroup', "isActive='1'");
        $ActiveNG = $ActiveNG[0];
        $qry = "select nc.*, ui.user_first_name,ui.user_mid_name,ui.user_last_name from ng_comment nc inner join newsgroup ng on nc.ng_id=ng.ng_id inner join user_info ui on nc.login_id=ui.login_id where ng.isActive='1' order by ng.i_time DESC";
        $cmtR = $this->db->query($qry);
        while ($row = mysql_fetch_assoc($cmtR)) {
            $cmt[] = $row;
        }
        $name = $this->db->selectFieldWhere('user_info', 'user_first_name', "login_id='$user'")
                . ' ' . $this->db->selectFieldWhere('user_info', 'user_mid_name', "login_id='$user'")
                . ' ' . $this->db->selectFieldWhere('user_info', 'user_last_name', "login_id='$user'");

        $rs = $this->db->query("select i_time from newsgroup where isActive=0 order by ng_id DESC limit 13");
        while ($row = mysql_fetch_assoc($rs)) {
            $recent[] = $row;
        }
        $this->load->view('header', ['title' => 'News Group', 'user' => $this->session->getSessionVar('id')]);
        $this->load->view('newsGroup', ['status' => $this->session->getSessionVar('user'), 'id' => $user, 'activeNG' => $ActiveNG, 'cmt' => @$cmt, 'uName' => $name, 'recent' => $recent]);
        $this->load->view('footer');
    }

    function AddInterest($user) {
        $rs = $this->db->query("select category_id from user_interest where login_id='$user'");
        while ($res = mysql_fetch_assoc($rs)) {
            $cat[] = $res;
        }
        // print_r($cat);
        $rs = $this->db->query("SELECT category_id,category_name from category");
        while ($res = mysql_fetch_assoc($rs)) {
            $res['status'] = '0';
            for ($i = 0; $i < count($cat); $i++) {
                if (in_array($cat[$i]['category_id'], $res)) {
                    $res['status'] = '1';
                    break;
                }
            }
            $category[] = $res;
        }
        $this->load->view('header', ['title' => 'Add New Interest', 'user' => $this->session->getSessionVar('id')]);
        $this->load->view('Add-inst', ['status' => $this->session->getSessionVar('user'), 'id' => $user, 'category' => json_encode($category)]);
        $this->load->view('footer');
    }

    function cmt($user) {
        $cmt = $_GET['cmt'];
        $ng_id = $this->db->selectFieldWhere('newsgroup', 'ng_id', "isActive='1'");
        $qry = "insert into ng_comment set ng_comment.login_id='$user',ng_comment.c_content='$cmt',ng_comment.c_time='" . date('Y-m-d H:m:s') . "',ng_comment.ng_id='$ng_id'";
        $this->db->query($qry);
    }

    function RecentNG() {
        $date = $_GET['date'];
        $rs = $this->db->query("select n.* from newsgroup n where n.i_time like '$date%' and n.isActive='0' order by n.i_time DESC");
        while ($res = mysql_fetch_assoc($rs)) {
            $rs2 = $this->db->query("select n.ng_id,n.c_content,n.c_time,ui.user_first_name,ui.user_mid_name,ui.user_last_name from ng_comment n inner join user_info ui on n.login_id=ui.login_id  where n.ng_id='" . $res['ng_id'] . "' and isActive=1 order by c_time DESC");
            if (mysql_num_rows($rs2) == 0) {
                $res['cmt']='no comment';
            } else {
                $res2='';
                while ($r = mysql_fetch_assoc($rs2)) {
                    $res2[] = $r;
                }
                $res['cmt'] = $res2;
            }
            
                $response[] = $res;
        }
      
        echo json_encode($response);
    }

    function AddInst($user) {
        $rs = $this->db->query("select category_id from user_interest where login_id='$user'");
        while ($res = mysql_fetch_array($rs)) {
            $exist[] = $res['category_id'];
        }
        $flag = 0;
        foreach ($_GET['inst'] as $key => $value) {
            if (!in_array($value, $exist)) {
                /* @var $value type */
                if ($this->db->query("insert into user_interest (login_id,category_id, isActive) values('$user','$value','1') ")) {
                    $flag++;
                }
            }
        }
        if ($flag != 0) {
            echo 'News Interest Updated Successfully..!';
        } else {
            echo "Not able to Update interest this time! if already checked in list then go to <a href='" . baseurl . "/Profile/Interest/" . $user . "'>browse interest </a>";
        }
    }
    
    function user_rating($user){
        //$rate_id= $this->db->selectFieldWhere('user_info','rating_id',"login_id='$user'");
       $qry="select r.rate from user_info u inner join user_rating r on u.rating_id=r.rating_id where login_id='$user'";
        $res=  $this->db->query($qry);
        $rate= mysql_result($res, 0,'rate');
        if($rate==0){
            return TRUE;
        }else{
            return False;
        }
    }
    
    
    function my_rating($user){
        //$rate_id= $this->db->selectFieldWhere('user_info','rating_id',"login_id='$user'");
      echo  $qry="select r.rate from user_info u inner join user_rating r on u.rating_id=r.rating_id where login_id='$user'";
        $res=  $this->db->query($qry);
        echo $rate= mysql_result($res, 0,'rate');
    }
    
    function Rate($user){
        $id=$_GET['id'];
        $qry="update user_info set rating_id='$id' where login_id='$user'";
        $this->db->query($qry);
        echo 'Thank you for Rate us. your response recorded!!';
    }

}
