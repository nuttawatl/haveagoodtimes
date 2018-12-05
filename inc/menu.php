<?php 
		if (strpos($_SERVER['PHP_SELF'], 'login') !== false) {
			$active = "6";
		}
		else if (strpos($_SERVER['PHP_SELF'], 'home') !== false) {
			$active = "1";
		}
		else if (strpos($_SERVER['PHP_SELF'], 'about') !== false) {
			$active = "2";
		}
		else if (strpos($_SERVER['PHP_SELF'], 'service') !== false) {
			$active = "3";
		}
		else if (strpos($_SERVER['PHP_SELF'], 'news') !== false) {
			$active = "4";
		}
		else if (strpos($_SERVER['PHP_SELF'], 'contact') !== false) {
			$active = "5";
		}
		else{
			$active = "0";
		}
?>

<div class="container">
			<div class="row">
				<div class="col">
					<div class="header_content d-flex flex-row align-items-center justify-content-start">
						<!-- Menu -->
						<div class="header_content_inner d-flex flex-row align-items-end justify-content-start">
							<div class="logo"><a href="../home/">Have a good time</a></div>
							<nav class="main_nav">
								<ul class="d-flex flex-row align-items-start justify-content-start">
									<li <?php if($active == "1") {?> class="active" <?php } ?>><a href="../home/">หน้าหลัก</a></li>
									<li <?php if($active == "2") {?> class="active" <?php } ?>><a href="../about/" >เกี่ยวกับเรา</a></li>
									<li <?php if($active == "3") {?> class="active" <?php } ?>><a href="../service/">การบริการ</a></li>
									<li <?php if($active == "4") {?> class="active" <?php } ?>><a href="../news/">ข่าวสารฯ</a></li>
									<li <?php if($active == "5") {?> class="active" <?php } ?>><a href="../contact/">ติดต่อเรา</a></li>
									<?php
									$_SESSION["authen"]	= isset( $_SESSION["authen"]) ?$_SESSION["authen"] : 'N';
									if($_SESSION["authen"] != "Y"){ ?>
									<li <?php if($active == "6") {?> class="active" <?php } ?>><a href="../home/login.php">เข้าสู่ระบบ</a></li>
									<?php 
									}
									else{ ?>
									<li><a href="../home/logout.php"><font color="#e6e600">[<?php echo($_SESSION["name"])?>]</font>-ออกจากระบบ</a></li>
									<?php }
									?>
								</ul>
							</nav>
							<!--<div class="header_phone ml-auto"><small>| โทร 088 647 7217</small></div>-->
							
							<!-- Hamburger -->
							<div class="hamburger ml-auto">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header_social d-flex flex-row align-items-center justify-content-start">
			<ul class="d-flex flex-row align-items-start justify-content-start">
				<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
			</ul>
		</div>
		