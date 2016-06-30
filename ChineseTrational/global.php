<?php
require_once 'util/hide_email.php';

function getDocHead()
{
    echo '
<!DOCTYPE html>
<!--[if IE 8]>			<html class="ie ie8"> <![endif]-->
<!--[if IE 9]>			<html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->	<html> <!--<![endif]-->
<head>
    <meta charset="utf-8" />
    <title>SmartBurn - Knowledge Makes Power</title>
    <meta name="keywords" content="SmartBurn, Energy" />
    <meta name="description" content="" />
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <!-- mobile settings -->
    <meta name="viewport" content="width=device-width, maximum-scale=1, initial-scale=1, user-scalable=0" />

    <!-- WEB FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800" rel="stylesheet" type="text/css" />

    <!-- CORE CSS -->
    <link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/owl-carousel/owl.theme.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/owl-carousel/owl.transitions.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/animate.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/superslides.css" rel="stylesheet" type="text/css" />

    <!-- THEME CSS -->
    <link href="assets/css/essentials.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/layout.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/layout-responsive.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/color_scheme/darkblue.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/layout-dark.css" rel="stylesheet" type="text/css" />

    <!-- Morenizr -->
    <script type="text/javascript" src="assets/plugins/modernizr.min.js"></script>

';
}

function getTopBar(){
//     echo '
// <header id="topHead">
//     <div class="container">

//         <!-- PHONE/EMAIL -->
// 				<span class="quick-contact pull-left">
// 					<i class="fa fa-phone"></i><a href="tel:+1-608-821-8188"> +1 608-821-8188 </a>
//                     <i class="fa fa-envelope"></i><a href="mailto:mail@smartburn.com"> <i class="fa"></i>mail@smartburn.com</a>
// 				</span>
//         <!-- /PHONE/EMAIL -->

//         <!-- LANGUAGE -->
//         <div class="btn-group pull-right hidden-xs">
//             <button class="dropdown-toggle language" type="button" data-toggle="dropdown">
//                 <img src="assets/images/flags/us.png" width="16" height="11" alt="EN Language" /> English <span class="caret"></span>
//             </button>

//             <ul class="dropdown-menu">
//                 <li>
//                     <a href="#">
//                         <img src="assets/images/flags/us.png" width="16" height="11" alt="EN Language" /> [US] English
//                     </a>
//                 </li>
//                 <li>
//                     <a href="#">
//                         <img src="assets/images/flags/cn.png" width="16" height="11" alt="CN 语言" /> [CN] 简体中文
//                     </a>
//                 </li>
//                 <li>
//                     <a href="#">
//                         <img src="assets/images/flags/hk.png" width="16" height="11" alt="CN 語言" /> [HK] 繁體中文
//                     </a>
//                 </li>

//             </ul>
//         </div>
//         <!-- /LANGUAGE -->

//         <!-- LINKS -->
//         <div class="pull-right nav hidden-xs">
//             <a href="background.php"><i class="fa fa-angle-right"></i> About</a>
//             <a href="contacts.php"><i class="fa fa-angle-right"></i> Contact</a>
//         </div>
//         <!-- /LINKS -->

//     </div>
// </header>
//     ';
}

function getTopNav($currentFile){
    $aboutArr = array('background','careers');
    $servicesArr = array('modeling','plant_fleet_optimization','equipment_design_capital_project','training_support','technical_consulting','concentrated_flame_igniters');
    echo '
    <!-- TOP NAV -->
<header id="topNav" class="topHead"><!-- remove class="topHead" if no topHead used! -->

    <div class="container">
        <!-- Mobile Menu Button -->
        <button class="btn btn-mobile" data-toggle="collapse" data-target=".nav-main-collapse">
            <i class="fa fa-bars"></i>
        </button>

        <!-- Logo text or image -->
        <div class="pull-left">
        <a class="logo" href="index.php">';
    echo '<img src="assets/images/SmartBurnWht3.png" width="auto" height="60px" alt="SmartBurn" />';
//    echo '<img src="assets/images/SmartBurnWht3_SM.png" width="auto" height="35px" alt="SmartBurn" style="margin: 3px 5px"/>';
    echo '
        </a>
        </div>

        <!-- Top Nav -->
        <div class="navbar-collapse nav-main-collapse collapse pull-right">
            <nav class="nav-main mega-menu">
                <ul class="nav nav-pills nav-main scroll-menu" id="topMain">

                    <li class="' . ('index' == $currentFile ?'active':'') . '">
                        <a href="index.php">首頁</a>
                    </li>

                    <li class="dropdown ' . (in_array($currentFile,$aboutArr)?'active':'') . '">
                        <a class="dropdown-toggle" href="#">
                            關於我們<i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="background.php">背景</a></li>
                            <li><a href="SmartBurnOverview.pdf">下載SmartBurn手冊</a></li>
                            <!--<li class="divider"></li>
                            <li><a href="careers.php">工作机会</a></li>-->
                        </ul>
                    </li>


                    <li class="dropdown ' . (in_array($currentFile,$servicesArr)?'active':'') . '">
                        <a class="dropdown-toggle" href="#">
                            技術服務<i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="modeling.php">建模和工程設計</a></li>
                            <li><a href="plant_fleet_optimization.php">电厂设备优化</a></li>
                            <li><a href="equipment_design_capital_project.php">設備設計和工程項目</a></li>
                            <li><a href="training_support.php">培訓和技術支持</a></li>
                            <li><a href="technical_consulting.php">技術咨詢</a></li>
                            <!--<li><a href="concentrated_flame_igniters.php">Concentrated Flame Igniters</a></li>-->
                        </ul>
                    </li>

                    <li class="' . ('presentations' == $currentFile ?'active':'') . '">
                        <a href="presentations.php">
                            技術論文與演講
                        </a>
                    </li>


                    <li class="' . ('contacts' == $currentFile ?'active':'') . '">
                        <a href="contacts.php">
                            聯系我們
                        </a>
                    </li>

                    <!-- <div class="btn-group pull-right hidden-xs">
                        <button class="dropdown-toggle language" type="button" data-toggle="dropdown">
                            <img src="assets/images/flags/hk.png" width="16" height="11" alt="CN 語言" /> [HK] 繁體中文 <span class="caret"></span>
                        </button>

                         <ul class="dropdown-menu">
                            <li>
                                <a href="#">
                                    <img src="assets/images/flags/us.png" width="16" height="11" alt="EN Language" /> [US] English
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/flags/cn.png" width="16" height="11" alt="CN 语言" /> [CN] 简体中文
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="assets/images/flags/hk.png" width="16" height="11" alt="CN 語言" /> [HK] 繁體中文
                                </a>
                            </li>
                        </ul>
                    </div>
 -->
                    <li class="dropdown ' . (in_array($currentFile,$servicesArr)?'active':'') . '">
                        <a class="dropdown-toggle"><img src="assets/images/flags/hk.png" width="16" height="11" alt="CN 語言" /> [HK] 繁體中文<i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><img src="assets/images/flags/cn.png" width="16" height="11" alt="CN 语言" /> [CN] 简体中文</a></li>
                            <li><a href="#"><img src="assets/images/flags/us.png" width="16" height="11" alt="EN Language" /> [US] English</a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
        <!-- /Top Nav -->

    </div>
</header>

<span id="header_shadow"></span>
<!-- /TOP NAV -->
    ';
}

function getFooter(){
    echo '
    <!-- FOOTER -->
<footer>

    <!-- copyright , scrollTo Top -->
    <div class="footer-bar">
        <div class="container">
            <span class="copyright"> Copyright &copy; 2012-2016 SmartBurn, LLC. 保留所有權利。 </span>
            <a class="toTop" href="#topNav">返回頂部<i class="fa fa-arrow-circle-up"></i></a>
        </div>
    </div>
    <!-- copyright , scrollTo Top -->


    <!-- footer content -->
    <div class="footer-content">
        <div class="container">

            <div class="row">


                <!-- FOOTER CONTACT INFO -->
                <div class="column col-md-6">

                    <address class="font-opensans">
                        <ul>
                            <li class="footer-sprite address">
                                <!--<a href="http://www.google.com/maps/place/579+D&apos;onofrio+Dr+%23200,+Madison,+WI+53719/">-->
                                579 D&apos;Onofrio Drive, Suite 200<br />
                                威斯康辛州，麥迪遜，美國。 郵編：53719。
                                <!-- </a> -->
                            </li>
                            <li class="footer-sprite phone">
                                <!--<a href="tel:+1-608-821-8188">-->+1 608-821-8188<!--</a>-->
                            </li>
                            <li class="footer-sprite email">
                                <p>info@smartburn.com</p>
                            </li>
                            <!--<li class="footer-sprite email">';
    echo hide_email("info@smartburn.com");
    echo '                  </li> -->
                            <li> <span style="padding: 0px 8px 7px 0px">關註我們： </span>
                                <!--<a href="http://twitter.com/SmartBurnLLC" class="social rounded fa fa-twitter"></a>-->
								<a href="http://www.linkedin.com/company/smartburn-llc" class="social rounded fa fa-linkedin"></a>
								<!--<a href="http://www.facebook.com/SmartBurnLLC" class="social rounded fa fa-facebook"></a>-->
                            </li>
                            <li>
                                <span><a href="background.php">關於我們</a> | <a href="contacts.php">聯系我們</a> | <a href="#" data-toggle="modal" data-target="#termOfUse">使用條款</a></span>
                            </li>
                        </ul>
                    </address>

                        <!-- modal dialog -->
                    <div class="modal fade" id="termOfUse" tabindex="-1" role="dialog" aria-labelledby="Terms of Use Dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">

                                <div class="modal-header"><!-- modal header -->
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">SmartBurn<sup>&reg;</sup> 網站使用條款</h4>
                                </div><!-- /modal header -->

                                <!-- modal body -->
                                <div class="modal-body"><font size="2.5">
                                    &copy; 2012-2016 SmartBurn, LLC. 保留所有權利。
    本網站的所有內容，未經過SmartBurn有限責任公司的書面許可，不得轉載或復制。本網站的內容均是以“現有狀況”的基礎上提供的，SmartBurn 並不對網站所提供的資料做保證、明示、法定的陳述，或者暗示。SmartBurn 保留隨時更新網站內容的權利。SmartBurn 收取的任何關於詢問的信息都會保密，並只會在SmartBurn 內部使用以對提問者做出回應，SmartBurn 不會販賣，轉載或者散布取得的這些信息。</font>
                                </div>
                                <!-- /modal body -->

                                <div class="modal-footer"><!-- modal footer -->
                                    <button class="btn btn-primary" data-dismiss="modal">确认</button>
                                </div><!-- /modal footer -->

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /FOOTER CONTACT INFO -->


                <!-- FOOTER LOGO -->
                <div class="column logo col-md-6">
                    <div class="logo-content pull-right">';
    echo '    <img class="animate_fade_in" src="assets/images/SmartBurnWht3.png" height="100px" width="auto" alt="SmartBurn" />';
//    echo '    <img class="animate_fade_in" src="assets/images/SmartBurnWht3_SM.png" height="auto" width="380px" alt="SmartBurn" style="margin: 20px 10px"/>';
    echo'

                        <img class="animate_fade_in" src="assets/images/logo-tagline.png" height="34px" width="auto" alt="Knowledge Makes Power" />
                    </div>
                </div>
                <!-- /FOOTER LOGO -->

            </div>

        </div>
    </div>
    <!-- footer content -->

</footer>
<!-- /FOOTER -->

    ';
}

//                        <h4 class="text-center animate_fade_in">Knowledge Makes Power</h4>


function getJavascript(){
    echo '
<script type="text/javascript" src="assets/plugins/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.cookie.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.appear.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.isotope.js"></script>
<script type="text/javascript" src="assets/plugins/masonry.js"></script>

<script type="text/javascript" src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
<script type="text/javascript" src="assets/plugins/owl-carousel/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/plugins/stellar/jquery.stellar.min.js"></script>
<script type="text/javascript" src="assets/plugins/knob/js/jquery.knob.js"></script>
<script type="text/javascript" src="assets/plugins/jquery.backstretch.min.js"></script>
<script type="text/javascript" src="assets/plugins/superslides/dist/jquery.superslides.min.js"></script>
<script type="text/javascript" src="assets/plugins/mediaelement/build/mediaelement-and-player.min.js"></script>

<script type="text/javascript" src="assets/js/scripts.js"></script>
';
}

?>