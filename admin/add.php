<form method='post'>
<button class="btn-success">Tên Phim</button><input name="ten_phim" style="width:500px; background-color:#CCCCCC"></input><br/><br/>
<button class="btn-primary">Tên Gốc</button><input name="ten_goc" style="width:500px; background-color:#CCCCCC"></input><br/><br/>
<!--<button class="btn-warning">Slug</button><input name="slug" style="width:500px" required=""></input><br/><br/>-->
<button class="btn-dark"><font color="red">Trạng Thái</font></button><input name="trang_thai" style="width:200px; background-color:#CCCCCC"></input> // Phim Bộ thì "1/10 VS", Phim Lẻ thì để "VS" hoặc "TM" thôi</font><br/><br/>
<button class="btn-success">Thể Loại</button>
<select name="the_loai" class="form-control" style="background-color:#CCCCCC">
<option value="">--------</option> 
<option value="Viễn Tưởng">Viễn Tưởng</option>
<option value="Hành Động">Hành Động</option>
<option value="Cổ Trang">Cổ Trang</option>
<option value="Tình Yêu">Tình Yêu</option>
<option value="Kinh Dị">Kinh Dị</option>
<option value="Phiêu Lưu">Phiêu Lưu</option>
<option value="Chiến Tranh">Chiến Tranh</option>
<option value="Hình Sự<">Hình Sự</option>
<option value="Hài Hước">Hài Hước</option>
<option value="Hoạt Hình">Hoạt Hình</option>
<option value="Học Đường">Học Đường</option>
<option value="Đam Mỹ">Đam Mỹ</option>
<option value="LGBT">LGBT</option>
<option value="18 Plus">18 Plus</option>
</select>
<br/>
<button class="btn-primary">Quốc Gia</button>
<select name="quoc_gia" class="form-control" style="background-color:#CCCCCC">
<option value="">--------</option> 
<option value="Âu Mỹ">Âu Mỹ</option>
<option value="Hàn Quốc">Hàn Quốc</option>
<option value="Trung Quốc">Trung Quốc</option>
<option value="Nhật Bản">Nhật Bản</option>
<option value="Thái Lan">Thái Lan</option>
<option value="Ấn Độ">Ấn Độ</option>
<option value="Việt Nam">Việt Nam</option>
<option value="Khác">Khác</option>
</select>
<br/>
<button class="btn-success">Thời Lượng</button><input name="tap" style="background-color:#CCCCCC"></input> <font color="white">// Số Tập hoặc số Phút nếu là phim lẻ</font><br/><br/>
<button class="btn-primary">Bộ Lẻ</button><input name="bole" style="background-color:#CCCCCC"></input> <font color="orange">// Phim Bộ để số 1, Phim Lẻ để số 2</font><br/><br/>
<button class="btn-success">Ảnh</button><input name="thumb" style="width:500px; background-color:#CCCCCC"></input><br/><br/>
<button class="btn-primary">Năm Chiếu</button><input name="nam_chieu" style="width:300px; background-color:#CCCCCC"></input><br/><br/>
<button class="btn-success">Diễn Viên</button><input name="dien_vien" style="width:500px background-color:#CCCCCC"></input><br/><br/>
<button class="btn-warning">Nội Dung</button><textarea  style="background-color:#CCCCCC" rows = "10" cols = "100" name = "noi_dung" value="<?php echo $noi_dung; ?>"></textarea><br/><br/>
<button class="btn btn-primary btn-block" name="add">ADD</button><br/><br/>
</form>



<?php
error_reporting(E_ERROR | E_PARSE);

function bodau($strAccent = "", $sepchar = " ") {
		$strfrom 	= " Á À Ả Ã Ạ Â Ấ Ầ Ẩ Ẫ Ậ Ă Ắ Ẳ Ẵ Ặ Đ É È Ẻ Ẽ Ẹ Ê Ế Ề Ể Ễ Ệ Í Ì Ỉ Ĩ Ị Ó Ò Ỏ Õ Ọ Ơ Ớ Ờ Ở Ỡ Ợ Ô Ố Ồ Ổ Õ Ộ Ú Ù Ủ Ũ Ụ Ư Ứ Ừ Ử Ũ Ụ Ý Ỳ Ỷ Ỹ Ỵ ";
		$strto		= " A A A A A A A A A A A A A A A A D E E E E E E E E E E E I I I I I O O O O O O O O O O O O O O O O O U U U U U U U U U U U Y Y Y Y Y ";
		$strfrom 	.= "á à ả ã ạ â ấ ầ ẩ ẫ ậ ă ắ ằ ẳ ẵ ặ đ é è ẻ ẽ ẹ ê ế ề ể ễ ệ í ì ỉ ĩ ị ó ò ỏ õ ọ ơ ớ ờ ở ỡ ợ ô ố ồ ổ ỗ ộ ú ù ủ ũ ụ ư ứ ừ ử ữ ự ý ỳ ỷ ỹ ỵ";
		$strto		.= "a a a a a a a a a a a a a a a a a d e e e e e e e e e e e i i i i i o o o o o o o o o o o o o o o o o u u u u u u u u u u u y y y y y";
		$fromarr = explode(" ", $strfrom);
		$toarr = explode(" ", $strto);
		$dicarr = array();
		for($i=1;$i<count($fromarr);$i++) { $dicarr[$fromarr[$i]] = $toarr[$i]; }
		$strNoAccent = strtr($strAccent,$dicarr);
		$specialchar = ", . ? : ! < > & * ^ % $ # ; ' ( ) { } [ ] + / \"";
		$specialcharArr = explode(" ",$specialchar);
		$strNoAccent = str_replace($specialcharArr,"",$strNoAccent);
		if($sepchar) { $strNoAccent = str_replace(" ",$sepchar, $strNoAccent);
		$strNoAccent = str_replace($sepchar.$sepchar.$sepchar,$sepchar,$strNoAccent); }
		return $strNoAccent;
	}

if (isset($_POST['add'])) {
$ten_phim = $_POST['ten_phim'];
$ten_goc = $_POST['ten_goc'];
$ten_goc = str_replace("'s","",$ten_goc);
$slug = $_POST['slug'];
$dien_vien = $_POST['dien_vien']; 
$trang_thai = $_POST['trang_thai'];
$the_loai = $_POST['the_loai']; 
$quoc_gia = $_POST['quoc_gia'];
$slug = str_replace(' ', '-', strtolower(bodau($ten_phim)));
if ((strpos($thumb, "googleusercontent.com") == true) and (strpos($thumb, "blogger") == false)) { $thumb = str_replace("googleusercontent.com","ggpht.com",$thumb); }
if (strpos($thumb, "/h120/") == true) { $thumb = str_replace("/h120/", "/s0/", $thumb); }
$bole = $_POST['bole'];
$nam_chieu = $_POST['nam_chieu'];
$tap = $_POST['tap']; 
$noi_dung = $_POST['noi_dung']; 
$noi_dung = str_replace("'","",$noi_dung);
$query = mysqli_query($apizophim, "SELECT slug FROM phim WHERE slug='$slug'");
if (mysqli_num_rows($query) == 0) {
$result = mysqli_query($apizophim, "INSERT INTO `phim` (`ten_phim`, `ten_goc`, `slug`, `trang_thai`, `the_loai`, `nam_chieu`, `quoc_gia`, `noi_dung`, `thumb`, `thoi_luong`, `bole`, `api`, `time`) VALUES 
('".$ten_phim."', '".$ten_goc."', '".$slug."', '".$trang_thai."', '".$the_loai."', '".$nam_chieu."', '".$quoc_gia."', '".$noi_dung."', '".$thumb."', '".$tap."', '".$bole."','0', '".time()."')");
} else {
echo '<font color="red">Phim với slug <a href="/dashboard.php?type=edit&slug='.$slug.'"><b><font color="blue">'.$slug.'</font></b></a> đã có nhé ! Slug được tạo tự động từ tên phim, thêm hậu tố ở tên phim, sau đó có thể đổi lại !</font>';
}

}
?>