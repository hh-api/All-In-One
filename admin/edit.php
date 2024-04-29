<?php 
error_reporting(E_ERROR | E_PARSE);
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
$hot = $get_info['hot'];
$api = $get_info['api'];
$thumb = $get_info['thumb'];
?>

<div style="background-color: #EEEEEE; padding:10px">
<style>.input-group-text { color: blue; }</style>

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#home" role="tab" aria-controls="pills-home" aria-selected="true">Thông Tin</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#list" role="tab" aria-controls="pills-profile" aria-selected="false">List Tập</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#comment" role="tab" aria-controls="pills-contact" aria-selected="false">Bình Luận</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="pills-home-tab">
<form method='post'>
<div class="input-group input-group-lg mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Tên Phim</span>
  </div>
  <input name="ten_phim" type="text" style="color:limegreen" class="form-control" value="<?php echo $ten_phim; ?>">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Tên Gốc</span>
  </div>
  <input name="ten_goc" type="text" value="<?php echo $ten_goc; ?>" class="form-control">
  <input name="nam_chieu" type="text" value="<?php echo $nam_chieu; ?>" class="form-control">
  <div class="input-group-append">
    <span class="input-group-text">Năm</span>
  </div>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Slug</span>
  </div>
  <input name="slug1" type="text" class="form-control is-invalid" value="<?php echo $slug; ?>">
<div class="invalid-feedback">Slug là duy nhất, không được phép trùng</div>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Trạng Thái</span>
  </div>
  <input name="trang_thai" type="text" style="color:red;" value="<?php echo $trang_thai; ?>" class="form-control">
  <input name="thoi_luong" type="text" value="<?php echo $thoi_luong; ?>" class="form-control">
  <div class="input-group-append">
    <span class="input-group-text">Thời Lượng</span>
  </div>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Bộ/Lẻ</span>
  </div>
  <select name="bole" class="custom-select">
<?php if ($bole=='1') { ?>      
    <option style="color:limegreen" value="1">Phim Bộ</option>
    <option style="color:red" value="2">Phim Lẻ</option>
<?php } else { ?>
    <option style="color:red" value="2">Phim Bộ</option>
    <option style="color:green" value="1">Phim Bộ</option>
<?php } ?> 
  </select>

  <select name="hide" class="custom-select">
<?php if ($hide=='0') { ?>      
    <option style="color:limegreen" value="0">Phim Đang Hiển Thị</option>
    <option style="color:red" value="1">Ẩn Phim Đi</option>
<?php } else { ?>
    <option style="color:red" value="1">Phim Đang Ẩn</option>
    <option style="color:green" value="0">Bật Hiển Thị</option>
<?php } ?> 
  </select>
  <div class="input-group-append">
    <span class="input-group-text">Ẩn/Hiện</span>
  </div>
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Quốc Gia</span>
  </div>
  <input name="quoc_gia" type="text" class="form-control" value="<?php echo $quoc_gia; ?>">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Thể Loại</span>
  </div>
  <input name="the_loai" type="text" class="form-control" value="<?php echo $the_loai; ?>">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Ảnh</span>
  </div>
  <input name="thumb" type="text" class="form-control" value="<?php echo $thumb; ?>">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Diễn Viên</span>
  </div>
  <input name="dien_vien" type="text" class="form-control" value="<?php echo $dien_vien; ?>">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">API</span>
  </div>
  <select name="api" class="custom-select">
<?php if ($api=='1') { ?>      
    <option style="color:limegreen" value="1">API Đang Mở</option>
    <option style="color:red" value="0">Tắt API</option>
<?php } else { ?>
    <option style="color:red" value="0">API Đang Tắt</option>
    <option style="color:green" value="1">Bật API</option>
<?php } ?> 
  </select>

  <select name="hot" class="custom-select">
<?php if ($hot=='1') { ?>      
    <option style="color:limegreen" value="1">Phim Đang Hot</option>
    <option style="color:red" value="0">Tắt Đề Cử Hot</option>
<?php } else { ?>
    <option style="color:red" value="0">Phim Không Hot</option>
    <option style="color:green" value="1">Bật Đề Cử Hot</option>
<?php } ?> 
  </select>
  <div class="input-group-append">
    <span class="input-group-text">Đề Cử</span>
  </div>
</div>

<div class="input-group mb-3">
<textarea rows = "10" style="width:100%" name = "noi_dung"><?php echo $noi_dung; ?></textarea>
</div>

<div class="input-group mb-3">
<button class="btn btn-primary btn-block" name="update">UPDATE</button>
</div>
<?php
if (isset($_POST['update'])) {
$ten_phim = $_POST['ten_phim'];
$ten_goc = $_POST['ten_goc'];
$ten_goc = str_replace("'s","",$ten_goc);
$dien_vien = $_POST['dien_vien']; 
$trang_thai = $_POST['trang_thai'];
$the_loai = $_POST['the_loai']; 
$quoc_gia = $_POST['quoc_gia'];
$thumb = $_POST['thumb']; 
$bole = $_POST['bole'];
$hide = $_POST['hide'];
$nam_chieu = $_POST['nam_chieu'];
$thoi_luong = $_POST['thoi_luong']; 
$noi_dung = $_POST['noi_dung']; 
$api = $_POST['api'];
$hot = $_POST['hot'];
$noi_dung = str_replace("'","",$noi_dung);
$slug1 = $_POST['slug1'];
if ($slug1 == $slug){
$result = mysqli_query($apizophim,"UPDATE phim SET `ten_phim`='".$ten_phim."',`ten_goc`='".$ten_goc."',`thoi_luong`='".$thoi_luong."',`dien_vien`='".$dien_vien."',`nam_chieu`='".$nam_chieu."',`quoc_gia`='".$quoc_gia."',`the_loai`='".$the_loai."',`api`='".$api."',`hot`='".$hot."',`hide`='".$hide."',`bole`='".$bole."',`thumb`='".$thumb."',`trang_thai`='".$trang_thai."',`noi_dung`='".$noi_dung."',`time`='".time()."' where slug='".$slug."'");
echo '<script>window.location = window.location.href;</script>';
} else {
$result = mysqli_query($apizophim,"UPDATE phim SET `slug`='".$slug1."',`time`='".time()."' where slug='".$slug."'");
echo '<script>location.href="/dashboard.php?type=edit&slug='.$slug1.'";</script>';
}

}
?>
</form>
  </div>
  <div class="tab-pane fade" id="list" role="tabpanel" aria-labelledby="pills-profile-tab">
<form method='post'>
<?php
$cache_movie = './cache/movie/'.$slug.'.php';
$list = './list/'.$slug.'.php';
if ($api=='1') {
if (file_exists($cache_movie)) { $time_cache = filemtime($cache_movie);
if (time() > ($time_cache + 3600)) { $cache = '0'; } } 
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
}

include 'list/'.$slug.'.php';
?>

<textarea style="width:100%" disabled style="color:blue">Cấu trúc mẫu: Tập|sever1|sever2|-<br/></textarea><br/>
<textarea rows="30" style="width:100%" name = "list_video"><?php echo $list_sv; ?></textarea><br/>
<button class="btn btn-success btn-block" name="cap-nhat">Cập Nhật List</button><br/><br/>
</form>
<?php
if (isset($_POST['cap-nhat'])) {
$list_video = $_POST['list_video'];
$myfile = fopen($list, "w");
fwrite($myfile, '<?php $list_sv="
'.$list_video.'"; ?>');
fclose($myfile);
echo '<script>window.location = window.location.href;</script>';
}
?>
  </div>
  <div class="tab-pane fade" id="comment" role="tabpanel" aria-labelledby="pills-contact-tab">3</div>
</div>    



</div>