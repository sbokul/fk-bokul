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

    <!--<script src="/js/jquery-1.7.1.min.js"></script>-->
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.js"></script>

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>css/responsive.css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="<?php echo $path; ?>rs-plugin/css/settings.css" media="screen"/>

    <link rel="stylesheet" href="<?php echo $path; ?>css/main.css">

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
                            <td width="200"><a href="/"><img src="<?php echo $path; ?>images/flying.jpg"
                                                             alt="Flying Kites" width="200" height="100" border="0"></a>
                            </td>
                            <td style="width: 20px;">&nbsp;</td>
                            <td width="684" align="center" valign="bottom">
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
                                    <tr>
                                        <td height="4"></td>
                                    </tr>
                                </table>
                            </td>
                            <td width="96" align="right" valign="bottom">
                                <table width="0" border="0" align="right" cellpadding="0" cellspacing="0">
                                    <tr>
                                        <td><img src="<?php echo $path; ?>images/facebook.png" alt="Facebook" width="32"
                                                 height="32"></td>
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
<?php if ($menu_name == "Home") { ?>
<div class="bannercontainer">
<div class="banner">
<ul>
<!-- THE FIRST SLIDE -->
<li data-transition="fade" data-slotamount="10" data-masterspeed="300" data-link="http://www.google.de"
    data-target="_blank" data-slideindex="back" data-thumb="<?php echo $path; ?>images/thumbs/thumb1.jpg">
    <!-- THE MAIN IMAGE IN THE SLIDE -->
    <img src="<?php echo $path; ?>images/slides/slide13.jpg">

    <!-- THE CAPTIONS OF THE FIRST SLIDE -->
    <div class="caption large_text sfb fadeout"
         data-x="44"
         data-y="47"
         data-speed="300"
         data-start="800"
         data-captionhidden="on"
         data-end="5300"
         data-endeasing="easeOutExpo"
         data-easing="easeOutExpo"><a href="http://www.codecanyon.net">OVER <span style="color: #ffcc00;">1000</span>
        SATISFIED CUSTOMERS</a></div>

    <div class="caption randomrotate"
         data-x="48"
         data-y="131"
         data-speed="600"
         data-start="1100"
         data-easing="easeOutExpo"><img src="<?php echo $path; ?>images/slides/p1.jpg" alt="Image 2"></div>

    <div class="caption randomrotate"
         data-x="90"
         data-y="206"
         data-speed="600"
         data-start="1200"
         data-easing="easeOutExpo"><img src="<?php echo $path; ?>images/slides/p2.jpg" alt="Image 3"></div>

    <div class="caption randomrotate"
         data-x="205"
         data-y="140"
         data-speed="600"
         data-start="1300"
         data-easing="easeOutExpo"><img src="<?php echo $path; ?>images/slides/p3.jpg" alt="Image 4"></div>

    <div class="caption randomrotate"
         data-x="188"
         data-y="246"
         data-speed="300"
         data-start="1400"
         data-easing="easeOutExpo"><img src="<?php echo $path; ?>images/slides/p4.jpg" alt="Image 5"></div>

    <div class="caption randomrotate"
         data-x="55"
         data-y="316"
         data-speed="600"
         data-start="1500"
         data-easing="easeOutExpo"><img src="<?php echo $path; ?>images/slides/p5.jpg" alt="Image 6"></div>

    <div class="caption randomrotate"
         data-x="173"
         data-y="329"
         data-speed="300"
         data-start="1600"
         data-easing="easeOutExpo"><img src="<?php echo $path; ?>images/slides/p6.jpg" alt="Image 7"></div>

    <div class="caption randomrotate"
         data-x="255"
         data-y="294"
         data-speed="300"
         data-start="1700"
         data-easing="easeOutExpo"><img src="<?php echo $path; ?>images/slides/p7.jpg" alt="Image 8"></div>

    <div class="caption randomrotate"
         data-x="275"
         data-y="166"
         data-speed="300"
         data-start="1800"
         data-easing="easeOutExpo"><img src="<?php echo $path; ?>images/slides/p8.jpg" alt="Image 9"></div>

    <div class="caption randomrotate"
         data-x="84"
         data-y="113"
         data-speed="300"
         data-start="1900"
         data-easing="easeOutExpo"><img src="<?php echo $path; ?>images/slides/p9.jpg" alt="Image 10"></div>

    <div class="caption randomrotate"
         data-x="26"
         data-y="225"
         data-speed="300"
         data-start="2000"
         data-easing="easeOutExpo"><img src="<?php echo $path; ?>images/slides/p10.jpg" alt="Image 11"></div>

    <div class="caption randomrotate"
         data-x="110"
         data-y="187"
         data-speed="300"
         data-start="2100"
         data-easing="easeOutExpo"><img src="<?php echo $path; ?>images/slides/p11.jpg" alt="Image 12"></div>

    <div class="caption randomrotate"
         data-x="183"
         data-y="221"
         data-speed="300"
         data-start="2200"
         data-easing="easeOutExpo"><img src="<?php echo $path; ?>images/slides/p12.jpg" alt="Image 13"></div>
</li>

<!-- THE SECOND SLIDE -->
<li data-transition="papercut" data-slotamount="15" data-masterspeed="300" data-link="http://www.ibm.de"
    data-target="_blank" data-delay="9400" data-thumb="<?php echo $path; ?>images/thumbs/thumb2.jpg">
    <img src="<?php echo $path; ?>images/slides/slide21.jpg">

    <div class="caption very_big_white lfl stl"
         data-x="18"
         data-y="293"
         data-speed="300"
         data-start="500"
         data-easing="easeOutExpo" data-end="8800" data-endspeed="300" data-endeasing="easeInSine">TIMELINED CAPTIONS
    </div>

    <div class="caption big_white lfl stl"
         data-x="18"
         data-y="333"
         data-speed="300"
         data-start="800"
         data-easing="easeOutExpo" data-end="9100" data-endspeed="300" data-endeasing="easeInSine">MOVE CAPTIONS IN AND
        OUT ON ONE SLIDE
    </div>

    <div class="caption lft ltb"
         data-x="500"
         data-y="0"
         data-speed="600"
         data-start="1100"
         data-easing="easeOutExpo" data-end="3100" data-endspeed="600" data-endeasing="easeInSine"><img
            src="<?php echo $path; ?>images/slides/drink1.jpg" alt="Image 3"></div>

    <div class="caption bold_red_text sft stb"
         data-x="720"
         data-y="290"
         data-speed="300"
         data-start="1400"
         data-easing="easeOutExpo" data-end="3300" data-endspeed="300" data-endeasing="easeInSine">STRAWBERRY COCTAIL
    </div>

    <div class="caption big_black sfb stb"
         data-x="720"
         data-y="320"
         data-speed="300"
         data-start="1700"
         data-easing="easeOutExpo" data-end="3200" data-endspeed="300" data-endeasing="easeInSine">$ 7.49
    </div>

    <div class="caption lft ltb"
         data-x="500"
         data-y="0"
         data-speed="600"
         data-start="3600"
         data-easing="easeOutExpo" data-end="5600" data-endspeed="600" data-endeasing="easeInSine"><img
            src="<?php echo $path; ?>images/slides/drink2.jpg" alt="Image 6"></div>

    <div class="caption bold_brown_text sft stb"
         data-x="720"
         data-y="290"
         data-speed="300"
         data-start="3900"
         data-easing="easeOutExpo" data-end="5800" data-endspeed="300" data-endeasing="easeInSine">COKE & RUM
    </div>

    <div class="caption big_black sfb stb"
         data-x="720"
         data-y="320"
         data-speed="300"
         data-start="4200"
         data-easing="easeOutExpo" data-end="5700" data-endspeed="300" data-endeasing="easeInSine">$ 5.99
    </div>

    <div class="caption lft ltb"
         data-x="500"
         data-y="0"
         data-speed="600"
         data-start="6100"
         data-easing="easeOutExpo" data-end="8100" data-endspeed="300" data-endeasing="easeInSine"><img
            src="<?php echo $path; ?>images/slides/drink3.jpg" alt="Image 9"></div>

    <div class="caption bold_green_text sft stb"
         data-x="720"
         data-y="290"
         data-speed="300"
         data-start="6400"
         data-easing="easeOutExpo" data-end="8300" data-endspeed="300" data-endeasing="easeInSine">MOJITO COCTAIL
    </div>

    <div class="caption big_black sfb stb"
         data-x="720"
         data-y="320"
         data-speed="300"
         data-start="6700"
         data-easing="easeOutExpo" data-end="8200" data-endspeed="300" data-endeasing="easeInSine">$ 6.79
    </div>
</li>
<li data-transition="turnoff" data-slotamount="1" data-masterspeed="300">
    <img src="<?php echo $path; ?>images/slides/slide31.jpg">


    <div class="caption very_large_black_text randomrotate"
         data-x="641"
         data-y="95"
         data-speed="300"
         data-start="1100"
         data-easing="easeOutExpo">SLIDER
    </div>

    <div class="caption large_black_text randomrotate"
         data-x="642"
         data-y="161"
         data-speed="300"
         data-start="1400"
         data-easing="easeOutExpo">REVOLUTION
    </div>

    <div class="caption bold_red_text randomrotate"
         data-x="645"
         data-y="201"
         data-speed="300"
         data-start="1700"
         data-easing="easeOutExpo">GOT FULLSCREEN VIDEO
    </div>

    <div class="caption sfb"
         data-x="640"
         data-y="223"
         data-speed="300"
         data-start="2000"
         data-easing="easeOutBack"><img src="<?php echo $path; ?>images/slides/video.jpg" alt="Image 7"></div>

    <div class="caption sft"
         data-x="639"
         data-y="383"
         data-speed="300"
         data-start="2300"
         data-easing="easeOutExpo" data-linktoslide="4"><img src="<?php echo $path; ?>images/slides/videobutton.jpg"
                                                             alt="Image 8"></div>
</li>

<!-- THE THIRD SLIDE -->
<li data-transition="slidedown" data-slotamount="7" data-masterspeed="300"
    data-thumb="<?php echo $path; ?>images/thumbs/thumb4.jpg">
    <img src="<?php echo $path; ?>images/slides/black.jpg">

    <div class="caption fade fullscreenvideo" data-autoplay="false" data-x="0" data-y="0" data-speed="500"
         data-start="10" data-easing="easeOutBack">
        <iframe src="http://player.vimeo.com/video/22775048?title=0&amp;byline=0&amp;portrait=0;api=1" width="100%"
                height="100%"></iframe>
    </div>

    <div class="caption big_white sft stt"
         data-x="327"
         data-y="25"
         data-speed="300"
         data-start="500"
         data-easing="easeOutExpo" data-end="4000" data-endspeed="300" data-endeasing="easeInSine">Have Fun Watching the
        Video
    </div>
</li>

<!-- THE FOURTH SLIDE -->
<li data-transition="slideleft" data-slotamount="1" data-masterspeed="300"
    data-thumb="<?php echo $path; ?>images/thumbs/thumb5.jpg">

    <img src="<?php echo $path; ?>images/slides/slide4.jpg">

    <div class="caption large_text sft"
         data-x="50"
         data-y="44"
         data-speed="300"
         data-start="800"
         data-easing="easeOutExpo">TOUCH ENABLED
    </div>

    <div class="caption medium_text sfl"
         data-x="79"
         data-y="82"
         data-speed="300"
         data-start="1100"
         data-easing="easeOutExpo">AND
    </div>

    <div class="caption large_text sfr"
         data-x="128"
         data-y="78"
         data-speed="300"
         data-start="1100"
         data-easing="easeOutExpo"><span style="color: #ffc600;">RESPONSIVE</span></div>

    <div class="caption lfl"
         data-x="53"
         data-y="192"
         data-speed="300"
         data-start="1400"
         data-easing="easeOutExpo"><img src="<?php echo $path; ?>images/slides/imac.png" alt="Image 4"></div>

    <div class="caption lfl"
         data-x="253"
         data-y="282"
         data-speed="300"
         data-start="1500"
         data-easing="easeOutExpo"><img src="<?php echo $path; ?>images/slides/ipad.png" alt="Image 5"></div>

    <div class="caption lfl"
         data-x="322"
         data-y="313"
         data-speed="300"
         data-start="1600"
         data-easing="easeOutExpo"><img src="<?php echo $path; ?>images/slides/iphone.png" alt="Image 6"></div>
</li>


<!-- THE FIFTH SLIDE -->
<li data-transition="flyin" data-slotamount="1" data-masterspeed="300"
    data-thumb="<?php echo $path; ?>images/thumbs/thumb6.jpg">
    <img src="<?php echo $path; ?>images/slides/slide51.jpg">

    <div class="caption large_text sfl"
         data-x="38"
         data-y="200"
         data-speed="300"
         data-start="1000"
         data-easing="easeOutExpo">A Happy
    </div>

    <div class="caption large_text sfl"
         data-x="37"
         data-y="243"
         data-speed="300"
         data-start="1300"
         data-easing="easeOutExpo">Holiday Season
    </div>

    <div class="caption randomrotate"
         data-x="610"
         data-y="174"
         data-speed="800"
         data-start="1600"
         data-easing="easeOutExpo"><img src="<?php echo $path; ?>images/slides/TP_logo.png" alt="Image 4"></div>
</li>
</ul>

<div class="tp-bannertimer tp-bottom"></div>
</div>
</div>
<?php } ?>
</td>
</tr>
<tr>
    <td>&nbsp;</td>
</tr>
<?php
if ($menu_name != "Home") {
?>
<tr>
    <td>
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