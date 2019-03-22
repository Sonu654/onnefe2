<?php

class News extends Controller {

    function get($id) {
        header("Access-Control-Allow-Origin: *");
        header("Content-Type: application/json; charset=UTF-8");
        $news=  $this->db->selectAllWhere('news',"category_id='$id' and isActive='1'");
        echo json_encode($news);
    }

    function jqury() {
        header('Content-Type:text/xml');
        echo '<?xml version="1.0" encoding="UTF-8" standalone="yes"?>';
        echo '<response>';
        echo 'done inside jquery method...!</response>';
    }
    
    function getForUpdate($id){
        $ne=  $this->db->query("select n.news_id, n.news_heading,n.news_content from news n where n.news_id='$id'" );
        while ($rs=  mysql_fetch_assoc($ne))
                $res[]=$rs;
        echo json_encode($res);
    }

}
