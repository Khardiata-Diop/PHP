<?php
    session_start();
    if(isset($_GET["nickname"])){
        $_SESSION["nickname"] = $_GET["nickname"];
        echo "mise en session";
    }
?>