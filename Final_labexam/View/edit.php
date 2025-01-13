<?php
    session_start();
    if(isset($_COOKIE['flag'])){

        if(isset($_REQUEST['id'])){
            echo $_REQUEST['id'];
            $_SESSION['id'] = $_REQUEST['id'];
        }
        $employee = ['id'=>1, 'empname'=>'Sakib', 'contact_no'=>'01795408189', 'username'=>'employee', 'password'=>123];
        /*foreach ($employeers  as $index => $value1) {
                        $value2 = $array2[$index];
            // do stuff with $value1 and $value2 here
        }*/
?>

<html>
<head>
    <title>Signup</title>
</head>
<body>
        <h2> Edit Employee </h2>
        <form method="post" action="update.php" enctype="">
            empname: <input type="text" name="empname" value="<?=$employee['empname']?>" /> <br>
            contact_no: <input type="number" name="contact_no" value="<?=$user['contact_no']?>" /> <br>
            username: <input type="text" name="username" value="<?=$employee['username']?>" /> <br>
            Password: <input type="password" name="password" value="<?=$employee['password']?>" /> <br>
            <input type="submit" name="submit" value="Update" />
        </form>
</body>
</html>

<?php
    }else{
        header('location: login.html'); 
    }
?>