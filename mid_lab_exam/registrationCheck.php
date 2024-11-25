<?php
    session_start();

    if(isset($_POST['submit'])){

        $username  =  trim($_REQUEST['username']);
        $password  =  trim($_REQUEST['password']);

        if($username == null || empty($password) ){
            echo "Null data found!";
        }else if ($username == $password){
            //echo "Valid User!";
            $_SESSION['flag'] = true;
            $_SESSION['username'] = $username;
            header('location: home.php');
        }else{
            echo "Invalid user";
        }
    }else{
        //echo "Invalid request!";
        header('location: login.html');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>
<body>
    <h2>Registration Form</h2>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br>
        Email: <input type="email" name="email" required><br>
        Password: <input type="password" name="password" required><br>
        Date of Birth: <input type="date" name="dob" required><br>
        Country: <input type="text" name="country" required><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>