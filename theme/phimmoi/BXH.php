
                <!-- Box: Top phim lẻ -->
                <div class="right-box top-film-week">
                    <h2 class="right-box-header star-icon"><span>Phim Lẻ Hot Hôm Nay</span></h2>
                    <div class="right-box-content">
                        <ul class="list-top-movie slim-scroll" id="list-top-film-week">
<?php 
$sql4 = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,trang_thai,thoi_luong,view FROM phim WHERE `bole`='2' and `nam_chieu`='2023' order by id DESC limit 5");
while($qsql4 = mysqli_fetch_array($sql4)){
$ten_phim = $qsql4['ten_phim'];
$ten_goc = $qsql4['ten_goc'];
$slug = $qsql4['slug'];
$trang_thai = $qsql4['trang_thai'];
$nam_chieu = $qsql4['nam_chieu'];
$quoc_gia = $qsql4['quoc_gia'];
$thumb = $qsql4['thumb'];
if (strpos($thumb, 'imgur.com') == true)  {
$thumb = str_replace('.jpg', 'm.jpg', $qsql4['thumb']);
} elseif (strpos($thumb, 'lh3.ggpht.com') == true)  {
$thumb = str_replace('=s0', '=s150', $qsql4['thumb']);    
}
$view = $qsql4['view'];
$thoi_luong = $qsql4['thoi_luong'];
?>                             
                            <li class="list-top-movie-item">
                                <a class="list-top-movie-link" title="<?php echo $ten_phim; ?> - <?php echo $ten_goc; ?>" href="/<?php echo $slug; ?>.html">
                                    <div class="list-top-movie-item-thumb" style="background-image: url('<?php echo $thumb; ?>')"></div>
                                    <div class="list-top-movie-item-info">
                                    <span class="list-top-movie-item-vn"><font color="limegreen"><?php echo $ten_phim; ?></font></span>
                                    <span class="list-top-movie-item-en"><?php echo $ten_goc; ?></span>
                                    <span class="list-top-movie-item-view"><?php echo $thoi_luong.' '.$trang_thai; ?></span>
                                    <span class="rate-vote rate-vote-10"></span>
                                    <span class="list-top-movie-item-view"> 💕<?php echo number_format($view, 0, '', '.'); ?> Lượt Xem</span>
                                    </div>
                                </a>
                            </li>
<?php } ?>                             
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <!-- /Box: Top phim lẻ -->

                <!-- Box: Top phim bộ -->
                <div class="right-box top-film-week">
                    <h2 class="right-box-header star-icon"><span>Phim Bộ Hot Hôm Nay</span></h2>
                    <div class="right-box-content">
                        <ul class="list-top-movie slim-scroll" id="list-top-film-week">
<?php 
$sql4 = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,trang_thai,view FROM phim WHERE `bole`='1' order by view DESC limit 5");
while($qsql4 = mysqli_fetch_array($sql4)) {
$ten_phim = $qsql4['ten_phim'];
$ten_goc = $qsql4['ten_goc'];
$slug = $qsql4['slug'];
$trang_thai = $qsql4['trang_thai'];
$nam_chieu = $qsql4['nam_chieu'];
$quoc_gia = $qsql4['quoc_gia'];
$thumb = $qsql4['thumb'];
if (strpos($thumb, 'imgur.com') == true)  {
$thumb = str_replace('.jpg', 'm.jpg', $qsql4['thumb']);
} elseif (strpos($thumb, 'lh3.ggpht.com') == true)  {
$thumb = str_replace('=s0', '=s150', $qsql4['thumb']);    
}
$view = $qsql4['view'];
?>                             
                            <li class="list-top-movie-item">
                                <a class="list-top-movie-link" title="<?php echo $ten_phim; ?> - <?php echo $ten_goc; ?>" href="/<?php echo $slug; ?>.html">
                                    <div class="list-top-movie-item-thumb" style="background-image: url('<?php echo $thumb; ?>')"></div>
                                    <div class="list-top-movie-item-info">
                                    <span class="list-top-movie-item-vn"><font color="orange"><?php echo $ten_phim; ?></font></span>
                                    <span class="list-top-movie-item-en"><?php echo $ten_goc; ?></span>
                                    <span class="list-top-movie-item-view"><?php echo $trang_thai; ?></span>
                                    <span class="rate-vote rate-vote-10"></span>
                                    <span class="list-top-movie-item-view"> 💕<?php echo number_format($view, 0, '', '.'); ?> Lượt Xem</span>
                                    </div>
                                </a>
                            </li>
<?php } ?>
                        </ul>
                    </div>
                </div>
                <div class="clear"></div>
                <!-- /Box: Top phim bộ -->
