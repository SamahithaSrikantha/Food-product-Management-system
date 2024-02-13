<?php

include 'connect.php';

$id = $_GET['id'];

$deletequery =" DELETE FROM orders where order_id=$id ";

$query = mysqli_query($co, $deletequery);

if($query) {
?>
<script>
alert("Delete");
</script>
<?php
        header('location:orders.php');
}
else
{?>
    <script>
alert("not Delete");
</script>
<?php
}
?>