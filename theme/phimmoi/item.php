<?php 
while($qsql4 = mysqli_fetch_array($result)) {
$ten_phim = $qsql4['ten_phim'];
$ten_goc = $qsql4['ten_goc'];
$slug = $qsql4['slug'];
$trang_thai = $qsql4['trang_thai'];
$nam_chieu = $qsql4['nam_chieu'];
$quoc_gia = $qsql4['quoc_gia'];
$thoi_luong = $qsql4['thoi_luong'];
$bole = $qsql4['bole'];
$view = $qsql4['view'];
$thumb = $qsql4['thumb'];
if (strpos($thumb, 'imgur.com') == true)  {
$thumb = str_replace('.jpg', 'l.jpg', $qsql4['thumb']);
} elseif (strpos($thumb, 'ggpht.com') == true)  {
$thumb = str_replace('=s0', '=w400-rw', $qsql4['thumb']);    
}
?>     
<li>
<a class="movie-item m-block" title="<?php echo $ten_phim; ?> - <?php echo $ten_goc; ?>" href="/<?php echo $slug; ?>.html">
<div class="block-wrapper">
<div class="movie-thumbnail ratio-box ratio-3_4">
<div class="public-film-item-thumb ratio-content" style="background-image:url('<?php echo $thumb; ?>')"></div>
</div>
<div class="movie-meta">
<div class="movie-title-1"><?php echo $ten_phim; ?></div><span class="movie-title-2"><?php echo $ten_goc; ?></span>
<span class="movie-title-chap"><img style="width:20px !important;height:15px !important; min-height:10px;position:static;" src="/theme/phimmoi/css/<?php echo $quoc_gia; ?>.jpg"/> <?php echo $nam_chieu; ?></span>
<span style="float:right; font-size: 11px; margin-top:5px"><?php echo number_format($view, 0, '', '.'); ?> 💕</span>
<span class="ribbon"><?php if ($bole == '2') { echo $thoi_luong.' '.$trang_thai; } elseif ((strpos($trang_thai, 'ull') == true)) { echo $trang_thai; } else { echo 'Tập '.$trang_thai; } ?></span>
</div>
</div>
</a>
</li>
<?php } ?>