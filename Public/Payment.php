
    <div class="spacer-40"></div>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Lato:400,700,900|Raleway:300,400,500,600,700,800,900" rel="stylesheet">
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row text-center">
                <button onclick="changeTab('uridium');" class="btn btn rb-button waves-effect waves-light shopBtn">URIDIUM</button>
                <button onclick="changeTab('subscription');" class="btn btn rb-button waves-effect waves-light shopBtn">SUBSCRIPTION</button>
                <button onclick="changeTab('special');" class="btn btn rb-button waves-effect waves-light shopBtn">SPECIAL</button>
                <button onclick="changeTab('booster');" class="btn btn rb-button waves-effect waves-light shopBtn">BOOSTER</button>
                <button onclick="changeTab('extra');" class="btn btn rb-button waves-effect waves-light shopBtn">EXTRA</button>
                <button onclick="changeTab('design');" class="btn btn rb-button waves-effect waves-light shopBtn">DESIGN</button>
            </div>
        </div>

        <?php

            //Uri
            //Vip / katlayıcı / %50 indirim
            //%50 şeref - %50 tecrübe puanı 
            //Logdisk - yeşil & mavi & kırmızı ganimet anahtarı
            //Ülke tasarımları

            //legend, lava, dusklight, argon
        ?>

        <div class="spacer-10"></div>

        <style>
            .product{
                background: #171515;
                width: 250px;
                height: 250px;
                padding: 5px;
                float: left;
                display: block;
                margin: 5px;
                margin-left: 5px;
                border: 1px solid #444;
                transition: .3s ease background;
            }

            .product:hover{background:#2d2d2d;cursor:pointer}

            .product-title{
                text-align: center;
                margin-top: 10px;
                font-family: 'Comfortaa', cursive;
            }

            .product-img{ width: 100px; height: 100px; }

            .uridium-img{
                margin-top: 10px;
            }

            .product-desc{
                background: #383434;
                height: 90px;
                margin-top: 5px;
                padding: 5px;
            }

            .rb-panel{
                min-height: 100%;
            }

            .product-price{
                font-size: 20px;
                text-align: center;
            }
        </style>

        <div class="col-md-12">
            <div class="row rb-panel uridium">
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Uridium/1.png"></div>
                    <p class="product-title">150.000 Uridium</p>
                    <p class="product-price">5 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Uridium/2.png"></div>
                    <p class="product-title">300.000 Uridium</p>
                    <p class="product-price">10 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Uridium/3.png"></div>
                    <p class="product-title">500.000 Uridium</p>
                    <p class="product-price">15 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Uridium/4.png"></div>
                    <p class="product-title">750.000 Uridium</p>
                    <p class="product-price">20 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Uridium/5.png"></div>
                    <p class="product-title">1.000.000 Uridium</p>
                    <p class="product-price">25 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Uridium/6.png"></div>
                    <p class="product-title">2.500.000 Uridium</p>
                    <p class="product-price">50 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
            </div>

            <div class="row rb-panel subscription" style="display: none;">
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Subscription/doubler_7.png"></div>
                    <p class="product-title">Doubler Advantage Pack</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Subscription/doubler_30.png"></div>
                    <p class="product-title">XL Doubler Advantage Pack</p>
                    <p class="product-price">10 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Subscription/discount_7.png"></div>
                    <p class="product-title">Rebate Advantage Pack</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Subscription/discount_30.png"></div>
                    <p class="product-title">XL Rebate Advantage Pack</p>
                    <p class="product-price">10 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Subscription/premium_30.png"></div>
                    <p class="product-title">Premium Bronze Pack</p>
                    <p class="product-price">5 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Subscription/premium_180.png"></div>
                    <p class="product-title">Premium Silver Pack</p>
                    <p class="product-price">20 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Subscription/premium_365.png"></div>
                    <p class="product-title">Premium Gold Pack</p>
                    <p class="product-price">50 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
            </div>

            <div class="row rb-panel special" style="display: none;">
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Special/Default.png"></div>
                    <p class="product-title">1 Month of the "Best Subscriptions"</p>
                    <p class="product-price">20 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Special/Default.png"></div>
                    <p class="product-title">3 Month of the "Best Subscriptions"</p>
                    <p class="product-price">50 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Special/Default.png"></div>
                    <p class="product-title">3 Months of the "Best Subscriptions PLUS"</p>
                    <p class="product-price">60 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
            </div>

            <div class="row rb-panel booster" style="display: none;">
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Booster/Ascension-booster.gif"></div>
                    <p class="product-title">(Small) Ascension Booster Pack /1 gün</p>
                    <p class="product-price">5 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Booster/Ascension-booster.gif"></div>
                    <p class="product-title">(Medium) Ascension Booster Pack /3 gün</p>
                    <p class="product-price">10 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Booster/Ascension-booster.gif"></div>
                    <p class="product-title">(Large) Ascension Booster Pack /7 gün</p>
                    <p class="product-price">25 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product" style="min-height: 264px;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Booster/SuperBoosterpack.gif"></div>
                    <p class="product-title">Super Booster Pack</p>
                    <p class="product-price mt-4">10 DSC</p>
                    <button class="mt-3 btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
            </div>

            <div class="row rb-panel extra" style="display: none;">
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Extra/LogFile.png"></div>
                    <p class="product-title">250x Log-File</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Extra/LogFile.png"></div>
                    <p class="product-title">500x Log-File</p>
                    <p class="product-price">5 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Extra/LogFile.png"></div>
                    <p class="product-title">1,500x Log-File</p>
                    <p class="product-price">10 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Extra/GreenKey.png"></div>
                    <p class="product-title">25x Green Booty Key</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Extra/GreenKey.png"></div>
                    <p class="product-title">50x Green Booty Key</p>
                    <p class="product-price">5 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Extra/GreenKey.png"></div>
                    <p class="product-title">125x Green Booty Key</p>
                    <p class="product-price">10 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Extra/RedKey.png"></div>
                    <p class="product-title">5x Red Booty Key</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Extra/RedKey.png"></div>
                    <p class="product-title">20x Red Booty Key</p>
                    <p class="product-price">10 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Extra/RedKey.png"></div>
                    <p class="product-title">50x Red Booty Key</p>
                    <p class="product-price">25 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Extra/BlueKey.png"></div>
                    <p class="product-title">5x Blue Booty Key</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Extra/BlueKey.png"></div>
                    <p class="product-title">20x Blue Booty Key</p>
                    <p class="product-price">10 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product" style="height: 100%;">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Extra/BlueKey.png"></div>
                    <p class="product-title">50x Blue Booty Key</p>
                    <p class="product-price">25 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
            </div>

            <div class="row rb-panel design" style="display: none;">
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/albania.png"></div>
                    <p class="product-title">Albania</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/austria.png"></div>
                    <p class="product-title">Austria</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/Belgium.png"></div>
                    <p class="product-title">Belgium</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/croatia.png"></div>
                    <p class="product-title">Croatia</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/czech.png"></div>
                    <p class="product-title">Czechia</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/england.png"></div>
                    <p class="product-title">England</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/france.png"></div>
                    <p class="product-title">France</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/germany.png"></div>
                    <p class="product-title">Germany</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/hungary.png"></div>
                    <p class="product-title">Hungary</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/iceland.png"></div>
                    <p class="product-title">Iceland</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/independence.png"></div>
                    <p class="product-title">Independence</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/italy.png"></div>
                    <p class="product-title">Italy</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/nortireland.png"></div>
                    <p class="product-title">N-Ireland</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/poland.png"></div>
                    <p class="product-title">Poland</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/portugal.png"></div>
                    <p class="product-title">Portugal</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/rofireland.png"></div>
                    <p class="product-title">Ireland</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/romania.png"></div>
                    <p class="product-title">Romania</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/russia.png"></div>
                    <p class="product-title">Russia</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/slovakia.png"></div>
                    <p class="product-title">Slovakia</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/spain.png"></div>
                    <p class="product-title">Spain</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/sweden.png"></div>
                    <p class="product-title">Sweden</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/switzerland.png"></div>
                    <p class="product-title">Switzerland</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/turkey.png"></div>
                    <p class="product-title">Turkey</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/ukraine.png"></div>
                    <p class="product-title">Ukraine</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium-img" src="<?php echo Config::Get('IMG'); ?>Payment/Designs/wales.png"></div>
                    <p class="product-title">Wales</p>
                    <p class="product-price">3 DSC</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-labelledby="paymentTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="col-md-12 modal-title text-center"></h5>
                </div>
                <div class="modal-body paymentContent"></div>
                <div class="modal-footer">
                    <button type="button" class="btn modal-button waves-effect waves-light" data-dismiss="modal"><?php echo Lang::Get('Close'); ?></button>
                    <button id="BuyButton" type="button" class="btn btn-success waves-effect waves-light buyButton" data-dismiss="modal"><?php echo Lang::Get('BuyButton'); ?></button>
                </div>
            </div>
        </div>
    </div>

    <script>
        function Payment(Param1, Param2, Param3){
            /*$(".modal-title").html();
            $(".paymentContent").html('');
            $("#paymentModal").modal();*/
            swal('<?php echo Lang::Get('Error'); ?>!', "<?php echo Lang::Get('Soon'); ?>", 'error');
        }

        function changeTab(Data){
            $(".uridium").css('display', 'none');
            $(".subscription").css('display', 'none');
            $(".booster").css('display', 'none');
            $(".extra").css('display', 'none');
            $(".design").css('display', 'none');
            $(".special").css('display', 'none');

            $("." + Data).removeAttr('style');
        }
    </script>

    <div class="spacer-10"></div>