<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include dirname(__FILE__)."/Flight.php";
include dirname(__FILE__)."/Bus.php";
include dirname(__FILE__)."/Train.php";


// just for testing ...
// $data=array(
//   "train"=>"Madrid",
//   "flight"=>"Stockholm",
//   "bus"=>"Barcelona",
//   "flight2"=>"Gerona"
// );

$data = $_POST;

$orderdArray=array();

$staticArray = array(new Train('route1'),new Bus('route2'),new Flight('route3'),new Flight('route4'));




$fixedRoutes = array();
foreach ($staticArray as $key => $value) {
	$varName = strtolower(get_class($value));
	$fixedRoutes[] = $value->$varName;
}


foreach ($fixedRoutes as $key => $value) {
 	foreach ($data as $k => $v) {

 			if(strpos($value,"from " .$v) !== false){
 					$orderdArray[]=$value;
	 				continue;
 			}
 		
 	}
}

$orderdArray[] = "You have arrived at your final destination .";
var_dump($orderdArray);


?>