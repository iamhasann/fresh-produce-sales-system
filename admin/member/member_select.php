<?php include "../../connect/connect_db.php"; ?> 
<html>
    <head>
        <title>เเสดงข้อมูลสมาชิกทั้งหมด</title>
    </head>
    <body>
   
        <center> 
        <a href="member_form_insert.php"> -เพิ่มข้อมูลสมาชิก </a> <br>
        <a href="member_type_form_insert.php"> -เพิ่มข้อมูลประเภทสมาชิก </a>
        <table border="1px">
            <tr>
                <th>รหัสสมาชิก</th>
                <th>ชื่อ สกุล</th>
                <th>ประเภทสมาชิก</th>
                <th>เพศ</th>
                <th>รูป</th>
                <th>ที่อยู่</th>
                <th>เเก้ไขข้อมูล</th>
                <th>ลบข้อมูล</th>
                
            </tr>
 
 
 
            <?php 
                try{
                    $sql_select= $conn->prepare("SELECT *  
                    FROM member_tb 
                    LEFT JOIN member_type_tb
                    ON member_tb.member_type = member_type_tb.member_type_id");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
            <tr>
                <td><?php echo $row_select['member_id'];  ?></td>
                <td><?php echo $row_select['member_name']; ?></td> 
                <td><?php echo $row_select['member_type_name']; ?></td> 
                <td><?php echo $row_select['member_gender']; ?></td>
                <td><img src="img/<?php echo $row_select['member_img']; ?>"  style="width:120px" ></td>  
                <td><?php echo $row_select['member_address']; ?></td> 
                <td><a href="member_form_update.php?update_id=<?php echo $row_select['member_id'];  ?>"  
                onclick="return confirm('คุณเเน่ใจที่จะเเก้ไขข้อมูลใช่หรือไม่ ?');" > เเก้ไข </a></td> 
 
                <td><a href="member_delete.php?del_id=<?php echo $row_select['member_id']; ?>"
                onclick="return confirm('คุณเเน่ใจที่จะลบข้อมูลใช่หรือไม่ ?');">ลบ </a></td>  
            </tr>
                <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                $conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
                ?>
            
        </table>
        </center>
    </body>
</html>