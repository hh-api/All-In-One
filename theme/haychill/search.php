<?php
include 'theme/'.$theme.'/head.php';
?>
    <div id="body-wrap" class="container">
        <script type="application/ld+json" class="rank-math-schema">{"@context":"https://schema.org","@graph":[{"@type":"Person","@id":"<?php echo $domain; ?>/#person","name":"HayChill"},{"@type":"WebSite","@id":"<?php echo $domain; ?>/#website","url":"<?php echo $domain; ?>","name":"HayChill","publisher":{"@id":"<?php echo $domain; ?>/#person"},"inLanguage":"vi","potentialAction":{"@type":"SearchAction","target":"<?php echo $domain; ?>/search.php?s={search_term_string}","query-input":"required name=search_term_string"}},
    {"@type":"CollectionPage","@id":"<?php echo $domain; ?>#webpage","url":"<?php echo $domain; ?>","name":"HayChill - phim thuyết minh, lồng tiếng, chiếu rạp","about":{"@id":"<?php echo $domain; ?>/#person"},"isPartOf":{"@id":"<?php echo $domain; ?>/#website"},"inLanguage":"vi"}]}</script>
        <div id="content">
            <div class="block" id="page-list">
                <div class="blocktitle breadcrumbs" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <div class="item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="/" title="HayChill" itemprop="item"><span itemprop="name">HayChill</span></a>
                        <meta itemprop="position" content="1">
                    </div>
                    <div class="item" itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem"><a href="#" title="Phim <?php echo $s;?>" itemprop="item"><span itemprop="name">Phim <?php echo $s;?></span></a>
                        <meta itemprop="position" content="2">
                    </div>
                </div>
                <div class="blockbody">
                    <ul class="list-film">
<?php 
//phan trang	            
$sodu_lieu = mysqli_query($apizophim, "SELECT id FROM phim where ten_phim like '%$s%' or slug like '%$s2%' or dien_vien like '%$s%' or ten_goc like '%$s%'");
$sodu_lieu = mysqli_num_rows($sodu_lieu);
$baitren_mottrang = 40;
$sotrang = ceil($sodu_lieu/$baitren_mottrang);
$dau = ($trang - 1)*$baitren_mottrang;
$cuoi = $baitren_mottrang;
$result = mysqli_query($apizophim, "SELECT id,ten_phim,ten_goc,quoc_gia,nam_chieu,thumb,slug,trang_thai,thoi_luong,bole,view FROM phim where ten_phim like '%$s%' or slug like '%$s2%' or dien_vien like '%$s%' or ten_goc like '%$s%' order by time DESC limit $dau, $cuoi");
include 'theme/'.$theme.'/item.php';
?>
                    </ul>
                    <div class="wp-pagenavi">
<?php if($trang > 3) {?>                        
<a href="<?php echo '/search.php?s='.$s.'&trang=1'; ?>">1</a>
<span>...</span>
<?php } ?>
<?php if($trang > 2) {?>
<a href="<?php echo '/search.php?s='.$s.'&trang='.($trang - 2); ?>"><?php echo ($trang - 2); ?></a>
<?php } ?>
<?php if($trang > 1) {?>
<a href="<?php echo '/search.php?s='.$s.'&trang='.($trang - 1); ?>"><?php echo ($trang - 1); ?></a>
<?php } ?>    
<span aria-current="page" class="current"><?php echo $trang; ?></span>
<?php if (($trang + 1) < $sotrang) {?>
<a href="<?php echo '/search.php?s='.$s.'&trang='.($trang + 1); ?>"><?php echo ($trang + 1); ?></a>
<?php } ?>
<?php if (($trang + 2) < $sotrang) {?>
<a href="<?php echo '/search.php?s='.$s.'&trang='.($trang + 2); ?>"><?php echo ($trang + 2); ?></a>
<?php } ?>
<?php if (($trang + 3) < $sotrang) {?>
<a href="<?php echo '/search.php?s='.$s.'&trang='.($trang + 3); ?>"><?php echo ($trang + 3); ?></a>
<?php } ?>
<span>...</span>
<a href="<?php echo '/search.php?s='.$s.'&trang='.($sotrang); ?>"><?php echo 'Cuối ('.$sotrang.')'; ?></a>
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
