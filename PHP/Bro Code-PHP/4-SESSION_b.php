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
    This is the session-2 page <br>
    <a href="4-SESSION_a.php">This goes to the session-1 page</a> <br>

    <form action="4-SESSION_b.php.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>
</html>

<?php
    echo $_SESSION["username"]."<br>";
    echo $_SESSION["password"]."<br>";

    if(isset($_POST["logout"])){
        session_destroy();

        header("Location: 4-SESSION_a.php");
    }
?>