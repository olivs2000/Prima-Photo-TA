<!DOCTYPE html>
<!-- 
Template Name: Conquer - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.2.0
Version: 2.0
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/conquer-responsive-admin-dashboard-template/3716838?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->
<!-- BEGIN HEAD -->
<head>
<meta charset="utf-8"/>
<title>Prima Photo | Admin Dashboard Template</title>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<meta content="" name="description"/>
<meta content="" name="author"/>
<meta name="MobileOptimized" content="320">
<!-- BEGIN GLOBAL MANDATORY STYLES -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.css" rel="stylesheet" type="text/css"/>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/plugins/simple-line-icons/simple-line-icons.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/plugins/uniform/css/uniform.default.css')}}" rel="stylesheet" type="text/css"/>
<!-- END GLOBAL MANDATORY STYLES -->
<!-- BEGIN PAGE LEVEL PLUGIN STYLES -->
<link href="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker-bs3.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/plugins/fullcalendar/fullcalendar/fullcalendar.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/plugins/jqvmap/jqvmap/jqvmap.css')}}" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGIN STYLES -->
<link href="{{ asset('assets/plugins/select2/select2.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.css')}}" rel="stylesheet" type="text/css"/>
<!-- BEGIN THEME STYLES -->
<link href="{{ asset('assets/css/style-conquer.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/style-responsive.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/plugins.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/pages/tasks.css')}}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('assets/css/themes/light.css')}}" rel="stylesheet" type="text/css" id="style_color"/>
<link href="{{ asset('assets/css/custom.css')}}" rel="stylesheet" type="text/css"/>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/dropzone.min.js" type="text/javascript"></script> --}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/dropzone.min.js" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery-1.11.0.min.js')}}" type="text/javascript"></script>




<!-- END THEME STYLES -->
<link rel="shortcut icon" href="favicon.ico"/>
@yield('javascript')
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="page-header-fixed">
<!-- BEGIN HEADER -->
<div class="header navbar navbar-fixed-top">
	<!-- BEGIN TOP NAVIGATION BAR -->
	<div class="header-inner">
		<!-- BEGIN LOGO -->
		<div class="page-logo">
            <a href="index.html">
                <img src="{{ asset('assets/img/primaphoto1.png')}}" alt="logo"/>
            </a>
        </div>

		<!-- END LOGO -->
		<!-- BEGIN RESPONSIVE MENU TOGGLER -->
		<a href="javascript:;" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<img src="{{ asset('assets/img/menu-toggler.png')}}" alt=""/>
		</a>
		<!-- END RESPONSIVE MENU TOGGLER -->
		<!-- BEGIN TOP NAVIGATION MENU -->
		<ul class="nav navbar-nav pull-right">

			<!-- BEGIN NOTIFICATION DROPDOWN -->
			<li class="dropdown" id="header_notification_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="icon-bell"></i>
				<span class="badge badge-success">
				6 </span>
				</a>
				<ul class="dropdown-menu extended notification">
					<li>
						<p>
							 You have 14 new notifications
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-success">
								<i class="fa fa-plus"></i>
								</span>
								New user registered. <span class="time">
								Just now </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-danger">
								<i class="fa fa-bolt"></i>
								</span>
								Server #12 overloaded. <span class="time">
								15 mins </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-warning">
								<i class="fa fa-bell"></i>
								</span>
								Server #2 not responding. <span class="time">
								22 mins </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-info">
								<i class="fa fa-bullhorn"></i>
								</span>
								Application error. <span class="time">
								40 mins </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-danger">
								<i class="fa fa-bolt"></i>
								</span>
								Database overloaded 68%. <span class="time">
								2 hrs </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-danger">
								<i class="fa fa-bolt"></i>
								</span>
								2 user IP blocked. <span class="time">
								5 hrs </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-warning">
								<i class="fa fa-bell"></i>
								</span>
								Storage Server #4 not responding. <span class="time">
								45 mins </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-info">
								<i class="fa fa-bullhorn"></i>
								</span>
								System Error. <span class="time">
								55 mins </span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="label label-sm label-icon label-danger">
								<i class="fa fa-bolt"></i>
								</span>
								Database overloaded 68%. <span class="time">
								2 hrs </span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="#">See all notifications <i class="fa fa-angle-right"></i></a>
					</li>
				</ul>
			</li>
			<!-- END NOTIFICATION DROPDOWN -->

			<!-- BEGIN INBOX DROPDOWN -->
			<li class="dropdown" id="header_inbox_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="icon-envelope-open"></i>
				<span class="badge badge-info">
				5 </span>
				</a>
				<ul class="dropdown-menu extended inbox">
					<li>
						<p>
							 You have 12 new messages
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
								<img src="{{ asset('./assets/img/avatar2.jpg')}}" alt=""/>
								</span>
								<span class="subject">
								<span class="from">
								Lisa Wong </span>
								<span class="time">
								Just Now </span>
								</span>
								<span class="message">
								Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
								<img src="{{ asset('./assets/img/avatar3.jpg')}}" alt=""/>
								</span>
								<span class="subject">
								<span class="from">
								Richard Doe </span>
								<span class="time">
								16 mins </span>
								</span>
								<span class="message">
								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
								<img src="{{ asset('./assets/img/avatar1.jpg')}}" alt=""/>
								</span>
								<span class="subject">
								<span class="from">
								Bob Nilson </span>
								<span class="time">
								2 hrs </span>
								</span>
								<span class="message">
								Vivamus sed nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
								<img src="{{ asset('./assets/img/avatar2.jpg')}}" alt=""/>
								</span>
								<span class="subject">
								<span class="from">
								Lisa Wong </span>
								<span class="time">
								40 mins </span>
								</span>
								<span class="message">
								Vivamus sed auctor 40% nibh congue nibh... </span>
								</a>
							</li>
							<li>
								<a href="inbox.html?a=view">
								<span class="photo">
								<img src="{{ asset('./assets/img/avatar3.jpg')}}" alt=""/>
								</span>
								<span class="subject">
								<span class="from">
								Richard Doe </span>
								<span class="time">
								46 mins </span>
								</span>
								<span class="message">
								Vivamus sed congue nibh auctor nibh congue nibh. auctor nibh auctor nibh... </span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="inbox.html">See all messages <i class="fa fa-angle-right"></i></a>
					</li>
				</ul>
			</li>
			<!-- END INBOX DROPDOWN -->

			<!-- BEGIN TODO DROPDOWN -->
			<li class="dropdown" id="header_task_bar">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<i class="icon-calendar"></i>
				<span class="badge badge-warning">
				5 </span>
				</a>
				<ul class="dropdown-menu extended tasks">
					<li>
						<p>
							 You have 12 pending tasks
						</p>
					</li>
					<li>
						<ul class="dropdown-menu-list scroller" style="height: 250px;">
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								New release v1.2 </span>
								<span class="percent">
								30% </span>
								</span>
								<span class="progress">
								<span style="width: 40%;" class="progress-bar progress-bar-success" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								40% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								Application deployment </span>
								<span class="percent">
								65% </span>
								</span>
								<span class="progress progress-striped">
								<span style="width: 65%;" class="progress-bar progress-bar-danger" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								65% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								Mobile app release </span>
								<span class="percent">
								98% </span>
								</span>
								<span class="progress">
								<span style="width: 98%;" class="progress-bar progress-bar-success" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								98% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								Database migration </span>
								<span class="percent">
								10% </span>
								</span>
								<span class="progress progress-striped">
								<span style="width: 10%;" class="progress-bar progress-bar-warning" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								10% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								Web server upgrade </span>
								<span class="percent">
								58% </span>
								</span>
								<span class="progress progress-striped">
								<span style="width: 58%;" class="progress-bar progress-bar-info" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								58% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								Mobile development </span>
								<span class="percent">
								85% </span>
								</span>
								<span class="progress progress-striped">
								<span style="width: 85%;" class="progress-bar progress-bar-success" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								85% Complete </span>
								</span>
								</span>
								</a>
							</li>
							<li>
								<a href="#">
								<span class="task">
								<span class="desc">
								New UI release </span>
								<span class="percent">
								18% </span>
								</span>
								<span class="progress progress-striped">
								<span style="width: 18%;" class="progress-bar progress-bar-important" aria-valuenow="18" aria-valuemin="0" aria-valuemax="100">
								<span class="sr-only">
								18% Complete </span>
								</span>
								</span>
								</a>
							</li>
						</ul>
					</li>
					<li class="external">
						<a href="#">See all tasks <i class="fa fa-angle-right"></i></a>
					</li>
				</ul>
			</li>
			<!-- END TODO DROPDOWN -->
			
			
			<li class="devider">
				 &nbsp;
			</li>

			

			<!-- BEGIN USER LOGIN DROPDOWN -->
			<li class="dropdown user">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
				<!-- <img alt="" src="{{ asset('assets/img/avatar3_small.jpg')}}"/> -->
				<span class="username username-hide-on-mobile">
				@if(Auth::user())
				{{Auth::user()->name}}
				@else
				Silahkan Melakukan Login!
				@endif				
				</span>
				<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu">
					<li>
						<a href="extra_profile.html"><i class="fa fa-user"></i> My Profile</a>
					</li>
					<li>
						<a href="page_calendar.html"><i class="fa fa-calendar"></i> My Calendar</a>
					</li>
					<li>
						<a href="{{url('email')}}"><i class="fa fa-envelope"></i> My Inbox <span class="badge badge-danger">
						3 </span>
						</a>
					</li>
					<!-- <li>
						<a href="#"><i class="fa fa-tasks"></i> My Tasks <span class="badge badge-success">
						7 </span>
						</a>
					</li> -->
					<li class="divider">
					</li>
					<li>
						<form action="{{route('logout')}}" method="post">
						@csrf
						<i class="fa fa-logout"></i></a>
						<input type='submit' class='btn btn-xs btn-danger' value='Logout'>
						</form>
					</li>
				</ul>
			</li>
			<!-- END USER LOGIN DROPDOWN -->
		</ul>
		<!-- END TOP NAVIGATION MENU -->
	</div>
	<!-- END TOP NAVIGATION BAR -->
</div>
<!-- END HEADER -->
<div class="clearfix">
</div>
<!-- BEGIN CONTAINER -->
<div class="page-container">
	<!-- BEGIN SIDEBAR -->
	<div class="page-sidebar-wrapper">
		<div class="page-sidebar navbar-collapse collapse">
			<!-- BEGIN SIDEBAR MENU -->
			<!-- DOC: for circle icon style menu apply page-sidebar-menu-circle-icons class right after sidebar-toggler-wrapper -->
			<ul class="page-sidebar-menu">
				<li class="sidebar-toggler-wrapper">
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
					<div class="sidebar-toggler">
					</div>
					<div class="clearfix">
					</div>
					<!-- BEGIN SIDEBAR TOGGLER BUTTON -->
				</li>
				<li class="sidebar-search-wrapper">
					<form class="search-form" role="form" action="index.html" method="get">
						<div class="input-icon right">
							<i class="icon-magnifier"></i>
							<input type="text" class="form-control" name="query" placeholder="Search...">
						</div>
					</form>
				</li>
				
				<!-- start -->
				<li class="start active">
					<a href="{{url('login')}}">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>

			<!-- <li >
				<a href="{{url('datafoto')}}" >
				<i class="icon-puzzle"></i>
				<span class="title">Data Foto</span>
				</a>
			</li>
			<li >
				<a href="{{url('datacetak')}}" >
				<i class="icon-puzzle"></i>
				<span class="title">Data Cetak</span>
				</a>
			</li>
			<li >
				<a href="{{url('pegawai')}}" >
				<i class="icon-users"></i>
				<span class="title">Pegawai</span>
				</a>
			</li> -->


			<li >
				<a href="{{url('dataadmin')}}">
				<i class="icon-user"></i>
				<span class="title">Data Admin</span>
				
				</a>
				
			</li>

			<li >
				<a href="javascript:;">
				<i class="icon-camera"></i>
				<span class="title">Fotografer</span>
				<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="{{url('datafotografer')}}" >
					    <i class="icon-user"></i>
				        <span class="title">Data Fotografer</span>
				        </a>
					</li>
					<li>
						<a href="{{url('jadwalfotografer')}}" >
					    <i class="icon-calendar"></i>
				        <span class="title">Jadwal Fotografer</span>
				        </a>
					</li>
					<li>
						<a href="{{url('alatfotografi')}}" >
					    <i class="icon-camera"></i>
				        <span class="title">Data Alat Fotografi</span>
				        </a>
					</li>
					<li>
						<a href="{{url('collaborateadmin')}}" >
					    <i class="icon-envelope"></i>
				        <span class="title">Collaborate</span>
				        </a>
					</li>
				</ul>
			</li>

			<li >
				<a href="javascript:;">
				<i class="icon-users"></i>
				<span class="title">Pelanggan</span>
				<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="{{url('datapelanggan')}}" >
					    <i class="icon-user"></i>
				        <span class="title">Data Pelanggan</span>
				        </a>
					</li>
					<li>
						<a href="{{url('datapemesanan')}}" >
					    <i class="icon-folder"></i>
				        <span class="title">Data Pemesanan</span>
				        </a>
					</li>
					<li>
						<a href="{{url('detailpemesanan')}}" >
					    <i class="icon-list"></i>
				        <span class="title">Detail Pemesanan</span>
				        </a>
					</li>
				</ul>
			</li>

			@can('view-permission')
			<li >
				<a href="javascript:;">
				<i class="icon-briefcase"></i>
				<span class="title">Supplier</span>
				<span class="arrow "></span>
				</a>
				<ul class="sub-menu">
					<li>
						<a href="{{url('datapembelian')}}" >
					    <i class="icon-tag"></i>
				        <span class="title">Data Pembelian</span>
				        </a>
					</li>
				</ul>
			</li>
			@endcan


			<li >
				<a href="javascript:;">
				<i class="icon-credit-card"></i>
				<span class="title">Penjualan</span>
				<span class="arrow "></span>
				</a>     
				<ul class="sub-menu">
					<li>
						<a href="{{url('paketadmin')}}" >
					    <i class="icon-puzzle"></i>
				        <span class="title">Paket</span>
				        </a>
					</li>
					<li>
						<a href="{{url('produkadmin')}}" >
					    <i class="icon-picture"></i>
				        <span class="title">Produk</span>
				        </a>
					</li>
					<li>
						<a href="{{url('layananadmin')}}" >
					    <i class="icon-crop"></i>
				        <span class="title">Layanan</span>
				        </a>
					</li>
					<li>
						<a href="{{url('penyewaanalatadmin')}}" >
					    <i class="icon-camera"></i>
				        <span class="title">Alat Fotografi</span>
				        </a>
					</li>
				</ul>
			</li>
			
			<li>
				<a href="{{url('logout')}}" >
				<i class="close"></i>
				<span class="title">Logout</span>
				</a>
			</li>
				
			<!-- END SIDEBAR MENU -->
		</div>
	</div>
	<!-- END SIDEBAR -->
	<!-- BEGIN CONTENT -->
	<div class="page-content-wrapper">
		<div class="page-content">
        @yield("content")


        </div>
	</div>
	<!-- END CONTENT -->
</div>
<!-- END CONTAINER -->
<!-- BEGIN FOOTER -->
<div class="footer">
	<div class="footer-inner">
		 2022 &copy; Prima Photo.
	</div>
	<div class="footer-tools">
		<span class="go-top">
		<i class="fa fa-angle-up"></i>
		</span>
	</div>
</div>
<!-- END FOOTER -->
<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset('assets/plugins/jquery-migrate-1.2.1.min.js')}}" type="text/javascript"></script>
<!-- IMPORTANT! Load jquery-ui-1.10.3.custom.min.js before bootstrap.min.js to fix bootstrap tooltip conflict with jquery ui tooltip -->
<script src="{{ asset('assets/plugins/jquery-ui/jquery-ui-1.10.3.custom.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery.blockui.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery.editable.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/uniform/jquery.uniform.min.js')}}" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="{{ asset('assets/plugins/jqvmap/jqvmap/jquery.vmap.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery.peity.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery.pulsate.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery-knob/js/jquery.knob.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/flot/jquery.flot.resize.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/moment.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap-daterangepicker/daterangepicker.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/gritter/js/jquery.gritter.js')}}" type="text/javascript"></script>
<!-- IMPORTANT! fullcalendar depends on jquery-ui-1.10.3.custom.min.js for drag & drop support -->
<script src="{{ asset('assets/plugins/fullcalendar/fullcalendar/fullcalendar.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery-easypiechart/jquery.easypiechart.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/jquery.sparkline.min.js')}}" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<script src="{{ asset('assets/plugins/select2/select2.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/datatables/media/js/jquery.dataTables.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/datatables/plugins/bootstrap/dataTables.bootstrap.js')}}" type="text/javascript"></script>
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset('assets/scripts/app.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/scripts/index.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/scripts/tasks.js')}}" type="text/javascript"></script>
{{-- <script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script> --}}
<script src="https://js.pusher.com/7.2/pusher.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">  
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


<!-- END PAGE LEVEL SCRIPTS -->
<script>
jQuery(document).ready(function() {    
   App.init(); // initlayout and core plugins
//    Index.init();
//    Index.initJQVMAP(); // init index page's custom scripts
//    Index.initCalendar(); // init index page's custom scripts
//    Index.initCharts(); // init index page's custom scripts
//    Index.initChat();
//    Index.initMiniCharts();
//    Index.initPeityElements();
//    Index.initKnowElements();
//    Index.initDashboardDaterange();
//    Tasks.initDashboardWidget();
$('#dataTable').DataTable();

});
</script>

@section('scripts')
{{-- @if(auth()->user()->is_admin) --}}
    <script>
    function sendMarkRequest(id = null) {
        return $.ajax("{{ route('collaborate.markNotification') }}", {
            method: 'POST',
            data: {
                _token,
                id
            }
        });
    }
    $(function() {
        $('.mark-as-read').click(function() {
            let request = sendMarkRequest($(this).data('id'));
            request.done(() => {
                $(this).parents('div.alert').remove();
            });
        });
        $('#mark-all').click(function() {
            let request = sendMarkRequest();
            request.done(() => {
                $('div.alert').remove();
            })
        });
    });
    </script>
{{-- @endif --}}
@endsection

@yield('initialscript')
<!-- END JAVASCRIPTS -->
</body>
<!-- END BODY -->
</html>