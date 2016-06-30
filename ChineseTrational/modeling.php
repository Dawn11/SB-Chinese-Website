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
    <header id="page-title" class="big parallax" data-stellar-background-ratio="0.2" style="background-image:url('assets/images/modeling.jpg');">
        <span class="overlay"><!-- image overlay --></span>

        <div class="container">
            <h1>建模和工程設計</h1>

            <ul class="breadcrumb">
                <li><a href="index.php">主頁</a></li>
                <li><a class="scrollTo" href="#service-tabs">技術服務</a></li>
                <li class="active">建模&amp;工程設計</li>
            </ul>
        </div>
    </header>
    <!-- /PAGE TITLE -->

    <section class="container">

        <h2>SmartBurn<sup>&reg;</sup> 建模和工程設計服務
        <!-- <span style="margin-left: 10px"> <a  href="https://twitter.com/share" class="twitter-share-button" data-text="Check out @SmartBurnLLC Modeling and Design Services at"  data-size=""></a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </span> -->
        </h2>
        <!-- <p>SmartBurn utilizes proprietary sub-models built with ANSYS Fluent&#8482; software to simulate, evaluate and optimize existing boiler systems performance as well as accurately predict emissions reduction profiles across client-designated operating scenarios. SmartBurn can also quickly evaluate the effects of potential major modifications on boiler performance prior to our clients investing in expensive capital equipment.</p> -->
        <p>SmartBurn 團隊運用其基於ANSYS Fluent&#8482; 軟件開發的專有子模型來模擬、評估和優化現有鍋爐系統的性能，並且可以針對客戶所指定的鍋爐運行方案進行準確的汙染物減排預測。同時，SmartBurn 團隊也可以在客戶大量投資購買和安裝實體設備之前，通過數值模擬，快速地評估這些改變將對鍋爐性能所帶來的主要影響，並給出調整預案。</p>
        <!-- <p>SmartBurn utilizes an assortment of customized modeling and design services to resolve a wide range of performance issues that are important to our clients:</p> -->
        <p>SmartBurn 運用一系列定制化的建模和工程設計服務來解決客戶所面臨的各種鍋爐性能問題：</p>

        <ul>
            <p><li>
                高級計算機建模（Applied/Advanced Computational Modeling）
                <ul>
                    <li>設計新組件及系統</li>
                    <li>熱力性能</li>
                    <li>替代燃料及可再生燃料；燃料添加劑</li>
                    <li>侵蝕和腐蝕</li>
                    <li>氮氧化物、汞、一氧化碳及二氧化硫等汙染物減排</li>
                    <li>富反應劑噴射、選擇性非催化還原和選擇性催化還原（RRI、SNCR 和 SCR）的性能優化及調整</li>
                </ul>
            </li></p>
            <p><li>
                AshPro<sup>SM</sup>鍋爐結渣和沾汙模型
            </li></p>
            <p><li>
                汞捕集的評估及優化
            </li></p>
            <p><li>
                對於替代燃料和低成本燃料的性能評估及優化
                <ul>
                    <li>混燃和燃料轉換</li>
                    <li>燃煤至天然氣的轉換</li>
                </ul>
            </li></p>
            <p><li>
                關於設備改造或升級的運行優化以及汙染物減排的工程設計
                <ul>
                    <li>新設備性能評估</li>
                    <li>設備性能優化</li>
                </ul>
            </li></p>
        </ul>

        <hr/>
        <span id="service-tabs"><h3>SmartBurn<sup>&reg;</sup>全部技術服務：</h3></span>

<!--        <h2>SmartBurn<sup>SM</sup> Modeling and Design Services</h2>-->
<!--        <p>SmartBurn utilizes proprietary sub-models built with ANSYS Fluent&#8482; software to simulate, evaluate and optimize existing boiler systems performance as well as accurately predict emissions reduction profiles across client-designated operating scenarios. SmartBurn can also quickly evaluate the effects of potential major modifications on boiler performance prior to our clients investing in expensive capital equipment.</p>-->
<!--        <p>SmartBurn utilizes an assortment of customized modeling and design services to resolve a wide range of performance issues that are important to our clients:</p>-->
<!---->
<!--        <ul>-->
<!--            <p><li>-->
<!--                Applied/Advanced Computational Modeling (ACM)-->
<!--                <ul>-->
<!--                    <li>Design of new components and systems</li>-->
<!--                    <li>Thermal performance</li>-->
<!--                    <li>Alternative and renewable fuels; fuel additives</li>-->
<!--                    <li>Erosion and corrosion</li>-->
<!--                    <li>Emissions reduction including NOx, CO Mercury, SO<sub>2</sub></li>-->
<!--                    <li>RRI/SNCR and SCR performance and modifications</li>-->
<!--                </ul>-->
<!--            </li></p>-->
<!--            <p><li>-->
<!--                AshPro<sup>SM</sup> slagging and fouling modeling-->
<!--            </li></p>-->
<!--            <p><li>-->
<!--                Mercury capture evaluations and optimization in existing or planned control systems-->
<!--            </li></p>-->
<!--            <p><li>-->
<!--                Evaluation and optimization of performance on alternative or lower cost fuels-->
<!--                <ul>-->
<!--                    <li>Fuel co-firing and/or switching</li>-->
<!--                    <li>Coal-to-natural-gas conversion</li>-->
<!--                </ul>-->
<!--            </li></p>-->
<!--            <p><li>-->
<!--                Conceptual design of equipment modifications, or replacement for operational improvement or combustion-related emission reduction-->
<!--                <ul>-->
<!--                    <li>Evaluation of potential equipment</li>-->
<!--                    <li>Equipment optimization</li>-->
<!--                </ul>-->
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