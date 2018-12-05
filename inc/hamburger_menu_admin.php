<!--Hamburher Menu -->

	<div class="menu">
		<div class="menu_header d-flex flex-row align-items-center justify-content-start">
			<div class="menu_logo"><a href="index.html">Have a good time</a></div>
			<div class="menu_close_container ml-auto"><div class="menu_close"><div></div><div></div></div></div>
		</div>
		<div class="menu_content">
			<ul>
				<li><a href="../admin/"    <?php if($active == "1") {?> style="color:#b5b508 ;" <?php } ?>>หน้าจัดการรายการ</a></li>
				<li><a href="../admin/sendnews.php" <?php if($active == "2") {?> style="color:#b5b508 ;" <?php } ?>>หน้าส่งข่าวสาร</a></li>
				<li><a href="./admin/user.php"  <?php if($active == "3") {?> style="color:#b5b508 ;" <?php } ?>>สมาชิกในระบบ</a></li>
				<?php
					if($_SESSION["authen"] != "Y"){ ?>
					<li <?php if($active == "6") {?> class="active" <?php } ?>><a href="../home/login.php">เข้าสู่ระบบ</a></li>
				<?php 
					}
				else{ ?>
					<li><a href="../home/logout.php"><font color="#e6e600">[<?php echo($_SESSION["name"])?>]</font>-ออกจากระบบ</a></li>
				<?php } ?>
			</ul>
		</div>
		<div class="menu_social">
			<!--<div class="menu_phone ml-auto"><img src="../img/call.png"/> โทร 088 647 7217</div>-->
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
    </div>
