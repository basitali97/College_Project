<?php

include "db_conn.php";

?>

<?php

if(isset($_POST['submit'])){
    $uname=$_POST['username'];
    $pass=$_POST['password'];
    $sql = "select username,password from login where username = '$uname' and password = '$pass'";  
    $result = mysqli_query($con, $sql); 
    if(mysqli_num_rows($result)>0){
        echo "Successful";
    }  
    else{
        echo "Unsuccessful";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css"  href="style.php">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>


    <div class="card text-center">
        <div class="card-header p-3">
            <h3>Rajkiya Engineering College,Banda</h3>
        </div>
    </div>


    <div class="container mt-5 ">
        <div class="d-flex justify-content-center h-100">
            <div class="card">
                <div class="card-body m-4">
                    <form method="POST" action="index.php">
                        <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="username" class="form-control" id="username" placeholder="Username" required>
                            
                        </div>
                        <div class="input-group form-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control" id="pass" placeholder="Password" required>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" type="submit" class="btn btn-primary" name="submit">Log In</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
</html>