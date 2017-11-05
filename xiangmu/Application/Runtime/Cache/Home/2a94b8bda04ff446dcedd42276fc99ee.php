<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML>
<html xmlns:wb="http://open.weibo.com/wb">
<head>
    <script id="allmobilize" charset="utf-8" src="/Public/Home/js/allmobilize.min.js"></script>
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="alternate" media="handheld"  />
    <!-- end 云适配 -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>拉勾网-最专业的互联网招聘平台</title>
    <meta property="qc:admins" content="23635710066417756375" />
    <meta content="" name="description">
    <meta content="" name="keywords">
    <meta name="baidu-site-verification" content="QIQ6KC1oZ6" />

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
            <li><a href="User/logout/login" rel="nofollow">登录</a></li>
            <li>|</li>
            <li><a href="User/logout/register" rel="nofollow">注册</a></li>
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
                <dd class="logout"><a rel="nofollow" href="User/logout/login">退出</a></dd>
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

    <div id="sidebar">
        <div class="mainNavs">
            <?php if(is_array($cate_data)): $i = 0; $__LIST__ = $cate_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate_one): $mod = ($i % 2 );++$i; if( $cate_one["pid"] == 0 ): ?><div class="menu_box">
                <div class="menu_main">
                    <h2><?php echo ($cate_one["name"]); ?><span></span></h2>
                    <?php if(is_array($cate_data)): $i = 0; $__LIST__ = $cate_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate_ch): $mod = ($i % 2 );++$i; if( $cate_ch["pid"] == $cate_one["id"] ): ?><a href="h/jobs/list_Java?labelWords=label"><?php echo ($cate_ch["name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                </div>
                <div class="menu_sub dn">
                    <dl class="reset">
                    <?php if(is_array($cate_data)): $i = 0; $__LIST__ = $cate_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate_two): $mod = ($i % 2 );++$i; if( $cate_two["pid"] == $cate_one["id"] ): ?><dt>
                            <a href="h/jobs/list_后端开发?labelWords=label"><?php echo ($cate_two["name"]); ?></a>
                        </dt>
                        <dd>
                        <?php if(is_array($cate_data)): $i = 0; $__LIST__ = $cate_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$cate_three): $mod = ($i % 2 );++$i; if( $cate_three["pid"] == $cate_two["id"] ): ?><a href="h/jobs/list_C%2B%2B?labelWords=label" class="curr"><?php echo ($cate_three["name"]); ?></a><?php endif; endforeach; endif; else: echo "" ;endif; ?> 
                        </dd><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </dl>
                </div>
            </div><?php endif; endforeach; endif; else: echo "" ;endif; ?>
        </div>
        <a class="subscribe" href="subscribe.html" target="_blank">订阅职位</a>
    </div>
    <div class="content">
        <div id="search_box">
            <form id="searchForm" name="searchForm" action="list.html" method="get">
                <ul id="searchType">
                    <li data-searchtype="1" class="type_selected">职位</li>
                    <li data-searchtype="4">公司</li>
                </ul>
                <div class="searchtype_arrow"></div>
                <input type="text" id="search_input" name="kd" tabindex="1" value="" placeholder="请输入职位名称，如：产品经理"/>
                <input type="hidden" name="spc" id="spcInput" value=""/>
                <input type="hidden" name="pl" id="plInput" value=""/>
                <input type="hidden" name="gj" id="gjInput" value=""/>
                <input type="hidden" name="xl" id="xlInput" value=""/>
                <input type="hidden" name="yx" id="yxInput" value=""/>
                <input type="hidden" name="gx" id="gxInput" value=""/>
                <input type="hidden" name="st" id="stInput" value=""/>
                <input type="hidden" name="labelWords" id="labelWords" value=""/>
                <input type="hidden" name="lc" id="lc" value=""/>
                <input type="hidden" name="workAddress" id="workAddress" value=""/>
                <input type="hidden" name="city" id="cityInput" value=""/>
                <input type="submit" id="search_button" value="搜索"/>


            </form>
        </div>
        <style>
            .ui-autocomplete {
                width: 488px;
                background: #fafafa !important;
                position: relative;
                z-index: 10;
                border: 2px solid #91cebe;
            }

            .ui-autocomplete-category {
                font-size: 16px;
                color: #999;
                width: 50px;
                position: absolute;
                z-index: 11;
                right: 0px; /*top: 6px; */
                text-align: center;
                border-top: 1px dashed #e5e5e5;
                padding: 5px 0;
            }

            .ui-menu-item {
                *width: 439px;
                vertical-align: middle;
                position: relative;
                margin: 0px;
                margin-right: 50px !important;
                background: #fff;
                border-right: 1px dashed #ededed;
            }

            .ui-menu-item a {
                display: block;
                overflow: hidden;
            }
        </style>
        <script type="text/javascript" src="/Public/Home/js/search.min.js"></script>
        <dl class="hotSearch">
            <dt>热门搜索：</dt>
            <dd><a href="list.htmlJava?labelWords=label&city=">Java</a></dd>
            <dd><a href="list.htmlPHP?labelWords=label&city=">PHP</a></dd>
            <dd><a href="list.htmlAndroid?labelWords=label&city=">Android</a></dd>
            <dd><a href="list.htmliOS?labelWords=label&city=">iOS</a></dd>
            <dd><a href="list.html前端?labelWords=label&city=">前端</a></dd>
            <dd><a href="list.html产品经理?labelWords=label&city=">产品经理</a></dd>
            <dd><a href="list.htmlUI?labelWords=label&city=">UI</a></dd>
            <dd><a href="list.html运营?labelWords=label&city=">运营</a></dd>
            <dd><a href="list.htmlBD?labelWords=label&city=">BD</a></dd>
            <dd><a href="list.html?gx=实习&city=">实习</a></dd>
        </dl>
        <div id="home_banner">
            <ul class="banner_bg">
                <li class="banner_bg_1 current">
                    <a href="h/subject/s_buyfundation.html?utm_source=DH__lagou&utm_medium=banner&utm_campaign=haomai"
                       target="_blank"><img src="/Public/Home/images/d05a2cc6e6c94bdd80e074eb05e37ebd.jpg"
                                            width="612" height="160" alt="好买基金——来了就给100万"/></a>
                </li>
                <li class="banner_bg_2">
                    <a href="h/subject/s_worldcup.html?utm_source=DH__lagou&utm_medium=home&utm_campaign=wc"
                       target="_blank"><img src="/Public/Home/images/c9d8a0756d1442caa328adcf28a38857.jpg"
                                            width="612" height="160" alt="世界杯放假看球，老板我也要！"/></a>
                </li>
                <li class="banner_bg_3">
                    <a href="h/subject/s_xiamen.html?utm_source=DH__lagou&utm_medium=home&utm_campaign=xiamen"
                       target="_blank"><img src="/Public/Home/images/d03110162390422bb97cebc7fd2ab586.jpg"
                                            width="612" height="160" alt="出北京记——第一站厦门"/></a>
                </li>
            </ul>
            <div class="banner_control">
                <em></em>
                <ul class="thumbs">
                    <li class="thumbs_1 current">
                        <i></i>
                        <img src="/Public/Home/images/4469b1b83b1f46c7adec255c4b1e4802.jpg" width="113" height="42"/>
                    </li>
                    <li class="thumbs_2">
                        <i></i>
                        <img src="/Public/Home/images/381b343557774270a508206b3a725f39.jpg" width="113" height="42"/>
                    </li>
                    <li class="thumbs_3">
                        <i></i>
                        <img src="/Public/Home/images/354d445c5fd84f1990b91eb559677eb5.jpg" width="113" height="42"/>
                    </li>
                </ul>
            </div>
        </div><!--/#main_banner-->

        <ul id="da-thumbs" class="da-thumbs">
        <?php if(is_array($company_data)): $k = 0; $__LIST__ = $company_data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$company_one): $mod = ($k % 2 );++$k;?><li <?php if( $k == 6 ): ?>class="last"<?php endif; ?>>
                <a href="/Home/Company/showCompany/id/<?php echo ($company_one["id"]); ?>" target="_blank">
                    <img src="<?php echo ($company_one["logo"]); ?>" width="113" height="113"
                         alt="<?php echo ($company_one["short_name"]); ?>"/>
                    <div class="hot_info">
                        <h2 title="<?php echo ($company_one["short_name"]); ?>"><?php echo ($company_one["short_name"]); ?></h2>
                        <em></em>
                        <p title="<?php echo ($company_one["one_desc"]); ?>">
                            <?php echo ($company_one["one_desc"]); ?>
                        </p>
                    </div>
                </a>
            </li><?php endforeach; endif; else: echo "" ;endif; ?>
        </ul>

        <ul class="reset hotabbing">
            <li class="current">热门职位</li>
            <li>最新职位</li>
        </ul>
        <div id="hotList">
            <ul class="hot_pos reset">
                <?php if(is_array($msg_hot)): $k = 0; $__LIST__ = $msg_hot;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$hot_one): $mod = ($k % 2 );++$k;?><li class="clearfix <if condition=' $k%2 eq 0 '>old</id>">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/149389.html" target="_blank"><?php echo ($hot_one["jname"]); ?></a>
                            &nbsp;
                            <span class="c9">[<?php echo ($hot_one["city"]); ?>]</span>
                        </div>
                        <span><em class="c7">月薪： </em><?php echo ($hot_one["salary_low"]); ?>k-<?php echo ($hot_one["salary_high"]); ?>k</span>
                        <span><em class="c7">经验：</em><?php echo ($hot_one["work_year"]); ?></span>
                        <span><em class="c7">最低学历：</em> <?php echo ($hot_one["edu"]); ?></span>
                        <br/>
                        <span><em class="c7">职位诱惑：</em><?php echo ($hot_one["welfare"]); ?></span>
                        <br/>
                        <span><?php echo ($hot_one["create_time"]); ?>天前发布</span>
                        <!-- <a  class="wb">分享到微博</a> -->
                    </div>
                    <div class="hot_pos_r">
                        <div class="mb10"><a href="h/c/8250.html" target="_blank"><?php echo ($hot_one["cname"]); ?></a></div>
                        <span><em class="c7">领域：</em><?php echo ($hot_one["trade"]); ?></span>
                        <span><em class="c7">创始人：</em><?php echo ($hot_one["name"]); ?></span>
                        <br/>
                        <span> <em class="c7">阶段： </em><?php echo ($hot_one["stage"]); ?></span>
                        <span> <em class="c7">规模：</em><?php echo ($hot_one["scale"]); ?>人</span>
                        <ul class="companyTags reset">
                        <?php if(is_array($hot_one["tag"])): $i = 0; $__LIST__ = $hot_one["tag"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag_hot): $mod = ($i % 2 );++$i;?><li><?php echo ($tag_hot["name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="list.html" class="btn fr" target="_blank">查看更多</a>
            </ul>
            <ul class="hot_pos hot_posHotPosition reset" style="display:none;">
            <?php if(is_array($msg_new)): $k = 0; $__LIST__ = $msg_new;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$new_one): $mod = ($k % 2 );++$k;?><li class="clearfix <if condition=' $k%2 eq 0 '>old</id>">
                    <div class="hot_pos_l">
                        <div class="mb10">
                            <a href="h/jobs/149389.html" target="_blank"><?php echo ($new_one["jname"]); ?></a>
                            &nbsp;
                            <span class="c9">[<?php echo ($new_one["city"]); ?>]</span>
                        </div>
                        <span><em class="c7">月薪： </em><?php echo ($new_one["salary_low"]); ?>k-<?php echo ($new_one["salary_high"]); ?>k</span>
                        <span><em class="c7">经验：</em><?php echo ($new_one["work_year"]); ?></span>
                        <span><em class="c7">最低学历：</em> <?php echo ($new_one["edu"]); ?></span>
                        <br/>
                        <span><em class="c7">职位诱惑：</em><?php echo ($new_one["welfare"]); ?></span>
                        <br/>
                        <span><?php echo ($new_one["create_time"]); ?>天前发布</span>
                        <!-- <a  class="wb">分享到微博</a> -->
                    </div>
                    <div class="hot_pos_r">
                        <div class="mb10"><a href="h/c/8250.html" target="_blank"><?php echo ($new_one["cname"]); ?></a></div>
                        <span><em class="c7">领域：</em><?php echo ($new_one["trade"]); ?></span>
                        <span><em class="c7">创始人：</em><?php echo ($new_one["name"]); ?></span>
                        <br/>
                        <span> <em class="c7">阶段： </em><?php echo ($new_one["stage"]); ?></span>
                        <span> <em class="c7">规模：</em><?php echo ($new_one["scale"]); ?>人</span>
                        <ul class="companyTags reset">
                        <?php if(is_array($new_one["tag"])): $i = 0; $__LIST__ = $new_one["tag"];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$tag_one): $mod = ($i % 2 );++$i;?><li><?php echo ($tag_one["name"]); ?></li><?php endforeach; endif; else: echo "" ;endif; ?>
                        </ul>
                    </div>
                </li><?php endforeach; endif; else: echo "" ;endif; ?>
                <a href="list.html?city=%E5%85%A8%E5%9B%BD" class="btn fr" target="_blank">查看更多</a>
            </ul>
        </div>

        <div class="clear"></div>
        <div id="linkbox">
            <dl>
                <dt>友情链接</dt>
                <dd>
                    <a href="http://www.zhuqu.com/" target="_blank">住趣家居网</a> <span>|</span>
                    <a href="http://www.woshipm.com/" target="_blank">人人都是产品经理</a> <span>|</span>
                    <a href="http://zaodula.com/" target="_blank">互联网er的早读课</a> <span>|</span>
                    <a href="http://lieyunwang.com/" target="_blank">猎云网< /a> <span>|</span>
                    <a href="http://www.ucloud.cn/" target="_blank">UCloud</a> <span>|</span>
                    <a href="http://www.iconfans.com/" target="_blank">iconfans</a> <span>|</span>
                    <a href="http://www.html5dw.com/" target="_blank">html5梦工厂</a> <span>|</span>
                    <a href="http://www.sykong.com/" target="_blank">手游那点事</a>

                    <a href="http://www.mycodes.net/" target="_blank">源码之家</a> <span>|</span>
                    <a href="http://www.uehtml.com/" target="_blank">uehtml</a> <span>|</span>
                    <a href="http://www.w3cplus.com/" target="_blank">W3CPlus</a> <span>|</span>
                    <a href="http://www.boxui.com/" target="_blank">盒子UI</a> <span>|</span>
                    <a href="http://www.uimaker.com/" target="_blank">uimaker</a> <span>|</span>
                    <a href="http://www.yixieshi.com/" target="_blank">互联网的一些事</a> <span>|</span>
                    <a href="http://www.chuanke.com/" target="_blank">传课网</a> <span>|</span>
                    <a href="http://www.eoe.cn/" target="_blank">安卓开发</a> <span>|</span>
                    <a href="http://www.eoeandroid.com/" target="_blank">安卓开发论坛</a>
                    <a href="http://hao.360.cn/" target="_blank">360安全网址导航</a> <span>|</span>
                    <a href="http://se.360.cn/" target="_blank">360安全浏览器</a> <span>|</span>
                    <a href="http://www.hao123.com/" target="_blank">hao123上网导航</a> <span>|</span>
                    <a href="http://www.ycpai.com" target="_blank">互联网创业</a><span>|</span>
                    <a href="http://www.zhongchou.cn" target="_blank">众筹网</a><span>|</span>
                    <a href="http://www.marklol.com/" target="_blank">马克互联网</a><span>|</span>
                    <a href="http://www.chaohuhr.com/" target="_blank">巢湖英才网</a>

                    <a href="http://www.zhubajie.com/" target="_blank">创意服务外包</a><span>|</span>
                    <a href="http://www.thinkphp.cn/" target="_blank">thinkphp</a><span>|</span>
                    <a href="http://www.chuangxinpai.com/" target="_blank">创新派</a><span>|</span>

                    <a href="http://w3cshare.com/" target="_blank">W3Cshare</a><span>|</span>
                    <a href="http://www.518lunwen.cn/" target="_blank">论文发表网</a><span>|</span>
                    <a href="http://www.199it.com" target="_blank">199it</a><span>|</span>

                    <a href="http://www.shichangbu.com" target="_blank">市场部网</a><span>|</span>
                    <a href="http://www.meitu.com/" target="_blank">美图公司</a><span>|</span>
                    <a href="https://www.teambition.com/" target="_blank">Teambition</a>
                    <a href="http://oupeng.com/" target="_blank">欧朋浏览器</a><span>|</span>
                    <a href="http://iwebad.com/" target="_blank">网络广告人社区</a>
                    <a href="h/af/flink.html" target="_blank" class="more">更多</a>
                </dd>
            </dl>
        </div>
    </div>
    <input type="hidden" value="" name="userid" id="userid"/>
    <!-- <div id="qrSide"><a></a></div> -->
    <!--  -->

    <!-- <div id="loginToolBar">
        <div>
            <em></em>
            <img src="/Public/Home/images/footbar_logo.png" width="138" height="45" />
            <span class="companycount"></span>
            <span class="positioncount"></span>
            <a href="#loginPop" class="bar_login inline" title="登录"><i></i></a>
            <div class="right">
                <a href="register.html?from=index_footerbar" onclick="_hmt.push(['_trackEvent', 'button', 'click', 'register'])" class="bar_register" id="bar_register" target="_blank"><i></i></a>
            </div>
            <input type="hidden" id="cc" value="16002" />
            <input type="hidden" id="cp" value="96531" />
        </div>
    </div>
     -->
    <!-------------------------------------弹窗lightbox  ----------------------------------------->
    <div style="display:none;">
        <!-- 登录框 -->
        <div id="loginPop" class="popup" style="height:240px;">
            <form id="loginForm">
                <input type="text" id="email" name="email" tabindex="1" placeholder="请输入登录邮箱地址"/>
                <input type="password" id="password" name="password" tabindex="2" placeholder="请输入密码"/>
                <span class="error" style="display:none;" id="beError"></span>
                <label class="fl" for="remember"><input type="checkbox" id="remember" value="" checked="checked"
                                                        name="autoLogin"/> 记住我</label>
                <a href="h/reset.html" class="fr">忘记密码？</a>
                <input type="submit" id="submitLogin" value="登 &nbsp; &nbsp; 录"/>
            </form>
            <div class="login_right">
                <div>还没有拉勾帐号？</div>
                <a href="register.html" class="registor_now">立即注册</a>
                <div class="login_others">使用以下帐号直接登录:</div>
                <a href="h/ologin/auth/sina.html" target="_blank" id="icon_wb" class="icon_wb" title="使用新浪微博帐号登录"></a>
                <a href="h/ologin/auth/qq.html" class="icon_qq" id="icon_qq" target="_blank" title="使用腾讯QQ帐号登录"></a>
            </div>
        </div><!--/#loginPop-->
    </div>
    <!------------------------------------- end ----------------------------------------->
    <script type="text/javascript" src="/Public/Home/js/Chart.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/home.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/count.js"></script>
    <div class="clear"></div>
    <input type="hidden" id="resubmitToken" value=""/>
    <a id="backtop" title="回到顶部" rel="nofollow"></a>
</div><!-- end #container -->
</div><!-- end #body -->
<div id="footer">
    <div class="wrapper">
        <a href="h/about.html" target="_blank" rel="nofollow">联系我们</a>
        <a href="h/af/zhaopin.html" target="_blank">互联网公司导航</a>
        <a href="http://e.weibo.com/lagou720" target="_blank" rel="nofollow">拉勾微博</a>
        <a class="footer_qr" href="javascript:void(0)" rel="nofollow">拉勾微信<i></i></a>
        <div class="copyright">&copy;2013-2014 Lagou <a target="_blank" href="http://www.miitbeian.gov.cn/state/outPortal/loginPortal.action">京ICP备14023790号-2</a></div>
    </div>
</div>

<script type="text/javascript" src="/Public/Home/js/core.min.js"></script>
<script type="text/javascript" src="/Public/Home/js/popup.min.js"></script>

<!-- <script src="/Public/Home/js/wb.js" type="text/javascript" charset="utf-8"></script>
 -->

</body>
</html>