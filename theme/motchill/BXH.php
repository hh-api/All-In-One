<div class="trailer block">
    <div class="caption">
        <span class="uppercase">Phim Lẻ Hot</span>
    </div>
<ul class="list-film">
<?php 
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,trang_thai,thoi_luong FROM phim WHERE `bole`='2' and `nam_chieu`='2023' order by id DESC limit 10");
while($qsql4 = mysqli_fetch_array($result)) {
$ten_phim = $qsql4['ten_phim'];
$ten_goc = $qsql4['ten_goc'];
$slug = $qsql4['slug'];
$trang_thai = $qsql4['trang_thai'];
$nam_chieu = $qsql4['nam_chieu'];
$quoc_gia = $qsql4['quoc_gia'];
$thoi_luong = $qsql4['thoi_luong'];
$thumb = $qsql4['thumb'];
if (strpos($thumb, 'imgur.com') == true)  {
$thumb = str_replace('.jpg', 'm.jpg', $qsql4['thumb']);
} elseif (strpos($thumb, 'ggpht.com') == true)  {
$thumb = str_replace('=s0', '=w200-rw', $qsql4['thumb']);    
}
?>    
    <li class="film-item-ver">
                <a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>">
                    <img class="avatar" title="<?php echo $ten_phim; ?> | <?php echo $ten_goc; ?> (<?php echo $nam_chieu; ?>)" alt="<?php echo $ten_phim; ?> | <?php echo $ten_goc; ?> (<?php echo $nam_chieu; ?>)" src="<?php echo $thumb; ?>" />
                </a>
                <div class="title">
                    <p class="name">
                        <a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?> | <?php echo $ten_goc; ?> (<?php echo $nam_chieu; ?>)"><?php echo $ten_phim; ?></a>
                    </p>
                    <p class="real-name"><font color="orange"><?php echo $ten_goc; ?></font></p>
                </div>
                <p class="real-name"><?php echo $nam_chieu; ?> | <?php echo $thoi_luong.' '.$trang_thai; ?></p>
                <p class="real-name"><font color="limegreen"><?php echo $quoc_gia; ?></font></p>
    </li>
<?php } ?>
</ul>
</div>

<!------------------------------------------------------------------------------------------------------>

<div class="trailer block">
    <div class="caption">
        <span class="uppercase">Phim Bộ Hot</span>
    </div>
<ul class="list-film">
<?php 
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,trang_thai FROM phim WHERE `bole`='1' and `nam_chieu`='2023' order by id DESC limit 10");
while($qsql4 = mysqli_fetch_array($result)) {
$ten_phim = $qsql4['ten_phim'];
$ten_goc = $qsql4['ten_goc'];
$slug = $qsql4['slug'];
$trang_thai = $qsql4['trang_thai'];
$nam_chieu = $qsql4['nam_chieu'];
$quoc_gia = $qsql4['quoc_gia'];
$thumb = $qsql4['thumb'];
if (strpos($thumb, 'imgur.com') == true)  {
$thumb = str_replace('.jpg', 'm.jpg', $qsql4['thumb']);
} elseif (strpos($thumb, 'ggpht.com') == true)  {
$thumb = str_replace('=s0', '=w200-rw', $qsql4['thumb']);    
}
?>    
    <li class="film-item-ver">
                <a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>">
                    <img class="avatar" title="<?php echo $ten_phim; ?> | <?php echo $ten_goc; ?> (<?php echo $nam_chieu; ?>)" alt="<?php echo $ten_phim; ?> | <?php echo $ten_goc; ?> (<?php echo $nam_chieu; ?>)" src="<?php echo $thumb; ?>" />
                </a>
                <div class="title">
                    <p class="name">
                        <a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?> | <?php echo $ten_goc; ?> (<?php echo $nam_chieu; ?>)"><?php echo $ten_phim; ?></a>
                    </p>
                    <p class="real-name"><font color="orange"><?php echo $ten_goc; ?></font></p>
                </div>
                <p class="real-name"><?php echo $nam_chieu; ?> | <?php echo $trang_thai; ?></p>
                <p class="real-name"><font color="limegreen"><?php echo $quoc_gia; ?></font></p>
    </li>
<?php } ?>
</ul>
</div>