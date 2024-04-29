<!DOCTYPE html>
<html>
<head>
<?php
include 'theme/'.$theme.'/includes/head.php';
?>
    <title>Tìm Kiếm Phim <?php echo $key; ?> | Phim Mới | Xem Phim Nhanh | Xem Phim Online | Phim HD Vietsub Hay Nhất</title>
    <meta name="description" content="Xem phim mới miễn phí nhanh chất lượng cao. Xem Phim online Việt Sub, Thuyết minh, lồng tiếng chất lượng HD. Xem phim nhanh online chất lượng cao" />
    <meta property="og:title" content="Phim Mới | Phim Hay | Xem Phim Nhanh | Xem Phim Online | Phim HD Vietsub Hay Nhất" />
    <meta property="og:description" content="Xem phim mới miễn phí nhanh chất lượng cao. Xem Phim online Việt Sub, Thuyết minh, lồng tiếng chất lượng HD. Xem phim nhanh online chất lượng cao" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="/" />
    <meta property="og:url" content="/" />
</head>

<body>
 
<?php
include 'theme/'.$theme.'/includes/nav.php';
?>
    
    <div class="clear"></div>
    <div class="container">


        <!-- Main content -->

        <div class="row">
            <!-- slider -->
            <div class="col-lg-8">

                <!-- Phim bộ mới -->
                <div class="movie-list-index home-v2">
                    <h2 class="header-list-index"><span class="title-list-index">Tìm Kiếm Phim <?php echo $key; ?></span></h2>
<div class="last-film-box-wrapper">
<ul class="last-film-box" id="movie-last-theater">
<?php
$trang = $_GET['trang'];
if($trang == ""){ $trang = 0; } else { $trang = $trang - 1; }
//phan trang	            
$sodu_lieu = mysqli_query($apizophim, "SELECT id FROM phim where ten_phim like '%$s%' or slug like '%$s2%' or dien_vien like '%$s%' or ten_goc like '%$s%'");
$sodu_lieu = mysqli_num_rows($sodu_lieu);
$baitren_mottrang = 40;
$sotrang = ceil($sodu_lieu/$baitren_mottrang);
$dau = $trang*$baitren_mottrang;
$cuoi = $baitren_mottrang;
									
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,trang_thai,thoi_luong,view,bole FROM phim where ten_phim like '%$s%' or slug like '%$s2%' or dien_vien like '%$s%' or ten_goc like '%$s%' order by time DESC limit $dau, $cuoi");
include 'theme/'.$theme.'/item.php';
?>                            
                        </ul>
                        <div class="clear"></div>
                    </div>                    
                </div>
                <!-- Phim bộ mới -->
                <div class="clear"></div>
            </div>
            <!-- Sidebar -->
            <div class="col-lg-4 sidebar" id="sidebar">
<?php 
include 'includes/BXH.php';
?>     
            </div>
            <div class="clear"></div>
            <!-- /Sidebar -->
  
        </div>
        <!-- /Main content -->
    </div>

<?php 
include 'theme/'.$theme.'/includes/fot.php'; 
?>