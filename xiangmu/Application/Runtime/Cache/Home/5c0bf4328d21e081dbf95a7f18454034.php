<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    </script>
    <script type="text/javascript" async="" src="/Public/Home/js/conversion.js"></script>
    <script src="/Public/Home/js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script>
    <style type="text/css"></style>
    <meta content="no-siteapp" http-equiv="Cache-Control">
    <link media="handheld" rel="alternate">
    <!-- end 云适配 -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>职位订阅-拉勾网-最专业的互联网招聘平台</title>
    <meta content="23635710066417756375" property="qc:admins">
    <meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
    <meta name="keywords"
          content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
    <meta content="QIQ6KC1oZ6" name="baidu-site-verification">

    <!-- <div class="web_root"  style="display:none">http://www.lagou.com</div> -->
    <script type="text/javascript">
        var ctx = "http://www.lagou.com";
        console.log(1);
    </script>
    <link href="http://www.lagou.com/images/favicon.ico" rel="Shortcut Icon">
    <link href="/Public/Home/css/style.css" type="text/css" rel="stylesheet">
    <link href="/Public/Home/css/external.min.css" type="text/css" rel="stylesheet">
    <link href="/Public/Home/css/popup.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="/Public/Home/js/jquery.1.10.1.min.js"></script>
    <script src="/Public/Home/js/jquery.lib.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/Public/Home/js/ajaxfileupload.js"></script>
    <script src="/Public/Home/js/additional-methods.js" type="text/javascript"></script>
    <!--[if lte IE 8]>
    <script type="text/javascript" src="/Public/Home/js/excanvas.js"></script>
    <![endif]-->
    <script type="text/javascript">
        var youdao_conv_id = 271546;
    </script>
    <script src="/Public/Home/js/conv.js" type="text/javascript"></script>
    <script src="/Public/Home/js/ajaxCross.json" charset="UTF-8"></script>
</head>
<body>
<div id="body">
    <!--<div id="header">-->
    <script src="/Public/Home/js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script>
<div id="header">
    <div class="wrapper">
        <a href="index.html" class="logo">
            <img src="/Public/Home/images/logo.png" width="229" height="43" alt="拉勾招聘-专注互联网招聘" />
        </a>
        <ul class="reset" id="navheader">
            <li class="current"><a href="index.html">首页</a></li>
            <li ><a href="/Home/Company/index" >公司</a></li>
            <li ><a href="#" target="_blank">论坛</a></li>
            <li ><a href="jianli.html" rel="nofollow">我的简历</a></li>
            <li ><a href="create.html" rel="nofollow">发布职位</a></li>
        </ul>

        <!--未登录-->
        <?php if( $_SESSION['person']== false ): ?><ul class="loginTop">
            <li><a href="login.html" rel="nofollow">登录</a></li>
            <li>|</li>
            <li><a href="register.html" rel="nofollow">注册</a></li>
        </ul>
    <!--//登录后状态-->
        <?php else: ?>
            <dl class="collapsible_menu">
                <dt>
                    <span><?php echo ($_SESSION['person']['username']); ?></span>
                    <span class="red dn" id="noticeDot-0"></span>
                    <i></i>
                </dt>
                <dd><a rel="nofollow" href="jianli.html">我的简历</a></dd>
                <dd><a href="collections.html">我收藏的职位</a></dd>
                <dd class="btm"><a href="subscribe.html">我的订阅</a></dd>
                <dd><a href="create.html">我要招人</a></dd>
                <dd><a href="accountBind.html">帐号设置</a></dd>
                <dd class="logout"><a rel="nofollow" href="login.html">退出</a></dd>
            </dl>
            <div class="dn" id="noticeTip">
                <span class="bot"></span>
                <span class="top"></span>
                <a target="_blank" href="delivery.html"><strong>0</strong>条新投递反馈</a>
                <a class="closeNT" href="javascript:;"></a>
            </div><?php endif; ?>
    </div>
</div>
<!-- end #header -->

    <div id="container">

        <div class="clearfix">
            <div class="content_l">
                <h1>我的职位订阅</h1>

                <?php if(is_array($subscribe_data)): $k = 0; $__LIST__ = $subscribe_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$subscribe_one): $mod = ($k % 2 );++$k;?><div class="selected s1">
                    <h2><?php echo ($subscribe_one["positionname"]); ?></h2>
                    <div class="sbox">
                        <a rel="1" class="sclose" href="javascript:void(0)"></a>
                        <a rel="1" class="sedit" href="javascript:void(0)"></a>
                    </div>
	                   	<span>
	                    	<?php echo ($subscribe_one["city"]); ?> 
	                    	/	                    	<?php echo ($subscribe_one["industryfield"]); ?> 
	                    	/	                    	<?php echo ($subscribe_one["financestage"]); ?> 
	                    	/	                    	<?php echo ($subscribe_one["salary"]); ?>
	                    </span>
                    <input type="hidden" id="oi1" name="id" value="<?php echo ($subscribe_one["id"]); ?>">
                    <input type="hidden" id="pn1" value="<?php echo ($subscribe_one["positionname"]); ?>">
                    <input type="hidden" id="ci1" value="<?php echo ($subscribe_one["city"]); ?>">
                    <input type="hidden" id="inf1" value="<?php echo ($subscribe_one["industryfield"]); ?>">
                    <input type="hidden" id="fs1" value="<?php echo ($subscribe_one["financestage"]); ?>">
                    <input type="hidden" id="sa1" value="<?php echo ($subscribe_one["salary"]); ?>">
                    <input type="hidden" id="smp1" value="<?php echo ($subscribe_one["sendmailPer"]); ?>">
                    <input type="hidden" id="em1" value="<?php echo ($subscribe_one["email"]); ?>">
                </div><?php endforeach; endif; else: echo "" ;endif; ?>

                <!--  	                <a href="javascript:void(0)"  class="btn_big"  id="subBtn">新建订阅</a>
                                         <div class="apply_num">共可创建 <span>2</span> 个，还可创建 <span>1</span> 个</div>
                     <input type="hidden" id="orderCount" value="1" />
                     -->
                <input type="hidden" value="1" id="orderCount">

                <form class="dn" id="subForm">
                    <input type="hidden" id="orderId" name="id" value="">
                    <div class="s_form">
                        <p>筛选下面的职位订阅条件，实现精准匹配的个性化职位定制，我们帮你挑工作！</p>
                        <dl>
                            <dt>
                            <h3>接收邮箱 <i class="rss_circle"></i>&nbsp; 发送周期 <em></em><span>（必填）</span></h3>
                            </dt>
                            <dd>
                                <input type="text" value="888888888@qq.com" placeholder="请输入接收邮箱" name="email"
                                       id="subEmail">
                                <span style="display:none;" class="error" id="emailError">请输入接收邮箱</span>
                            </dd>
                            <dd>
                                <input type="hidden" value="" name="sendMailPer" id="select_day_hidden">
                                <ul class="s_radio clearfix">
                                    <li title="3">3天</li>
                                    <li title="7">7天</li>
                                </ul>
                                <span style="display:none;" class="error" id="sendError">请选择发送周期</span>
                            </dd>
                        </dl>
                        <dl>
                            <dt>
                            <h3>职位名称 <em></em><span>（必填）</span></h3>
                            </dt>
                            <dd>
                                <input type="hidden" value="" name="positionName" id="select_job_hidden">
                                <input type="button" value="请选择职位名称" id="select_job" class="select">

                                <div class="dn" id="sub_box_job" style="display: none;">
                        <?php if(is_array($cate_data)): $i = 0; $__LIST__ = $cate_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate_one): $mod = ($i % 2 );++$i; if( $cate_one["pid"] == 0 ): ?><dl>
                            <dt><?php echo ($cate_one["name"]); ?></dt>
                            <dd>
                                <ul class="reset job_main">
                                <?php if(is_array($cate_data)): $i = 0; $__LIST__ = $cate_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate_two): $mod = ($i % 2 );++$i; if( $cate_two["pid"] == $cate_one["id"] ): ?><li>
                                        <?php echo ($cate_two["name"]); ?>
                                        <ul class="reset job_sub dn">
                                            <?php if(is_array($cate_data)): $i = 0; $__LIST__ = $cate_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate_three): $mod = ($i % 2 );++$i; if( $cate_three["pid"] == $cate_two["id"] ): ?><li><?php echo ($cate_three["name"]); ?></li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                        </ul>
                                    </li><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </dd>
                        </dl><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                    <span style="display:none;" class="error" id="positionError">请选择职位名称 </span>
                    </dd>
                    </dl>
                    <dl>
                        <dt>
                        <h3>工作地点 <em></em><span>（必填）</span></h3>
                        </dt>
                        <dd>
                            <input type="hidden" value="" name="city" id="select_city_hidden">
                            <ul class="s_radio clearfix">
                                <li title="北京">北京</li>
                                <li title="上海">上海</li>
                                <li title="广州">广州</li>
                                <li title="深圳">深圳</li>
                                <li title="成都">成都</li>
                                <li title="杭州">杭州</li>
                            </ul>
                            <span style="display:none;" class="error" id="cityError">请选择工作地点 </span>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                        <h3>发展阶段 <em></em></h3>
                        </dt>
                        <dd>
                            <input type="hidden" value="" name="financeStage" id="select_stage_hidden">
                            <ul class="s_tips clearfix s_radio_sp">
                                <li title="初创型">初创型<span class="dn">刚成立或已获得天使投资</span></li>
                                <li title="成长型">成长型<span class="dn">已获得A轮/B轮/C轮融资</span></li>
                                <li title="成熟型">成熟型<span class="dn">有D轮及以上的融资</span></li>
                                <li title="上市公司">上市公司<span class="dn">上市公司</span></li>
                            </ul>
                            <span style="display:none;" class="error" id="stageError">请选择发展阶段 </span>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                        <h3>行业领域 <em></em></h3>
                        </dt>
                        <dd>
                            <input type="hidden" value="" name="industryField" id="select_industry_hidden">
                            <input type="button" value="请选择行业领域" id="select_industry" class="select">
                            <div class="dn" id="box_industry" style="display: none;">
                                <ul class="reset">
                                    <?php if(is_array($trade_data)): $i = 0; $__LIST__ = $trade_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$trade_one): $mod = ($i % 2 );++$i;?><li><?php echo ($trade_one["name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                                </ul>
                            </div>
                            <span style="display:none;" class="error" id="fieldError">请选择行业领域 </span>
                        </dd>
                    </dl>
                    <dl>
                        <dt>
                        <h3>月薪范围 <em></em></h3>
                        </dt>
                        <dd>
                            <input type="hidden" value="" name="salary" id="select_salary_hidden">
                            <input type="button" value="请选择月薪范围" id="select_salary" class="select">
                            <div class="dn" id="box_salary" style="display: none;">
                                <ul class="reset">
                                    <li>2k以下</li>
                                    <li>2k-5k</li>
                                    <li>5k-10k</li>
                                    <li>10k-15k</li>
                                    <li>15k-25k</li>
                                    <li>25k-50k</li>
                                    <li>50k以上</li>
                                </ul>
                            </div>
                            <!-- <div>
                             <input type="text" name="salaryMin" id="salary_low" placeholder="最低月薪" />
                             <span>k</span>
                         </div>
                            <div>
                             <input type="text" name="salaryMax" id="salary_high" placeholder="最高月薪" />
                             <span>k</span>
                         </div>
                         <span>请输入整数，如：4</span> -->
                            <span style="display:none;" class="error" id="salaryError">请选择月薪范围 </span>
                        </dd>
                    </dl>
                    <span style="display:none;" class="error" id="commonError">系统异常</span>
                    <input type="submit" value="保 存" id="subSubmit" class="btn_big">
                    <a class="btn_cancel" href="javascript:void(0)">取 消</a>
            </div>
            </form>
        </div>
        <div class="content_r">
            <div class="subscribe_side mb20 c5">
                <div class="why">我们为什么强烈推荐你</div>
                <h2>订阅</h2>
                <ul class="reset">
                    <li class="sub1">帮助你节省浏览和筛选时间，快速找到适合的职位信息。</li>
                    <li class="sub2">我们会严格按照你订阅的频次和条件给你发送邮件，并对你的个人信息绝对保密。</li>
                </ul>
            </div>
        </div>
    </div>
    <input type="hidden" id="userid" name="userid" value="314873">

    <!------------------------------------- 弹窗lightbox ----------------------------------------->
    <div style="display:none;">
        <!--
            登录帐号订阅成功
            1、已登录用户，且是自有用户，已验证，订阅职位<=1，提示订阅成功；接收邮箱默认为登录邮箱，可修改。
            2、已登录用户，但是第三方用户，订阅职位<=1，提示订阅成功；接收邮箱手动输入可修改。
            未登录帐号订阅成功
            未登录用户，但填写的邮箱为已注册、已验证邮箱，且订阅职位<=1，订阅成功，点击确定显示登录框
        -->
        <div class="popup" id="subscribeSuccessLogined">
            <h4>职位订阅成功！</h4>
            <p>我们将定期发送订阅邮件至：<a>888888888@qq.com</a>，请注意查收。</p>
            <table width="100%">
                <tbody>
                <tr>
                    <td align="center"><a class="btn_s" href="subscribe.html">确&nbsp;定</a></td>
                </tr>
                </tbody>
            </table>
        </div><!--/#subscribeSuccessLogined-->

        <!--
         未登录未注册帐号订阅成功
         提示注册框
     -->
        <div style="height:370px;" class="popup" id="subscribeSuccessRegister">
            <h4>职位订阅成功！</h4>
            <p>我们将定期发送订阅邮件至：<a><em></em></a>，请注意查收。</p>
            <hr>
            <p>现在只需设置密码就可成功注册拉勾，并可长期保存及管理订阅信息。</p>
            <form id="registerPopForm">
                <table width="100%">
                    <tbody>
                    <tr>
                        <td>注册邮箱 :</td>
                        <td><em></em></td>
                    </tr>
                    <tr>
                        <td valign="top">注册密码 :</td>
                        <td>
                            <input type="password" placeholder="请输入注册密码" id="psw" name="password"
                                   style="background-image: url(/Public/Home/images/img/a6y3y0Wx5kbFHvGuXzkgf0xhKnPzA4UTyaTB8Ph8AvcHi3fnsrZ7Wore02YViqVOrRXXPhfqP8j6MYlawoAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
                            <span id="beError_register" style="display:none;" class="error"></span>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <label for="checkbox" class="fl">
                                <input type="checkbox" class="checkbox valid" checked="" name="checkbox" id="checkbox">
                                我已阅读并同意<a target="_blank" href="http://www.lagou.com/privacy.html">《拉勾用户协议》</a>
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input type="submit" value="注 册" class="btn_s">
                        </td>
                    </tr>
                    </tbody>
                </table>
            </form>
        </div><!--/#subscribeSuccessRegister-->

        <!--
           未登录注册帐号订阅成功
           弹出框有登录按钮，提示登录
       -->
        <div class="popup" id="subscribeSuccessLogin">
            <h4>职位订阅成功！</h4>
            <p>我们将定期发送订阅邮件至：<a></a>，请注意查收。</p>
            <table width="100%">
                <tbody>
                <tr>
                    <td align="center"><a title="登录" class="btn inline cboxElement" href="#loginPop">登 录</a></td>
                </tr>
                </tbody>
            </table>
        </div><!--/#subscribeSuccessLogin-->

        <!-- 登录框 -->
        <div style="height:240px;" class="popup" id="loginPop">
            <form id="loginForm">
                <input type="text" placeholder="请输入登录邮箱地址" tabindex="1" name="email" id="email"
                       style="background-image: url(/Public/Home/images/img/0CQnd2Jos49xUAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
                <input type="password" placeholder="请输入密码" tabindex="2" name="password" id="password"
                       style="background-image: url(/Public/Home/images/img/0CQnd2Jos49xUAAAAASUVORK5CYII=quot); background-repeat: no-repeat; background-attachment: scroll; background-position: right center;">
                <span id="beError" style="display:none;" class="error"></span>
                <label for="remember" class="fl"><input type="checkbox" name="autoLogin" checked="checked" value=""
                                                        id="remember"> 记住我</label>
                <a target="_blank" class="fr" href="http://www.lagou.com/reset.html">忘记密码？</a>
                <input type="submit" value="登 &nbsp; &nbsp; 录" id="submitLogin">
            </form>
            <div class="login_right">
                <div>还没有拉勾帐号？</div>
                <a class="registor_now" href="http://www.lagou.com/register.html">立即注册</a>
                <div class="login_others">使用以下帐号直接登录:</div>
                <a title="使用新浪微博帐号登录" class="icon_wb" target="_blank"
                   href="http://www.lagou.com/ologin/auth/sina.html"></a>
                <a title="使用腾讯QQ帐号登录" target="_blank" class="icon_qq"
                   href="http://www.lagou.com/ologin/auth/qq.html"></a>
            </div>
        </div><!--/#loginPop-->

        <!--退订-->
        <div class="popup" id="cancelSub">
            <h4>确认要退订该订阅？</h4>
            <table width="100%">
                <tbody>
                <tr>
                    <td align="center"><p>点击确认后你将不再收到拉勾为你提供的精准职位推送。</p></td>
                </tr>
                <tr>
                    <td align="center">
                        <input type="button" value="确认退订" id="confirmCancel" class="btn_s">
                        <a class="btn_s" href="javascript:void(0)">取消</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </div><!--/#cancelSub-->
    </div>
    <!------------------------------------- end ----------------------------------------->

    <script src="/Public/Home/js/sub.min.js"></script>
    <!-- 退订 | 从邮箱进来订阅页  -->

    <!-- 订阅成功弹出注册框 | 从邮箱进来订阅页  -->

    <!-- 订阅成功弹出登录框 | 从邮箱进来订阅页  -->

    <!-- 从激活页点换个邮箱进入订阅页 -->
    <div class="clear"></div>
    <input type="hidden" value="37509432fb9e453a815da48821b7bf01" id="resubmitToken">
    <a rel="nofollow" title="回到顶部" id="backtop"></a>
</div><!-- end #container -->
</div><!-- end #body -->
<!--底部开始-->
	<div id="footer">
<div class="wrapper">
<a target="_blank" href="__MOUDLE__/About/index">联系我们</a>
<a target="_blank" href="h/af/zhaopin.html">互联网公司导航</a>
<a target="_blank" href="http://e.weibo.com/lagou720">拉勾微博</a>
<a href="javascript:void(0)" class="footer_qr">拉勾微信<i></i></a>
<div class="copyright">&copy;2013-2014 Lagou <a href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action" target="_blank">京ICP备14023790号-2</a></div>
</div>
</div>

<!--底部结束-->

<script src="/Public/Home/js/core.min.js" type="text/javascript"></script>
<script src="/Public/Home/js/popup.min.js" type="text/javascript"></script>

<!--  -->

<script type="text/javascript">
    $(function () {
        $('#noticeDot-1').hide();
        $('#noticeTip a.closeNT').click(function () {
            $(this).parent().hide();
        });
    });
    var index = Math.floor(Math.random() * 2);
    var ipArray = new Array('42.62.79.226', '42.62.79.227');
    var url = "ws://" + ipArray[index] + ":18080/wsServlet?code=314873";
    var CallCenter = {
        init: function (url) {
            var _websocket = new WebSocket(url);
            _websocket.onopen = function (evt) {
                console.log("Connected to WebSocket server.");
            };
            _websocket.onclose = function (evt) {
                console.log("Disconnected");
            };
            _websocket.onmessage = function (evt) {
                //alert(evt.data);
                var notice = jQuery.parseJSON(evt.data);
                if (notice.status[0] == 0) {
                    $('#noticeDot-0').hide();
                    $('#noticeTip').hide();
                    $('#noticeNo').text('').show().parent('a').attr('href', ctx + '/mycenter/delivery.html');
                    $('#noticeNoPage').text('').show().parent('a').attr('href', ctx + '/mycenter/delivery.html');
                } else {
                    $('#noticeDot-0').show();
                    $('#noticeTip strong').text(notice.status[0]);
                    $('#noticeTip').show();
                    $('#noticeNo').text('(' + notice.status[0] + ')').show().parent('a').attr('href', ctx + '/mycenter/delivery.html');
                    $('#noticeNoPage').text(' (' + notice.status[0] + ')').show().parent('a').attr('href', ctx + '/mycenter/delivery.html');
                }
                $('#noticeDot-1').hide();
            };
            _websocket.onerror = function (evt) {
                console.log('Error occured: ' + evt);
            };
        }
    };
    CallCenter.init(url);
</script>

<div id="cboxOverlay" style="display: none;"></div>
<div id="colorbox" class="" role="dialog" tabindex="-1" style="display: none;">
    <div id="cboxWrapper">
        <div>
            <div id="cboxTopLeft" style="float: left;"></div>
            <div id="cboxTopCenter" style="float: left;"></div>
            <div id="cboxTopRight" style="float: left;"></div>
        </div>
        <div style="clear: left;">
            <div id="cboxMiddleLeft" style="float: left;"></div>
            <div id="cboxContent" style="float: left;">
                <div id="cboxTitle" style="float: left;"></div>
                <div id="cboxCurrent" style="float: left;"></div>
                <button type="button" id="cboxPrevious"></button>
                <button type="button" id="cboxNext"></button>
                <button id="cboxSlideshow"></button>
                <div id="cboxLoadingOverlay" style="float: left;"></div>
                <div id="cboxLoadingGraphic" style="float: left;"></div>
            </div>
            <div id="cboxMiddleRight" style="float: left;"></div>
        </div>
        <div style="clear: left;">
            <div id="cboxBottomLeft" style="float: left;"></div>
            <div id="cboxBottomCenter" style="float: left;"></div>
            <div id="cboxBottomRight" style="float: left;"></div>
        </div>
    </div>
    <div style="position: absolute; width: 9999px; visibility: hidden; display: none;"></div>
</div>
</body>
</html>