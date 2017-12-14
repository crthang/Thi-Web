<!-- tạo cơ sở dữ liệu ptudweb -->

<?php

$con=mysqli_connect("localhost","root","");
if (mysqli_connect_errno($con)){
  echo "<br>Không thể kết nối đến CSDL: " . mysqli_connect_error($con);
  echo "<br>Không thể kết nối đến CSDL: Mã lỗi là " . mysqli_connect_errno($con);
}
$sql="CREATE DATABASE IF NOT EXISTS ptudweb";

if (mysqli_query($con,$sql)){

  echo "CSDL đã được tạo";
}else{
  echo "<br>Lỗi khi tạo CSDL: " . mysqli_connect_error($con);
  echo "<br>Lỗi khi tạo CSDL: Mã lỗi là " . mysqli_connect_errno($con);
}
mysqli_close($con);
unset($sql);

?>
<!-- tạo bảng lopcu --> 

<?php

include('cau_2.php');
$sql="CREATE TABLE IF NOT EXISTS lopcu(
       id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
       maThanhVien varchar(255),
       hoVaTen varchar(100),
       bietHieu varchar(255),
       matKhau varchar(255),
       email varchar(255),
       dienThoai varchar(255),
       diaChi varchar(255),
       noiLamViec varchar(255),
       chucVu varchar(255))";
if (mysqli_query($con,$sql)){	
  echo "Bảng đã được tạo";
}else{
  echo "<br>Lỗi khi tạo Bảng: " . mysqli_connect_error($con);
  echo "<br>Lỗi khi tạo Bảng: Mã lỗi là " . mysqli_connect_errno($con);
}
?>