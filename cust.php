

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    <?php 
 include('admin.css');?>
</style>
<body>
<div class="cotaier" id="header">
        
        <nav class="tab">
            <img id="m" src="./img/WhatsApp Image 2023-01-05 at 10.51.31 PM.jpeg "alt="">
            <ul class="col-md-10">
             <li class="col-md-2"><a href="cust.php">Customers</a></li>
            <li class="col-md-2"><a href="expence.php">expences</a></li>
            <li class="col-md-2"><a href="orders.php">orders</a></li>
            <li class="col-md-2"><a href="Products.php">product</a></li>
            <li class="col-md-2"><a href="sales.php">sales</a></li>    
       
            </ul>
        </nav>
    </div>

    <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Consumer Data    </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 <th> Consumer_id</th>
 <th> Name </th>
 <th> Address</th>
 <th>phone number</th>
 <th>email</th>
 <th> Update </th>
 <th> Delete </th>
 <th> Add </th>

 </tr >
 <tbody>
 <?php
 include('connect.php');
 include('link.php');
$que = "SELECT * from customer";

$query = mysqli_query($co, $que);
                           
while($res =mysqli_fetch_array($query)) {
    ?>  
    
    <tr>
    <td><?php echo $res['customer_id'];?></td>
    <td><?php echo $res['name'];?></td>
    <td><?php echo $res['address'];?></td>
    <td><?php echo $res['phone'];?></td>
    <td><?php echo $res['email'];?></td>
    <td class="edit"><a href="updCus.php?id=<?php echo $res['customer_id'];?>"> <i class="fa fa-edit" aria-hidden="true"></i></a></td>
    <td class="del"><a href="delCus.php?id=<?php echo $res['customer_id'];?>"><i class="fa fa-trash" aria-hidden="true"></i></a></td>
    <td><a href="addcust.php"><?php echo 'add';?></a></td>
</tr>
<?php
}  
 ?>  
 </tbody>
</body>
</html>