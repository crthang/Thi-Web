<?php session_start(); ?>
<?php 
include('cau_2.php'); //câu 2 là câu kết nối với database
if (isset($_SESSION['user_id']) == false) {
 // Nếu người dùng chưa đăng nhập thì chuyển hướng website sang trang đăng nhập
   header('Location: http://localhost/website/dang-nhap.php');
}else {
   if (isset($_SESSION['permision']) == true) {
 // Ngược lại nếu đã đăng nhập
       $permission = $_SESSION['permision'];
 // Kiểm tra quyền của người đó có phải là admin h
       ay không
       if ($permission == '0') {
 // Nếu không phải admin thì xuất thông báo
           echo "Bạn không đủ quyền truy cập vào trang này<br>";
           echo "<a href='http://localhost/website/index.php'> Click để về lại trang chủ</a>";
           exit();
       }else{
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            $maVanDon=trim($_POST['maVanDon']);
            $maVanDon=str_replace("'","&#39;",$maVanDon);
            $tenNguoiGui=trim($_POST['tenNguoiGui']);
            $tenNguoiGui=str_replace("'","&#39;",$tenNguoiGui);
            $sdtNguoiGui=trim($_POST['sdtNguoiGui']);
            $sdtNguoiGui=str_replace("'","&#39;",$sdtNguoiGui);
            $ngayGui=trim($_POST['ngayGui']);
            $ngayGui=str_replace("'","&#39;",$ngayGui);
            $nguoiNhan=trim($_POST['nguoiNhan']);
            $nguoiNhan=str_replace("'","&#39;",$nguoiNhan);
            $sdtNguoiNhan=trim($_POST['sdtNguoiNhan']);
            $sdtNguoiNhan=str_replace("'","&#39;",$sdtNguoiNhan);
            $diaChiNguoiNhan=trim($_POST['diaChiNguoiNhan']);
            $diaChiNguoiNhan=str_replace("'","&#39;",$diaChiNguoiNhan);
            $maNhanVien=trim($_POST['maNhanVien']);
            $maNhanVien=str_replace("'","&#39;",$maNhanVien);
            $tienCuoc=trim($_POST['tienCuoc']);
            $tienCuoc=str_replace("'","&#39;",$tienCuoc);
            $tv="
            INSERT INTO vandon (
            id ,
            maVanDon ,
            tenNguoiGui ,
            sdtNguoiGui,
            ngayGui,
            nguoiNhan,
            sdtNguoiNhan,
            diaChiNguoiNhan,
            maNhanVien,
            tienCuoc
            )
            VALUES (
            NULL ,
            '$maVanDon',
            '$tenNguoiGui',
            '$sdtNguoiGui',
            '$ngayGui',
            '$nguoiNhan',
            '$sdtNguoiNhan',
            '$diaChiNguoiNhan',
            '$maNhanVien',
            '$tienCuoc'
        );";
        mysqli_query($con,$tv);
    }
}
}
}

?>
<form action="" method="post" enctype="multipart/form-data" action="" > 
        <table width="990px" >
            <tr>
                <td colspan="2" ><b style="color:blue;font-size:20px" >Thêm Vận Đơn</b><br><br> </td>
            </tr>
            <tr>
                <td width="150px" >Mã vận đơn : </td>
                <td width="840px">
                    <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="maVanDon" value="" >
                </td>
            </tr>
            <tr>
                <td width="150px" >Tên người gửi : </td>
                <td width="840px">
                    <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="tenNguoiGui" value="" >
                </td>
            </tr>
            <tr>
                <td width="150px" >SĐT người gửi : </td>
                <td width="840px">
                    <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="sdtNguoiGui" value="" >
                </td>
            </tr>

            <tr>
                <td>Ngày gửi : </td>
                <td>
                    <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="ngayGui" value="" >
                </td>
            </tr>
            <tr>
                <td width="150px" >Người nhận : </td>
                <td width="840px">
                    <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="nguoiNhan" value="" >
                </td>
            </tr>
            <tr>
                <td width="150px" >SĐT nguời nhận : </td>
                <td width="840px">
                    <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="sdtNguoiNhan" value="" >
                </td>
            </tr>
            <tr>
                <td width="150px" >Địa chỉ người nhận: </td>
                <td width="840px">
                    <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="diaChiNguoiNhan" value="" >
                </td>
            </tr>
            <tr>
                <td width="150px" >Mã nhân viên : </td>
                <td width="840px">
                    <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="maNhanVien" value="" >
                </td>
            </tr>

            <tr>
                <td valign="top" >Tiền cước : </td>
                <td>

                    <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="tienCuoc" value="" >
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>
                    <br>
                    <input type="submit" name="bieu_mau_them" value="Thêm" style="width:150px;height:50px;font-size:24px" >
                </td>
            </tr>
        </table>
    </form>
