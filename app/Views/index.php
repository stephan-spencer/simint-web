<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
    <!-- begin sidebar scrollbar -->
    <div data-scrollbar="true" data-height="100%">
        <!-- begin sidebar user -->
        <ul class="nav">
            <li class="nav-profile">
                <div class="image">
                    <a href="javascript:;"><img src="assets/img/user-13.jpg" alt="" /></a>
                </div>
                <div class="info">
                    Stephan Spencer
                    <small>Developer</small>
                </div>
            </li>
        </ul>
        <!-- end sidebar user -->
        <!-- begin sidebar nav -->
        <ul class="nav">
            <li class="nav-header">Navigation</li>
            <li class="has-sub active">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-laptop"></i>
                    <span>Admin Settings</span>
                </a>
                <ul class="sub-menu">
                    <li class="active"><a href="index.html">Dashboard v1</a></li>
                    <li><a href="index_v2.html">Dashboard v2</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <span class="badge pull-right">10</span>
                    <i class="fa fa-inbox"></i>
                    <span>Notifications</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="email_inbox.html">Inbox v1</a></li>
                    <li><a href="email_inbox_v2.html">Inbox v2</a></li>
                    <li><a href="email_compose.html">Compose</a></li>
                    <li><a href="email_detail.html">Detail</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-suitcase"></i>
                    <span>User Management </span>
                </a>
                <ul class="sub-menu">
                    <li><a href="ui_general.html">Add User</a></li>
                    <li><a href="ui_typography.html">Manage User</a></li>
                    <li><a href="ui_tabs_accordions.html">Change User Roles</a></li>
                    <li><a href="ui_unlimited_tabs.html">Unlimited Nav Tabs</a></li>
                </ul>
            </li>
            <li class="has-sub">
                <a href="javascript:;">
                    <b class="caret pull-right"></b>
                    <i class="fa fa-th"></i>
                    <span>Database</span>
                </a>
                <ul class="sub-menu">
                    <li><a href="table_basic.html">Basic Tables</a></li>
                    <li class="has-sub">
                        <a href="javascript:;"><b class="caret pull-right"></b> Managed Tables</a>
                        <ul class="sub-menu">
                            <li><a href="table_manage.html">Default</a></li>
                            <li><a href="table_manage_autofill.html">Autofill</a></li>
                            <li><a href="table_manage_buttons.html">Buttons</a></li>
                            <li><a href="table_manage_colreorder.html">ColReorder</a></li>
                            <li><a href="table_manage_fixed_columns.html">Fixed Column</a></li>
                            <li><a href="table_manage_fixed_header.html">Fixed Header</a></li>
                            <li><a href="table_manage_keytable.html">KeyTable</a></li>
                            <li><a href="table_manage_responsive.html">Responsive</a></li>
                            <li><a href="table_manage_rowreorder.html">RowReorder</a></li>
                            <li><a href="table_manage_scroller.html">Scroller</a></li>
                            <li><a href="table_manage_select.html">Select</a></li>
                            <li><a href="table_manage_combine.html">Extension Combination</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <!-- begin sidebar minify button -->
            <li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="fa fa-angle-double-left"></i></a></li>
            <!-- end sidebar minify button -->
        </ul>
        <!-- end sidebar nav -->
    </div>
    <!-- end sidebar scrollbar -->
</div>
<div class="sidebar-bg"></div>
<!-- end #sidebar -->

<!-- begin #page-container -->
<div class="content">
<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
    <!-- begin #header -->
    <div id="header" class="header navbar navbar-default navbar-fixed-top">
        <!-- begin container-fluid -->
        <div class="container-fluid">
            <!-- begin mobile sidebar expand / collapse button -->
            <div class="navbar-header">
                <a href="index.html" class="navbar-brand"><span class="navbar-logo"></span> SIMINT ADMIN</a>
                <button type="button" class="navbar-toggle" data-click="sidebar-toggled">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <!-- end mobile sidebar expand / collapse button -->

            <!-- begin header navigation right -->
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <form class="navbar-form full-width">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Enter keyword" />
                            <button type="submit" class="btn btn-search"><i class="fa fa-search"></i></button>
                        </div>
                    </form>
                </li>
                <li class="dropdown">
                    <a href="javascript:;" data-toggle="dropdown" class="dropdown-toggle f-s-14">
                        <i class="fa fa-bell-o"></i>
                        <span class="label">5</span>
                    </a>
                </li>
                <li class="dropdown navbar-user">
                    <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/img/user-13.jpg" alt="" />
                        <span class="hidden-xs">Stephan Spencer</span> <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu animated fadeInLeft">
                        <li class="arrow"></li>
                        <li><a href="javascript:;">Edit Profile</a></li>
                        <li><a href="javascript:;"><span class="badge badge-danger pull-right">2</span> Inbox</a></li>
                        <li><a href="javascript:;">Calendar</a></li>
                        <li><a href="javascript:;">Setting</a></li>
                        <li class="divider"></li>
                        <li><a href="javascript:;">Log Out</a></li>
                    </ul>
                </li>
            </ul>
            <!-- end header navigation right -->
        </div>
        <!-- end container-fluid -->
    </div>
    <!-- end #header -->

    <!-- begin #content -->
    <div id="content" class="container">
        <!-- begin breadcrumb -->
        <ol class="breadcrumb pull-right">
            <li><a href="javascript:;">Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
        <!-- end breadcrumb -->
        <!-- begin page-header -->
        <h1 class="page-header"> Dashboard <small>Simulated Intelligence Web based System</small></h1>
        <!-- end page-header -->

        <!-- begin row -->
        <div class="row">
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-green">
                    <div class="stats-icon"><i class="fa fa-desktop"></i></div>
                    <div class="stats-info">
                        <h4>TOTAL UPDATED DATA</h4>
                        <p>3,291,922</p>
                    </div>
                    <div class="stats-link">
                        <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-blue">
                    <div class="stats-icon"><i class="fa fa-chain-broken"></i></div>
                    <div class="stats-info">
                        <h4>CURRENT USERS</h4>
                        <p>4</p>
                    </div>
                    <div class="stats-link">
                        <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-purple">
                    <div class="stats-icon"><i class="fa fa-users"></i></div>
                    <div class="stats-info">
                        <h4>ACTIVE THREATS</h4>
                        <p>100</p>
                    </div>
                    <div class="stats-link">
                        <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end col-3 -->
            <!-- begin col-3 -->
            <div class="col-md-3 col-sm-6">
                <div class="widget widget-stats bg-red">
                    <div class="stats-icon"><i class="fa fa-clock-o"></i></div>
                    <div class="stats-info">
                        <h4>AVG TIME ON SITE</h4>
                        <p>00:12:23</p>
                    </div>
                    <div class="stats-link">
                        <a href="javascript:;">View Detail <i class="fa fa-arrow-circle-o-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- end col-3 -->
        </div>
        <!-- end row -->
        <div class="row">
        <div class="col-md-12">
        <div class="panel panel-inverse" data-sortable-id="table-basic-1">
            <div class="panel-heading">
<!--                <div class="panel-heading-btn">-->
<!--                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>-->
<!--                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>-->
<!--                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>-->
<!--                    <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>-->
<!--                </div>-->
                <h4 class="panel-title">Latest Posts</h4>
            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Username</th>
                        <th>Email Address</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nicky Almera</td>
                        <td>nicky@hotmail.com</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Edmund Wong</td>
                        <td>edmund@yahoo.com</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Harvinder Singh</td>
                        <td>harvinder@gmail.com</td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>Terry Khoo</td>
                        <td>terry@gmail.com</td>
                    </tr>
                    </tbody>
                </table>
            </div>
          </div>

        </div>

    </div>
    <!-- end #content -->

    <!-- begin scroll to top btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
    <!-- end scroll to top btn -->
</div>
</div>
<!-- end page container -->


</html>
