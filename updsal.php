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
 $showquery = "SELECT* from sales where customer_id={$id}";
$showdata = mysqli_query($co, $showquery);
$arrdata = mysqli_fetch_array($showdata);

if (isset($_POST['regi'])) {
    $ids= $_GET['id'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $addr = $_POST['add'];


  //$que = "INSERT INTO sales ( customer_id, order_id, total_amount) VALUES ('$name','$phone','$addr' )";//
  $query="UPDATE sales SET  customer_id='$name', order_id='$phone',total_amount='$addr' WHERE customer_id=$ids";

  $res=mysqli_query($co, $query);
 
  if ($res) {
    ?>
  <script>
    alert("updateded");
  </script>
<?php
  header('location:sales.php'); }
  else
  {
    ?>
<script>
  alert("not updateded");
</script>  
<?php
}
}
?>
        <h1>Add sales </h1>
        <label for="name">customer id</label><br>
        <input type="text" style="color: red;" id="name" name="name" placeholder=" customer id"value="<?php echo $arrdata['customer_id'];?>">
        <br>
        <label for="phone no">order id</label><br>
    <input type="tel",id="phone no" name="phone" placeholder="order id"value="<?php echo $arrdata['order_id'];?>"><br>
    <label for="address">total amt</label><br>
    <input type="text" name="add" id="address" cols="30" ro ws="10"  placeholder="total"value="<?php echo $arrdata['total_amount'];?>"><br>
    
    <div class="b">
      <a href="cust.php"><input type="submit" name="regi" value="update" ></a>
    
  </div>

</form>
</section>
</body>
</html>

?>