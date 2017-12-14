<html>
	<head>
		<title>Trang cau 5</title>
		<meta charset="utf-8">
	</head>
	<body>
		<form action="" method="POST">
			<table>
				<tr>
					<th>Trang tìm kiếm</th>
				</tr>
				<tr>
					<td>Tìm kiếm</td>
					<td><input type="text" name="timkiem"></td>
				</tr>
				<tr>
					<td>Tìm theo:</td>
					<td>
					 <input type="radio" name="ndtk" value="theoten" checked="true" >Theo Tên
					 <input type="radio" name="ndtk" value="theobiethieu">Theo biệt hiệu
					 <input type="radio" name="ndtk" value="theodienthoai">Theo điện thoại
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
			$sql="SELECT * FROM lopcu WHERE hoVaTen LIKE '%$tim%' ORDER BY id ASC ";
			$query=mysqli_query($con,$sql);
			$number=mysqli_num_rows($query);
			if($number>0)
        	{   
            $i=0;
            echo "<table border='1' ><tr><th>STT</th><th>Họ tên</th>";
            echo "<th>Mã thành viên</th><th>Biệt hiệu</th><th>Mật khẩu</th><th>Email</th><th>Điện thoại</th>";
            echo "<th>Địa chỉ</th><th>Nơi làm việc</th><th>Chức vụ</th>";
            echo "<th>Sửa</th>";
            while($row=mysqli_fetch_array($query))
            {
                $i++;
                $link_sua="../hoc_php/sua_thanh_vien.php?&id=".$row["id"];
                echo "<tr><td>$i</td>";
                echo "<td>".$row["hoVaTen"]."</td><td>".$row["maThanhVien"]."</td>";
                echo "<td>".$row["bietHieu"]."</td><td>".$row["matKhau"]."</td>";
                echo "<td>".$row["email"]."</td><td>".$row["dienThoai"]."</td>";
                echo "<td>".$row["diaChi"]."</td><td>".$row["noiLamViec"]."</td>";
                echo "<td>".$row["chucVu"]."</td>";
                echo "<td><a href=".$link_sua.">Sửa</a></td>";
            }
            echo "</table>";
        	}
    		else
    		{
        	echo "Không có bản ghi nào thỏa mãn";
    		}
    	
    	}
    		if(($timtheo=="theobiethieu")) 
		{
			echo "<h1>TÌM KIẾM THEO BIỆT HIỆU</h1>";
			include("cau_2.php");
			mysqli_set_charset($con, 'UTF8');
			$sql="SELECT * FROM lopcu WHERE bietHieu LIKE '%$tim%' ORDER BY id ASC ";
			$query=mysqli_query($con,$sql);
			$number=mysqli_num_rows($query);
			if($number>0)
        	{   
            $i=0;
            echo "<table border='1' ><tr><th>STT</th><th>Họ tên</th>";
            echo "<th>Mã thành viên</th><th>Biệt hiệu</th><th>Mật khẩu</th><th>Email</th><th>Điện thoại</th>";
            echo "<th>Địa chỉ</th><th>Nơi làm việc</th><th>Chức vụ</th>";
            echo "<th>Sửa</th>";
            while($row=mysqli_fetch_array($query))
            {
                $i++;
                $link_sua="../hoc_php/sua_thanh_vien.php?&id=".$row["id"];
                echo "<tr><td>$i</td>";
                echo "<td>".$row["hoVaTen"]."</td><td>".$row["maThanhVien"]."</td>";
                echo "<td>".$row["bietHieu"]."</td><td>".$row["matKhau"]."</td>";
                echo "<td>".$row["email"]."</td><td>".$row["dienThoai"]."</td>";
                echo "<td>".$row["diaChi"]."</td><td>".$row["noiLamViec"]."</td>";
                echo "<td>".$row["chucVu"]."</td>";
                echo "<td><a href=".$link_sua.">Sửa</a></td>";
            }
            echo "</table>";
        	}
    		else
    		{
        	echo "Không có bản ghi nào thỏa mãn";
    		}
    	
    	}
    		if(($timtheo=="theodienthoai")) 
		{
			echo "<h1>TÌM KIẾM THEO ĐIỆN THOẠI</h1>";
			include("cau_2.php");
			mysqli_set_charset($con, 'UTF8');
			$sql="SELECT * FROM lopcu WHERE dienThoai LIKE '%$tim%' ORDER BY id ASC ";
			$query=mysqli_query($con,$sql);
			$number=mysqli_num_rows($query);
			if($number>0)
        	{   
            $i=0;
            echo "<table border='1' ><tr><th>STT</th><th>Họ tên</th>";
            echo "<th>Mã thành viên</th><th>Biệt hiệu</th><th>Mật khẩu</th><th>Email</th><th>Điện thoại</th>";
            echo "<th>Địa chỉ</th><th>Nơi làm việc</th><th>Chức vụ</th>";
            echo "<th>Sửa</th>";
            while($row=mysqli_fetch_array($query))
            {
                $i++;
                $link_sua="../hoc_php/sua_thanh_vien.php?&id=".$row["id"];
                echo "<tr><td>$i</td>";
                echo "<td>".$row["hoVaTen"]."</td> <td>".$row["maThanhVien"]."</td>";
                echo "<td>".$row["bietHieu"]."</td><td>".$row["matKhau"]."</td>";
                echo "<td>".$row["email"]."</td><td>".$row["dienThoai"]."</td>";
                echo "<td>".$row["diaChi"]."</td><td>".$row["noiLamViec"]."</td>";
                echo "<td>".$row["chucVu"]."</td>";
                echo "<td><a href=".$link_sua.">Sửa</a></td>";
            }
            echo "</table>";
        	}
    		else
    		{
        	echo "Không có bản ghi nào thỏa mãn";
    		}
    	
    	}
	}
?>
