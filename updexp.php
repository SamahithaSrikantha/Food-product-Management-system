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
 $showquery = "SELECT* from expences where product_name='{$id}'";
$showdata = mysqli_query($co, $showquery);
$arrdata = mysqli_fetch_array($showdata);

if (isset($_POST['regi'])) {
    $ids= $_GET['id'];
  $name = $_POST['name'];
  $addr = $_POST['add'];
  $phone = $_POST['phone'];
  $emid = $_POST['eid'];

 // $que = "INSERT INTO expences( product_name, cost, total, descriptor) VALUES ('$name','$addr','$phone','$emid')";//

 $query="UPDATE expences SET product_name='$name',cost='$addr',total='$phone',descriptor='$emid' WHERE product_name='$ids'";
        
  $res=mysqli_query($co, $query);
  
  if ($res) {
    ?>
  <script>
    alert("updated");
  </script>
<?php
  header('location:expence.php');
}else{
    ?>
<script>
  alert("not updateed");
</script>  
<?php
}
}
?>
        <h1>Add expence </h1>
        <label for="name">product name</label><br>
        <input type="text" style="color: red;" id="name" name="name" placeholder=" product name" value="<?php echo $arrdata['product_name'];?>">
        <br>
        <label for="phone no">cost</label><br>
    <input type="tel",id="phone no" name="phone" placeholder="cost" value="<?php echo $arrdata['cost'];?>"><br>
    <label for="address">total</label><br>
    <input name="add" id="address" cols="30" ro ws="10"  placeholder="total" value="<?php echo $arrdata['total'];?>"><br>
    <label for="id">description</label><br>
    <input type="text" name="eid" id="id"  placeholder="desc" value="<?php echo $arrdata['descriptor'];?>"><br>
    <div class="b">
      <a href="cust.php"><input type="submit" name="regi" value="update" ></a>
    
  </div>
  <button id="bt"><a href="home.html">all ready registered</a></button>
</form>
</section>
</body>
</html>
