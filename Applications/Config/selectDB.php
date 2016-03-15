<?php 
	interface Select{

		function selectAll($table);
		function selectAllWhere($table,$cond);
		function selectFieldWhere($table,$field,$cond);
		function selectFieldsWhere($table,$fields,$con); //$fields is []
		function selectDistnict($table,$fields);
		function selectOrderby($table,$field,$orfer); //order:ASC or DESC
		function fetchInnerJoin($fields,$table1,$table2,$on);
		function fetchLeftJoin($fields,$table1,$table2,$on);
		function fetchRightJoin($fields,$table1,$table2,$on);
		function fetchFullJoin($fields,$table1,$table2,$on);
		function fetchUnion($table1,$fieldsT1,$table2,$fieldsT2);

	}