<?php include('Auth.php') ?>
<html>
<head>
<title>Login page</title>
</head>
<body>
<table align="center">
<tr>
<td colspan="2" height="150px"></td>
</tr>
<form action="auth.php" method="post">
<tr>
<td>UserID</td>
<td><input type="text" name="txtUsr
	=" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="txtPwd" /> <input type="submit" name="btnLogin" value="Login" /></td>
</tr>
</form>
</table>
</body>
</html>