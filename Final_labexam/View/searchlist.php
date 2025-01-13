<?php
    session_start();

    require_once('../Model/empModel.php');

    if(isset($_COOKIE['flag'])){

    $employee = getAllEmployee();
?>

<html lang="en">
<head>
    <title>Search List</title>
    <script>
        function searchEmployee() {
            let query = document.getElementById('search').value;
            let xhttp = new XMLHttpRequest();
            xhttp.open('POST', 'searchEmployee.php', true);
            xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
            xhttp.send('query=' + query);

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('employeeTable').innerHTML = this.responseText;
                }
            }
        }
    </script>
</head>
<body>
        <h2>Search List </h2>
        <a href="home.php">Back</a> |
        <a href="logout.php">logout</a>

        <input type="text" id="search" onkeyup="searchEmployee()" placeholder="Search by name..." />

        <table border=1> 
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Empname</th>
                    <th>Contact_no</th>
                    <th>Username</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody id="employeeTable">
                <?php 
                    for($i=0; $i< count($employee); $i++){
                ?>
                <tr>
                    <td><?php echo $employee[$i]['id']; ?></td>
                    <td><?php echo $employee[$i]['empname']; ?></td>
                    <td><?php echo $employee[$i]['contact_no']; ?></td>
                    <td><?php echo $employee[$i]['username']; ?></td>
                     
                    <td>
                        <a href='edit.php?id=<?=$employee[$i]['id']?>'> EDIT </a> |
                        <a href='delete.php?id=<?=$employee[$i]['id']?>'> DELETE </a> 
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
</body>
</html>

<?php
    }else{
        header('location: login.html'); 
    }
?>
