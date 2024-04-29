<?php
include 'theme/'.$theme.'/includes/head.php';
?>
    <div id="body-wrap" class="container">
        <div id="content">
            <div id="page-watch">
                <div class="block " id="movie">
                    <div class="blocktitle breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                        <div class="item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a href="/" title="HayChill" itemprop="item"> <span itemprop="name">HayChill</span> </a>
                            <meta itemprop="position" content="1"> </div>
                        <div class="item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a href="#" title="Phim Bộ" itemprop="item"> <span itemprop="name">Phim Bộ</span> </a>
                            <meta itemprop="position" content="2"> </div>
                        <h2 class="item last-child" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"> <a href="/<?php echo $slug; ?>.html" itemprop="item"> <span itemprop="name" title="<?php echo $ten_phim; ?>"><?php echo $ten_phim; ?> - Tập <?php echo $get_tap; ?></span> </a> <meta itemprop="position" content="3"> </h2>
                    </div>
                    <div class="blockbody">
                        <div id="media" style="position:relative" class="">
                            <div class="bufferchange_noti"></div>
                            <div class="addtrung_noti"></div>
                            <div class="ask_resume_container"></div>
                            <div class="player">
                                <div class="box-player" id="box-player">
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
                                    <div id="media-player"><iframe id="HayChill" width="100%" height="400px" src="<?php if ($tvc=='1') { echo '/TVC.php?link='.$auto; } else { echo $auto; } ?>" frameborder="0" scrolling="0" allowfullscreen></iframe></div>
                                </div>
                            </div>
                        </div>

                        <div class="player-toolbar">
                            <div><span id="prevtap"></span><span id="nexttap"></span><span class="toolx-btn off web" id="btn_zoombulb" title="Phóng to">Phóng to</span><span class="toolx-btn off web" id="btn_lightbulb" title="Tắt đèn">Tắt đèn</span><span class="toolx-btn active web"
                                id="btn_autonext" title="Chuyển tập">Autonext: On</span>
<span class="video-btn"><a href="<?php if (($get_tap > 1) and ($get_tap != 'Full') and ($get_tap != 'Trailer'))  { echo '/'.$slug.'/tap-'.($get_tap - 1).'.html'; } else { echo '#'; } ?>"><button class="btn-c btn-grey" style="margin-top">⫷ Trước</button></a>                            
</div>
<a href="<?php if (($get_tap > 0 ) and ($get_tap != 'Full') and ($get_tap != 'Trailer')) { echo '/'.$slug.'/tap-'.($get_tap + 1).'.html'; } else { echo '#'; } ?>"><button class="btn-c btn-grey">Sau ⫸</button></a>

                        </div>
                        <div class="serverlist" id="list-server" style="padding:10px;margin: 10px 0 0;">
                            <div class="server-item">
                                <div style="display: inline-block;margin-right:5px"> <span><i class="fa fa-database"></i> Server</span> </div>
                                <div style="display: inline-block;">
<?php if (($sv1) and ($sv1!='-')) { 
if(strlen($sv1) =='15') {
if ($ahihi=='ztm') {$css = 'grayy';} else {$css = 'redd';}  
echo '<button onclick="document.getElementById(`HayChill`).src = `https://ssplay.net/v/'.$sv1.'.html`" class="btn btn-sm btn-gray grayy">S-VS</button>';
} elseif (strpos($sv1, 'ssplay') == true) { 
echo '<button onclick="document.getElementById(`HayChill`).src = `'.$sv1.'`" class="btn btn-sm btn-gray redd">SS-1</button>';
} elseif (strpos($sv1, 'short.ink') == true) {
echo '<button onclick="document.getElementById(`HayChill`).src = `'.$sv1.'`" class="btn btn-sm btn-gray grayy">HY-1</button>';
}
} ?>                        
<?php if (($sv2) and ($sv2!='-')) { 
if(strlen($sv2) =='15') { 
echo '<button onclick="document.getElementById(`HayChill`).src = `https://ssplay.net/v/'.$sv2.'.html`" class="btn btn-sm btn-gray redd">S-TM</button>';
} elseif (strpos($sv2, 'ssplay') == true) {
echo '<button onclick="document.getElementById(`HayChill`).src = `'.$sv2.'`" class="btn btn-sm btn-gray redd">SS-2</button>';
} elseif (strpos($sv2, 'short.ink') == true) {
echo '<button onclick="document.getElementById(`HayChill`).src = `'.$sv2.'`" class="btn btn-sm btn-gray grayy">HY-2</button>';
}
} ?> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<style>
.grayy{
    color: black;
    font-size: 13px;
    padding: 5px 10px;
    border-radius: 3px;
    margin-left: 4px;
}
.redd {
    color: white;
    font-size: 13px;
    background: #c0205e;
    padding: 5px 10px;
    border-radius: 3px;
    margin-left: 4px;
}
</style>

<script type="text/javascript">
function go(loc) {
    document.getElementById('HayChill').src = loc;
     }
var buttons = $('button').click(function(){
  buttons.not(this).addClass('grayy');
  buttons.not(this).removeClass('redd');
  $(this).addClass('redd');
});
</script>              
                <div class="block" id="detail">
                    <div class="blockbody">
                        
<div class="detail">
                        <div class="blocktitle" id="tapmoi">
                            <div class="tabs" data-target="#info-film">
                                <div class="tab active" data-name="text">
                                    <h3>Danh Sách Tập Phim</h3>
                                </div>
                            </div>
                        </div>
<div class="list_tapmoi">
<?php
if (file_exists($list)) {
include 'list/'.$slug.'.php';
$get_list = explode('<br/>', $list_sv);
foreach ($get_list as $get_list) {
if (strpos($get_list, '|') == true) {    
$list_tap = explode("|", $get_list)['0'];
if ($get_tap == $list_tap) { $class = 'background: #c0205f;'; } else { $class = ''; }
echo '<span><a style="min-width: 50px;text-align: center;'.$class.'" href="/'.$slug.'/tap-'.$list_tap.'.html" title="Xem phim '.$ten_phim.' Tập '.$slug.'">'.$list_tap.'</a></span>';
}}
}
?>    
                            </div>
                        </div>                         
                    </div>
                </div>
            </div>
<?php
include 'theme/'.$theme.'/includes/zComment.php';
?>
            <div class="block" id="movie-update">
                <div class="blocktitle">
<h5 class="title">Phim Gợi Ý Cho Bạn</h5>
                </div>
                <div class="blockbody list" id="list-movie-update">
<ul class="list-film">
<?php
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,bole,trang_thai,thoi_luong,view FROM phim order by RAND() limit 4");
include 'theme/'.$theme.'/item.php';
?>                            
</ul>
                </div>
            </div>
        </div>
<?php
include 'theme/'.$theme.'/includes/BXH.php';
?>
    </div>
<?php
include 'theme/'.$theme.'/includes/fot.php';
?>