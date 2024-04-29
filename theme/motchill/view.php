<?php
include 'theme/'.$theme.'head.php';
?>
<body >
<div id="page">
<?php
include 'theme/'.$theme.'/nav.php';
?>
                <div id="content">
            <div class="main-content">
                <div class="container">
<ol class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item">
                <span itemprop="name">Trang Chủ</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a href="/" itemprop="item">
                <span itemprop="name"><?php echo $quoc_gia; ?></span>
            </a>
            <meta itemprop="position" content="2" />
        </li>
        <li class="active"><?php echo $ten_phim; ?></li>
    </ol>
                        
     
                <div class="left-content" id="page-info">
        <div class="blockbody">
            <div class="info" itemscope itemtype="https://schema.org/TVSeries">
                <div class="poster">
                    <a class="adspruce-streamlink" href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?> (<?php echo $nam_chieu; ?>)">
                        <img itemprop="image" src="<?php echo $thumb; ?>" title="<?php echo $ten_phim; ?> (<?php echo $nam_chieu; ?>)" alt="<?php echo $ten_phim; ?> (<?php echo $nam_chieu; ?>)" />
                    </a>
                    <img class="hidden" itemprop="thumbnailUrl" src="<?php echo $thumb; ?>">
                    <ul class="buttons two-button">
                        <li>
                            <a class="btn-see btn btn-primary btn-download-link"
                                onclick="alert('Chức năng download đang được xây dựng và sẽ sớm ra mắt ^^');return false;">Tải Phim</a>
                        </li>
                        <li>
                            <a class="btn-see btn btn-danger btn-stream-link" href="/<?php echo $slug; ?>/tap-<?php if ($bole=='1') { echo '1'; } else { echo 'Full'; }?>.html" title="Xem phim <?php echo $ten_phim; ?> (<?php echo $nam_chieu; ?>)">Xem Phim</a>
                        </li>
                    </ul>
                    <div class="clear"></div>
                </div>
                <div class="text">
                    <h1>
                        <span class="title" itemprop="name"><?php echo $ten_phim; ?></span>
                    </h1>
                    <h2>
                        <span class="real-name"><?php echo $ten_goc; ?></span>
                    </h2>
                    <div class="dinfo">
                        <dl class="col">
                            <dt>Trạng Thái:</dt> <dd><font color="yellow"><?php echo $trang_thai; ?></font></dd>
                            
                            <dt>Ngôn Ngữ:</dt> <dd>Vietsub</dd>
                            <dt>Đạo diễn:</dt> <dd>N/A</dd>
                            <dt>Thời Lượng:</dt> <dd><?php echo $thoi_luong; ?></dd>
                            <dt>Năm Chiếu:</dt> <dd><?php echo $nam_chieu; ?></dd>
                            <dt>Lượt Xem:</dt> <dd><?php echo number_format($view, 0, '', '.'); ?></dd>
                            <dt>Quốc Gia:</dt> <dd><a href="/z.php?QG=<?php echo $quoc_gia; ?>" tite="<?php echo $quoc_gia; ?>"><?php echo $quoc_gia; ?></a></dd>
                            <dt>Thể loại:</dt> <dd><a href="/z.php?TL=<?php echo $the_loai; ?>" tite="<?php echo $the_loai; ?>"><?php echo $the_loai; ?></a></dd>
                            <dt>Diễn viên:</dt> <dd><?php echo $dien_vien; ?></dd>
                        </dl>
                    </div>
                    <div class="clear"></div>
                    <div class="btn-groups" align="center">
<style id="motchill">
:root {
  --star-size: 30px;
  --star-color: #fff;
  --star-background: #fc0;
}

.startext {
  font-size: 22px;
  line-height: 30px;
  font-family: sans-serif;
  text-align: center;
  padding: 4px;
}

.Stars {
  --percent: calc(var(--rating) / 10 * 100%);
  display: inline-block;
  font-size: var(--star-size);
  font-family: Times;
  line-height: 1;
}
.Stars::before {
  content: "★★★★★★★★★★";
  letter-spacing: 2px;
  background: linear-gradient(90deg, var(--star-background) var(--percent), var(--star-color) var(--percent));
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

  </style>                        
                        <div class="Stars" style="--rating: <?php $rrate = mt_rand(7, 9); $rate = mt_rand(1, 9); echo $rrate.'.'.$rate; ?>;" aria-label="Rating is <?php echo $rrate.','.$rate; ?>.<?php echo $rrate.','.$rate; ?> out of 10"></div>
                        <div class="clear"></div>
                        <div class="col" style="margin:0px">
                        <div id="div_average" align="center">
                        <span id="hint"></span> ( <span class="average" id="average" itemprop="ratingValue"><?php echo $rrate.','.$rate; ?></span> điểm / <span id="rate_count" itemprop="ratingCount"><?php echo number_format(mt_rand(999, 9999), 0, '', '.'); ?></span> lượt)
                                    </div>
                                    <meta itemprop="bestRating" content="10" />
                                    <meta itemprop="worstRating" content="1" />
                                </div>
                            </div>
                        </div>
                    
            </div>
            <div class="clear"></div>
<div class="list-episode">
<?php
if (file_exists($list)) {
include 'list/'.$slug.'.php';
$get_list = explode('<br/>', $list_sv);
foreach ($get_list as $get_list) {
if (strpos($get_list, '|') == true) {    
$list_tap = explode("|", $get_list)['0'];
echo '<a href="/'.$slug.'/tap-'.$list_tap.'.html">'.$list_tap.'</a>';
}}
}
?>                    
</div>

        <div class="detail">
                <div class="tabs-content" id="info-film">
                    <h3 class="heading"> Nội Dung Phim </h3>
                    <div class="tab">
                        <div style="text-align: justify;"><font color="limegreen">MotChill</font> giới thiệu bộ phim <?php echo $noi_dung; ?></div>
                    </div>
                </div>
        </div>

</div>

<?php
include 'theme/'.$theme.'/zComment.php';
?>

</div>
<div class="right-content">
<?php
include 'theme/'.$theme.'/BXH.php';
?>    
</div>

                    <div class="clear"></div>
                </div>
            </div>
        </div>
<?php
include 'theme/'.$theme.'/fot.php';
?>
