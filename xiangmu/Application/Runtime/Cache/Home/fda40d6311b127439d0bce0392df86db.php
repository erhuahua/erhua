<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE HTML>
<html>
<head>
    <script type="text/javascript" async="" src="/Public/Home/js/conversion.js"></script>
    <script src="/Public/Home/js/allmobilize.min.js" charset="utf-8" id="allmobilize"></script>
    <meta content="no-siteapp" http-equiv="Cache-Control">
    <link media="handheld" rel="alternate">
    <!-- end 云适配 -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>我的简历-拉勾网-最专业的互联网招聘平台</title>
    <meta content="23635710066417756375" property="qc:admins">
    <meta name="description" content="拉勾网是3W旗下的互联网领域垂直招聘网站,互联网职业机会尽在拉勾网">
    <meta name="keywords" content="拉勾,拉勾网,拉勾招聘,拉钩, 拉钩网 ,互联网招聘,拉勾互联网招聘, 移动互联网招聘, 垂直互联网招聘, 微信招聘, 微博招聘, 拉勾官网, 拉勾百科,跳槽, 高薪职位, 互联网圈子, IT招聘, 职场招聘, 猎头招聘,O2O招聘, LBS招聘, 社交招聘, 校园招聘, 校招,社会招聘,社招">
    <meta content="QIQ6KC1oZ6" name="baidu-site-verification">
    <link href="h/images/favicon.ico" rel="Shortcut Icon">
    <link type="text/css" rel="stylesheet" href="/Public/Home/css/style.css" >
    <link type="text/css" rel="stylesheet" href="/Public/Home/css/external.min.css" >
    <link type="text/css" rel="stylesheet" href="/Public/Home/css/popup.css" >
    <script type="text/javascript" src="/Public/Home/js/jquery.1.10.1.min.js"></script>
    <script type="text/javascript" src="/Public/Home/js/jquery.lib.min.js" ></script>
    <script type="text/javascript" src="/Public/Home/js/ajaxfileupload.js"></script>
    <script type="text/javascript" src="/Public/Home/js/additional-methods.js" ></script>
    <!--[if lte IE 8]>
    <script type="text/javascript" src="/Public/Home/js/excanvas.js"></script>
    <![endif]-->
    <script type="text/javascript">var youdao_conv_id = 271546;</script>
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
    <!-- end #header -->
    <div id="container">

        <div class="clearfix" >
            <div class="content_l">
                <div class="fl" id="resume_name">
                    <div class="nameShow fl">
                        <h1 id="h1title" title="<?php echo ($resume_data["name"]); ?>的简历"><?php echo ($resume_data["name"]); ?>的简历</h1>
                        <span class="rename">重命名</span> | <a target="_blank" href="/Home/Resume/preview">预览</a>
                    </div>
                    <form class="fl dn" id="resumeNameForm" action="">
                        <input type="text" value="<?php echo ($resume_data["name"]); ?>" name="resumeName" class="nameEdit c9">
                        <input type="submit" id="resumeNameFormss" value="保存"> | <a target="_blank" href="/Home/Resume/preview">预览</a>
                    </form>
                </div><!--end #resume_name-->
                <div class="fr c5" id="lastChangedTime">
                    最后一次更新：<span><?php echo (date('Y-m-d H:i:s',$resume_data["modify_time "])); ?></span></div>
                <!--end #lastChangedTime-->
                <div id="resumeScore">
                    <div class="score fl">
                        <canvas height="120" width="120" id="doughnutChartCanvas" style="width: 120px; height: 120px;"></canvas>
                        <div style="" class="scoreVal"><span>15</span>分</div>
                    </div>

                    <div class="which fl">
                        <div>工作经历最能体现自己的工作能力，且完善后才可投递简历哦！</div>
                        <span rel="workExperience"><a>马上去完善</a></span>
                    </div>
                </div><!--end #resumeScore-->

                <div class="profile_box" id="basicInfo">
                    <h2>基本信息</h2>
                    <span class="c_edit"></span>
                    <div class="basicShow">
                        <span><?php echo ($resume_data["name"]); ?> |  <?php if( $resume_data["sex"] == 1 ): ?>男<?php else: ?>女<?php endif; ?> |    <?php echo ($resume_data["education"]); ?> |  <?php echo ($resume_data["work_year"]); ?>工作经验<br>
                            <?php echo ($resume_data["phone"]); ?> | <?php echo ($resume_data["email"]); ?><br>
            			</span>
                        <div class="m_portrait">
                            <div></div>
                            <img width="120" height="120" alt="jason" src="/Public/Home/images/<?php echo ($resume_data["image"]); ?>">
                        </div>
                    </div><!--end .basicShow-->

                    <div class="basicEdit dn">
                        <form id="profileForm" method="post" action="/Home/Resume/basicEdit" onsubmit="return $.sub(this)">
                            <table>
                                <tbody>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="hidden" placeholder="" id="name">
                                        <input type="text" placeholder="姓名" value="<?php echo ($resume_data["name"]); ?>" name="name" id="name">
                                    </td>
                                    <td valign="top"></td>
                                    <td>
                                        <ul class="profile_radio clearfix reset">
                                            <li class="current">
                                                男<em></em>
                                                <input type="radio" <?php if( $resume_data["sex"] == 1 ): ?>checked="checked"<?php endif; ?> name="gender" value="1">
                                            </li>
                                            <li>
                                                女<em></em>
                                                <input type="radio" <?php if( $resume_data["sex"] == 0 ): ?>checked="checked"<?php endif; ?> name="gender" value="0">
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="hidden" id="topDegree" value="<?php echo ($resume_data["education"]); ?>" name="topDegree">
                                        <input type="button" value="<?php echo ($resuem_data["education"]); ?>" id="select_topDegree" class="profile_select_190 profile_select_normal">
                                        <div class="boxUpDown boxUpDown_190 dn" id="box_topDegree" style="display: none;">
                                            <ul>
                                                <li>大专</li>
                                                <li>本科</li>
                                                <li>硕士</li>
                                                <li>博士</li>
                                                <li>其他</li>
                                            </ul>
                                        </div>
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="hidden" id="workyear" value="<?php echo ($resume_data["work_year"]); ?>" name="workyear">
                                        <input type="button" value="<?php echo ($resume_data["work_year"]); ?>" id="select_workyear" class="profile_select_190 profile_select_normal">
                                        <div class="boxUpDown boxUpDown_190 dn" id="box_workyear" style="display: none;">
                                            <ul>
                                                <li>应届毕业生</li>
                                                <li>1年</li>
                                                <li>2年</li>
                                                <li>3年</li>
                                                <li>4年</li>
                                                <li>5年</li>
                                                <li>6年</li>
                                                <li>7年</li>
                                                <li>8年</li>
                                                <li>9年</li>
                                                <li>10年</li>
                                                <li>10年以上</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td colspan="3">
                                        <input type="hidden" placeholder="手机号码" value="" id="tel">
                                        <input type="text" placeholder="手机号码" value="<?php echo ($resume_data["phone"]); ?>" name="tel" id="tel">
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td colspan="3">
                                        <input type="text" placeholder="接收面试通知的邮箱" value="<?php echo ($resume_data["email"]); ?>" name="email" id="email">
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top"></td>
                                    <td colspan="3">
                                        <input type="hidden" id="currentState" value="<?php echo ($resume_data["now_state"]); ?>" name="currentState">
                                        <input type="button" value="目前状态" id="select_currentState" class="profile_select_410 profile_select_normal">
                                        <div class="boxUpDown boxUpDown_410 dn" id="box_currentState" style="display: none;">
                                            <ul>
                                                <li>我目前已离职，可快速到岗</li>
                                                <li>我目前正在职，正考虑换个新环境</li>
                                                <li>我暂时不想找工作</li>
                                                <li>我是应届毕业生</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="3">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form><!--end #profileForm-->
                        <div class="new_portrait">
                            <div class="portrait_upload" id="portraitNo">
                                <span>上传自己的头像</span>
                            </div>
                            <div class="portraitShow dn" id="portraitShow">
                                <img width="120" height="120" src="">
                                <span>更换头像</span>
                            </div>
                            <input type="file" value="" title="支持jpg、jpeg、gif、png格式，文件小于5M"
                                   onchange="img_check(this,'h/resume/uploadPhoto.json','headPic');" name="headPic"
                                   id="headPic" class="myfiles">
                            <!-- <input type="hidden" id="headPicHidden" /> -->
                            <em>
                                尺寸：120*120px <br>
                                大小：小于5M
                            </em>
                            <span style="display:none;" id="headPic_error" class="error"></span>
                        </div><!--end .new_portrait-->
                    </div><!--end .basicEdit-->
                    <input type="hidden" id="nameVal"  value="<?php echo ($resume_data["name"]); ?>">
                    <input type="hidden" id="genderVal" value="<?php if( $resume_data["sex"] == 1): ?>男<?php elseif( $resume_data["sex"] == 0 ): ?>女<?php endif; ?>">
                    <input type="hidden" id="topDegreeVal"  value="<?php echo ($resume_data["education"]); ?>">
                    <input type="hidden" id="workyearVal"  value="<?php echo ($resume_data["work_year"]); ?>">
                    <input type="hidden" id="currentStateVal"  value="<?php echo ($resume_data["now_state"]); ?>">
                    <input type="hidden" id="emailVal"  value="<?php echo ($resume_data["email"]); ?>">
                    <input type="hidden" id="telVal"  value="<?php echo ($resume_data["phone"]); ?>">
                    <input type="hidden" id="pageType"  value="1">
                </div><!--end #basicInfo-->

                <div class="profile_box" id="expectJob">
                    <h2>期望工作</h2>
                    <span class="c_edit <?php if( $hopejob_data == false ): ?>dn<?php endif; ?>"></span>
                    <div class="expectShow <?php if( $hopejob_data == false ): ?>dn<?php endif; ?> ">
                        <span><?php echo ($hopejob_data["city"]); ?> | <?php echo ($hopejob_data["nature"]); ?> | <?php echo ($hopejob_data["job"]); ?> | <?php echo ($hopejob_data["salary"]); ?></span>
                    </div><!--end .expectShow-->
                    <div class="expectEdit dn">
                        <form id="expectForm" action="/Home/Resume/expectEdit" method="post">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <input type="hidden" id="expectCity" value="<?php echo ($hopejob_data["city"]); ?>" name="expectCity">
                                        <input type="button"  placeholder="期望城市，如：北京" value="<?php echo ($hopejob_data["city"]); ?>" id="select_expectCity" class="profile_select_287 profile_select_normal"  >
                                        <div class="boxUpDown boxUpDown_596 dn" id="box_expectCity"
                                             style="display: none;">
                                            <dl>
                                                <dt>热门城市</dt>
                                                <dd>
                                                    <span>北京</span>
                                                    <span>上海</span>
                                                    <span>广州</span>
                                                    <span>深圳</span>
                                                    <span>成都</span>
                                                    <span>杭州</span>
                                                </dd>
                                            </dl>
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
                                        </div>
                                    </td>
                                    <td>
                                        <ul class="profile_radio clearfix reset">
                                            <li class="current">
                                                全职<em></em>
                                                <input type="radio" <?php if( $hopejob_data["nature"] == '全职' ): ?>checked="checked"<?php endif; ?> name="type" value="全职">
                                            </li>
                                            <li>
                                                兼职<em></em>
                                                <input type="radio" <?php if( $hopejob_data["nature"] == '兼职' ): ?>checked="checked"<?php endif; ?> name="type" value="兼职">
                                            </li>
                                            <li>
                                                实习<em></em>
                                                <input type="radio" <?php if( $hopejob_data["nature"] == '实习' ): ?>checked="checked"<?php endif; ?> name="type" value="实习">
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="text" placeholder="期望职位，如：产品经理" value="<?php echo ($hopejob_data["job"]); ?>" name="expectPosition"
                                               id="expectPosition">
                                    </td>
                                    <td>
                                        <input type="hidden" id="expectSalary" value="<?php echo ($hopejob_data["salary"]); ?>" name="expectSalary">
                                        <input type="button" value="<?php echo ($hopejob_data["salary"]); ?>" id="select_expectSalary" placeholder="期望月薪" class="profile_select_287 profile_select_normal">
                                        <div class="boxUpDown boxUpDown_287 dn" id="box_expectSalary"
                                             style="display: none;">
                                            <ul>
                                                <li>2k以下</li>
                                                <li>2k-5k</li>
                                                <li>5k-10k</li>
                                                <li>10k-15k</li>
                                                <li>15k-25k</li>
                                                <li>25k-50k</li>
                                                <li>50k以上</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form><!--end #expectForm-->
                    </div><!--end .expectEdit-->
                    <div class="expectAdd pAdd <?php if( $hopejob_data != false ): ?>dn<?php endif; ?>">
                        填写准确的期望工作能大大提高求职成功率哦…<br>
                        快来添加期望工作吧！
                        <span>添加期望工作</span>
                    </div><!--end .expectAdd-->

                    <input type="hidden" id="expectJobVal" value="<?php echo ($hopojob_data["job"]); ?>">
                    <input type="hidden" id="expectCityVal" value="<?php echo ($hopejob_data["city"]); ?>">
                    <input type="hidden" id="typeVal" value="<?php echo ($hopejob_data["nature"]); ?>">
                    <input type="hidden" id="expectPositionVal" value="<?php echo ($hopejob_data["job"]); ?>">
                    <input type="hidden" id="expectSalaryVal" value="<?php echo ($hopejob_data["salary"]); ?>">
                </div><!--end #expectJob-->

                <div class="profile_box" id="workExperience">
                    <h2>工作经历 <span> （投递简历时必填）</span></h2>
                    <span class="c_edit "></span>
                    <div class="experienceShow ">
                        <form class="experienceForm borderBtm dn">
                            <table>
                                <tbody>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="公司名称" name="companyName" class="companyName" value="<?php echo ($experience_data["company"]); ?>">
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="职位名称，如：产品经理" name="positionName" class="positionName" value="<?php echo ($experience_data["job"]); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <div class="fl">
                                            <input type="hidden" class="companyYearStart" value="<?php echo ($experience_data["begin_yeartime"]); ?>" name="companyYearStart">
                                            <input type="button" value="<?php echo ($experience_data["begin_yeartime"]); ?>" placeholder="开始年份" class="profile_select_139 profile_select_normal select_companyYearStart">
                                            <div class="box_companyYearStart boxUpDown boxUpDown_139 dn" style="display: none;">
                                                <ul>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                    <li>2009</li>
                                                    <li>2008</li>
                                                    <li>2007</li>
                                                    <li>2006</li>
                                                    <li>2005</li>
                                                    <li>2004</li>
                                                    <li>2003</li>
                                                    <li>2002</li>
                                                    <li>2001</li>
                                                    <li>2000</li>
                                                    <li>1999</li>
                                                    <li>1998</li>
                                                    <li>1997</li>
                                                    <li>1996</li>
                                                    <li>1995</li>
                                                    <li>1994</li>
                                                    <li>1993</li>
                                                    <li>1992</li>
                                                    <li>1991</li>
                                                    <li>1990</li>
                                                    <li>1989</li>
                                                    <li>1988</li>
                                                    <li>1987</li>
                                                    <li>1986</li>
                                                    <li>1985</li>
                                                    <li>1984</li>
                                                    <li>1983</li>
                                                    <li>1982</li>
                                                    <li>1981</li>
                                                    <li>1980</li>
                                                    <li>1979</li>
                                                    <li>1978</li>
                                                    <li>1977</li>
                                                    <li>1976</li>
                                                    <li>1975</li>
                                                    <li>1974</li>
                                                    <li>1973</li>
                                                    <li>1972</li>
                                                    <li>1971</li>
                                                    <li>1970</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="fl">
                                            <input type="hidden" class="companyMonthStart" value="<?php echo ($experience_data["begin_monthtime"]); ?>" name="companyMonthStart">
                                            <input type="button" placeholder="开始月份" value="<?php echo ($experience_data["begin_monthtime"]); ?>" class="profile_select_139 profile_select_normal select_companyMonthStart">
                                            <div style="display: none;" class="box_companyMonthStart boxUpDown boxUpDown_139 dn">
                                                <ul>
                                                    <li>01</li>
                                                    <li>02</li>
                                                    <li>03</li>
                                                    <li>04</li>
                                                    <li>05</li>
                                                    <li>06</li>
                                                    <li>07</li>
                                                    <li>08</li>
                                                    <li>09</li>
                                                    <li>10</li>
                                                    <li>11</li>
                                                    <li>12</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <div class="fl">
                                            <input type="hidden" class="companyYearEnd" value="<?php echo ($experience_data["end_yeartime"]); ?>" name="companyYearEnd">
                                            <input type="button" placeholder="结束年份" value="<?php echo ($experience_data["end_yeartime"]); ?>" class="profile_select_139 profile_select_normal select_companyYearEnd">
                                            <div class="box_companyYearEnd  boxUpDown boxUpDown_139 dn" style="display: none;">
                                                <ul>
                                                    <li>至今</li>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                    <li>2009</li>
                                                    <li>2008</li>
                                                    <li>2007</li>
                                                    <li>2006</li>
                                                    <li>2005</li>
                                                    <li>2004</li>
                                                    <li>2003</li>
                                                    <li>2002</li>
                                                    <li>2001</li>
                                                    <li>2000</li>
                                                    <li>1999</li>
                                                    <li>1998</li>
                                                    <li>1997</li>
                                                    <li>1996</li>
                                                    <li>1995</li>
                                                    <li>1994</li>
                                                    <li>1993</li>
                                                    <li>1992</li>
                                                    <li>1991</li>
                                                    <li>1990</li>
                                                    <li>1989</li>
                                                    <li>1988</li>
                                                    <li>1987</li>
                                                    <li>1986</li>
                                                    <li>1985</li>
                                                    <li>1984</li>
                                                    <li>1983</li>
                                                    <li>1982</li>
                                                    <li>1981</li>
                                                    <li>1980</li>
                                                    <li>1979</li>
                                                    <li>1978</li>
                                                    <li>1977</li>
                                                    <li>1976</li>
                                                    <li>1975</li>
                                                    <li>1974</li>
                                                    <li>1973</li>
                                                    <li>1972</li>
                                                    <li>1971</li>
                                                    <li>1970</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="fl">
                                            <input type="hidden" class="companyMonthEnd" value="<?php echo ($experience_data["end_monthtime"]); ?>" name="companyMonthEnd">
                                            <input type="button" placeholder="结束月份" value="<?php echo ($experience_data["end_monthtime"]); ?>" class="profile_select_139 profile_select_normal select_companyMonthEnd">
                                            <div style="display: none;" class="box_companyMonthEnd boxUpDown boxUpDown_139 dn">
                                                <ul>
                                                    <li>01</li>
                                                    <li>02</li>
                                                    <li>03</li>
                                                    <li>04</li>
                                                    <li>05</li>
                                                    <li>06</li>
                                                    <li>07</li>
                                                    <li>08</li>
                                                    <li>09</li>
                                                    <li>10</li>
                                                    <li>11</li>
                                                    <li>12</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="3">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <input type="hidden" class="expId" value="<?php echo ($experience_data["id"]); ?>">
                        </form><!--end .experienceForm-->

                        <ul class="wlist clearfix">
                            <li>公司名称：<?php echo ($experience_data["company"]); ?></li>
                            <li>职位名称：<?php echo ($experience_data["job"]); ?></li>
                            <li>起止时间：<?php echo ($experience_data["begin_yeartime"]); ?>.<?php echo ($experience_data["begin_monthtime"]); ?>-<?php echo ($experience_data["end_yeartime"]); if( $experience_data["end_yeartime"] != '至今' ): ?>.<?php echo ($experience_data["end_monthtime"]); endif; ?></li>
                        </ul>
                    </div><!--end .experienceShow-->
                    <div class="experienceEdit dn">
                        <form class="experienceForm">
                            <table>
                                <tbody>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="公司名称" name="companyName" class="companyName" value="<?php echo ($experience_data["company"]); ?>">
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="职位名称，如：产品经理" name="positionName" class="positionName" value="<?php echo ($experience_data["job"]); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <div class="fl">
                                            <input type="hidden" class="companyYearStart" value="<?php echo ($experience_data["begin_yeartime"]); ?>" name="companyYearStart">
                                            <input type="button" placeholder="开始年份"  value="<?php echo ($experience_data["begin_yeartime"]); ?>" class="profile_select_139 profile_select_normal select_companyYearStart">
                                            <div class="box_companyYearStart boxUpDown boxUpDown_139 dn" style="display: none;">
                                                <ul>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                    <li>2009</li>
                                                    <li>2008</li>
                                                    <li>2007</li>
                                                    <li>2006</li>
                                                    <li>2005</li>
                                                    <li>2004</li>
                                                    <li>2003</li>
                                                    <li>2002</li>
                                                    <li>2001</li>
                                                    <li>2000</li>
                                                    <li>1999</li>
                                                    <li>1998</li>
                                                    <li>1997</li>
                                                    <li>1996</li>
                                                    <li>1995</li>
                                                    <li>1994</li>
                                                    <li>1993</li>
                                                    <li>1992</li>
                                                    <li>1991</li>
                                                    <li>1990</li>
                                                    <li>1989</li>
                                                    <li>1988</li>
                                                    <li>1987</li>
                                                    <li>1986</li>
                                                    <li>1985</li>
                                                    <li>1984</li>
                                                    <li>1983</li>
                                                    <li>1982</li>
                                                    <li>1981</li>
                                                    <li>1980</li>
                                                    <li>1979</li>
                                                    <li>1978</li>
                                                    <li>1977</li>
                                                    <li>1976</li>
                                                    <li>1975</li>
                                                    <li>1974</li>
                                                    <li>1973</li>
                                                    <li>1972</li>
                                                    <li>1971</li>
                                                    <li>1970</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="fl">
                                            <input type="hidden" class="companyMonthStart" value="<?php echo ($experience_data["begin_monthtime"]); ?>" name="companyMonthStart">
                                            <input type="button" placeholder="开始月份" value="<?php echo ($experience_data["begin_monthtime"]); ?>" class="profile_select_139 profile_select_normal select_companyMonthStart">
                                            <div style="display: none;" class="box_companyMonthStart boxUpDown boxUpDown_139 dn">
                                                <ul>
                                                    <li>01</li>
                                                    <li>02</li>
                                                    <li>03</li>
                                                    <li>04</li>
                                                    <li>05</li>
                                                    <li>06</li>
                                                    <li>07</li>
                                                    <li>08</li>
                                                    <li>09</li>
                                                    <li>10</li>
                                                    <li>11</li>
                                                    <li>12</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <div class="fl">
                                            <input type="hidden" class="companyYearEnd" value="<?php echo ($experience_data["end_yeartime"]); ?>" name="companyYearEnd">
                                            <input type="button" placeholder="结束年份" value="<?php echo ($experience_data["end_yeartime"]); ?>" class="profile_select_139 profile_select_normal select_companyYearEnd">
                                            <div class="box_companyYearEnd  boxUpDown boxUpDown_139 dn" style="display: none;">
                                                <ul>
                                                    <li>至今</li>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                    <li>2009</li>
                                                    <li>2008</li>
                                                    <li>2007</li>
                                                    <li>2006</li>
                                                    <li>2005</li>
                                                    <li>2004</li>
                                                    <li>2003</li>
                                                    <li>2002</li>
                                                    <li>2001</li>
                                                    <li>2000</li>
                                                    <li>1999</li>
                                                    <li>1998</li>
                                                    <li>1997</li>
                                                    <li>1996</li>
                                                    <li>1995</li>
                                                    <li>1994</li>
                                                    <li>1993</li>
                                                    <li>1992</li>
                                                    <li>1991</li>
                                                    <li>1990</li>
                                                    <li>1989</li>
                                                    <li>1988</li>
                                                    <li>1987</li>
                                                    <li>1986</li>
                                                    <li>1985</li>
                                                    <li>1984</li>
                                                    <li>1983</li>
                                                    <li>1982</li>
                                                    <li>1981</li>
                                                    <li>1980</li>
                                                    <li>1979</li>
                                                    <li>1978</li>
                                                    <li>1977</li>
                                                    <li>1976</li>
                                                    <li>1975</li>
                                                    <li>1974</li>
                                                    <li>1973</li>
                                                    <li>1972</li>
                                                    <li>1971</li>
                                                    <li>1970</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="fl">
                                            <input type="hidden" class="companyMonthEnd" value="<?php echo ($experience_data["end_monthtime"]); ?>" name="companyMonthEnd">
                                            <input type="button" placeholder="结束月份" value="<?php echo ($experience_data["end_yeartime"]); ?>" class="profile_select_139 profile_select_normal select_companyMonthEnd">
                                            <div style="display: none;" class="box_companyMonthEnd boxUpDown boxUpDown_139 dn">
                                                <ul>
                                                    <li>01</li>
                                                    <li>02</li>
                                                    <li>03</li>
                                                    <li>04</li>
                                                    <li>05</li>
                                                    <li>06</li>
                                                    <li>07</li>
                                                    <li>08</li>
                                                    <li>09</li>
                                                    <li>10</li>
                                                    <li>11</li>
                                                    <li>12</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="3">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <input type="hidden" class="expId" value="<?php echo ($experience_data["id"]); ?>">
                        </form><!--end .experienceForm-->
                    </div><!--end .experienceEdit-->

                    <div class="experienceAdd pAdd dn">
                        工作经历最能体现自己的工作能力，<br>
                        且完善后才可投递简历哦！
                        <span>添加工作经历</span>
                    </div><!--end .experienceAdd-->
                </div><!--end #workExperience-->

                <div class="profile_box" id="projectExperience">
                    <h2>项目经验</h2>
                    <span class="c_edit "></span>
                    <div class="projectShow ">
                        <ul class="plist clearfix">
                            <li>项目名称：<?php echo ($project_data["name"]); ?></li>
                            <li>职务：<?php echo ($project_data["job"]); ?></li>
                            <li>项目时间：<?php echo ($project_data["begin_yeartime"]); ?>.<?php echo ($project_data["begin_monthtime"]); ?>-<?php echo ($project_data["end_yeartime"]); if( $project_data["end_yeartime"] != '至今' ): ?>.<?php echo ($project_data["end_monthtime"]); endif; ?></li>
                        </ul>
                    </div><!--end .projectShow-->
                    <div class="projectEdit dn">
                        <form class="projectForm">
                            <table>
                                <tbody>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="项目名称" name="projectName" class="projectName" value="<?php echo ($project_data["name"]); ?>">
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="担任职务，如：产品负责人" name="thePost" class="thePost" value="<?php echo ($project_data["job"]); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <div class="fl">
                                            <input type="hidden" class="projectYearStart" value="<?php echo ($project_data["begin_yeartime"]); ?>" name="projectYearStart">
                                            <input type="button" placeholder="开始年份" value="<?php echo ($project_data["begin_yeartime"]); ?>" class="profile_select_139 profile_select_normal select_projectYearStart">
                                            <div class="box_projectYearStart  boxUpDown boxUpDown_139 dn" style="display: none;">
                                                <ul>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                    <li>2009</li>
                                                    <li>2008</li>
                                                    <li>2007</li>
                                                    <li>2006</li>
                                                    <li>2005</li>
                                                    <li>2004</li>
                                                    <li>2003</li>
                                                    <li>2002</li>
                                                    <li>2001</li>
                                                    <li>2000</li>
                                                    <li>1999</li>
                                                    <li>1998</li>
                                                    <li>1997</li>
                                                    <li>1996</li>
                                                    <li>1995</li>
                                                    <li>1994</li>
                                                    <li>1993</li>
                                                    <li>1992</li>
                                                    <li>1991</li>
                                                    <li>1990</li>
                                                    <li>1989</li>
                                                    <li>1988</li>
                                                    <li>1987</li>
                                                    <li>1986</li>
                                                    <li>1985</li>
                                                    <li>1984</li>
                                                    <li>1983</li>
                                                    <li>1982</li>
                                                    <li>1981</li>
                                                    <li>1980</li>
                                                    <li>1979</li>
                                                    <li>1978</li>
                                                    <li>1977</li>
                                                    <li>1976</li>
                                                    <li>1975</li>
                                                    <li>1974</li>
                                                    <li>1973</li>
                                                    <li>1972</li>
                                                    <li>1971</li>
                                                    <li>1970</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="fl">
                                            <input type="hidden" class="projectMonthStart" value="<?php echo ($project_data["begin_monthtime"]); ?>" name="projectMonthStart">
                                            <input type="button" placeholder="开始月份" value="<?php echo ($project_data["begin_monthtime"]); ?>" class="profile_select_139 profile_select_normal select_projectMonthStart">
                                            <div style="display: none;" class="box_projectMonthStart boxUpDown boxUpDown_139 dn">
                                                <ul>
                                                    <li>01</li>
                                                    <li>02</li>
                                                    <li>03</li>
                                                    <li>04</li>
                                                    <li>05</li>
                                                    <li>06</li>
                                                    <li>07</li>
                                                    <li>08</li>
                                                    <li>09</li>
                                                    <li>10</li>
                                                    <li>11</li>
                                                    <li>12</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <div class="fl">
                                            <input type="hidden" class="projectYearEnd" value="<?php echo ($project_data["end_yeartime"]); ?>" name="projectYearEnd">
                                            <input type="button" placeholder="结束年份" value="<?php echo ($project_data["end_yeartime"]); ?>" class="profile_select_139 profile_select_normal select_projectYearEnd">
                                            <div class="box_projectYearEnd  boxUpDown boxUpDown_139 dn"
                                                 style="display: none;">
                                                <ul>
                                                    <li>至今</li>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                    <li>2009</li>
                                                    <li>2008</li>
                                                    <li>2007</li>
                                                    <li>2006</li>
                                                    <li>2005</li>
                                                    <li>2004</li>
                                                    <li>2003</li>
                                                    <li>2002</li>
                                                    <li>2001</li>
                                                    <li>2000</li>
                                                    <li>1999</li>
                                                    <li>1998</li>
                                                    <li>1997</li>
                                                    <li>1996</li>
                                                    <li>1995</li>
                                                    <li>1994</li>
                                                    <li>1993</li>
                                                    <li>1992</li>
                                                    <li>1991</li>
                                                    <li>1990</li>
                                                    <li>1989</li>
                                                    <li>1988</li>
                                                    <li>1987</li>
                                                    <li>1986</li>
                                                    <li>1985</li>
                                                    <li>1984</li>
                                                    <li>1983</li>
                                                    <li>1982</li>
                                                    <li>1981</li>
                                                    <li>1980</li>
                                                    <li>1979</li>
                                                    <li>1978</li>
                                                    <li>1977</li>
                                                    <li>1976</li>
                                                    <li>1975</li>
                                                    <li>1974</li>
                                                    <li>1973</li>
                                                    <li>1972</li>
                                                    <li>1971</li>
                                                    <li>1970</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="fl">
                                            <input type="hidden" class="projectMonthEnd" value="<?php echo ($project_data["end_monthtime"]); ?>" name="projectMonthEnd">
                                            <input type="button" placeholder="结束月份" value="<?php echo ($project_data["end_monthtime"]); ?>" class="profile_select_139 profile_select_normal select_projectMonthEnd">
                                            <div style="display: none;" class="box_projectMonthEnd boxUpDown boxUpDown_139 dn">
                                                <ul>
                                                    <li>01</li>
                                                    <li>02</li>
                                                    <li>03</li>
                                                    <li>04</li>
                                                    <li>05</li>
                                                    <li>06</li>
                                                    <li>07</li>
                                                    <li>08</li>
                                                    <li>09</li>
                                                    <li>10</li>
                                                    <li>11</li>
                                                    <li>12</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top"></td>
                                    <td colspan="3">
                                        <textarea class="projectDescription s_textarea" name="projectDescription" placeholder="项目描述"><?php echo ($project_data["description"]); ?>"</textarea>
                                        <div class="word_count">你还可以输入 <span>500</span> 字</div>
                                    </td>
                                </tr>
                                <!-- <tr>
                                    <td colspan="2">
                                        <textarea placeholder="职责描述" name="ResponsDescription" class="ResponsDescription s_textarea"></textarea>
                                        <div class="word_count">你还可以输入 <span>500</span> 字</div>
                                    </td>
                                </tr> -->
                                <tr>
                                    <td valign="top"></td>
                                    <td colspan="3">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <input type="hidden" value="" class="projectId">
                        </form><!--end .projectForm-->
                    </div><!--end .projectEdit-->
                    <div class="projectAdd pAdd dn">
                        项目经验是用人单位衡量人才能力的重要指标哦！<br>
                        来说说让你难忘的项目吧！
                        <span>添加项目经验</span>
                    </div><!--end .projectAdd-->
                </div><!--end #projectExperience-->

                <div class="profile_box" id="educationalBackground">
                    <h2>教育背景<span>（投递简历时必填）</span></h2>
                    <span class="c_edit "></span>
                    <div class="educationalShow ">
                        <form class="educationalForm borderBtm dn ">
                            <table>
                                <tbody>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="学校名称" name="schoolName" class="schoolName" value="<?php echo ($education_data["school"]); ?>">
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="hidden" class="degree" value="<?php echo ($education_data["education"]); ?>" name="degree">
                                        <input type="button" placeholder="学历" value="<?php echo ($education_data["education"]); ?>" class="profile_select_287 profile_select_normal select_degree">
                                        <div class="box_degree boxUpDown boxUpDown_287 dn" style="display: none;">
                                            <ul>
                                                <li>大专</li>
                                                <li>本科</li>
                                                <li>硕士</li>
                                                <li>博士</li>
                                                <li>其他</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="专业名称" value="<?php echo ($education_data["professional"]); ?>" name="professionalName" class="professionalName">
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <div class="fl">
                                            <input type="hidden" class="schoolYearStart" value="<?php echo ($education_data["begin_time"]); ?>" name="schoolYearStart">
                                            <input type="button" placeholder="开始年份" value="<?php echo ($education_data["begin_time"]); ?>" class="profile_select_139 profile_select_normal select_schoolYearStart">
                                            <div class="box_schoolYearStart boxUpDown boxUpDown_139 dn" style="display: none;">
                                                <ul>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                    <li>2009</li>
                                                    <li>2008</li>
                                                    <li>2007</li>
                                                    <li>2006</li>
                                                    <li>2005</li>
                                                    <li>2004</li>
                                                    <li>2003</li>
                                                    <li>2002</li>
                                                    <li>2001</li>
                                                    <li>2000</li>
                                                    <li>1999</li>
                                                    <li>1998</li>
                                                    <li>1997</li>
                                                    <li>1996</li>
                                                    <li>1995</li>
                                                    <li>1994</li>
                                                    <li>1993</li>
                                                    <li>1992</li>
                                                    <li>1991</li>
                                                    <li>1990</li>
                                                    <li>1989</li>
                                                    <li>1988</li>
                                                    <li>1987</li>
                                                    <li>1986</li>
                                                    <li>1985</li>
                                                    <li>1984</li>
                                                    <li>1983</li>
                                                    <li>1982</li>
                                                    <li>1981</li>
                                                    <li>1980</li>
                                                    <li>1979</li>
                                                    <li>1978</li>
                                                    <li>1977</li>
                                                    <li>1976</li>
                                                    <li>1975</li>
                                                    <li>1974</li>
                                                    <li>1973</li>
                                                    <li>1972</li>
                                                    <li>1971</li>
                                                    <li>1970</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="fl">
                                            <input type="hidden" class="schoolYearEnd" value="<?php echo ($education_data["end_time"]); ?>" name="schoolYearEnd">
                                            <input type="button" placeholder="结束年份" value="<?php echo ($education_data["end_time"]); ?>" class="profile_select_139 profile_select_normal select_schoolYearEnd">
                                            <div style="display: none;" class="box_schoolYearEnd  boxUpDown boxUpDown_139 dn">
                                                <ul>
                                                    <li>2021</li>
                                                    <li>2020</li>
                                                    <li>2019</li>
                                                    <li>2018</li>
                                                    <li>2017</li>
                                                    <li>2016</li>
                                                    <li>2015</li>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                    <li>2009</li>
                                                    <li>2008</li>
                                                    <li>2007</li>
                                                    <li>2006</li>
                                                    <li>2005</li>
                                                    <li>2004</li>
                                                    <li>2003</li>
                                                    <li>2002</li>
                                                    <li>2001</li>
                                                    <li>2000</li>
                                                    <li>1999</li>
                                                    <li>1998</li>
                                                    <li>1997</li>
                                                    <li>1996</li>
                                                    <li>1995</li>
                                                    <li>1994</li>
                                                    <li>1993</li>
                                                    <li>1992</li>
                                                    <li>1991</li>
                                                    <li>1990</li>
                                                    <li>1989</li>
                                                    <li>1988</li>
                                                    <li>1987</li>
                                                    <li>1986</li>
                                                    <li>1985</li>
                                                    <li>1984</li>
                                                    <li>1983</li>
                                                    <li>1982</li>
                                                    <li>1981</li>
                                                    <li>1980</li>
                                                    <li>1979</li>
                                                    <li>1978</li>
                                                    <li>1977</li>
                                                    <li>1976</li>
                                                    <li>1975</li>
                                                    <li>1974</li>
                                                    <li>1973</li>
                                                    <li>1972</li>
                                                    <li>1971</li>
                                                    <li>1970</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="3">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <input type="hidden" class="eduId" value="">
                        </form><!--end .educationalForm-->

                        <ul class="elist clearfix">
                            <li>学校名称：<?php echo ($education_data["school"]); ?></li>
                            <li>学历：<?php echo ($education_data["education"]); ?></li>
                            <li>专业：<?php echo ($education_data["professional"]); ?></li>
                            <li>起止时间：<?php echo ($education_data["begin_time"]); ?> - <?php echo ($education_data["end_time"]); ?></li>
                        </ul>
                    </div><!--end .educationalShow-->
                    <div class="educationalEdit dn">
                        <form class="educationalForm">
                            <table>
                                <tbody>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="学校名称" name="schoolName" class="schoolName">
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="hidden" class="degree" value="" name="degree">
                                        <input type="button" value="学历"
                                               class="profile_select_287 profile_select_normal select_degree">
                                        <div class="box_degree boxUpDown boxUpDown_287 dn" style="display: none;">
                                            <ul>
                                                <li>大专</li>
                                                <li>本科</li>
                                                <li>硕士</li>
                                                <li>博士</li>
                                                <li>其他</li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <input type="text" placeholder="专业名称" name="professionalName"
                                               class="professionalName">
                                    </td>
                                    <td valign="top">
                                        <span class="redstar">*</span>
                                    </td>
                                    <td>
                                        <div class="fl">
                                            <input type="hidden" class="schoolYearStart" value=""
                                                   name="schoolYearStart">
                                            <input type="button" value="开始年份"
                                                   class="profile_select_139 profile_select_normal select_schoolYearStart">
                                            <div class="box_schoolYearStart boxUpDown boxUpDown_139 dn"
                                                 style="display: none;">
                                                <ul>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                    <li>2009</li>
                                                    <li>2008</li>
                                                    <li>2007</li>
                                                    <li>2006</li>
                                                    <li>2005</li>
                                                    <li>2004</li>
                                                    <li>2003</li>
                                                    <li>2002</li>
                                                    <li>2001</li>
                                                    <li>2000</li>
                                                    <li>1999</li>
                                                    <li>1998</li>
                                                    <li>1997</li>
                                                    <li>1996</li>
                                                    <li>1995</li>
                                                    <li>1994</li>
                                                    <li>1993</li>
                                                    <li>1992</li>
                                                    <li>1991</li>
                                                    <li>1990</li>
                                                    <li>1989</li>
                                                    <li>1988</li>
                                                    <li>1987</li>
                                                    <li>1986</li>
                                                    <li>1985</li>
                                                    <li>1984</li>
                                                    <li>1983</li>
                                                    <li>1982</li>
                                                    <li>1981</li>
                                                    <li>1980</li>
                                                    <li>1979</li>
                                                    <li>1978</li>
                                                    <li>1977</li>
                                                    <li>1976</li>
                                                    <li>1975</li>
                                                    <li>1974</li>
                                                    <li>1973</li>
                                                    <li>1972</li>
                                                    <li>1971</li>
                                                    <li>1970</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="fl">
                                            <input type="hidden" class="schoolYearEnd" value="" name="schoolYearEnd">
                                            <input type="button" value="结束年份"
                                                   class="profile_select_139 profile_select_normal select_schoolYearEnd">
                                            <div class="box_schoolYearEnd  boxUpDown boxUpDown_139 dn"
                                                 style="display: none;">
                                                <ul>
                                                    <li>2014</li>
                                                    <li>2013</li>
                                                    <li>2012</li>
                                                    <li>2011</li>
                                                    <li>2010</li>
                                                    <li>2009</li>
                                                    <li>2008</li>
                                                    <li>2007</li>
                                                    <li>2006</li>
                                                    <li>2005</li>
                                                    <li>2004</li>
                                                    <li>2003</li>
                                                    <li>2002</li>
                                                    <li>2001</li>
                                                    <li>2000</li>
                                                    <li>1999</li>
                                                    <li>1998</li>
                                                    <li>1997</li>
                                                    <li>1996</li>
                                                    <li>1995</li>
                                                    <li>1994</li>
                                                    <li>1993</li>
                                                    <li>1992</li>
                                                    <li>1991</li>
                                                    <li>1990</li>
                                                    <li>1989</li>
                                                    <li>1988</li>
                                                    <li>1987</li>
                                                    <li>1986</li>
                                                    <li>1985</li>
                                                    <li>1984</li>
                                                    <li>1983</li>
                                                    <li>1982</li>
                                                    <li>1981</li>
                                                    <li>1980</li>
                                                    <li>1979</li>
                                                    <li>1978</li>
                                                    <li>1977</li>
                                                    <li>1976</li>
                                                    <li>1975</li>
                                                    <li>1974</li>
                                                    <li>1973</li>
                                                    <li>1972</li>
                                                    <li>1971</li>
                                                    <li>1970</li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="clear"></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td></td>
                                    <td colspan="3">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <input type="hidden" class="eduId" value="">
                        </form><!--end .educationalForm-->
                    </div><!--end .educationalEdit-->
                    <div class="educationalAdd pAdd dn">
                        教育背景可以充分体现你的学习和专业能力，<br>
                        且完善后才可投递简历哦！
                        <span>添加教育经历</span>
                    </div><!--end .educationalAdd-->
                </div><!--end #educationalBackground-->

                <div class="profile_box" id="selfDescription">
                    <h2>自我描述</h2>
                    <span class="c_edit dn"></span>
                    <div class="descriptionShow ">
                        <?php echo ($resume_data["introduction"]); ?>
                    </div><!--end .descriptionShow-->
                    <div class="descriptionEdit dn">
                        <form class="descriptionForm">
                            <table>
                                <tbody>
                                <tr>
                                    <td colspan="2">
                                        <textarea class="selfDescription s_textarea" name="selfDescription" placeholder=""><?php echo ($resume_data["introduction"]); ?></textarea>
                                        <div class="word_count">你还可以输入 <span>500</span> 字</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </form><!--end .descriptionForm-->
                    </div><!--end .descriptionEdit-->
                    <div class="descriptionAdd pAdd dn">
                        描述你的性格、爱好以及吸引人的经历等，<br>
                        让企业了解多元化的你！
                        <span>添加自我描述</span>
                    </div><!--end .descriptionAdd-->
                </div><!--end #selfDescription-->

                <div class="profile_box" id="worksShow">
                    <h2>作品展示</h2>
                    <span class="c_add dn"></span>
                    <div class="workShow ">
                        <ul class="slist clearfix">
                            <li><a href="http://<?php echo ($show_data["link"]); ?>"><?php echo ($show_data["link"]); ?></a></li>
                            <li><?php echo ($show_data["description"]); ?></li>
                        </ul>
                    </div><!--end .workShow-->
                    <div class="workEdit dn">
                        <form class="workForm">
                            <table>
                                <tbody>
                                <tr>
                                    <td>
                                        <input type="text" placeholder="请输入作品链接" name="workLink" class="workLink" value="<?php echo ($show_data["link"]); ?>">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <textarea maxlength="100" class="workDescription s_textarea" name="workDescription" placeholder="请输入说明文字"><?php echo ($show_data["description"]); ?></textarea>
                                        <div class="word_count">你还可以输入 <span>100</span> 字</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="submit" value="保 存" class="btn_profile_save">
                                        <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <input type="hidden" class="showId" value="">
                        </form><!--end .workForm-->
                    </div><!--end .workEdit-->
                    <div class="workAdd pAdd dn">
                        好作品会说话！<br>
                        快来秀出你的作品打动企业吧！
                        <span>添加作品展示</span>
                    </div><!--end .workAdd-->
                </div><!--end #worksShow-->
                <input type="hidden" id="resumeId" value="<?php echo ($resume_data["id"]); ?>">
            </div><!--end .content_l-->
            <div class="content_r">
                <div class="mycenterR" id="myInfo">
                    <h2>我的信息</h2>
                    <a target="_blank" href="collections.html">我收藏的职位</a>
                    <br>
                    <a target="_blank" href="subscribe.html">我订阅的职位</a>
                </div><!--end #myInfo-->

                <div class="mycenterR" id="myResume">
                    <h2>我的附件简历
                        <a title="上传附件简历" href="#uploadFile" class="inline cboxElement">上传简历</a>
                    </h2>
                    <div class="resumeUploadDiv">
                        暂无附件简历
                    </div>
                </div><!--end #myResume-->

                <div class="mycenterR" id="resumeSet">
                    <h2>投递简历设置 <span>修改设置</span></h2>
                    <!-- -1 (0=附件， 1=在线， 其他=未设置) -->
                    <div class="noSet set0 dn">默认使用<span>附件简历</span>进行投递</div>
                    <div class="noSet set1 dn">默认使用<span>在线简历</span>进行投递</div>
                    <div class="noSet">暂未设置默认投递简历</div>
                    <input type="hidden" class="defaultResume" value="-1">
                    <form class="dn" id="resumeSetForm">
                        <label><input type="radio" value="1" class="resume1"
                                      name="resume">默认使用<span>在线简历</span>进行投递</label>
                        <label><input type="radio" value="0" class="resume0"
                                      name="resume">默认使用<span>附件简历</span>进行投递</label>
                        <span class="setTip error"></span>
                        <div class="resumeTip">设置后投递简历时将不再提醒</div>
                        <input type="submit" value="保 存" class="btn_profile_save">
                        <a class="btn_profile_cancel" href="javascript:;">取 消</a>
                    </form>
                </div><!--end #resumeSet-->

                <div class="mycenterR" id="myShare">
                    <h2>当前每日投递量：10个</h2>
                    <a target="_blank" href="h/share/invite.html">邀请好友，提升投递量</a>
                </div><!--end #myShare-->


                <div class="greybg qrcode mt20">
                    <img width="242" height="242" alt="拉勾微信公众号二维码" src="/Public/Home/images/qr_resume.png">
                    <span class="c7">微信扫一扫，轻松找工作</span>
                </div>
            </div><!--end .content_r-->
        </div>

        <input type="hidden" id="userid" name="userid" value="314873">

        <!-------------------------------------弹窗lightbox ----------------------------------------->
        <div style="display:none;">
            <!-- 上传简历 -->
            <div class="popup" id="uploadFile">
                <table width="100%">
                    <tbody>
                    <tr>
                        <td align="center">
                            <form>
                                <a class="btn_addPic" href="javascript:void(0);">
                                    <span>选择上传文件</span>
                                    <input type="file"
                                           onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload')"
                                           class="filePrew" id="resumeUpload" name="newResume" size="3"
                                           title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M" tabindex="3">
                                </a>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td align="left">支持word、pdf、ppt、txt、wps格式文件<br>文件大小需小于10M</td>
                    </tr>
                    <tr>
                        <td align="left" style="color:#dd4a38; padding-top:10px;">注：若从其它网站下载的word简历，请将文件另存为.docx格式后上传
                        </td>
                    </tr>
                    <tr>
                        <td align="center"><img width="55" height="16" alt="loading" style="visibility: hidden;"
                                                id="loadingImg" src="/Public/Home/images/loading.gif"></td>
                    </tr>
                    </tbody>
                </table>
            </div><!--/#uploadFile-->

            <!-- 简历上传成功 -->
            <div class="popup" id="uploadFileSuccess">
                <h4>简历上传成功！</h4>
                <table width="100%">
                    <tbody>
                    <tr>
                        <td align="center"><p>你可以将简历投给你中意的公司了。</p></td>
                    </tr>
                    <tr>
                        <td align="center"><a class="btn_s" href="javascript:;">确&nbsp;定</a></td>
                    </tr>
                    </tbody>
                </table>
            </div><!--/#uploadFileSuccess-->

            <!-- 没有简历请上传 -->
            <div class="popup" id="deliverResumesNo">
                <table width="100%">
                    <tbody>
                    <tr>
                        <td align="center"><p class="font_16">你在拉勾还没有简历，请先上传一份</p></td>
                    </tr>
                    <tr>
                        <td align="center">
                            <form>
                                <a class="btn_addPic" href="javascript:void(0);">
                                    <span>选择上传文件</span>
                                    <input type="file"
                                           onchange="file_check(this,'h/nearBy/updateMyResume.json','resumeUpload1')"
                                           class="filePrew" id="resumeUpload1" name="newResume" size="3"
                                           title="支持word、pdf、ppt、txt、wps格式文件，大小不超过10M">
                                </a>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">支持word、pdf、ppt、txt、wps格式文件，大小不超过10M</td>
                    </tr>
                    </tbody>
                </table>
            </div><!--/#deliverResumesNo-->

            <!-- 上传附件简历操作说明-重新上传 -->
            <div class="popup" id="fileResumeUpload">
                <table width="100%">
                    <tbody>
                    <tr>
                        <td>
                            <div class="f18 mb10">请上传标准格式的word简历</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="f16">
                                操作说明：<br>
                                打开需要上传的文件 - 点击文件另存为 - 选择.docx - 保存
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <a title="上传附件简历" href="#uploadFile" class="inline btn cboxElement">重新上传</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div><!--/#fileResumeUpload-->

            <!-- 上传附件简历操作说明-重新上传 -->
            <div class="popup" id="fileResumeUploadSize">
                <table width="100%">
                    <tbody>
                    <tr>
                        <td>
                            <div class="f18 mb10">上传文件大小超出限制</div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="f16">
                                提示：<br>
                                单个附件不能超过10M，请重新选择附件简历！
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td align="center">
                            <a title="上传附件简历" href="#uploadFile" class="inline btn cboxElement">重新上传</a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div><!--/#deliverResumeConfirm-->

        </div>
        <!------------------------------------- end ----------------------------------------->

        <script src="/Public/Home/js/Chart.min.js" type="text/javascript"></script>
        <script src="/Public/Home/js/profile.min.js" type="text/javascript"></script>
        <!-- <div id="profileOverlay"></div> -->
        <div class="" id="qr_cloud_resume" style="display: none;">
            <div class="cloud">
                <img width="134" height="134" src="">
                <a class="close" href="javascript:;"></a>
            </div>
        </div>
        <div class="clear"></div>
        <input type="hidden" value="97fd449bcb294153a671f8fe6f4ba655" id="resubmitToken">
        <a rel="nofollow" title="回到顶部" id="backtop" style="display: none;"></a>
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
</body>
<script type="text/javascript">
    $(":submit").click(function(){
        alert(1);
    })
</script>
</html>