hi
<?php 
 include('cau_2.php');
    $id=$_GET['id'];
    $tv="select * from lopcu where id='$id' ";
    $tv_1=mysqli_query($con,$tv);
    $tv_2=mysqli_fetch_array($tv_1);
    $maThanhVien=$tv_2['maThanhVien'];
    $hoVaTen=$tv_2['hoVaTen'];
    $bietHieu=$tv_2['bietHieu'];
    $matKhau=$tv_2['matKhau'];
    $email=$tv_2['email'];
    $dienThoai=$tv_2['dienThoai'];
    $diaChi=$tv_2['diaChi'];
    $noiLamViec=$tv_2['noiLamViec'];
    $chucVu=$tv_2['chucVu'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Xóa thành viên</title>
      <SCRIPT LANGUAGE="JavaScript">
      function confirmAction() {
        return confirm("Bạn có muốn xóa Tài Khoản <?php echo $hoVaTen; ?> ")
      }
 
      </SCRIPT>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data" onSubmit="return confirmAction()" > 
    <table width="990px" >
        <tr>
            <td colspan="2" ><b style="color:blue;font-size:20px" >Xóa Thông Tin: <?php echo $hoVaTen; ?> </b><br><br> </td>
            
        </tr>
          <tr>
            <td width="150px" >Mã Thành viên : </td>
            <td width="840px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="maThanhVien" value="<?php echo $maThanhVien; ?>" >
            </td>
        </tr>
          <tr>
            <td width="150px" >Họ và Tên : </td>
            <td width="840px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="hoVaTen" value="<?php echo $hoVaTen; ?>" >
            </td>
        </tr>
        <tr>
            <td width="150px" >Biệt hiệu : </td>
            <td width="840px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="bietHieu" value="<?php echo $bietHieu; ?>" >
            </td>
        </tr>        
        <tr>
            <td>Mật khẩu : </td>
            <td>
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" type="password" name="matKhau" value="<?php echo $matKhau; ?>" >
            </td>
        </tr>
           <tr>
            <td width="150px" >Email : </td>
            <td width="840px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" type="email" name="email" value="<?php echo $email; ?>" >
            </td>
        </tr>
        <tr>
            <td width="150px" >Điện thoại : </td>
            <td width="840px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="dienThoai" value="<?php echo $dienThoai; ?>" >
            </td>
        </tr>
        <tr>
            <td width="150px" >Địa chỉ : </td>
            <td width="840px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="diaChi" value="<?php echo $diaChi; ?>" >
            </td>
        </tr>
        <tr>
            <td width="150px" >Chức vụ : </td>
            <td width="840px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="chucVu" value="<?php echo $chucVu; ?>" >
            </td>
        </tr>
        
        <tr>
            <td valign="top" >Nơi làm việc : </td>
            <td>
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="noiLamViec" value="<?php echo $noiLamViec; ?>" >
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <br>
                <input type="submit" name="bieu_mau_sua" value="Xóa" style="width:200px;height:50px;font-size:24px" >
            </td>
        </tr>
    </table>
</form>
</body>
</html>
<?php 
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
   include('cau_2.php');
     $id=$_GET['id'];
     $tv=" DELETE FROM lopcu WHERE id =$id; ";
    mysqli_query($con,$tv);
    header("location:cau_6.php"); 
    }
?>
