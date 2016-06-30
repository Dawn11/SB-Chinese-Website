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
    <header id="page-title" class="big parallax" data-stellar-background-ratio="0.2" style="background-image:url('assets/images/training.jpg');">
        <span class="overlay"><!-- image overlay --></span>

        <div class="container">
            <h1>培訓及技術支持</h1>

            <ul class="breadcrumb">
                <li><a href="index.php">主頁</a></li>
                <li><a class="scrollTo" href="#service-tabs">技術服務</a></li>
                <li class="active">培訓&amp;技術支持</li>
            </ul>
        </div>
    </header>
    <!-- /PAGE TITLE -->

    <section class="container">

        <h2>SmartBurn<sup>&reg;</sup> 培訓及技術支持服務
        <!-- <span style="margin-left: 10px"> <a  href="https://twitter.com/share" class="twitter-share-button" data-text="Check out @SmartBurnLLC Training and Support Services at"  data-size=""></a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </span> -->
        </h2>
        <!-- <p>SmartBurn has extensive experience evaluating slagging and fouling, boiler corrosion, boiler thermal performance and achieving &quot;best-in-class&quot; NOx emissions levels while simultaneously extending the range of fuels which can be fired and improving performance in PC-fired boilers and other systems.  As a result, we bring substantial capabilities in applying advanced analytical tools to resolve performance issues that are important to our clients. </p> -->
        <p>SmartBurn 有著豐富的工程技術經驗，應用先進的分析工具來解決客戶所面臨的鍋爐性能問題。我們對於結焦、沾汙、鍋爐腐蝕情況和熱力性能的評估能力處於行業的頂尖水準，可以實現在保持氮氧化物（NOx）排放水平的同時，擴展燃料的範圍並且提升煤粉鍋爐等熱能設備的性能。</p>
        <!-- <p>In order to assist our clients with sustaining achieved results, SmartBurn offers a range of training and support services:</p> -->
        <p>SmartBurn通過提供以下培訓及技術支持服務幫助客戶維持鍋爐的最佳性能：</p>

        <ul>
            <p><li>
                鍋爐操作員培訓
            </li></p>
            <p><li>
                維持鍋爐性能的遠程和電召技術支持
            </li></p>
            <p><li>
                神經網絡/優化程序和控制系統技術支持
            </li></p>
        </ul>

        <hr/>
        <span id="service-tabs"><h3>SmartBurn<sup>&reg;</sup>全部技術服務：</h3></span>

<!--        <h2>SmartBurn<sup>SM</sup> Training and Support Services</h2>-->
<!--        <p>SmartBurn has extensive experience evaluating slagging and fouling, boiler corrosion, boiler thermal performance and achieving &quot;best-in-class&quot; NOx emissions levels while simultaneously extending the range of fuels which can be fired and improving performance in PC-fired boilers and other systems.  As a result, we bring substantial capabilities in applying advanced analytical tools to resolve performance issues that are important to our clients. </p>-->
<!--        <p>In order to assist our clients with sustaining achieved results, SmartBurn offers a range of training and support services:</p>-->
<!---->
<!--        <ul>-->
<!--            <p><li>-->
<!--                Operator training-->
<!--            </li></p>-->
<!--            <p><li>-->
<!--                On-call and remote support to sustain performance reliability-->
<!--            </li></p>-->
<!--            <p><li>-->
<!--                Neural network/optimizer and controls support-->
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