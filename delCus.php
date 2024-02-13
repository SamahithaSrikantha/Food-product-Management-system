<?php

include 'connect.php';

$id = $_GET['id'];

$deletequery =" DELETE FROM customer where customer_id=$id ";

$query = mysqli_query($co, $deletequery);

if($query) {
?>
<script>
alert("Delete");
</script>
<?php
        header('location:cust.php');
}
else
{?>
    <script>
alert("not Delete");
</script>
<?php
}
?>