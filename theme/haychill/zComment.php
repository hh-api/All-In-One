<div class="block" id="comment" style="background: white;">
<link href="/css/comment.css?v=111111212" type='text/css' rel='stylesheet'/>
<style>
@supports (-webkit-overflow-scrolling: touch) {
  select,
  textarea,
  input {
    font-size: 16px;
  }
}
</style>

<?php
$z = array(
'Mỹ Đỗ Toa',
'Nam Cung Uyển',
'Nguyệt Thiền',
'Liễu Thần',
'Thạch Hạo',
'Hàn Lập',
'Tiêu Viêm',
'Đường Tam',
'SonGoKu',
'Vegeta',
'Piccolo',
'Monkey D Luffy',
);
$rand_name = $z[rand(0,count($z)-1)];
?>



<div class="blockbody tabs-content" style="background: white;">
<div class="comment">
<div id="local_cmt"><div style="color:green; border-bottom:1px solid#ddd;font-weight:700"><?php $count = mysqli_num_rows(mysqli_query($apizophim, "SELECT id FROM comment WHERE `slug` = '$slug'")); echo $count; ?> Bình luận</div>
<form id="comment-form">
<div class="comment-editor relative flex flex-column margin-t-10">    
<input type="hidden" name="name" value="<?php echo $rand_name;?>">
<input type="hidden" name="slug" value="<?php echo $slug;?>">
<br/>
<textarea class="content-of-comment" name="comment" placeholder="Viết bình luận tại đây nhé !" rows="1" maxlength="1000" style="border: 1px solid#ffc03e;"></textarea>
<br/>


<?php if ((time() - $_SESSION['chat'] ) < 31) { echo '<div align="center"><button class="add-comment button-cmt bg-violet color-black" disabled>Bình Luận Sau 30 Giây</button></div>'; } else { echo '<div align="center"><button type="submit" class="add-comment button-cmt bg-violet color-black">Gửi Bình Luận</button></div>'; } ?>
</form>

<br/>
<div id="new_comments">
<script>
  document.getElementById('comment-form').addEventListener('submit', function(e) {
    e.preventDefault();

    var form = new FormData(this);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', '/ajax.php', true);
    xhr.onreadystatechange = function() {
      if(xhr.readyState == 4 && xhr.status == 200) {
        // comment added successfully
        document.getElementById('new_comments').innerHTML += xhr.responseText + '<br>';
      }
    };
    $('#comment-form')[0].reset();
    xhr.send(form);
  });
</script>
</div> 

<div id="cmt-load-content">
<div id="cmt_45698" class="comment-main user-comment cmt-45698 pindiv">
  <div class="flex bg-comment">
    <div class="left">
      <div class="avatar">
        <img src="https://cdn.jsdelivr.net/gh/hh-api/img@main/Khách Ẩn Danh.jpg" class="avatar-main">
        <img src="https://cdn.jsdelivr.net/gh/hh-api/img@main/s<?php echo $level = mt_rand(1, 9); ?>.gif" class="avatar-level">
      </div>
    </div>
    <div class="right">
      <div class="flex flex-column">
        <div class="flex flex-space-auto">
          <div class="flex flex-hozi-center"><i style="font-size:7px;color:#3bd63b;margin-right: 3px;" class="fa fa-circle" aria-hidden="true"></i> <span class="nickname_flex"><span class="vip_icon vip_icon_1"></span><span onclick="user_fastinfo(this)" data-userid="1" class="nickname2">Admin Xinh Gái <i class="fa fa-check-circle" aria-hidden="true"></i></span></span> <i class="fa fa-thumb-tack" aria-hidden="true" style="color:red;padding:0 10px"></i> </div>
        </div>
        <div class="content" style="padding: 5px 5px;">Zô Nhóm Telegram Để Giao Lưu Với Admin: <a href="https://t.me/haychill" target="_blank"><b><font color="red">https://t.me/haychill</font></b></a></div>
        <div class="flex fs-12 toolbarr">
          <label>
          Trả lời
          </label>
          <span class="cmt-time color-gray">1 phút trước</span>
        </div>
      </div>
    </div>
  </div>
</div>

<?php
$sql_cmt = mysqli_query($apizophim, "SELECT * FROM comment WHERE `slug` = '$slug' order by pin DESC, id DESC limit 20");
while($qsql4 = mysqli_fetch_array($sql_cmt)) {
$show_name = $qsql4['name'];
$show_comment = $qsql4['comment'];
$show_time = $qsql4['time'];
$show_pin = $qsql4['pin'];
?>

<div id="cmt_291450" class="comment-main user-comment cmt-291450">
  <div class="flex bg-comment">
    <div class="left">
      <div class="avatar">
        <img src="https://cdn.jsdelivr.net/gh/hh-api/img@main/<?php echo $show_name;?>.jpg" class="avatar-main">
        <img src="https://cdn.jsdelivr.net/gh/hh-api/img@main/s<?php echo $level = mt_rand(1, 9); ?>.gif" class="avatar-level">
      </div>
    </div>
    <div class="right">
      <div class="flex flex-column">
        <div class="flex flex-space-auto">
          <div class="flex flex-hozi-center"><i style="font-size:7px;color:#3bd63b;margin-right: 3px;" class="fa fa-circle" aria-hidden="true"></i> <span class="nickname_flex"><span class="vip_icon vip_icon_<?php echo $level = mt_rand(1, 9); ?>"></span><span onclick="user_fastinfo(this)" data-userid="90464" class="nickname0"><?php echo $show_name;?></span></span></div>
        </div>
        <div class="content" style="padding: 5px 5px;"><?php echo $show_comment;?></div>
        <div class="flex fs-12 toolbarr">
          <label>Trả lời</label>
          <span class="cmt-time color-gray"><?php date_default_timezone_set('Asia/Ho_Chi_Minh'); echo date('Y-m-d H:i:s' , $show_time);?></span>
        </div>
      </div>
    </div>
  </div>

</div>

<?php } ?>


</div>
</div>
</div>
</div>
</div>               
</div>
<div class="clear"></div>