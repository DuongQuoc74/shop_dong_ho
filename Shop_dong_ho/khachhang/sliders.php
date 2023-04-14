<?php require('../chucnang/condb.php') ?>
<div class="slider">
			<div class="slideshow-container">
		    <?php
		    $demtrang = "SELECT COUNT(*) as 'sotrang' FROM slider";
		    $qrdemtrang = mysqli_query($conn,$demtrang);
		    $a = mysqli_fetch_array($qrdemtrang);
		    ?>
		    <?php 
		    $sqlslider = "SELECT * FROM slider";
		    $qrslider = mysqli_query($conn,$sqlslider);
		    while($rowsliders = mysqli_fetch_array($qrslider))
		    {
		     ?>
		     <div class="mySlides fade">
		         <div class="numbertext"><?php echo $rowsliders['thutu'];?></div>
		         <img src="../images/Slides/<?php echo $rowsliders['hinhanh'];?>"style="width: 100%;height: 350px;  margin-top: -31px;">
		         <!-- <div class="text"><?php echo $rowsliders['noidung']; ?></div>-->

		         <div style="text-align: center;">
		            <?php 
		              for ($i=1; $i <= $a['sotrang']; $i++) { 
		              ?>
		                    <span class="dot" onclick="currentSlide(<?php echo $i;?>)"></span>
		              <?php
		              }
		             ?>
		         </div>


		     </div>
		    <?php } ?>

		  <!-- Nút điều khiển mũi tên-->
		   <a class="prev" onclick="plusSlides(-1)">❮</a>
		   <a class="next" onclick="plusSlides(1)">❯</a>
		   <br>
		    
		 </div>
		
</div>
<div class="clear"></div>