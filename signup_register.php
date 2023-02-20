<?php require('handler/login_handler.php');?>
<div class="login-wrap" id="div-wrap">
    <div class="login-html">
        <p id="cross"><i class="fa fa-times" aria-hidden="true"></i></p>
        <input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
        <input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
        <div class="login-form">
            <form action="" method="post">
                <div class="sign-in-htm">
                    <div class="group">
                        <label for="user" class="label">Email</label>
                        <input id="user" type="email" class="input" name="log_email" value="<?php if (isset($_SESSION['log_email'])) {
                                                                                                echo ($_SESSION['log_email']);
                                                                                            } ?>">
                    </div>
                    <div class=" group">
                        <label for="pass" class="label">Password</label>
                        <input id="pass" type="password" class="input" data-type="password" name="log_pass">
                    </div>
                    <div class="group">
                        <input id="check" type="checkbox" class="check" checked>
                        <label for="check"><span class="icon"></span> Keep me Signed in</label>
                    </div>
                    <div class="group">
                        <input type="submit" class="button" value="Sign In" name="login">
                    </div>
            </form>
            <div class="hr"></div>
            <div class="foot-lnk">
                <a href="#forgot">Forgot Password?</a>
            </div>
        </div>
        <div class="sign-up-htm">
            <form action="" method="post">
                <div class="group">
                    <label for="user" class="label">Username</label>
                    <input id="user" type="text" class="input" name="reg_uname" value="<?php if (isset($_SESSION['reg_uname'])) {
                                                                                            echo ($_SESSION['reg_uname']);
                                                                                        } ?>">

                    <?php if (in_array("first name must be between 4 to 12 characters<br>", $error_array)) {
                        echo "first name must be between 4 to 12 characters<br>";
                    } ?>
                </div>
                <div class=" group">
                    <label for="pass" class="label">Password</label>
                    <input id="pass" type="password" class="input" data-type="password" name="reg_pass">
                </div>
                <div class="group">
                    <label for="pass" class="label">Repeat Password</label>
                    <input id="pass" type="password" class="input" data-type="password" name="reg_pass2">

                    <?php if (in_array("you'r password do not match<br>", $error_array)) {
                        echo "you'r password do not match<br>";
                    } ?>
                    <?php if (in_array("you'r password  can only contain chracters and numbers<br>", $error_array)) {
                        echo "you'r password  can only contain chracters and numbers<br>";
                    } ?>
                    <?php if (in_array("password must be between 8 to 20 characters<br>", $error_array)) {
                        echo "password must be between 8 to 20 characters<br>";
                    } ?>



                </div>
                <div class="group">
                    <label for="pass" class="label">Email Address</label>
                    <input id="pass" type="text" class="input" name="reg_email" value="<?php if (isset($_SESSION['reg_email'])) {
                                                                                            echo ($_SESSION['reg_email']);
                                                                                        } ?>">
                    <?php if (in_array("Email already in use<br>", $error_array)) {
                        echo "Email already in use<br>";
                    } ?>
                    <?php if (in_array("Invalid format<br>", $error_array)) {
                        echo "Invalid format<br>";
                    } ?>

                </div>
                <div class="group">
                    <input type="submit" class="button" value="Sign Up" name="signup">
                </div>
            </form>
            <div class="hr"></div>
            <div class="foot-lnk">
                <label for="tab-1">Already Member?</a>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    let btn = document.getElementById('btn');
    let cross = document.getElementById('cross');
    let mainSite = document.getElementById('main-site');
    

    btn.addEventListener("click", function() {
        let d = document.getElementById('div-wrap').style.display = "block";
        mainSite.style.filter = "blur(100%)";
    });

    cross.addEventListener("click", function() {
        let d = document.getElementById('div-wrap').style.display = "none";

    });

    
</script>