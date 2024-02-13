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
 $showquery = "SELECT* from products where item_id={$id}";
$showdata = mysqli_query($co, $showquery);
$arrdata = mysqli_fetch_array($showdata);

if (isset($_POST['regi'])) {
    $ids= $_GET['id'];
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $addr = $_POST['add'];
  $emid = $_POST['eid'];
  $stk = $_POST['rstk'];
//  $que = "INSERT INTO products( name, cost, type_desc, stock_available, stock_remaining) VALUES ('$name','$phone','$addr','$emid','$stk')";//
$query="UPDATE products SET name='$name',type_desc='$addr',cost='$phone',stock_available='$emid',stock_remaining='$stk' WHERE item_id=$ids";

  $res=mysqli_query($co, $query);
 
  if ($res) {
    ?>
  <script>
    alert("updateded");
  </script>
<?php
   header('location:Products.php');
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
        <h1>Add expence </h1>
        <label for="name">product name</label><br>
        <input type="text" style="color: red;" id="name" name="name" placeholder=" product name"value="<?php echo $arrdata['name'];?>">
        <br>
        <label for="phone no">cost</label><br>
    <input type="tel",id="phone no" name="phone" placeholder="cost"value="<?php echo $arrdata['cost'];?>"><br>
    <label for="address">description</label><br>
    <input name="add" id="address" cols="30" ro ws="10"  placeholder="description"value="<?php echo $arrdata['type_desc'];?>"><br>
    <label for="id">stock available</label><br>
    <input type="text" name="eid" id="id"  placeholder="Available stock"value="<?php echo $arrdata['stock_available'];?>"><br>
    <label for="id">stock remaining</label><br>
    <input type="text" name="rstk" id="id"  placeholder="remaining stock"value="<?php echo $arrdata['stock_remaining'];?>"><br>
    <div class="b">
      <a href="cust.php"><input type="submit" name="regi" value="update" ></a>
    
  </div>
  
</form>
</section>
</body>
</html>
