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

        <h1>Add sales </h1>
        <label for="name">customer id</label><br>
        <input type="text" style="color: red;" id="name" name="name" placeholder=" customer id">
        <br>
        <label for="phone no">order id</label><br>
    <input type="tel",id="phone no" name="phone" placeholder="order id"><br>
    <label for="address">total amt</label><br>
    <input type="text" name="add" id="address" cols="30" ro ws="10"  placeholder="total"><br>
    
    <div class="b">
      <a href="cust.php"><input type="submit" name="regi" value="add" ></a>
    
  </div>

</form>
</section>
</body>
</html>
<?php include 'connect.php';

if (isset($_POST['regi'])) {
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $addr = $_POST['add'];


  $que = "INSERT INTO sales ( customer_id, order_id, total_amount) VALUES ('$name','$phone','$addr' )";

  $res=mysqli_query($co, $que);
 
  if ($res) {
    ?>
  <script>
    alert("addeded");
  </script>
<?php
  header('location:sales.php'); }else{
    ?>
<script>
  alert("not addeded");
</script>  
<?php
}
}
?>