<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>旅游</title>
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/6travel.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_img_roll.css" />
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/show_pictures.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/resize_picture.js"></script>
</head>

<center><body >

<div id="body_up_bg1"></div>
<div id="body_up_bg2"><img src="/capcc0624/Public/Home/Images/body_up.png" width="1200" height="50" /></div>
<div id="body">
    <div id="body_up_left">&nbsp;&nbsp;&nbsp; &nbsp; <span class="title1">运河旅游</span><br />
        <img src="/capcc0624/Public/Home/Images/h1-color-lump.jpg" width="320" height="10" /><br />
        <div id="body_up_left_bottom">
            <table width="310" border="0" cellspacing="0" cellpadding="0" style="margin-top: 28px; margin-left: 8px;">
                <tr>
                    <td width="318" height="50" valign="middle" class="title2">
                        <strong>
                            <?php echo ($list11[0]['title']); ?>
                        </strong>
                    </td>
                </tr>
                <tr>
                    <td height="96" valign="top">
                        <p>
                            <?php echo ($list11[0]['content']); ?>
                            <a href="travel/ancient_town/?newsid=<?php echo ($list11[0]['newsid']); ?>" class="detail">
                            ...详细&gt;&gt;
                            </a>
                        </p>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div id="body_up_right">

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
        <div id="one">
            <div style="text-align:center;width:700px;height:410px;background-color: #E4E4E4;">
                <a id="big_img_a" href="travel/ancient_town/?newsid=<?php echo ($list12[0]['newsid']); ?>">
                    <img id="big_img" src="/capcc0624/Public<?php echo ($list12[0]['picture']); ?>" width="600" height="410" />
                </a>
            </div>
    </div>
    <br />
    <div id="home_page_roll" style="float:left; overflow:hidden; height:145px; width:560px; margin-top:10px; margin-left:130px;">
        <div id="home_page_roll_demo">
            <div id="home_page_roll_img_1">
                <?php $__FOR_START_5042__=1;$__FOR_END_5042__=7;for($i=$__FOR_START_5042__;$i < $__FOR_END_5042__;$i+=1){ if(is_array($list13)): $i = 0; $__LIST__ = $list13;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span id="small_img_<?php echo ($i); ?>">
                            <a id="small_a_img_<?php echo ($i); ?>"  href="/capcc0624/index.php/Home/Travel/ancient_town?newsid=<?php echo ($vo["newsid"]); ?>">
                                <img id="small_real_img_<?php echo ($i); ?>" src="/capcc0624/Public/<?php echo ($vo["picture"]); ?>" width="180" height="135" onmouseover="setimg($i);"/>
                            </a>
                        </span><?php endforeach; endif; else: echo "" ;endif; } ?>
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
<div id="body_center1" style="float: left; width: 1070px; margin-top: 30px; margin-left: 70px; background-color:#FFF;">
    <div class="body_center_up_div1" id="body_center_up1"></div>
    <div id="body_center_up2" style="float: left; width: 1070px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left; font-family: '黑体'; font-size: 30px; color: #4CACE2;">&nbsp; 运河古镇系列<br />
        <hr noshade="noshade" color="#3c3467"/>
    </div>
    <div id="body_center1_bottom" style="float:left; width:1070px;">
        <div class="body_center_left" id="body_center1_bottom_left">
        <img src="/capcc0624/Public<?php echo ($list14[0]['picture']); ?>" name="images1" width="700" height="385" id="image" />
            <P style="margin-bottom: 0px; margin-top: 6px">
                <?php echo ($list14[0]['content']); ?>
                <a href="travel/ancient_town/?newsid=<?php echo ($list14[0]['newsid']); ?>"> <span class="detail">...详细&gt;&gt;</span></a>
            </p>
        </div>
        <div class="body_center_right">
            <hr align="right" width="330" size="9" color="#7c509d"/>
            <table width="330" border="0" align="right" cellpadding="0" cellspacing="0" style="margin-top: 11px;">
                <tr>
                    <td align="left" class="item1">
                        <ul>
                        <?php if(is_array($list15)): $i = 0; $__LIST__ = $list15;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <a href="travel/ancient_town/?newsid=<?php echo ($vo["newsid"]); ?>"><?php echo ($vo["name"]); ?></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="gengduo"><a href="travel/ancient_town.php" style="color:inherit;">....................更多&gt;&gt;</a></td>
                </tr>
            </table>
            <br />
        </div>
    </div>
</div>
<div id="body_center2" style="float: left; width: 1070px; margin-top: 30px; margin-left: 70px; background-color:#FFF;">
    <div class="body_center_up_div1" id="body_center_up1"></div>
    <div id="body_center_up2" style="float: left; width: 1070px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left; font-family: '黑体'; font-size: 30px; color: #4CACE2;">&nbsp; 运河湖泊系列<br />
        <hr noshade="noshade" color="#3c3467"/>
    </div>
    <div id="body_center1_bottom" style="float:left; width:1070px;">
        <div class="body_center_left" id="body_center1_bottom_left">
            <img src="/capcc0624/Public<?php echo ($list21[0]['picture']); ?>" name="image1" width="700" height="385" id="image" />
            <p style="margin-bottom: 0px; margin-top: 6px; ">
                <?php echo ($list21[0]['Content']); ?>
                <a href="travel/lake/?newsid=<?php echo ($list21[0]['newsid']); ?>" ><span class="detail">...详细&gt;&gt;</span></a>
            </p>
        </div>
        <div class="body_center_right">
            <hr align="right" width="330" size="9" color="#7c509d"/>
            <table width="330" border="0" align="right" cellpadding="0" cellspacing="0" style="margin-top: 11px;">
                <tr>
                    <td align="left" class="item1">
                        <ul>
                            <?php if(is_array($list22)): $i = 0; $__LIST__ = $list22;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                    <a href="inscription/organization/?newsid=<?php echo ($vo["newsid"]); ?>"><?php echo ($vo["name"]); ?></a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="gengduo"><a href="travel/lake.php" style="color:inherit;">....................更多&gt;&gt;</a></td>
                </tr>
            </table>
            <br />
        </div>
    </div>
</div>
<div id="body_center3" style="float: left; width: 1070px; margin-top: 30px; margin-left: 70px; background-color:#FFF;">
    <div class="body_center_up_div1" id="body_center_up1"></div>
    <div id="body_center_up2" style="float: left; width: 1070px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left; font-family: '黑体'; font-size: 30px; color: #4CACE2;">&nbsp; 运河园林系列<br />
        <hr noshade="noshade" color="#3c3467"/>
    </div>
    <div id="body_center1_bottom" style="float:left; width:1070px;">
        <div class="body_center_left" id="body_center1_bottom_left">
            <img src="/capcc0624/Public<?php echo ($list31[0]['pictures']); ?>" name="image1" width="700" height="385" id="image" />
            <p style="margin-bottom: 0px; margin-top: 6px; ">
                <?php echo ($list31[0]['content']); ?>
                <a href="travel/garden/?newsid=<?php echo ($list31[0]['newsid']); ?>" <span class="detail">...详细&gt;&gt;</span></a>
            </p>
        </div>
        <div class="body_center_right">
            <hr align="right" width="330" size="9" color="#7c509d"/>
            <table width="330" border="0" align="right" cellpadding="0" cellspacing="0" style="margin-top: 11px;">
                <tr>
                    <td align="left" class="item1">
                        <ul>
                            <?php if(is_array($list32)): $i = 0; $__LIST__ = $list32;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <a href="travel/garden/?newsid=<$vo.newsid}>"><?php echo ($vo["name"]); ?></a>
                                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="gengduo"><a href="travel/garden.php" style="color:inherit;">....................更多&gt;&gt;</a></td>
                </tr>
            </table>
            <br />
        </div>
    </div>
</div>
<div id="body_center4" style="float: left; width: 1070px; margin-top: 30px; margin-left: 70px; background-color:#FFF;">
    <div class="body_center_up_div1" id="body_center_up1"></div>
    <div id="body_center_up2" style="float: left; width: 1070px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left; font-family: '黑体'; font-size: 30px; color: #4CACE2;">&nbsp; 运河书院系列<br />
        <hr noshade="noshade" color="#3c3467"/>
    </div>
    <div id="body_center1_bottom" style="float:left; width:1070px;">
        <div class="body_center_left" id="body_center1_bottom_left">
            <img src="/capcc0624/Public<?php echo ($list41[0]['pictures']); ?>" name="image1" width="700" height="385" id="image" />
            <p style="margin-bottom: 0px; margin-top: 6px; ">
                <?php echo ($list41[0]['content']); ?>
                <a href="travel/garden/?newsid=<?php echo ($list41[0]['newsid']); ?>" <span class="detail">...详细&gt;&gt;</span></a>
            </p>
        </div>
        <div class="body_center_right">
            <hr align="right" width="330" size="9" color="#7c509d"/>
            <table width="330" border="0" align="right" cellpadding="0" cellspacing="0" style="margin-top: 11px;">
                <tr>
                    <td align="left" class="item1">
                        <ul>
                        <?php if(is_array($list42)): $i = 0; $__LIST__ = $list42;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <a href="travel/academy/?newsid=<?php echo ($vo["newsid"]); ?>">
                                <?php echo ($vo["title"]); ?>
                                </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="gengduo"><a href="travel/academy.php" style="color:inherit;">....................更多&gt;&gt;</a></td>
                </tr>
            </table>
            <br />
        </div>
    </div>
</div>
<div id="body_center5" style="float: left; width: 1070px; margin-top: 30px; margin-left: 70px; background-color:#FFF;">
    <div class="body_center_up_div1" id="body_center_up1"></div>
    <div id="body_center_up2" style="float: left; width: 1070px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left; font-family: '黑体'; font-size: 30px; color: #4CACE2;">&nbsp; 运河博物馆系列<br />
        <hr noshade="noshade" color="#3c3467"/>
    </div>
    <div id="body_center1_bottom" style="float:left; width:1070px;">
        <div class="body_center_left" id="body_center1_bottom_left">
            <img src="/capcc0624/Public<?php echo ($list51[0]['picture']); ?>" name="image1" width="700" height="385" id="image" />
            <p style="margin-bottom: 0px; margin-top: 6px; ">
                <?php echo ($list51[0]['content']); ?>
                <a href="travel/garden/?newsid=<?php echo ($list51[0]['newsid']); ?>" <span class="detail">...详细&gt;&gt;</span></a>
            </p>
        </div>
        <div class="body_center_right">
            <hr align="right" width="330" size="9" color="#7c509d"/>
            <table width="330" border="0" align="right" cellpadding="0" cellspacing="0" style="margin-top: 11px;">
                <tr>
                    <td align="left" class="item1">
                        <ul>
                        <?php if(is_array($list52)): $i = 0; $__LIST__ = $list52;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <a href="travel/academy/?newsid=<?php echo ($vo["newsid"]); ?>">
                                <?php echo ($vo["title"]); ?></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="gengduo"><a href="travel/museum.php" style="color:inherit;">....................更多&gt;&gt;</a></td>
                </tr>
            </table>
            <br />
        </div>
    </div>
</div>
<div id="body_center6" style="float: left; width: 1070px; margin-top: 30px; margin-left: 70px; background-color:#FFF;">
    <div class="body_center_up_div1" id="body_center_up1"></div>
    <div id="body_center_up2" style="float: left; width: 1070px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left; font-family: '黑体'; font-size: 30px; color: #4CACE2;">&nbsp; 运河遗址系列<br />
        <hr noshade="noshade" color="#3c3467"/>
    </div>
    <div id="body_center1_bottom" style="float:left; width:1070px;">
        <div class="body_center_left" id="body_center1_bottom_left">
            <img src="/capcc0624/Public<?php echo ($list61[0]['picture']); ?>" name="image1" width="700" height="385" id="image" />
            <p style="margin-bottom: 0px; margin-top: 6px; ">
                <?php echo ($list61[0]['content']); ?>
                <a href="travel/garden/?newsid=<?php echo ($list61[0]['newsid']); ?>" <span class="detail">...详细&gt;&gt;</span></a>
            </p>
        </div>
        <div class="body_center_right">
            <hr align="right" width="330" size="9" color="#7c509d"/>
            <table width="330" border="0" align="right" cellpadding="0" cellspacing="0" style="margin-top: 11px;">
                <tr>
                    <td align="left" class="item1">
                        <ul>
                        <?php if(is_array($list62)): $i = 0; $__LIST__ = $list62;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <a href="travel/???/?newsid=<?php echo ($vo["newsid"]); ?>">
                                <?php echo ($vo["name"]); ?></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="gengduo"><a href="travel/site.php" style="color:inherit;">....................更多&gt;&gt;</a></td>
                </tr>
            </table>
            <br />
        </div>
    </div>
</div>
<div id="body_center1" style="float: left; width: 1070px; margin-top: 30px; margin-left: 70px; background-color:#FFF;">
    <div class="body_center_up_div1" id="body_center_up1"></div>
    <div id="body_center_up2" style="float: left; width: 1070px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left; font-family: '黑体'; font-size: 30px; color: #4CACE2;">&nbsp; 运河公园系列<br />
        <hr noshade="noshade" color="#3c3467"/>
    </div>
    <div id="body_center1_bottom" style="float:left; width:1070px;">
        <div class="body_center_left" id="body_center1_bottom_left">
            <img src="/capcc0624/Public<?php echo ($list71[0]['picture']); ?>" name="image1" width="700" height="385" id="image" />
            <p style="margin-bottom: 0px; margin-top: 6px; ">
                <?php echo ($list71[0]['content']); ?>
                <a href="travel/garden/?newsid=<?php echo ($list71[0]['newsid']); ?>" <span class="detail">...详细&gt;&gt;</span></a>
            </p>
        </div>
        <div class="body_center_right">
            <hr align="right" width="330" size="9" color="#7c509d"/>
            <table width="330" border="0" align="right" cellpadding="0" cellspacing="0" style="margin-top: 11px;">
                <tr>
                    <td align="left" class="item1">
                        <ul>
                        <?php if(is_array($list72)): $i = 0; $__LIST__ = $list72;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                            <a href="travel/???/?newsid=<?php echo ($vo["newsid"]); ?>">
                                <?php echo ($vo["name"]); ?></a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="gengduo"><a href="travel/park.php" style="color:inherit;">....................更多&gt;&gt;</a></td>
                </tr>
            </table>
            <br />
        </div>
    </div>
    <div style="font: 0px/0px sans-serif;clear: both;display: block"></div>
</div></div>

</body></center>
</html>