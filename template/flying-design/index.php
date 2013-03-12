<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo title(); ?></title>
    <?php
        echo meta();
    ?>
    <!--<meta charset="utf-8">
    <meta name="author" content="Cocktail Dresses">-->
    <link rel="icon" href="/images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="/images/favicon.ico" type="image/x-icon"/>
    <link rel="stylesheet" href="<?php echo $path; ?>css/main.css">
    <!--<script src="/js/jquery-1.7.1.min.js"></script>-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.js"></script>

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/responsive.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>rs-plugin/css/settings.css" media="screen"/>


    <!-- REVOLUTION BANNER JS FILES  -->
    <script type="text/javascript" src="<?php echo $path; ?>js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>js/jquery.themepunch.revolution.min.js"></script>

    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

</head>
<body>
<!--==============================header=================================-->
<table width="100%" border="0" cellspacing="0" cellpadding="0">
<tr>
<td align="center" valign="top">
<table width="1000" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>
    <td>
        <table width="1000" border="0" cellspacing="0" cellpadding="0">
            <tr>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td>
                    <table width="1000" border="0" cellspacing="0" cellpadding="0">
                        <tr>
                            <td width="200"><a href="/"><img src="<?php echo $path; ?>images/logo.png"
                                                             alt="Flying Kites" width="200" height="100" border="0"></a>
                            </td>
                            <td width="704" align="center" valign="bottom">
                                <table width="0" border="0" align="right" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td valign="top">
                                            <div class="menu">
                                                <ul>
                                                    <?php
                                                    $main_menu_query = query("select `menu_id`,`menu_name` from `menus` where `parent_menu_id`='0' and `is_active`='1' order by `order` asc;");
                                                    $count = mysql_num_rows($main_menu_query);
                                                    $i = 0;
                                                    while ($main_menu_result = mysql_fetch_array($main_menu_query)) {
                                                        echo '<li>';
                                                        echo '<a class="hide" href="index.php?p_id=' . $main_menu_result['menu_id'] . '">' . $main_menu_result['menu_name'] . '</a>';
                                                        $sub_menu_query = query("select `menu_id`,`menu_name` from `menus` where `parent_menu_id`='" . $main_menu_result['menu_id'] . "' and `is_active`='1' order by `order` asc;");
                                                        $count_result = mysql_num_rows($sub_menu_query);
                                                        if ($count_result > 0) {
                                                            echo '<ul>';
                                                        }
                                                        while ($sub_menu_result = mysql_fetch_array($sub_menu_query)) {
                                                            echo '<li><a href="index.php?p_id=' . $sub_menu_result['menu_id'] . '" title="' . $sub_menu_result['menu_name'] . '">' . $sub_menu_result['menu_name'] . '</a></li>';
                                                        }
                                                        if ($count_result > 0) {
                                                            echo '</ul>';
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                            <td width="96" align="right" valign="bottom">
                                <table width="0" border="0" align="right" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td><a href="https://www.facebook.com/flyingkitesltd"><img src="<?php echo $path; ?>images/facebook.png" alt="Facebook" width="32"
                                                 height="32" border="0"></a></td>
                                        <td><img src="<?php echo $path; ?>images/twitter.png" alt="Twitter" width="32"
                                                 height="32"></td>
                                        <td><img src="<?php echo $path; ?>images/google.png" alt="google" width="32"
                                                 height="32"></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td>&nbsp;</td>
</tr>
<tr>
<td>
<!--
        #################################
            - THEMEPUNCH BANNER -
        #################################
        -->
<?php
$content = content();
$menu_name = $content['menu_name'];
$con = $content['content'];
$is_gallery = $content['is_gallery'];
?>
    <?php
    if ($menu_name == "Home") {
        include($path.'slide.php');
    }
    ?>
</td>
</tr>
<tr>
    <td>&nbsp;</td>
</tr>
<?php
if ($menu_name != "Home") {
?>
<tr>
    <td style="background-color: #dddddd;">
        <div class="contant">
            <?php
            if ($menu_name != "Home")
                echo $con;
            ?>
        </div>
    </td>
</tr>
<?php
}
?>
<tr>
    <td>&nbsp;</td>
</tr>
<tr>
    <td align="center">
        <table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td width="300">
                    <a href="http://events.flyingkitesltd.com/" style="text-decoration: none;">
                        <div class="events">
                            <table style="width: 100%;border: 0 none;padding: 0;margin: 0;">
                                <tr>
                                    <td style="color: #FFF;font-weight: bold;font-size: 16px;">Events</td>
                                </tr>
                                <tr>
                                    <td style="height: 130px;text-align: right;"><img src="<?php echo $path; ?>images/events.png"></td>
                                </tr>
                                <tr>
                                    <td style="text-align: center;"></td>
                                </tr>
                            </table>
                        </div>
                    </a>
                </td>
                <td>&nbsp;</td>
                <td width="300">
                    <a href="http://production.flyingkitesltd.com/" style="text-decoration: none;">
                        <div class="production">
                            <table style="width: 100%;border: 0 none;padding: 0;margin: 0;">
                                <tr>
                                    <td style="color: #FFF;font-weight: bold;font-size: 14px;">Media & Production</td>
                                </tr>
                                <tr>
                                    <td style="height: 130px;text-align: right;"><img src="<?php echo $path; ?>images/media.png"></td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </a>
                </td>
                <td>&nbsp;</td>
                <td width="300">
                    <a href="http://marketing.flyingkitesltd.com/" style="text-decoration: none;">
                        <div class="marketing">
                            <table style="width: 100%;border: 0 none;padding: 0;margin: 0;">
                                <tr>
                                    <td style="color: #FFF;font-weight: bold;font-size: 14px;">Marketing</td>
                                </tr>
                                <tr>
                                    <td style="height: 130px;text-align: right;"><img src="<?php echo $path; ?>images/marketing-img.png"></td>
                                </tr>
                                <tr>
                                    <td>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </a>
                </td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td>&nbsp;</td>
</tr>
<tr>
    <td align="center" class="footer">
        <table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td class="footer-text">&copy; Flying Kites 2013</td>
            </tr>
        </table>
    </td>
</tr>
<tr>
    <td>&nbsp;</td>
</tr>
</table>
</td>
</tr>
</table>
<!--
			##############################
			 - ACTIVATE THE BANNER HERE -
			##############################
			-->
<script type="text/javascript">

    var tpj = jQuery;
    tpj.noConflict();

    tpj(document).ready(function () {

        if (tpj.fn.cssOriginal != undefined)
            tpj.fn.css = tpj.fn.cssOriginal;

        tpj('.banner').revolution(
                {
                    delay:9000,
                    startheight:500,
                    startwidth:960,


                    hideThumbs:200,

                    thumbWidth:100, // Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
                    thumbHeight:50,
                    thumbAmount:5,

                    navigationType:"bullet", // bullet, thumb, none
                    navigationArrows:"nexttobullets", // nexttobullets, solo (old name verticalcentered), none

                    navigationStyle:"navbar", // round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


                    navigationHAlign:"center", // Vertical Align top,center,bottom
                    navigationVAlign:"bottom", // Horizontal Align left,center,right
                    navigationHOffset:0,
                    navigationVOffset:20,

                    soloArrowLeftHalign:"left",
                    soloArrowLeftValign:"center",
                    soloArrowLeftHOffset:20,
                    soloArrowLeftVOffset:0,

                    soloArrowRightHalign:"right",
                    soloArrowRightValign:"center",
                    soloArrowRightHOffset:20,
                    soloArrowRightVOffset:0,

                    touchenabled:"on", // Enable Swipe Function : on/off
                    onHoverStop:"on", // Stop Banner Timet at Hover on Slide on/off

                    stopAtSlide:-1, // Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
                    stopAfterLoops:-1, // Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

                    hideCaptionAtLimit:0, // It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
                    hideAllCaptionAtLilmit:0, // Hide all The Captions if Width of Browser is less then this value
                    hideSliderAtLimit:0, // Hide the whole slider, and stop also functions if Width of Browser is less than this value

                    shadow:1, //0 = no Shadow, 1,2,3 = 3 Different Art of Shadows  (No Shadow in Fullwidth Version !)
                    fullWidth:"off"                            // Turns On or Off the Fullwidth Image Centering in FullWidth Modus


                });


    });

</script>
</body>
</html>