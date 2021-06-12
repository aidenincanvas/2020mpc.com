<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>MPC 2020 Admin</title>

  <link href="<?=$asset_root;?>css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=$asset_root;?>font-awesome/css/font-awesome.css" rel="stylesheet">

  <!-- page Css  -->
  <?= $page_css; ?>

  <link href="<?=$asset_root;?>css/animate.css" rel="stylesheet">
  <link href="<?=$asset_root;?>css/style.css?<?=date("YmdHis")?>" rel="stylesheet">

</head>

<body>

  <div id="wrapper">

    <nav class="navbar-default navbar-static-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
          <li class="nav-header">
            <div class="dropdown profile-element"> 
              <span class="clear">
                <span class="block m-t-xs">
                  <strong class="font-bold"><?php  echo trim($_SESSION["user_name"]);?></strong>
                </span> 
                <span class="text-muted text-xs block"><?php  echo trim($_SESSION["level"]);?></span> 
              </span>
            </div>
            <div class="logo-element">
              MPC<br>2020
            </div>
          </li>
          <li>
            <a href="/admin"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Charts</span></a>
          </li>
          <!--li>
            <a href="/admin/mgmt_list"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Mgnt List</span></a>
          </li-->
          <li>
            <a href="/admin/booking_list"><i class="fa fa-shopping-cart"></i> <span class="nav-label">Booking List</span></a>
          </li>
        </ul>

      </div>
    </nav>



    <div id="page-wrapper" class="gray-bg">
      <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
          <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
            <form role="search" class="navbar-form-custom" action="search_results.html">
              <div class="form-group">
                <input type="text" placeholder="Search for something..." class="form-control" name="top-search" id="top-search">
              </div>
            </form>
          </div>

          <ul class="nav navbar-top-links navbar-right">
            <li>
                <span class="m-r-sm text-muted welcome-message">Welcome to MPC 2020 Admin Page.</span>
            </li>
             <li>
              <a href="" id="try-logout" >
                <i class="fa fa-sign-out"></i> Log out
              </a>
            </li>
          </ul>
        </nav>
      </div>