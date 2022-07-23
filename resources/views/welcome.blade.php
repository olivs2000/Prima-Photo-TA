@extends('layout.conquer')

@section('content')
<h3 class="page-title">
	Welcome to Prima Photo Studio
</h3>
	<div class="page-bar">
	    <ul class="page-breadcrumb">
			<li>
				<i class="fa fa-home"></i>
				<a href="index.html">Home</a>
				<i class="fa fa-angle-right"></i>
			</li>
			<li>
				<a href="#">Prima Photo</a>
			</li>

<li >
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" onclick="showInfo()">
<i class="icon-bulb"></a></i>
</li>

</ul>
</div>

<div class="content">
<div id='showinfo'>
</div>

<!--isi -->
<!-- <div class="title m-b-md" id="judul">
    Prima Photo
</div>
<div class="links">
	<a class="btn btn-default" data-toggle="modal" href="#disclaimer">Disclaimer</a>
</div>  -->


<!-- BEGIN OVERVIEW STATISTIC BARS-->
<div class="row stats-overview-cont">
    <div class="col-md-2 col-sm-4">
      <div class="stats-overview stat-block">
        <div class="display stat ok huge">
          <span class="line-chart">
          5, 6, 7, 11, 14, 10, 15, 19, 15, 2 </span>
          <div class="percent">
              +66%
          </div>
        </div>
        <div class="details">
          <div class="title">
              Users
          </div>
          <div class="numbers">
              1360
          </div>
        </div>
        <div class="progress">
          <span style="width: 40%;" class="progress-bar progress-bar-info" aria-valuenow="66" aria-valuemin="0" aria-valuemax="100">
          <span class="sr-only">
          66% Complete </span>
          </span>
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-4">
      <div class="stats-overview stat-block">
        <div class="display stat good huge">
          <span class="line-chart">
          2,6,8,12, 11, 15, 16, 11, 16, 11, 10, 3, 7, 8, 12, 19 </span>
          <div class="percent">
              +16%
          </div>
        </div>
        <div class="details">
          <div class="title">
              Site Visits
          </div>
          <div class="numbers">
              1800
          </div>
          <div class="progress">
            <span style="width: 16%;" class="progress-bar progress-bar-warning" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">
            <span class="sr-only">
            16% Complete </span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-4">
      <div class="stats-overview stat-block">
        <div class="display stat bad huge">
          <span class="line-chart">
          2,6,8,11, 14, 11, 12, 13, 15, 12, 9, 5, 11, 12, 15, 9,3 </span>
          <div class="percent">
              +6%
          </div>
        </div>
        <div class="details">
          <div class="title">
              Orders
          </div>
          <div class="numbers">
              509
          </div>
          <div class="progress">
            <span style="width: 16%;" class="progress-bar progress-bar-success" aria-valuenow="16" aria-valuemin="0" aria-valuemax="100">
            <span class="sr-only">
            16% Complete </span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-4">
      <div class="stats-overview stat-block">
        <div class="display stat good huge">
          <span class="bar-chart">
          1,4,9,12, 10, 11, 12, 15, 12, 11, 9, 12, 15, 19, 14, 13, 15 </span>
          <div class="percent">
              +86%
          </div>
        </div>
        <div class="details">
          <div class="title">
              Revenue
          </div>
          <div class="numbers">
              1550
          </div>
          <div class="progress">
            <span style="width: 56%;" class="progress-bar progress-bar-warning" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100">
            <span class="sr-only">
            56% Complete </span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-4">
      <div class="stats-overview stat-block">
        <div class="display stat ok huge">
          <span class="line-chart">
          2,6,8,12, 11, 15, 16, 17, 14, 12, 10, 8, 10, 2, 4, 12, 19 </span>
          <div class="percent">
              +72%
          </div>
        </div>
        <div class="details">
          <div class="title">
              Sales
          </div>
          <div class="numbers">
              9600
          </div>
          <div class="progress">
            <span style="width: 72%;" class="progress-bar progress-bar-danger" aria-valuenow="72" aria-valuemin="0" aria-valuemax="100">
            <span class="sr-only">
            72% Complete </span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-2 col-sm-4">
      <div class="stats-overview stat-block">
        <div class="display stat bad huge">
          <span class="line-chart">
          1,7,9,11, 14, 12, 6, 7, 4, 2, 9, 8, 11, 12, 14, 12, 10 </span>
          <div class="percent">
              +15%
          </div>
        </div>
        <div class="details">
          <div class="title">
              Stock
          </div>
          <div class="numbers">
              2090
          </div>
          <div class="progress">
            <span style="width: 15%;" class="progress-bar progress-bar-success" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100">
            <span class="sr-only">
            15% Complete </span>
            </span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END OVERVIEW STATISTIC BARS-->


<!-- START TASK LIST -->
<div class="col-md-6 col-sm-6">
<div class="portlet tasks-widget">
<div class="portlet-title">

<div class="caption">
    <i class="fa fa-check"></i>Tasks
</div>

<div class="tools">
    <a href="#portlet-config" data-toggle="modal" class="config"></a>
    <a href="" class="reload"></a>
</div>

<div class="actions">
    <div class="btn-group">
        <a class="btn btn-info btn-sm dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">More <i class="fa fa-angle-down"></i></a>
        <ul class="dropdown-menu pull-right">
        <li>
            <a href="#"><i class="i"></i> All Project</a>
        </li>
        <li class="divider">
        </li>
        <li>
            <a href="#">AirAsia</a>
        </li>
        <li>
            <a href="#">Cruise</a>
        </li>
        <li>
            <a href="#">HSBC</a>
        </li>
        <li class="divider">
        </li>
        <li>
            <a href="#">Pending <span class="badge badge-important">4 </span></a>
        </li>
        <li>
            <a href="#">Completed <span class="badge badge-success">12 </span></a>
        </li>
        <li>
            <a href="#">Overdue <span class="badge badge-warning">9 </span></a>
        </li>
        </ul>
    </div>
</div>

</div>

<div class="portlet-body">

<div class="task-content">
<div class="scroller" style="height: 305px;" data-always-visible="1" data-rail-visible1="1">
  <!-- START BODY TASK LIST -->
  <ul class="task-list">
    <li>
    <div class="task-checkbox">
        <input type="checkbox" class="liChild" value="" />
    </div>

    <div class="task-title">
        <span class="task-title-sp">Present 2013 Year IPO Statistics at Board Meeting </span>
        <span class="label label-sm label-success">Company </span>
        <span class="task-bell"><i class="fa fa-bell-o"></i></span>
    </div>

    <div class="task-config">
        <div class="task-config-btn btn-group">
            <a class="btn btn-xs btn-default dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i></a>
                <ul class="dropdown-menu pull-right">
                    <li>
                        <a href="#"><i class="fa fa-check"></i> Complete</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-trash-o"></i> Cancel</a>
                    </li>
                </ul>
            </div>
        </div>
    </li>

    <li>
      <div class="task-checkbox">
          <input type="checkbox" class="liChild" value="" />
      </div>
      <div class="task-title">
          <span class="task-title-sp">Hold An Interview for Marketing Manager Position </span>
          <span class="label label-sm label-danger">Marketing </span>
      </div>
      <div class="task-config">
          <div class="task-config-btn btn-group">
            <a class="btn btn-xs btn-default dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
            <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i></a>
              <ul class="dropdown-menu pull-right">
                <li>
                    <a href="#"><i class="fa fa-check"></i> Complete</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-trash-o"></i> Cancel</a>
                </li>
              </ul>
          </div>
      </div>
    </li>

    <li>
      <div class="task-checkbox">
          <input type="checkbox" class="liChild" value="" />
      </div>
      <div class="task-title">
          <span class="task-title-sp">AirAsia Intranet System Project Internal Meeting </span>
          <span class="label label-sm label-success">AirAsia </span>
          <span class="task-bell"><i class="fa fa-bell-o"></i></span>
      </div>
          <div class="task-config">
              <div class="task-config-btn btn-group">
                  <a class="btn btn-xs btn-default dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                      <i class="fa fa-cog"></i><i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu pull-right">
                      <li>
                          <a href="#"><i class="fa fa-check"></i> Complete</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-trash-o"></i> Cancel</a>
                      </li>
                  </ul>
          </div>
        </div>
    </li>

      <li>
        <div class="task-checkbox">
            <input type="checkbox" class="liChild" value="" />
        </div>
        <div class="task-title">
            <span class="task-title-sp">Technical Management Meeting </span>
            <span class="label label-sm label-warning">Company </span>
        </div>
          <div class="task-config">
              <div class="task-config-btn btn-group">
                  <a class="btn btn-xs btn-default dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="fa fa-cog"></i><i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu pull-right">
                      <li>
                          <a href="#"><i class="fa fa-check"></i> Complete</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-trash-o"></i> Cancel</a>
                      </li>
                  </ul>
              </div>
          </div>
      </li>

      <li>
          <div class="task-checkbox">
              <input type="checkbox" class="liChild" value="" />
          </div>
          <div class="task-title">
              <span class="task-title-sp">Kick-off Company CRM Mobile App Development </span>
              <span class="label label-sm label-info">Internal Products </span>
          </div>
          <div class="task-config">
              <div class="task-config-btn btn-group">
                  <a class="btn btn-xs btn-default dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="fa fa-cog"></i><i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu pull-right">
                      <li>
                          <a href="#"><i class="fa fa-check"></i> Complete</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-trash-o"></i> Cancel</a>
                      </li>
                  </ul>
              </div>
          </div>
      </li>

      <li>
          <div class="task-checkbox">
              <input type="checkbox" class="liChild" value="" />
          </div>
          <div class="task-title">
              <span class="task-title-sp">Prepare Commercial Offer For SmartVision Website Rewamp </span>
              <span class="label label-sm label-danger">SmartVision </span>
          </div>
          <div class="task-config">
              <div class="task-config-btn btn-group">
                  <a class="btn btn-xs btn-default dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="fa fa-cog"></i><i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu pull-right">
                      <li>
                          <a href="#"><i class="fa fa-check"></i> Complete</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-trash-o"></i> Cancel</a>
                      </li>
                  </ul>
              </div>
          </div>
      </li>

      <li>
          <div class="task-checkbox">
              <input type="checkbox" class="liChild" value="" />
          </div>
          <div class="task-title">
              <span class="task-title-sp">Sign-Off The Comercial Agreement With AutoSmart </span>
              <span class="label label-sm label-default">AutoSmart </span>
              <span class="task-bell"><i class="fa fa-bell-o"></i></span>
          </div>
          <div class="task-config">
              <div class="task-config-btn btn-group">
                  <a class="btn btn-xs btn-default dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="fa fa-cog"></i><i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu pull-right">
                      <li>
                          <a href="#"><i class="fa fa-check"></i> Complete</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-trash-o"></i> Cancel</a>
                      </li>
                  </ul>
              </div>
          </div>
      </li>

      <li>
          <div class="task-checkbox">
              <input type="checkbox" class="liChild" value="" />
          </div>
          <div class="task-title">
              <span class="task-title-sp">Company Staff Meeting </span>
              <span class="label label-sm label-success">Cruise </span>
              <span class="task-bell"><i class="fa fa-bell-o"></i></span>
          </div>
          <div class="task-config">
              <div class="task-config-btn btn-group">
                  <a class="btn btn-xs btn-default dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="fa fa-cog"></i><i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu pull-right">
                      <li>
                          <a href="#"><i class="fa fa-check"></i> Complete</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-trash-o"></i> Cancel</a>
                      </li>
                  </ul>
              </div>
          </div>
      </li>

      <li class="last-line">
          <div class="task-checkbox">
              <input type="checkbox" class="liChild" value="" />
          </div>
          <div class="task-title">
              <span class="task-title-sp">KeenThemes Investment Discussion </span>
              <span class="label label-sm label-warning">KeenThemes </span>
          </div>
          <div class="task-config">
              <div class="task-config-btn btn-group">
                  <a class="btn btn-xs btn-default dropdown-toggle" href="#" data-toggle="dropdown" data-hover="dropdown" data-close-others="true"><i class="fa fa-cog"></i><i class="fa fa-angle-down"></i></a>
                  <ul class="dropdown-menu pull-right">
                      <li>
                          <a href="#"><i class="fa fa-check"></i> Complete</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-pencil"></i> Edit</a>
                      </li>
                      <li>
                          <a href="#"><i class="fa fa-trash-o"></i> Cancel</a>
                      </li>
                  </ul>
              </div>
          </div>
      </li>
  </ul>

</div>
</div>

<!-- END BODY TASK LIST -->
<div class="task-footer"><span class="pull-right"><a href="#">See All Tasks</a> &nbsp; </span></div>

</div>
</div>
</div>
<!-- END TASK LIST -->




<!-- START NOTIFICATIONS -->
<div class="col-md-6 col-sm-12">
  <div class="portlet">
      <div class="portlet-title">
          <div class="caption">
              <i class="icon-bell"></i>Notifications
          </div>
          <div class="tools">
              <a href="" class="collapse"></a>
              <a href="#portlet-config" data-toggle="modal" class="config"></a>
              <a href="" class="reload"></a>
              <a href="" class="remove"></a>
          </div>
      </div>
      <div class="portlet-body">
          <!--BEGIN TABS-->
          <ul class="nav nav-tabs">
              <li class="active">
                  <a href="#tab_1_1" data-toggle="tab">System</a>
              </li>
              <li>
                  <a href="#tab_1_2" data-toggle="tab">Activities</a>
              </li>
              <li>
                  <a href="#tab_1_3" data-toggle="tab">Recent Users</a>
              </li>
          </ul>
          <div class="tab-content">
              <div class="tab-pane active" id="tab_1_1">
                  <div class="scroller" style="height: 250px;" data-always-visible="1" data-rail-visible="0">
                      <ul class="feeds">
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-success">
                                              <i class="fa fa-bell"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              You have 4 pending tasks. 
                                              <span class="label label-sm label-danger ">Take action <i class="fa fa-share-alt"></i>
                                              </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      Just now
                                  </div>
                              </div>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="col1">
                                      <div class="cont">
                                          <div class="cont-col1">
                                              <div class="label label-sm label-success">
                                                  <i class="fa fa-bell"></i>
                                              </div>
                                          </div>
                                          <div class="cont-col2">
                                              <div class="desc">
                                                  New version v1.4 just lunched!
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col2">
                                      <div class="date">
                                          20 mins
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-danger">
                                              <i class="fa fa-bolt"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              Database server #12 overloaded. Please fix the issue.
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      24 mins
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-info">
                                              <i class="fa fa-bullhorn"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              New order received. Please take care of it.
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      30 mins
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-success">
                                              <i class="fa fa-bullhorn"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              New order received. Please take care of it.
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      40 mins
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-warning">
                                              <i class="fa fa-plus"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              New user registered.
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      1.5 hours
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-success">
                                              <i class="fa fa-cogs"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              Web server hardware needs to be upgraded. 
                                              <span class="label label-sm label-default ">Overdue </span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      2 hours
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-default">
                                              <i class="fa fa-bullhorn"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              New order received. Please take care of it.
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      3 hours
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-warning">
                                              <i class="fa fa-bullhorn"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              New order received. Please take care of it.
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      5 hours
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-info">
                                              <i class="fa fa-bullhorn"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              New order received. Please take care of it.
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      18 hours
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-default">
                                              <i class="fa fa-bullhorn"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              New order received. Please take care of it.
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      21 hours
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-info">
                                              <i class="fa fa-bullhorn"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              New order received. Please take care of it.
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      22 hours
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-default">
                                              <i class="fa fa-bullhorn"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              New order received. Please take care of it.
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      21 hours
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-info">
                                              <i class="fa fa-bullhorn"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              New order received. Please take care of it.
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      22 hours
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-default">
                                              <i class="fa fa-bullhorn"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              New order received. Please take care of it.
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      21 hours
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-info">
                                              <i class="fa fa-bullhorn"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              New order received. Please take care of it.
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      22 hours
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-default">
                                              <i class="fa fa-bullhorn"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              New order received. Please take care of it.
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      21 hours
                                  </div>
                              </div>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-info">
                                              <i class="fa fa-bullhorn"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              New order received. Please take care of it.
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      22 hours
                                  </div>
                              </div>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="tab-pane" id="tab_1_2">
                  <div class="scroller" style="height: 250px;" data-always-visible="1" data-rail-visible1="1">
                      <ul class="feeds">
                          <li>
                              <a href="#">
                                  <div class="col1">
                                      <div class="cont">
                                          <div class="cont-col1">
                                              <div class="label label-sm label-success">
                                                  <i class="fa fa-bell"></i>
                                              </div>
                                          </div>
                                          <div class="cont-col2">
                                              <div class="desc">
                                                  New user registered
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col2">
                                      <div class="date">
                                          Just now
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="col1">
                                      <div class="cont">
                                          <div class="cont-col1">
                                              <div class="label label-sm label-success">
                                                  <i class="fa fa-bell"></i>
                                              </div>
                                          </div>
                                          <div class="cont-col2">
                                              <div class="desc">
                                                  New order received
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col2">
                                      <div class="date">
                                          10 mins
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <div class="col1">
                                  <div class="cont">
                                      <div class="cont-col1">
                                          <div class="label label-sm label-danger">
                                              <i class="fa fa-bolt"></i>
                                          </div>
                                      </div>
                                      <div class="cont-col2">
                                          <div class="desc">
                                              Order #24DOP4 has been rejected. <span class="label label-sm label-danger ">
                                              Take action <i class="fa fa-share-alt"></i></span>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col2">
                                  <div class="date">
                                      24 mins
                                  </div>
                              </div>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="col1">
                                      <div class="cont">
                                          <div class="cont-col1">
                                              <div class="label label-sm label-success">
                                                  <i class="fa fa-bell"></i>
                                              </div>
                                          </div>
                                          <div class="cont-col2">
                                              <div class="desc">
                                                  New user registered
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col2">
                                      <div class="date">
                                          Just now
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="col1">
                                      <div class="cont">
                                          <div class="cont-col1">
                                              <div class="label label-sm label-success">
                                                  <i class="fa fa-bell"></i>
                                              </div>
                                          </div>
                                          <div class="cont-col2">
                                              <div class="desc">
                                                  New user registered
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col2">
                                      <div class="date">
                                          Just now
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="col1">
                                      <div class="cont">
                                          <div class="cont-col1">
                                              <div class="label label-sm label-success">
                                                  <i class="fa fa-bell"></i>
                                              </div>
                                          </div>
                                          <div class="cont-col2">
                                              <div class="desc">
                                                  New user registered
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col2">
                                      <div class="date">
                                          Just now
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="col1">
                                      <div class="cont">
                                          <div class="cont-col1">
                                              <div class="label label-sm label-success">
                                                  <i class="fa fa-bell"></i>
                                              </div>
                                          </div>
                                          <div class="cont-col2">
                                              <div class="desc">
                                                  New user registered
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col2">
                                      <div class="date">
                                          Just now
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="col1">
                                      <div class="cont">
                                          <div class="cont-col1">
                                              <div class="label label-sm label-success">
                                                  <i class="fa fa-bell"></i>
                                              </div>
                                          </div>
                                          <div class="cont-col2">
                                              <div class="desc">
                                                  New user registered
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col2">
                                      <div class="date">
                                          Just now
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="col1">
                                      <div class="cont">
                                          <div class="cont-col1">
                                              <div class="label label-sm label-success">
                                                  <i class="fa fa-bell"></i>
                                              </div>
                                          </div>
                                          <div class="cont-col2">
                                              <div class="desc">
                                                  New user registered
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col2">
                                      <div class="date">
                                          Just now
                                      </div>
                                  </div>
                              </a>
                          </li>
                          <li>
                              <a href="#">
                                  <div class="col1">
                                      <div class="cont">
                                          <div class="cont-col1">
                                              <div class="label label-sm label-success">
                                                  <i class="fa fa-bell"></i>
                                              </div>
                                          </div>
                                          <div class="cont-col2">
                                              <div class="desc">
                                                  New user registered
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col2">
                                      <div class="date">
                                          Just now
                                      </div>
                                  </div>
                              </a>
                          </li>
                      </ul>
                  </div>
              </div>
              <div class="tab-pane" id="tab_1_3">
                  <div class="scroller" style="height: 250px;" data-always-visible="1" data-rail-visible1="1">
                      <div class="row">
                          <div class="col-md-6 user-info">
                              <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                              <div class="details">
                                  <div>
                                      <a href="#">Robert Nilson</a>
                                      <span class="label label-sm label-success label-sm">Approved </span>
                                  </div>
                                  <div>29 Jan 2013 10:45AM</div>
                              </div>
                          </div>
                          <div class="col-md-6 user-info">
                              <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                              <div class="details">
                                  <div>
                                      <a href="#">Lisa Miller</a>
                                      <span class="label label-sm label-info">Pending </span>
                                  </div>
                                  <div>19 Jan 2013 10:45AM</div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 user-info">
                              <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                              <div class="details">
                                  <div>
                                      <a href="#">Eric Kim</a>
                                      <span class="label label-sm label-info">Pending </span>
                                  </div>
                                  <div>19 Jan 2013 12:45PM</div>
                              </div>
                          </div>
                          <div class="col-md-6 user-info">
                              <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                              <div class="details">
                                  <div>
                                      <a href="#">Lisa Miller</a>
                                      <span class="label label-sm label-danger">In progress </span>
                                  </div>
                                  <div>19 Jan 2013 11:55PM</div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 user-info">
                              <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                              <div class="details">
                                  <div>
                                      <a href="#">Eric Kim</a>
                                      <span class="label label-sm label-info">Pending </span>
                                  </div>
                                  <div>19 Jan 2013 12:45PM</div>
                              </div>
                          </div>
                          <div class="col-md-6 user-info">
                              <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                              <div class="details">
                                  <div>
                                      <a href="#">Lisa Miller</a>
                                      <span class="label label-sm label-danger">In progress </span>
                                  </div>
                                  <div>19 Jan 2013 11:55PM</div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 user-info">
                              <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                              <div class="details">
                                  <div>
                                      <a href="#">Eric Kim</a>
                                      <span class="label label-sm label-info">Pending </span>
                                  </div>
                                  <div>19 Jan 2013 12:45PM</div>
                              </div>
                          </div>
                          <div class="col-md-6 user-info">
                              <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                              <div class="details">
                                  <div>
                                      <a href="#">Lisa Miller</a>
                                      <span class="label label-sm label-danger">In progress </span>
                                  </div>
                                  <div>19 Jan 2013 11:55PM</div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 user-info">
                              <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                              <div class="details">
                                  <div>
                                      <a href="#">Eric Kim</a>
                                      <span class="label label-sm label-info">Pending </span>
                                  </div>
                                  <div>19 Jan 2013 12:45PM</div>
                              </div>
                          </div>
                          <div class="col-md-6 user-info">
                              <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                              <div class="details">
                                  <div>
                                      <a href="#">Lisa Miller</a>
                                      <span class="label label-sm label-danger">In progress </span>
                                  </div>
                                  <div>19 Jan 2013 11:55PM</div>
                              </div>
                          </div>
                      </div>
                      <div class="row">
                          <div class="col-md-6 user-info">
                              <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                              <div class="details">
                                  <div>
                                      <a href="#">Eric Kim</a>
                                      <span class="label label-sm label-info">Pending </span>
                                  </div>
                                  <div>19 Jan 2013 12:45PM</div>
                              </div>
                          </div>
                          <div class="col-md-6 user-info">
                              <img alt="" src="assets/img/avatar.png" class="img-responsive" />
                              <div class="details">
                                  <div>
                                      <a href="#">Lisa Miller</a>
                                      <span class="label label-sm label-danger">In progress </span>
                                  </div>
                                  <div>19 Jan 2013 11:55PM</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!--END TABS-->
      </div>
  </div>
</div>
<!-- END NOTIFICATIONS -->


 
 
<div class="modal fade" id="disclaimer" tabindex="-1" role="basic" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
          <h4 class="modal-title">DISCLAIMER</h4>
        </div>
        
        <div class="modal-body">
          Pictures shown are for illustration purpose only.Actual product may vary due to product enhancement. 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
   </div>
</div>
@endsection








                