<?php
include("menu.php");
?>
<div class="main-content">
		<div class="title">User <Form></Form>
	<form action="saveUser.php" method="post" >
        <label>User name</label>
        <input type="text" name="username">
        <label>password</label>
        <input type="password" name="password">
        <label>Retype password</label>
        <input type="text" name="repassword">
        <input type="submit" value="Register">
    </form>
        
	</div>
</div>
</body>
</html>
