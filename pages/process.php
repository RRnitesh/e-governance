<?php

use App\APIResponse;
// use App\DataBaseQuery;
use App\Getinformation;
require __DIR__ ."/../vendor/autoload.php";

//getting userinformation 
$district = $_POST["district"];
$municipality = $_POST["municipality"];
$mapnumber = $_POST["mapnumber"];
$kitanumber = $_POST["kitanumber"];
$area = $_POST["area"];

//user entered value
echo "user entered value\n";
echo "districtName:".$district." MunicplaityName:".$municipality. " mapnumber:".
$mapnumber. " kitanumber:" .$kitanumber." area:".$area;

echo "\n";

$getInformation = new Getinformation($district,$municipality,$mapnumber
,$kitanumber,$area);

$data = $getInformation->getAllData();

if(isset($data["error"])){
  new APIResponse(false, $data["error"]);
}
else{
  new APIResponse(true,"you are good you got it", 
  $data["landrate"], $data['UserInfo'], $data['buildingInfo']);
}

?>

