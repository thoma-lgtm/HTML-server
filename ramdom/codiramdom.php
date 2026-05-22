<?php
// required headers
header("Access-Control-Allow-Origin: *");
//header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
// get database connection
//include_once '../config/database.php';
 
// instantiate product object
include_once '../objects/codiRandom.php';
 
 
$codi = new CodiRandom();
/* 
// get posted data
$data = json_decode(file_get_contents("php://input"));
// make sure data is not empty*/
if(empty($data->n)){$codi->n=5;}else{$codi->n=$data->n;}
$codi->read();
echo $codi->codi;

?>