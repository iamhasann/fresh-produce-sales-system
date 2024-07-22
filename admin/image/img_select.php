<?php include "../../connect/connect_db.php"; ?>
<html>
    <head>
        <title>เเสดงข้อมูลสินค้าทั้งหมด</title>
    </head>
    <body>
        <center><a href="img_form_insert.php"> -เพิ่มรูป </a>
        <table border="1px">
            <tr>
                <th>รหัสสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th>รูปสินค้า</th>
                <th>เเก้ไข</th>
                <th>ลบ</th>
               
            </tr>
            <?php
                try{
                    $sql_select= $conn->prepare("SELECT * FROM img_tb");//การเขียนคำสั่ง SQL
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
            <tr>
                <td><?php echo $row_select['img_id'];  ?></td>
                <td><?php echo $row_select['img_name']; ?></td>    
                <td><img src="img/<?php echo $row_select['img_file']; ?>"  style="width:120px" ></td>    
                <td>เเก้ไข</td>
                <td>ลบ</td>
            </tr>
                <?php
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                $conn = null;//เคลีย์ค่าในการดึงข้อมูล    
?>
