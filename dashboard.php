<?php
include 'databases.php';
if (!$_SESSION['email']) {
echo '<script>location.href="/login.php";</script>';    
}
$type = $_GET['type'];
$slug = $_GET['slug'];
$trang = $_GET['trang'];
?>
<!DOCTYPE html>
<html lang="en" >
<head>
<meta charset="UTF-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="initial-scale=1.0, width=device-width" />
<link rel="shortcut icon" href="https://lh5.ggpht.com/p/AF1QipPB9QVdK0WeExQ32br_cWqmWMqWFVWvGz9NWXls=s0" type="image/png" />
<title>Bảng Quản Trị</title>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css'>
  
<style>
body {
  font-size: .875rem;
}

.feather {
  width: 16px;
  height: 16px;
  vertical-align: text-bottom;
}

/*
 * Sidebar
 */

.sidebar {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  z-index: 100; /* Behind the navbar */
  padding: 0;
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .1);
}

.sidebar-sticky {
  position: -webkit-sticky;
  position: sticky;
  top: 48px; /* Height of navbar */
  height: calc(100vh - 48px);
  padding-top: .5rem;
  overflow-x: hidden;
  overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
}

.sidebar .nav-link {
  font-weight: 500;
  color: #333;
}

.sidebar .nav-link .feather {
  margin-right: 4px;
  color: #999;
}

.sidebar .nav-link.active {
  color: #007bff;
}

.sidebar .nav-link:hover .feather,
.sidebar .nav-link.active .feather {
  color: inherit;
}

.sidebar-heading {
  font-size: .75rem;
  text-transform: uppercase;
}

/*
 * Navbar
 */

.navbar-brand {
  padding-top: .75rem;
  font-size: 1rem;
  background-color: rgba(0, 0, 0, .25);
  box-shadow: inset -1px 0 0 rgba(0, 0, 0, .25);
}

.navbar .form-control {
  padding: .75rem 1rem;
  border-width: 0;
  border-radius: 0;
}

.form-control-dark {
  color: #fff;
  background-color: rgba(255, 255, 255, .1);
  border-color: rgba(255, 255, 255, .1);
}

.form-control-dark:focus {
  border-color: transparent;
  box-shadow: 0 0 0 3px rgba(255, 255, 255, .25);
}

/*
 * Utilities
 */

.border-top { border-top: 1px solid #e5e5e5; }
.border-bottom { border-bottom: 1px solid #e5e5e5; }

body {
  background-color: #1b2431;
  color: #202020;
  font-family: "Arial";
  font-size: 14px;
}

a:hover {
  text-decoration: none;
}

p,
figure {
  margin: 0;
  padding: 0;
}

.navbar {
  background-color: #1b2431;
}

.sidebar {
  background-color: #1b2431;
  box-shadow: none;
}
.sidebar .nav-link {
  border-left: 5px solid transparent;
  color: #738297;
  padding: 0.5rem 0.75rem;
}
.sidebar .nav-link:hover {
  color: white;
}
.sidebar .nav-link.active {
  border-left: 5px solid #738297;
  color: white;
}
.sidebar .zmdi {
  display: inline-block;
  font-size: 1.35rem;
  margin-right: 5px;
  min-width: 25px;
}

.card-list {
  width: 100%;
}
.card-list:before, .card-list:after {
  content: " ";
  display: table;
}
.card-list:after {
  clear: both;
}

.card {
  border-radius: 8px;
  color: white;
  padding: 10px;
  position: relative;
}
.card .zmdi {
  color: white;
  font-size: 28px;
  opacity: 0.3;
  position: absolute;
  right: 13px;
  top: 13px;
}
.card .stat {
  border-top: 1px solid rgba(255, 255, 255, 0.3);
  font-size: 8px;
  margin-top: 25px;
  padding: 10px 10px 0;
  text-transform: uppercase;
}
.card .title {
  display: inline-block;
  font-size: 8px;
  padding: 10px 10px 0;
  text-transform: uppercase;
}
.card .value {
  font-size: 28px;
  padding: 0 10px;
}
.card.blue {
  background-color: #2298F1;
}
.card.green {
  background-color: #66B92E;
}
.card.orange {
  background-color: #DA932C;
}
.card.red {
  background-color: #D65B4A;
}

.projects {
  background-color: #273142;
  border: 1px solid #313D4F;
  overflow-x: auto;
  width: 100%;
}
.projects-inner {
  border-radius: 4px;
}

.projects-header {
  color: white;
  padding: 22px;
}
.projects-header .count,
.projects-header .title {
  display: inline-block;
}
.projects-header .count {
  color: #738297;
}
.projects-header .zmdi {
  cursor: pointer;
  float: right;
  font-size: 16px;
  margin: 5px 0;
}
.projects-header .title {
  font-size: 21px;
}
.projects-header .title + .count {
  margin-left: 5px;
}

.projects-table {
  background: #273142;
  width: 100%;
}
.projects-table td {
  color: white;
  padding: 5px 10px;
  vertical-align: middle;
}
.projects-table th {
  color: limegreen;
  padding: 5px 10px;
  vertical-align: middle;
}
.projects-table td p {
  font-size: 14px;
}
.projects-table td p:last-of-type {
  color: #738297;
  font-size: 12px;
}
.projects-table th {
  background-color: #313D4F;
}
.projects-table tr:hover {
  background-color: #303d52;
}
.projects-table tr:not(:last-of-type) {
  border-bottom: 1px solid #313D4F;
}
.projects-table .member figure,
.projects-table .member .member-info {
  display: inline-block;
  vertical-align: top;
}
.projects-table .member figure + .member-info {
  margin-left: 7px;
}
.projects-table .member img {
  border-radius: 10%;
  height: 75px;
  width: 50px;
}
.projects-table .status > form {
  float: right;
}
.projects-table .status-text {
  display: inline-block;
  font-size: 12px;
  margin: 11px 0;
  padding-left: 20px;
  position: relative;
}
.projects-table .status-text:before {
  border: 3px solid;
  border-radius: 50%;
  content: "";
  height: 14px;
  left: 0;
  position: absolute;
  top: 1px;
  width: 14px;
}
.projects-table .status-text.status-blue:before {
  border-color: #1C93ED;
}
.projects-table .status-text.status-green:before {
  border-color: #66B92E;
}
.projects-table .status-text.status-orange:before {
  border-color: #DA932C;
}
.projects-table .status-text.status-red:before {
  border-color: #D65B4A;
}

.selectric {
  background-color: transparent;
  border-color: #313D4F;
  border-radius: 4px;
}
.selectric .label {
  color: #738297;
  line-height: 34px;
  margin-right: 10px;
  text-align: left;
}
.selectric-wrapper {
  float: right;
  width: 150px;
}

.chart {
  border-radius: 3px;
  border: 1px solid #313D4F;
  color: white;
  padding: 10px;
  position: relative;
  text-align: center;
}
.chart canvas {
  height: 400px;
  margin: 20px 0;
  width: 100%;
}
.chart .actions {
  margin: 15px;
  position: absolute;
  right: 0;
  top: 0;
}
.chart .actions span {
  cursor: pointer;
  display: inline-block;
  font-size: 20px;
  margin: 5px;
  padding: 4px;
}
.chart .actions .btn-link {
  color: white;
}
.chart .actions .btn-link i {
  font-size: 1.75rem;
}
.chart .title {
  font-size: 18px;
  margin: 0;
  padding: 15px 0 5px;
}
.chart .title + .tagline {
  margin-top: 10px;
}
.chart .tagline {
  font-size: 12px;
}

.danger-item {
  border-left: 4px solid #A84D43;
}

.zmdi {
  line-height: 1;
  vertical-align: middle;
}
</style>

</head>
<body translate="no">
  <nav class="navbar navbar-dark sticky-top flex-md-nowrap p-0">
	<a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Bảng Quản Trị</a>
	<form action="/dashboard.php?s=" style="width:100%">
	<input class="form-control form-control-dark w-100" type="text" name="s" placeholder="Search" aria-label="Search">
	</form>
	<ul class="navbar-nav px-3">
		<li class="nav-item text-nowrap">
			<a class="nav-link" href="#">Sign out</a>
		</li>
	</ul>
</nav>

<div class="container-fluid">
	<div class="row">
		<nav class="col-md-2 d-none d-md-block sidebar">
			<div class="sidebar-sticky">
				<ul class="nav flex-column">
					<li class="nav-item">
						<a class="nav-link <?php if (!$type) echo 'active';?>" href="/dashboard.php">
                  <i class="zmdi zmdi-widgets"></i> Dashboard</span>
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if ($type=='add') echo 'active';?>" href="/dashboard.php?type=add">
                  <i class="zmdi zmdi-file-text"></i> Thêm Mới
                </a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if ($type=='edit') echo 'active';?>" href="#">
                  <i class="zmdi zmdi-edit"></i>Chỉnh Sửa</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">
                  <i class="zmdi zmdi-storage"></i>Menu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/dashboard.php?type=bxh">
                  <i class="zmdi zmdi-chart"></i>Thống Kê</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/index.php" target="_blank">
                  <i class="zmdi zmdi-globe"></i>Website</a>
					</li>
					<li class="nav-item">
						<a class="nav-link <?php if ($type=='setting') echo 'active';?>"  href="/dashboard.php?type=setting">
                  <i class="zmdi zmdi-settings"></i>Setting</a>
					</li>
				</ul>

				<h6 class="sidebar-heading d-flex justify-content-between align-items-center pl-3 mt-4 mb-1 text-muted">
					<span>Support Telegram</span>
					<a class="d-flex align-items-center text-muted" href="#">
						<i class="zmdi zmdi-mail-send"></i>
					</a>
				</h6>
				<ul class="nav flex-column mb-2">
					<li class="nav-item">
						<a class="nav-link" href="https://t.me/ssplaynet" target="_blank">
                  <i class="zmdi zmdi-mail-send"></i>https://t.me/ssplaynet</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="https://t.me/AnimeAPI" target="_blank">
                  <i class="zmdi zmdi-mail-send"></i>https://t.me/AnimeAPI</a>
					</li>
					
				</ul>
			</div>
		</nav>
		<main role="main" class="col-md-9 ml-sm-auto col-lg-10 my-3">
			<div class="card-list">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card blue">
							<div class="title">Tổng Số Phim</div>
							<div class="value"><?php $count = mysqli_num_rows(mysqli_query($apizophim, "SELECT id FROM phim")); echo $count; ?></div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card green">
							<div class="title">Tổng Số Bình Luận</div>
							<div class="value"><?php $count = mysqli_num_rows(mysqli_query($apizophim, "SELECT id FROM comment")); echo number_format($count, 0, '', '.');; ?></div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card orange">
							<div class="title">Tổng Số Lượt Xem</div>
							<div class="value"><?php $result = mysqli_query($apizophim, 'SELECT SUM(view) AS value_sum FROM phim'); $row = mysqli_fetch_assoc($result); echo number_format($row['value_sum'], 0, '', '.'); ?></div>
						</div>
					</div>
					<div class="col-12 col-md-6 col-lg-4 col-xl-3 mb-4">
						<div class="card red">
							<div class="title">Lượt Xem Hôm Nay</div>
							<div class="value"><?php $result = mysqli_query($apizophim, 'SELECT SUM(view_day) AS value_sum FROM phim'); $row = mysqli_fetch_assoc($result); echo number_format($row['value_sum'], 0, '', '.');?></div>
						</div>
					</div>
				</div>
			</div>

<?php
if ($type=='add') {
include 'admin/add.php';
} elseif ($type=='edit') {
include 'admin/edit.php';
} elseif ($type=='setting') {
include 'admin/setting.php';
} elseif ($type=='bxh') {
include 'admin/BXH.php';
} elseif ($_GET['s']) {
include 'admin/search.php';
} elseif ($type=='del') {
$run = mysqli_query($apizophim," DELETE FROM phim where `slug` = '".$slug."'");
echo 'Bạn vừa xoá Phim với slug là '.$slug;
} else {
include 'admin/list.php';    
}  
?>

</main>
	</div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
<script src='https://cdn.jsdelivr.net/jquery.selectric/1.10.1/jquery.selectric.min.js'></script>
</body>
</html>
