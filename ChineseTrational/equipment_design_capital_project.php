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
    <header id="page-title" class="big parallax" data-stellar-background-ratio="0.2" style="background-image:url('assets/images/equipment.jpg');">
        <span class="overlay"><!-- image overlay --></span>

        <div class="container">
            <h1>設備設計和工程項目</h1>

            <ul class="breadcrumb">
                <li><a href="index.php">主頁</a></li>
                <li><a class="scrollTo" href="#service-tabs">技術服務</a></li>
                <li class="active">設備設計&amp;工程項目</li>
            </ul>
        </div>
    </header>
    <!-- /PAGE TITLE -->

    <section class="container">

        <h2>SmartBurn<sup>&reg;</sup> 設備設計和工程項目服務
            <!-- <span style="margin-left: 10px"> <a  href="https://twitter.com/share" class="twitter-share-button" data-text="Check out @SmartBurnLLC Equipment Design and Capital Projects Services at" data-size=""></a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
            </span> -->
        </h2>
        <!-- <p>Between SmartBurn&rsquo;s superior modeling, engineering design and commissioning experience, and the fabrication and procurement strengths of our partners, SmartBurn is well-positioned to play an integral role in assisting our clients to successfully implement a variety of equipment design and capital projects.</p> -->
        <p>SmartBurn 擁有高級建模技術、工程設計能力以及長期的實際經驗積累，另外再結合我們合作夥伴的裝備制造和采購能力，SmartBurn扮演了技術轉化和整合的關鍵角色，成功地協助我們的客戶施工完成了一系列的設備設計和大型工程項目。</p>
        <!-- <p>SmartBurn&rsquo;s equipment design and capital projects capabilities include:</p> -->
        <p>SmartBurn的設備設計和工程項目服務包括：</p>
        <ul>
            <p><li>
                根據客戶不同需求定制化的設備設計
                <ul>
                    <li>定制的燃盡風（OFA）系統設計</li>
                    <li>先進燃燒器設計</li>
                </ul>
            </li></p>
            <p><li>
                設備采購
            </li></p>
            <p><li>
                技術支持：安裝、調試、試運行、優化
            </li></p>
        </ul>

        <hr/>
        <span id="service-tabs"><h3>SmartBurn<sup>&reg;</sup>全部技術服務：</h3></span>

<!--        <h2>SmartBurn<sup>SM</sup> Equipment Design and Capital Projects Services</h2>-->
<!--        <p>Between SmartBurn&rsquo;s superior modeling, engineering design and commissioning experience, and the fabrication and procurement strengths of our partners, SmartBurn is well-positioned to play an integral role in assisting our clients to successfully implement a variety of equipment design and capital projects.</p>-->
<!--        <p>SmartBurn&rsquo;s equipment design and capital projects capabilities include:</p>-->
<!---->
<!--        <ul>-->
<!--            <p><li>-->
<!--                Custom equipment-designs to meet a wide range of client needs-->
<!--                <ul>-->
<!--                    <li>Custom OFA designs</li>-->
<!--                    <li>Advanced burner designs</li>-->
<!--                </ul>-->
<!--            </li></p>-->
<!--            <p><li>-->
<!--                Equipment procurement-->
<!--            </li></p>-->
<!--            <p><li>-->
<!--                Installation support, commissioning and optimization-->
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