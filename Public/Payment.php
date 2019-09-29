
    <div class="spacer-40"></div>

    <link href="https://fonts.googleapis.com/css?family=Comfortaa:300,400,700|Lato:400,700,900|Raleway:300,400,500,600,700,800,900" rel="stylesheet">
    
    <div class="container">

        <?php require_once('GLOBAL/Data.php'); ?>

        <div class="spacer-10"></div>

        <div class="col-md-12">
            <div class="row text-center">
                <button onclick="changeTab('uridium');" class="btn btn rb-button waves-effect waves-light shopBtn">URIDIUM</button>
                <button onclick="changeTab('subscription');" class="btn btn rb-button waves-effect waves-light shopBtn">SUBSCRIPTION</button>
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

            .uridium{
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
                    <div class="text-center product-img"><img class="uridium" src="<?php echo Config::Get('IMG'); ?>Payment/Uridium/1.png"></div>
                    <p class="product-title">250.000 Uridium</p>
                    <p class="product-price">5€</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width">BUY</button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium" src="<?php echo Config::Get('IMG'); ?>Payment/Uridium/2.png"></div>
                    <p class="product-title">250.000 Uridium</p>
                    <p class="product-price">5€</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width">BUY</button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium" src="<?php echo Config::Get('IMG'); ?>Payment/Uridium/3.png"></div>
                    <p class="product-title">250.000 Uridium</p>
                    <p class="product-price">5€</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width">BUY</button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium" src="<?php echo Config::Get('IMG'); ?>Payment/Uridium/4.png"></div>
                    <p class="product-title">250.000 Uridium</p>
                    <p class="product-price">5€</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width">BUY</button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium" src="<?php echo Config::Get('IMG'); ?>Payment/Uridium/5.png"></div>
                    <p class="product-title">250.000 Uridium</p>
                    <p class="product-price">5€</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width">BUY</button>
                </div>
                <div onclick="Payment('1', '2', '3');" class="product">
                    <div class="text-center product-img"><img class="uridium" src="<?php echo Config::Get('IMG'); ?>Payment/Uridium/6.png"></div>
                    <p class="product-title">250.000 Uridium</p>
                    <p class="product-price">5€</p>
                    <button class="btn btn rb-button waves-effect waves-light full-width">BUY</button>
                </div>
            </div>

            <div class="row rb-panel subscription" style="display: none;">

            </div>

            <div class="row rb-panel booster" style="display: none;">

            </div>

            <div class="row rb-panel extra" style="display: none;">

            </div>

            <div class="row rb-panel design" style="display: none;">

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
            $(".modal-title").html();
            $(".paymentContent").html('Tecrübeli kalite');
            $("#paymentModal").modal();
        }

        function changeTab(Data){
            $(".uridium").css('display', 'none');
            $(".subscription").css('display', 'none');
            $(".booster").css('display', 'none');
            $(".extra").css('display', 'none');
            $(".design").css('display', 'none');

            $("." + Data).removeAttr('style');
        }
    </script>

    <div class="spacer-10"></div>