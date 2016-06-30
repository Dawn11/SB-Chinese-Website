<?php
require_once 'global.php';
$currentFile = basename($_SERVER['PHP_SELF'], '.php');

getDocHead();
echo '</head><body>';
getTopBar();
getTopNav($currentFile);
?>
<div id="wrapper" style="padding-bottom: 0">

    <header id="page-title" class="big" style="background-image:url('assets/images/background.jpg')">
        <span class="overlay dotted"><!-- image overlay --></span>

        <div class="container">

            <div class="logo">
                <div class="logo-content logo-center">
                    <div class="row">
                        <div class="column col-xs-12">
                            <img class="img-responsive appear-animation inner fadeInDown animation-visible" src="assets/images/SmartBurnWht3.png" alt="SmartBurn"/>
<!--                            <img class="img-responsive appear-animation inner fadeInDown animation-visible" src="assets/images/SmartBurnWht3_SM.png" alt="SmartBurn"/>-->
                        </div>
                    </div>
                    <div class="row">
                        <div class="column col-lg-6 col-lg-offset-3 col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                            <img class="img-responsive appear-animation inner fadeInUp animation-visible"
                                 src="assets/images/logo-tagline.png" alt="Knowledge Makes Power"/>
                        </div>
                    </div>
                </div>

            </div
        </div>
    </header>

    <section class="container">

        <h2>SmartBurn<sup>&reg;</sup>背景</h2>
        <!-- <p>Alliant Energy<sup>1</sup> initially created the SmartBurn<sup>&reg;</sup> group in the late 1990&rsquo;s to develop high level combustion expertise for its coal-fired power plants.  The industry expected that power markets would be fully deregulated and the most competitive power plants would be those that were the most efficient and those that could burn the widest variety of lower cost coals.  The group was initially called the &quot;Combustion Initiative&quot;; and was at the center of Alliant Energy&rsquo;s research and development efforts to improve plant efficiency and combustion performance.</p> -->
        <p>SmartBurn<sup>&reg;</sup> 團隊於90年代後期創建於美國聯合能源公司<sup>1</sup>（Alliant Energy）的&quot;燃燒創新&quot;（Combustion Initiative）計劃。作為公司研發力量的核心，其宗旨是為燃煤電廠提升效率和燃燒性能。據當時行業預計，電力市場將全面放開，那些最高效和燃料適應性最廣的電廠將成為最具競爭力的電廠。</p>
        <!-- <p>The initial success of the Combustion Initiative in reducing NOx to 0.15 lb/MMBtu or less using only combustion optimization for mid-merit pulverized coal units was best-in-class performance at the time.  Alliant Energy moved the group to its unregulated subsidiary RMT, Inc. (RMT) in 2002 and renamed it &quot;SmartBurn<sup>&reg;</sup>&quot;, so that the technical capabilities of the group could be commercialized.</p> -->
        <p>&quot;燃燒創新&quot;（Combustion Initiative）計劃僅通過優化燃燒技術便成功地使得調峰煤粉鍋爐機組的氮氧化物（NOx）排放減少至0.15 lb/MMBtu（187.5 mg/Nm<sup>3</sup>）甚至更低，這也達到了當時行業內最優的性能。聯合能源公司於2002年將燃燒創新團隊轉移至其下屬的能源環保技術咨詢與工程公司（RMT, Inc），並正式更名為&quot;SmartBurn<sup>&reg;</sup>&quot;。此後，SmartBurn 團隊的技術能力也開始進行商業化。</p>
        <!-- <p>SmartBurn<sup>&reg;</sup> continued providing support to several Alliant Energy power plants after the move to RMT.  At the same time that NOx emissions were reduced, Alliant Energy&rsquo;s Lansing, Kapp and Edgewater generating facilities - where a series of SmartBurn<sup>&reg;</sup> projects have been implemented - were recognized by the Electric Utility Cost Group (EUCG) as 2007 &quot;Best Performers&quot;.  Several of the units were repeat winners and &quot;top 5&quot; plants in subsequent years, demonstrating that low cost performance and leading environmental performance can be sustained over time.</p> -->
        <p>加入RMT公司後，SmartBurn<sup>&reg;</sup>繼續為聯合能源公司下屬的多個電廠提供技術支持。該團隊不僅顯著地減少氮氧化物（NOx）排放，而且成功完成了聯合能源下屬的多個電廠項目。Lansing, Kapp 以及Edgewater等電廠在實施SmartBurn<sup>&reg;</sup>優化項目後，獲得了Electric Utility Cost Group（EUCG）的高度認可，並被評為2007年的性能最優電廠，其中多臺鍋爐機組在後續的幾年時間內，依然保持了其最優的性能，多年位居行業前五。這同時也證明了，經過SmartBurn<sup>&reg;</sup>燃燒優化後，電廠低成本高效率的性能和在節能環保方面的優異表現是可持續的。</p>
        <!-- <p>After approximately nine years as part of RMT, SmartBurn<sup>&reg;</sup> management purchased the business in 2011.  SmartBurn, LLC is now an independent consultancy with international clients including independent power producers, regulated utilities, generating and transmission cooperatives, and others. Led by Dr. Pisi Lu, SmartBurn continues to provide customized technical services to the worldwide utility industry by serving clients that utilize a wide range of fuels such as coal, oil natural gas, biofuels and synthetic fuels. </p> -->
        <p>在加入RMT公司9年後，SmartBurn<sup>&reg;</sup>的管理層在2011年將其收購，成立了SmartBurn 責任有限公司（SmartBurn, LLC）。SmartBurn 責任有限公司現在成為了一家獨立的工程技術咨詢公司，其客戶涵蓋獨立發電廠家、受監管的發電設備、電力生產及傳輸等各大國際國內企業。在路丕思博士的領導下，SmartBurn 團隊繼續在為世界上各大以煤炭、燃油、天然氣、合成燃料和生物能源作為燃料的電力公司提供高度定制化的技術支持服務。</p>

<!--        <h2>SmartBurn<sup>SM</sup> Background</h2>-->
<!---->
<!--        <p>Alliant Energy<sup>1</sup> initially created the SmartBurn<sup>SM</sup> group in the late 1990&rsquo;s to develop high level combustion expertise for its coal-fired power plants.  The industry expected that power markets would be fully deregulated and the most competitive power plants would be those that were the most efficient and those that could burn the widest variety of lower cost coals.  The group was initially called the &quot;Combustion Initiative&quot;; and was at the center of Alliant Energy&rsquo;s research and development efforts to improve plant efficiency and combustion performance.</p>-->
<!--        <p>The initial success of the Combustion Initiative in reducing NOx to 0.15 lb/MMBtu or less using only combustion optimization for mid-merit pulverized coal units was best-in-class performance at the time.  Alliant Energy moved the group to its unregulated subsidiary RMT, Inc. (RMT) in 2002 and renamed it &quot;SmartBurn<sup>SM</sup>&quot;, so that the technical capabilities of the group could be commercialized.</p>-->
<!--        <p>SmartBurn<sup>SM</sup> continued providing support to several Alliant Energy power plants after the move to RMT.  At the same time that NOx emissions were reduced, Alliant Energy&rsquo;s Lansing, Kapp and Edgewater generating facilities - where a series of SmartBurn<sup>SM</sup> projects have been implemented - were recognized by the Electric Utility Cost Group (EUCG) as 2007 &quot;Best Performers&quot;.  Several of the units were repeat winners and &quot;top 5&quot; plants in subsequent years, demonstrating that low cost performance and leading environmental performance can be sustained over time.</p>-->
<!--        <p>After approximately nine years as part of RMT, SmartBurn<sup>SM</sup> management purchased the business in 2011.  SmartBurn, LLC is now an independent consultancy with international clients including independent power producers, regulated utilities, generating and transmission cooperatives, and others. Led by Dr. Pisi Lu, SmartBurn continues to provide customized technical services to the worldwide utility industry by serving clients that utilize a wide range of fuels such as coal, oil natural gas, biofuels and synthetic fuels. </p>-->


    </section>

    <header id="page-title" style="margin-bottom: 0">

        <div class="container">
            <p style="margin-bottom: 0;font-size: 0.88em">
                <!-- <sup>1</sup>Alliant Energy, headquartered in Madison, Wisconsin, is a regulated, investor-owned public utility holding company providing electric and natural gas service to approximately one million electric and 400,000 natural gas customers in the upper Midwestern states of Iowa, Wisconsin and Minnesota. Alliant Energy is traded on the New York Stock Exchange under the symbol &quot;LNT&quot;. -->
                註<sup>1</sup>：美國聯合能源公司（紐約證券交易所代碼：LNT）是一家總部位於美國威斯康辛州麥迪遜市的上市公司，公司總資產達到96億美元，其服務區域包括愛荷華州的中西部、威斯康辛州、明尼蘇達州的大約一百萬電力用戶以及四十萬天然氣用戶。
            </p>
        </div>
    </header>

</div>
<?php
getFooter();
getJavascript();
?>

</body>
</html>