<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>新闻</title>
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/2news.css" />
    <link rel="stylesheet" type="text/css" href="/capcc0624/Public/Home/Css/1.1home_font.css" />
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/head_bottom.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/show_pictures_14.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/resize_picture.js"></script>
    <script type="text/javascript" src="/capcc0624/Public/Home/Js/marquee1.js"></script>
</head>

<center><body >

<div id="body_up_bg1"></div>
<div id="body_up_bg2"><img src="/capcc0624/Public/Home/Images/body_up.png" width="1200" height="50" /></div>
<div id="body">
    <div id="body_up_left">&nbsp;&nbsp;&nbsp; &nbsp; <span class="title1">运河新闻</span><br />
        <img src="/capcc0624/Public/Home/Images/news-h1-color-lump.png" width="320" height="10" /><br />
        <br />
        <br />
        <br />
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<span class="title2">
        <?php echo ($list11[0]['title']); ?>
	</span>
        <p class="content1" style="margin-bottom:0px;margin-top:6px; content: text-align:justify; text-justify:inter-ideograph; word-wrap:break-word; word-break:break-all; text-indent:2em;">
            <?php echo ($list11[0]["content"]); ?>
            <a href="/newsid=<?php echo ($list11[0]["newsid"]); ?>" >
                <span class="detail">...详细&gt;&gt;</span>
            </a>
        </p>
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
                <a id="big_img_a" href="news/active/?newsid=<?php echo ($list12[0]["newsid"]); ?>" >
                    <img id="big_img" src="/capcc0624/Public<?php echo ($list12[0]["picture"]); ?>" alter="" width="600" height="400" stylr="background-color:#99FFFF"/>
                 </a>
            </div>
        </div>
        <br />

    <div id="home_page_roll" style="float:left; overflow:hidden; height:145px; width:560px; margin-top:10px; margin-left:130px;">
        <div id="home_page_roll_demo">
            <div id="home_page_roll_img_1">
                    <?php $__FOR_START_521__=1;$__FOR_END_521__=18;for($i=$__FOR_START_521__;$i < $__FOR_END_521__;$i+=1){ if(is_array($list14)): $i = 0; $__LIST__ = $list14;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><span id="small_img_<?php echo ($i); ?>">
                             <a id="small_a_img_<?php echo ($i); ?>" href="news/active/?newsid=$vo.newsid">
                                <img id="small_real_img_<?php echo ($i); ?>" src="/capcc0624/Public<?php echo ($vo["picture"]); ?>" width="110px" height="145px" />
                            </a>
                          </span><?php endforeach; endif; else: echo "" ;endif; } ?>
             </div>
            <div id="home_page_roll_img_2" style="visibility:hidden; width:1600px;">
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
    var speed_1=120;
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
<div id="body_center_left" style="float: left; margin-top: 30px; margin-left: 70px; width: 700px; height: 1440px; position: relative;">
    <div class="body_center_left_up_divtwo" id="body_center_left_up1"></div>
    <div class="body_center_left_up_divthree" id="body_center_left_up2" style="float: left; width: 694px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left;">&nbsp; 动态新闻<br />
        <hr noshade="noshade" color="#E74291"/>
    </div>
    <div class="body_center_left_bottomone" id="body_center_left_up3">
        <div class="body_center_left_bottomtwo" id="one" >
            <div style="background-color:#e4e4e4">
                <img src="/capcc0624/Public<?php echo ($list12[0]["picture"]); ?>" width="340px" height="255px" onload="AutoResizeImage(340.255,this)" />
            </div>
            <p style="margin-bottom: 0px;margin-top: 6px">
                <?php echo ($list12[0]["content"]); ?>
                <a href="/<?php echo ($list12[0]["newsid"]); ?>" class="detail">
                    ...详细&gt;&gt;
                </a>
            </p>
         </div>
         <div id=2 class="item1" style="width: 350px; height: 375px; float: left; margin-top: 9px;">
            <hr align="right" width="330" size="9" color="#ea531a"/>
            <table width="330" border="0" align="right" cellpadding="0" cellspacing="0">
                <tr>
                     <td>
                        <span style="font-size:17px;color:#ea531a;">2014年淮安•中国大运河世界遗产保护与可持续发展研讨会发言</span>
                            <table>
                                <?php if(is_array($list13)): $i = 0; $__LIST__ = $list13;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 3 );++$i; if(($mod) == "0"): ?><tr><?php endif; ?>
                                    <td width="100px">
                                        <a href="/<$vo.newsid>"><?php echo ($vo["author"]); ?></a>
                                    </td><?php endforeach; endif; else: echo "" ;endif; ?>
                            </table>
                     </td>
                </tr>
                <tr>
                    <td height="30" class="gengduo"><a href="news/active.php" style="color:inherit;">....更多&gt;&gt;</a></td>
                </tr>
        </table>
        <br />
    </div>
    </div>
<div class="body_center_left_up_divone" id="body_center_left_center1_up">
    <div class="body_center_left_up_divthree" id="body_center_left_up5" style="float: left; width: 694px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left;">&nbsp; 新闻视线<br />
        <hr noshade="noshade"  color="#E74291"/>
    </div>
    <div class="body_center_left_up_divtwo" id="body_center_left_up4"></div>
</div>
<div class="body_center_left_bottomone" id="body_center_left_center1_bottom">
    <div class="body_center_left_bottomtwo" id="one">

        <img  src="/capcc0624/Public/chinese_canal_images\chinese_canal_city_images\扬州.jpg" width="340px" height="255px" onload="AutoResizeImage(340,255,this)" />
        <p style="margin-bottom: 0px; margin-top: 6px;">
            <?php echo ($list21[0]["content"]); ?>
            <a href="/<?php echo ($list21[0]["newsid"]); ?>" class="detail">
                ...详细&gt;&gt;
            </a>
        </p>
    </div>
    <div id="22" class="item1" style="width: 350px; height: 375px; float: left; margin-top: 9px;">
        <hr align="right" width="330" size="9" color="#e098c0"/>
        <table width="330" border="0" align="right" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <ul>
                        <?php if(is_array($list22)): $i = 0; $__LIST__ = $list22;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a href="news/angle/?newsid=<?php echo ($vo["newsid"]); ?>">
                           <?php echo ($vo["title"]); ?>
                            </a>
                       </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="gengduo"><a href="news/angle.php" style="color:inherit;">....................更多&gt;&gt;</a></td>
            </tr>
        </table>
        <br />
    </div>
</div>
<div class="body_center_left_up_divone" id="body_center_left_center2_up">
    <div class="body_center_left_up_divtwo" id="body_center_left_up6"></div>
    <div class="body_center_left_up_divthree" id="body_center_left_up7" style="float: left; width: 694px; margin-top: 33px; height: 48px; line-height: 31px; text-align: left;">&nbsp; 深度调查<br />
        <hr noshade="noshade"  color="#E74291" />
    </div>
</div>
<div class="body_center_left_bottomone" id="body_center_left_center2_bottom">
    <div class="body_center_left_bottomtwo" id="one" style="width: 342px; height: 360px; float: left;">
        <img src="/capcc0624/Public/Home/Images/安吉1.jpg" width="340px" height="255px"onload="AutoResizeImage(340,255,this)" />
        <p style="margin-bottom: 0px; margin-top: 6px;">
            <?php echo ($list31[0]["foreword"]); ?>
            <a href="news/investigation/?newsid=<?php echo ($list31[0]["newsid"]); ?>" class="detail">...详细&gt;&gt;</a>
        </p>
    </div>
    <div id="222" class="item1" style="width: 350px; height: 350px; float: left; margin-top: 9px;">
        <hr align="right" width="330" size="9" color="#7c509d"/>
        <table width="330" border="0" align="right" cellpadding="0" cellspacing="0">
            <tr>
                <td>
                    <ul>
                        <?php if(is_array($list32)): $i = 0; $__LIST__ = $list32;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
                                <a href="news/investigation/?newsid=<?php echo ($vo["newsid"]); ?>" />
                                <?php echo ($vo["title"]); ?>
                                </a>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>
                    </ul>
                </td>
            </tr>
            <tr>
                <td class="gengduo"><a href="news/investigation.php" style="color:inherit;">....................更多&gt;&gt;</a></td>
            </tr>
        </table>
        <br />
    </div>
</div>
</div>
<div id="body_center_right">
    <div id="body_center_right_up" style="margin-top: 34px; text-align: left; margin-left: 27px; width: 305px; height: 214px;"><span class="title4">运河城市</span>
        <hr noshade="noshade" color="#E74291" />
        <table width="100%" height="143" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="35%"><img src="/capcc0624/Public/Home/Images/嘉兴运河-06.jpg" alt="" name="" width="100" height="140" style="background-color: #EFEEE7; margin-top: 4px;" /></td>
                <td width="65%" valign="top" class="content2"><span class="item1"><a href="city/window.php" class="item1">·城市视窗</a><br />
              ·<a href="city/canal.php" class="item1">运河城市</a><br />
              ·<a href="city/world.php" class="item1">世界运河</a><br />
              ·<a href="city/comment.php" class="item1">城市评价</a><br /></span></td>
            </tr>
        </table>
        <br />
    </div>
    <div id="body_center_right_center1" style="margin-top: 80px; text-align: left; margin-left: 27px; width: 305px; height: 288px;"><span class="title4">运河申遗</span>
        <hr noshade="noshade" color="#E74291" />
        <table width="100%" border="0" cellspacing="0" cellpadding="0" >
            <tr>
                <td height="218" class="item1">·<a href="inscription/concept.php" class="item1">概念构成</a><br />
                    ·<a href="inscription/organization.php" class="item1">世界遗产组织</a><br />
                    ·<a href="inscription/convention.php" class="item1">组织公约</a><br />
                    ·<a href="inscription/project.php" class="item1">中国世遗项目</a><br />
                    ·<a href="inscription/union.php" class="item1">运河申遗</a><br />
                    ·<a href="inscription/research.php" class="item1">研究机构</a><br />
                    ·<a href="inscription/media.php" class="item1">主要媒体</a><br />
                    ·<a href="inscription/special.php" class="item1">申遗专题</a><br /></td>
            </tr>
        </table>
    </div>
    <div id="body_center_right_center2" style="margin-top: 80px; text-align: left; margin-left: 27px; width: 305px; height: 170px;"><span class="title4">网络交易</span>
        <hr noshade="noshade" color="#E74291" />
        <table width="100%" height="108" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="49%"><img src="/capcc0624/Public/Home/Images/标识符号 (1).jpg" alt="" name="" width="140" height="100" style="background-color: #EFEEE7; margin-top: 4px;" /></td>
                <td width="51%" valign="top" class="content2"><span class="item1">·创意市集<br />
            ·会员消费<br />
            ·城市俱乐部</span><br /></td>
            </tr>
        </table>
    </div>
    <div id=body_center_right_bottom style="margin-top: 80px; text-align: left; margin-left: 27px; width: 305px; font-family: '黑体';"><span class="title4">广告视窗</span>
        <hr noshade="noshade" color="#E74291" />
        <table width="100%" height="108" border="0" cellpadding="0" cellspacing="0">
            <tr>
                <td width="49%" valign="top"><img src="/capcc0624/Public/Home/Images/标识符号 (1).jpg" alt="" name="" width="140" height="100" style="background-color: #EFEEE7; margin-top: 4px;" /></td>
                <td width="51%" valign="top" class="content2"><span class="item1">·城市视窗<br />
            ·企业视窗<br />
            ·产品视窗</span><br />
            <span class="item1">·体验视窗<br />
              ·信息发布</span><br /></td>
            </tr>
        </table>
    </div>
</div>
<div style="font: 0px/0px sans-serif;clear: both;display: block"> </div>
</div>
<?php
 include('foot.html'); ?>
</body></center>
</html>