<?php
//Check if button update has been clicked
if (isset($_POST["btn_update"])){
    $id = $_POST["a"];
    $update_name = $_POST["x"];
    $update_email = $_POST["y"];
    $update_password = $_POST["z"];
    $encrypted_password = md5($updated_password);

    //Connect to the db
    require_once "db_connection.php";
    //Prepare an update query
    $update_query = "UPDATE `users` SET `jina`='$update_name',
    `arafa`='$update_email',`siri`='$encrypted_password' WHERE id='$id'";

    //Finally update the user by use of mysqli_query()
    $update = mysqli_query($connection, $update_query);

    //Check if the updating was successful
    if (isset($update)){
        //Redirect back to the users.php to see the changes
        header("location:users.php");
    }else{
        echo "Updating failed";
    }
}