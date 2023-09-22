<?php
session_start();

$loginuname = '';
$loginpwd = '';
$setrememberme = '';
// When the user returns to the website, check if the cookie exists and contains valid login credentials
if (isset($_COOKIE['username']) && isset($_COOKIE['password'])) {
    // Automatically log the user in
    $loginuname = $_COOKIE['username'];
    $loginpwd = $_COOKIE['password'];
    // Authenticate the user with the provided credentials
    $setrememberme = "checked='checked'";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="mystyle.css">
    <title>NOT Scam</title>
</head>

<body style="
display:block;
margin-left:auto;
margin-right:auto;
width:319px !important;
    background-color: #1a1a1a;">
    <div class="colorbg">
        <div class="nechyho">
            <a href="index.php">
                <img class="border" src="./img/left-chevron.png" width="33px">
            </a>
        </div>


        <?php
        if (isset($_GET["selector"])) {
            $selector = $_GET["selector"];
            $validator = $_GET["validator"];
            $chategory = $_GET["chategory"];

            if ($chategory == "b2b") {
                ?>
                <div class="registerkr">
                    <h2 style="color:white;">Just one step away from making your basic account!</h2>
                </div>
                <div class="buttons">
                    <button type="button" name="t1" onclick="setvisiblity('sub1','sub2','flex');">Signup</button>
                    <button type="button" name="t2" onclick="sethide('sub2','sub1','flex');">Login</button>
                </div>
                <script>
                    function setvisiblity(id, id2, visiblity) {
                        document.getElementById(id).style.display = visiblity;
                        document.getElementById(id2).style.display = 'none';
                    }
                    function sethide(id, id2, visiblity) {
                        document.getElementById(id).style.display = visiblity;
                        document.getElementById(id2).style.display = 'none';
                    }
                </script>

                <?php
                if (empty($selector) || empty($validator)) {
                    echo "could not compelete your request>";

                } else {
                    if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                        $trustlevel = "50";
                        ?>

                        <div class="container" id="sub1">
                            <form action="./includes/tokensignup.php" method="post">
                                <div class="input">
                                    <input type="hidden" name="selector" class="form-control" value="<?php echo $selector ?>">
                                    <input type="hidden" name="category" class="form-control" value="<?php echo $chategory ?>">
                                    <input type="hidden" name="validator" class="form-control" value="<?php echo $validator ?>">
                                    <input type="hidden" name="trustlev" class="form-control" value="<?php echo $trustlevel ?>">
                                    <input type="text" name="uname" placeholder="Username">
                                    <input type="email" name="email" placeholder="Email">
                                    <input type="password" name="pwd" placeholder="Password">
                                    <input type="password" name="repwd" placeholder="Confirm password">
                                </div>
                                <button class="button" name="submit" type="submit">Agree and Register</button>
                            </form>
                        </div>
                        <?php

                    }
                }
            } elseif ($chategory == "s2s") {
                ?>
                <div class="registerkr">
                    <h2 style="color:white;">Just one step away from creating your standard account!</h2>
                </div>
                <div class="buttons">
                    <button type="button" name="t1" onclick="setvisiblity('sub1','sub2','flex');">Signup</button>
                    <button type="button" name="t2" onclick="sethide('sub2','sub1','flex');">Login</button>
                </div>
                <script>
                    function setvisiblity(id, id2, visiblity) {
                        document.getElementById(id).style.display = visiblity;
                        document.getElementById(id2).style.display = 'none';
                    }
                    function sethide(id, id2, visiblity) {
                        document.getElementById(id).style.display = visiblity;
                        document.getElementById(id2).style.display = 'none';
                    }
                </script>

                <?php
                if (empty($selector) || empty($validator)) {
                    echo "could not compelete your request>";
                } else {
                    if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                        $trustlevel = "100";
                        ?>

                        <div class="container" id="sub1">
                            <form action="./includes/tokensignup.php" method="post">
                                <div class="input">
                                    <input type="hidden" name="selector" class="form-control" value="<?php echo $selector ?>">
                                    <input type="hidden" name="validator" class="form-control" value="<?php echo $validator ?>">
                                    <input type="hidden" name="category" class="form-control" value="<?php echo $chategory ?>">
                                    <input type="hidden" name="trustlev" class="form-control" value="<?php echo $trustlevel ?>">
                                    <input type="text" name="uname" placeholder="Username">
                                    <input type="email" name="email" placeholder="Email">
                                    <input type="password" name="pwd" placeholder="Password">
                                    <input type="password" name="repwd" placeholder="Confirm password">
                                </div>
                                <button class="button" name="submit" type="submit">Agree and Register</button>
                            </form>
                        </div>
                        <?php

                    }
                }
            } else {
                ?>
                <div class="registerkr">
                    <h2 style="color:white;">Just one step away from making your premium account!</h2>
                </div>
                <div class="buttons">
                    <button type="button" name="t1" onclick="setvisiblity('sub1','sub2','flex');">Signup</button>
                    <button type="button" name="t2" onclick="sethide('sub2','sub1','flex');">Login</button>
                </div>
                <script>
                    function setvisiblity(id, id2, visiblity) {
                        document.getElementById(id).style.display = visiblity;
                        document.getElementById(id2).style.display = 'none';
                    }
                    function sethide(id, id2, visiblity) {
                        document.getElementById(id).style.display = visiblity;
                        document.getElementById(id2).style.display = 'none';
                    }
                </script>

                <?php
                if (empty($selector) || empty($validator)) {
                    echo "could not compelete your request>";

                } else {
                    if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {
                        $trustlevel = "200";
                        ?>

                        <div class="container" id="sub1">
                            <form action="./includes/tokensignup.php" method="post">
                                <div class="input">
                                    <input type="hidden" name="selector" class="form-control" value="<?php echo $selector ?>">
                                    <input type="hidden" name="validator" class="form-control" value="<?php echo $validator ?>">
                                    <input type="hidden" name="category" class="form-control" value="<?php echo $chategory ?>">
                                    <input type="hidden" name="trustlev" class="form-control" value="<?php echo $trustlevel ?>">
                                    <input type="text" name="uname" placeholder="Username">
                                    <input type="email" name="email" placeholder="Email">
                                    <input type="password" name="pwd" placeholder="Password">
                                    <input type="password" name="repwd" placeholder="Confirm password">
                                </div>
                                <button class="button" name="submit" type="submit">Agree and Register</button>
                            </form>
                        </div>
                        <?php

                    }
                }
            }
        } else {
            ?>

            <div class="registerkr">
                <h2 style="color:white;">Welcome. Make your free account here!</h2>
            </div>
            <div class="buttons">
                <button type="button" name="t1" onclick="setvisiblity('sub1','sub2','flex');">Signup</button>
                <button type="button" name="t2" onclick="sethide('sub2','sub1','flex');">Login</button>
            </div>
            <script>
                function setvisiblity(id, id2, visiblity) {
                    document.getElementById(id).style.display = visiblity;
                    document.getElementById(id2).style.display = 'none';
                }
                function sethide(id, id2, visiblity) {
                    document.getElementById(id).style.display = visiblity;
                    document.getElementById(id2).style.display = 'none';
                }
            </script>


            <div class="container" id="sub1">
                <form action="./includes/tokensignup.php" method="post">
                    <div class="input">

                        <input type="text" name="uname" placeholder="Username">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="pwd" placeholder="Password">
                        <input type="password" name="repwd" placeholder="Confirm password">
                    </div>
                    <button class="button" name="submit" type="submit">Agree and Register</button>
                </form>
            </div>
            <?php
        }
        ?>

        <div class="container2" id="sub2">
            <form action="./includes/loginuser.php" method="post">
                <div class="input">
                    <input type="text" name="uname" value="<?php echo $loginuname; ?>" placeholder="Username/Email">
                    <input type="password" id="pwd" name="pwd" value="<?php echo $loginpwd ?> " placeholder="Password">
                    <button type="button" class="form-control" id="togglePassword">Show password</button>
                    <script>
                        const togglePassword = document.querySelector('#togglePassword');
                        const password = document.querySelector('#pwd');

                        togglePassword.addEventListener('click', function (e) {
                            // toggle the type attribute
                            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                            password.setAttribute('type', type);
                            // change the label text
                            this.textContent = type === 'password' ? 'Show password' : 'Hide password';
                        });
                    </script>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <?php echo "Remember me "; ?><input type="checkbox" id="rememberme" name="rememberme" <?php echo $setrememberme ?>>

                </div>
                <button class="button" name="submit" type="submit">Agree and Login</button>
            </form>

        </div>
        <?php
        if (isset($_GET["error"])) {
            if ($_GET["error"] == "emptyinput") {
                echo "<p class='color1'>Please fill all the fields</p>";
            } elseif ($_GET["error"] == "invalidUid") {
                echo "<p class='color1'>The username is invalid only text and numbers are allowed</p>";
            } elseif ($_GET["error"] == "invalidemail") {
                echo "<p class='color1'>Type a proper email</p>";
            } elseif ($_GET["error"] == "pwdnotmatch") {
                echo "<p class='color1'>passwords does't macth </p>";
            } elseif ($_GET["error"] == "usernametaken") {
                echo "<p class='color1'>The username or Email is already taken select an other one</p>";
            } elseif ($_GET["error"] == "pwdshort") {
                echo "<p class='color1'>The password must contain 7 letters</p>";
            } elseif ($_GET["error"] == "stmtfailed") {
                echo "<p class='color1'>something went wrong try agian</p>";
            } elseif ($_GET["error"] == "signupsuccess") {
                echo "<p class='color1'>You have signedup</p>";
            }
        }
        ?>
        <style>
            .color1 {
                color: red;
                margin-bottom: -5px;
            }
        </style>
        <div id="sub2">
            <p>
                &nbsp;&nbsp;&nbsp;&nbsp; <a href="./forgetpass.html">forget password?</a>
            </p>
        </div>


        <hr class="line">
        <div class="nothing"></div>
        <div class="orloginwith">or login with</div>
        <div class="nechomar">
            <img class="facebook" src="./img/facebook.png" width="20px">
            <img class="google" src="./img/google.png" width="20px">
            <img class="apple" src="./img/apple.png" width="20px">
        </div>
    </div>
</body>

</html>