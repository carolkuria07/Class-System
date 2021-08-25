<?php

if (!isset($_POST["btn_reg"])) {
    ///Receive the values from the user
    $Name = $_POST["x"];
    $Email = $_POST["y"];
    $Pass = $_POST["z"];
    $encrypted_password = md5($Pass);

    //Connect to the database to start saving
    require_once "db_connection.php";

    //To save the data prepare the INSERT query
    $insert_query = "INSERT INTO `users`(`id`, `jina`, `arafa`, `siri`) 
                    VALUES (null,'$Name','$Email','$encrypted_password')";

    //Finally the save the data using the mysqli_query
    $Save = mysqli_query($connection, $insert_query);

    //Check if the connection was successful
    if (isset($Save)) {
        header("location:register.php");
    } else {
        echo "User registration failed";
    }
}