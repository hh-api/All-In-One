<?php
include 'theme/'.$theme.'/includes/head.php';
?>
<body >
<div id="page">
<?php
include 'theme/'.$theme.'/includes/nav.php';
?>                    
                <div id="content">
            <div class="main-content">
                <div class="container">
<div class="list-films film-hot">
    <h1 style="display: none;">MotChill - Xem Phim Online | Phim VietSub Nhanh 2023| Phim Mới Hay</h1>
    <h2 class="title-box">
        <a class="tophot">Phim đề cử</a>
    </h2>
<?php
include 'includes/0.php';
?>    
</div>
                    <div class="clear"></div>
<div class="left-content">
<div class="list-films film-new">
    <h2 class="title-box">
    <a title="Phim Bộ Mới Cập Nhật" href="/" class="tab active">Phim Bộ Mới Cập Nhật</a>
    </h2>
<ul class="film-moi tab-content">    
<?php
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,bole,trang_thai,thoi_luong,view FROM phim WHERE `bole`='1' and `the_loai` NOT LIKE '%Hoạt%' order by time DESC limit 12");
include 'theme/'.$theme.'/item.php';
?>
</ul>
</div>
<div class="list-films film-new">
    <h2 class="title-box">
    <a title="Phim Lẻ Mới Cập Nhật" href="/" class="tab active">Phim Lẻ Mới Cập Nhật</a>
    </h2>
<ul class="film-moi tab-content">    
<?php
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,bole,trang_thai,thoi_luong,view FROM phim WHERE `bole`='2' and `the_loai` NOT LIKE '%Hoạt%' order by time DESC limit 12");
include 'theme/'.$theme.'/item.php';
?>
</ul>
</div>
<div class="list-films film-new">
    <h2 class="title-box">
    <a title="Hoạt Hình Mới Cập Nhật" href="/" class="tab active">Hoạt Hình Mới Cập Nhật</a>
    </h2>
<ul class="film-moi tab-content">    
<?php
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,bole,trang_thai,thoi_luong,view FROM phim WHERE `the_loai` LIKE '%Hoạt%' order by time DESC limit 12");
include 'theme/'.$theme.'/item.php';
?>
</ul>
</div>

            </div>
<div class="right-content">
<?php
include 'includes/BXH.php';
?>    
</div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
<?php
include 'includes/fot.php';
?>