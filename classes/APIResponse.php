<?php
namespace App;

class APIResponse{
  public function __construct($status, $message,$landRate =null, $UserInfo = null, $buildingInfo = null)
  {
    header("Content-type: application/json");
    echo json_encode(["status"=> $status,"message"=> $message,
    "landRate"=> $landRate,'userInfo' =>$UserInfo, 'buildingInfo' => $buildingInfo]);
    exit;
  }
}
?>