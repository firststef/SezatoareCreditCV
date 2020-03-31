<!DOCTYPE HTML>
<html>
<body>

<form action="login.php" method="post">
    Name: <input type="text" name="user"><br>
    Password: <input type="text" name="parola"><br>
    <input type="hidden" name="actiune" value="autentificare">
    <input type="submit">
</form>
<input type="button" value="Inregistrare" onclick="location.href='register.php';" />
</body>
</html>
