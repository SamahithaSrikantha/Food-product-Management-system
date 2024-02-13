<?php

include 'connect.php';

$id = $_GET['id'];

$deletequery =" DELETE FROM sales where customer_id=$id ";

$query = mysqli_query($co, $deletequery);

if($query) {
?>
<script>
alert("Delete");
</script>
<?php
        header('location:sales.php');
}
else
{?>
    <script>
alert("not Delete");
</script>
<?php
}
?>