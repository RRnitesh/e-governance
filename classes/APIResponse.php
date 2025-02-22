<?php
namespace App;

class APIResponse{
  public function __construct($status, $message,$landInfo =null, $UserInfo = null)
  {
    header("Content-type: application/json");
    echo json_encode(["status"=> $status,"message"=> $message,"landinfo"=> $landInfo,'userInfo' =>$UserInfo]);
    exit;
  }
}
?>