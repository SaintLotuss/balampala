<?php
require ('connect.php');

$msg = "";

if(isset($_POST['new']) && $_POST['new'] == 1) {
    $user_name = $_REQUEST["user_name"];
    $user_email = $_REQUEST["user_email"];
    $user_password = $_REQUEST["user_password"];

    $insert_query = "INSERT INTO `user` (`user_name`, `user_email`, `user_password`)
    Values ('$user_name', '$user_email', '$user_password')";

    mysqli_query($connection, $insert_query);
    $msg = "record was successfully added inside the db!";

}
?>

<html>

<head>
    <title>Insert New User</title>
</head>

<body>
    <h1>Insert New User</h1>
    <form action="" method="post">
        <input type="hidden" name="new" value="1">
        <input type="text" name="user_name" placeholder="Enter your name" required> <br>
        <input type="email" name="user_email" placeholder="Enter your email" required> <br>
        <input type="password" name="user_password" placeholder="Enter your password" required> <br>
        <input type="submit" value="Add Record">
    </form> 
    <p style="color:blue;"><?php echo $msg;?></p>

</body>

</html>