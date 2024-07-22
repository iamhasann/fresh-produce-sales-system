<?php include "../connect/connect_db.php"; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ร้านขายสัตวเลี้ยง</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
  <style>
        .topnav {
         position: relative;
         overflow: hidden;
         background-color: Red;
        }

        .topnav a {
         float: left;
         color: #fff;
         text-align: center;
         padding: 14px 16px;
         text-decoration: none;
         font-size: 17px;
        }

        .topnav a:hover {
         background-color: #fff;
         color: black;
        }

        .topnav a.active {
        font-family: "Audiowide", sans-serif;  
        background-color: red;
        color: white;
        }

       .topnav-centered a {
       float: none;
       position: absolute;
       top: 50%;
       left: 50%;
       transform: translate(-50%, -50%);
       }

       .topnav-right {
       float: right;
       }
  </style>
</head>
<body style=" background-color: #f8d7c1;">
<body>
<div class="row">
        <div class="col-md-12" style=" background-color: white;">
            <img src="../admin/loco/locosan.jpg" style="width: 130px;"> 
        </div>
</div>
<section class="nav-bar">
        <!-- Top navigation -->
       <div class="topnav">

       <!-- Centered link -->
       <div class="topnav-centered">
       <a href="cattuk.php" class="active"><h3>รายละเอียดสินค้า</h3></a>
        </div>

   <!-- Left-aligned links (default) -->
   <a href="../web/home.php">หน้าแรก</a>
   <a href="cathot.php">กำลังฮิต</a>
   <a href="catcute.php">สีสวยงาม</a>
   <a href="cattuk.php">ราคาถูก</a>
 
   <!-- Right-aligned links -->
   <div class="topnav-right">
   <a href="#search">ค้นหา</a>
   <a href="#search">ช่วยเหลือ</a>
   <a href="#About">เกี่ยวกับ</a>
   </div>
   </div>
        
</section>
<?php
   $ip=$_REQUEST['ip'];
   try{
      
    
  
    echo "<script>alert('สั่งซื้อเรียบร้อยเเล้ว')</script>";      
    echo "<script>window.location.href='home.php';</script>";
 
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
} 
?>
<br>
            <div class="row"><!-- เริ่มต้น foter -->
              <div class="col-md-2" style="background-color: rgb(0, 0, 0)">
                <font color="#FFFFFF">
                <p>ค้นหาร้านค้า</p>
                <p>สมัครเป็นสมาชิก</p>
                <p>ลงทะเบียนเพื่อรับข่าวสาร</p></font>
              </div>
              <div class="col-md-2" style="background-color: rgb(0, 0, 0)">
                <font color="#FFFFFF">
                <p>รับความช่วยเหลือ</p>
                <p>สถานะคำสั่งซื้อ</p>
                <p>การส่งมอบ</p>
                <p>การคืนสินค้า</p>
                <p>ทางเลือกการชำระเงิน</p>
                <p>ติดต่อเรา</p></font>
              </div>
              <div class="col-md-2" style="background-color: rgb(0, 0, 0)">
                <font color="#FFFFFF">
                <p>เกี่ยวกับ sanshop</p>
                <p>ข่าวสาร</p>
                <p>ร่วมงานกับเรา</p>
                <p>ร่วมลงทุนกับเรา</p>
                <p>ความยั่งยืน</p></font>
              </div>  
              <div class="col-md-6" style="background-color: rgb(0, 0, 0)">
                <font color="#FFFFFF">
                <p></p></font>
              </div>  
          
            </div><!-- ปิด class row main menu -->  
              
            <div class="row"><!-- เริ่มต้น Banner -->
              <div class="col-md-1" style="background-color: rgb(0, 0, 0)">
                <font color="#FFFFFF">
                <p>ไทย</p>
                </font>
              </div>
              <div class="col-md-5" style="background-color: rgb(0, 0, 0)">
                <font color="#FFFFFF">
                <p>© 2022 sanshop, Inc. สงวนลิขสิทธิ์</p>
                </font>
              </div>
              <div class="col-md-1" style="background-color: rgb(0, 0, 0)">
                <font color="#FFFFFF">
                <p>คำแนะนำ</p>
                </font>
              </div>  
              <div class="col-md-1" style="background-color: rgb(0, 0, 0)">
                <font color="#FFFFFF">
                <p>เงื่อนไขการขาย</p></font>
              </div> 
              <div class="col-md-2" style="background-color: rgb(0, 0, 0)">
                <font color="#FFFFFF">
                <p>ข้อกำหนดการใช้</p></font>
              </div>    
              <div class="col-md-2" style="background-color: rgb(0, 0, 0)">
                <font color="#FFFFFF">
                <p>นโยบายความเป็นส่วนตัวของ sanshop</p></font>
              </div> 

            </div> <!-- ปิด คอน -->
</body>
</body>
</html>