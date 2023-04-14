<div class="slidebar">
						<ul class="list-slidebar">
							<?php 

						$sql = "SELECT * FROM theloai ";
						$qr = mysqli_query($conn,$sql);
						while($row = mysqli_fetch_array($qr)){
						 ?>
						 <li><a href="index.php?menupage=danhmucsanpham&id=<?php echo $row['matlsp'] ?>"><?php echo $row['tentl']; ?></a></li>
						<?php
						 }
						 ?>
						</ul>
</div>