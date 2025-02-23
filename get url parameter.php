<?php
//BEFORE SQL QUERY

$key = 'id';
if (isset($_GET[$key])) {
	if($strWhereClause==''){
    $strWhereClause = $key."='" . $_GET[$key] . "'";
	}else{
		$strWhereClause .= " AND ".$key."='" . $_GET[$key] . "'";
	}
}