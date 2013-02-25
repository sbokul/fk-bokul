<!DOCTYPE html>
<html lang="en">
<head>
    <title><?php echo title(); ?></title>
    <meta charset="utf-8">
    <meta name="author" content="Cocktail Dresses">
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
    <style type="text/css">
        <!--
        body {
            margin-left: 0px;
            margin-top: 0px;
            margin-right: 0px;
            margin-bottom: 0px;
            background-color: #FFFFFF;
        }

        body, td, th {
            font-family: Trebuchet MS;
        }

            /* ================================================================
           This copyright notice must be untouched at all times.

           The original version of this stylesheet and the associated (x)html
           is available at http://www.cssplay.co.uk/menus/dd_valid.html
           Copyright (c) 2005-2007 Stu Nicholls. All rights reserved.
           This stylesheet and the assocaited (x)html may be modified in any
           way to fit your requirements.
           =================================================================== */
            /* common styling */
        .menu {
            font-family: "trebuchet ms", sans-serif;
            width: 750px;
            height: 30px;
            position: relative;
            font-size: 11px;
            z-index: 100;
        }

        .menu ul li a, .menu ul li a:visited {
            display: block;
            text-decoration: none;
            color: #000;
            width: 120px;
            height: 30px;
            text-align: center;
            border: 1px solid #fff;
            background: #f2f2f2;
            line-height: 30px;
            font-size: 11px;
            overflow: hidden;
        }

        .menu ul {
            padding: 0;
            margin: 0;
            list-style: none;
        }

        .menu ul li {
            float: left;
            position: relative;
        }

        .menu ul li ul {
            display: none;
        }

            /* specific to non IE browsers */
        .menu ul li:hover a {
            color: #fff;
            background: #36f;
        }

        .menu ul li:hover ul {
            display: block;
            position: absolute;
            top: 31px;
            left: 1px;
            width: 105px;
        }

        .menu ul li:hover ul li a.hide {
            /*background: #6a3;*/
            background-color: rgba(101, 168, 50, 0.4);
            color: #fff;
        }

        .menu ul li:hover ul li:hover a.hide {
            background: #6fc;
            color: #000;
        }

        .menu ul li:hover ul li ul {
            display: none;
        }

        .menu ul li:hover ul li a {
            display: block;
            background-color: rgba(13, 89, 149, 0.8);
            color: #000;
            border: 0px solid #fff;
        }

        .menu ul li:hover ul li a:hover {
            background-color: rgba(26, 160, 255, 0.88);
            color: #000;
        }

        .menu ul li:hover ul li:hover ul {
            display: block;
            position: absolute;
            left: 105px;
            top: 0;
        }

        .menu ul li:hover ul li:hover ul.left {
            left: -105px;
        }

        -->
    </style>
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
                        <td width="200"><a href="/"><img src="<?php echo $path; ?>images/flying.jpg" alt="Flying Kites" width="200" height="100" border="0"></a></td>
                        <td width="704" align="center" valign="bottom">
                            <table width="0" border="0" align="right" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td valign="top">
                                        <div class="menu">
                                            <ul>
                                                <li><a class="hide" href="../menu/index.html">DEMOS</a>

                                                    <!--[if lte IE 6]>
                                                    <a href="../menu/index.html">DEMOS
                                                        <table>
                                                            <tr>
                                                                <td>
                                                    <![endif]-->

                                                    <ul>
                                                        <li><a href="../menu/zero_dollars.html"
                                                               title="The zero dollar ads page">zero dollars</a></li>
                                                        <li><a href="../menu/embed.html"
                                                               title="Wrapping text around images">wrapping text</a>
                                                        </li>
                                                        <li><a href="../menu/form.html" title="Styling forms">styled
                                                            form</a></li>
                                                        <li><a href="../menu/nodots.html"
                                                               title="Removing active/focus borders">active focus</a>
                                                        </li>

                                                        <li><a href="../menu/shadow_boxing.html"
                                                               title="Multi-position drop shadow">shadow boxing</a></li>
                                                        <li><a href="../menu/old_master.html"
                                                               title="Image Map for detailed information">image map</a>
                                                        </li>
                                                        <li><a href="../menu/bodies.html"
                                                               title="fun with background images">fun backgrounds</a>
                                                        </li>
                                                        <li><a href="../menu/fade_scroll.html"
                                                               title="fade-out scrolling">fade scrolling</a></li>
                                                        <li><a href="../menu/em_images.html"
                                                               title="em size images compared">em sized images</a></li>
                                                    </ul>

                                                    <!--[if lte IE 6]>
                                                    </td></tr></table>
                                                    </a>
                                                    <![endif]-->
                                                </li>

                                                <li><a class="hide" href="index.html">MENUS</a>

                                                    <!--[if lte IE 6]>
                                                    <a href="index.html">MENUS
                                                        <table>
                                                            <tr>
                                                                <td>
                                                    <![endif]-->

                                                    <ul>
                                                        <li><a href="spies.html" title="a coded list of spies">spies
                                                            menu</a></li>
                                                        <li><a href="vertical.html" title="a horizontal vertical menu">vertical
                                                            menu</a></li>
                                                        <li><a href="expand.html" title="an enlarging unordered list">enlarging
                                                            list</a></li>
                                                        <li><a href="enlarge.html"
                                                               title="an unordered list with link images">link
                                                            images</a></li>
                                                        <li><a href="cross.html" title="non-rectangular links">non-rectangular</a>
                                                        </li>
                                                        <li><a href="jigsaw.html" title="jigsaw links">jigsaw links</a>
                                                        </li>
                                                        <li><a href="circles.html" title="circular links">circular
                                                            links</a></li>
                                                    </ul>

                                                    <!--[if lte IE 6]>
                                                    </td></tr></table>
                                                    </a>
                                                    <![endif]-->
                                                </li>

                                                <li><a class="hide" href="../layouts/index.html">LAYOUTS</a>

                                                    <!--[if lte IE 6]>
                                                    <a href="../layouts/index.html">LAYOUTS
                                                        <table>
                                                            <tr>
                                                                <td>
                                                    <![endif]-->

                                                    <ul>
                                                        <li><a href="../layouts/bodyfix.html"
                                                               title="Cross browser fixed layout">Fixed 1</a></li>
                                                        <li><a href="../layouts/body2.html"
                                                               title="Cross browser fixed layout">Fixed 2</a></li>
                                                        <li><a href="../layouts/body4.html"
                                                               title="Cross browser fixed layout">Fixed 3</a></li>
                                                        <li><a href="../layouts/body5.html"
                                                               title="Cross browser fixed layout">Fixed 4</a></li>
                                                        <li><a href="../layouts/minimum.html"
                                                               title="A simple minimum width layout">minimum width</a>
                                                        </li>
                                                    </ul>

                                                    <!--[if lte IE 6]>
                                                    </td></tr></table>
                                                    </a>
                                                    <![endif]-->
                                                </li>

                                                <li><a class="hide" href="../boxes/index.html">BOXES</a>

                                                    <!--[if lte IE 6]>
                                                    <a href="../boxes/index.html">BOXES
                                                        <table>
                                                            <tr>
                                                                <td>
                                                    <![endif]-->

                                                    <ul>
                                                        <li><a href="spies.html" title="a coded list of spies">spies
                                                            menu</a></li>
                                                        <li><a href="vertical.html" title="a horizontal vertical menu">vertical
                                                            menu</a></li>
                                                        <li><a href="expand.html" title="an enlarging unordered list">enlarging
                                                            list</a></li>
                                                        <li><a href="enlarge.html"
                                                               title="an unordered list with link images">link
                                                            images</a></li>
                                                        <li><a href="cross.html" title="non-rectangular links">non-rectangular</a>
                                                        </li>
                                                        <li><a href="jigsaw.html" title="jigsaw links">jigsaw links</a>
                                                        </li>
                                                        <li><a href="circles.html" title="circular links">circular
                                                            links</a></li>
                                                    </ul>

                                                    <!--[if lte IE 6]>
                                                    </td></tr></table>
                                                    </a>
                                                    <![endif]-->
                                                </li>

                                                <li><a class="hide" href="../mozilla/index.html">MOZILLA</a>

                                                    <!--[if lte IE 6]>
                                                    <a href="../mozilla/index.html">MOZILLA
                                                        <table>
                                                            <tr>
                                                                <td>
                                                    <![endif]-->

                                                    <ul>
                                                        <li><a href="../mozilla/dropdown.html" title="A drop down menu">drop
                                                            down menu</a></li>
                                                        <li><a href="../mozilla/cascade.html" title="A cascading menu">cascading
                                                            menu</a></li>
                                                        <li><a href="../mozilla/content.html" title="Using content:">content:</a>
                                                        </li>
                                                        <li><a href="../mozilla/moxbox.html"
                                                               title=":hover applied to a div">mozzie box</a></li>
                                                        <li><a href="../mozilla/rainbow.html"
                                                               title="I can build a rainbow">rainbow box</a></li>
                                                        <li><a href="../mozilla/snooker.html" title="Snooker cue">snooker
                                                            cue</a></li>
                                                        <li><a href="../mozilla/target.html" title="Target Practise">target
                                                            practise</a></li>
                                                        <li><a href="../mozilla/splittext.html"
                                                               title="Two tone headings">two tone headings</a></li>
                                                        <li><a href="../mozilla/shadow_text.html" title="Shadow text">shadow
                                                            text</a></li>
                                                    </ul>

                                                    <!--[if lte IE 6]>
                                                    </td></tr></table>
                                                    </a>
                                                    <![endif]-->
                                                </li>

                                                <li><a class="hide" href="../ie/index.html">EXPLORER</a>

                                                    <!--[if lte IE 6]>
                                                    <a href="../ie/index.html">EXPLORER
                                                        <table>
                                                            <tr>
                                                                <td>
                                                    <![endif]-->

                                                    <ul>
                                                        <li><a href="../ie/exampleone.html" title="Example one">example
                                                            one</a></li>
                                                        <li><a href="../ie/weft.html" title="Weft fonts">weft fonts</a>
                                                        </li>
                                                        <li><a href="../ie/exampletwo.html" title="Vertical align">vertical
                                                            align</a></li>
                                                    </ul>

                                                    <!--[if lte IE 6]>
                                                    </td></tr></table>
                                                    </a>
                                                    <![endif]-->
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>
                        <td width="96" align="right" valign="bottom">
                            <table width="0" border="0" align="right" cellpadding="0" cellspacing="0">
                                <tr>
                                    <td><img src="<?php echo $path; ?>images/facebook.png" alt="Facebook" width="32" height="32"></td>
                                    <td><img src="<?php echo $path; ?>images/twitter.png" alt="Twitter" width="32" height="32"></td>
                                    <td><img src="<?php echo $path; ?>images/google.png" alt="google" width="32" height="32"></td>
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
         data-easing="easeOutExpo" data-linktoslide="4"><img src="<?php echo $path; ?>images/slides/videobutton.jpg" alt="Image 8"></div>
</li>

<!-- THE THIRD SLIDE -->
<li data-transition="slidedown" data-slotamount="7" data-masterspeed="300" data-thumb="<?php echo $path; ?>images/thumbs/thumb4.jpg">
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
<li data-transition="slideleft" data-slotamount="1" data-masterspeed="300" data-thumb="<?php echo $path; ?>images/thumbs/thumb5.jpg">

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
<li data-transition="flyin" data-slotamount="1" data-masterspeed="300" data-thumb="<?php echo $path; ?>images/thumbs/thumb6.jpg">
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
</td>
</tr>
<tr>
    <td>&nbsp;</td>
</tr>
<tr>
    <td align="center">
        <table width="960" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
                <td width="300">
                    <div class="events"></div>
                </td>
                <td>&nbsp;</td>
                <td width="300">
                    <div class="production"></div>
                </td>
                <td>&nbsp;</td>
                <td width="300">
                    <div class="marketing"></div>
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