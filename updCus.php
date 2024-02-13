<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ide.css">
    <title>Butthi Foods</title>
  
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
      $showquery = "SELECT* from customer where customer_id={$id}";
$showdata = mysqli_query($co, $showquery);
$arrdata = mysqli_fetch_array($showdata);

if (isset($_POST['regi'])) {
  $ids= $_GET['id'];

  $name = $_POST['name'];
  $addr = $_POST['add'];
  $phone = $_POST['phone'];
  $emid = $_POST['eid'];

  //$que = "INSERT INTO customer( name, address, phone, email) VALUES ('$name','$addr','$phone','$emid')";//
  $query="UPDATE customer SET name='$name',address='$addr',phone='$phone',email='$emid' WHERE customer_id=$ids";
        
  $res=mysqli_query($co, $query);

  if ($res) {
    ?>
  <script>
    alert("updated");
  </script>
<?php
        header('location:cust.php');
  }else{
    ?>
<script>
  alert("not updated");
</script>  
<?php
}
}
?> 
        <h1>sign-up </h1>
        <label for="name">name</label><br>
        <input type="text" style="color: red;" id="name" name="name" placeholder="name"  value="<?php echo $arrdata['name'];?>" >
        <br>
        <label for="phone no">ph no</label><br>
    <input type="tel",id="phone no" name="phone" placeholder="ph" value="<?php echo $arrdata['phone'];?>"><br>
    <label for="address">address</label><br>
    <textarea name="add" id="address" cols="30" ro ws="10"  placeholder="address" value="<?php echo $arrdata['address'];?>"></textarea><br>
    <label for="id">email id</label><br>
    <input type="email" name="eid" id="id"  placeholder="email" value="<?php echo $arrdata['email'];?>"><br>
    <div class="b">
      <a href="home.html"><input type="submit" name="regi" value="update" ></a>
    
  </div>
  <button id="bt"><a href="home.html">all ready registered</a></button>
</form>
</section>
</body>
</html>
