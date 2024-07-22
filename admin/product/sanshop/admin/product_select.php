<?php include "../connect/connect_db.php"; ?> 
<html>
    <head>
        <title>เเสดงข้อมูลสินค้าทั้งหมด</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
    <div class="container mt-3">
        <center> 
        <a href="product_form_insert.php"> -เพิ่มข้อมูลสินค้า </a>
        <a href="product_type_form_insert.php"> -เพิ่มข้อมูลประเภทสินค้า </a>
        <table class="table table-bordered">
            <tr>
                <th>รหัสสินค้า</th>
                <th>ชื่อแมว</th>
                <th>สายพันธุ์แมว</th>
                <th>สีของตัวแมว</th>
                <th>ผู้ขาย</th>
                <th>ราคา</th>
                <th>อายุ/ปี</th>
                <th>รูปภาพสินค้า</th>
                <th>เเก้ไขข้อมูล</th>  
                <th>ลบข้อมูล</th>
                
            </tr>
 
 
 
            <?php
                try{
                    $sql_select= $conn->prepare("SELECT *  
                    FROM product_tb
                    LEFT JOIN product_type_tb
                    ON product_tb.product_type = product_type_tb.product_type_id");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
            ?>
            <tr>
                <td><?php echo $row_select['product_id'];  ?></td>
                <td><?php echo $row_select['product_name']; ?></td> 
                <td><?php echo $row_select['product_type_name']; ?></td> 
                <td><?php echo $row_select['product_color']; ?></td>
                <td><?php echo $row_select['product_dealer']; ?></td>
                <td><?php echo $row_select['product_price']; ?></td>
                <td><?php echo $row_select['product_age']; ?></td>
                <td><img src="img/<?php echo $row_select['product_img']; ?>"  style="width:120px" ></td>
                <td><a href="product_form_update.php?update_id=<?php echo $row_select['product_id'];  ?>"  
                onclick="return confirm('คุณเเน่ใจที่จะเเก้ไขข้อมูลใช่หรือไม่ ?');" > เเก้ไข </a></td> 
 
                <td><a href="product_delete.php?del_id=<?php echo $row_select['product_id']; ?>"
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
    </div>    
    </body>
</html>
