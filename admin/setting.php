<div style="background-color: #EEEEEE; padding:10px">
<style>.input-group-text { color: blue; }</style>

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#home" role="tab" aria-controls="pills-home" aria-selected="true">Cài Đặt Chung</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#admin" role="tab" aria-controls="pills-contact" aria-selected="false">Tài Khoản</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="pills-home-tab">
<form method='post'>
<div class="input-group input-group-lg mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Tên Web</span>
  </div>
  <input name="website" type="text" style="color:limegreen" class="form-control" value="<?php echo $title; ?>">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Mô Tả</span>
  </div>
  <input name="description" type="text" class="form-control" value="<?php echo $description; ?>">
</div>


<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Giao Diện Đang Dùng <?php if ($theme) echo '('.$theme.')'; ?></span>
  </div>
  <select name="theme1" class="custom-select">
    <option value="motchill">MotChill</option>
    <option value="haychill">HayChill</option>
  </select>
</div>
<font color="red">Sắp tới mình sẽ Update thêm vài theme nữa nhé ! </font><br/><br/>

<div class="input-group mb-3">
<button class="btn btn-primary btn-block" name="update">UPDATE</button>
</div>
<?php
if (isset($_POST['update'])) {
$ten_phim = $_POST['ten_phim'];
$ten_goc = $_POST['ten_goc'];
$theme1 = $_POST['theme1'];
$change = 'theme = "'.$theme1;
if ($theme=='haychill'){
fileReplaceContent('databases.php', 'theme = "haychill', $change);
} elseif ($theme=='motchill'){
fileReplaceContent('databases.php', 'theme = "motchill', $change);
}

echo '<script>window.location = window.location.href;</script>';
}
?>
</form>
  </div>
  <div class="tab-pane fade" id="admin" role="tabpanel" aria-labelledby="pills-profile-tab">
<form method='post'>
<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Email</span>
  </div>
  <input name="description" type="text" class="form-control" value="admin@gmail.com">
</div>

<div class="input-group mb-3">
  <div class="input-group-prepend">
    <span class="input-group-text">Pass</span>
  </div>
  <input name="description" type="text" class="form-control" value="123456789">
</div>

<div class="input-group mb-3">
<button class="btn btn-primary btn-block" name="update_admin">UPDATE</button>
</div>
<?php
if (isset($_POST['update_admin'])) {
$ten_phim = $_POST['ten_phim'];
$ten_goc = $_POST['ten_goc'];
$theme1 = $_POST['theme1'];
$change = 'theme = "'.$theme1;
if ($theme=='haychill'){
fileReplaceContent('databases.php', 'theme = "haychill', $change);
} elseif ($theme=='motchill'){
fileReplaceContent('databases.php', 'theme = "motchill', $change);
}
echo '<script>window.location = window.location.href;</script>';
}
?>
</form>
  </div>

</div>    



</div>