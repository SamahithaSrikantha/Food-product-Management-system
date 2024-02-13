<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/WhatsApp Image 2023-01-05 at 10.51.31 PM.jpeg" type="image/x-icon">
    <title>Butthi Foods</title>
    <link rel="stylesheet" href="ide.css">
  
</head>
<style>
  <?php include "ide.css"; ?>
</style>

<body class="bg">
    <section class="regi">
      <form action="" method="POST">

        <h1>sign-up </h1>
        <label for="name">name</label><br>
        <input type="text" style="color: red;" id="name" name="name" placeholder="name">
        <br>
        <label for="phone no">ph no</label><br>
    <input type="tel",id="phone no" name="phone" placeholder="ph"><br>
    <label for="address">address</label><br>
    <textarea name="add" id="address" cols="30" ro ws="10"  placeholder="address"></textarea><br>
    <label for="id">email id</label><br>
    <input type="email" name="eid" id="id"  placeholder="email"><br>
    <div class="b">
      <a href="home.html"><input type="submit" name="regi" value="submit" ></a>
    
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

  $que = "INSERT INTO customer( name, address, phone, email) VALUES ('$name','$addr','$phone','$emid')";

  $res=mysqli_query($co, $que);
 
  if ($res) {
    ?>
  <script>
    alert("inserted");
  </script>
<?php
   header('location:home.php');}else{
    ?>
    <script>
  alert("not inserted");
</script>  
<?php
}
}
?>
