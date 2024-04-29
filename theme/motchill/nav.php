<?php
$agent=$_SERVER['HTTP_USER_AGENT'];
        if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows ce|xda|xiino/i',$agent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($agent,0,4)))

{ $mobile='1'; ?>
<div id="header">
    <div class="container">
        <div class="btn-humber">
            <p></p>
            <p></p>
            <p></p>
        </div>
        <a href="/" title="MotChill" class="logo"><img style="height: 60px;margin-bottom: -55px" src="https://lh5.ggpht.com/p/AF1QipN7N8tLqH2oqT6dVVfxb_i4I8W6WQTffB5ENnIF=s0" alt="motchillz.top" title="Mọt Phim"/></a>
        <i class="fa fa-search mobile"></i>
        <form id="mform_search" method="GET" action="/search.php">
            <input type="text" id="mkeyword" name="s" autocomplete="off"
                placeholder="Nhập tên phim bạn muốn tìm kiếm...">
            <i class="fa fa-arrow-circle-right"></i>
        </form>
        <script>
            $(document).ready(function() {
                $(".btn-humber").click(function() {
                    var $menu = $(".main-menu");
                    var overlay = '<div id="overlay_menu" onclick="$(\'.btn-humber\').click()"></div>';
                    $this = $(this);
                    var hw = $(window).height();
                    if ($menu.hasClass('expanded')) {
                        $menu.removeClass('expanded');
                        $this.removeClass('active');
                        $('#overlay_menu').remove();
                    } else {
                        $('.main-menu').height(hw);
                        $menu.addClass('expanded');
                        $this.addClass('active');
                        $('body').append(overlay);
                        setTimeout(function() {
                            $('#overlay_menu').addClass('slide');
                        }, 300)

                    }
                });


                $(".menu-item>a").click(function() {
                    var $this = $(this);
                    var $sub = $this.next();

                    if (!$sub.hasClass('sub-menu')) {
                        var link = $this.attr('href');
                        window.location.href = link;
                    } else {
                        if ($sub.hasClass('expanded')) {
                            $sub.removeClass('expanded');
                            $this.removeClass('active');

                        } else {
                            $('.sub-menu').removeClass('expanded');
                            $sub.addClass('expanded');
                            $this.addClass('active');
                        }
                        return false;
                    }
                });

                $(window).resize(function() {
                    hw = $(window).height();
                    $('.main-menu').height(hw);
                });


                $(".fa-search.mobile").click(function() {
                    var $this = $(this);
                    var $formsearch = $("#mform_search");
                    var overlay = '<div id="overlay_search"></div>';
                    if ($formsearch.hasClass('expanded')) {
                        $formsearch.removeClass('expanded');
                        $('#overlay_search').remove();
                    } else {
                        $formsearch.addClass('expanded');
                        $('body').append(overlay);
                        $("#mkeyword").focus();
                    }
                });
            })
        </script>
    </div>
<?php } else { ?>
<div id="header">
    <div class="container">
        <div class="top">
            <div class="left logo" style="box-shadow: 0px 1px 3px rgba(0,0,0,0.2);">
                <a href="/" title="MotChill | Phim HD | Xem Phim nhanh | Tổng Hợp VietSub, Thuyết Minh Hay | Phimchill.net">
<img style="height: 60px" src="https://lh5.ggpht.com/p/AF1QipN7N8tLqH2oqT6dVVfxb_i4I8W6WQTffB5ENnIF=s0" alt="motchillz.top" title="Mọt Phim"/>
                                    </a>
            </div>
            <div class="right-header">
                <div class="search-container relative">
                    <form id="form_search" method="GET" action="/search.php">
                        <input type="text" id="keyword" name="s" autocomplete="off"
                            placeholder="V.d: tên phim, tên diễn viên..." value="" />
                        <i class="fa fa-search"></i>
                    </form>
                </div>
            </div>
            <div class="clear"></div>
        </div>
    </div>
<?php } ?>
    <div class="main-menu">
        <ul class="container">
                    <li class="menu-item active"><a title="Trang chủ" href="/">Trang chủ</a></li>
                    <li class="menu-item "><a title="Phim Lẻ" href="/z.php?BL=2">Phim Lẻ</a></li>
                    <li class="menu-item "><a title="Phim Bộ" href="/z.php?BL=1">Phim Bộ</a></li>
                    <li class="menu-item ">
                        <a title="Thể loại">Thể loại</a>
                        
                        <ul class="sub-menu span<?php if ($mobile!='1') { echo '-4'; } ?> absolute">
                                                            <li class="sub-menu-item">
                                    <a title="Hành Động" href="/z.php?TL=Hành Động">Hành Động</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Viễn Tưởng" href="/z.php?TL=Viễn Tưởng">Viễn Tưởng</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Cổ Trang" href="/z.php?TL=Cổ Trang">Cổ Trang</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Tình Yêu" href="/z.php?TL=Tình Yêu">Tình Yêu</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Hình Sự" href="/z.php?TL=Hình Sự">Hình Sự</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Kinh Dị" href="/z.php?TL=Kinh Dị">Kinh Dị</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Thần Thoại" href="/z.php?TL=Thần Thoại">Thần Thoại</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Chiến Tranh" href="/z.php?TL=Chiến Tranh">Chiến Tranh</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Hài Hước" href="/z.php?TL=Hài Hước">Hài Hước</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="TV Shows" href="/z.php?TL=TV Shows">TV Shows</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Phiêu Lưu" href="/z.php?TL=Phiêu Lưu">Phiêu Lưu</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Hoạt Hình" href="/z.php?TL=Hoạt Hình">Hoạt Hình</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="18 Plus" href="/z.php?TL=18 Plus">18 Plus</a>
                                </li>
                                                    </ul>
                    </li>
                                                                <li class="menu-item ">
                        <a title="Quốc gia">
                            Quốc gia
                        </a>
                        <ul class="sub-menu span<?php if ($mobile!='1') { echo '-4'; } ?> absolute">
                                                            <li class="sub-menu-item">
                                    <a title="Trung Quốc" href="/z.php?QG=Trung Quốc">Trung Quốc</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Hàn Quốc" href="/z.php?QG=Hàn Quốc">Hàn Quốc</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Nhật Bản" href="/z.php?QG=Nhật Bản">Nhật Bản</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Thái Lan" href="/z.php?QG=Thái Lan">Thái Lan</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Âu Mỹ" href="/z.php?QG=Âu Mỹ">Âu Mỹ</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Ấn Độ" href="/z.php?QG=Ấn Độ">Ấn Độ</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Thụy Sĩ" href="/z.php?QG=Việt Nam">Việt Nam</a>
                                </li>
                                                            <li class="sub-menu-item">
                                    <a title="Quốc Gia Khác" href="/z.php?QG=Quốc Gia Khác">Quốc Gia Khác</a>
                                </li>
                                                    </ul>
                    </li>
                    <li class="menu-item "><a title="Hoạt Hình" href="/z.php?TL=Hoạt Hình">Hoạt Hình</a></li>
                    <li class="menu-item "><a title="Đăng Nhập" href="/login.php">Đăng Nhập</a></li>
                                    </ul>
    </div>
</div>