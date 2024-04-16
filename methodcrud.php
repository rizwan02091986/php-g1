<?php

                include("config/one.php");

                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
                    $image = $_FILES['image']['name'];
            
                    $sql = "insert into image (username , email , password, image) values ('$username', '$email', '$password', '$image')";
                    $result = mysqli_query($conn , $sql);
                    


                if(isset($_FILES['image'])){
                    $file_name = $_FILES['image']['name'];
                    $file_type = $_FILES['image']['type'];
                    $file_size = $_FILES['image']['size'];
                    $file_tmp = $_FILES['image']['tmp_name'];
            
                    move_uploaded_file($file_tmp , "upload/" .$file_name);

                }
            }

                ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
    <style>
        body {
            background-color: black;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-grp">
                        <label for="">Username</label>
                        <input type="text" class="form-control" name="username" id="">
                    </div>
                    <div class="form-grp">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" id="">
                    </div>
                    <div class="form-grp">
                        <label for="">Password</label>
                        <input type="password" class="form-control" name="password" id="">
                    </div>
                    <div class="form-grp">
                        <label for="">Select Your Image</label>
                        <input type="file" class="form-control" name="image" id="">
                    </div>
                    <input type="submit" class="btn btn-success mt-3" value="submit" name="submit">
                </form>
            </div>
            <div class="col-lg-6">
                <?php

                include("config/one.php");

                echo "<pre>";
                print_r($_POST);
                echo "</pre>";

                echo "<pre>";
                print_r($_FILES);
                echo "</pre>";


                ?>
            </div>
        </div>
    </div>

</body>

</html>