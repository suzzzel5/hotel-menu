<?php
    $username="";
    $password="";
    if(isset($_COOKIE['username'])){
        $username=$_COOKIE['username'];
        $password=$_COOKIE['password'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="main-content">
		<div class="title">loginUser <Form></Form>
	<form action="loginCheck.php" method="post" enctype="multipart/form-data">
        <label>User name</label>
        <input type="text" name="username" values=<?php echo $username; ?>>
        <label>password</label>
        <input type="password" name="password" values=<?php echo $password; ?>>
        <!-- <label>Retype password</label> -->
        <!-- <input type="text" name="password"> -->
        <input type="submit" value="log In" class="btn success">
    </form> 
	</div>
</div>
</body>
</html>