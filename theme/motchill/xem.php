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
$auto = 'https://ssplay.net/v/'.$sv2.'.html'; $ahihi = 'stm';  
} else {
    
if (($sv1) and ($sv1!='-')){
if (strlen($sv1) =='15') {
$auto = 'https://ssplay.net/v/'.$sv1.'.html';    
} else {
$auto = $sv1;    
} }

} 

} else {

if (($sv1) and ($sv1!='-')){
if (strlen($sv1) =='15') {
$auto = 'https://ssplay.net/v/'.$sv1.'.html';    
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
if ($ahihi=='stm') {$css = 'grayy';} else {$css = 'redd';}  
echo '<button onclick="document.getElementById(`MotChill`).src = `https://ssplay.net/v/'.$sv1.'.html`" class="streaming-server btn-sv btn-hls btn '.$css.'">S-VS</button>';
} elseif (strpos($sv1, 'ssplay') == true) { 
echo '<button onclick="document.getElementById(`MotChill`).src = `'.$sv1.'`" class="streaming-server btn-sv btn-hls btn redd">SS-1</button>';
} elseif (strpos($sv1, 'short.ink') == true) {
echo '<button onclick="document.getElementById(`MotChill`).src = `'.$sv1.'`" class="streaming-server btn-sv btn-hls btn grayy">HY-1</button>';
}
} ?>                        
<?php if (($sv2) and ($sv2!='-')) { 
if(strlen($sv2) =='15') { 
echo '<button onclick="document.getElementById(`MotChill`).src = `https://ssplay.net/v/'.$sv2.'.html`" class="streaming-server btn-sv btn-hls btn redd">S-TM</button>';
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