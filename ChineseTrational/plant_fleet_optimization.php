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
    <header id="page-title" class="big parallax" data-stellar-background-ratio="0.2" style="background-image:url('assets/images/plant.jpg');">
        <span class="overlay"><!-- image overlay --></span>

        <div class="container">
            <h1>電廠設備優化</h1>

            <ul class="breadcrumb">
                <li><a href="index.php">主頁</a></li>
                <li><a class="scrollTo" href="#service-tabs">技術服務</a></li>
                <li class="active">電廠設備優化</li>
            </ul>
        </div>
    </header>
    <!-- /PAGE TITLE -->

    <section class="container">

        <h2>SmartBurn<sup>&reg;</sup> 電廠設備優化服務
        <!-- <span style="margin-left: 10px"> <a  href="https://twitter.com/share" class="twitter-share-button" data-text="Check out @SmartBurnLLC Plant/Fleet Optimization Services at"  data-size=""></a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </span> -->
        </h2>
        <!-- <p>SmartBurn has a practical, economic and proven approach to optimize combustion in coal-fired boilers.  The SmartBurn approach integrates science and technology to understand and re-engineer boilers to resolve issues that impact unit operation, thereby providing the necessary flexibility to improve boiler and unit performance.  Our proprietary technology combined with our substantial operating experience provide the foundation necessary to support our clients in achieving sustained performance and emissions control across the load range.</p> -->
        <p>SmartBurn 擁有實用的、經濟的並且被證明有效的燃煤鍋爐優化技術，它結合了科學技術上的創新和以往工程應用上的經驗，對影響鍋爐運行的問題有著更深一步的理解和把握，因此可以靈活地解決實際問題、提升鍋爐燃燒性能、滿足客戶在不同載荷下控制排放物並且運行性能達標的需求。</p>
        <!-- <p>SmartBurn&rsquo;s plant/fleet optimization services include:</p> -->
        <p>SmartBurn 對電廠的優化服務包括：</p>

        <ul>
            <p><li>
                原型性能測試與評估
            </li></p>
            <p><li>
                現有設備的燃燒調試和優化
            </li></p>
            <p><li>
                汙染物排放優化以滿足國內電廠的排放標準
            </li></p>
            <p><li>
                運行性能改進
                <ul>
                    <li>提高不同載荷下的鍋爐效率和熱效率</li>
                    <li>減少飛灰含碳量</li>
                    <li>減少鍋爐結焦和沾汙</li>
                </ul>
            </li></p>
            <p><li>
                基於現有設備的汙染物減排
                <ul>
                    <li>協助客戶達到汙染物排放標準</li>
                    <li>減少氮氧化物（NOx）的排放，同時保持一氧化碳（CO）排放和蒸汽溫度</li>
                    <li>富反應劑噴射/選擇性非催化還原（RRI/SNCR） 的性能優化和調整，減少尿素（Urea）和催化劑的消耗</li>
                </ul>
            </li></p>
            <p><li>
                工程項目的技術支持
            </li></p>
        </ul>

        <hr/>
        <span id="service-tabs"><h3>SmartBurn<sup>&reg;</sup>全部技術服務：</h3></span>

<!--        <h2>SmartBurn<sup>SM</sup> Plant/Fleet Optimization Services</h2>-->
<!--        <p>SmartBurn has a practical, economic and proven approach to optimize combustion in coal-fired boilers.  The SmartBurn approach integrates science and technology to understand and re-engineer boilers to resolve issues that impact unit operation, thereby providing the necessary flexibility to improve boiler and unit performance.  Our proprietary technology combined with our substantial operating experience provide the foundation necessary to support our clients in achieving sustained performance and emissions control across the load range.</p>-->
<!--        <p>SmartBurn&rsquo;s plant/fleet optimization services include:</p>-->
<!---->
<!--        <ul>-->
<!--            <p><li>-->
<!--                Baseline characterization testing and assessment-->
<!--            </li></p>-->
<!--            <p><li>-->
<!--                Combustion tuning and optimization with existing equipment-->
<!--            </li></p>-->
<!--            <p><li>-->
<!--                MATS Tuning-->
<!--            </li></p>-->
<!--            <p><li>-->
<!--                Performance improvement-->
<!--                <ul>-->
<!--                    <li>Improve boiler efficiency and thermal performance across the load range</li>-->
<!--                    <li>Reduce LOI</li>-->
<!--                    <li>Reduce slagging and fouling</li>-->
<!--                </ul>-->
<!--            </li></p>-->
<!--            <p><li>-->
<!--                Emission reduction with existing equipment-->
<!--                <ul>-->
<!--                    <li>Assists clients in complying with emissions regulations</li>-->
<!--                    <li>NOx emissions reduction while maintaining CO and steam temperature</li>-->
<!--                    <li>RRI/SNCR performance optimization / modification to reduce urea and catalyst costs</li>-->
<!--                </ul>-->
<!--            </li></p>-->
<!--            <p><li>-->
<!--                Technical support for capital project planning-->
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