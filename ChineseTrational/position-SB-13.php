<?php
require_once 'global.php';

getDocHead();
echo '</head><body>';
getTopBar();
getTopNav('careers');
?>

<!-- WRAPPER -->
<div id="wrapper" style="padding-bottom: 20px">

    <!-- PAGE TITLE -->
    <header id="page-title" class="no-background" >
        <span class="overlay gray"><!-- image overlay --></span>

        <div class="container">
            <h1>Testing Technician</h1>

            <ul class="breadcrumb">
                <li><a href="index.php">Home</a></li>
                <li><a href="careers.php">Careers</a></li>
                <li class="active">SB-13 Testing Technician</li>
            </ul>
        </div>
    </header>
    <!-- /PAGE TITLE -->



    <section class="container">
        <article>

            <h2>Position Description – Testing Technician</h2>
            <p>SmartBurn, LLC, a leading engineering consulting company based in Madison, WI, is seeking a full-time (40 hours per week) Testing Technician who will use technical skills and team work abilities to work on consulting and engineering assignments in support of various projects associated with utility and industrial scale boilers firing a range of fuels, but primarily coal.  Our projects focus on improving the operational capabilities and reducing the environmental footprint of utility boilers through the application of our technology and experience, technical resources, and the proven solutions of our partners.</p>

            <h2>Responsibilities</h2>
            <ul>
                <li>
                    Conduct and support on-site testing, sample collection and results analysis to provide the information necessary for system optimization and performance improvement of various types of combustion units.
                </li>
                <li>
                    Develop and update the standards and procedures of specialized test equipment, and provide training for other SmartBurn team members as required.  Evaluate testing results to identify and recommend changes that could potentially enhance the efficiency and accuracy of SmartBurn processes.
                </li>
                <li>
                    Support in developing project proposals, preparing testing plan and equipment, and developing test summary and reports.
                </li>
                <li>
                    Assist in continued equipment maintenance, calibration, and technological advancement. Develop and maintain (using lean Manufacturing principles) replacement/wear parts list.
                </li>
            </ul>

            <p></p>

            <h2>Requirements</h2>
            <ul>
                <li>A combination of 2 years formal post-High School education and/or relevant testing experience in a related field</li>
                <li>Customer-focused team player who is able to work productively and exercise good judgement under minimal supervision at times</li>
                <li>Good oral and written communication skills</li>
                <li>Experience and skills using Microsoft Excel, Word and PowerPoint</li>
                <li>Experience and knowledge of coal-fired boiler operations / emissions controls is a plus</li>
                <li>Ability to walk and stand for extended periods of time and lift objects up to 50 pounds</li>
                <li>Ability to travel approximately 35% annually</li>
                <li>Valid US driver’s license</li>
            </ul>


            <p></p>

            <h2>Compensation/Benefits</h2>
            <p>Competitive and include health, dental, vision and LTD/STD/life insurance, professional licensing and memberships, a 401(k) savings plan with company match, medical and dependent care flexible spending accounts, eligibility for short‐term incentive compensation and profit sharing.  This position is located in Madison, WI.  To apply, please send resume and cover letter to
                <?php
                echo hide_email("careers@smartburn.com");
                ?>.
            </p>
        </article>
    </section>

</div>
<!-- /WRAPPER -->

<?php
getFooter();
getJavascript();
?>

</body>
</html>