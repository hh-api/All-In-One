<ul class="film-moi tab-content">
<?php 
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,trang_thai,thoi_luong FROM phim WHERE `bole`='2' order by time DESC limit 8");
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
$thumb = str_replace('.jpg', 'l.jpg', $qsql4['thumb']);
} elseif (strpos($thumb, 'ggpht.com') == true)  {
$thumb = str_replace('=s0', '=w400-rw', $qsql4['thumb']);    
}
?>     
<li class="item" style="margin: 0 0 0 7px;">
    <span class="label" style="background: darkred; border-bottom: none;"><?php echo $thoi_luong.' '. $trang_thai; ?></span>
    <a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?> | <?php echo $ten_goc; ?> (<?php echo $nam_chieu; ?>)">
        <img class="img-film lazy" data-original="<?php echo $thumb; ?>" title="<?php echo $ten_phim; ?> | <?php echo $ten_goc; ?> (<?php echo $nam_chieu; ?>)" alt="<?php echo $ten_phim; ?> (<?php echo $nam_chieu; ?>)" />
        <i class="icon-play"></i>
    </a>
    <span class="label" style="background: #0066CC; border-bottom: none;right:0px;margin-top:185px;border-radius: 5px 0 0 5px;"><?php $view = './view/'.$slug.'.php'; echo number_format(file_get_contents($view), 0, '', '.'); ?> 💕</span>
    <div class="name">
        <span>
            <a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?> | <?php echo $ten_goc; ?> (<?php echo $nam_chieu; ?>)"><?php echo $ten_phim; ?> (<?php echo $nam_chieu; ?>)
            </a>
        </span>
    </div>
</li>
<?php } ?>
            </ul>