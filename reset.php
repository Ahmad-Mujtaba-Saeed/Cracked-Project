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
    background-color: #1a1a1a;">
    <div class="nechyho">
        <img class="border" src="./img/left-chevron.png" width="33px">
    </div>
    <div class="registerkr">
        <h2>Enter new password</h2>
    </div>
    <?php

    $selector = $_GET["selector"];
    $validator = $_GET["validator"];


    if (empty($selector) || empty($validator)) {
        echo "could not compelete your request>";

    } else {
        if (ctype_xdigit($selector) !== false && ctype_xdigit($validator) !== false) {

            ?>

            <div class="container">
                <form action="./includes/resetpass.php" method="post">


                    <div class="input">
                        <input type="hidden" name="selector" class="form-control" value="<?php echo $selector ?>">


                        <input type="hidden" name="validator" class="form-control" value="<?php echo $validator ?>">

                        <input type="password" name="pwd" placeholder="Password">
                        <input type="password" name="repwd" placeholder="Confirm password">
                    </div>
                    <button class="button" name="reset-password-submit" type="submit">Submit password</button>
                </form>
                <?php

        }
    } ?>
    </div>

</body>

</html>