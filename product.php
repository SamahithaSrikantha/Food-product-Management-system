<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>butthi foods</title>
    <link rel="stylesheet" href="style.css">
    <link href='https://fonts.googleapis.com/css?family=Asul' rel='stylesheet'>
    <link rel="stylesheet" href="produ.css">
   
</head>
<style>
  <?php include "produ.css"; ?>
</style>
<body>
    <div class="cotaier" id="header">
        
        <nav class="tab">
            <img id="m" src="./img/WhatsApp Image 2023-01-05 at 10.51.31 PM.jpeg "alt="">
            <ul class="col-md-12">
             <li class="col-md-3"><a href="home.php">Home</a></li>
            <li class="col-md-3"><a >our product</a></li>
            
            <li class="col-md-3"><a href="admin_login.php">Admin login</a></li>    
       
            </ul>
        </nav>
    </div>
<section id="prod">
    <form action=""method="POST">
        <h1 class="phead ceter">Our Products</h1> 
        <div class="box">
            <div class="org">
                <img src="bele che.jpg" alt="">
                <h2 class="ceter">Bele Chetney Pudi</h2>
                <p class="ceter"> prize:100rs </p>
                <a href="pay.php">  <button class="bt " name="bele">Buy now</button></a>
            </div>
            
            <div class="org">
                <img src="shega che.jpg" alt="">
                <h2 class="ceter">Shenga Chetney Pudi</h2>
                <p class="ceter">prize:100rs</p>
                <a href="pay.php">  <button class="bt " name="shen">Buy now</button></a>
            </div>
           
            
            <div class="org">
                <img src="rasam.jpg" alt="">
                <h2 class="ceter">Rasam Powder</h2>
                <p class="ceter"> prize:110rs</p>
                <a href="pay.php">  <button class="bt " name="ra">Buy now</button></a>
            </div>
            <div class="org">
                <img src="samba.jpg" alt="">
                <h2 class="ceter">Sambaar Powder</h2>
                <p class="ceter">prize:120rs </p>
                <a href="pay.php">  <button class="bt " name="sa">Buy now</button></a>
            </div>
        
        <div class="org">
            <img src="vagi .jpg" alt="">
            <h2 class="ceter">Vangibath Powder</h2>
            <p class="ceter">prize:110rs </p>
            <a href="pay.php">  <button class="bt " name="va">Buy now</button></a>
        </div>
    
    <div class="org">
        <img src="mor tho.jpg" alt="">
        <h2 class="ceter">Moringa Thokku</h2>
        <p class="ceter"> prize:100rs</p>
        <a href="pay.php">  <button class="bt " name="mor">Buy now</button></a>
    </div>
    <div class="org">
        <img src="amla tho.jpg" alt="">
        <h2 class="ceter">Amala Thokku</h2>
        <p class="ceter"> prize:100rs</p>
        <a href="pay.php">  <button class="bt " name="am">Buy now</button></a>
    </div>
</div>
</form>
</section>
</body>

</html>
<?php include 'connect.php';
if (isset($_POST['bele'])) {
    $que = "INSERT INTO orders ( customer_id, bill_no,purchase_date, delivery_date, item_id,item_names, total_amount, paid_status, quantity )VALUES ('1','5','2023-01-31','2023-02-1', '100','bele chetney pudi','100','paid',' 1')";

    $res = mysqli_query($co, $que);

    if ($res) {
        ?>
      <script>
        alert("inserted");
      </script>
    <?php
       header('location:pay.php');
      }
      else{
        ?>
    <script>
      alert("not inserted");
    </script>  
    
    <?php
    }
}
if (isset($_POST['shen'])) {
    $que = "INSERT INTO orders ( customer_id, bill_no,purchase_date, delivery_date, item_id,item_names, total_amount, paid_status, quantity )VALUES ('2','6','2023-01-31','2023-02-1', '101','shenga chetney pudi','100','paid',' 1')";

    $res = mysqli_query($co, $que);

    if ($res) {
        ?>
      <script>
        alert("inserted");
      </script>
    <?php
            header('location:pay.php');
    } else {
        ?>
    <script>
      alert("not inserted");
    </script>  
    
    <?php
    }
}
if (isset($_POST['ra'])) {
    $que = "INSERT INTO orders ( customer_id, bill_no,purchase_date, delivery_date, item_id,item_names, total_amount, paid_status, quantity )VALUES ('3','7','2023-01-31','2023-02-1', '102','rasam powder','110','paid',' 250g')";

    $res = mysqli_query($co, $que);

    if ($res) {
        ?>
      <script>
        alert("inserted");
      </script>
    <?php
            header('location:pay.php');
    } else {
        ?>
    <script>
      alert("not inserted");
    </script>  
    
    <?php
    }
}
if (isset($_POST['sa'])) {
    $que = "INSERT INTO orders ( customer_id, bill_no,purchase_date, delivery_date, item_id,item_names, total_amount, paid_status, quantity )VALUES ('1','8','2023-01-31','2023-02-1', '103','sambar powder','120','paid',' 250g')";

    $res = mysqli_query($co, $que);

    if ($res) {
        ?>
      <script>
        alert("inserted");
      </script>
    <?php
            header('location:pay.php');
    } else {
        ?>
    <script>
      alert("not inserted");
    </script>  
    
    <?php
    }
}
if (isset($_POST['va'])) {
    $que = "INSERT INTO orders ( customer_id, bill_no,purchase_date, delivery_date, item_id,item_names, total_amount, paid_status, quantity )VALUES ('1','9','2023-01-31','2023-02-1', '104','vangibhath pudi','110','paid',' 250g')";

    $res = mysqli_query($co, $que);

    if ($res) {
        ?>
      <script>
        alert("inserted");
      </script>
    <?php
            header('location:pay.php');
    } else {
        ?>
    <script>
      alert("not inserted");
    </script>  
    
    <?php
    }
}
if (isset($_POST['mor'])) {
    $que = "INSERT INTO orders ( customer_id, bill_no,purchase_date, delivery_date, item_id,item_names, total_amount, paid_status, quantity )VALUES ('2','10','2023-01-31','2023-02-1', '105','moringa thokku','100','paid',' 1 bottle')";

    $res = mysqli_query($co, $que);

    if ($res) {
        ?>
      <script>
        alert("inserted");
      </script>
    <?php
            header('location:pay.php');
    } else {
        ?>
    <script>
      alert("not inserted");
    </script>  
    
    <?php
    }
}
if (isset($_POST['am'])) {
    $que = "INSERT INTO orders ( customer_id, bill_no,purchase_date, delivery_date, item_id,item_names, total_amount, paid_status, quantity )VALUES ('1','11','2023-01-31','2023-02-1', '106','amla thokku','100','paid',' 1 bottle')";

    $res = mysqli_query($co, $que);

    if ($res) {
        ?>
      <script>
        alert("inserted");
      </script>
    <?php
            header('location:pay.php');
    } else {
        ?>
    <script>
      alert("not inserted");
    </script>  
    
    <?php
    }
}
?>