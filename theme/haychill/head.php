<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="vi" lang="vi">
<head>
    <meta charset="utf-8">
    <meta name="robots" content="index">
    <title><?php if ($ten_phim) { echo $ten_phim." - ".$ten_goc."(".$nam_chieu.") | "; } ?><?php echo $title; ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <meta name="robots" content="index,follow" />
    <meta http-equiv="content-language" content="vi" />
    <link rel="shortcut icon" href="https://lh5.ggpht.com/p/AF1QipM3y-5e54HOds1yVmsZYjD8A1phy2sg-q98qUAx=s0" type="image/png" />
    <meta name="description" content="<?php if ($noi_dung) { echo $noi_dung; } else { echo $description; } ?>" />
    <meta name="keywords" content="haychill, chillhay org, phim thuyết minh, phim lồng tiếng" />
    <meta name="author" content="<?php echo $site_name; ?>" />
    <meta name="twitter:card" content="summary" />
    <meta name="twitter:title" content="<?php if ($ten_phim) { echo $ten_phim." - ".$ten_goc."(".$nam_chieu.") | "; } ?><?php echo $title; ?>" />
    <meta name="twitter:description" content="<?php if ($noi_dung) { echo $noi_dung; } else { echo $description; } ?>" />
    <meta name="twitter:image" content="<?php if ($thumb) { echo $thumb; } else { echo 'https://lh3.googleusercontent.com/-gUfxDqPDO70/YoxSqln2-JI/AAAAAAAAASI/GWtnHRCPOPAOvFYSICOG0HSRIzdD02VcACNcBGAsYHQ/s0/i.jpg'; } ?>" />
    <meta property="og:site_name" content="<?php echo $site_name; ?>" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="<?php echo $domain; ?><?php if ($slug) { echo "/".$slug.".html"; } ?>" />
    <meta property="og:title" content="<?php if ($ten_phim) { echo $ten_phim." - ".$ten_goc."(".$nam_chieu.") | "; } ?><?php echo $title; ?>" />
    <meta property="og:image" content="<?php if ($thumb) { echo $thumb; } else { echo 'https://lh3.googleusercontent.com/-gUfxDqPDO70/YoxSqln2-JI/AAAAAAAAASI/GWtnHRCPOPAOvFYSICOG0HSRIzdD02VcACNcBGAsYHQ/s0/i.jpg'; } ?>" />
    <meta property="og:description" content="<?php if ($noi_dung) { echo $noi_dung; } else { echo $description; } ?>" />
    <meta property="og:locale" content="vi_VN" />
    <meta http-equiv="content-language" content="vi" />
    <meta itemprop="name" content="<?php if ($ten_phim) { echo $ten_phim." - ".$ten_goc."(".$nam_chieu.") | "; } ?><?php echo $title; ?>" />
    <meta itemprop="description" content="<?php if ($noi_dung) { echo $noi_dung; } else { echo $description; } ?>" />
    <meta itemprop="image" content="<?php if ($thumb) { echo $thumb; } else { echo 'https://lh3.googleusercontent.com/-gUfxDqPDO70/YoxSqln2-JI/AAAAAAAAASI/GWtnHRCPOPAOvFYSICOG0HSRIzdD02VcACNcBGAsYHQ/s0/i.jpg'; } ?>" />
    <link rel="canonical" href="<?php echo $domain; ?><?php if ($slug) { echo "/".$slug.".html"; } ?>" />
    <link rel="alternate" href="<?php echo $domain; ?><?php if ($slug) { echo "/".$slug.".html"; } ?>" hreflang="vi" />
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="/theme/haychill/css/main.css?2121212122222222222232222274" type="text/css" media="all" />
    <script src="/theme/haychill/css/tvhay.js?6699" type="text/javascript"></script>
</head>

<body>
    <div id="wrapper">
        <div id="header" class="container">
            <div id="logo">
                <a href="/" title="HayChill"></a>
            </div>
            <div id="sign"></div>
            <div class="header-grid">
                <div class="relative">
                    <form id="search" method="get" action="/search.php">
                        <input id="keyword" type="text" name="s" class="keyword" autocomplete="off" placeholder="Gõ tên phim cần tìm...">
                        <input type="submit" value="" class="submit">
                    </form>
                </div>
            </div>
            <div id="nav">
                <ul class="menu">
                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Trang chủ" href="/">Trang chủ</a>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a>Thể loại <i class="fa fa-caret-down" aria-hidden="true"></i></a>
<ul class="sub-menu" style="display: none;">
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Âm-Nhạc">Âm Nhạc</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Bí-Ẩn">Bí Ẩn</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Cổ-Trang">Cổ Trang</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Chiến-Tranh">Chiến Tranh</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Chính-Kịch">Chính Kịch</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Gia-Đình">Gia Đình</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Hài-Hước">Hài Hước</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Hành-Động">Hành Động</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Hình-Sự">Hình Sự</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Hoạt-Hình">Hoạt Hình</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Học-Đường">Học Đường</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Kinh-Dị">Kinh Dị</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Kinh-Điển">Kinh Điển</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Khoa-Học">Khoa Học</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Phiêu-Lưu">Phiêu Lưu</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Tài-Liệu">Tài Liệu</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Tâm-Lý">Tâm Lý</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Tình-Cảm">Tình Cảm</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Thần-Thoại">Thần Thoại</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Thể-Thao">Thể Thao</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Viễn-Tưởng">Viễn Tưởng</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Võ-Thuật">Võ Thuật</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=TV-Shows">TV Shows</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Boy-Love">Boy Love</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=Girl-Love">Girl Love</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=LGBT">LGBT</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?TL=18-Plus">18 Plus</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children"><a>Quốc gia <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        <ul class="sub-menu" style="display: none;">
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?QG=Ấn-Độ">Ấn Độ</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?QG=Âu-Mỹ">Âu Mỹ</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?QG=Brazil">Brazil</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?QG=Đài-Loan">Đài Loan</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?QG=Hàn-Quốc">Hàn Quốc</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?QG=Hồng-Kông">Hồng Kông</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?QG=Indonesia">Indonesia</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?QG=Malaysia">Malaysia</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?QG=Nhật-Bản">Nhật Bản</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?QG=Philippines">Philippines</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?QG=Thái-Lan">Thái Lan</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?QG=Trung-Quốc">Trung Quốc</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?QG=Việt-Nam">Việt Nam</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?QG=Châu-Phi">Châu Phi</a></li>
<li class="menu-item menu-item-type-taxonomy menu-item-object-category"><a href="/z.php?QG=Khác">Khác</a></li>
                        </ul>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Phim bộ mới" href="/z.php?BL=1">Phim Bộ</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Phim lẻ mới" href="/z.php?BL=2">Phim Lẻ</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Phim hoạt hình" href="/z.php?TL=Hoạt-Hình">Hoạt hình</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Phim mới" href="/">Phim Mới</a>
                    </li>
                    <li class="menu-item menu-item-type-post_type menu-item-object-page"><a title="Phim mới" href="/login.php">Đăng Nhập</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>