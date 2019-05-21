<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
   if (isset($_POST["height"])&&isset($_POST["weight"])) {
       $height = (int)$_POST["height"];
       $weight = (int)$_POST["weight"];
       $bmi = $weight/($height*$height);
       echo $bmi;
   }
?>
    <div class="container">
        <div>
            <h1>Calculation BMI(Body Mass Index)</h1>
        </div>
        <div>
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Height:</label>
                    <input type="text" class="form-control" name="height" id="exampleInputEmail1"  placeholder="Enter height">
                 </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Weight:</label>
                    <input type="text" class="form-control" name="weight" id="exampleInputPassword1" placeholder="Enter weight">
                </div>
                <button type="submit" class="btn btn-primary">Calculate</button>
            </form>
        </div>
</body>
</html>