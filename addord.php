<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Butthi Foods</title>
    <link rel="stylesheet" href="ide.css">
  
</head>
<style>
  <?php include "ide.css"; ?>
</style>

<body class="bg">
    <section class="regi">
      <form action="" method="POST">

        <h1>add customer </h1>
        <label for="name">customer_id</label>
        <input type="text" style="color: red;" id="name" name="cid" placeholder="c_id">
        <br>
        <label for="phone no">bill no</label>
    <input type="tel",id="phone no" name="bno" placeholder="bill no"><br>
    <label for="address">purchace date</label>
    <input name="pdate" id="address" cols="30" ro ws="10"  placeholder="purchase date"><br>
    <label for="id">delivery date</label>
    <input type="type" name="ddate" id="id"  placeholder="deli date"><br>
    <div class="b">
    <label for="id">item id</label>
    <input type="type" name="iid" id="id"  placeholder="item id"><br>
    <label for="id">item name</label>
    <input type="type" name="iname" id="id"  placeholder="item name"><br>
    <label for="id">total amount</label>
    <input type="type" name="amt" id="id"  placeholder="amount"><br>
    <label for="id">paid status</label>
    <input type="type" name="paid" id="id"  placeholder="paid status"><br>
    <label for="id">quantity</label>
    <input type="type" name="quan" id="id"  placeholder="quantity"><br>
    <div class="b">
      <a href="cust.php"><input type="submit" name="regi" value="submit" ></a>
    
  </div>
  <button id="bt"><a href="home.html">all ready registered</a></button>
</form>
</section>
</body>
</html>
<?php include 'connect.php';

if (isset($_POST['regi'])) {
  $cid = $_POST['cid'];
  $bno = $_POST['bno'];
  $pdate = $_POST['pdate'];
  $ddate = $_POST['ddate'];
  $iid = $_POST['iid'];
  $iname = $_POST['iname'];
  $amt = $_POST['amt'];
  $paid = $_POST['paid'];
  $quan = $_POST['quan'];

  $que = "INSERT INTO orders ( customer_id, bill_no,purchase_date, delivery_date, item_id,item_names, total_amount, paid_status, quantity )VALUES ('$cid','$bno','$pdate','$ddate', '$iid',' $iname','$amt','$paid',' $quan')";

  $res=mysqli_query($co, $que);
 
  if ($res) {
    ?>
  <script>
    alert("inserted");
  </script>
<?php
   header('location:orders.php');
  }
  else{
    ?>
<script>
  alert("not inserted");
</script>  
<?php
}
}
?>