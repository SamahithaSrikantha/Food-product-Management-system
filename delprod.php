<?php

include 'connect.php';

$id = $_GET['id'];

$deletequery =" DELETE FROM products where item_id=$id ";

$query = mysqli_query($co, $deletequery);

if($query) {
?>
<script>
alert("Delete");
</script>
<?php
        header('location:Products.php');
}
else
{?>
    <script>
alert("not Delete");
</script>
<?php
}
?>