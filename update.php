<?php
//Check if button update has been clicked
if (isset($_GET["my_id"])){
    $received_id = $_GET["my_id"];
    $received_name = $_GET["my_name"];
    $received_email = $_GET["my_email"];
    $received_pass = $_GET["my_pass"];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
    <script src="bootstrap/js/jquery.min.js"></script>
    <script src="bootstrap/js/popper.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/custom.css">
</head>
<body>
<div class="row">
    <div class="col-3"></div>
    <div class="col-6">
        <h1 class="text-info, text-center">Updating user</h1>
        <form action="update_handler.php" method="post">
            <input value="<?php echo $received_id;?>" type="hidden" name="a">
            <div class="form-group">
                <input value="<?php echo $received_name;?>"type="text" class="form-control" placeholder="Update name" name="x">
            </div>
            <div class="form-group">
                <input value="<?php echo $received_email;?>" type="email" class="form-control" placeholder="Update email" name="y">
            </div>
            <div class="form-group">
                <input value="<?php echo $received_pass;?>" type="password" class="form-control" placeholder="Update password" name="z">
            </div>
            <div>
                <input type="submit" class="btn btn-outline-info btn-block" value="Update" name="btn_update">
                <a href="users.php" class="btn btn-outline-danger btn-block">Cancel</a>
            </div>
        </form>
    </div>
    <div class="col-3"></div>

</div>

</body>
</html>
