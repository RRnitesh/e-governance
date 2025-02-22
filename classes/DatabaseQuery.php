<?php
namespace App;

require_once"dbconnection.php";

class DataBaseQuery extends DbConnection{
  private $conn;

  public function __construct(){
    parent::__construct();
    $this->conn = $this->getConnection();
  }

  public function fetchData($query, $parameter = [], $types = ""){  
    $stmt = $this->conn->prepare($query);

    if(!empty($parameter))
    {
      $stmt->bind_param($types, ...$parameter);
    }
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    $data = [];
    while($row = $result->fetch_assoc())
    {
      $data[] = $row;
    }
    return $data;
  }
}
?>

