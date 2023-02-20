<?php
if (isset($_POST['log-out'])) {
    session_destroy();
    unset($_SESSION['user']);
    header('location:index.php');
}

?>
<header>
    <style>
        .log-wraper {
            position: absolute;
            /* height: 100%; */
            z-index: 5;
            align-content: space-evenly;
            margin-left: 89%;
            min-height: 100px;
            display: none;
        }

        .log-div {
            position: relative;
            margin: 1px auto;
            font-family: 'Raleway';
        }
    </style>

</header>
<?php if (isset($_SESSION['user'])) {
    $userlogedin = $_SESSION['user'];
    $user_logged_in = mysqli_query($con->con, "SELECT * FROM user_register WHERE uname ='$userlogedin'");
    $user = mysqli_fetch_array($user_logged_in);
?>
    <div class="log-wraper card" id="logWrap">
        <div class="log-div">

            <a class="a list-group-item card-header border-bottom" href=""><?php echo $user['uname'] ?></a>



            <form action="" method="post">
                <input class="btn-primary btn-lg btn-block" type="submit" value="Log Out" name="log-out">
            </form>
        </div>
    </div>
<?php } ?>
<script>
    let userBtn = document.getElementById('logbtn');

    userBtn.addEventListener("click", function() {
        console.log('hello');
        w = document.getElementById('logWrap').style.display = "block";
    });

    window.addEventListener('mouseup', function(e) {
        var x = document.querySelector('#logWrap');
        if (event.target != document.querySelector("#logWrap")) {
            x.style.display = "none";
        }
    });
</script>