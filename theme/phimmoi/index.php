<!DOCTYPE html>
<html>
<head>
<?php
include 'theme/'.$theme.'/includes/head.php';
?>
    <title>PhimMoi.Net | Phim Hay | Xem Phim Nhanh | Xem Phim Online | Phim HD Vietsub Hay Nhất</title>
    <meta name="description" content="Xem phim mới miễn phí nhanh chất lượng cao. Xem Phim online Việt Sub, Thuyết minh, lồng tiếng chất lượng HD. Xem phim nhanh online chất lượng cao" />
    <meta property="og:title" content="Phim Mới | Phim Hay | Xem Phim Nhanh | Xem Phim Online | Phim HD Vietsub Hay Nhất" />
    <meta property="og:description" content="Xem phim mới miễn phí nhanh chất lượng cao. Xem Phim online Việt Sub, Thuyết minh, lồng tiếng chất lượng HD. Xem phim nhanh online chất lượng cao" />
    <meta property="og:type" content="website" />
    <meta property="og:site_name" content="8PhimMoi.Net" />
    <meta property="og:url" content="http://8PhimMoi.net/" />
</head>

<body>
 
<?php
include 'theme/'.$theme.'/includes/nav.php';
?>
    
    <div class="clear"></div>
    <div class="container">


        <!-- Main content -->
<?php
include 'includes/00.php';
?>
        <div class="row">
            <!-- slider -->
            <div class="col-lg-8">
                <!-- movie_home2 -->
                <script type="application/ld+json">{ "@context": "http://schema.org", "@type": "WebSite", "url": "http://8PhimMoi.net/", "name": "PhimMoi9.Net", "alternateName": "Phim Mới", "potentialAction": { "@type": "SearchAction", "target": "http://8PhimMoi.net/search.php?keyword={keyword}/", "query-input": "required name=keyword" } }
                </script>
                <!-- New update film box -->
                <!-- <div class="row movie-update">
                    <div class="col-left">
<a href="/z.php?TL=Viễn-Tưởng" title="Phim marvel"><img src="https://1.bp.blogspot.com/-Me8nPHuQ1Ls/Xe2kMRMudZI/AAAAAAAAAtQ/yitov6AR38k4fk0oTxYxmxx8ukQ09mvKgCLcBGAsYHQ/s1600/Tuyen-Tap-Marvel.jpg" border="0" width="100%" height="150px" alt="Tổng hợp phim marvel mới nhất" title="Phim marvel mới nhất"></a>
<a href="/z.php?TL=Hành-Động" title="Phim DC"><img src="https://1.bp.blogspot.com/-6nuUg26KJOE/Xe2kMGJyJLI/AAAAAAAAAtM/kRmnjQqvwno2p-3AjP6bH-6dI-tS4waMACLcBGAsYHQ/s1600/Tuyen-Tap-DC.jpg" border="2px" width="100%" height="150px" alt="Phim dc mới nhất" title="Phim dc mới nhất"></a>
<a href="/z.php?TL=Cổ-Trang" title="Phim cổ trang"><img src="https://1.bp.blogspot.com/-TZ7xqDgoaUg/Xe2kLFXwwRI/AAAAAAAAAs4/ebZ6Npdx-Q4xFXdYnnGV5_MjnRZ4wKiLACLcBGAsYHQ/s1600/Co-Trang-Trung-Quoc.jpg" border="2px" width="100%" height="150px" alt="Phim cổ trang mới nhất" title="Phim cổ trang mới nhất"></a>
<a href="/z.php?TL=18-Plus" title="Phim Netflix"><img src="https://1.bp.blogspot.com/-b2X634WI1Gc/YUTCsiCbh1I/AAAAAAAAJLs/BW-phIupygo-PvNzJXJ9VEFJXWwwoX-5wCLcBGAsYHQ/s16000/phim-netflix.jpg" border="2px" width="100%" height="150px" alt="Phim Netflix" title="Phim Netflix mới nhất"></a>                       
                    </div>
                    <div class="col-right">
                        <div id="tabs-movie">
                            <ul class="tabs-movie-block">
                                <li class="tab-movie"><a href="#tabs-1" rel="nofollow">Phim Lẻ Mới</a>
                                </li>
                                <li class="tab-movie"><a href="#tabs-2" rel="nofollow">Phim Bộ Mới</a>
                                </li>
                                <li class="tab-movie"><a href="#tabs-3" rel="nofollow">Phim Bộ Full</a>
                                </li>
                            </ul>
                            <div class="clear"></div>
                            <h2 class="hidden">Phim Lẻ Mới</h2>
<?php
include 'includes/01.php';
?>
                            <div class="clear"></div>
                            <h2 class="hidden">Phim Bộ Mới</h2>
<?php
include 'includes/02.php';
?>                            
                            <div class="clear"></div>
                            <h2 class="hidden">Phim Bộ Full</h2>
<?php
include 'includes/03.php';
?>                            
                            <div class="clear"></div>
                        </div>
                    </div>
                </div> -->
                <!-- /New update film box -->
                <!-- Phim bộ mới -->
                <div class="movie-list-index home-v2" style="margin: 0px !important;">
                    <h2 class="header-list-index"><span class="title-list-index">Phim Bộ Mới Cập Nhật</span><a class="more-list-index" href="#" title="Phim chiếu rạp mới nhất">Xem tất cả</a></h2>
<div class="last-film-box-wrapper">
<ul class="last-film-box" id="movie-last-theater">
<?php
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,bole,trang_thai,thoi_luong,view FROM phim WHERE `bole`='1' and `the_loai` NOT LIKE '%Hoạt%' order by time DESC limit 12");
include 'theme/'.$theme.'/item.php';
?>
</ul>
</div>
                </div>
                <!-- Phim bộ mới -->

                <!-- Phim lẻ mới -->
                <div class="movie-list-index home-v2">
                    <h2 class="header-list-index"><span class="title-list-index">Phim lẻ mới cập nhật</span><a class="more-list-index" href="#" title="Phim lẻ mới nhất">Xem tất cả</a></h2>
<div class="last-film-box-wrapper">
<ul class="last-film-box" id="movie-last-theater">
<?php
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,bole,trang_thai,thoi_luong,view FROM phim WHERE `bole`='2' and `the_loai` NOT LIKE '%Hoạt%' order by time DESC limit 12");
include 'theme/'.$theme.'/item.php';
?>
</ul>
</div>
                </div>
                <!-- /Phim lẻ mới -->

                <!-- Phim hoạt hình mới -->
                <div class="movie-list-index home-v2">
                    <h2 class="header-list-index"><span class="title-list-index">Phim hoạt hình mới cập nhật</span><a class="more-list-index" href="#" title="Phim hoạt hình mới nhất">Xem tất cả</a></h2>
<div class="last-film-box-wrapper">
<ul class="last-film-box" id="movie-last-theater">
<?php
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,bole,trang_thai,thoi_luong,view FROM phim WHERE `the_loai` LIKE '%Hoạt%' order by time DESC limit 12");
include 'theme/'.$theme.'/item.php';
?>
</ul>
</div>
                </div>
                <!-- /Phim hoạt hình mới -->
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