<?php include_once('nav-data.php'); ?>
<div class="mobile-nav clearfix ease hidden-md hidden-lg">
	<div class="mb-nav-left bp-rel pull-left" style="transition-delay: 0.3s;">
		<div class="mb-nav-auto">
			<!-- Level 1 -->
			<div class="mb-top-nav">
				<ul class="lvl-btn">
					<?php foreach ($arrMainMenu as $main_menu => $sub_menu) { ?>
					<li><a href="#" data-level="<?php echo str_replace(" ", "_", $main_menu); ?>"><?php echo $main_menu; ?><i class="fa fa-angle-right"></i></a></li>
					<?php } ?>
				</ul>
			</div>
			<div class="mb-bottom-nav">
				<ul>
				<?php
					$subMenu = array();
					$ctr = 0;
					foreach ($arrSubMenu as $text => $content)
					{
						if ($ctr == 0) {
							$subMenu[0][] = $text;
						} else if ($ctr == 1) {
							$subMenu[1][] = $text;
						}
					}
				?>
					<li><a href="#" data-level="<?php echo removeSpaceAndSpecialCharacters($subMenu[0][0]); ?>"><?php echo $subMenu[0][0]; ?> <i class="fa fa-angle-right"></i></a></li>
					<li><a href="#">News</a></li>
					<li><a href="#">Insights</a></li>
					<li><a href="#">Events</a></li>
					<li><a href="#" data-level="<?php echo removeSpaceAndSpecialCharacters($subMenu[0][1]); ?>"><?php echo $subMenu[0][1]; ?> <i class="fa fa-angle-right"></i></a></li>
					<li><a href="#">Contact</a></li>
					<li><a href="<?php echo $switch_lang; ?>">简体中文</a></li>
				</ul>
			</div>
		</div>
		<!-- About Us and Careers -->
		<?php foreach ($arrSubMenu as $text => $content) { ?>
		<div class="lvl <?php echo removeSpaceAndSpecialCharacters($text); ?> lvl-holder bp-ab">
			<div class="mb-nav-auto">
				<div class="mb-bottom-nav">
					<div class="mb-sub-title">
						<div class="mb-sub-tl-inner" data-level="<?php echo removeSpaceAndSpecialCharacters($text); ?>">
							<i class="fa fa-angle-left"></i>
							<span class="bp-set vm"><?php echo $text; ?></span>
						</div>
					</div>
					<ul class="lvl-btn">
					<?php foreach ($content as $text => $url) { ?>
						<?php if (!empty($text)) { ?>
							<li><a href="<?php echo $url; ?>"><?php echo $text; ?></a></li>
						<?php } ?>
					<?php } ?>
					</ul>
				</div>
			</div>
			<div class="mb-back-nav bp-ab">
				<i class="pw-arrow-right left bp-set vm"></i>
				<span class="bp-set level2-back vm">BACK TO MENU</span>
			</div>
		</div>
		<?php } ?>

		<!-- Level 2 -->
		<?php foreach ($arrMainMenu as $main_menu => $sub_menu) { ?>
		<div class="lvl <?php echo str_replace(" ", "_", $main_menu); ?> lvl-holder bp-ab">
			<div class="mb-nav-auto">
				<div class="mb-bottom-nav">
					<div class="mb-sub-title">
						<div class="mb-sub-tl-inner" data-level="<?php echo str_replace(" ", "_", $main_menu); ?>">
							<i class="fa fa-angle-left"></i>
							<span class="bp-set vm"><?php echo $main_menu; ?></span>
						</div>
					</div>
					<ul class="lvl-btn">
					<?php $subMenuCtr = 0; ?>
					<?php foreach ($sub_menu as $sub_menu_text => $sub_menu_content) { ?>
						<?php if (!empty($sub_menu_text)) { ?>
							<?php $xTitle = explode("*", $sub_menu_text); ?>
							<li><a href="#" data-level="lvl<?php echo str_replace(" ", "_", $main_menu)."_".$subMenuCtr; ?>i"><?php echo $xTitle[0]; ?> <i class="fa fa-angle-right"></i></a></li>
							<?php $subMenuCtr++; ?>
						<?php } ?>
					<?php } ?>
					</ul>
				</div>
			</div>
			<div class="mb-back-nav bp-ab">
				<i class="pw-arrow-right left bp-set vm"></i>
				<span class="bp-set level2-back vm">BACK TO MENU</span>
			</div>
		</div>
		<?php } ?>
		<!-- Level 3 -->
		<?php foreach ($arrMainMenu as $main_menu => $sub_menu) { ?>
			<?php $subMenuCtr1 = 0; ?>
			<?php foreach ($sub_menu as $sub_menu_text => $sub_menu_content) { ?>
				<?php if (!empty($sub_menu_text)) { ?>
					<?php $xTitle = explode("*", $sub_menu_text); ?>
					<div class="lvl lvl<?php echo str_replace(" ", "_", $main_menu)."_".$subMenuCtr1; ?>i lvl-holder bp-ab">
						<div class="mb-nav-auto">
							<div class="mb-bottom-nav">
								<div class="mb-sub-title">
									<div class="mb-sub-tl-inner" data-level="lvl<?php echo str_replace(" ", "_", $main_menu)."_".$subMenuCtr1; ?>i">
										<i class="fa fa-angle-left"></i>
										<span class="bp-set vm"><?php echo $xTitle[0]; ?></span>
									</div>
								</div>
								<ul class="lvl-btn">
								<?php $ctr = 0; ?>
								<?php foreach ($sub_menu_content as $title => $content) { ?>
									<?php if (!empty($title)) { ?>
										<li><a href="#" data-level="lvl_<?php echo removeSpaceAndSpecialCharacters($title); ?>-o"><?php echo $title; ?> <i class="fa fa-angle-right"></i></a></li>
										<?php $ctr++; ?>
									<?php } ?>
								<?php } ?>
								</ul>
							</div>
						</div>
						<div class="mb-back-nav bp-ab">
							<i class="pw-arrow-right left bp-set vm"></i>
							<span class="bp-set level2-back vm">BACK TO MENU</span>
						</div>
					</div>
					<?php $subMenuCtr1++; ?>
				<?php } ?>
			<?php } ?>
		<?php } ?>
		<!-- Level 4 -->
		<?php foreach ($arrMainMenu as $main_menu => $sub_menu) { ?>
			<?php foreach ($sub_menu as $sub_menu_text => $sub_menu_content) { ?>
				<?php $ctr1 = 0; ?>
				<?php foreach ($sub_menu_content as $title => $content) { ?>
					<?php if (!empty($title) && !empty($main_menu) && !empty($sub_menu_text)) { ?>
						<div class="lvl lvl_<?php echo removeSpaceAndSpecialCharacters($title); ?>-o lvl-holder bp-ab">
							<div class="mb-nav-auto">
								<div class="mb-bottom-nav">
									<div class="mb-sub-title">
										<div class="mb-sub-tl-inner" data-level="lvl_<?php echo removeSpaceAndSpecialCharacters($title); ?>-o">
											<i class="fa fa-angle-left"></i>
											<span class="bp-set vm"><?php echo $title; ?></span>
										</div>
									</div>
									<ul>
										<?php foreach ($content as $text => $url) { ?>
											<li><a href="<?php echo $url; ?>"><?php echo $text; ?></a></li>
										<?php } ?>
									</ul>
								</div>
							</div>
							<div class="mb-back-nav bp-ab">
								<i class="pw-arrow-right left bp-set vm"></i>
								<span class="bp-set level2-back vm">BACK TO MENU</span>
							</div>
						</div>
						<?php $ctr1++; ?>
					<?php } ?>
				<?php } ?>
			<?php } ?>
		<?php } ?>

		<div class="mb-sns-nav bp-ab">
			<a href="#"><i class="pw-linkedin-circle"></i></a>
			<a href="#"><i class="pw-facebook-circle"></i></a>
			<a href="#"><i class="pw-twitter-circle"></i></a>
			<a href="#"><i class="pw-youtube-circle"></i></a>
		</div>

		<!-- Contact Mobile Widget -->
		<?php #include_once ('include/contactus_widget_mobile.php'); ?>

		<!-- Search -->
		<div class="mobile-search bp-ab zx5">
			<h3>Search</h3>
			<div class="mb-s-input bp-rel">
				<input class="search_query" type="text" name="" value="" placeholder="ENTER SEARCH TERM">
			</div>
			<div class="mb-s-result pt4">
				<p><strong>Popular search items</strong></p>
				<p><a href="#">Cloud</a></p>
				<p><a href="#">Infinitum</a></p>
				<p><a href="#">Smart Parking and Charging</a></p>
				<p><a href="#">Infinitum Visum</a></p>
				<p><a href="#">IoT</a></p>
				<p><a href="#">Data Center</a></p>
			</div>
		</div>

	</div>
	<div class="mb-nav-right pull-right" style="transition-delay: 0.1s;">
		<div class="mb-close"><i class="pw-close"></i></div>
		<div class="mb-search"><i class="pw-search"></i></div>
		<div class="mb-contact"><i class="pw-contact"></i></div>
	</div>
</div>
