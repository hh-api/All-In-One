<?php
include 'theme/'.$theme.'/head.php';
?>
    <div id="body-wrap" class="container">
        <h1 style="display:none">Phim <?php echo $ten_phim; ?> - <?php echo $ten_goc; ?> (2023) Thuyết Minh, Vietsub HayChill</h1>
        <div id="content">
            <div class="block" id="page-info">
                <div class="blocktitle breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <div class="item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="/" title="HayChill" itemprop="item"> <span itemprop="name">HayChill</span> </a>
                        <meta itemprop="position" content="1"> </div>
                    <div class="item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                        <a href="#" title="Phim Bộ" itemprop="item"> <span itemprop="name">Phim Bộ</span> </a>
                        <meta itemprop="position" content="2"> </div>
                    <h2 class="item last-child" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"> <a href="/<?php echo $slug; ?>.html" itemprop="item"> <span itemprop="name" title="<?php echo $ten_phim; ?>"><?php echo $ten_phim; ?></span> </a> <meta itemprop="position" content="3"> </h2>
                </div>
                <div class="blockbody">
                    <div class="info">
                        <div class="poster">
                            <a href="/<?php echo $slug; ?>.html" title="Dĩ Ái Vi Doanh"><img class="lazyload" src="/theme/haychill/css/default.webp" data-src="<?php echo $thumb; ?>" alt="<?php echo $ten_phim; ?> - <?php echo $ten_goc; ?> HayChill">
                            </a>
                        </div>
                        <div>
                            <div class="title fr"><?php echo $ten_phim; ?></div>
                            <div class="name2 fr">
                                <h2><font color="orange"><b><?php echo $ten_goc; ?></b></font></h2> <span class="year"> (<?php echo $nam_chieu; ?>)</span>
                            </div>
                            <div class="dinfo fr dinfo-oveflow">
                                <dl class="col1">
                                    <dt>Trạng Thái:</dt> <dd class="status"><?php echo $trang_thai; ?></dd>
                                    <dt>Quốc Gia:</dt> <dd><?php echo $quoc_gia; ?></dd>
                                    <dt>Thể Loại:</dt> <dd><?php echo $the_loai; ?></dd>
                                    <dt>Diễn Viên:</dt> <dd><?php echo $dien_vien; ?></dd>
                                </dl>
                                <dl class="col2">
                                    <dt>Đạo Diễn:</dt> <dd>N/A</dd>
                                    <dt>Thời Lượng:</dt> <dd><?php echo $thoi_luong; ?></dd>
                                    <dt>Năm Chiếu:</dt> <dd><?php echo $nam_chieu; ?></dd>
                                    <dt>Lượt Xem:</dt> <dd><?php echo number_format($view, 0, '', '.'); ?></dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="grid-watch">
                        <div>
                            <div class="dinfo fr dinfo-grid">
                                <div>
                                    <div class="btn-groups">
                                        <a href="/<?php echo $slug; ?>/tap-<?php if ($bole=='1') { echo '1'; } else { echo 'Full'; }?>.html" class="btn-watch" title="Xem Phim <?php echo $ten_phim; ?>"></a>
                                    </div>
                                </div>
                                <div class="btn-groups">
                                    <a target="_blank" href="https://api-zophim.blogspot.com/2023/01/<?php echo $slug; ?>.html" class="btn-download" title="Tải Phim <?php echo $ten_phim; ?>"></a>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top:5px">
                            <div class="box-rating">
                                <div class="average" id="average"><?php echo $rrate.','.$rate;?></div>
                                <div>
<style id="motchill">
:root {
  --star-size: 30px;
  --star-color: #fff;
  --star-background: #fc0;
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
<div class="Stars" style="--rating: <?php echo $rrate.'.'.$rate; ?>;" aria-label="Rating is <?php echo $rrate.'.'.$rate; ?>.<?php echo $rrate.'.'.$rate; ?> out of 10"></div>
                                    <div id="div_average" style="line-height: 16px; margin: 0 5px; display: table-cell;"><span class="rate_count"><i class="fa fa-bar-chart" aria-hidden="true"></i> <span id="rate_count"><?php echo number_format(mt_rand(99, 999), 0, '', '.'); ?></span> lượt đánh giá</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

<?php if (($dien_vien) and ($dien_vien!='N/A')) { ?> 
<div class="detail">
                        <div class="blocktitle" id="tapmoi">
                            <div class="tabs" data-target="#info-film">
                                <div class="tab active" data-name="text">
                                    <h3>Diễn Viên</h3>
                                </div>
                            </div>
                        </div>
<style type="text/css">
        #scrolly{
            width: 100%;
            height: 200px;
            overflow: auto;
            overflow-y: hidden;
            margin: 0 auto;
            white-space: nowrap
        }

    </style>
<div id='scrolly'><table><tr>    
<?php $get_dv = explode(", ", $dien_vien);
foreach ($get_dv as $get_dv){
?>
<td style="padding:2px;"> 
<?php 
echo '<a href="/search.php?s='.$get_dv.'"><img style="width:120px;height:160px" src="https:///img.vicdn.top/'.$get_dv.'.jpg" onerror="this.src=`https://img.vicdn.top/0.jpg`" alt="Diễn Viên'.$get_dv.'"/><br/><div align="center" style="padding-top:3px;font-size:11px"><font color="green">'.$get_dv.'</font></div><br/></a>';    
?>
</td>
<?php
}
?>
</tr></table></div></div>
<?php } ?>                    

<div class="detail">
                        <div class="blocktitle" id="tapmoi">
                            <div class="tabs" data-target="#info-film">
                                <div class="tab active" data-name="text">
                                    <h3>Tập mới nhất</h3>
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
echo '<span><a style="min-width: 50px;text-align: center;" href="/'.$slug.'/tap-'.$list_tap.'.html" title="Xem phim '.$ten_phim.' Tập '.$slug.'">'.$list_tap.'</a></span>';
}}
}
?>                            
                        </div>
                        <div class="blocktitle">
                            <div class="tabs" data-target="#info-film">
                                <div class="tab active" data-name="text">
                                    <h3>Thông tin phim</h3>
                                </div>
                            </div>
                        </div>
                        <div class="tabs-content" id="info-film">
                            <div class="text"><?php echo $noi_dung; ?></div>
                        </div>
                    </div>
                </div>
            </div>

<?php
include 'theme/'.$theme.'/zComment.php';
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
include 'theme/'.$theme.'/BXH.php';
?>
    </div>
<?php
include 'theme/'.$theme.'/fot.php';
?>
