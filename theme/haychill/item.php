<?php 
while($qsql4 = mysqli_fetch_array($result)) {
$ten_phim = $qsql4['ten_phim'];
$ten_goc = $qsql4['ten_goc'];
$slug = $qsql4['slug'];
$trang_thai = $qsql4['trang_thai'];
$thoi_luong = $qsql4['thoi_luong'];
$nam_chieu = $qsql4['nam_chieu'];
$quoc_gia = $qsql4['quoc_gia'];
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
                                <div class="inner">
                                    <a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>"><img class="lazyload" src="/theme/haychill/css/default.webp" data-src="<?php echo $thumb; ?>" alt="<?php echo $ten_phim; ?> HayChilll.top" />
                                    </a>
                                    <div class="info">
                                        <div class="name"><a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>"><span class="hide">Xem phim </span><?php echo $ten_phim; ?></a>
                                        </div>
                                        <div class="name2"><?php echo $ten_goc; ?></div>
                                    </div>
                                    <div class="status"><?php if ($bole == '2') { echo $thoi_luong.' '.$trang_thai; } elseif ((strpos($trang_thai, 'ull') == true)) { echo $trang_thai; } else { echo 'Tập '.$trang_thai; } ?></div>
                                    <div class="stats">
                                        <div class="year"><?php echo $nam_chieu; ?></div><span class="liked"><font color="blue"><?php echo number_format($view, 0, '', '.'); ?></font></span>
                                    </div>
                                </div>
                            </li>
<?php } ?>