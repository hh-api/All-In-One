<?php
include 'theme/'.$theme.'/head.php';
?>
<body>
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
                <span itemprop="name">Xem phim</span>
            </a>
            <meta itemprop="position" content="1" />
        </li>
        <li class="active">Phim <?php echo $s;?></li>
    </ol>
    <form id="form-filter" class="form-filter" method="GET" action="/z.php">
    <div class="filter-item">
<select name="BL" form="form-filter" class="input form-control">
<?php if ($BL) { ?> 
<option value="<?php echo $BL;?>"><?php if ($BL=='1') { echo 'Phim Bộ'; } else { echo 'Phim Lẻ'; }?></option>
<option value="">-- Tất Cả --</option>
<?php } else { ?>
<option value="">-- Định Dạng --</option>
<?php } ?>
            <option value="1">Phim Bộ</option>
            <option value="2">Phim Lẻ</option>
        </select>
    </div>
    <div class="filter-item">
<select name="TL" form="form-filter" class="input form-control">
<?php if ($TL) { ?> 
<option value="<?php echo $TL;?>"><?php echo $the_loai;?></option>
<option value="">-- Tất Cả --</option>
<?php } else { ?>
<option value="">-- Thể Loại --</option>
<?php } ?>
<option value="">Thể Loại</option>
<option value="Âm-Nhạc">Âm Nhạc</option>
<option value="Bí-Ẩn">Bí Ẩn</option>
<option value="Cổ-Trang">Cổ Trang</option>
<option value="Chiến-Tranh">Chiến Tranh</option>
<option value="Chính-Kịch">Chính Kịch</option>
<option value="Gia-Đình">Gia Đình</option>
<option value="Hài-Hước">Hài Hước</option>
<option value="Hành-Động">Hành Động</option>
<option value="Hình-Sự">Hình Sự</option>
<option value="Hoạt-Hình">Hoạt Hình</option>
<option value="Học-Đường">Học Đường</option>
<option value="Kinh-Dị">Kinh Dị</option>
<option value="Kinh-Điển">Kinh Điển</option>
<option value="Khoa-Học">Khoa Học</option>
<option value="Phiêu-Lưu">Phiêu Lưu</option>
<option value="Tài-Liệu">Tài Liệu</option>
<option value="Tâm-Lý">Tâm Lý</option>
<option value="Tình-Yêu">Tình Yêu</option>
<option value="Thần-Thoại">Thần Thoại</option>
<option value="Thể-Thao">Thể Thao</option>
<option value="Viễn-Tưởng">Viễn Tưởng</option>
<option value="Võ-Thuật">Võ Thuật</option>
<option value="TV-Show">TV Shows</option>
<option value="LGBT">LGBT</option>
<option value="Đam-Mỹ">Đam Mỹ</option>
<option value="Bách-Hợp">Bách Hợp</option>
<option value="18-Plus">18 Plus</option>
                    </select>
    </div>
    <div class="filter-item">
<select name="QG" form="form-filter" class="input form-control">
<?php if ($QG) { ?> 
<option value="<?php echo $QG;?>"><?php echo $quoc_gia;?></option>
<option value="">-- Tất Cả --</option>
<?php } else { ?>
<option value="">-- Quốc Gia --</option>
<?php } ?>
<option value="Ấn-Độ">Ấn Độ</option>
<option value="Âu-Mỹ">Âu Mỹ</option>
<option value="Brazil">Brazil</option>
<option value="Đài-Loan">Đài Loan</option>
<option value="Hàn-Quốc">Hàn Quốc</option>
<option value="Hồng-Kông">Hồng Kông</option>
<option value="Indonesia">Indonesia</option>
<option value="Malaysia">Malaysia</option>
<option value="Nhật-Bản">Nhật Bản</option>
<option value="Philippines">Philippines</option>
<option value="Thái-Lan">Thái Lan</option>
<option value="Trung-Quốc">Trung Quốc</option>
<option value="Việt-Nam">Việt Nam</option>
<option value="Châu-Phi">Châu Phi</option>
<option value="Khác">Khác</option>
                    </select>
    </div>
    <div class="filter-item">
<select name="NC" form="form-filter" class="input form-control">
<?php if ($NC) { ?> 
<option value="<?php echo $NC;?>"><?php echo $NC;?></option>
<option value="">-- Tất Cả --</option>
<?php } else { ?>
<option value="">-- Năm Chiếu --</option>
<?php } ?>
<option value="2024">2024</option>            
<option value="2023">2023</option>
<option value="2022">2022</option>
<option value="2021">2021</option>
<option value="2020">2020</option>
<option value="2019">2019</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
                    </select>
    </div>
    <input type="submit" form="form-filter" class="btn btn-success" value="Lọc phim" />
</form>

<div class="left-content">
<div class="list-films film-new">
<ul>          
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
            <div class="clear"></div>
            <div class="pagination">
                <ul>
<?php if($trang > 3) {?>                        
<li><a href="<?php echo '/search.php?s='.$s.'&trang=1'; ?>">1</a></li>
<span>...</span>
<?php } ?>
<?php if($trang > 2) {?>
<li><a href="<?php echo '/search.php?s='.$s.'&trang='.($trang - 2); ?>"><?php echo ($trang - 2); ?></a></li>
<?php } ?>
<?php if($trang > 1) {?>
<li><a href="<?php echo '/search.php?s='.$s.'&trang='.($trang - 1); ?>"><?php echo ($trang - 1); ?></a></li>
<?php } ?>    
<li><a class="current"><?php echo $trang; ?></a></li>
<?php if (($trang + 1) < $sotrang) {?>
<li><a href="<?php echo '/search.php?s='.$s.'&trang='.($trang + 1); ?>"><?php echo ($trang + 1); ?></a></li>
<?php } ?>
<?php if (($trang + 2) < $sotrang) {?>
<li><a href="<?php echo '/search.php?s='.$s.'&trang='.($trang + 2); ?>"><?php echo ($trang + 2); ?></a></li>
<?php } ?>
<?php if (($trang + 3) < $sotrang) {?>
<li><a href="<?php echo '/search.php?s='.$s.'&trang='.($trang + 3); ?>"><?php echo ($trang + 3); ?></a></li>
<?php } ?>
<span>...</span>
<li><a href="<?php echo '/search.php?s='.$s.'&trang='.($sotrang); ?>"><?php echo 'Cuối ('.$sotrang.')'; ?></a></li>
            </ul>

            </div>
        </div>
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
        <a href="#" class="btn-contact" title="inbox">
    <i class="fa fa-envelope-o"></i>
</a>
<?php
include 'theme/'.$theme.'/fot.php';
?>
