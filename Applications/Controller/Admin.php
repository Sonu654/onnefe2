<?php

class Admin extends Controller {

    function __construct() {
        parent::__construct();

        if (!isset($_COOKIE['user_status']) && $_COOKIE['user_status'] != 'Admin' && $_COOKIE['user_status'] != 'superAdmin') {
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

    function logs($user) {
 
        $res1 = $this->db->query("SELECT ui.user_first_name,ui.user_mid_name,ui.user_last_name,ll.login_id,ll.login_time,ll.logout_time from user_info ui INNER JOIN  login_log ll on ui.login_id=ll.login_id order by ll.login_time DESC ");
        while ($res = mysql_fetch_assoc($res1)) {
            $resp[] = $res;
        }
        $this->load->view('header', ['title' => 'Login Logs', 'user' => $this->session->getSessionVar('id')]);
        $this->load->view('log', ['status' => $this->session->getSessionVar('user'), 'id' => $user, 'log' => json_encode($resp)]);
        $this->load->view('footer');
    }

    function Users($user) {
        $rs = $this->db->query("SELECT category_id,category_name from category WHERE category_id=any(SELECT category_id from user_interest where login_id='" . $user . "')");
        while ($res = mysql_fetch_assoc($rs)) {
            $response[] = $res;
        }
        $res1 = $this->db->query("SELECT "
                . "ui.user_first_name,ui.user_mid_name,"
                . "ui.user_last_name,ll.login_id,ll.isActive "
                . "from login_info ll "
                . "INNER JOIN user_type us "
                . "on ll.u_id=us.u_id "
                . "INNER JOIN  user_info ui "
                . "on ui.login_id=ll.login_id"
                . " and us.u_type<>'admin' order by ll.signup_time ASC");
        while ($res = mysql_fetch_assoc($res1)) {
            $resp[] = $res;
        }
        $this->load->view('header', ['title' => $name, 'user' => $this->session->getSessionVar('id'), 'interest' => $response]);
        $this->load->view('users', ['status' => $this->session->getSessionVar('user'), 'id' => $user, 'users' => json_encode($resp)]);
        $this->load->view('footer');
    }

    function getCat($user) {
        $rs = $this->db->query("SELECT category_id,category_name from category WHERE category_id=any(SELECT category_id from user_interest where login_id='" . $user . "')");
        while ($res = mysql_fetch_assoc($rs)) {
            $response[] = $res;
        }
        $res1 = $this->db->query("SELECT "
                . "c.category_id, c.category_name,c.isActive "
                . "from category c");
        while ($res = mysql_fetch_assoc($res1)) {
            $resp[] = $res;
        }
        $this->load->view('header', ['title' => 'Categories', 'user' => $this->session->getSessionVar('id'), 'interest' => $response]);
        $this->load->view('category', ['status' => $this->session->getSessionVar('user'), 'id' => $user, 'Category' => json_encode($resp)]);
        $this->load->view('footer');
    }

    function getNews($user) {

        $rs = $this->db->query("SELECT category_id,category_name from category WHERE category_id=any(SELECT category_id from user_interest where login_id='" . $user . "')");
        while ($res = mysql_fetch_assoc($rs)) {
            $response[] = $res;
        }
        $res1 = $this->db->query("SELECT "
                . "n.news_id, n.news_heading,n.isActive "
                . "from news n");
        while ($res = mysql_fetch_assoc($res1)) {
            $resp[] = $res;
        }
        $this->load->view('header', ['title' => 'News', 'user' => $this->session->getSessionVar('id'), 'interest' => $response]);
        $this->load->view('news', ['status' => $this->session->getSessionVar('user'), 'id' => $user, 'News' => json_encode($resp)]);
        $this->load->view('footer');
    }

    function AddCat($user) {
        $rs = $this->db->query("SELECT category_id,category_name from category WHERE category_id=any(SELECT category_id from user_interest where login_id='" . $user . "')");
        while ($res = mysql_fetch_assoc($rs)) {
            $response[] = $res;
        }
        $this->load->view('header', ['title' => 'Add News Category', 'user' => $this->session->getSessionVar('id'), 'interest' => $response]);
        $this->load->view('Add-cat', ['status' => $this->session->getSessionVar('user'), 'id' => $user, 'category' => json_encode($this->db->selectAll('category'))]);
        $this->load->view('footer');
    }

    function AddNews($user) {
        $rs = $this->db->query("SELECT category_id,category_name from category WHERE category_id=any(SELECT category_id from user_interest where login_id='" . $user . "')");
        while ($res = mysql_fetch_assoc($rs)) {
            $response[] = $res;
        }
        $this->load->view('header', ['title' => 'Add News', 'user' => $this->session->getSessionVar('id'), 'interest' => $response]);
        $this->load->view('Add-News',['status' => $this->session->getSessionVar('user'), 'id' => $user,'NatInt'=>json_encode($this->db->selectAll('natinat')),'category'=>json_encode($this->db->selectAll('category')),'Ack'=>json_encode($this->db->selectAll('news_ack'))]);
        $this->load->view('footer');
    }

    function editNews($user) {

        $rs = $this->db->query("SELECT category_id,category_name from category WHERE category_id=any(SELECT category_id from user_interest where login_id='" . $user . "')");
        while ($res = mysql_fetch_assoc($rs)) {
            $response[] = $res;
        }
        $res1 = $this->db->query("SELECT "
                . "n.news_id, n.news_heading "
                . "from news n order by n.news_id DESC");
        while ($res = mysql_fetch_assoc($res1)) {
            $resp[] = $res;
        }
        $this->load->view('header', ['title' => 'News', 'user' => $this->session->getSessionVar('id'), 'interest' => $response]);
        $this->load->view('edit-news', ['status' => $this->session->getSessionVar('user'), 'id' => $user, 'News' => json_encode($resp)]);
        $this->load->view('footer');
    }

    function catBlAc() {
        $isActval = $this->db->selectFieldWhere('category', 'isActive', "category_id='" . $_GET['cat_id'] . "'");
        echo '$isActval';
        if ($isActval == 1)
            $updateTo = 0;
        else
            $updateTo = 1;
        if ($this->db->query("update category set isActive='$updateTo' where category_id='" . $_GET['cat_id'] . "'")) {
            echo True;
        } else {
            echo False;
        }
    }

    function userBlAc() {
        $isActval = $this->db->selectFieldWhere('login_info', 'isActive', "login_id='" . $_GET['users_id'] . "'");
        echo '$isActval';
        if ($isActval == 1)
            $updateTo = 0;
        else
            $updateTo = 1;
        if ($this->db->query("update login_info set isActive='$updateTo' where login_id='" . $_GET['users_id'] . "'")) {
            echo True;
        } else {
            echo False;
        }
    }

    function newsBlAc() {
        $isActval = $this->db->selectFieldWhere('news', 'isActive', "news_id='" . $_GET['newss_id'] . "'");
        echo '$isActval';
        if ($isActval == 1)
            $updateTo = 0;
        else
            $updateTo = 1;
        if ($this->db->query("update news set isActive='$updateTo' where news_id='" . $_GET['newss_id'] . "'")) {
            echo True;
        } else {
            echo False;
        }
    }

    function addNG($user) {
        $this->load->view('Header', ['title' => 'Weekly Topic', 'user' => $this->session->getSessionVar('id')]);
        $this->load->view('addNGG', ['status' => $this->session->getSessionVar('user'), 'id' => $user]);
        $this->load->view('Footer');
    }

    function updateNewsContent() {
        if ($this->db->query("UPDATE news set news_heading='" . $_POST['nheading'] . "',news_content='" . $_POST['ncontent'] . "' where news_id='" . $_POST['nid'] . "'")) {
            echo 'News Updated Successfully.';
        } else {
            echo 'News is Not updated Changed.';
        }
    }

    function Addcategory() {
        $valueOfID = ($this->db->query("SELECT MAX(category_id) maxCat FROM category"));
        $id = mysql_result($valueOfID, 0, maxCat);
        $nid = $id + 1;
        if ($this->db->query("INSERT into category (category_id,category_name,isActive) VALUES('$nid',('" . $_POST['Ncat'] . "'),1)")) {
            echo 'Category Added Successfully.';
        } else {
            echo 'Category is Not Added Successfully.';
        }
    }

    function updateCateory() {
        if ($this->db->query("UPDATE category set category_name='" . $_POST['catgoryName'] . "' where category_id='" . $_POST['cid'] . "'")) {
            echo 'Category Updated Successfully.';
        } else {
            echo 'Category is Not updated Changed.';
        }
    }

    function AddANewss() {
        if ($_POST['acknow'] == '') {
            echo 'fill The Acknowledgement Location properly.';
        } else {
            $valueOfID1 = ($this->db->query("SELECT MAX(ack_id) maxACK FROM news_ack"));
            $id = mysql_result($valueOfID1, 0, maxACK);
            $aid = $id + 1;

            if ($_POST['flag'] == 1) {

                $this->db->query("INSERT into news_ack (ack_id,ack_location) Values ('$aid','" . $_POST['acknow'] . "')");
            } else {
                $aid = $_POST['acknow'];
            }

            $adddate = date('Y-m-d H:m:s');
            if ($this->db->query("INSERT into news (category_id,nat_int,news_heading,news_content,time,ack_id,isActive) VALUES ('" . $_POST['category'] . "','" . $_POST['NatIntS'] . "','" . $_POST['heading'] . "','" . $_POST['content'] . "','$adddate','$aid','1')")) {
                echo 'News Added Sucessfully';
            } else {
                echo 'News Is Not Added.';
            }
        }
    }

    function addNGTopic($user) {
        if (!empty($_GET['topic']) && !empty($_GET['date'])) {
            $id = $this->db->query('select MAX(ng_id) ng_id from newsgroup');
            $id = mysql_result($id, 0, 'ng_id');
            $id = $id + 1;
            $i_date = $_GET['date'] . ' 00:00:00';
            $e_date = date_create($_GET['date']);
            $e_date = date_timestamp_get($e_date) + 6 * 24 * 60 * 60;
            $e_date = date('Y-m-d', $e_date) . ' 23:59:59';
            $this->db->query('update newsgroup set isActive=0 where isActive=1');
            $qry = "insert into newsgroup(ng_id,ng_title,isActive,i_time,l_time,login_id) values('$id','" . $_GET['topic'] . "',1,'$i_date','$e_date','$user')";
            if ($this->db->query($qry)) {
                echo 'Added Successfully';
            } else {
                echo 'unable to add..!';
            }
        } else {
            echo 'all Field must be filed';
        }
    }

}
