<?php

defined('baseurl') OR exit('No direct script access allowed');

class ONNEFE extends Controller {

    function Index() {
        $this->load->view('Header', ['title' => 'ONNEFE 2.0']);
        if (isset($_COOKIE['user_id'])) {
            if (!$this->session->hasSession('id')) {
                $u['id'] = $_COOKIE['user_id'];
                $u['user'] = $_COOKIE['user_status'];
                $u['keep'] = $_COOKIE['keep'];
                $u['time'] = $_COOKIE['time'];
                $this->session->setSession($u);
            }
            header('location:' . baseurl . '/' . $_COOKIE['user_status'] . '/Index/' . $_COOKIE['user_id']);
        }
        $qry = "select n.news_heading, n.news_content, n.time, a.ack_location, c.category_name from news n inner join news_ack a on n.ack_id = a.ack_id inner join category c on n.category_id = c.category_id where n.isActive = 1 LIMIT 25";
        $qry = $this->db->query($qry);
        while ($rs = mysql_fetch_assoc($qry)) {
            $news[] = $rs;
        }
        $news = json_encode($news);
        $this->load->view('Index', ['category' => $this->db->selectFieldsWhere('category', ['category_id,category_name'], 'isActive=1'), 'slider_news' => $news]);
        $this->load->view('footer');
    }

    function Login() {
        $id = $_POST['user'];
        $pwd = md5($_POST['pwd']);
        $keep = empty($_POST['Loggedin']) ? 0 : 1;
        $res = $this->db->selectFieldsWhere('login_info', ['isActive', 'u_id'], "login_id='$id' and login_password='$pwd'");
        if (empty($res)) {
            $error = "user name and password not valid!!";
            header("location:" . baseurl . "/ONNEFE/Index?error=" . $error);
        } else {

            //        print_r($res);
            if ($res[0]['isActive'] == 0) {
                $error = "<h3> Dear ".$this->db->selectFieldWhere('user_info','user_first_name',"login_id='$id'").",<h3><h4> You are temporary blocked by Us.</h4><h6>we will try to resolve issue as soon as possible. please login after some time.!</h6>";
                header("location:" . baseurl . "/ONNEFE/Index?error=" . $error);
            } else {
                $u_id = $res[0]['u_id'];
                $user = $this->db->selectFieldWhere('user_type', 'u_type', "u_id='$u_id'");
                if ($keep) {
                    $expirary = (time() + (365 * 24 * 60 * 60));
                } else {
                    $expirary = time() + 3600;
                }
                $u['PHPSESSID'] = $_COOKIE['PHPSESSID'];
                $u['id'] = $id;
                $u['user'] = $user;
                $u['keep'] = $keep;
                $u['time'] = date("Y-m-d H:i:s", time());
                $qry = "insert into login_log(login_id,login_time,logout_time,user_agent) values('" . $u['id'] . "','" . $u['time'] . "','" . date("Y-m-d H:i:s", $expirary) . "','" . $_SERVER['HTTP_USER_AGENT'] . "')";
                if ($this->db->query($qry)) {
                    setcookie('PHPSESSID', $u['PHPSESSID'], $expirary, '/');
                    setcookie('user_id', $id, $expirary, '/');
                    setcookie('user_status', $user, $expirary, '/');
                    setcookie('keep', $keep, $expirary, '/');
                    setcookie('time', $u['time'], $expirary, '/');
                    $this->session->setSession($u);
                    header("location:" . baseurl . '/' . $user . '/Index/' . $u['id']);
                } else {
                    header('loaction:' . baseurl . '/ONNEFE/Index?error=unable to login try again!!!');
                }
            }
        }
    }

    function Logout() {

        $sess = $this->session->getSession();
        echo 'cookies =>';
        print_r($_COOKIE);
        echo '<br>sessions =>';
        print_r($sess);
        $time = date("Y-m-d H:i:s", time());
        @$qry = "update login_log set logout_time='$time' where (login_id='" . $sess['id'] . "' and login_time='" . $sess['time'] . "')";
        if ($this->db->query($qry)) {
            foreach ($_COOKIE as $key => $value) {
                unset($_COOKIE[$key]);
                setcookie($key, '', time() - 3600, '/');
           //            echo $key.'==>'.$value;
            }
            unset($_COOKIE);
            $this->session->unsetSession($sess);
            $this->session->rmSession();
            //$sess = $this->session->getSession();
           // echo '<br>cookies =>';
           // print_r($_COOKIE);
            //echo '<br>session =>';
            //print_r($sess);
             header('location:'.baseurl.'/ONNEFE/Index?error=Logged out successfully..!');
        }
    }

    function Register() {
        $ufname = $_POST['ufname'];
        $umname = $_POST['umname'];
        $ulname = $_POST['ulname'];
        $email = $_POST['email'];
        $remail = $_POST['remail'];
        $pwd = md5($_POST['pwd']);
        $rpwd = md5($_POST['rpwd']);
        $dob = $_POST['dob'];
        $contact = $_POST['contact'];
        $interests = $_POST['category'];
        //print_r($interests);
        $street = $_POST['street'];
        $city = $_POST['city'];
        $state = $_POST['state'];
        $country = $_POST['country'];
        $uGender = $_POST['gender'];
        $time = time();
        if ($email == $remail && $pwd == $rpwd) {
            if ($this->db->query("insert into login_info (login_id,login_password,isActive,u_id) values('$email','$pwd','1','0')")) {
                $this->db->query("insert into user_info(login_id,user_first_name,user_mid_name,user_last_name,user_gender,user_contact) values('$email','$ufname','$umname','$ulname','$uGender','$contact')");
                $this->db->query("insert into user_address(login_id,country,state,city,local_address) values('$email','$country','$state','$city','$street')");
                foreach ($interests as $key => $value) {
                    $this->db->query("insert into user_interest (login_id,category_id) values('$email','$value')");
                }
                $error="Registerd Successfully.! login with '$email'";
            } else {
                $error="Not able to register this time.!";
            }
        } else {
            $error="user details not matched.!";
        }
        //header('loaction:'. baseurl .'/ONNEFE/Index?error='.$error);
          header("location:" . baseurl . "/ONNEFE/Index?error=" . $error);
    }

    function Forget() {
        $this->load->view('Header', ['title' => 'ONNEFE 2.0']);
        $this->load->view('ForgetPass');
        $this->load->view('footer');
    }

    function updateThePass() {
        if ($this->db->query("UPDATE login_info set login_password='" . md5($_POST['pass']) . "' WHERE login_id='" . $_POST['uid'] . "'")) {
            echo "Password Changed successfully.";
        } else {
            echo 'Password Not Changed.';
        }
    }

    function validUser() {

        $num = $this->db->selectFieldWhere('user_info', 'user_contact', "login_id='" . $_POST['user'] . "'");
        if ($num) {
            echo $num;
        } else {
            echo 'false';
        }
    }

    function Feeds() {
        $this->load->view('Header', ['title' => 'RSS Feeds']);
        $this->load->view('Feeds');
        $this->load->view('Footer');
    }
    
    function ratings(){
        
    }

}
