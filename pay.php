<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>butthi foods</title>
</head>
<style>
    <?php include 'pay.css';?>
</style>
<body>
<?php include 'connect.php';

?>
 
    <form action="" method="POST">
    <h1 class="h">Thank you for selecting our product</h1>
    <img id="pay" src="img\WhatsApp Image 2023-01-29 at 11.35.14 PM (1).jpeg" alt="">
    <h2 class="h">please make payment of rps mentioned before for the selected produt</h2>
<a href="product.php">
<button #id="p" name="paid">i have made my payment</button>
            </a>

</form>

>
<div>

    <?php
if(isset($_POST['paid'])){
    // echo"
    ?>

<?php
        header('location:product.php');
    }
    ?>
<!-- <script> -->
    alert('Congradulations!!! Brother  abhabaa lotery  order placed');
    // window.location.href='C:\xampp\htdocs\dbms\product.php';
<!-- </script> -->
</div>

</body>
</html>
