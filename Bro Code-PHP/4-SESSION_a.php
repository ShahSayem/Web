<?php 
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    This is the session-1 page <br>
    <a href="4-SESSION_b.php">This goes to the session-2 page</a> <br>

    <form action="4-SESSION_a.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username"><br>
        <label>Password:</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>

<?php 
    if(isset($_POST["login"])){
        if(!empty($_POST["username"]) && !empty($_POST["password"])){
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            echo $_SESSION["username"]."<br>";
            echo $_SESSION["password"]."<br>";

            header("Location: 4-SESSION_b.php");
        }
        else {
            echo "Please enter username and password<br>";
        }
    }
?>