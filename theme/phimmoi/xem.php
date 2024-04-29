<!DOCTYPE html>
<html>
<head>
<?php
include 'theme/'.$theme.'/includes/head.php';
?>
    <title><?php echo $ten_phim.' - '.$ten_goc; ?> - Tập <?php echo $get_tap; ?></title>
    <meta name="description" content="<?php echo $noi_dung; ?>" />
    <link rel="canonical" href="/<?php echo $slug; ?>.html" />
    <meta property="og:title" content="<?php echo $ten_phim.' - '.$ten_goc; ?>" />
    <meta property="og:type" content="video.movie" />
    <meta property="og:description" content="<?php echo $noi_dung; ?>" />
    <meta property="og:url" content="/<?php echo $slug; ?>.html" />
    <meta property="og:image" content="<?php echo $thumb; ?>" />
    <meta property="og:site_name" content="#" />
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
            <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a itemprop="item" title="<?php echo $ten_phim; ?>" href="/<?php echo $slug; ?>.html" itemprop="url"><span itemprop="name"><?php echo $ten_phim; ?></span></a>
            </li>
            <li class="active">Tập <?php echo $get_tap; ?></li>
        </ol>
        <div class="row">
            <!-- slider -->
            <div class="col-lg-8">
                <div class="block-wrapper page-single">
                    <!-- Thông tin phim -->
                    <div class="movie-info">
<?php

$cache_movie = './cache/movie/'.$slug.'.php';
$list = './list/'.$slug.'.php';

if (file_exists($cache_movie)) { $time_cache = filemtime($cache_movie);
if (time() > ($time_cache + 1800)) { $cache = '0'; } } 
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
$get_auto = explode('<br/>', explode("\n".$get_tap.'|', $list_sv)['1'])['0'];
$vs = explode('|', $get_auto)['0'];
$tm = explode('|', $get_auto)['1'];
if ($tm!='-'){
$auto = 'https://ssplay.net/v/'.$tm.'.html'; $ahihi = 'sstm';    
} elseif ($vs!='-'){
$auto = 'https://ssplay.net/v/'.$vs.'.html'; $ahihi = 'ssvs';    
} else {
$auto = 'https://ssplay.net/loading.php';    
}
} //End If 1;
?>                      
<div class="block-actors" style="padding: 2px;background: #000 url() no-repeat center center;">
<iframe id="phimmoi" width="100%" height="360" src="<?php echo $auto; ?>" frameborder="0" scrolling="0" allowfullscreen></iframe> 
</div>
<table width="100%">
<tr>
<td style="width:30%; padding: 5px 2px;border: 1px solid#888;background:#7303c0; color:white; text-align:center" onclick="window.location='<?php if (($get_tap > 1) and ($get_tap != 'Full'))  { echo '/'.$slug.'/tap-'.($get_tap - 1).'.html'; } else { echo '#'; } ?>'">« Tập Trước</td>
<td style="width:40%; padding: 5px 12px;border: 1px solid#888;background:green; color:white; text-align:center"><?php echo number_format($luotxem1, 0, '', '.'); ?> 💕</td> 
<td style="width:30%; padding: 5px 12px;border: 1px solid#888;background:#cc5333; color:white; text-align:center" onclick="window.location='<?php if (($get_tap > 0 ) and ($get_tap != 'Full')) { echo '/'.$slug.'/tap-'.($get_tap + 1).'.html'; } else { echo '#'; } ?>'">Tập Sau »</td> 
</tr>
</table>
<br/>

<div id="go-server"> <center> <ul class="server-list"> <li class="backup-server"> <span class="server-title">Đổi Sever</span> <ul class="list-episode"> 
<li class="episode"> 
<?php if (($tm) and ($tm!='-')) { ?><button rel="nofollow" onclick="document.getElementById('phimmoi').src = 'https://ssplay.net/v/<?php echo $tm; ?>.html'" class="btn-episode grayy <?php if($ahihi == 'sstm') echo 'redd';?>">#S-TM</button><?php } ?>
<?php if (($vs) and ($vs!='-')) { if (strpos($vs, 'ssplay') == false) { ?>
<button rel="nofollow" onclick="document.getElementById('phimmoi').src = 'https://ssplay.net/v/<?php echo $vs; ?>.html'" class="btn-episode grayy <?php if($ahihi == 'ssvs') echo 'redd';?>">#S-VS</button>
<?php } else { ?>
<button rel="nofollow" onclick="document.getElementById('phimmoi').src = '<?php echo $vs; ?>'" class="btn-episode grayy">#S-VS</button><?php } } ?>
</li> </ul> </li> </ul> </center></div>                        
<div class="list-server">

<style>
.grayy{
    border: 1px solid#aaa;
    color: white;
    padding: 2px;
    border-radius: 3px;
    margin-left: 5px;
}
.redd {
    border: 1px solid#aaa;
    color: white;
    background-color: red;
    border: 1px solid#aaa;
    padding: 2px;
    border-radius: 3px;
    margin-left: 5px;
}
</style>

<script type="text/javascript">
function go(loc) {
    document.getElementById('phimmoi').src = loc;
     }
var buttons = $('button').click(function(){
  buttons.not(this).addClass('grayy');
  buttons.not(this).removeClass('redd');
  $(this).addClass('redd');
});
</script>

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
if ($get_tap == $list_tap) { $class = 'active'; } else { $class = ''; }
echo '<li class="episode"><a href="/'.$slug.'/tap-'.$list_tap.'.html" title="" class="btn-episode episode-link btn3d black '.$class.'"><span itemprop="name">'.$list_tap.'</span></a></li>';
}}
} else {
$sql10 = mysqli_query($apizophim, "SELECT tap FROM VIP where `slug`='".$slug."' order by ABS(tap)");
while($qsql10 = mysqli_fetch_array($sql10)){
$list_tap = $qsql10['tap'];
if ($get_tap == $list_tap) { $class = 'active'; } else { $class = ''; }
echo '<li class="episode"><a href="/'.$slug.'/tap-'.$list_tap.'.html" title="" class="btn-episode episode-link btn3d black '.$class.'"><span itemprop="name">'.$list_tap.'</span></a></li>';
} 
}
?>
</ul><div class="clearfix"></div></div>
<div class="clear"></div>                        

                        <article class="block-movie-content" id="film-content-wrapper">
                            <h2 class="movie-detail-h2">Nội dung phim</h2>
                            <div class="content" id="film-content" style="text-align: justify;">
                                <p><?php echo $noi_dung; ?></p>
                            </div>
                        </article>
                        
                    </div>
                    <!-- / Thông tin phim -->
                    <div class="clear"></div>
                </div>


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
                
<?php include 'includes/footer.php'; ?>



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
<ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item">
                <span itemprop="name">Xem phim</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item">
                <span itemprop="name"><?php echo $quoc_gia; ?></span>
            </a>
            <meta itemprop="position" content="2" />
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/<?php echo $slug; ?>.html" itemprop="item">
                <span itemprop="name"><?php echo $ten_phim; ?></span>
            </a>
            <meta itemprop="position" content="3" />
        </li>
        <li class="active">Tập <?php echo $get_tap; ?></li>
    </ol>
<?php
if (file_exists($list)) {
include 'list/'.$slug.'.php';
$get_auto = explode('<br/>', explode("\n".$get_tap.'|', $list_sv)['1'])['0'];
$sv1 = explode('|', $get_auto)['0'];
$sv2 = explode('|', $get_auto)['1'];
$sv3 = explode('|', $get_auto)['2'];
$sv4 = explode('|', $get_auto)['3'];

if (($sv2) and ($sv2!='-')){
if (strlen($sv2) =='15') {
$auto = 'https://zophim.net/s/'.$sv2.'.html'; $ahihi = 'ztm';  
} else {
    
if (($sv1) and ($sv1!='-')){
if (strlen($sv1) =='15') {
$auto = 'https://zophim.net/s/'.$sv1.'.html';    
} else {
$auto = $sv1;    
} }

} 

} else {

if (($sv1) and ($sv1!='-')){
if (strlen($sv1) =='15') {
$auto = 'https://zophim.net/s/'.$sv1.'.html';    
} else {
$auto = $sv1;    
} } 
    
}

} else {
$auto = 'https://ssplay.net/loading.php';  
} //End If 1;
?>    
        <div class="left-content-player" id="player-video">
        <div class="left-content-player film-note" style="margin: 15px 0">   
        - Cách tìm phim trên Google: <b>"Tên phim + motchillz.top" </b>
        </div>
        <div class="box-player" id="box-player"> 
            <iframe id="MotChill" width="100%" height="450px" src="<?php if ($tvc=='1') { echo '/TVC.php?link='.$auto; } else { echo $auto; } ?>" frameborder="0" scrolling="0" allowfullscreen></iframe>
        </div> 
  
<div class="film-note tip-change-server" style="margin:0;border: 0px dashed #e25ddb;padding: 5px;margin: 5px 0 0">
<i class="fa fa-database"></i> Server
<?php if (($sv1) and ($sv1!='-')) { 
if(strlen($sv1) =='15') {
if ($ahihi=='ztm') {$css = 'grayy';} else {$css = 'redd';}  
echo '<button onclick="document.getElementById(`MotChill`).src = `https://zophim.net/s/'.$sv1.'.html`" class="streaming-server btn-sv btn-hls btn '.$css.'">Z-VS</button>';
echo '<button onclick="document.getElementById(`MotChill`).src = `https://ssplay.net/v/'.$sv1.'.html`" class="streaming-server btn-sv btn-hls btn grayy">S-VS</button>';
} elseif (strpos($sv1, 'ssplay') == true) { 
echo '<button onclick="document.getElementById(`MotChill`).src = `'.$sv1.'`" class="streaming-server btn-sv btn-hls btn redd">SS-1</button>';
} elseif (strpos($sv1, 'short.ink') == true) {
echo '<button onclick="document.getElementById(`MotChill`).src = `'.$sv1.'`" class="streaming-server btn-sv btn-hls btn grayy">HY-1</button>';
}
} ?>                        
<?php if (($sv2) and ($sv2!='-')) { 
if(strlen($sv2) =='15') { 
echo '<button onclick="document.getElementById(`MotChill`).src = `https://zophim.net/s/'.$sv2.'.html`" class="streaming-server btn-sv btn-hls btn redd">Z-TM</button>';
echo '<button onclick="document.getElementById(`MotChill`).src = `https://ssplay.net/v/'.$sv2.'.html`" class="streaming-server btn-sv btn-hls btn grayy">S-TM</button>';
} elseif (strpos($sv2, 'ssplay') == true) {
echo '<button onclick="document.getElementById(`MotChill`).src = `'.$sv2.'`" class="streaming-server btn-sv btn-hls btn redd">SS-2</button>';
} elseif (strpos($sv2, 'short.ink') == true) {
echo '<button onclick="document.getElementById(`MotChill`).src = `'.$sv2.'`" class="streaming-server btn-sv btn-hls btn grayy">HY-2</button>';
}
} ?>

<span class="video-btn"><a href="<?php if (($get_tap > 0 ) and ($get_tap != 'Full')) { echo '/'.$slug.'/tap-'.($get_tap + 1).'.html'; } else { echo '#'; } ?>">Sau ⫸</a></span>
<span class="video-btn"><a href="<?php if (($get_tap > 1) and ($get_tap != 'Full'))  { echo '/'.$slug.'/tap-'.($get_tap - 1).'.html'; } else { echo '#'; } ?>">⫷ Trước</a></span>
</div>
<style>
.grayy{
    color: white;
    font-size: 13px;
    background: #333;
    padding: 5px 10px;
    border-radius: 3px;
    margin-left: 4px;
}
.redd {
    color: white;
    font-size: 13px;
    background: #d9534f;
    padding: 5px 10px;
    border-radius: 3px;
    margin-left: 4px;
}
</style>

<script type="text/javascript">
function go(loc) {
    document.getElementById('MotChill').src = loc;
     }
var buttons = $('button').click(function(){
  buttons.not(this).addClass('grayy');
  buttons.not(this).removeClass('redd');
  $(this).addClass('redd');
});
</script>         
        <div class="left-content-player film-note" style="margin: 10px 0 0">   
               - Hãy thử chuyển sang server khác (nếu có) nếu bạn gặp tình trạng giật/lag khi xem phim.<br> - Bạn nên sử dụng Trình duyệt Chrome để xem phim tối ưu nhất!<br>- Tham gia nhóm <a href="#" target="_blank" rel="nofollow noopener"><span style="color:#e62117"><strong>Telegram</strong></span></a> của chúng mình để được hỗ trợ kịp thời nha.
        </div>
                    <div class="control-box clear" style="margin: 20px 0 0;">
                <div class="server-episode-block">
                    <i class="fa fa-film"></i> Danh Sách Tập Phim
                </div>
                <div class="episodes">
<div class="list-episode">
<?php
if (file_exists($list)) {
include 'list/'.$slug.'.php';
$get_list = explode('<br/>', $list_sv);
foreach ($get_list as $get_list) {
if (strpos($get_list, '|') == true) {    
$list_tap = explode("|", $get_list)['0'];
if ($get_tap == $list_tap) { $class = 'class="current"'; } else { $class = ''; }
echo '<a '.$class.' href="/'.$slug.'/tap-'.$list_tap.'.html">'.$list_tap.'</a>';
}}
}
?>                                             
                </div>
            </div>
        
        <div class="details">
            <div class="clear"></div>
            <div class="clear"></div>
            <div href="/<?php echo $slug; ?>.html" class="name">
                <h1 itemprop="name">
                    <a href="/<?php echo $slug; ?>.html"
                        title="Xem phim <?php echo $ten_phim; ?>"><?php echo $ten_phim; ?></a>
                    - <span class="chapter-name"> Tập <?php echo $get_tap; ?></span>
                </h1>
                <div class="clear"></div>
                <h2 class="real-name">
                    <a href="/<?php echo $slug; ?>.html"><?php echo $ten_goc; ?>
                        (<?php echo $nam_chieu; ?>)</a>
                </h2>
            <div class="social-icon" style="float:left">
                <div class="fb-like" data-href="/<?php echo $slug; ?>.html" data-layout="button_count"
                    data-action="like" data-show-faces="false" data-share="true"></div>
            </div>    
            </div>
            <div class="clear"></div>
<div style="text-align: justify;"><p class="short-description" style="padding: 5px 8px;margin: 5px 0 20px 0;line-height: 26px;font-size: 14px;color: #BBB;background: #222;"><font color="limegreen">MotChill</font> giới thiệu bộ phim <?php echo $noi_dung; ?></p></div>
            <div class="clear"></div>
            </div>
        </div>

    </div>

<?php
include 'theme/'.$theme.'/includes/zComment.php';
?>

    <div class="bottom-content">
        <div class="container">
            <div class="list-films film-hot">
                <h2 class="title-box">
                    <i class="fa fa-star-o"></i>
                    <a href="javascript:void(0)">CÓ THỂ BẠN MUỐN XEM ?</a>
                </h2>
<?php
include 'includes/0.php';
?> 
            </div>
        </div>
    </div>
                    <div class="clear"></div>
                </div>
            </div>
        </div>
<script> $(document).ready(function(){ $(this).scrollTop(200); });</script>
<?php
include 'theme/'.$theme.'/includes/fot.php';
?>