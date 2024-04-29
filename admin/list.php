<?php
if(!$trang){ $trang = 1; }
?>
			<div class="projects mb-4">
				<div class="projects-inner">
					<header class="projects-header">
						<div class="title">Danh Sách Phim</div> | 
<?php if($trang > 1) {?>
<div class="count"><a href="<?php echo '/dashboard.php?trang='.($trang - 1); ?>">Trang <?php echo ($trang - 1); ?></a></div>
<?php } ?>
<div class="count"><button><font color='red'>Trang <?php echo $trang; ?></font></button></div>
<div class="count"><a href="<?php echo '/dashboard.php?trang='.($trang + 1); ?>">Trang <?php echo ($trang + 1); ?></a></div>
					</header>
					<table class="projects-table">
						<thead>
							<tr>
								<th width="5%">Ảnh</th>
								<th width="25%">Tên Phim</th>
								<th>Trạng Thái</th>
								<th>Quốc Gia</th>
								<th>Thể Loại</th>
								<th>View</th>
								<th>Actions</th>
							</tr>
						</thead>
<?php 
$sodu_lieu = mysqli_query($apizophim, "SELECT id FROM phim");
$sodu_lieu = mysqli_num_rows($sodu_lieu);
$baitren_mottrang = 30;
$sotrang = ceil($sodu_lieu/$baitren_mottrang);
$dau = ($trang-1)*$baitren_mottrang;
$cuoi = $baitren_mottrang;
$result = mysqli_query($apizophim, "SELECT * FROM phim order by id DESC limit $dau, $cuoi");
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
$the_loai = $qsql4['the_loai'];
$view = $qsql4['view'];
$thumb = $qsql4['thumb'];
if (strpos($thumb, 'imgur.com') == true)  {
$thumb = str_replace('.jpg', 'm.jpg', $qsql4['thumb']);
} elseif (strpos($thumb, 'ggpht.com') == true)  {
$thumb = str_replace('=s0', '=w100', $qsql4['thumb']);    
}
?>						
						<tr>
						    <td><a href="/dashboard.php?type=edit&slug=<?php echo $slug; ?>"><img width="80px" src="<?php echo $thumb;?>" /></a></td>
							<td>
								<p><b><a href="/dashboard.php?type=edit&slug=<?php echo $slug; ?>"><font color="orange"><?php echo $ten_phim;?></font></a></b></p>
								<p><?php echo $ten_goc;?></p>
								<p><?php echo $slug;?></p>
							</td>
							<td>
								<p><?php if ($bole=='2') { echo 'Phim Lẻ'; } else { echo 'Phim Bộ'; } ?></p>
								<p class="text-danger"><?php if ($bole=='2') { echo $thoi_luong.' '.$trang_thai; } else { echo $trang_thai; } ?></p>
							</td>
							
<td><p><?php echo $quoc_gia;?></p></td>
<td><p><?php echo $the_loai;?></p></td>
<td><p><?php echo number_format($view, 0, '', '.');?></p></td>
							<td>
							<a href="/<?php echo $slug; ?>.html" target="_blank"><button class="btn-success" style="margin-bottom:5px">Xem</button></a>
							<br/>
							<a href="/dashboard.php?type=del&slug=<?php echo $slug; ?>"><button class="btn-danger">Xoá</button></a>	
							</td>
						</tr>
						
<?php } ?>

					</table>
				</div>
			</div>