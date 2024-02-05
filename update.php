<?php
include 'connect.php';
$id = $_GET['updateid'];
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "UPDATE `info` SET `name` = '$name', `email` = '$email', `num` = '$mobile',`pass` = '$password' WHERE `info`.`sr no` = '$id'";
    $result = mysqli_query($con, $sql);
    if ($result) {
        header('location:display.php');
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container my-5">
        <h1>Enter your data!</h1>
        <form method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input name="name" type="text" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">email</label>
                <input name="email" type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">mobile</label>
                <input name="mobile" type="text" class="form-control" id="mobile" placeholder="Enter your mobile number">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">password</label>
                <input name="password" type="text" class="form-control" id="password" placeholder="Enter your password">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Update</button>
        </form>


    </div>
</body>

</html>