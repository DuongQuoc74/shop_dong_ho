<?php 


require('../chucnang/condb.php');
if ($_GET['code']) {
	$masp = $_GET['code'];
	$sql = "SELECT * FROM sanpham WHERE masp = '$masp'";
	$qr = mysqli_query($conn,$sql);
	$i;
}else{
	$masp ='';
	$sql = "SELECT * FROM sanpham WHERE masp = '$masp'";
	$qr = mysqli_query($conn,$sql);
	$i;
}
while($row = mysqli_fetch_array($qr))
{
 ?>


<div class="trangchitiet">
 	<form class="fthemvaogiohang" name="fthemvaogiohang" method="POST" action="chucnang/themvaogiohang.php?idgiohang=<?php echo $row['masp'] ?>">
	 		 <div class="sanphamchitiet">
	 	 	<div class="anhchitiet">
	 	 		<img src="../Images/sanpham1/<?php echo $row['hinhanh']; ?>"></div>
	 		</div>
	 	 <div class="thongtinsanpham">
	 	 	<div class="tensanpham"><?php echo $row['tensanpham'] ?></div>
	 	 	<div class="giasanpham"><?php echo number_format($row["giatien"],3,".",",") ?>VND</div>
	 	 	<div class="soluong">Số lượng: <?php echo $row["soluong"]==0?"hết hàng":$row["soluong"]; ?></div>
	 	 	<div class="chucnangsp">
	 	 		<div class="dieuchinh">
	 	 			<input id="tru" class="dieukhien" type="button" onclick="minnus();" value="-">
	 	 			<span class="khungsoluongsanpham"><input type="text" name="soluongsanpham" id="soluong"  value="1"></span>
	 	 			<input id="cong" class="dieukhien" type="button" onclick="plus();" min="<?php echo $row["soluong"] ?>" value="+">

	 	 		</div>
	 	 		<div class="giohang">
	 	 			<?php 

	 	 		if ($row['soluong']==0) {
	 	 			?>
	 	 			<input type="submit" disabled name="themvaogiohang" value="Sản phẩm đã hết hàng">
	 	 			<?php
	 	 		}else{

	 	 			?>
	 	 			<input type="submit" name="themvaogiohang" value="Thêm vào giỏ hàng">
	 	 			<?php

	 	 		}

	 	 		 ?>
	 	 		 <div class="clear"></div>
	 	 		</div>
	 	 	</div>
	 	 </div>
 	</form>
</div>

<script type="text/javascript">


				
				 let x = document.getElementById("cong").getAttribute("min");
				
				//cập nhập số lượng

				let render = (b) =>{

					a.value = b

				}
		   	
		         let a = document.getElementById("soluong")
  				 let b = a.value

  				 // tăng số lượng
			     let plus = () =>{
			     	if (b<x) 

			     	b++;
			     	render(b);
			     }
			     // giảm số lượng
			     let minnus = () =>{
			     if (b > 1) 
			     	b--;
			     render(b);
			     	//console.log(b);

			     }
			     // xét điều kiện nếu là text và 0
			     a.addEventListener('input', () => {
			     	b = a.value;
			     	console.log(b);
			     	b = parseInt(b);
			     	b = (isNaN(b)||b==0)?1:b;
			     	render(b);
			     });

		
</script>



 <?php } ?>