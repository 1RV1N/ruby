<!doctype HTML>
<html>
	<head>
		<link rel="stylesheet" href="css.css">
	</head>
	<body>
		<nav>
			<div id="id_img"><img src=""></div>
		</nav>
		<section id="carroussel_container">
			<div class="carroussel">
				<div class="carroussel_part" id="carroussel_part_1">
				</div>
				<div class="carroussel_part" id="carroussel_part_2">
				</div>
				<div class="carroussel_part" id="carroussel_part_3">
				</div>
				<div class="carroussel_part" id="carroussel_part_4">
				</div>
			</div>
		</section>
		<section id="proposition_container">
			
			<div id="proposition_block">
				<div id="proposition_nav">
					<div id="proposition_title"> </div>
					<div class="proposition_category" id="proposition_category_1"></div>
					<div class="proposition_category" id="proposition_category_2"></div>
					<div class="proposition_category" id="proposition_category_3"></div>
					<div class="proposition_category" id="proposition_category_4"></div>
				</div>
				<div clas="category" id="category_1">
				<?php
					for ($i = 1; $i <= 20; $i++) {
					    echo '<div class="proposition"> </div>';
					}
				?>
				</div>
				<!-- <div clas="category" id="category_1">
				<?php
					for ($i = 1; $i <= 20; $i++) {
					    echo '<div class="proposition"> </div>';
					}
				?>
				</div>
				<div clas="category" id="category_2">
				<?php
					for ($i = 1; $i <= 20; $i++) {
					    echo '<div class="proposition"> </div>';
					}
				?>
				</div>
				<div clas="category" id="category_3">
				<?php
					for ($i = 1; $i <= 20; $i++) {
					    echo '<div class="proposition"> </div>';
					}
				?>
				</div>
				<div clas="category" id="category_4">
				<?php
					for ($i = 1; $i <= 20; $i++) {
					    echo '<div class="proposition"> </div>';
					}
				?>
				</div> -->
			</div>
		</section>
		<footer>
		</footer>
	</body>
</html>