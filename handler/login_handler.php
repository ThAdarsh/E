<?php
    if (isset($_POST['login'])) {
    $email = filter_var($_POST['log_email'],FILTER_SANITIZE_EMAIL);

    $_SESSION['log_email'] = $email;
    $password = $_POST['log_pass']; //get password

    $check_mysqli_database_query = mysqli_query($con->con,"SELECT * FROM user_register WHERE email = '$email' AND password = '$password'");
    $check_login_query = mysqli_num_rows($check_mysqli_database_query);

    if ($check_login_query == 1) {
    $row = mysqli_fetch_array($check_mysqli_database_query);
    $username = $row['uname'];
    printf($username);
    $_SESSION['user'] = $username;

    header("Location: ./index.php");
    exit();

    }   
    else{

        echo"<script> alert('Please Check your Email And Password '); </script>";
     }
}

?>