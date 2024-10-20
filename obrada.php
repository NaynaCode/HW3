<?php
    require "dbBroker.php";
    require "model/prijava.php";
    require "handler/delete.php";
    require "handler/add.php";
    require "handler/get.php";
    require "handler/update.php";

    // echo "obrada..";

    header("Location: home.php");

?>