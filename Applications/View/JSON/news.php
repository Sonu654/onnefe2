<?php 
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

print_r($data['news']);

$news=$data['news'];
$jsonObj="[";
$key=array_keys($news);
for($i=0;$i<count($news);$i++)
{
	$jsonObj.='{';
	foreach ($news[$i] as $key => $value) {
		$jsonObj.='"'.$key.'":"'.$value.'",';// $key.' => '.$value;
	}
	$jsonObj.='}';
}
$jsonObj.="]";

echo $jsonObj;

 ?>