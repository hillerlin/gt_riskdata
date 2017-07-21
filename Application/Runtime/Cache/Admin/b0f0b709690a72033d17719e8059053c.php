<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
<!--		<link rel="stylesheet" href="/Public/plugins/layui/css/layui.css" media="all" />
		<link rel="stylesheet" href="/Public/css/main.css" />-->

		<!--bootstrap模块--->
		<!-- Loading Bootstrap -->
		<link href="/Public/plugins/bootstrap/bootstrap/css/bootstrap.css" rel="stylesheet">

		<!-- Loading Stylesheets -->
		<link href="/Public/plugins/bootstrap/css/archon.css" rel="stylesheet">
		<link href="/Public/plugins/bootstrap/css/responsive.css" rel="stylesheet">
		<link href="/Public/plugins/bootstrap/css/prettify.css" rel="stylesheet">
		<link href="/Public/plugins/bootstrap/css/style.css" rel="stylesheet">

		<!-- Loading Custom Stylesheets -->
		<link href="/Public/plugins/bootstrap/css/custom.css" rel="stylesheet">

		<link rel="shortcut icon" href="/Public/plugins/bootstrap/images/favicon.ico">

	</head>

	<body>
<!--		<div class="admin-main">
			<blockquote class="layui-elem-quote">
				<p>本模板基于LayUI实现 ,支持所有LayUI组件.的auth管理后台</p>
								
			</blockquote>
			<fieldset class="layui-elem-field">
				<legend></legend>
				<div class="layui-field-box">
					<fieldset class="layui-elem-field layui-field-title">
						<legend>版本号:# v0.01 2016-11-20</legend>
						<div class="layui-field-box">
							<p>1、基本布局 tab + iframe</p>
							<p>2、动态添加，删除tab</p>
							<p>3、表格样式</p>
							<p>4、分页组件</p>
						</div>
					</fieldset>
				</div>
			</fieldset>
		</div>-->

<div class="frame">
	<!-- Main content starts here-->
	<div class="content" style="margin-left: 0px;">
		<div id="main-content">
			<div class="row">
				<div class="col-mod-12">
					<ul class="breadcrumb">
						<li><a href="index.html">Archon Admin</a></li>
						<li><a href="index.html">Dashboard</a></li>
						<li class="active">Bread Crumb</li>
					</ul>
				</div>
			</div>
			<div class="row" style="margin-right: -15px;
             margin-left: -15px;">
				<div class="col-sm-3">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<span class="label label-success pull-right">今日</span>
							<h5>新商品 </h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins">10(个)</h1>

							<div class="stat-percent font-bold text-success">
							</div>

						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<span class="label label-info pull-right">今日</span>
							<h5>参与人次</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins">2800(次)</h1>

							<div class="stat-percent font-bold text-info">
							</div>

						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<span class="label label-primary pull-right">今天</span>
							<h5>新增用户</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins">180(人)</h1>

							<div class="stat-percent font-bold text-navy">
							</div>

						</div>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="ibox float-e-margins">
						<div class="ibox-title">
							<span class="label label-danger pull-right">今天</span>
							<h5>最火商品</h5>
						</div>
						<div class="ibox-content">
							<h1 class="no-margins">iPhone6s</h1>

							<div class="stat-percent font-bold text-danger">
							</div>

						</div>
					</div>
				</div>
			</div>

			<div class="col_6">
				<h2>农信分</h2>
				<div class="score_item_bd item_score"><span>468<i class="score_item_unit">分</i></span></div>
			</div>

			<!-- 内容 -->
<!--			{__CONTENT__}-->
		</div><!-- /Main Content  @7 -->

	</div><!-- / Content @5 -->

</div> <!-- Frame -->



		<!-- Load JS here for greater good =============================-->
		<script src="/Public/plugins/bootstrap/js/jquery-1.8.3.min.js"></script>
		<script src="/Public/plugins/bootstrap/js/jquery-ui-1.10.3.custom.min.js"></script>
		<script src="/Public/plugins/bootstrap/js/jquery.ui.touch-punch.min.js"></script>
		<script src="/Public/plugins/bootstrap/js/bootstrap.min.js"></script>
		<script src="/Public/plugins/bootstrap/js/bootstrap-select.js"></script>
		<script src="/Public/plugins/bootstrap/js/bootstrap-switch.js"></script>
		<script src="/Public/plugins/bootstrap/js/jquery.tagsinput.js"></script>
		<script src="/Public/plugins/bootstrap/js/jquery.placeholder.js"></script>
		<script src="/Public/plugins/bootstrap/js/bootstrap-typeahead.js"></script>
		<script src="/Public/plugins/bootstrap/js/application.js"></script>
		<script src="/Public/plugins/bootstrap/js/moment.min.js"></script>
		<script src="/Public/plugins/bootstrap/js/jquery.dataTables.min.js"></script>
		<script src="/Public/plugins/bootstrap/js/jquery.sortable.js"></script>
		<script type="text/javascript" src="/Public/plugins/bootstrap/js/jquery.gritter.js"></script>

		<!-- Charts  =============================-->
		<script src="/Public/plugins/bootstrap/js/charts/jquery.flot.js"></script>
		<script src="/Public/plugins/bootstrap/js/charts/jquery.flot.resize.js"></script>
		<script src="/Public/plugins/bootstrap/js/charts/jquery.flot.stack.js"></script>
		<script src="/Public/plugins/bootstrap/js/charts/jquery.flot.pie.min.js"></script>
		<script src="/Public/plugins/bootstrap/js/charts/jquery.sparkline.min.js"></script>
		<script src="/Public/plugins/bootstrap/js/jquery.knob.js"></script>


		<!-- NVD3 graphs  =============================-->
<!--		<script src="/Public/plugins/bootstrap/js/nvd3/lib/d3.v3.js"></script>
		<script src="/Public/plugins/bootstrap/js/nvd3/nv.d3.js"></script>
		<script src="/Public/plugins/bootstrap/js/nvd3/src/models/legend.js"></script>
		<script src="/Public/plugins/bootstrap/js/nvd3/src/models/pie.js"></script>
		<script src="/Public/plugins/bootstrap/js/nvd3/src/models/pieChart.js"></script>
		<script src="/Public/plugins/bootstrap/js/nvd3/src/utils.js"></script>
		<script src="/Public/plugins/bootstrap/js/nvd3/sample.nvd3.js"></script>-->

		<!-- Map and icons on map-->
		<!--
        <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false"></script>
        <script src="/Public/plugins/bootstrap/js/map-icons.js"></script>
        -->

		<!-- Archon JS =============================-->
		<script src="/Public/plugins/bootstrap/js/archon.js"></script>
		<script src="/Public/plugins/bootstrap/js/knobs-custom.js"></script>
		<script src="/Public/plugins/bootstrap/js/sparkline-custom.js"></script>
		<script src="/Public/plugins/bootstrap/js/dashboard-custom.js"></script>


	</body>

</html>