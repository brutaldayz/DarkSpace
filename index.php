<?php require_once('System/Minimize.php'); require_once('System/Init.php'); Functions::controller('checkLogin'); $Token = Security::createToken(); ?>
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
<?php if(isset($_SESSION['agreement'])){ ?>

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

<?php }else{ ?>

<body>
    <div class="container mt-5">
        <div class="col-md-12 text-center">
            <div class="terms-area text-left">
                <div class="terms-main">
                    <div class="terms-header text-center">
                        <h3><?php echo Config::Get('SERVER_NAME'); ?> - <?php echo Lang::Terms('Title'); ?></h3>
                    </div>
                    <div class="terms-content">
                        <table cellpadding="0" cellspacing="3" width="100%">
                            <tbody>
                                <tr>
                                    <td><?php echo Lang::Terms('SmallTitle'); ?></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="terms-comment">  
                                            <h3><?php echo Lang::Terms('1Title'); ?></h3>
                                            <ol type="a">
                                                <li><?php echo Lang::Terms('1Message'); ?></li>
                                            </ol>

                                            <br>

                                            <h3><?php echo Lang::Terms('2Title'); ?></h3>
                                            <ol type="a">
                                                <li><?php echo Lang::Terms('2Message'); ?></li>
                                            </ol>

                                            <br>

                                            <h3><?php echo Lang::Terms('3Title'); ?></h3>
                                            <ol type="a">
                                                <li><?php echo Lang::Terms('3Message'); ?></li>
                                            </ol>

                                            <br>

                                            <h3><?php echo Lang::Terms('4Title'); ?></h3>
                                            <ol type="a">
                                                <li><?php echo Lang::Terms('4Message'); ?></li>
                                            </ol>

                                            <br>

                                            <h3><?php echo Lang::Terms('5Title'); ?></h3>
                                            <ol type="a">
                                                <li><?php echo Lang::Terms('5Message'); ?></li>
                                            </ol>

                                            <br>

                                            <h3><?php echo Lang::Terms('6Title'); ?></h3>
                                            <ol type="a">
                                                <li><?php echo Lang::Terms('6Message'); ?></li>
                                            </ol>

                                            <br>

                                            <h3><?php echo Lang::Terms('7Title'); ?></h3>
                                            <ol type="a">
                                                <li><?php echo Lang::Terms('7Message'); ?></li>
                                            </ol>

                                            <br>

                                            <h3><?php echo Lang::Terms('8Title'); ?></h3>
                                            <ol type="a">
                                                <li><?php echo Lang::Terms('8Message'); ?></li>
                                            </ol>

                                            <br>

                                            <h3><?php echo Lang::Terms('9Title'); ?></h3>
                                            <p><?php echo Lang::Terms('9MessageA'); ?></p>

                                            <ol type="a">
                                                <?php echo Lang::Terms('9MessageB'); ?></li>
                                            </ol>

                                            <br>

                                            <h3><?php echo Lang::Terms('10Title'); ?></h3>
                                            <p><?php echo Lang::Terms('10MessageA'); ?></p>
                                            <ol type="a">
                                                <?php echo Lang::Terms('10MessageB'); ?>
                                            </ol>

                                            <br>

                                            <p><?php echo Lang::Terms('10MessageC'); ?></p>
                                        </div>  
                                        <br>
                                        <div class="flexbox mb-1 mt-1"> 
                                            <label class="checkbox checkbox-primary"> 
                                                <form id="agreement">
                                                    <input name="terms" type="checkbox"> <?php echo Lang::getTerms(); ?>
                                                </form>
                                            </label> 
                                        </div>
                                        <div class="mb-2 text-center">
                                            <button id="accept" type="button" class="btn rb-button waves-effect waves-light col-md-3 m-3">Accept</button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center">
                            <?php echo Lang::Terms('Footer1'); ?> 
                            <br>
                            <?php echo Lang::Terms('Footer2'); ?> 
                            <br>
                            <?php echo Lang::Terms('Footer3'); ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $("#accept").click(function(){
        $.ajax({
            type: 'POST',
            url: '<?php echo Config::Get('SERVER_URL'); ?>Ajax/Agreement.php',
            data: $('#agreement').serialize(),
            success: function(resultData){
                if(resultData.error) swal('<?php echo Lang::Get('Error'); ?>!', resultData.msg, 'error');
                else location.reload();
            }
        });
    });
</script>

<?php } ?>

    <div class="modal fade" id="termsModal" tabindex="-1" role="dialog" aria-labelledby="shopTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="col-md-12 modal-title text-center"><?php echo Config::Get('SERVER_NAME'); ?></h5>
                </div>
                <div class="modal-body">
                    <div style="padding: 15px;font-family: 'Comfortaa', cursive;">
                        <h3><?php echo Lang::Terms('1Title'); ?></h3>
                        <ol type="a">
                            <li><?php echo Lang::Terms('1Message'); ?></li>
                        </ol>

                        <br>

                        <h3><?php echo Lang::Terms('2Title'); ?></h3>
                        <ol type="a">
                            <li><?php echo Lang::Terms('2Message'); ?></li>
                        </ol>

                        <br>

                        <h3><?php echo Lang::Terms('3Title'); ?></h3>
                        <ol type="a">
                            <li><?php echo Lang::Terms('3Message'); ?></li>
                        </ol>

                        <br>

                        <h3><?php echo Lang::Terms('4Title'); ?></h3>
                        <ol type="a">
                            <li><?php echo Lang::Terms('4Message'); ?></li>
                        </ol>

                        <br>

                        <h3><?php echo Lang::Terms('5Title'); ?></h3>
                        <ol type="a">
                            <li><?php echo Lang::Terms('5Message'); ?></li>
                        </ol>

                        <br>

                        <h3><?php echo Lang::Terms('6Title'); ?></h3>
                        <ol type="a">
                            <li><?php echo Lang::Terms('6Message'); ?></li>
                        </ol>

                        <br>

                        <h3><?php echo Lang::Terms('7Title'); ?></h3>
                        <ol type="a">
                            <li><?php echo Lang::Terms('7Message'); ?></li>
                        </ol>

                        <br>

                        <h3><?php echo Lang::Terms('8Title'); ?></h3>
                        <ol type="a">
                            <li><?php echo Lang::Terms('8Message'); ?></li>
                        </ol>

                        <br>

                        <h3><?php echo Lang::Terms('9Title'); ?></h3>
                        <p><?php echo Lang::Terms('9MessageA'); ?></p>

                        <ol type="a">
                            <?php echo Lang::Terms('9MessageB'); ?></li>
                        </ol>

                        <br>

                        <h3><?php echo Lang::Terms('10Title'); ?></h3>
                        <p><?php echo Lang::Terms('10MessageA'); ?></p>
                        <ol type="a">
                            <?php echo Lang::Terms('10MessageB'); ?>
                        </ol>

                        <br>

                        <p><?php echo Lang::Terms('10MessageC'); ?></p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                </div>
            </div>
        </div>
    </div>

    <script>$("#terms").click(function(){ $("#termsModal").modal(); });</script>

</html>