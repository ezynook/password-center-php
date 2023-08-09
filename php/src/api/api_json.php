<?php
header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
require '../include/db.php';

if (isset($_GET['customer']) && $_GET['customer'] != ""){
    $customer = $_GET['customer'];
    if (isset($_GET['site'])){
        $site = $_GET['site'];
        $filter = "WHERE customer LIKE '%{$customer}%' AND site LIKE '%{$site}%'";
    }else{
        $filter = "WHERE customer LIKE '%{$customer}%'";
    }
}else{
    $filter = "";
}
$sql = "SELECT * FROM tbl_password {$filter}";
$query = mysqli_query($conn, $sql);

$group_items = array();

  foreach($query as $items){
      $group_items[trim($items['customer'])][] = $items;
  }
  $res = json_encode($group_items);
  echo $res;
?>