<?php include "../connect/connect_db.php"; ?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <title>YRU FRESHNART</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container-fluid p-5 bg-danger text-white text-center">
  <h1>YRU FRESHNART</h1>
  <p>สด ไหม่ ทุกวัน ที่นี่ที่เดียว</p> 
</div>

<div class="container mt-5">
  <center><h3>สินค้ามาใหม่</h3>
  <div class="row">

  <?php
                try{
                    $sql_select= $conn->prepare("SELECT *  
                    FROM product_tb
                    LEFT JOIN product_type_tb
                    ON product_tb.product_type = product_type_tb.product_type_id 
                    order by product_id desc limit 3 ");
                    $sql_select->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select = $sql_select->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
    ?>

    <div class="col-sm-4">
        <div class="card" style="width:400px">
            <img class="card-img-top" src="../admin/product/img/<?php echo $row_select['product_img']; ?>" alt="Card image" width="300" height="250">
            <div class="card-body">
                <h4 class="card-title"><?php echo $row_select['product_name']; ?></h4>
                <p class="card-text">ผู้ผลิต :: <?php echo $row_select['product_dealer']; ?></p>
                <p class="card-text">ประเภท :: <?php echo $row_select['product_type_name']; ?></p>
                <a href="#" class="btn btn-danger"><?php echo $row_select['product_price']; ?>/กก.</a>
            </div>
        </div>
    </div>

    <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                //$conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
    ?>

  </div>
</div>

<div class="container mt-5">
  <center><h3>สินค้าอาหารสด</h3>
  <div class="row">

    <?php
                try{
                    $sql_select_fresh= $conn->prepare("SELECT *  
                    FROM product_tb
                    LEFT JOIN product_type_tb
                    ON product_tb.product_type = product_type_tb.product_type_id 
                    where product_type_id='12' order by product_id desc limit 4 ");
                    $sql_select_fresh->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select_fresh = $sql_select_fresh->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
    ?>

    <div class="col-sm-3">
        <div class="card" style="width:300px">
            <img class="card-img-top" src="../admin/product/img/<?php echo $row_select_fresh['product_img']; ?>" alt="Card image" width="300" height="250">
            <div class="card-body">
                <h4 class="card-title"><?php echo $row_select_fresh['product_name']; ?></h4>
                <p class="card-text">ผู้ผลิต :: <?php echo $row_select_fresh['product_dealer']; ?></p>
                <a href="#" class="btn btn-danger"><?php echo $row_select_fresh['product_price']; ?>/กก.</a>
            </div>
        </div>
    </div>

    <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                //$conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
    ?>

  </div>
</div>

<div class="container mt-5">
  <center><h3>สินค้าอาหารแห้ง</h3>
  <div class="row">

  <?php
                try{
                    $sql_select_dry= $conn->prepare("SELECT *  
                    FROM product_tb
                    LEFT JOIN product_type_tb
                    ON product_tb.product_type = product_type_tb.product_type_id 
                    where product_type_id='11' order by product_id desc limit 4 ");
                    $sql_select_dry->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select_dry = $sql_select_dry->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
    ?>

    <div class="col-sm-3">
        <div class="card" style="width:300px">
            <img class="card-img-top" src="../admin/product/img/<?php echo $row_select_dry['product_img']; ?>" alt="Card image" width="300" height="250">
            <div class="card-body">
                <h4 class="card-title"><?php echo $row_select_dry['product_name']; ?></h4>
                <p class="card-text">ผู้ผลิต :: <?php echo $row_select_dry['product_dealer']; ?></p>
                <a href="#" class="btn btn-danger"><?php echo $row_select_dry['product_price']; ?>/กก.</a>
            </div>
        </div>
    </div>

    <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                //$conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
    ?>

    </div>
</div>

    <div class="container mt-5">
  <center><h3>สินค้าผักและผลไม้</h3>
  <div class="row">

  <?php
                try{
                    $sql_select_fruit= $conn->prepare("SELECT *  
                    FROM product_tb
                    LEFT JOIN product_type_tb
                    ON product_tb.product_type = product_type_tb.product_type_id 
                    where product_type_id='10' order by product_id desc limit 4 ");
                    $sql_select_fruit->execute();//สั่งให้ sql_select ทำงาน
                    while($row_select_fruit = $sql_select_fruit->fetch(PDO::FETCH_ASSOC)){
                        //$row_select = จะเก็บข้อมูลที่ while วนเเต่ละรอบ
    ?>

    <div class="col-sm-3">
        <div class="card" style="width:300px">
            <img class="card-img-top" src="../admin/product/img/<?php echo $row_select_fruit['product_img']; ?>" alt="Card image" width="300" height="250">
            <div class="card-body">
                <h4 class="card-title"><?php echo $row_select_fruit['product_name']; ?></h4>
                <p class="card-text">ผู้ผลิต :: <?php echo $row_select_fruit['product_dealer']; ?></p>
                <a href="#" class="btn btn-danger"><?php echo $row_select_fruit['product_price']; ?>/กก.</a>
            </div>
        </div>
    </div>

    <?php 
                }
                    }
                    catch(PDOException $e) {
                            echo "Error: " . $e->getMessage();
                        }
                $conn = null;//เคลีย์ค่าในการดึงข้อมูล
 
    ?>

  </div>
</div>

</body>
</html>
