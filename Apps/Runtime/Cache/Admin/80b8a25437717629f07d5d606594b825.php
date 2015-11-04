<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>猪场设备后台管理系统</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- basic styles -->
		<link href="/equipment/Public/admin/assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="/equipment/Public/admin/assets/css/font-awesome.min.css" />


		<!--[if IE 7]>
		  <link rel="stylesheet" href="/equipment/Public/admin/assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!-- page specific plugin styles -->
        
        
        
        

		<!-- fonts -->

	
		<!-- ace styles -->
        
		<link rel="stylesheet" href="/equipment/Public/admin/assets/css/ace.min.css" />
		<link rel="stylesheet" href="/equipment/Public/admin/assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="/equipment/Public/admin/assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="/equipment/Public/admin/assets/css/ace-ie.min.css" />
		<![endif]-->

		<!-- inline styles related to this page -->

        
		<!-- ace settings handler -->

		<script src="/equipment/Public/admin/assets/js/ace-extra.min.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->

		<!--[if lt IE 9]>
		<script src="/equipment/Public/admin/assets/js/html5shiv.js"></script>
		<script src="/equipment/Public/admin/assets/js/respond.min.js"></script>
		<![endif]-->
		
	</head>

	<body>
		<div class="navbar navbar-default" id="navbar">
			<script type="text/javascript">
				try{ace.settings.check('navbar' , 'fixed')}catch(e){}
			</script>

			<div class="navbar-container" id="navbar-container">
				<div class="navbar-header pull-left">
					<a href="#" class="navbar-brand">
						<small>
							<i class="icon-leaf"></i>
							猪场设备后台管理系统
						</small>
					</a><!-- /.brand -->
				</div><!-- /.navbar-header -->

				<div class="navbar-header pull-right" role="navigation">
					<ul class="nav ace-nav">
						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="/equipment/Public/admin/assets/avatars/user.jpg" alt="Jason's Photo" />
								<span class="user-info">
									<small>欢迎光临,</small>
									<?php echo ($v = session('name')); ?>
								</span>
								<i class="icon-caret-down"></i>
							</a>

							<ul class="user-menu pull-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
								<li>
									<a href="/equipment/admin.php/Admin/edit/id/">
										<i class="icon-cog"></i>
										设置
									</a>
								</li>

								<li>
									<a href="/equipment/admin.php/Admin/edit/id/">
										<i class="icon-user"></i>
										个人资料
									</a>
								</li>

								<li class="divider"></li>

								<li>
									<a href="/equipment/admin.php/Login/logout">
										<i class="icon-off"></i>
										退出
									</a>
								</li>
							</ul>
						</li>
					</ul><!-- /.ace-nav -->
				</div><!-- /.navbar-header -->
			</div><!-- /.container -->
		</div>

		<div class="main-container" id="main-container">
			<script type="text/javascript">
				try{ace.settings.check('main-container' , 'fixed')}catch(e){}
			</script>

			<div class="main-container-inner">
				<a class="menu-toggler" id="menu-toggler" href="#">
					<span class="menu-text"></span>
				</a>

				<div class="sidebar" id="sidebar">
					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'fixed')}catch(e){}
					</script>

					<div class="sidebar-shortcuts" id="sidebar-shortcuts">
						<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
							<button class="btn btn-success">
								<i class="icon-signal"></i>
							</button>

							<button class="btn btn-info">
								<i class="icon-pencil"></i>
							</button>

							<button class="btn btn-warning">
								<i class="icon-group"></i>
							</button>

							<button class="btn btn-danger">
								<i class="icon-cogs"></i>
							</button>
						</div>

						<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
							<span class="btn btn-success"></span>

							<span class="btn btn-info"></span>

							<span class="btn btn-warning"></span>

							<span class="btn btn-danger"></span>
						</div>
					</div><!-- #sidebar-shortcuts -->

					<ul class="nav nav-list">
                        
						<li>
							<a href="/equipment/admin.php/Posts/Index" class="dropdown-toggle">
								<i class="icon-desktop"></i>
								<span class="menu-text"> 用户管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/equipment/admin.php/Admin/index">
										<i class="icon-double-angle-right"></i>
										员工列表
									</a>
								</li>
                                <!--  
								<li>
									<a href="/equipment/admin.php/Users/index">
										<i class="icon-double-angle-right"></i>
										会员列表
									</a>
								</li>
								-->
							</ul>
						</li>

						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 设备管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/equipment/admin.php/Goods/index">
										<i class="icon-double-angle-right"></i>
										设备列表
									</a>
								</li>
								<li>
									<a href="/equipment/admin.php/Type/index">
										<i class="icon-double-angle-right"></i>
										设备类别
									</a>
								</li>
								<li>
									<a href="/equipment/admin.php/Brands/index">
										<i class="icon-double-angle-right"></i>
										设备品牌
									</a>
								</li>
								<li>
									<a href="/equipment/admin.php/Attrvalue/index">
										<i class="icon-double-angle-right"></i>
										设备属性
									</a>
								</li>
							</ul>
						</li>
						<!-- 
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 订单管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>
							<ul class="submenu">
								<li>
									<a href="/equipment/admin.php/Orders/index">
										<i class="icon-double-angle-right"></i>
										订单列表
									</a>
								</li>
							</ul>
						</li>
						    <li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 评论管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/equipment/admin.php/Review/index">
										<i class="icon-double-angle-right"></i>
										评论列表
									</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 留言管理 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/equipment/admin.php/Leave/index">
										<i class="icon-double-angle-right"></i>
										留言列表
									</a>
								</li>
								<li>
									<a href="/equipment/admin.php/Leave/messagereply">
										<i class="icon-double-angle-right"></i>
										回复列表
									</a>
								</li>
							</ul>
                        </li>
                         -->
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 消息公告</span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/equipment/admin.php/News/index">
										<i class="icon-double-angle-right"></i>
										公告列表
									</a>
								</li>

								<li>
									<a href="/equipment/admin.php/Notices/index">
										<i class="icon-double-angle-right"></i>
										消息列表
									</a>
								</li>
							</ul>
						</li>
						
						
						<li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 猪场设置 </span>

								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/equipment/admin.php/Posts/index">
										<i class="icon-double-angle-right"></i>
										展示图列表
									</a>
								</li>

								<li>
									<a href="/equipment/admin.php/market/index">
										<i class="icon-double-angle-right"></i>
										猪场信息
									</a>
								</li>
							</ul>
						</li>
                        
                        <li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 友情链接 </span>
								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/equipment/admin.php/Link/index">
										<i class="icon-double-angle-right"></i>
										友情链接列表
									</a>
								</li>

								<li>
									<a href="/equipment/admin.php/Link/add">
										<i class="icon-double-angle-right"></i>
										添加友情链接
									</a>
								</li>
							</ul>
						</li>
						 <li>
							<a href="#" class="dropdown-toggle">
								<i class="icon-list"></i>
								<span class="menu-text"> 权限管理 </span>
								<b class="arrow icon-angle-down"></b>
							</a>

							<ul class="submenu">
								<li>
									<a href="/equipment/admin.php/acl/setAcl">
										<i class="icon-double-angle-right"></i>
									    浏览所有权限
									</a>
								</li>
								<li>
									<a href="/equipment/admin.php/AdminGroup/index">
										<i class="icon-double-angle-right"></i>
										权限组列表
									</a>
								</li>
								<li>
									<a href="/equipment/admin.php/AdminGroup/addGroup">
										<i class="icon-double-angle-right"></i>
										添加权限组
									</a>
								</li>
							</ul>
						</li>

						
					</ul><!-- /.nav-list -->

					<div class="sidebar-collapse" id="sidebar-collapse">
						<i class="icon-double-angle-left" data-icon1="icon-double-angle-left" data-icon2="icon-double-angle-right"></i>
					</div>

					<script type="text/javascript">
						try{ace.settings.check('sidebar' , 'collapsed')}catch(e){}
					</script>
				</div>

				
 <div class="main-content">
        <div class="breadcrumbs" id="breadcrumbs">
            <script type="text/javascript">
                try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
            </script>

            <ul class="breadcrumb">
                <li>
                    <i class="icon-home home-icon"></i>
                    <a href="#">首页</a>
                </li>

                <li>
                    <a href="#">展示图管理</a>
                </li>
                <li class="active">展示图列表</li>
            </ul><!-- .breadcrumb -->

            <div class="nav-search" id="nav-search">
                <form class="form-search" method="post">
                    <span class="input-icon">
                        <input name="id" type="text" placeholder="请输入..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
                        <button type="submit" value="查询" class="btn btn-purple btn-xs">搜索</button>
                    </span>
                </form>
            </div><!-- #nav-search -->
        </div>

        <div class="page-content">
            <div class="page-header">
                <h1>
                    <a href="/equipment/admin.php/Posts/add">添加展示图</a>
                </h1>
                
            </div><!-- /.page-header -->

            <div class="row">
                <div class="col-xs-12">
                    <!-- PAGE CONTENT BEGINS -->

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="table-responsive">
                                <table id="sample-table-1" class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </th>
                                            <th>ID</th>
                                            <th>标题</th>
                                            <th class="hidden-480">图片</th>
                                            <th class="hidden-480">链接</th>
                                            <th>添加时间</th>
                                            <th class="hidden-480">发布人</th>
                                            <th>状态</th>
											<th>操作</th>
                                        </tr>
                                    </thead>
									<tbody>
                                        <?php if(is_array($posts)): foreach($posts as $key=>$post): ?><tr>
                                            <td class="center">
                                                <label>
                                                    <input type="checkbox" class="ace" />
                                                    <span class="lbl"></span>
                                                </label>
                                            </td>
											<td><a href="#"><?php echo ($post['id']); ?></a></td>
                                            <td><?php echo ($post['title']); ?></td>
                                            <td class="hidden-480"><img width="150" src="/equipment/Public/Uploads/posts/a_<?php echo ($post['pic']); ?>" /></td>
                                            <td class="hidden-480"><a target="_blank" href="<?php echo ($post['link']); ?>"><?php echo ($post['link']); ?></a></td>
											<td class="hidden-480"><?php echo (date('Y-m-d H:i:s',$post['addtime'])); ?></td>
											<td class="hidden-480"><?php echo ($post['user_id']); ?></td>
											<td class="hidden-480">
                                                <?php if($post['state']==1): ?>新添加
												<?php elseif($post['state']==2): ?>已发布
												<?php else: ?>已过期<?php endif; ?>
											</td>
										    <td>
                                                <div class="visible-md visible-lg hidden-sm hidden-xs btn-group">
                                                    <p><a href="/equipment/admin.php/Posts/del/id/<?php echo ($post['id']); ?>" class="btn btn-xs btn-danger">
                                                        <i class="delposts icon-trash bigger-120">删除</i>
                                                    </a></p>
													<p><a href="/equipment/admin.php/Posts/update/id/<?php echo ($post['id']); ?>/type/1" class="btn btn-xs btn-info">
                                                        <i class="icon-edit bigger-120">设置为新添加</i>
                                                    </a></p>
													<p><a href="/equipment/admin.php/Posts/update/id/<?php echo ($post['id']); ?>/type/2" class="btn btn-xs btn-info">
                                                        <i class="icon-edit bigger-120">设置为已发布</i>
                                                    </a></p>
													<p><a href="/equipment/admin.php/Posts/update/id/<?php echo ($post['id']); ?>/type/3" class="btn btn-xs btn-info">
                                                        <i class="icon-edit bigger-120">设置为已过期</i>
                                                    </a></p>
												</div>
                                            </td>
                                        </tr><?php endforeach; endif; ?>
                                        <tr><td colspan="9"><?php echo ($page); ?></td></tr>
                                    </tbody>
                                </table>
                            </div><!-- /.table-responsive -->
                        </div><!-- /span -->
                    </div><!-- /row -->
                    <div class="hr hr-18 dotted hr-double"></div>
                    <!-- PAGE CONTENT ENDS -->
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.page-content -->
    </div>

				<!-- /#ace-settings-container -->
			</div><!-- /.main-container-inner -->

			<a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
				<i class="icon-double-angle-up icon-only bigger-110"></i>
			</a>
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->

		<!--<script src="/equipment/Public/admin/assets/js/jquery-2.0.3.min.js"></script>-->
		<script src="/equipment/Public/admin/assets/js/jquery-2.0.3.min.js"></script>
		

		<!-- <![endif]-->

		<!--[if IE]>
<script src="/equipment/Public/admin/assets/js/jquery-1.10.2.min.js"></script>
<![endif]-->

		<!--[if !IE]> -->

		<script type="text/javascript">
			window.jQuery || document.write("<script src='/equipment/Public/Admin/assets/js/jquery-2.0.3.min.js'>"+"<"+"script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='/equipment/Public/admin/assets/js/jquery-1.10.2.min.js'>"+"<"+"script>");
</script>
<![endif]-->

		<script type="text/javascript">
			if("ontouchend" in document) document.write("<script src='/equipment/Public/admin/assets/js/jquery.mobile.custom.min.js'>"+"<"+"script>");
		</script>
		<script src="/equipment/Public/admin/assets/js/bootstrap.min.js"></script>
		<script src="/equipment/Public/admin/assets/js/typeahead-bs2.min.js"></script>

		<!-- page specific plugin scripts -->

		<!--[if lte IE 8]>
		  <script src="/equipment/Public/admin/assets/js/excanvas.min.js"></script>
		<![endif]-->

		<script src="/equipment/Public/admin/assets/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/equipment/Public/admin/assets/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/equipment/Public/admin/assets/js/jquery.slimscroll.min.js"></script>
		<script src="/equipment/Public/admin/assets/js/jquery.easy-pie-chart.min.js"></script>
		<script src="/equipment/Public/admin/assets/js/jquery.sparkline.min.js"></script>
		<script src="/equipment/Public/admin/assets/js/flot/jquery.flot.min.js"></script>
		<script src="/equipment/Public/admin/assets/js/flot/jquery.flot.pie.min.js"></script>
		<script src="/equipment/Public/admin/assets/js/flot/jquery.flot.resize.min.js"></script>

		<!-- ace scripts -->

		<script src="/equipment/Public/admin/assets/js/ace-elements.min.js"></script>
		<script src="/equipment/Public/admin/assets/js/ace.min.js"></script>
		<!-- inline scripts related to this page -->
		
<script type="text/javascript">
<!--
$(".delposts").click(function(){
    if(!confirm("确定删除此账号?")){
        return false;
    }
});

//-->
</script>

		</html>