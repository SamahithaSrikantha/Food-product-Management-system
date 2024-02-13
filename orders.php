

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
    <?php include('link.php');
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
 <h1 class="text-warning text-center" > Our Orders   </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> o-id</th>
 <th> c_id</th>
 <th>bill_no</th>
 <th>purchace date</th>
 <th> delivary date</th>
 <th> i_id</th>
 <th> product name</th>
 <th>total amount</th>
 <th> paid status</th>
 <th> quantity</th>
 <th> update</th>
 <th>delete</th>
 <th> Add </th>
 </tr >
 <tbody>
 <?php
 include('connect.php');
 include('link.php');
$que = "SELECT * from orders";

$query = mysqli_query($co, $que);
                           
while($res =mysqli_fetch_array($query)) {
    ?>  
    
    <tr>
    <td><?php echo $res['order_id'];?></td>
    <td><?php echo $res['customer_id'];?></td>
    <td><?php echo $res['bill_no'];?></td>
    <td><?php echo $res['purchase_date'];?></td>
    <td><?php echo $res['delivery_date'];?></td>
    <td><?php echo $res['item_id'];?></td>
    <td><?php echo $res['item_names'];?></td>
    <td><?php echo $res['total_amount'];?></td>
    <td><?php echo $res['paid_status'];?></td>
    <td><?php echo $res['quantity'];?></td>
    <td><a href="updord.php?id=<?php echo $res['order_id'];?>"><i class="fa fa-edit" aria-hidden="true"></i></a></td>
    <td><a href="delord.php?id=<?php echo $res['order_id'];?>"><i class="fa fa-trash" aria-hidden="true"></i></td>
    <td><a href="addord.php"><?php echo 'add';?></a></td>
    
</tr>
<?php
}  
 ?>  
 </tbody>
</body>
</html>