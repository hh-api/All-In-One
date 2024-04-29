<!DOCTYPE html>
<html>
<head>
<?php
include 'theme/'.$theme.'/includes/head.php';
?>    
    <title><?php echo $ten_phim.' - '.$ten_goc; ?></title>
    <meta name="description" content="<?php echo $noi_dung; ?>" />
    <link rel="canonical" href="/<?php echo $slug; ?>.html" />
    <meta property="og:title" content="<?php echo $ten_phim.' - '.$ten_goc; ?>" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:description" content="<?php echo $noi_dung; ?>" />
    <meta property="og:url" content="/<?php echo $slug; ?>.html" />
    <meta property="og:image" content="<?php echo $thumb; ?>" />
    <meta property="og:site_name" content="<?php echo $domain; ?>" />
</head>

<body>

<?php
include 'theme/'.$theme.'/includes/nav.php';
?>

    <div class="clear"></div>
    <div class="container">
       
        <!-- Main content -->
        <ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" title="Phim Mới" href="/" itemprop="url"><span itemprop="name">Trang Chủ</span></a>
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" title="Phim lẻ" href="/z.php?BL=<?php echo $bole;?>" itemprop="url"><span itemprop="name"><?php if ($bole=='2') { echo 'Phim Lẻ'; } else { echo 'Phim Bộ'; }?></span></a>
            </li>
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" title="Phim <?php echo $the_loai; ?>" href="/z.php?TL=<?php echo str_replace(' ', '+', $the_loai);?>" itemprop="url"><span itemprop="name"><?php echo $the_loai; ?></span></a>
            </li>
            <li class="active"><?php echo $ten_phim; ?></li>
        </ol>
        <div class="row">
            <!-- slider -->
            <div class="col-lg-8">
                <div class="block-wrapper page-single">
                    <!-- Thông tin phim -->
                    <div class="movie-info">
                        <div class="block-movie-info movie-info-box">
                            <div class="row">
                                <div class="col-6 movie-image">
                                    <div class="movie-l-img"><img alt="<?php echo $ten_phim; ?> - <?php echo $ten_goc; ?>" src="<?php echo $thumb; ?>" />
                                        <h2 class="hidden">Xem phim</h2>
                                        <ul class="btn-block">
                                            <li class="item"><a id="btn-film-watch" class="btn btn-green" style="font-size: 20px;" title="<?php echo $ten_phim; ?> - <?php echo $ten_goc; ?>" href="/<?php echo $slug; ?>/tap-<?php if ($bole=='1') { echo '1'; } else { echo 'Full'; }?>.html">Xem Phim</a>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-6 movie-detail">
                                    <h1 class="movie-title"><span class="title-1"><a class="title-1" href="/<?php echo $slug; ?>.html"><?php echo $ten_phim; ?></a></span><span class="title-2" style="font-size: 14px;"><?php echo $ten_goc; ?></span></h1>
                                    <div class="movie-meta-info slim-scroll">
                                        <dl class="movie-dl"><dt class="movie-dt">Trạng Thái:</dt>
                                            <dd class="movie-dd status"><?php echo $trang_thai; ?></dd>
                                            <br/><dt class="movie-dt">Điểm IMDb:</dt>
                                            <dd class="movie-dd imdb">7.9</dd><dt class="movie-dt hidden">Số người đánh giá:</dt>
                                            <dd class="movie-dd">(83,924 votes)</dd>
                                            <br/><dt class="movie-dt">Đạo Diễn:</dt>
                                            <dd class="movie-dd dd-director">N/A</dd>
                                            
                                            <br/><dt class="movie-dt">Quốc Gia:</dt>
                                            <dd class="movie-dd dd-country"><a href='/z.php?QG=<?php echo str_replace(' ', '-', $quoc_gia); ?>'><?php echo $quoc_gia; ?></a> </dd>
                                            <br/><dt class="movie-dt">Năm Chiếu:</dt>
                                            <dd class="movie-dd"><a title="Phim <?php echo $nam_chieu; ?>" href="/z.php?NC=<?php echo $nam_chieu; ?>"><?php echo $nam_chieu; ?></a>
                                            </dd>
                                            <br/><dt class="movie-dt">Thời Lượng:</dt>
                                            <dd class="movie-dd"><?php echo $thoi_luong; ?></dd>
                                            <br/><dt class="movie-dt">Thể Loại:</dt>
                                            <dd class="movie-dd dd-cat"><?php echo $the_loai; ?></dd>
                                            
                                            <br/>
                                            <dt class="movie-dt">Lượt Xem:</dt><dd class="movie-dd"> <?php echo number_format($luotxem1, 0, '', '.'); ?> 💕</dd>
                                            <br/><dt class="movie-dt">Diễn Viên:</dt>
                                            <dd class="movie-dd dd-director"><?php echo $dien_vien; ?></dd>
                                        </dl>
                                        <div class="clear"></div>
                                    </div>
                                    
                                </div>
                                
                            </div>
                        </div>
                        
<div class="list-server">

<ul class="list-episode">
    
<?php
$cache_movie = './cache/movie/'.$slug.'.php';
$list = './list/'.$slug.'.php';

if (file_exists($cache_movie)) { $time_cache = filemtime($cache_movie);
if (time() > ($time_cache + 3600)) { $cache = '0'; } } 
if ((!file_exists($cache_movie)) or ($cache == '0')) { 
$html = curl('https://api-zophim.blogspot.com/2023/01/'.$slug.'.html');    
if (strpos($html, 'class="ALL"') == true)  {
$list_all = explode('</td>', explode('<td style="vertical-align: top;" class="ALL">', $html)['1'])['0'];
$list_all = preg_replace('/\R+/', "\n", trim($list_all));
if ($list_all) {
$myfile = fopen($list, "w");
fwrite($myfile, '<?php $list_sv="
'.$list_all.';" ?>');
fclose($myfile);
}
file_put_contents($cache_movie, '');
}
}

if (file_exists($list)) {
include 'list/'.$slug.'.php';
$get_list = explode('<br/>', $list_sv);
foreach ($get_list as $get_list) {
if (strpos($get_list, '|') == true) {    
$list_tap = explode("|", $get_list)['0'];
echo '<li class="episode"><a href="/'.$slug.'/tap-'.$list_tap.'.html" title="" class="btn-episode episode-link btn3d black"><span itemprop="name">'.$list_tap.'</span></a></li>';
}}
} else {
$sql10 = mysqli_query($apizophim, "SELECT tap FROM VIP where `slug`='".$slug."' order by ABS(tap)");
while($qsql10 = mysqli_fetch_array($sql10)){
$list_tap = $qsql10['tap'];
echo '<li class="episode"><a href="/'.$slug.'/tap-'.$list_tap.'.html" title="" class="btn-episode episode-link btn3d black"><span itemprop="name">'.$list_tap.'</span></a></li>';
} 
}
?>

</ul><div class="clearfix"></div></div>

                        <!--<div class="block-actors">
                            <h2 class="movie-detail-h2">Diễn viên</h2>
                            <ul class="row" id="list_actor_carousel">
                                <li>
                                    <a class="actor-profile-item" href="ho-so/dwayne-johnson-524/" title="Dwayne Johnson trong vai Bravestone">
                                        <div class="actor-image" style="background-image:url('https://web.archive.org/web/20200226085344im_/http://image.phimmoi.net/profile/524/thumb.jpg')"></div>
                                        <div class="actor-name"><span class="actor-name-a">Dwayne Johnson</span><span class="character">Bravestone</span>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a class="actor-profile-item" href="ho-so/kevin-hart-8633/" title="Kevin Hart trong vai Mouse">
                                        <div class="actor-image" style="background-image:url('https://web.archive.org/web/20200226085344im_/http://image.phimmoi.net/profile/8633/thumb.jpg')"></div>
                                        <div class="actor-name"><span class="actor-name-a">Kevin Hart</span><span class="character">Mouse</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class="clear"></div><a id="prevActor" class="prev" rel="nofollow"><span class="arrow-icon left"></span></a><a id="nextActor" class="next" rel="nofollow"><span class="arrow-icon right"></span></a>
                        </div>-->
                        <article class="block-movie-content" id="film-content-wrapper">
                            <h2 class="movie-detail-h2">Nội dung phim</h2>
                            <div class="content" id="film-content" style="text-align: justify;">
                                <p><?php if ($noi_dung) {echo $noi_dung; } else { echo $ten_phim.' - '.$ten_goc; } ?></p>
                            </div>
                        </article>
                        
                    </div>
                    <!-- / Thông tin phim -->
                    <div class="clear"></div>
                </div>

                <div class="clear"></div>

<div class="block-wrapper page-single block-comments" style="background: #f8f8f8;padding:0px">
<div style="background-color: orange;padding:5px"><b>📝 <font color="black">Bình Luận Phim</font> <font color="blue"><?php echo $ten_phim; ?></font></b></div>                    
<?php
include 'includes/zComment.php';
?>
</div>
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