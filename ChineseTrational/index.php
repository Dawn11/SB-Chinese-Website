<?php
require_once 'global.php';
$currentFile = basename($_SERVER['PHP_SELF'], '.php');

getDocHead();
echo '</head><body>';
getTopBar();
getTopNav($currentFile);
?>

<!-- WRAPPER -->
<div id="wrapper" xmlns="http://www.w3.org/1999/html" style="padding-bottom: 0">

    <section id="slider" class="half-screen" data-autoplay="5000" data-mouseover-stop="false">

        <!-- slider navigation -->
        <nav class="slides-navigation">
            <a class="prev" href="#"></a>
            <a class="next" href="#"></a>
        </nav>

        <ul class="slides-container">

            <!-- Item 1 -->
            <li>
                <div class="image-caption">
                    <div class="inner text-center">
                        <div class="block row">
                            <div class="column hidden-xs">
                                <h3 class="dark"><span style="line-height: 1.5em">
                                    為電力行業提供一流的技術服務與產品</span>
                                </h3>
                            </div>
                        </div>
                        <div class="block" style="margin-top: 2.5em">
                            <h1><span style="line-height: 1.5em">USA &middot; China &middot; Beyond</span></h1>
                        </div>
                    </div>
                </div>

                <div style="background-image: url('assets/images/home1.jpg');" class="fullscreen-img"></div>
            </li>


            <li>
                <div class="image-caption">
                    <div class="inner"><!-- text center , text-left or text-right -->
                        <div class="block text-left">
                            <h3 class="dark">At SmartBurn</h3>
                        </div>
                        <div class="block" style="margin-bottom: 8em">
                            <h1><span style="line-height: 1.5em">Knowledge Makes Power</span></h1>
                        </div>
                        <a href="background.php" class="btn btn-info btn-lg">了解更多</a>
                    </div>
                </div>
                <div style="background-image: url('assets/images/home2.jpg');" class="fullscreen-img"></div>
        </ul>
    </section>

    <section class="container">
        <div class="row">
            <div class="column col-sm-5 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                <div class="row">
                    <div class="column col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-1">

                        <h3><strong>我們的服務</strong></h3>

                        <div class="divider half-margins"></div>
                        <ul class="list-icon check">
                            <p>
                            <li><a class="service-text" href="modeling.php"><h4>建模和工程設計服務</h4></a></li>
                            </p>
                            <p>
                            <li><a class="service-text" href="plant_fleet_optimization.php"><h4>電廠設備優化服務</h4></a></li>
                            </p>
                            <p>
                            <li><a class="service-text" href="equipment_design_capital_project.php"><h4>設備設計和工程項目服務</h4></a></li>
                            </p>
                            <p>
                            <li><a class="service-text" href="training_support.php"><h4>培訓及技術支持服務</h4></a></li>
                            </p>
                            <p>
                            <li><a class="service-text" href="technical_consulting.php"><h4>技術咨詢服務</h4></a></li>
                            </p>
                            <p>
                            <!-- <li><a class="service-text" href="concentrated_flame_igniters.php">Concentrated Flame Igniters</a></li>
                            </p> -->
                        </ul>
                    </div>

                    <!-- <div class="column col-sm-10 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <div class="item-box">
                            <figure>
                                <a class="item-hover" href="SmartBurnOverview.pdf">
                                    <span class="overlay color1"></span>
                                    <span class="inner">
                                        <span class="block fa fa-download fsize20"></span>
                                        SmartBurnOverview.pdf
                                    </span>
                                </a>
                                <img class="img-responsive" src="assets/images/brochure.jpg" width="100%" height="auto"
                                     alt="SmartBurn Brochure">
                            </figure>
                            <a href="SmartBurnOverview.pdf">
                                <div class="item-box-desc">
                                    <p class="text-center" style="margin: 0">下載SmartBurn手冊</p>
                                </div>
                            </a>
                        </div>
                    </div> -->
                </div>
            </div>



            <div class="column col-sm-5 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                <div style="max-width: 520px">
                    <h3><strong>了解更多</strong></h3>
                    <div class="divider half-margins"></div>
                    
                        <div class="column col-sm-10 col-sm-offset-0 col-xs-10 col-xs-offset-1">
                            <div class="item-box">
                                <figure>
                                    <a class="item-hover" href="SmartBurnOverview.pdf">
                                        <span class="overlay color1"></span>
                                        <span class="inner">
                                            <span class="block fa fa-download fsize20"></span>
                                            SmartBurnOverview.pdf
                                        </span>
                                    </a>
                                    <img class="img-responsive" src="assets/images/brochure.jpg" width="120%" height="auto"
                                         alt="SmartBurn Brochure">
                                </figure>
                                <a href="SmartBurnOverview.pdf">
                                    <div class="item-box-desc">
                                        <p class="text-center" style="margin: 0">下載SmartBurn手冊</p>
                                    </div>
                                </a>
                            </div>
                        </div>                 
                </div>
            </div>

            <!-- <div class="column col-sm-6 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                <div style="max-width: 520px">
                    <h4> SmartBurn新聞
                        <span style="float: right">
                            <a href="https://twitter.com/SmartBurnLLC" class="twitter-follow-button"
                                data-show-count="false" data-dnt="true"
                                data-align="right">
                            </a>
                            <script src="http://platform.twitter.com/widgets.js" type="text/javascript"></script>
                        </span>
                    </h4>
                </div> -->

                <!--Timeline-->
                <!-- <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/SmartBurnLLC"
                   data-widget-id="666395920439734273"
                   data-height="687"
                   data-chrome="noheader">
                </a>
                <script>!function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + "://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");
                </script> -->
            </div>


        </div>
    </section>

    <div class="bs-callout text-center styleBackground" style="margin-bottom: 0">
        <div>
            <h3>
                <p style="line-height: 1.5em">SmartBurn<sup>&reg;</sup> 是業內領先的技術服務供應商</p>
                                <!-- <p style="line-height: 1.5em">SmartBurn<sup>SM</sup> is the leading service provider in the industry.</p> -->
                <p style="line-height: 1.5em">At SmartBurn, <strong><b style="color: #FFCC00">knowledge makes power</b></strong>.</p>
            </h3>
        </div>
        <hr class="half-margins invisible"/>
        <div>
            <a href="modeling.php#service-tabs" class="btn btn-info btn-lg">查看我們的技術服務</a>
        </div>
    </div>
</div>
<!-- /WRAPPER -->

<?php
getFooter();
getJavascript();
?>
<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information. -->
<!--<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-XXXXX-X', 'domainname.com');
    ga('send', 'pageview');
</script>
-->

</body>
</html>