<?php include_once('nav-data.php'); ?>
<section id="main-container">
	<header class="animated opac" data-animation="fadeInDown" data-delay="700">
		<div class="header auto">
			<div class="header-top clearfix">
				<div class="logo pull-left">
					<a href="#"><img src="dist/images/page_template/logo.jpg" width="224" height="27" alt="" title=""></a>
				</div>
				<div class="header-nav pull-right clearfix hidden-xs hidden-sm">
					<ul>
					<?php foreach ($arrMainMenu as $main_menu => $sub_menu) { ?>
						<li class="dDown">
							<a><?php echo $main_menu; ?><i class="fa"></i></a>
							<div class="main-dropdown bp-ab">
								<div class="row">
									<div class="col-xs-3">
										<div class="m-d-left">
											<ul>
											<?php $subMenuCtr = 1; ?>
											<?php foreach ($sub_menu as $sub_menu_text => $sub_menu_content) { ?>
												<?php if (!empty($sub_menu_text)) { ?>
												<?php $xTitle = explode("*", $sub_menu_text); ?>
													<li <?php echo ($subMenuCtr == 1) ? 'class="active"' : ''; ?> data-tab="tab-<?php echo $subMenuCtr; ?>">
														<a><i class="pw"><img src="<?php echo $xTitle[1]; ?>" width="29" height="25" alt="" title=""></i><span><?php echo $xTitle[0]; ?></span></a>
													</li>
												<?php $subMenuCtr++; ?>
												<?php } ?>
											<?php } ?>
											</ul>
										</div>
									</div>
									<div class="col-xs-9">
										<div class="back-top bp-ab"><i class="pw-arrowUp blue"></i></div>
										<div class="ov-auto">
											<?php $subMenuCtr = 1; ?>
											<?php foreach ($sub_menu as $sub_menu_text => $sub_menu_content) { ?>
												<?php if (!empty($sub_menu_text)) { ?>
												<?php $activateThis = ($subMenuCtr == 1) ? 'active' : ''; ?>
													<div class="nav-tab tab-<?php echo $subMenuCtr; ?> <?php echo $activateThis; ?>">
														<div class="m-d-right bp-rel">

															<?php $i = 0; ?>
															<?php foreach ($sub_menu_content as $title => $content) { ?>

																<?php if ($i % 2 == 0) { ?>
																<div class="row explore-in">
																<?php } ?>

																	<?php if (count($content) > 0) { ?>
																	<div class="col-xs-6 mb2 mt2">
																	<?php } ?>

																		<h3><?php echo $title; ?></h3>
																		<?php foreach ($content as $text => $url) { ?>
																		<p><a href="<?php echo $url; ?>"><?php echo $text; ?></a></p>
																		<?php } ?>

																	<?php if (count($content) > 0) { ?>
																	</div>
																	<?php } ?>

																<?php if ($i % 2 == 0) { ?>
																</div>
																<?php } ?>

																<?php $i++; ?>

															<?php } ?>

														</div>
													</div>
													<?php $subMenuCtr++; ?>
												<?php } ?>
											<?php } ?>
										</div>
									</div>
								</div>
							</div>
						</li>
					<?php } ?>
					</ul>
				</div>
				<div class="burger-menu bp-ab">
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<div class="header-bottom clearfix hidden-xs hidden-sm">
				<div class="header-sns pull-left">
					<a href="#"><i class="pw-linkedin"></i></a>
					<a href="#"><i class="pw-facebook"></i></a>
					<a href="#"><i class="pw-twitter"></i></a>
					<a href="#"><i class="pw-youtube"></i></a>
					<a href="#"><i class="fa fa-weixin"></i></a>
				</div>
				<div class="header-b-nav pull-right">
					<ul>
						<li>
							<a href="#">ABOUT US<i class="fa fa-angle-down"></i></a>
							<ul>
								<li><a href="aboutus-overview.php">OVERVIEW</a></li>
								<li><a href="">QUALITY</a></li>
								<li><a href="aboutus-awards.php">AWARDS</a></li>

								<li><a href="aboutus-partners.php">PARTNERS</a></li>
							</ul>
						</li>
						<li>
							<a href="#">NEWS</a>
						</li>
						<li>
							<a href="insight.php">INSIGHTS</a>
						</li>
						<li>
							<a href="#">EVENTS</a>
						</li>
						<li>
							<a href="#">CAREER <i class="fa fa-angle-down"></i></a>
							<ul>
								<li><a href="aboutus-overview.php">WHY JOIN US</a></li>

								<li><a href="aboutus-awards.php">JOB VACANCY</a></li>

								<li><a href="aboutus-partners.php">GRADUATE TRAINEE</a></li>
							</ul>
						</li>
						<li>
							<a href="contact-us.php">CONTACT</i></a>
						</li>
						<li>
							<a href="<?php echo $switch_lang; ?>">简体中文</a>
						</li>
						<li>
							<div class="menu-search-holder bp-rel ov-hidden bp-set vb">
								<input class="menuSearchField search_query" type="text" name="search" value="">
							</div>
							<a class="search-btn"><i class="fa fa-search"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
