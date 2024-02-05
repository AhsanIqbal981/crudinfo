<?php

include 'connect.php';

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<div class="container">
    <div class="btn btn-primary my-5"> <a href="user.php" class="text-light">Add User</a></div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col"> Sr No</th>
                <th scope="col">Name</th>
                <th scope="col">email</th>
                <th scope="col">mobile</th>
                <th scope="col">password</th>
                <th scope="col">operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $sql = " select * from  `info`";
            $result = mysqli_query($con, $sql);
            // $row = mysqli_fetch_assoc($result); 
            while ($row = mysqli_fetch_assoc($result)) {
                $sr = $row['sr no'];
                $name = $row['name'];
                $email = $row['email'];
                $mobile = $row['num'];
                $password = $row['pass'];

                echo '   <tr>
                <th scope=""> ' . $sr . '</th>
                <td>' . $name . '</td>
                <td>' . $email . '</td>
                <td>' . $mobile . '</td>
                <td>' . $password . '</td>
                <td>  
                <button class = "btn btn-primary" ><a href="update.php?updateid=' . $sr . '" class ="text-light">update</a></button>
                <button class = "btn btn-danger"><a href="delete.php?deleteid=' . $sr . '" class ="text-light">delete</a></button>
                 </td>
              </tr>';
            }


            ?>
        </tbody>
    </table>
</div>

<body>

</body>

</html>