<?php include "../connect/connect_db.php";  //เชื่อมต่อ database  ?>
<html>
    <head>
        <title>ร้านค้ารับซื้อแมว</title>
    </head>
    <body>
        <center>
        <form action="product_insert.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="2"><h1>ร้านค้ารับซื้อแมว</h1></td>
                </tr>
                <tr>
                    <td>ชื่อแมว</td>
                    <td><input type="text" name="fname"></td>
                </tr>
                <tr>
                    <td>สายพันธุ์แมว</td>
                    <td>
                    <select name="ftype">  
                        <?php
                            try{
                                $sql_select= $conn->prepare("SELECT * FROM product_type_tb"); 
                                $sql_select->execute();//สั่งให้ sql_select ทำงาน
                                while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                                        
                        ?>
                        <option value="<?php echo $row_select['product_type_id']; ?>"><?php echo $row_select['product_type_name'];?></option> 
                        <?php 
                                }
                            }
                        catch(PDOException $e) {
                                echo "Error: " . $e->getMessage();
                            }
                        $conn = null;//เคลีย์ค่าในการดึงข้อมูล     
                        ?>
 
                    </select>    
                    </td>
                </tr>
                <tr>
                    <td>สีของตัวแมว</td>
                    <td> <input type="text" name="fcolor"></td>
                </tr>
             
                <tr>
                    <td>ผู้ขาย</td>
                    <td><input type="text" name="fdealer"></td>
                </tr>
                <tr>
                    <td>ราคา</td>
                    <td><input type="text" name="fprice"></td>
                </tr>
                <tr>
                    <td>อายุ/ปี</td>
                    <td><input type="text" name="fage"></td>
                </tr>
                <tr>
                    <td>รูปภาพสินค้า</td>
                    <td> <input type="file" name="fimg"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูลสินค้า"></td>
                </tr>
            </table>
        </form>
    </center>
    </body> 
</html>

