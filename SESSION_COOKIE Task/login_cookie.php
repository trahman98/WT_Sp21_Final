<?php
    $uname = "";
    $pass = "";

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $uname = $_POST["uname"];
        $pass = $_POST["pass"];

        if($uname == "Jubayer" && $pass == "123456"){
            setcookie("user",$uname,time() + 120,"/");
            header("Location: dashboard_cookie.php");
        }
    }

    ?>
    <html>
        <head></head>
        <body>
            <form method ="post">
                <input type = "text" name ="uname" placeholder = "username"><br>
                <input type = "password" name ="pass" placeholder = "password"><br>
                <input type = "submit" vale = "login">
            </form>
        </body>
    </html>