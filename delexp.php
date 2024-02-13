<?php

include 'connect.php';

$id = $_GET['id'];

$deletequery =" DELETE FROM expences where product_name='$id' ";

$query = mysqli_query($co, $deletequery);

if($query) {
?>
<script>
alert("Delete");
</script>
<?php
        header('location:expence.php');
}
else
{?>
    <script>
alert("not Delete");
</script>
<?php
}
?>