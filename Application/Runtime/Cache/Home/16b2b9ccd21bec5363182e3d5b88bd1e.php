<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>活动</title>
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/11activity.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_font.css" />
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/head_bottom.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/show_pictures.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/resize_picture.js"></script>
</head>

<center><body >
<div id="body_up_bg1"></div>
<div id="body_up_bg2"><img src="/capcc0624/Public/Home/Images/body_up.png" width="1200" height="50" /></div>
<div id="body">
    <div id="body_up_left">&nbsp;&nbsp;&nbsp; &nbsp; <span class="title1">活动策划</span><br />
        <img src="/capcc0624/Public/Home/Images/h1-color-lump.jpg" width="320" height="10" /><br />
        <div id="body_up_left_bottom">
            <table width="310" border="0" cellspacing="0" cellpadding="0" style="margin-top: 25px; margin-left: 10px;">
                <tr>
                    <td width="318" height="43" valign="middle" class="title2">筹备中......</td>
                </tr>
                <tr>
                    <td height="75" valign="top"><p>筹备中...<a href="" class="detail">...详细&gt;&gt;</a></p></td>
                </tr>
            </table>
        </div>
    </div>
    <div id="body_up_right">
        <div id="one"><img id="big_img" src="/capcc0624/Public/Home/Images/images_show/1.jpg" alt="" width="700" height="410" style="background-color: #66FFFF" /></div>
        <br />
        <style type="text/css">
            #home_page_roll {
                background: #FFF;
                overflow:hidden;
                border: 0px dashed #CCC;
                width: 800px;
            }
            #home_page_roll img {
                border: 0px solid #F2F2F2;
            }
            #home_page_roll_demo {
                float: left;
                width: 800%;
            }
            #home_page_roll_img_1 {
                float: left;
            }
            #home_page_roll_img_2 {
                float: left;
            }
        </style>
        <div id="home_page_roll" style="float:left; overflow:hidden; height:145px; width:560px; margin-top:10px; margin-left:130px;">
            <div id="home_page_roll_demo">
                <div id="home_page_roll_img_1">
                    <?php $__FOR_START_20925__=1;$__FOR_END_20925__=8;for($i=$__FOR_START_20925__;$i < $__FOR_END_20925__;$i+=1){ ?><img id="small_img_<?php echo ($i); ?>" onClick="setimg(src)" src="/capcc0624/Public/Home/Images/images_show/<?php echo ($i); ?>.jpg" width="180" height="145"/><?php } ?>
                </div>
                <div id="home_page_roll_img_2" style="visibility:hidden; width:900px;">
                </div>
            </div>
        </div>
        <div id="button2" style="width: 35px; height: 35px; float: left; margin-left:-578px; margin-top: 60px;">
            <input onClick="right_roll_img()" name="" type="image" src="/capcc0624/Public/Home/Images/botton-left.png" style="width:35px; height:35px;" />
        </div>
        <div id="button1" style="width: 35px; height: 35px; float: left; margin-left:-20px; margin-top: 60px;">
            <input onClick="left_roll_img()" name="" type="image" src="/capcc0624/Public/Home/Images/botton-right.png" style="width:35px; height:35px;" />
        </div>
        <br />
        <br />
        <br />
        <br />
        <br />
    </div>
    <script>
        var speed_1=50;
        var tab=document.getElementById("home_page_roll");
        var tab1=document.getElementById("home_page_roll_img_1");
        var tab2=document.getElementById("home_page_roll_img_2");
        function Marquee_1(){
            if(tab2.offsetWidth-tab.scrollLeft<=0)
                tab.scrollLeft-=tab1.offsetWidth
            else{
                tab.scrollLeft++;
            }
        }
        var MyMar_1=setInterval(Marquee_1,speed_1);
        tab.onmouseover=function() {clearInterval(MyMar_1)};
        tab.onmouseout=function() {MyMar_1=setInterval(Marquee_1,speed_1)};
        button2.onmouseover=function() {clearInterval(MyMar_1);}
        button2.onmouseout=function() {MyMar_1=setInterval(Marquee_1,speed_1);}
        button1.onmouseover=function() {clearInterval(MyMar_1);}
        button1.onmouseout=function() {MyMar_1=setInterval(Marquee_1,speed_1);}
    </script>
    <div id="body_center" style="float: left; width: 1070px; margin-top: 30px; margin-left: 70px;">
        <div class="body_center_up_div1" id="body_center_up1"></div>
        <div id="body_center_up2" style="float: left; width: 1070px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left; font-family: '黑体'; font-size: 30px; color: #4CACE2;">&nbsp; 近期活动<br />
            <hr noshade="noshade" color="#EA5520"/>
        </div>
        <div id="body_center1_bottom" style="float:left; width:1070px;">
            <div class="body_center_left" id="body_center1_bottom_left">
                <table width="630" border="0" cellspacing="5" cellpadding="0">
                    <tr>
                        <td><img name="" src="" width="650" height="188" alt="" style="background-color: #EFEEE7" /></td>
                    </tr>
                    <tr>
                        <td height="158"><img name="" src="" width="650" height="188" alt="" style="background-color: #EFEEE7" /></td>
                    </tr>
                    <tr>
                        <td height="191"><img name="" src="" width="650" height="188" alt="" style="background-color: #EFEEE7" /></td>
                    </tr>
                    <tr>
                        <td><img name="" src="" width="650" height="188" alt="" style="background-color: #EFEEE7" /></td>
                    </tr>
                </table>
            </div>
            <div class="body_center_right_up">
                <hr align="right" width="330" size="9" color="#029c68"/>
                <table width="330" border="0" align="right" cellpadding="0" cellspacing="0" style="margin-top: 11px;">
                    <tr>
                        <td align="left" class="item1">·筹备中.......................<br />
                            ·.............................<br />
                            ·.............................<br />
                            ·.............................<br />
                            ·.............................<br />
                            ·.............................<br />
                            ·.............................<br />
                            ·............................. </td>
                    </tr>
                    <tr>
                        <td class="gengduo">....................更多&gt;&gt;</td>
                    </tr>
                </table>
                <br />
            </div>
            <div class="body_center_ritht_bottom" id="body_center_up_right" style="">
                <table width="330" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><img name="" src="" width="330" height="383" alt="" style="background-color: #EFEEE7" /></td>
                    </tr>
                    <tr>
                        <td><p style="margin-bottom: 0px; margin-top: 6px; ">宜兴紫砂工艺，运河城市一奇葩。它始于北宋，盛于明清，繁荣于当今<span class="detail"><a href="#" class="zise">.</a><a href="#" class="detail">..详细&gt;&gt;</a></span></p></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div id="body_center" style="float: left; width: 1070px; margin-top: 28px; margin-left: 70px;">
        <div class="body_center_up_div1" id="body_center_up1"></div>
        <div id="body_center_up2" style="float: left; width: 1070px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left; font-family: '黑体'; font-size: 30px; color: #4CACE2;">&nbsp; 以往活动<br />
            <hr noshade="noshade" color="#EA5520"/>
        </div>
        <div id="body_center1_bottom" style="float:left; width:1070px;">
            <div class="body_center_left" id="body_center1_bottom_left">
                <table width="630" border="0" cellspacing="5" cellpadding="0">
                    <tr>
                        <td><img name="" src="" width="650" height="188" alt="" style="background-color: #EFEEE7" /></td>
                    </tr>
                    <tr>
                        <td height="158"><img name="" src="" width="650" height="188" alt="" style="background-color: #EFEEE7" /></td>
                    </tr>
                    <tr>
                        <td height="191"><img name="" src="" width="650" height="188" alt="" style="background-color: #EFEEE7" /></td>
                    </tr>
                    <tr>
                        <td><img name="" src="" width="650" height="188" alt="" style="background-color: #EFEEE7" /></td>
                    </tr>
                </table>
            </div>
            <div class="body_center_right_up">
                <hr align="right" width="330" size="9" color="#5c99d0"/>
                <table width="330" border="0" align="right" cellpadding="0" cellspacing="0" style="margin-top: 11px;">
                    <tr>
                        <td align="left" class="item1">·筹备中.......................<br />
                            ·.............................<br />
                            ·.............................<br />
                            ·.............................<br />
                            ·.............................<br />
                            ·.............................<br />
                            ·.............................<br />
                            ·............................. </td>
                    </tr>
                    <tr>
                        <td class="gengduo">....................更多&gt;&gt;</td>
                    </tr>
                </table>
                <br />
            </div>
            <div class="body_center_ritht_bottom" id="body_center_up_right" style="">
                <table width="330" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                        <td><img name="" src="" width="330" height="383" alt="" style="background-color: #EFEEE7" /></td>
                    </tr>
                    <tr>
                        <td><p style="margin-bottom: 0px; margin-top: 6px; ">宜兴紫砂工艺，运河城市一奇葩。它始于北宋，盛于明清，繁荣于当今<span class="detail"><a href="#" class="zise">.</a><a href="#" class="detail">..详细&gt;&gt;</a></span></p></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div style="font: 0px/0px sans-serif;clear: both;display: block"></div>
</div>
</body></center>
</html>