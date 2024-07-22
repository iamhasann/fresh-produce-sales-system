<?php
include "../../connect/connect_db.php";  //เชื่อมต่อ database
$get_member_type_name=$_REQUEST['ftype'];
 
 
 
try{
$sql_insert = "insert into member_type_tb (member_type_id,member_type_name) 
values ('','$get_member_type_name')";
 
    $conn->exec($sql_insert);
    echo "<script>alert('เพิ่มข้อมูลเรียบร้อยเเล้ว')</script>";    
    echo "<script>window.location.href='member_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>
