<?php 

    if(!isset($_SESSION["lang"])) {
        $_SESSION["lang"] = "en";
    }else if(isset($_GET["lang"]) && $_SESSION["lang"] != $_GET["lang"] && !empty($_GET["lang"])) {
        if($_GET["lang"] == "en"){
            $_SESSION["lang"] = "en";
        }else if($_GET["lang"] == "al"){
            $_SESSION["lang"] = "al";
        }else if($_GET["lang"] == "ge"){
            $_SESSION["lang"] = "ge";
        }
    }

    require_once $_SESSION["lang"] . ".php";
?>