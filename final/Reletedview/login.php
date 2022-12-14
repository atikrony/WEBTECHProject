<?php include "../Controller/loginP.php"; ?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="reg.css">
<title>Login Form</title>
</head>
<body>
    <div>

<form action="" class="form-center" method="post">
    <h1 class = "h1bg">Login Form</h1>
<table>
<tr>
<td>Username:</td>
<td><input type="text" name="username" id="username" onkeyup= "checkUsername()" placeholder="Username"></td>
</td>
<td><p id="errorusername"><?php echo $username; ?> </td>
</tr>
<tr>
<td>Password:</td>
<td><input type="password" name="password" id ="password" onkeyup="checkPassword()" placeholder="Password"> </td>
<td><p id="errorpass"><?php echo $password; ?></td>
</td>
</tr>
<tr>
<td><input type="submit" class="shape submit" value="Login"></td>
</tr>

<tr>
    <td>
        <h3>Don't have an account? <a class = a href="../Reletedview/AdminFormJson.php">Register</a> here</h3>
    </td>
</tr>

</table>



</form>
</div>

<script src="../js/javas.js"></script>

</body>

</html>