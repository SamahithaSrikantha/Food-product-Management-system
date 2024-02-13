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
    <label for="address">description</label><br>
    <input name="add" id="address" cols="30" ro ws="10"  placeholder="description">><br>
    <label for="id">stock available</label><br>
    <input type="text" name="eid" id="id"  placeholder="Available stock"><br>
    <label for="id">stock remaining</label><br>
    <input type="text" name="rstk" id="id"  placeholder="remaining stock"><br>
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
  $phone = $_POST['phone'];
  $addr = $_POST['add'];
  $emid = $_POST['eid'];
  $stk = $_POST['rstk'];
  $que = "INSERT INTO products( name, cost, type_desc, stock_available, stock_remaining) VALUES ('$name','$phone','$addr','$emid','$stk')";

  $res=mysqli_query($co, $que);
 
  if ($res) {
    ?>
  <script>
    alert("addeded");
  </script>
<?php
   header('location:Products.php');
  }
  else{
    ?>
<script>
  alert("not addeded");
</script>  
<?php
}
}
?>