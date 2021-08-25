<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Users</title>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
</head>
<body>
<a href="register.php" class="btn btn-outline-info btn-block">Add Users</a>
    <h1 class="text-info text-center">System Users</h1>
<table class="table table-dark table-hover">
    <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Delete</th>
        <th>Update</th>
    </tr>
    <?php
    //Connect to the database to fetch data
    require_once "db_connection.php";
    //Prepare select query
    $select_query ="SELECT * FROM `users` WHERE 1";

    //Use the mysqli_query() to fetch the users
    $Users = mysqli_query($connection, $select_query);

    //Write a loop to display the respective users from the db
    while ($row = mysqli_fetch_assoc($Users)){
        extract($row);
        echo "<tr>
                <td>$jina</td>
                <td>$arafa</td>
                <td><a class='btn btn-danger' href='delete.php?my_id=$id'>Delete</a></td>
                <td><a class='btn btn-info' href='update.php?my_id=$id&my_name=$jina&my_email=$arafa&my_pass=$siri'>Update</a></td>
               </tr>" ;
    }
    ?>

</table>
</body>
</html>
