<?php
include("includes/db.php");
if (!empty($_POST)) {

    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Getting submitted user data from database
        $username = $_POST['username'];
        $password = $_POST['password'];

        $user_query = "SELECT * FROM KhachHang WHERE KhachHang.username = '$username' and KhachHang.password = '$password' ";
        // echo $user_query;
        $run_query = mysqli_query($con, $user_query);
        if (mysqli_num_rows($run_query) > 0) {
            $_SESSION['username'] = $username;
            // $_COOKIE["username"] = $username;

            // $_COOKIE["loggedin"] = true;;
            $_SESSION["loggedin"] = true;
            header("location: ../index.php");
        }
        // echo $_SESSION['username'];
    }
}
