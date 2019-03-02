<html>
<head>
  <title>Trang cau 5</title>
  <meta charset="utf-8">
</head>
<body>
    <form action="" method="POST">
        <table>
            <tr>
                <th>Trang tìm kiếm vận đơn</th>
            </tr>
            <tr>
                <td>Tìm kiếm</td>
                <td><input type="text" name="timkiem"></td>
            </tr>
            <tr>
                <td>Tìm theo:</td>
                <td>
                 <input type="radio" name="ndtk" value="theoten" checked="true" >Theo tên người vận chuyển
                 <input type="radio" name="ndtk" value="theodiachi">Theo địa chỉ người nhận
                 <input type="radio" name="ndtk" value="theodienthoai">Theo số điện thoại
                 <input type="radio" name="ndtk" value="theoma">Theo mã vận đơn
             </td>
         </tr>
         <tr>
            <td><input type="submit" value="Tìm kiếm" name="btntim"></td>
            <td><input type="reset" value="Tìm lại"></td>
        </tr>
    </table>
</form>
</body>
</html>

<?php
if(isset($_POST['btntim']))
{
  $tim=$_POST['timkiem'];
  $timtheo=$_POST['ndtk'];

  if(($timtheo=="theoten")) 
  {
   echo "<h1>TÌM KIẾM THEO TÊN</h1>";
   include("cau_2.php");
   mysqli_set_charset($con, 'UTF8');
   $sql="SELECT * FROM vandon WHERE hoVaTen LIKE '%$tim%' ORDER BY id ASC ";
   $query=mysqli_query($con,$sql);
   $number=mysqli_num_rows($query);
   if($number>0)
   {   
     $i=0;
     echo "<table border='1' ><tr><th>STT</th><th>Mã vận đơn</th>";
     echo "<th>Tên người gửi</th><th>SĐT người gửi</th><th>Ngày gửi</th><th>Người nhận</th><th>SĐT người nhận</th>";
     echo "<th>Địa chỉ người nhận</th><th>Mã nhân viên</th><th>Tiền cước</th>";
     while($row=mysqli_fetch_array($query))
     {
        $i++;
        echo "<tr><td>$i</td>";
        echo "<td>".$row["maVanDon"]."</td><td>".$row["tenNguoiGui"]."</td>";
        echo "<td>".$row["sdtNguoiGui"]."</td><td>".$row["ngayGui"]."</td>";
        echo "<td>".$row["nguoiNhan"]."</td><td>".$row["sdtNguoiNhan"]."</td>";
        echo "<td>".$row["diaChiNguoiNhan"]."</td><td>".$row["maNhanVien"]."</td>";
        echo "<td>".$row["tienCuoc"]."</td>";
    }
    echo "</table>";
}
else
{
 echo "Không có bản ghi nào thỏa mãn";
}

}

if(($timtheo=="theodiachi")) 
{
//Làm tương tự
}

if(($timtheo=="theodienthoai")) 
{
 //Làm tương tự
}

if(($timtheo=="theoma")) 
{
 //Làm tương tự
}

?>
