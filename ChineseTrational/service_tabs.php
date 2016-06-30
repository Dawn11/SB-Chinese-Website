<?php

function getServiceTabs($currentFile){
    echo '
        <div class="tabs">
            <ul class="nav nav-tabs nav-justified">
                <li class="' . ('modeling' == $currentFile ?'active':'') . '"><a href="#modeling-tab" data-toggle="tab"><i class="fa fa-angle-right"></i>建模</a></li>
                <li class="' . ('plant_fleet_optimization' == $currentFile ?'active':'') . '"><a href="#plant-tab" data-toggle="tab"> <i class="fa fa-angle-right"></i>優化</a></li>
                <li class="' . ('equipment_design_capital_project' == $currentFile ?'active':'') . '"><a href="#equipment-tab" data-toggle="tab"> <i class="fa fa-angle-right"></i>設備</a></li>
                <li class="' . ('training_support' == $currentFile ?'active':'') . '"><a href="#training-tab" data-toggle="tab"> <i class="fa fa-angle-right"></i>支持</a></li>
                <li class="' . ('technical_consulting' == $currentFile ?'active':'') . '"><a href="#technical-tab" data-toggle="tab"> <i class="fa fa-angle-right"></i>咨詢 </a></li>
                
                <!--<li class="' . ('concentrated_flame_igniters' == $currentFile ?'active':'') . '"><a href="#igniters-tab" data-toggle="tab"> <i class="fa fa-angle-right"></i>Igniters</a></li>-->
            </ul>

            <!-- tabs content -->
            <div class="tab-content">
                <div class="tab-pane ' . ('modeling' == $currentFile ?'active':'') . '" id="modeling-tab">
                    <!--<p class="dropcap">SmartBurn utilizes proprietary sub-models built with ANSYS Fluent&#8482; software to simulate, evaluate and optimize existing boiler systems performance as well as accurately predict emissions reduction profiles across client-designated operating scenarios. SmartBurn can also quickly evaluate the effects of potential major modifications on boiler performance prior to our clients investing in expensive capital equipment.</p>-->

                    <p class="dropcap">SmartBurn 團隊運用其基於ANSYS Fluent&#8482; 軟件開發的專有子模型來模擬、評估和優化現有鍋爐系統的性能，並且可以針對客戶所指定的鍋爐運行方案進行準確的汙染物減排預測。同時，SmartBurn 團隊也可以在客戶大量投資購買和安裝實體設備之前，通過數值模擬，快速地評估這些改變將對鍋爐性能所帶來的主要影響，並給出調整預案。</p>

                    <a href="modeling.php" class="btn btn-info btn-md"><i class="fa fa-info-circle"></i><span>了解更多</span></a>
                </div>

                <div class="tab-pane ' . ('plant_fleet_optimization' == $currentFile ?'active':'') . '" id="plant-tab">
                    <!--<p class="dropcap">SmartBurn has a practical, economic and proven approach to optimize combustion in coal-fired boilers.  The SmartBurn approach integrates science and technology to understand and re-engineer boilers to resolve issues that impact unit operation, thereby providing the necessary flexibility to improve boiler and unit performance.  Our proprietary technology combined with our substantial operating experience provide the foundation necessary to support our clients in achieving sustained performance and emissions control across the load range.</p>-->

                    <p class="dropcap">SmartBurn擁有實用的、經濟的並且被證明有效的燃煤鍋爐優化技術，它結合了科學技術上的創新和以往工程應用上的經驗，對影響鍋爐運行的問題有著更深一步的理解和把握，因此可以靈活地解決實際問題、提升鍋爐燃燒性能、滿足客戶在不同載荷下控制排放物並且運行性能達標的需求。</p>

                    <a href="plant_fleet_optimization.php" class="btn btn-info btn-md"><i class="fa fa-info-circle"></i><span>了解更多</span></a>
                </div>

                <div class="tab-pane ' . ('equipment_design_capital_project' == $currentFile ?'active':'') . '" id="equipment-tab">
                    <!--<p class="dropcap">Between SmartBurn&rsquo;s superior modeling, engineering design and commissioning experience, and the fabrication and procurement strengths of our partners, SmartBurn is well-positioned to play an integral role in assisting our clients to successfully implement a variety of equipment design and capital projects.</p>-->

                    <p class="dropcap">SmartBurn 擁有高級建模技術、工程設計能力以及長期的實際經驗積累，另外再結合我們合作夥伴的裝備制造和采購能力，SmartBurn扮演了技術轉化和整合的關鍵角色，成功地協助我們的客戶施工完成了一系列的設備設計和大型工程項目。</p>

                    <a href="equipment_design_capital_project.php" class="btn btn-info btn-md"><i class="fa fa-info-circle"></i><span>了解更多</span></a>
                </div>

                <div class="tab-pane ' . ('training_support' == $currentFile ?'active':'') . '" id="training-tab">
                    <!--<p class="dropcap">SmartBurn has extensive experience evaluating slagging and fouling, boiler corrosion, boiler thermal performance and achieving &quot;best-in-class&quot; NOx emissions levels while simultaneously extending the range of fuels which can be fired and improving performance in PC-fired boilers and other systems.  As a result, we bring substantial capabilities in applying advanced analytical tools to resolve performance issues that are important to our clients. </p>-->

                    <p class="dropcap">SmartBurn 有著豐富的工程技術經驗，應用先進的分析工具來解決客戶所面臨的鍋爐性能問題。我們對於結焦、沾汙、鍋爐腐蝕情況和熱力性能的評估能力處於行業的頂尖水準，可以實現在保持氮氧化物（NOx）排放水平的同時，擴展燃料的範圍並且提升煤粉鍋爐等熱能設備的性能。</p>

                    <a href="training_support.php" class="btn btn-info btn-md"><i class="fa fa-info-circle"></i><span>了解更多</span></a>
                </div>

                <div class="tab-pane ' . ('technical_consulting' == $currentFile ?'active':'') . '" id="technical-tab">
                     <!--<p class="dropcap">SmartBurn has extensive experience utilizing proprietary advanced computational modeling (ACM) tools to evaluate and optimize a wide range of boiler sizes and types firing a variety fuels.  Our strong foundation in research and technology development coupled with our hands-on optimization experience provides a superior foundation for tackling our clients most unique and difficult problems.</p>-->

                     <p class="dropcap">SmartBurn有著豐富的工程技術經驗，利用我們獨有的先進計算機建模工具來評估和優化燃燒不同燃料的各種大小和型號的鍋爐，我們的技術基於強大的理論基礎，再加上實際的燃燒優化經驗，讓我們能夠出色地解決客戶的各種難題。</p>

                     <a href="technical_consulting.php" class="btn btn-info btn-md"><i class="fa fa-info-circle"></i><span>了解更多</span></a>
                </div>

                <!--<div class="tab-pane ' . ('concentrated_flame_igniters' == $currentFile ?'active':'') . '" id="igniters-tab">
                     <p class="dropcap">SmartBurn is assisting Yantai Lougyuan (YTLY) with marketing and sales efforts to bring their class leading products into the US Utility Generation Market.  Concentrated flame igniters are a family of products which include Plasma (PICS), Micronized oil, and Gas Igniters.  These technologies offer US power Generators a tool to increase their competitiveness through reduced fuel costs, reliable igniter operation and increased dispatch opportunities.</p>
                     <a href="concentrated_flame_igniters.php" class="btn btn-info btn-md"><i class="fa fa-info-circle"></i><span>了解更多</span></a>
                </div>-->

            </div>
            <!-- /tabs content -->
        </div>
    ';
}

?>
