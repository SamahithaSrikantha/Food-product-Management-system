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

        <h1>Add expence </h1>
        <label for="name">product name</label><br>
        <input type="text" style="color: red;" id="name" name="name" placeholder=" product name">
        <br>
        <label for="phone no">cost</label><br>
    <input type="tel",id="phone no" name="phone" placeholder="cost"><br>
    <label for="address">total</label><br>
    <textarea name="add" id="address" cols="30" ro ws="10"  placeholder="total"></textarea><br>
    <label for="id">description</label><br>
    <input type="email" name="eid" id="id"  placeholder="desc"><br>
    <div class="b">
      <a href="cust.php"><input type="submit" name="regi" value="add" ></a>
    
  </div>
  <button id="bt"><a href="home.html">all ready registered</a></button>
</form>
</section>
</body>
</html>
<?php include 'connect.php';

if (isset($_POST['regi'])) {
  $name = $_POST['name'];
  $addr = $_POST['add'];
  $phone = $_POST['phone'];
  $emid = $_POST['eid'];

  $que = "INSERT INTO expences( product_name, cost, total, descriptor) VALUES ('$name','$addr','$phone','$emid')";

  $res=mysqli_query($co, $que);
  header('location:orders.php');
  if ($res) {
    ?>
  <script>
    alert("addeded");
  </script>
<?php
  }else{
    ?>
<script>
  alert("not addeded");
</script>  
<?php
}
}
?>