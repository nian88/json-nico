<?php 
  //--------------------------------------------------------------------------
  // 1) Include koneksi
  //--------------------------------------------------------------------------
  include 'config.php';
  //--------------------------------------------------------------------------
  // 2) Query database for data
  //--------------------------------------------------------------------------
  $result = mysql_query("SELECT * FROM $tableName");            //query
//  $array = mysql_fetch_row($result);                          //fetch result  
$array = array();
while ($r = mysql_fetch_row($result)) {
    $array[] = $r;
}
$data = "{kota:".json_encode($array)."}";

  //--------------------------------------------------------------------------
  // 3) echo result as json 
  //--------------------------------------------------------------------------
  //echo json_encode($array);
  echo $data;

?>
