<?php require_once('../../System/Init.php'); header("Content-type: text/css; charset: UTF-8"); ?>
body {
    width: 100%;
    position:absolute;
    overflow:auto;
    background:url(<?php echo Main; ?>Assets/Img/Background.jpg) no-repeat black;
    background-size: cover;
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-position: center;
}
.spacer-10{
  margin-top: 10px;
}
.spacer-20{
  margin-top: 20px;
}
.spacer-30{
  margin-top: 30px;
}
.spacer-40{
  margin-top: 40px;
}
.spacer-50{
  margin-top: 50px;
}
.rb{
    background-color: rgba(0, 0, 0, 0.7)!important;
}
.rb-color{
    color: #fff;
}
.rb-nav{
    padding: 15px;
}

.rb-panel{
    height: 100%;
    position: relative;
    display: flex;
    min-width: 0;
    word-wrap: break-word;
    background-color: rgba(0, 0, 0, 0.7)!important;
    color: #fff;
    padding: 10px;
    border-bottom: 4px solid #dd163b;
}

.rb-table{
    height: 100%;
    position: relative;
    min-width: 0;
    word-wrap: break-word;
    background: #1d1d1d;
    background-color: rgba(0, 0, 0, 0.7)!important;
    color: #fff;
    padding: 10px;
}

.rb-panel .avatar{
    width: 110px;
    height: 120px;
    float: left;
}

.rb-panel .infos {
    width: auto;
    height: auto;
    float: left;
    padding: 0 20px;
    position: relative;
    color: #cbcbcb;
}

.rb-panel .shipName {
    font-size: 18px;
    color: #f9f9f9;
    font-weight: 700;
}

.rb-panel label {
    width: 70px;
}

.col-6{
    flex: 0 0 50%;
    max-width: 50%;
}

.col-3{
    flex: 0 0 25%;
    max-width: 25%;
}

@media (max-width: 992px) { 
    .col-6{
        flex: 0 0 100%;
        max-width: 100%;
    }
    .col-3{
        flex: 0 0 50%;
        max-width: 50%;
    }
}

.rb-adv{
    margin: 0 auto;
}

td a{
    color: #fff;
}

td a:hover{
    color: #dd163b;
}

.modal-header .close{
    color: rgba(255, 255, 255, 0.91);
}

.table-bordered, .table-bordered td, .table-bordered th, .table thead th{
    border: 1px solid #dd163b;
}

.text-center{
    margin: 0 auto;
}

.text-rb{
    color: #dd163b!important;
}

.rb-input{
    width: 100%;
    padding: 10px;
    border: none;
    outline: none;
    background: rgb(0, 0, 0, 0.6);
    color: #fff;
}

.rb-select{
    width: 100%;
    border: none;
    outline: none;
}
.rb-alert{
    background: #dd163b!important;
}
.rb-bottom{
    border-bottom: 2px solid #dd163b;
}
.play-btn{
    background: #dd163b;
    color: #fff;
}
.user-panel{
    height: 170px;
}
.responsive_ads { 
    width: 320px; 
    height: 100px; 
}
@media(min-width: 500px) { 
    .responsive_ads { 
        width: 468px; height: 60px; 
    } 
}
@media(min-width: 800px) { 
    .responsive_ads { 
        width: 728px; height: 90px; 
    } 
}
.halloffame_title{
    font-size: 16px;
}
.halloffame_rank{
    font-weight: 600;
}
.halloffame_table{
    background: rgb(0,0,0,0.6);
}
.halloffame_table_limited{
    max-height: 500px;
    overflow: auto;
}
.halloffame_myrank{
    color: #dd163b!important;
}
.halloffame_myrank a{
    color: #dd163b!important;
}
.p-10{
    padding: 10px;
}
#section_clan {
    background-image:  url(/do_img/global/hof/navigation_icon_clan_42x49.png);
}
#section_your {
    background-image:  url(/do_img/global/hof/navigation_icon_user_42x49.png);
}
#section_user {
    background-image:  url(/do_img/global/hof/navigation_icon_start_42x49.png);
}
#section_exp {
    background-image:  url(/do_img/global/hof/navigation_icon_experience_42x49.png);
}
#section_hnr {
    background-image:  url(/do_img/global/hof/navigation_icon_honor_42x49.png);
}
#section_gate {
    background-image:  url(/do_img/global/hof/navigation_icon_gate_42x49.png);
}
#section_event{
    background-image:  url(/do_img/global/hof/navigation_icon_event_42x49.png);
}
.hof_section, .hof_section_active {
    width: 42px;
    height: 49px;
    margin: 0 3px 0 0;
    padding: 0;
    background-position: 0 0;
    display: block;
    float: left;
}
.hof_section_active, .hof_section:hover {
    background-position: 0 -49px;
}

.logbook_area{
    max-height: 500px;
    overflow: auto;
}
.item {
    width: 110px;
    height: 110px;
    position: relative;
    display: inline-block;
    -webkit-transition: filter .3s;
    -moz-transition: filter .3s;
    -ms-transition: filter .3s;
    -o-transition: filter .3s;
    transition: filter .3s;
}
.item:hover{
    cursor: pointer;
    filter: brightness(.6);
}
.item-image {
    background-size: 100% 100%;
    width: 100%;
    height: 100%;
}
.item-price {
    position: absolute;
    bottom: 2px;
    text-align: center;
    width: 100%;
    font-size: 13px;
}
.shopBtn{
    flex: 1 1 auto;
    margin-right: 15px;
    margin-bottom: 5px;
}
.shopBtn:last-child{margin-right:0;}