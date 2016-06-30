<?php
require_once 'global.php';
$currentFile = basename($_SERVER['PHP_SELF'],'.php');

getDocHead();
echo '</head><body>';
getTopBar();
getTopNav($currentFile);
?>

<!-- WRAPPER -->
<div id="wrapper">

    <!-- PAGE TITLE -->
    <header id="page-title" class="no-background" >
        <span class="overlay gray"></span>
        <div class="container">
            <h1>聯系我們</h1>
            <ul class="breadcrumb">
                <li><a href="index.php">主頁</a></li>
                <li class="active">聯系我們</li>
            </ul>
        </div>
    </header>


    <section id="contact" class="container">
        <div class="row">

            <!-- FORM -->
            <div class="col-md-10">

                <h2>請與我們聯系以獲得更多信息</h2>

                <!-- SENT OK -->
                <div id="_sent_ok_" class="alert alert-success fade in fsize16 hide">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>謝謝您!</strong>我們已經收到了您的信息。
                </div>
                <!-- /SENT OK -->

                <!-- SENT FAILED -->
                <div id="_required_field_" class="alert alert-danger fade in fsize16 hide">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <!-- <strong>发生了错误。</strong> Please provide valid information for all fields marked with <b>*</b> -->
                    <strong>發生了錯誤。</strong>請在所有標註<b>*</b>的字段填入有效的信息。
                </div>
                <!-- /SENT FAILED -->

                <form id="contactForm" class="white-row" action="util/contact.php" method="post">
                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-4 col-xs-6">
                                <label>姓 *</label>
                                <input type="text" value="" data-msg-required="Please enter your last name." maxlength="100" class="form-control" name="contact_last_name" id="contact_last_name">
                            </div>
                            <div class="col-sm-4 col-xs-6">
                                <label>名 *</label>
                                <input type="text" value="" data-msg-required="Please enter your first name." maxlength="100" class="form-control" name="contact_first_name" id="contact_first_name">
                            </div>
                            <div class="col-sm-4">
                                <label>國家 *</label>
                                <select value="" data-msg-required="Please select your country." class="form-control input-medium bfh-countries" name="contact_country" id="contact_country"></select>
                            </div>

                        </div>
                        </div>

                    <div class="row">
                        <div class="form-group">
                            <div class="col-sm-4">
                                <label>公司 *</label>
                                <input type="text" value="" data-msg-required="Please enter your company." maxlength="100" class="form-control" name="contact_company" id="contact_company">
                            </div>
                            <div class="col-sm-4">
                                <label>郵箱地址 *</label>
                                <input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="contact_email" id="contact_email">
                            </div>
                            <div class="col-sm-4 ">
                                <label>電話</label>
                                <input type="text" value="" data-msg-required="Please enter your phone" data-msg-email="Please enter your phone" maxlength="100" class="form-control" name="contact_phone" id="contact_phone">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>主题</label>
                                <input type="text" value="" data-msg-required="Please enter the subject." maxlength="100" class="form-control" name="contact_subject" id="contact_subject">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <label>内容 *</label>
                                <textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="contact_message" id="contact_message"></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row agreement_checkbox_row">
                        <div class="form-group">
                            <div class="col-md-12">
                                <span class="terms-box checkbox">
											<label for="agreement_checkbox">
                                                <input type="checkbox" id="agreement_checkbox" name="agreement_checkbox">我已經閱讀並同意條款和條件。
                                            </label>
										</span>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-10">

									<span class="pull-right"><!-- captcha -->
										<label class="block text-right fsize12">請輸入圖片中的信息 *</label>
										<img alt="" rel="nofollow,noindex" width="70" height="25" src="util/captcha.php?bgcolor=ffff32&amp;txtcolor=000000">
										<input type="text" name="contact_captcha" id="contact_captcha" value="" data-msg-required="Please enter the subject." maxlength="6" style="width:100px; margin-left:10px;">
									</span>

                            <input id="contact_submit" type="submit" value="發送信息" class="btn btn-info btn-lg" data-loading-text="Loading...">
                        </div>
                    </div>
                </form>

            </div>
            <!-- /FORM -->

            <!-- INFO -->
            <div class="col-md-10">
                <h2>麥迪遜辦公室</h2>
                <div class="white-row">

                    <!-- <a href="http://www.google.com/maps/place/579+D&apos;onofrio+Dr+%23200,+Madison,+WI+53719/"> -->
                        <p style="margin-bottom: 0px">579 D&apos;Onofrio Drive, Suite 200</p>
                        <!-- <p style="margin-bottom: 0px">Madison, WI 53719, U.S.A.</p> -->
                        <p style="margin-bottom: 0px">威斯康辛州，麥迪遜，美國。 郵編：53719。</p>
                    <!-- </a> -->
                        <p>+1 608-821-8188</p>
                        <img alt="" width="100%" height="100%" src="assets/images/SBOffice.png">

                    <!-- <div id="gmap"></div>
                    <script type="text/javascript">
                        var	$googlemap_latitude 	= 43.056667,
                            $googlemap_longitude	= -89.516292,
                            $googlemap_zoom			= 15;
                    </script> -->

                </div>
            </div>
            <!-- /INFO -->

        </div>
    </section>

</div>
<!-- /WRAPPER -->

<?php
getFooter();
getJavascript();
?>

<script type="text/javascript" src="assets/js/contact_ajax.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-formhelpers-countries.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-formhelpers-countries.en_US.js"></script>



</body>
</html>