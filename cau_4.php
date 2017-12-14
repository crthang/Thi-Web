
<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('cau_2.php');

    $maThanhVien=trim($_POST['maThanhVien']);
    $maThanhVien=str_replace("'","&#39;",$maThanhVien);
    $hoVaTen=trim($_POST['hoVaTen']);
    $hoVaTen=str_replace("'","&#39;",$hoVaTen);
    $bietHieu=trim($_POST['bietHieu']);
    $bietHieu=str_replace("'","&#39;",$bietHieu);
    $matKhau=trim($_POST['matKhau']);
    $matKhau=str_replace("'","&#39;",$matKhau);
    $email=trim($_POST['email']);
    $email=str_replace("'","&#39;",$email);
    $dienThoai=trim($_POST['dienThoai']);
    $dienThoai=str_replace("'","&#39;",$dienThoai);
    $diaChi=trim($_POST['diaChi']);
    $diaChi=str_replace("'","&#39;",$diaChi);
    $noiLamViec=trim($_POST['noiLamViec']);
    $noiLamViec=str_replace("'","&#39;",$noiLamViec);
    $chucVu=trim($_POST['chucVu']);
    $chucVu=str_replace("'","&#39;",$chucVu);
        $tv="
        INSERT INTO lopcu (
        id ,
        maThanhVien ,
        hoVaTen ,
        bietHieu,
        matKhau,
        email,
        dienThoai,
        diaChi,
        noiLamViec,
        chucVu
        )
        VALUES (
        NULL ,
        '$maThanhVien',
        '$hoVaTen',
        '$bietHieu',
        '$matKhau',
        '$email',
        '$dienThoai',
        '$diaChi',
        '$noiLamViec',
        '$chucVu'
        );";
        mysqli_query($con,$tv);
    }
?>
<form action="" method="post" enctype="multipart/form-data" action="" > 
    <table width="990px" >
        <tr>
            <td colspan="2" ><b style="color:blue;font-size:20px" >Thêm Thông Tin</b><br><br> </td>
            
        </tr>
          <tr>
            <td width="150px" >Mã Thành viên : </td>
            <td width="840px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="maThanhVien" value="" >
            </td>
        </tr>
          <tr>
            <td width="150px" >Họ và Tên : </td>
            <td width="840px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="hoVaTen" value="" >
            </td>
        </tr>
        <tr>
            <td width="150px" >Biệt hiệu : </td>
            <td width="840px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="bietHieu" value="" >
            </td>
        </tr>
        
        <tr>
            <td>Mật khẩu : </td>
            <td>
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" type="password" name="matKhau" value="" >
            </td>
        </tr>
           <tr>
            <td width="150px" >Email : </td>
            <td width="840px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" type="email" name="email" value="" >
            </td>
        </tr>
        <tr>
            <td width="150px" >Điện thoại : </td>
            <td width="840px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="dienThoai" value="" >
            </td>
        </tr>
        <tr>
            <td width="150px" >Địa chỉ : </td>
            <td width="840px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="diaChi" value="" >
            </td>
        </tr>
        <tr>
            <td width="150px" >Chức vụ : </td>
            <td width="840px">
                <input style="width:400px;margin-top:3px;margin-bottom:3px;" name="chucVu" value="" >
            </td>
        </tr>
        
        <tr>
            <td valign="top" >Nơi làm việc : </td>
            <td>
                
                  <textarea id="noi_dung" name="noiLamViec" ></textarea>
            </td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>
                <br>
                <input type="submit" name="bieu_mau_them" value="Thêm" style="width:200px;height:50px;font-size:24px" >
            </td>
        </tr>
    </table>
</form>