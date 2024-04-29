        <div id="sidebar">
            <div class="block" id="chart">
                <div class="blocktitle">
                    <div class="title">BẢNG XẾP HẠNG</div>
                </div>
                <div class="tabs" data-target="#topview">
                    <div class="tab active" data-name="top-phim-bo">Phim Bộ</div>
                    <div class="tab" data-name="top-phim-le">Phim Lẻ</div>
                    <div class="tab" data-name="top-hoat-hinh">Hoạt Hình</div>
                </div>
                <div class="blockbody border" id="topview">
                    <ul class="tab top-phim-bo">
<?php
$result = mysqli_query($apizophim, "SELECT ten_phim,ten_goc,slug,thumb,nam_chieu FROM phim WHERE `bole` = '1' and `the_loai` NOT LIKE '%Hoạt%' order by view_day DESC limit 10");

while($qsql4 = mysqli_fetch_array($result)) {
$ten_phim = $qsql4['ten_phim'];
$ten_goc = $qsql4['ten_goc'];
$slug = $qsql4['slug'];
$nam_chieu = $qsql4['nam_chieu'];
$thumb = $qsql4['thumb'];
if (strpos($thumb, 'imgur.com') == true)  {
$thumb = str_replace('.jpg', 'm.jpg', $qsql4['thumb']);
} elseif (strpos($thumb, 'ggpht.com') == true)  {
$thumb = str_replace('=s0', '=w100-rw', $qsql4['thumb']);    
}
?>
                        <li><span class="st top"><img width="30px" src="<?php echo $thumb; ?>"/></span>
                            <div class="detail">
                                <div class="name"><a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>"><?php echo $ten_phim; ?></a>
                                </div>
                                <div class="views"><?php echo $ten_goc; ?> (<?php echo $nam_chieu; ?>)</div>
                            </div>
                        </li>
<?php } ?>                        
                    </ul>
                    <ul class="tab top-phim-le hide">
<?php
$result = mysqli_query($apizophim, "SELECT ten_phim,ten_goc,slug,thumb,nam_chieu FROM phim WHERE `bole` = '2' and `the_loai` NOT LIKE '%Hoạt%' order by view_day DESC limit 10");

while($qsql4 = mysqli_fetch_array($result)) {
$ten_phim = $qsql4['ten_phim'];
$ten_goc = $qsql4['ten_goc'];
$slug = $qsql4['slug'];
$nam_chieu = $qsql4['nam_chieu'];
$thumb = $qsql4['thumb'];
if (strpos($thumb, 'imgur.com') == true)  {
$thumb = str_replace('.jpg', 'm.jpg', $qsql4['thumb']);
} elseif (strpos($thumb, 'ggpht.com') == true)  {
$thumb = str_replace('=s0', '=w100-rw', $qsql4['thumb']);    
}
?>
                        <li><span class="st top"><img width="30px" src="<?php echo $thumb; ?>"/></span>
                            <div class="detail">
                                <div class="name"><a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>"><?php echo $ten_phim; ?></a>
                                </div>
                                <div class="views"><?php echo $ten_goc; ?> (<?php echo $nam_chieu; ?>)</div>
                            </div>
                        </li>
<?php } ?>
                    </ul>
                    <ul class="tab top-hoat-hinh hide">
<?php
$result = mysqli_query($apizophim, "SELECT ten_phim,ten_goc,slug,thumb FROM phim WHERE `the_loai` LIKE '%Hoạt%' order by view_day DESC limit 10");

while($qsql4 = mysqli_fetch_array($result)) {
$ten_phim = $qsql4['ten_phim'];
$ten_goc = $qsql4['ten_goc'];
$slug = $qsql4['slug'];
$thumb = $qsql4['thumb'];
if (strpos($thumb, 'imgur.com') == true)  {
$thumb = str_replace('.jpg', 'm.jpg', $qsql4['thumb']);
} elseif (strpos($thumb, 'ggpht.com') == true)  {
$thumb = str_replace('=s0', '=w100-rw', $qsql4['thumb']);    
}
?>
                        <li><span class="st top"><img width="30px" src="<?php echo $thumb; ?>"/></span>
                            <div class="detail">
                                <div class="name"><a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>"><?php echo $ten_phim; ?></a>
                                </div>
                                <div class="views"><?php echo $ten_goc; ?></div>
                            </div>
                        </li>
<?php } ?>
                    </ul>
                </div>
            </div>
            <div class="block">
                <div class="blocktitle"><span class="title">Chuyên mục</span>
                </div>
                <div class="blockbody nocorner catitems">
                    <div class="subtitle">Thể loại phim</div>
                    <ul>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Âm-Nhạc">Âm Nhạc</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Cổ-Trang">Cổ Trang</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Chiến-Tranh">Chiến Tranh</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Chính-Kịch">Chính Kịch</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Gia-Đình">Gia Đình</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Hài-Hước">Hài Hước</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Hành-Động">Hành Động</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Hình-Sự">Hình Sự</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Hoạt-Hình">Hoạt Hình</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Học-Đường">Học Đường</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Kinh-Dị">Kinh Dị</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Kinh-Điển">Kinh Điển</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Khoa-Học">Khoa Học</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Phiêu-Lưu">Phiêu Lưu</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Tài-Liệu">Tài Liệu</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Tâm-Lý">Tâm Lý</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Tình-Cảm">Tình Cảm</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Thần-Thoại">Thần Thoại</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Thể-Thao">Thể Thao</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Viễn-Tưởng">Viễn Tưởng</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Võ-Thuật">Võ Thuật</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=TV-Shows">TV Shows</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Boy-Love">Boy Love</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=Girl-Love">Girl Love</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=LGBT">LGBT</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?TL=18-Plus">18 Plus</a></li>
                    </ul>
                </div>
                <div class="blockbody nocorner catitems">
                    <div class="subtitle">Quốc gia</div>
                    <ul>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?QG=Ấn-Độ">Ấn Độ</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?QG=Âu-Mỹ">Âu Mỹ</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?QG=Brazil">Brazil</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?QG=Đài-Loan">Đài Loan</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?QG=Hàn-Quốc">Hàn Quốc</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?QG=Hồng-Kông">Hồng Kông</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?QG=Indonesia">Indonesia</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?QG=Malaysia">Malaysia</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?QG=Nhật-Bản">Nhật Bản</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?QG=Philippines">Philippines</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?QG=Thái-Lan">Thái Lan</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?QG=Trung-Quốc">Trung Quốc</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?QG=Việt-Nam">Việt Nam</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="z.php?QG=Châu-Phi">Châu Phi</a></li>
                    </ul>
                </div>
            </div>
<div class="block" id="chart">
                <div class="blocktitle"><span class="title">Bình Luận Mới</span>
                </div>
                <div class="blockbody border">
                    <ul class="tab top-phim-bo">
<?php 
$sql1_bxh = mysqli_query($apizophim,"SELECT slug,name,comment,time FROM comment order by id DESC limit 25");
while($sql_bxh = mysqli_fetch_array($sql1_bxh)) {
$slug = $sql_bxh['slug'];
$name = $sql_bxh['name'];
$comment = $sql_bxh['comment'];
$time = $sql_bxh['time'];
$sql1 = mysqli_query($apizophim, "SELECT thumb,ten_phim,ten_goc FROM phim WHERE slug='$slug'");
$sql2 = mysqli_fetch_array($sql1);
$ten_phim = $sql2['ten_phim'];
$ten_goc = $sql2['ten_goc'];
$thumb = $sql2['thumb'];
if (strpos($thumb, 'imgur.com') == true)  {
$thumb = str_replace('.jpg', 'm.jpg', $sql2['thumb']);
} elseif (strpos($thumb, 'ggpht.com') == true)  {
$thumb = str_replace('=s0', '=s100', $sql2['thumb']);    
}

?>                        
<li><span class="st top"><a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>"><img width="50px" src="<?php echo $thumb; ?>"/></a></span>
    <div class="detail" style="margin-left:60px">
        <div class="name"><a href="/<?php echo $slug; ?>.html" title="<?php echo $ten_phim; ?>"><font color="blue"><?php echo $ten_phim; ?></font></a>
        </div>
    <img width="32px" alt="<?php echo $name;?>" src="https://cdn.jsdelivr.net/gh/hh-api/img@main/<?php echo $name;?>.jpg" style="padding-top:2px; padding-right:5px; float:left;"/> <div style="padding-top:4px;white-space: nowrap;"><b><font color="black"><?php echo $name;?></font></b><br/><span style="font-size:11px;"><?php echo $comment; ?></span>
    </div>
</li>
<?php } ?>
                    </ul>
                </div>
            </div>
        </div>