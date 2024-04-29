
			<div class="projects mb-4">
				<div class="projects-inner">
					<header class="projects-header">
						
<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#view" role="tab" aria-controls="pills-home" aria-selected="true">Lượt Xem</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#comment" role="tab" aria-controls="pills-profile" aria-selected="false">Bình Luận</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#baoloi" role="tab" aria-controls="pills-contact" aria-selected="false">Báo Lỗi</a>
  </li>
</ul>
</header>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="view" role="tabpanel" aria-labelledby="pills-view-tab">
					<table class="projects-table">
						<thead>
							<tr>
								<th width="5%">Ảnh</th>
								<th width="25%">Tên Phim</th>
								<th>Trạng Thái</th>
								<th>Quốc Gia</th>
								<th>View</th>
								<th>Actions</th>
							</tr>
						</thead>
<?php 
$trang = $_GET['trang'];
if(!$trang){ $trang = 1; }
$sodu_lieu = mysqli_query($apizophim, "SELECT id FROM phim");
$sodu_lieu = mysqli_num_rows($sodu_lieu);
$baitren_mottrang = 30;
$sotrang = ceil($sodu_lieu/$baitren_mottrang);
$dau = ($trang-1)*$baitren_mottrang;
$cuoi = $baitren_mottrang;
$result = mysqli_query($apizophim, "SELECT * FROM phim order by view_day DESC limit 50");
//$result = mysqli_query($apizophim, "SELECT * FROM phim order by time DESC");
while($qsql4 = mysqli_fetch_array($result)) {
$ten_phim = $qsql4['ten_phim'];
$ten_goc = $qsql4['ten_goc'];
$slug = $qsql4['slug'];
$bole = $qsql4['bole'];
$trang_thai = $qsql4['trang_thai'];
$thoi_luong = $qsql4['thoi_luong'];
$nam_chieu = $qsql4['nam_chieu'];
$quoc_gia = $qsql4['quoc_gia'];
$view_day = $qsql4['view_day'];
$thumb = $qsql4['thumb'];
if (strpos($thumb, 'imgur.com') == true)  {
$thumb = str_replace('.jpg', 'm.jpg', $qsql4['thumb']);
} elseif (strpos($thumb, 'ggpht.com') == true)  {
$thumb = str_replace('=s0', '=w50', $qsql4['thumb']);    
}
?>						
						<tr>
						    <td><a href="/dashboard.php?type=edit&slug=<?php echo $slug; ?>"><img width="50px" src="<?php echo $thumb;?>" /></a></td>
							<td>
								<p><b><a href="/dashboard.php?type=edit&slug=<?php echo $slug; ?>"><font color="orange"><?php echo $ten_phim;?></font></a></b></p>
								<p><?php echo $ten_goc;?></p>
								<p><?php echo $slug;?></p>
							</td>
							<td>
								<p><?php if ($bole=='2') { echo 'Phim Lẻ'; } else { echo 'Phim Bộ'; } ?></p>
								<p class="text-danger"><?php if ($bole=='2') { echo $thoi_luong.' '.$trang_thai; } else { echo $trang_thai; } ?></p>
							</td>
							
							<td>
								<p><?php echo $quoc_gia;?></p>
							</td>
							<td>
								<p><?php echo $view_day;?></p>
							</td>
							<td>
							<a href="/<?php echo $slug; ?>.html" target="_blank"><button class="btn-success" style="margin-bottom:5px">Xem</button></a>
							</td>
						</tr>
						
<?php } ?>

					</table>
</div>
  <div class="tab-pane fade" id="comment" role="tabpanel" aria-labelledby="pills-comment-tab">
<table class="projects-table">
						<thead>
							<tr>
								<th width="25%">Phim</th>
								<th>Tên</th>
								<th>Comment</th>
								<th>Thời Gian</th>
								<th>Actions</th>
							</tr>
						</thead>
<?php 
$trang = $_GET['trang'];
$result = mysqli_query($apizophim, "SELECT * FROM comment order by id DESC limit 50");
while($qsql4 = mysqli_fetch_array($result)) {
$id = $qsql4['id'];
$slug = $qsql4['slug'];
$name = $qsql4['name'];
$time = $qsql4['time'];
$comment = $qsql4['comment'];
?>						
<tr>
<td><a href="/<?php echo $slug; ?>.html"><?php echo $slug;?></a></td>
<td><?php echo $name;?></td>
<td><?php echo $comment;?></td>
<td><?php date_default_timezone_set('Asia/Ho_Chi_Minh'); echo date('Y-m-d H:i:s' , $time);?></td>
<td><a href="#"><button class="btn-danger">Xoá</button></a></td>
</tr>
<?php } ?>
</table>
</div>
</div>					

					
				</div>
			</div>