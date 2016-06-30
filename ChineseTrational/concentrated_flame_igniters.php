<?php
require_once 'global.php';
require_once 'service_tabs.php';
$currentFile = basename($_SERVER['PHP_SELF'],'.php');

getDocHead();
echo '</head><body>';
getTopBar();
getTopNav($currentFile);
?>


<!-- WRAPPER -->
<div id="wrapper" xmlns="http://www.w3.org/1999/html">

    <!-- PAGE TITLE -->
    <header id="page-title" class="big parallax" data-stellar-background-ratio="0.8" style="background-image:url('assets/images/concentrated_flame_igniters.jpg');">
        <span class="overlay"><!-- image overlay --></span>

        <div class="container">
            <h1>Concentrated Flame Igniters</h1>

            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a class="scrollTo" href="#service-tabs">Services</a></li>
                <li class="active">Concentrated Flame Igniters</li>
            </ul>
        </div>
    </header>
    <!-- /PAGE TITLE -->

    <section class="container">

        <h2>SmartBurn<sup>&reg;</sup> Concentrated Flame Igniters Service
            <span style="margin-left: 10px"> <a  href="https://twitter.com/share" class="twitter-share-button" data-text="Check out @SmartBurnLLC Concentrated Flame Igniters Services at"  data-size=""></a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </span>
        </h2>
        <p>SmartBurn is assisting Yantai Lougyuan (YTLY) with marketing and sales efforts to bring their class leading products into the US Utility Generation Market.  Concentrated flame igniters are a family of products which include Plasma (PICS), Micronized oil, and Gas Igniters.  These technologies offer US power Generators a tool to increase their competitiveness through reduced fuel costs, reliable igniter operation and increased dispatch opportunities.</p>

        <div class="row">
            <div class="column col-sm-6  col-xs-12">

                <p>Technology benefits:</p>

                <ul>
                    <p><li>
                        Concentrated flame igniters can reduce, or eliminate, premium support fuel used for startup, turndown, or combustion support during periods poor coal quality
                    </li></p>
                    <p><li>
                        CO savings due to re dispatch of fleet generation assets
                    </li></p>
                    <p><li>
                        Proven application over a broad range of coals including anthracite, bituminous and sub bituminous
                    </li></p>

                </ul>
            </div>
            <div class="column col-sm-6  col-xs-12">



                <iframe src="https://player.vimeo.com/video/139906435?loop=1&byline=0&portrait=0" width="599" height="200" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>


            </div>
        </div>


        <p>To date YTLY Plasma igniters have been installed on GW of capacity representing XX Units, and micronized oil igniters have been installed on XX GW of Capacity representing XX units, with in combination both technologies being deployed in China, greater Asia, Russia and Europe.</p>











        <?php
        getServiceTabs($currentFile);
        ?>

    </section>

</div>
<!-- /WRAPPER -->
<?php
getFooter();
getJavascript();
?>
<script type="text/javascript" src="assets/js/page_video.js"></script>


</body>
</html>