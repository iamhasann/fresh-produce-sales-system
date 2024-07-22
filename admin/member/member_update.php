<?php
include "../../connect/connect_db.php";  //เชื่อมต่อ database
$get_update_id=$_REQUEST['update_id'];
$get_name=$_REQUEST['fname'];
$get_type=$_REQUEST['ftype'];
$get_gender=$_REQUEST['fgender'];
$filename=$_FILES["fimg"]["name"];
$get_address=$_REQUEST['faddress'];
 
 
 
try{
      
    $sql_update = "UPDATE member_tb 
            SET member_name='$get_name',
                member_type='$get_type',
                member_gender='$get_gender',
                member_img='$filename',
                member_address='$get_address'
            WHERE member_id='$get_update_id' ";
  
    $stmt = $conn->prepare($sql_update);
    $stmt->execute();
  
    echo "<script>alert('เเก้ไขข้อมูลเรียบร้อยเเล้ว')</script>";      
    echo "<script>window.location.href='member_select.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}
 
$conn = null;
 
?>