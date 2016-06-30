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
    <header id="page-title" class="big parallax" data-stellar-background-ratio="0.2" style="background-image:url('assets/images/consulting.jpg');">
        <span class="overlay"><!-- image overlay --></span>

        <div class="container">
            <h1>技術咨詢</h1>

            <ul class="breadcrumb">
                <li><a href="index.php">主頁</a></li>
                <li><a class="scrollTo" href="#service-tabs">技術服務</a></li>
                <li class="active">技術咨詢</li>
            </ul>
        </div>
    </header>
    <!-- /PAGE TITLE -->

    <section class="container">

        <h2>SmartBurn<sup>&reg;</sup> 技術咨詢服務
        <!-- <span style="margin-left: 10px"> <a  href="https://twitter.com/share" class="twitter-share-button" data-text="Check out @SmartBurnLLC Technical Consulting Services at" data-size=""></a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </span> -->
        </h2>
        <!-- <p>SmartBurn has extensive experience utilizing proprietary advanced computational modeling (ACM) tools to evaluate and optimize a wide range of boiler sizes and types firing a variety fuels.  Our strong foundation in research and technology development coupled with our hands-on optimization experience provides a superior foundation for tackling our clients most unique and difficult problems.</p> -->
        <p>SmartBurn 有著豐富的工程技術經驗，利用我們獨有的先進計算機建模工具來評估和優化燃燒不同燃料的各種大小和型號的鍋爐，我們的技術基於強大的理論基礎，再加上實際的燃燒優化經驗，讓我們能夠出色地解決客戶的各種難題。</p>
        <!-- <p>Other technical consulting services include:</p> -->
        <p>其他技術咨詢服務包括：</p>

        <ul>
            <p><li>
                二氧化碳（CO<sub>2</sub>）減排
            </li></p>
            <p><li>
                生物質燃料可行性
            </li></p>
            <p><li>
                鍋爐振動
            </li></p>
            <p><li>
                新技術的研發
            </li></p>
        </ul>

        <hr/>
        <span id="service-tabs"><h3>SmartBurn<sup>&reg;</sup>全部技術服務：</h3></span>

<!--        <h2>SmartBurn<sup>SM</sup> Technical Consulting Services</h2>-->
<!--        <p>SmartBurn has extensive experience utilizing proprietary advanced computational modeling (ACM) tools to evaluate and optimize a wide range of boiler sizes and types firing a variety fuels.  Our strong foundation in research and technology development coupled with our hands-on optimization experience provides a superior foundation for tackling our clients most unique and difficult problems.</p>-->
<!--        <p>Other technical consulting services include:</p>-->
<!---->
<!--        <ul>-->
<!--            <p><li>-->
<!--                CO<sub>2</sub> reduction-->
<!--            </li></p>-->
<!--            <p><li>-->
<!--                Biomass feasibility-->
<!--            </li></p>-->
<!--            <p><li>-->
<!--                Boiler vibration-->
<!--            </li></p>-->
<!--            <p><li>-->
<!--                Research and development of new technologies-->
<!--            </li></p>-->
<!--        </ul>-->
<!---->
<!--        <hr/>-->
<!--        <span id="service-tabs"><h3>All SmartBurn<sup>SM</sup> Services</h3></span>-->

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

</body>
</html>