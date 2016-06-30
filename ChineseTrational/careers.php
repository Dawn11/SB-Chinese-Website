<?php
require_once 'global.php';
$currentFile = basename($_SERVER['PHP_SELF'],'.php');

getDocHead();
echo '</head><body>';
getTopBar();
getTopNav($currentFile);
?>

<!-- WRAPPER -->
<div id="wrapper" style="padding-bottom: 20px">

    <!-- PAGE TITLE -->
    <header id="page-title" class="mid parallax" data-stellar-background-ratio="0.7" style="background-image:url('assets/images/career-parallax.jpg');">
        <span class="overlay"><!-- image overlay --></span>

        <div class="container">
            <h1>SmartBurn工作机会</h1>
        </div>
    </header>
    <!-- /PAGE TITLE -->



    <section class="container">

        <h2>招聘职位</h2>


        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>职位</th>
                <th>工作地点</th>
            </tr>
            </thead>

            <tbody>

            <tr>
                <td><a href="position-SB-13.php">SB-13</a></td>
                <td><a href="position-SB-13.php">测试技术员</a></td>
                <td>美国，威斯康辛州，麦迪逊</td>
            </tr></a>

            </tbody>
        </table>

<!--        Thank you for your interest in SmartBurn, LLC. We presently have no open positions at this time.-->
    </section>

</div>
<!-- /WRAPPER -->

<?php
getFooter();
getJavascript();
?>

</body>
</html>