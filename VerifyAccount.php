<?php require_once('System/Minimize.php'); require_once('System/Init.php'); $Token = Security::createToken(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title><?php echo Config::Get('SERVER_NAME'); ?></title>
    <meta name="description" content="<?php echo Config::Get('SERVER_NAME'); ?> is the ultimate space shooter. Explore the endless expanses of universe in one of the best and most exciting online browser games ever produced. Brave all dangers and go where nobody's ever gone before - either alone or with others. Set a course for undiscovered galaxies and seek out new lifeforms!">
    <meta property="og:title" content="<?php echo Config::Get('SERVER_NAME'); ?>"/>
    <meta property="og:image" content="<?php echo Config::Get('IMG'); ?>Logo.jpg"/>
    <meta property="og:url" content="<?php echo Config::Get('SERVER_URL'); ?>"/>
    <meta property="og:site_name" content="<?php echo Config::Get('SERVER_NAME'); ?>"/>
    <meta property="og:description" content="<?php echo Config::Get('SERVER_NAME'); ?> is the ultimate space shooter. Explore the endless expanses of universe in one of the best and most exciting online browser games ever produced. Brave all dangers and go where nobody's ever gone before - either alone or with others. Set a course for undiscovered galaxies and seek out new lifeforms!"/>
    <meta name="robots" content="index, follow">
    <meta name="revisit-after" content="1 days">

    <!-- Include Icons -->
    <link rel="shortcut icon" href="<?php echo Config::Get('IMG'); ?>Favicon.ico" />

    <!-- Include CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('CSS'); ?>material-bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('CSS'); ?>fontawesome.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('CSS'); ?>Main.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('CSS'); ?>Login.min.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Config::Get('CSS'); ?>Terms.min.css">

    <!-- Include JS-->
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>Jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>Main.min.js"></script>
    <?php if(Config::Get('SERVER_HOST') != "127.0.0.1"){ ?>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <?php } ?>
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>sweetalert.min.js"></script>
    <script type="text/javascript" src="<?php echo Config::Get('JS'); ?>material-bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Lato:400,700,900|Raleway:300,400,500,600,700,800,900" rel="stylesheet">
</head>

<?php

    if(isset($_GET['Hash']) && isset($_GET['Profile'])){
        $Hash = Security::Get('Hash');
        $Profile = Security::Get('Profile');

        $db = Database::Connection();
  
        $Control = $db->prepare("SELECT * FROM player_accounts WHERE profileID = ?");  
        $Control->execute(array($Profile));

        if($Control->rowCount() != 0){
            $Control = $db->prepare("SELECT verification FROM player_accounts WHERE profileID = ?");  
            $Control->execute(array($Profile));
            $verification = $Control->fetch()['verification'];

            $array = json_decode($verification);

            if($array->Hash == $Hash && $array->Verified != 1){
                $array->Verified = 1;
                $array = json_encode($array, JSON_UNESCAPED_UNICODE);

                $Query = $db->prepare("UPDATE player_accounts SET verification = ? WHERE profileID = ?");
                $Complete = $Query->execute(array($array, $Profile));
                echo "<script>swal('".Lang::Get('Successful')."!', ".Lang::Get('RegisterVerified').", 'success');</script>";
            }
        }
    }

?>

<body class="d-flex align-itmes-center">
    <div class="card login-box shadow">
        <div class="text-center"><span class="auth-head-icon"><i class="far fa-user"></i></span></div>
        
        <div class="login-panel">
            <div class="card-body p-4">
                <h4 class="card-title text-center mb-4"><?php echo Lang::Get('LoginTitle'); ?></h4>
                <form id="login-form" class="form-pink">
                    <div class="md-form mb-4">
                        <input type="text" name="username" class="md-form-control validate" required>
                        <label><?php echo Lang::Get('LoginUsername'); ?></label>
                    </div>

                    <div class="md-form">
                        <input type="password" name="password" class="md-form-control validate" required>
                        <label><?php echo Lang::Get('LoginPassword'); ?></label>
                    </div>

                    <div class="flexbox mb-5 mt-4">
                        <a href="<?php echo Config::Get('SERVER_URL'); ?>AccountRecovery"><?php echo Lang::Get('LoginForgotPW'); ?></a>
                    </div>
                    
                    <input type="hidden" name="csrf-token" value="<?php echo $Token; ?>">
                    <button id="login-button" type="button" class="btn rb-button btn-block"><?php echo Lang::Get('LoginTitle'); ?></button>
                </form>
                
                <div class="mt-4 text-center"><a id="show-register" href="javascript:;"><?php echo Lang::Get('LoginRegisterText'); ?></a></div>
            </div>
        </div>

        <div class="register-panel">
            <div class="card-body p-4">
                <h4 class="card-title text-center mb-4"><?php echo Lang::Get('LoginRegister'); ?></h4>
                <form id="register-form" class="form-pink">
                    <div class="md-form mb-4">
                        <input type="text" name="username" class="md-form-control validate" required>
                        <label><?php echo Lang::Get('LoginUsername'); ?></label>
                    </div>

                    <div class="md-form">
                        <input type="password" name="password" class="md-form-control validate" required>
                        <label><?php echo Lang::Get('LoginPassword'); ?></label>
                    </div>

                    <div class="md-form">
                        <input type="email" name="email" class="md-form-control validate" required>
                        <label><?php echo Lang::Get('LoginEmail'); ?></label>
                    </div>

                    <div class="flexbox mb-5 mt-4" id="checkboxArea">
                        <label class="checkbox checkbox-primary">
                            <input type="checkbox" name="terms" value="1">
                            <?php echo Lang::getTerms(); ?>
                        </label>
                    </div>

                    <?php if(Config::Get('SERVER_HOST') != "127.0.0.1"){ ?>
                    <div class="md-form">
                        <div class="g-recaptcha" data-theme="dark" data-sitekey="6LeDvLoUAAAAANkEr3QGP5esfAWIEMHkXh-u2k9S"></div>
                    </div>
                    <?php } ?>
                    
                    <input type="hidden" name="csrf-token" value="<?php echo $Token; ?>">
                    <button id="register-button" type="button" class="btn rb-button btn-block"><?php echo Lang::Get('LoginRegister'); ?></button>
                </form>
                
                <div class="mt-4 text-center"><a id="show-login" href="javascript:;"><?php echo Lang::Get('LoginAlready'); ?></a></div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $("#login-button").click(function(){
            $.ajax({
                type: 'POST',
                url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Login.php',
                data: $('#login-form').serialize(),
                success: function(resultData){
                    if(resultData.error){
                        swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                    }else{
                        window.location.href = "<?php echo Config::Get('SERVER_URL'); ?>Home";
                    }
                }
            });
        });

        $("#register-button").click(function(){
            swal('<?php echo Lang::Get('Successful'); ?>!', "<?php echo Lang::Get('WaitRegister'); ?>", 'success');
            $("#checkboxArea").css('display', 'none');
            $("#register-button").css('display', 'none');
            $("#show-login").css('display', 'none');
            $.ajax({
                type: 'POST',
                url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Register.php',
                data: $('#register-form').serialize(),
                success: function(resultData){
                    $("#checkboxArea").css('display', 'block');
                    $("#register-button").css('display', 'block');
                    $("#show-login").css('display', 'block');
                    
                    if(resultData.error){
                        swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                        grecaptcha.reset();
                    }else{
                        swal('<?php echo Lang::Get('Successful'); ?>!', resultData.msg, 'success')
                        .then((value) => {
                            window.location.href = "<?php echo Config::Get('SERVER_URL'); ?>";
                        });
                    }
                }
            });
        });

        $("#show-register").click(function(){
            $(".login-panel").css('display', 'none');
            $(".register-panel").css('display', 'block');
        });

        $("#show-login").click(function(){
            $(".register-panel").css('display', 'none');
            $(".login-panel").css('display', 'block');
        });

        $(document).on('keydown', function(e){
            if (e.keyCode == 13) {
                if ($('.swal-overlay').css('opacity') == 1) {
                    $(".swal-button").click();
                } else {
                    if ($(".login-panel").is(':visible')) {
                        $("#login-button").click();
                    } else {
                        $("#register-button").click();
                    }
                }
            }
        });
    </script>
</body>
</head>