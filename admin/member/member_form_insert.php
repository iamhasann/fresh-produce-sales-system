<?php include "../../connect/connect_db.php";  //เชื่อมต่อ database  ?>
<html>
    <head>
        <title>เเบบฟอร์มบันทึกข้อมูลสมาชิก</title>
    </head>
    <body>
        <center>
        <form action="member_insert.php" method="post" enctype="multipart/form-data">
            <table>
                <tr>
                    <td colspan="2"><h1>เเบบฟอร์มบันทึกข้อมูลสมาชิก</h1></td>
                </tr>
                <tr>
                    <td>ชื่อ สกุล</td>
                    <td><input type="text" name="fname" size="50"></td>
                </tr>
                <tr>
                    <td>ประเภทสมาชิก</td>
                    <td>
                    <select name="ftype">  
                        <?php
                            try{
                                $sql_select= $conn->prepare("SELECT * FROM member_type_tb"); 
                                $sql_select->execute();//สั่งให้ sql_select ทำงาน
                                while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                                        
                        ?>
                        <option value="<?php echo $row_select['member_type_id']; ?>"><?php echo $row_select['member_type_name'];?></option> 
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
                    <td>เพศ</td>
                    <td>
                        <input type="radio" name="fgender" value="หญิง">หญิง
                        <input type="radio" name="fgender" value="ชาย">ชาย
                    </td>
                </tr>
                <tr>
                    <td>รูปภาพสินค้า</td>
                    <td> <input type="file" name="fimg"></td>
                </tr>
                <tr>
                    <td>ที่อยู่</td>
                    <td><textarea name="faddress" rows="5" cols="50"></textarea></td>
                </tr>
                
                <tr>
                    <td></td>
                    <td><input type="submit" value="บันทึกข้อมูลสมาชิก"></td>
                </tr>
            </table>
        </form>
    </center>
    </body> 
</html>