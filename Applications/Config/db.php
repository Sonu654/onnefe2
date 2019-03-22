<?php

class db extends Database implements Select, Insert, Update {

    function __construct() {
        parent::__construct();
    }

    function query($qry) {
        $re = mysql_query($qry) or die(mysql_error());
        return $re;
    }

    function selectAll($table) {
        $qry = "select * from $table";
        $rs = mysql_query($qry)or die(mysql_error());
        while ($res = mysql_fetch_assoc($rs)) {
            $response[] = $res;
        }
        return @$response;
    }

    function selectAllWhere($table, $cond) {
        $qry = "select * from $table where $cond";
        $rs = mysql_query($qry)or die(mysql_error());
        while ($res = mysql_fetch_assoc($rs)) {
            $response[] = $res;
        }
        return @$response;
    }

    function selectFieldWhere($table, $field, $cond) {
        $qry = "select $field from $table where $cond";
        $rs = mysql_query($qry)or die(mysql_error());
        if(mysql_num_rows($rs)==1)
            $response=  mysql_result($rs, 0,$field);
        else
         while ($res = mysql_fetch_assoc($rs)) {
            $response[] = $res;
        }
        return @$response;
    }

    function selectFieldsWhere($table, $fields, $con) {
        $qry = "select " . implode(',', $fields) . " from $table where $con";
        $rs = mysql_query($qry)or die(mysql_error());
        while ($res = mysql_fetch_assoc($rs)) {
            $response[] = $res;
        }
        return @$response;
    }

    function selectDistnict($table, $fields) {
        
    }

    function selectOrderby($table, $field, $orfer) {
        
    }

    function fetchInnerJoin($fields, $table1, $table2, $on) {
        
    }

    function fetchLeftJoin($fields, $table1, $table2, $on) {
        
    }

    function fetchRightJoin($fields, $table1, $table2, $on) {
        
    }

    function fetchFullJoin($fields, $table1, $table2, $on) {
        
    }

    function fetchUnion($table1, $fieldsT1, $table2, $fieldsT2) {
        
    }

    function insertInto($value, $table) {
        echo $qry = "insert into $table values(" . implode(',', $value) . ")";
        mysql_query($qry);
    }

    function insertIntoFields($fields, $values, $table) {
        echo $qry = "insert into(" . implode(',', $fields) . ") $table values(" . implode(',', $values) . ")";
        //mysql_query($qry);
    }

    function updateField($field, $table, $value, $cond) {
        echo $sql = "update $table set " . $field . ' = ' . $value . " where $cond";
        //mysql_query($sql);
    }

}
