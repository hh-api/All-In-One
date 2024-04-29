<?php
include 'databases.php';
$slug = $_GET['slug'];
$sql = mysqli_query($apizophim, "SELECT * FROM phim where `slug`='".$slug."'");
if (mysqli_num_rows($sql) < 1) {
echo '<script>location.href="/index.php";</script>';    
}
$get_info = mysqli_fetch_array($sql);
$ten_phim = $get_info['ten_phim'];
$ten_goc = $get_info['ten_goc'];
$noi_dung = $get_info['noi_dung'];
$nam_chieu = $get_info['nam_chieu'];
$the_loai = $get_info['the_loai'];
$quoc_gia = $get_info['quoc_gia'];
$dien_vien = $get_info['dien_vien'];
$trang_thai = $get_info['trang_thai'];
$thoi_luong = $get_info['thoi_luong'];
$bole = $get_info['bole'];
$hide = $get_info['hide'];
$thumb = $get_info['thumb'];
$view = $get_info['view'];
$view = $view + mt_rand(1, 9);
$view_day = $get_info['view_day'];
$view_day = $view_day + 1;
$run = mysqli_query($apizophim, "UPDATE phim SET `view`='$view',`view_day`='$view_day' where `slug`='".$slug."'");
if (strpos($thumb, 'imgur.com') == true)  {
$thumb = str_replace('.jpg', 'l.jpg', $get_info['thumb']);
} elseif (strpos($thumb, 'lh3.ggpht.com') == true)  {
$thumb = str_replace('=s0', '=w400-rw', $get_info['thumb']);    
}


if ($hide=='1') { echo '<script>location.href="/index.php";</script>'; }

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
'.$list_all.'"; ?>');
fclose($myfile);
}
file_put_contents($cache_movie, '');
}
}

?>
<script type="application/ld+json">{ "@context": "http://schema.org", "@type": "VideoObject",
        "name": "Phim <?php echo $ten_phim; ?> Thuyết Minh, Vietsub",
        "description": "<?php echo $noi_dung; ?>",
        "thumbnailUrl": "<?php echo $thumb; ?>",
        "uploadDate": "<?php echo date("Y-m-d H:i:s"); ?>",
        "contentUrl": "<?php echo $domain.'/'.$slug; ?>.html",
        "duration": "PT45M33S",
        "aggregateRating": { "@type": "AggregateRating",
        "ratingValue": "<?php $rrate = mt_rand(7, 9); $rate = mt_rand(1, 9); echo $rrate.','.$rate;?>",
        "bestRating": "10",
        "worstRating": "0",
        "ratingCount": "<?php echo number_format(mt_rand(99, 999), 0, '', '.'); ?>" } }
</script>
<?php
include 'theme/'.$theme.'/view.php';
?>