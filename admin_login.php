<?php

session_start();

include("connect.php");



if (isset($_POST['logi'])) {
	//something was posted
	$user_name = $_POST['username'];
	$password = $_POST['password'];

	if (!empty($user_name) && !empty($password) && !is_numeric($user_name)) {

		//read from database
		$query = "select * from login where username = '$user_name' limit 1";
		$result = mysqli_query($co, $query);

		if ($result) {
			if ($result && mysqli_num_rows($result) > 0) {

				$user_data = mysqli_fetch_assoc($result);

				if ($user_data['password'] === $password) {

					$_SESSION['user_id'] = $user_data['user_id'];
					header("Location: cust.php");
					die;
				}
			}
		}

		echo "wrong username or password!";
	} else {
		echo "wrong username or password!";
	}
}

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Butthi Foods

    </title>
</head>
<body>
    <section><center>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">

	<h1>Admin login</h1>
	<label for="id">user id</label><br>
	<input type="text" name="username" id="id"><br>
	<label for="pass">enter passward</label><br>
	<input type="password" name="password" id="pass"><br>
	<label for="sub"></label><br>
	<input type="submit" name="logi" value="submit">
</form>
</center></section>
</body>
</html>