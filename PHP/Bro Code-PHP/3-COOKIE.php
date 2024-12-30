<?php
    //        key          value       time  seconds path
    setcookie("language", "english", time() + 86400, "/");
    setcookie("color", "black", time() + (86400 * 2), "/");

    //This is to delete a cookie
    // setcookie("color", "black", time()-0, "/");

    foreach($_COOKIE as $key => $value){
        echo"$key: $value <br>";
    }

    if (isset($_COOKIE["language"])){
        $lang  = $_COOKIE["language"];
        echo"Language set to $lang<br>";
    } 
    else if (isset($_COOKIE["color"])){
        $color = $_COOKIE["color"];
        echo"Color set to $color<br>";
    }
    else {
        echo"No Language or Color is set<br>";
    }
?>