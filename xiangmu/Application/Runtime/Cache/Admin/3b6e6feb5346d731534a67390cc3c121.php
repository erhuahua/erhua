<?php if (!defined('THINK_PATH')) exit();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>运营管理平台 - 拉勾网</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- 必须的css -->
    <link href="/Public/Admin/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/Public/Admin/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Public/Admin/css/font-awesome.min.css" />
    <!--[if IE 7]>
    <link rel="stylesheet" href="/Public/Admin/css/font-awesome-ie7.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="/Public/Admin/css/ace-fonts.css" />
    <link rel="stylesheet" href="/Public/Admin/css/jquery-ui-1.10.3.full.min.css" />
    <link rel="stylesheet" href="/Public/Admin/css/ace.min.css" />
    <link rel="stylesheet" href="/Public/Admin/css/ace-responsive.min.css" />
    <link rel="stylesheet" href="/Public/Admin/css/ace-skins.min.css" />
    <link rel="stylesheet" href="/Public/Admin/css/lagou.admin.css" />
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="/Public/Admin/css/ace-ie.min.css" />
    <![endif]-->
    <link rel="stylesheet" href="/Public/Admin/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="/Public/Admin/css/datepicker.css" />
    <link rel="stylesheet" href="/Public/Admin/css/lagou.global.css" />
    <!-- /必须的css -->


    <script src="/Public/Admin/js/ace-extra.min.js"></script>
</head>

<body>
<!-- 头部 -->
<!-- 头部 -->
<div class="navbar" id="navbar">
    <div class="navbar-inner">
        <div class="container-fluid">
            <a href="#" class="brand">
                <small>
                    <i class="icon-comments"></i>
                    拉勾网 - 运营管理平台
                </small>
            </a><!--/.brand-->

            <ul class="nav ace-nav pull-right">

                <li class="light-blue">
                    <a data-toggle="dropdown" href="#" class="dropdown-toggle">
                        <img class="nav-user-photo" src="<?php echo ($_SESSION['Admin_info']['image']); ?>" alt="admin" />
                        <span class="user-info">
							<small>欢迎回来</small>
							<?php echo ($_SESSION['Admin_info']['username']); ?>						</span>

                        <i class="icon-caret-down"></i>
                    </a>

                    <ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-closer">
                        <!-- <li>
                            <a href="#">
                                <i class="icon-cog"></i>
                                修改信息
                            </a>
                        </li> -->

                        <li>
                            <a href="/Admin/Admin/editpwd.html">
                                <i class="icon-lock"></i>
                                修改密码
                            </a>
                        </li>

                        <li class="divider"></li>

                        <li>
                            <a href="/Admin/Login/logout.html">
                                <i class="icon-off"></i>
                                退出
                            </a>
                        </li>
                    </ul>
                </li>
            </ul><!--/.ace-nav-->
        </div><!--/.container-fluid-->
    </div><!--/.navbar-inner-->
</div>
<!-- /头部 -->

<div class="main-container container-fluid">
    <a class="menu-toggler" id="menu-toggler" href="#">
        <span class="menu-text"></span>
    </a>

    <!-- 左侧菜单 -->

    <div class="sidebar" id="sidebar">
        <ul class="nav nav-list">
            <li class="active open">
                <a href="/Admin/Index/index.html">
                    <i class="icon-home"></i>
                    <span class="menu-text"> 控制台 </span>
                </a>
            </li>

            <li >
                <a href="javascript:;" class="dropdown-toggle">
                    <i class="icon-group"></i>
                    <span class="menu-text">用户管理</span>
                    <b class="arrow icon-angle-down"></b>
                </a>
                <ul class="submenu">
                    <li>
                        <a href="/Admin/User/index.html">
                            <i class="icon-double-angle-right"></i>
                            会员列表
                        </a>
                    </li>
                </ul>
            </li>

            <li >
                <a href="javascript:;" class="dropdown-toggle">
                    <i class="icon-envelope-alt"></i>
                    <span class="menu-text">公司信息管理</span>
                    <b class="arrow icon-angle-down"></b>
                </a>
                <ul class="submenu">
                    <li >
                        <a href="/Admin/Company/index.html">
                            <i class="icon-double-angle-right"></i>
                            公司信息列表
                        </a>
                    </li>
                    <li >
                        <a href="/Admin/Company/apply.html">
                            <i class="icon-double-angle-right"></i>
                            申请认证公司列表
                        </a>
                    </li>
                </ul>
            </li>

            <li >
                <a href="javascript:;" class="dropdown-toggle">
                    <i class="icon-film"></i>
                    <span class="menu-text">职位分类管理</span>
                    <b class="arrow icon-angle-down"></b>
                </a>
                <ul class="submenu">
                    <li >
                        <a href="/Admin/Type/index.html">
                            <i class="icon-double-angle-right"></i>
                            全部分类列表
                        </a>
                    </li>
                </ul>
            </li>

            <li >
                <a href="javascript:;" class="dropdown-toggle">
                    <i class="icon-heart"></i>
                    <span class="menu-text">友情连接管理</span>
                    <b class="arrow icon-angle-down"></b>
                </a>
                <ul class="submenu">
                    <li >
                        <a href="/Admin/Link/index.html">
                            <i class="icon-double-angle-right"></i>
                            友情链接列表
                        </a>
                    </li>
                </ul>
            </li>

            <li >
                <a href="javascript:;" class="dropdown-toggle">
                    <i class="icon-legal"></i>
                    <span class="menu-text">管理员管理</span>
                    <b class="arrow icon-angle-down"></b>
                </a>
                <ul class="submenu">
                    <li>
                        <a href=/Admin/Manager/index.html>
                            <i class="icon-double-angle-right"></i>
                            管理员列表
                        </a>
                    </li>
                </ul>
            </li>

        </ul>

        <div class="sidebar-collapse" id="sidebar-collapse">
            <i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
        </div>

        <script type="text/javascript">
            try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
        </script>
    </div>

    <!-- /左侧菜单 -->

    <div class="main-content">
        <!-- 面包屑导航 -->
        <div class="breadcrumbs" id="breadcrumbs">
            <ul class="breadcrumb">
                <li>
                    <i class="icon-home home-icon"></i>
                    <a href="/Admin/Index/index.html">首页</a>
                    <span class="divider">
							<i class="icon-angle-right arrow-icon"></i>
							</span>
                </li>

                <li class="active">控制台</li>

            </ul>
        </div>
        <!-- /面包屑导航 -->

        <div class="page-content">

            <div class="row-fluid">
                <div class="span6">
                    <div id="nestable" class="dd">
                        <?php if(is_array($job_category)): $i = 0; $__LIST__ = $job_category;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vol): $mod = ($i % 2 );++$i;?><ol class="dd-list">
                            <li class="dd-item" data-id="<?php echo ($vol["id"]); ?>">
                                <div class="dd-handle">
                                    <?php echo ($vol["name"]); ?>					
                                </div>
                                <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if( $vo["pid"] == $vol["id"] ): ?><ol class="dd-list">
                                    <li class="dd-item" data-id="<?php echo ($vo["id"]); ?>">
                                        <div class="dd-handle">
                                               <?php echo ($vo["name"]); ?>
                                        </div>
                                        <?php if(is_array($all)): $i = 0; $__LIST__ = $all;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i; if( $v["pid"] == $vo["id"] ): ?><ol class="dd-list">
                                                <li class="dd-item" data-id="<?php echo ($v["id"]); ?>">
                                                                   
                                                    <div class="dd-handle">
                                                            <?php echo ($v["name"]); ?>									
                                                        <div class="pull-right action-buttons">
                                                        </a>
                                                        <a href="javascript:window.location.href='/Admin/Type/edit/id/<?php echo ($v["id"]); ?>'" class="blue">
                                                            <i class="icon-pencil bigger-130"></i>
                                                        </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ol><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                                    </li>
                                </ol><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                            </li>
                        </ol><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
                <div class="span1">
                    <a class="btn btn-app btn-success" href="javascript:window.location.href='/Admin/Type/add'">
                        <i class="icon-refresh bigger-230"></i>添加分类
                    </a>
                </div>
            </div>

        </div><!--/.page-content-->

        <!-- 右侧悬浮的设置按钮,去掉好像会引起js报错 -->
        <div class="ace-settings-container hide" id="ace-settings-container">
            <div class="btn btn-app btn-mini btn-warning ace-settings-btn" id="ace-settings-btn">
                <i class="icon-cog bigger-150"></i>
            </div>

            <div class="ace-settings-box" id="ace-settings-box">
                <div>
                    <div class="pull-left">
                        <select id="skin-colorpicker" class="hide">
                            <option data-skin="default" value="#438EB9">#438EB9</option>
                            <option data-skin="skin-1" value="#222A2D">#222A2D</option>
                            <option data-skin="skin-2" value="#C6487E">#C6487E</option>
                            <option data-skin="skin-3" value="#D0D0D0">#D0D0D0</option>
                        </select>
                    </div>
                    <span>&nbsp; Choose Skin</span>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-navbar" />
                    <label class="lbl" for="ace-settings-navbar"> Fixed Navbar</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-sidebar" />
                    <label class="lbl" for="ace-settings-sidebar"> Fixed Sidebar</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-breadcrumbs" />
                    <label class="lbl" for="ace-settings-breadcrumbs"> Fixed Breadcrumbs</label>
                </div>

                <div>
                    <input type="checkbox" class="ace ace-checkbox-2" id="ace-settings-rtl" />
                    <label class="lbl" for="ace-settings-rtl"> Right To Left (rtl)</label>
                </div>
            </div>
        </div>
        <!-- /右侧悬浮的设置按钮,去掉好像会引起js报错 -->
    </div>
</div>

<!-- 回到顶部 -->
<a href="###" id="btn-scroll-up" class="btn-scroll-up btn btn-small btn-inverse">
    <i class="icon-double-angle-up icon-only bigger-110"></i>
</a>
<!-- /回到顶部 -->

<!-- 操作后提示框 -->
<div id="lg-alert" class="hide" style="margin-bottom:-1.5em;"></div>
<!--modal表单弹出框-->
<form id="lg-form" class="modal fade hide form-horizontal" method="post" tabindex="-1" enctype="multipart/form-data" onsubmit="return false;"></form>

<!-- 基础js部分 -->
<script src='/Public/Admin/js/jquery-1.10.2.min.js'></script>
<script src='/Public/Admin/js/jquery.mobile.custom.min.js'></script>

<script src="/Public/Admin/js/jquery-ui-1.10.3.full.min.js"></script>
<script src="/Public/Admin/js/jquery.ui.touch-punch.min.js"></script>
<script src="/Public/Admin/js/bootstrap.min.js"></script>
<script src="/Public/Admin/js/ace-elements.min.js"></script>
<script src="/Public/Admin/js/ace.min.js"></script>

<script src="/Public/Admin/js/jquery.dataTables.min.js"></script>
<script src="/Public/Admin/js/jquery.dataTables.bootstrap.js"></script>
<script src="/Public/Admin/lagou/lagou.global.js"></script>
<script src="/Public/Admin/js/jquery.inputlimiter.1.3.1.min.js"></script>

<!-- /基础js部分 -->
<script type="text/javascript">
    jQuery(function($){
        try{
            ace.settings.navbar_fixed(true);
            ace.settings.sidebar_fixed(true);
            ace.settings.breadcrumbs_fixed(true);
        }catch(e){}

        $('[data-rel=tooltip]').tooltip();
        $('[data-rel=popover]').popover({html:true});

    });
</script>




<script src="/Public/Admin/js/jquery.dataTables.min.js"></script>
<script src="/Public/Admin/js/jquery.dataTables.bootstrap.js"></script>
<script src="/Public/Admin/js/jquery.nestable.min.js"></script>
<script type="text/javascript">
    jQuery(function($) {

        $('.dd').nestable();

        $('.dd-handle a').on('mousedown', function(e){
            e.stopPropagation();
        });


        $.extend({

            action : function(url, obj)
            {
                var obj = $(obj).parents('form');

                $.ajax({
                    url : url,
                    type : 'post',
                    data : obj.serialize(),
                    success : function(res)
                    {
                        $.lagou.alert(res.msg, res.code, 2);
                        $.lagou.formHide();
                        location.reload();
                    }
                });
            }
        });
    })
</script>

</body>
</html>