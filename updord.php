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
  .regi {
    position: absolute;
    right: 575px;
    top: 36px;
    background-color: white;
    padding: 20px 20px;
}
</style>

<body class="bg">
    <section class="regi">
      <form action="" method="POST">
      <?php include 'connect.php';
 $id = $_GET['id'];
 $showquery = "SELECT* from orders where order_id={$id}";
$showdata = mysqli_query($co, $showquery);
$arrdata = mysqli_fetch_array($showdata);

if (isset($_POST['regi'])) {
    $ids= $_GET['id'];
  $cid = $_POST['cid'];
  $bno = $_POST['bno'];
  $pdate = $_POST['pdate'];
  $ddate = $_POST['ddate'];
  $iid = $_POST['iid']; 
  $iname = $_POST['iname'];
  $amt = $_POST['amt'];
  $paid = $_POST['paid'];
  $quan = $_POST['quan'];

 // $que = "INSERT INTO orders ( customer_id, bill_no,purchase_date, delivery_date, item_id,item_names, total_amount, paid_status, quantity )VALUES ('$cid','$bno','$pdate','$ddate', '$iid',' $iname','$amt','$paid',' $quan')";//
 $query="UPDATE orders SET customer_id='$cid',bill_no='$bno',purchase_date='$pdate', delivery_date='$ddate',item_id='$iid',item_names='$iname',total_amount='$amt',paid_status='$paid',quantity='$quan' WHERE order_id=$ids";

  $res=mysqli_query($co, $query);
 
  if ($res) {
    ?>
  <script>
    alert("updated");
  </script>
<?php
   header('location:orders.php');
  }
  else{
    ?>
<script>
  alert("not updateded");
</script>  
<?php
}
}
?>

        <h1>add customer </h1>
        <label for="name">customer_id</label>
        <input type="text" style="color: red;" id="name" name="cid" placeholder="c_id" value="<?php echo $arrdata['customer_id'];?>">
        <br>
        <label for="phone no">bill no</label>
    <input type="tel",id="phone no" name="bno" placeholder="bill no" value="<?php echo $arrdata['bill_no'];?>"><br>
    <label for="address">purchace date</label>
    <input name="pdate" id="address" cols="30" ro ws="10"  placeholder="purchase date" value="<?php echo $arrdata['purchase_date'];?>"><br>
    <label for="id">delivery date</label>
    <input type="type" name="ddate" id="id"  placeholder="deli date" value="<?php echo $arrdata['delivery_date'];?>"><br>
    <label for="id">item id</label>
    <input type="type" name="iid" id="id"  placeholder="item id" value="<?php echo $arrdata['item_id'];?>"><br>
    <label for="id">item name</label>
    <input type="type" name="iname" id="id"  placeholder="item name" value="<?php echo $arrdata['item_names'];?>"><br>
    <label for="id">total amount</label>
    <input type="type" name="amt" id="id"  placeholder="amount"value="<?php echo $arrdata['total_amount'];?>"><br>
    <label for="id">paid status</label>
    <input type="type" name="paid" id="id"  placeholder="paid status" value="<?php echo $arrdata['paid_status'];?>" ><br>
    <label for="id">quantity</label>
    <input type="type" name="quan" id="id"  placeholder="quantity" value="<?php echo $arrdata['quantity'];?>"><br>
   
    <div class="b">
      <a href="cust.php"><input type="submit" name="regi" value="update" ></a>
    
  </div>
  <button id="bt"><a href="home.html">all ready registered</a></button>
</form>
</section>
</body>
</html>
