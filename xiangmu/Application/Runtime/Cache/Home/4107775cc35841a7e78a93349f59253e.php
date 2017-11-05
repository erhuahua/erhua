<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
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
            <li ><a href="/Home/Company/create" rel="nofollow">发布职位</a></li>
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

    <!--<meta content="text/html; charset=gb2312">-->
    <script id="allmobilize" charset="utf-8" src="/Public/Home/js/allmobilize.min.js"></script>
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate" media="handheld"/>
    <!-- end 云适配 -->
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>公司列表</title>
    <meta property="qc:admins" content="23635710066417756375"/>
    <meta content="全国condition-condition-公司列表-拉勾网-最专业的互联网招聘平台" name="description">
    <meta content="全国condition-公司列表-拉勾网-最专业的互联网招聘平台" name="keywords">
    <meta name="baidu-site-verification" content="QIQ6KC1oZ6"/>

    <!-- <div class="web_root"  style="display:none">h</div> -->
    <script type="text/javascript">
        var ctx = "h";
        console.log(1);
    </script>
    <link rel="Shortcut Icon" href="h/images/favicon.ico">
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/external.min.css"/>
    <link rel="stylesheet" type="text/css" href="/Public/Home/css/popup.css"/>
    <script src="/Public/Home/js/jquery.1.10.1.min.js" type="text/javascript"></script>
    <script type="text/javascript" src="/Public/Home/js/jquery.lib.min.js"></script>
    <script src="/Public/Home/js/ajaxfileupload.js" type="text/javascript"></script>
    <script type="text/javascript" src="/Public/Home/js/additional-methods.js"></script>
    <!--[if lte IE 8]>
    <script type="text/javascript" src="/Public/Home/js/excanvas.js"></script>
    <![endif]-->
    <script type="text/javascript">
        var youdao_conv_id = 271546;
    </script>
    <script type="text/javascript" src="/Public/Home/js/conv.js"></script>
</head>
<body>
<div id="body">
    <!--<div id="header">-->
    <!--<div class="wrapper">-->
    <!--<a href="index.html" class="logo">-->
    <!--<img src="/Public/Home/images/logo.png" width="229" height="43" alt="拉勾招聘-专注互联网招聘" />-->
    <!--</a>-->
    <!--<ul class="reset" id="navheader">-->
    <!--<li ><a href="index.html">首页</a></li>-->
    <!--<li class="current"><a hrindex.htmlhtml" >公司</a></li>-->
    <!--<li ><a href="#" target="_blank">论坛</a></li>-->
    <!--<li ><a href="jianli.html" rel="nofollow">我的简历</a></li>-->
    <!--<li ><a href="create.html" rel="nofollow">发布职位</a></li>-->
    <!--</ul>-->
    <!--<ul class="loginTop">-->
    <!--<li><a href="login.html" rel="nofollow">登录</a></li> -->
    <!--<li>|</li>-->
    <!--<li><a href="register.html" rel="nofollow">注册</a></li>-->
    <!--</ul>-->
    <!--</div>-->
    <!--</div>-->
    <!-- end #header -->
    <div id="container">

        <div class="clearfix">
            <div class="content_l">
                <form id="companyListForm" name="companyListForm" method="get" action="h/c/companylist.html">
                    <input type="hidden" id="city" name="city" value="全国"/>
                    <!--<input type="hidden" id="fs" name="fs" value=""/>-->
                    <!--<input type="hidden" id="ifs" name="ifs" value=""/>-->
                    <!--<input type="hidden" id="ol" name="ol" value=""/>-->
                    <dl class="hc_tag">
                        <!--省份-->
                        <dt>
                            <!--  <h2 class="fl">热门公司</h2> -->



                        <ul class="workplace reset fr" id="workplaceSelect">
                            <li>
                                <a href="javascript:void(0)" class="current">全国</a>
                                |
                            </li>
                            <li>
                                <a href="javascript:void(0)">北京</a>
                                |
                            </li>
                            <li>
                                <a href="javascript:void(0)">上海</a>
                                |
                            </li>
                            <li>
                                <a href="javascript:void(0)">广州</a>
                                |
                            </li>
                            <li>
                                <a href="javascript:void(0)">深圳</a>
                                |
                            </li>
                            <li>
                                <a href="javascript:void(0)">成都</a>
                                |
                            </li>
                            <li>
                                <a href="javascript:void(0)">杭州</a>
                                |
                            </li>
                            <li>
                                <a href="javascript:void(0)">武汉</a>
                                |
                            </li>
                            <li>
                                <a href="javascript:void(0)">南京</a>
                                |
                            </li>
                            <li class="more">
                                <a href="javascript:void(0)">其他</a>
                                <div class="triangle citymore_arrow"></div>
                            </li>
                        <!--省份end-->

                            <li id="box_expectCity" class="searchlist_expectCity dn">
                                <span class="bot"></span>
                                <span class="top"></span>
                                <dl>
                                    <dt>ABCDEF</dt>
                                    <dd>
                                        <span>北京</span>
                                        <span>长春</span>
                                        <span>成都</span>
                                        <span>重庆</span>
                                        <span>长沙</span>
                                        <span>常州</span>
                                        <span>东莞</span>
                                        <span>大连</span>
                                        <span>佛山</span>
                                        <span>福州</span>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>GHIJ</dt>
                                    <dd>
                                        <span>贵阳</span>
                                        <span>广州</span>
                                        <span>哈尔滨</span>
                                        <span>合肥</span>
                                        <span>海口</span>
                                        <span>杭州</span>
                                        <span>惠州</span>
                                        <span>金华</span>
                                        <span>济南</span>
                                        <span>嘉兴</span>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>KLMN</dt>
                                    <dd>
                                        <span>昆明</span>
                                        <span>廊坊</span>
                                        <span>宁波</span>
                                        <span>南昌</span>
                                        <span>南京</span>
                                        <span>南宁</span>
                                        <span>南通</span>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>OPQR</dt>
                                    <dd>
                                        <span>青岛</span>
                                        <span>泉州</span>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>STUV</dt>
                                    <dd>
                                        <span>上海</span>
                                        <span>石家庄</span>
                                        <span>绍兴</span>
                                        <span>沈阳</span>
                                        <span>深圳</span>
                                        <span>苏州</span>
                                        <span>天津</span>
                                        <span>太原</span>
                                        <span>台州</span>
                                    </dd>
                                </dl>
                                <dl>
                                    <dt>WXYZ</dt>
                                    <dd>
                                        <span>武汉</span>
                                        <span>无锡</span>
                                        <span>温州</span>
                                        <span>西安</span>
                                        <span>厦门</span>
                                        <span>烟台</span>
                                        <span>珠海</span>
                                        <span>中山</span>
                                        <span>郑州</span>
                                    </dd>
                                </dl>
                            </li>
                        </ul>

                        </dt>

                        <!--发展阶段/行业领域-->
                        <dd>
                            <dl>
                                <dt>发展阶段：</dt>
                                <dd>
                                    <?php if(is_array($stage)): $i = 0; $__LIST__ = $stage;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tg): $mod = ($i % 2 );++$i; if( $tg["stage"] == 0 ): ?><a href="javascript:void(0)">
                                                初创型
                                            </a>
                                            <elseif condition=" $tg.stage eq 1 ">
                                                <a href="javascript:void(0)">
                                                    成长型
                                                </a>
                                                <elseif condition=" $tg.stage eq 2 ">
                                                    <a href="javascript:void(0)">
                                                        成熟型
                                                    </a>
                                                    <elseif condition=" $tg.stage eq 3 ">
                                                        <a href="javascript:void(0)">
                                                            已上市
                                                        </a>
                                                        <elseif condition=" $tg.stage eq 4 ">
                                                            <a href="javascript:void(0)">
                                                                跨国型
                                                            </a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                </dd>
                            </dl>
                            <dl>
                                <dt>行业领域：</dt>
                                <dd>
                                    <?php if(is_array($trade)): $i = 0; $__LIST__ = $trade;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$td): $mod = ($i % 2 );++$i;?><a href="javascript:void(0)"><?php echo ($td["name"]); ?></a><?php endforeach; endif; else: echo "" ;endif; ?>
                                </dd>
                            </dl>
                        </dd>
                        <!--发展阶段/行业领域end-->

                        <!-- <dl>
                            <dt>热门标签：</dt>
                            <dd>
                                                                                                                   <a href="javascript:void(0)">年底双薪</a>             </dd></dl> -->
                    </dl>


                    <ul class="hc_list reset">
                        <?php if(is_array($data)): $k = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($k % 2 );++$k;?><li
                            <?php if( $k == 0 ): ?>style="clear:both;"<?php endif; ?>
                            >

                        <a href="/Home/Company/showCompany/id/<?php echo ($vol["id"]); ?>" target="_blank">
                                <h3 title="<?php echo ($vol["short_name"]); ?>"><?php echo ($vol["short_name"]); ?></h3>
                                <div class="comLogo">
                                    <img src="<?php echo ($vol["logo"]); ?>" width="190"
                                         height="190" alt=""/>
                                    <ul>
                                        <li><?php echo ($vol["trade"]); ?></li>
                                        <li><?php echo ($vol["city"]); ?>，<?php echo ($vol["stage"]); ?>/上市/A轮/B轮</li>
                                    </ul>
                                </div>
                            </a>
                            <!--<a href="h/jobs/149014.html" target="_blank">这里展示招聘职位信息/<?php echo ($vol["desc"]); ?></a>-->
                            <a href="h/jobs/149014.html" target="_blank"><?php echo ($vol["name"]); ?></a>
                            <ul class="reset ctags">
                                <li>公司福利字段state/<?php echo ($vol["state"]); ?></li>
                            </ul>
                            </li><?php endforeach; endif; else: echo "" ;endif; ?>


                    </ul>


                    <div class="Pagination"></div>
                </form>
            </div>
            <div class="content_r">
                <div class="subscribe_side">
                    <a href="/Home/Company/auth" target="_blank">
                        <div class="subpos"><span>公司认证</span>入口</div>
                        <div class="c7">拉勾网会根据你的认证条件，<br>及时反馈认证进度与结果!
                        </div>
                        <div class="count">
                            已认证<em>2</em>
                            <em>3</em>
                            <em>5</em>
                            <em>8</em>
                            <em>8</em>
                            家公司
                        </div>
                        <i>我也要认证公司</i>
                    </a>
                </div>


                <div class="subscribe_side">
                    <a href="/Home/Sub/index" target="_blank">
                        <div class="subpos"><span>订阅</span> 职位</div>
                        <div class="c7">拉勾网会根据你的筛选条件，定期将符合你要求的职位信息发给你
                        </div>
                        <div class="count">已有
                            <em>3</em>
                            <em>4</em>
                            <em>2</em>
                            <em>1</em>
                            <em>0</em>
                            人订阅
                        </div>
                        <i>我也要订阅职位</i>
                    </a>
                </div>


                <div class="greybg qrcode mt20">
                    <img src="/Public/Home/images/companylist_qr.png" width="242" height="242" alt="拉勾微信公众号二维码"/>
                    <span class="c7">扫描拉勾二维码，微信轻松搜工作</span>
                </div>
                <!-- <a href="h/speed/speed3.html" target="_blank" class="adSpeed"></a> -->
                <a href="h/subject/jobguide.html" target="_blank" class="eventAd">
                    <img src="/Public/Home/images/subject280.jpg" width="280" height="135"/>
                </a>
                <a href="h/subject/risingPrice.html" target="_blank" class="eventAd">
                    <img src="/Public/Home/images/rising280.png" width="280" height="135"/>
                </a>
            </div>
        </div>

        <input type="hidden" value="" name="userid" id="userid"/>

        <script type="text/javascript" src="/Public/Home/js/company_list.min.js"></script>
        <script>
            $(function () {
                /*分页 */
                $('.Pagination').pager({
                    currPage: 1,
                    pageNOName: "pn",
                    form: "companyListForm",
                    pageCount: 20,
                    pageSize: 5
                });
            })
        </script>
        <div class="clear"></div>
        <input type="hidden" id="resubmitToken" value=""/>
        <a id="backtop" title="回到顶部" rel="nofollow"></a>
    </div><!-- end #container -->
</div><!-- end #body -->
<!--底部开始-->
<!--<div id="footer">-->
<!--<div class="wrapper">-->
<!--<a href="h/about.html" target="_blank" rel="nofollow">联系我们</a>-->
<!--<a href="h/af/zhaopin.html" target="_blank">互联网公司导航</a>-->
<!--<a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>-->
<!--<a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<i></i></a>-->
<!--<div class="copyright">&copy;2013-2014 Lagou <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">京ICP备14023790号-2</a></div>-->
<!--</div>-->
<!--</div>-->
<!--底部结束-->
<script type="text/javascript" src="/Public/Home/js/core.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/popup.min.js"></script>

<!--  -->

</body>
</html>