<?php

    echo "<pre>";
    print_r($_POST);
    echo "</pre>"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <form action="" method="post">
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
                        <label for="">Select Your Course</label><br>
                        <input type="radio" name="course" value="Flutter">Flutter <br>
                        <input type="radio" name="course" value="Python">Python <br>
                        <input type="radio" name="course" value="JAVA">JAVA <br>
                        <input type="radio" name="course" value="NEXT JS">NEXT JS <br>
                    </div>

                    <div class="form-grp">
                        <label for="">Select Your Food</label><br>
                        <input type="checkbox" name="food[]" value="Fries">Fries <br>
                        <input type="checkbox" name="food[]" value="Steak">Steak <br>
                        <input type="checkbox" name="food[]" value="Sandwich">Sandwich <br>
                        <input type="checkbox" name="food[]" value="Burger">Burger <br>
                    </div>

                    <input type="submit" class="btn btn-dark mt-3" value="Submit" name="Submit">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>