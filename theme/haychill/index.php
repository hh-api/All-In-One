<?php
include 'theme/'.$theme.'/head.php';
?>
<div id="body-wrap" class="container">
<script type="application/ld+json" class="rank-math-schema">{"@context":"https://schema.org","@graph":[{"@type":"Person","@id":"<?php echo $domain; ?>/#person","name":"HayChill"},{"@type":"WebSite","@id":"<?php echo $domain; ?>/#website","url":"<?php echo $domain; ?>","name":"HayChill","publisher":{"@id":"<?php echo $domain; ?>/#person"},"inLanguage":"vi","potentialAction":{"@type":"SearchAction","target":"<?php echo $domain; ?>/search.php?s={search_term_string}","query-input":"required name=search_term_string"}},
    {"@type":"CollectionPage","@id":"<?php echo $domain; ?>#webpage","url":"<?php echo $domain; ?>","name":"HayChill - phim thuyết minh, lồng tiếng, chiếu rạp","about":{"@id":"<?php echo $domain; ?>/#person"},"isPartOf":{"@id":"<?php echo $domain; ?>/#website"},"inLanguage":"vi"}]}</script>        
        <h1 class="hide">xem phim thuyết minh nhanh nhất giọng đọc hay tại HayChill</h1>
        <div id="content">
            <div id="movie-hot" class="viewport">
                <div class="prev"></div>
                <ul class="listfilm overview">
<?php
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,bole,trang_thai,thoi_luong FROM phim WHERE `hot` = '1' order by time DESC limit 10");
while($qsql4 = mysqli_fetch_array($result)) {
$ten_phim = $qsql4['ten_phim'];
$ten_goc = $qsql4['ten_goc'];
$slug = $qsql4['slug'];
$trang_thai = $qsql4['trang_thai'];
$thoi_luong = $qsql4['thoi_luong'];
$nam_chieu = $qsql4['nam_chieu'];
$quoc_gia = $qsql4['quoc_gia'];
$bole = $qsql4['bole'];
$thumb = $qsql4['thumb'];
if (strpos($thumb, 'imgur.com') == true)  {
$thumb = str_replace('.jpg', 'l.jpg', $qsql4['thumb']);
} elseif (strpos($thumb, 'ggpht.com') == true)  {
$thumb = str_replace('=s0', '=w400-rw', $qsql4['thumb']);    
}
?>
                    <li>
                        <a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>"><img class="lazyload" src="/theme/haychill/css/default.webp" data-src="<?php echo $thumb; ?>" title="<?php echo $ten_phim; ?> - <?php echo $ten_goc; ?>" alt="<?php echo $ten_phim; ?> - <?php echo $ten_goc; ?>" />
                        </a>
                        <div class="overlay">
                            <div class="name"><a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>"><?php echo $ten_phim; ?></a>
                            </div>
                            <div class="name2"><?php echo $ten_goc; ?></div>
                        </div>
                        <div class="status"><?php if ($bole == '2') { echo $thoi_luong.' '.$trang_thai; } elseif ((strpos($trang_thai, 'ull') == true)) { echo $trang_thai; } else { echo 'Tập '.$trang_thai; } ?></div>
                    </li>
<?php } ?>
                </ul>
                <div class="next"></div>
            </div>
            <div class="divider"></div>
            <div class="block" id="movie-recommend">
                <div class="col1">
                    <a href="/qua-nhanh-qua-nguy-hiem-10.html"><img src="https://lh5.ggpht.com/p/AF1QipMBexdmsa-KYl1DgTq8QqG6jBhzQ0tM-KH9As5G=s0"/>
                    </a>
                </div>
                <div class="col2">
                    <div class="blocktitle">
                        <div class="tabs" data-target="#phim-bo-hay">
                            <div class="tab active" data-name="phim-bo-moi">Phim Đang Chiếu</div>
                            <div class="tab" data-name="phim-bo-full">Đã Hoàn Thành</div>
                        </div>
                    </div>
                    <div class="blockbody" id="phim-bo-hay">
                        <ul class="list tab phim-bo-moi">
<?php
$result = mysqli_query($apizophim, "SELECT ten_phim,slug,trang_thai FROM phim WHERE `trang_thai` LIKE '%/%' order by time DESC limit 14");
while($qsql4 = mysqli_fetch_array($result)) {
$ten_phim = $qsql4['ten_phim'];
$slug = $qsql4['slug'];
$trang_thai = $qsql4['trang_thai'];
?>                            
                            <li><a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>"><?php echo $ten_phim; ?></a><span><?php echo $trang_thai; ?></span>
                            </li>
<?php } ?>
                        </ul>
                        <ul class="list tab phim-bo-full hide">
<?php
$result = mysqli_query($apizophim, "SELECT ten_phim,slug,trang_thai FROM phim WHERE `trang_thai` LIKE '%Full%' order by time DESC limit 14");
while($qsql4 = mysqli_fetch_array($result)) {
$ten_phim = $qsql4['ten_phim'];
$slug = $qsql4['slug'];
$trang_thai = $qsql4['trang_thai'];
?>                            
                            <li><a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>"><?php echo $ten_phim; ?></a><span><?php echo $trang_thai; ?></span>
                            </li>
<?php } ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="divider"></div>
            <div class="block" id="movie-update">
                <div class="blocktitle">
                    <h2 class="title" style="padding-right:10px">Phim Mới</h2>
                    <div class="types" data-target="#list-movie-update">
                        <div class="type"><span data-name="all" class="btn active">Toàn Bộ</span>
                        </div>
                        <h3 class="type"><a data-name="au-my" class="btn " href="" title="Phim Âu Mỹ">Âu Mỹ</a></h3>
                        <h3 class="type"><a data-name="trung-quoc" class="btn " href="" title="Phim Trung Quốc">Trung Quốc</a></h3>
                        <h3 class="type"><a data-name="han-quoc" class="btn" href="" title="Phim Hàn Quốc">Hàn Quốc</a></h3>
                    </div>
                </div>
                <div class="blockbody list" id="list-movie-update">
                    <div class="tab all">
                        <ul class="list-film">
<?php
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,bole,trang_thai,thoi_luong,view FROM phim WHERE `the_loai` NOT LIKE '%Hoạt%' order by time DESC limit 12");
include 'theme/'.$theme.'/item.php';
?>                            
                        </ul>
                    </div>
                    <div class="tab au-my hide">
                        <ul class="list-film">
<?php
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,bole,slug,trang_thai,thoi_luong,view FROM phim WHERE `quoc_gia` LIKE 'Âu Mỹ' and `the_loai` NOT LIKE '%Hoạt%' order by time DESC limit 12");
include 'theme/'.$theme.'/item.php';
?>                            
                        </ul>
                    </div>
                    <div class="tab trung-quoc hide">
                        <ul class="list-film">
<?php
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,bole,trang_thai,thoi_luong,view FROM phim WHERE `quoc_gia` LIKE 'Trung Quốc' and `the_loai` NOT LIKE '%Hoạt%' order by time DESC limit 12");
include 'theme/'.$theme.'/item.php';
?>                            
                        </ul>
                    </div>
                    <div class="tab han-quoc hide">
                        <ul class="list-film">
<?php
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,bole,trang_thai,thoi_luong,view FROM phim WHERE `quoc_gia` LIKE 'Hàn Quốc' and `the_loai` NOT LIKE '%Hoạt%' order by time DESC limit 12");
include 'theme/'.$theme.'/item.php';
?>                            
                        </ul>
                    </div>
                </div>
            </div>
            <div class="block" id="hh-update">
                <div class="blocktitle">
                    <h2 class="title" style="padding-right:10px">Phim Hoạt Hình</h2>
                    <div class="types" data-target="#list-hh-update">
                        <div class="type"><span data-name="hhall" class="btn active">Toàn Bộ</span>
                        </div>
                        <h3 class="type"><a data-name="hhanime" class="btn " href="" title="Anime Nhật Bản">Nhật Bản</a></h3>
                        <h3 class="type"><a data-name="hhtq" class="btn" href="" title="Hoạt hình Trung Quốc">Trung Quốc</a></h3>
                    </div>
                </div>
                <div class="blockbody list" id="list-hh-update">
                    <div class="tab hhall">
                        <ul class="list-film">
<?php
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,bole,trang_thai,thoi_luong,view FROM phim WHERE `the_loai` LIKE '%Hoạt%' order by time DESC limit 12");
include 'theme/'.$theme.'/item.php';
?>                            
                        </ul>
                    </div>
                    <div class="tab hhanime hide">
                        <ul class="list-film">
<?php
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,bole,trang_thai,thoi_luong,view FROM phim WHERE `quoc_gia` LIKE 'Nhật Bản' and `the_loai` LIKE '%Hoạt%' order by time DESC limit 12");
include 'theme/'.$theme.'/item.php';
?>                            
                        </ul>
                    </div>
                    <div class="tab hhtq hide">
                        <ul class="list-film">
<?php
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,bole,trang_thai,thoi_luong,view FROM phim WHERE `quoc_gia` LIKE 'Trung Quốc' and `the_loai` LIKE '%Hoạt%' order by time DESC limit 12");
include 'theme/'.$theme.'/item.php';
?>                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
<?php
include 'theme/'.$theme.'/BXH.php';
?> 
    </div>
<?php
include 'theme/'.$theme.'/fot.php';
?>
