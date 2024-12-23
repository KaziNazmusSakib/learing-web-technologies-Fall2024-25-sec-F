<?php
    session_start();
    require_once('../model/usermodel.php');  

    // Check if the user is logged in
    if (isset($_COOKIE['flag'])) {
        // Fetch all users from the database
        $users = getAllUsers();

?>

<html lang="en">
<head>
    <title>User List</title>
</head>
<body>
        <h2>User List</h2>
        <a href="home.php">Back</a> |
        <a href="logout.php">logout</a>

        <table border="1"> 
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            <?php 
                // Loop through all users and display them
                foreach ($users as $user) {
            ?>
            <tr>
                <td><?php echo $user['id']; ?></td>
                <td><?php echo $user['username']; ?></td>
                <td><?php echo $user['email']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $user['id']; ?>">EDIT</a> |
                    <a href="delete.php?id=<?php echo $user['id']; ?>">DELETE</a>
                </td>
            </tr>
            <?php } ?>
        </table>
</body>
</html>

<?php
    } else {
        // Redirect to login page if the user is not logged in
        header('location: login.html');
    }
?>
