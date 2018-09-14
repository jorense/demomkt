<!-- <?php 
	// $custom_connect = TRUE;
	// include('phase1/include/global_var.php');
?> -->


<?php
	$custom_connect = TRUE;
	include('phase1/include/global_var.php');
	$metaTitle = 'This is for Og:Title';
	$metaSiteName = 'This is for Og:SiteName';
	$metadescription = 'This is for Og:Description';
	$metaType = 'This is for Og:Type';
	$metaUrl = 'This is for Og:Url';
	$metaImage = 'This is for Og:Image';
	$canonicalUrl = 'This is for Canonical Url';
	$metakeyWords = 'This is for meta keywords';
	include_once ('include/header.php');
	include_once ('include/nav_tracker.php');

?>


<style>
	
.ts-sns a.wechat { 

	display: inline-block;
    padding: 8px 8px 3px;
    margin-right: 5px;
    border-radius: 100%;
    background: #227110;
    color: white;
} 

@media only screen and (min-width: 992px) {

.h-what-we-do .w-w-d-right {

	padding: 60px 25px;
}

}
</style>
	<section id="main-wrapper">
		<div class="home-container">
			<div id="featured" class="layer home bp-rel">
				<div class="bp-rel">
					<div class="video-banner anim-content slides">
						<!-- <div id="video-player"></div> -->
						<!-- <iframe id="video-player" type="text/html" src="https://www.youtube.com/embed/QoO3Uk3nwoc?rel=0&amp;controls=0&amp;autohide=1&amp;cc_load_policy=0&amp;disablekb=1&amp;showinfo=0&amp;loop=1&amp;playlist=QoO3Uk3nwoc&amp;iv_load_policy=3&amp;enablejsapi=1&amp;autoplay=1&amp;modestbranding=1&amp;playsinline=1" allowfullscreen="" frameborder="0"></iframe> -->
					</div>
					<div class="heroslider-cover bp-ab">
						<div class="items item-1 active"></div>
						<div class="items item-2"></div>
						<div class="items item-3"></div>
					</div>
					<div class="home-sl-holder bp-ab center" data-stellar-ratio="0.5">
						<div class="home-slider bp-rel anim-content anim-ltr">
							<div id="myCarousel" class="carousel slide auto carousel-fade" data-ride="carousel" data-interval="3000">

								
								<div class="carousel-inner">
									<div class="item active">
										<div class="container cl-i-inner">
											<div class="row">
												<div class="col-sm-12 col-md-4 slider-left text-left anim-content">
													<h2>Travel and Transportation</h2>
													<p class="hidden-xs">Adopt #INNOVATIVE technologies to help travel and transportation operators transform digitally</p>
													<span class="button--bubble__container mt2">
														<a href="http://www.pccwsolutions.com/promotion/SolutionsForIndustries/industry/TravelandTransportation" target="_blank" class="button button--bubble pccw-btn">LEARN MORE</a>
														<span class="button--bubble__effect-container">
															<span class="circle top-left"></span>
															<span class="circle top-left"></span>
															<span class="circle top-left"></span>
															<span class="circle bottom-right"></span>
															<span class="circle bottom-right"></span>
															<span class="circle bottom-right"></span>
														</span>
													</span>
												</div>
												<div class="col-sm-12 col-md-8 slider-right anim-content">
													<div class="sl-r-inner">
														<img class="img-auto" src="dist/images/home/hero-01.jpg" width="660" height="370" alt="" title="">
													</div>
												</div>
											</div>
										</div>
									</div>

									
									<div class="item">
										<div class="container">
											<div class="row">
												<div class="col-sm-12 col-md-4 slider-left text-left anim-content pull-right">
													<h2>Elevating customer experience in the digital world</h2>
													<p class="hidden-xs">Infinitum™ Visum empowers connected digital lifestyle and transforms the way people live, work and play. </p>
													<span class="button--bubble__container mt2">
														<a href="en/service/infinitum-visum" class="button button--bubble pccw-btn">LEARN MORE</a>
														<span class="button--bubble__effect-container">
															<span class="circle top-left"></span>
															<span class="circle top-left"></span>
															<span class="circle top-left"></span>
															<span class="circle bottom-right"></span>
															<span class="circle bottom-right"></span>
															<span class="circle bottom-right"></span>
														</span>
													</span>
												</div>
												<div class="col-sm-12 col-md-8 slider-right anim-content pull-left">
													<div class="sl-r-inner">
														<img class="img-auto" src="dist/images/home/hero-03.jpg" width="660" height="370" alt="" title="">
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="item">
										<div class="container cl-i-inner">
											<div class="row">
												<div class="col-sm-12 col-md-4 slider-left text-left anim-content">
													<h2>Orchestrating digital transformation</h2>
													<p class="hidden-xs">We harmonize technology with innovation and agility to deliver value and transform your business digitally.</p>
													<span class="button--bubble__container mt2">
														<a href="http://www.pccwsolutions.com/promotion/international_presence/" target="_blank" class="button button--bubble pccw-btn">LEARN MORE</a>
														<span class="button--bubble__effect-container">
															<span class="circle top-left"></span>
															<span class="circle top-left"></span>
															<span class="circle top-left"></span>
															<span class="circle bottom-right"></span>
															<span class="circle bottom-right"></span>
															<span class="circle bottom-right"></span>
														</span>
													</span>
												</div>
												<div class="col-sm-12 col-md-8 slider-right anim-content">
													<div class="sl-r-inner">
														<img class="img-auto" src="dist/images/home/hero-02.jpg" width="660" height="370" alt="" title="">
													</div>
												</div>
											</div>
										</div>
									</div>

									
								</div>

							  <ol class="carousel-indicators">
							    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							    <li data-target="#myCarousel" data-slide-to="1"></li>
							    <li data-target="#myCarousel" data-slide-to="2"></li>
							  </ol>

							  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
							    <i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right carousel-control" href="#myCarousel" data-slide="next">
							    <i class="fa fa-angle-right"></i>
							  </a>
							</div>
						</div>
					</div>
				</div>
				<div class="solution-help text-center bp-ab">
					<div class="bp-rel">
						<div class="container-fluid">
							<div class="container">
								<div class="row">
									<div class="col-xs-12 col-lg-8 col-xs-offset-0 col-lg-offset-2 anim-content	animUp">
										<h1>PCCW Solutions helps you transform digitally</h1>
										<p>PCCW Solutions, IT flagship of PCCW Group, is a leading IT services company in Hong Kong and mainland China.</p>
										<a href="en/about-us/company-overview">LEARN MORE</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="industries" class="layer h-explore pt10 pb7 bp-rel">
				<div id="banking" class="xp-cons-bg" style="background: url('dist/images/home/no_background.png') repeat center;"></div>
				<div class="container-fluid">
					<div class="container industry-inner">
						<div class="row anim-content anim-ltr clearfix">
							<div class="col-sm-12 col-md-4 xp-right xp-r-holder center-block ease anim-content anim-ltr pull-right">
								<h2>Explore your industry</h2>
								<p>PCCW Solutions helps service providers grow their business, boost operational efficiencies and reduce cost by tailoring solutions to customer needs, riding on its industry expertise plus an impressive track record of innovation.</p>
							</div>
							<div class="col-sm-12 col-md-8 explorer-list">
								<div class="row anim-content anim-ltr ex-l-inner">
									<div class="col-xs-4 xp-list" data-id="0">
										<a href="en/industry/banking-financial-services-and-insurance">
											<div class="xp-cons bp-rel">
												<img class="img-auto" src="dist/images/home/xp_thumb_1.jpg" width="202" hegiht="204" alt="">
												<div class="shadow"></div>
												<div class="xp-caption bp-ab">
													<h3>Banking, Financial Services &amp; Insurance</h3>
												</div>
												<div class="xp-caption bp-ab hoverme hidden-xs hidden-sm">
													<h3 class="learnmore">LEARN MORE <i class="fa fa-arrow-right"></i></h3>
												</div>
											</div>
										</a>
									</div>
									<div class="col-xs-4 xp-list" data-id="1">
										<a href="en/industry/communication-media-and-utilities">
											<div class="xp-cons bp-rel">
												<img class="img-auto" src="dist/images/home/xp_thumb_2.jpg" width="202" hegiht="204" alt="">
												<div class="shadow"></div>
												<div class="xp-caption bp-ab">
													<h3>Communications, Media, High-Tech &amp; Utilities</h3>
												</div>
												<div class="xp-caption bp-ab hoverme hidden-xs hidden-sm">
													<h3 class="learnmore">LEARN MORE <i class="fa fa-arrow-right"></i></h3>
												</div>
											</div>
										</a>
									</div>
									<div class="col-xs-4 xp-list" data-id="2">
										<a href="en/industry/hospitality">
											<div class="xp-cons bp-rel">
												<img class="img-auto" src="dist/images/home/xp_thumb_3.jpg" width="202" hegiht="204" alt="">
												<div class="shadow"></div>
												<div class="xp-caption bp-ab">
													<h3>Hospitality</h3>
												</div>
												<div class="xp-caption bp-ab hoverme hidden-xs hidden-sm">
													<h3 class="learnmore">LEARN MORE <i class="fa fa-arrow-right"></i></h3>
												</div>
											</div>
										</a>
									</div>
									<div class="col-xs-4 xp-list" data-id="3">
										<a href="en/industry/public-sector">
											<div class="xp-cons bp-rel">
												<img class="img-auto" src="dist/images/home/xp_thumb_4.jpg" width="202" hegiht="204" alt="">
												<div class="shadow"></div>
												<div class="xp-caption bp-ab">
													<h3>Public Sector</h3>
												</div>
												<div class="xp-caption bp-ab hoverme hidden-xs hidden-sm">
													<h3 class="learnmore">LEARN MORE <i class="fa fa-arrow-right"></i></h3>
												</div>
											</div>
										</a>
									</div>
									<div class="col-xs-4 xp-list" data-id="4">
										<a href="en/industry/retail-manufacturing-and-logistics">
											<div class="xp-cons bp-rel">
												<img class="img-auto" src="dist/images/home/xp_thumb_5.jpg" width="202" hegiht="204" alt="">
												<div class="shadow"></div>
												<div class="xp-caption bp-ab">
													<h3>Retail, Manufacturing &amp; Logistics</h3>
												</div>
												<div class="xp-caption bp-ab hoverme hidden-xs hidden-sm">
													<h3 class="learnmore">LEARN MORE <i class="fa fa-arrow-right"></i></h3>
												</div>
											</div>
										</a>
									</div>
									<div class="col-xs-4 xp-list" data-id="5">
										<a href="en/industry/travel-and-transportation">
											<div class="xp-cons bp-rel">
												<img class="img-auto" src="dist/images/home/xp_thumb_6.jpg" width="202" hegiht="204" alt="">
												<div class="shadow"></div>
												<div class="xp-caption bp-ab">
													<h3>Travel &amp; Transportation</h3>
												</div>
												<div class="xp-caption bp-ab hoverme hidden-xs hidden-sm">
													<h3 class="learnmore">LEARN MORE <i class="fa fa-arrow-right"></i></h3>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="industries-hover-content bp-ab hidden-xs hidden-sm">
					<div class="xp-right i-h-c-content center-block">
						<div class="xp-list-data xp-list-data-0" style="display:none;">
							<h2>Banking, Financial Services &amp; Insurance</h2>
							<p>Financial institutions need to review and upgrade their IT infrastructures and systems to compete more effectively by boosting speed to market, which demands an efficient rollout of banking services. Key to meet this challenge is a service provider strong in technical expertise and local financial practices, making PCCW Solutions the ideal choice.</p>
						</div>
						<div class="xp-list-data xp-list-data-1" style="display:none;">
							<h2>Communications, Media, High-tech &amp; Utilities</h2>
							<p>PCCW Solutions helps telecommunications, media and technology service providers grow their business, boost operational efficiencies and reduce costs by tailoring solutions to customer needs, riding on its industry expertise plus an impressive track record of innovation.</p>
						</div>
						<div class="xp-list-data xp-list-data-2" style="display:none;">
							<h2>Hospitality</h2>
							<p>To enhance customer experience, hospitality service providers rely on advanced technology and system to deliver premium services to their customers. PCCW Solutions enables organizations to achieve reliable and quality service by providing innovative and tailor-made solutions.</p>
						</div>
						<div class="xp-list-data xp-list-data-3" style="display:none;">
							<h2>Public Sector</h2>
							<p>With decades of deep domain expertise and proven track record to implement the mission-critical systems for the government customers, PCCW Solutions helps organizations further enhance operational efficiency by upgrading legacy systems and implementing cutting-edge technologies.</p>
						</div>
						<div class="xp-list-data xp-list-data-4" style="display:none;">
							<h2>Retail, Manufacturing &amp; Logistics</h2>
							<p>To stay ahead of competition, manufacturers, logistic service providers and retailers need to identify ways to accelerate the production cycles, ensure quality delivery and offer exceptional customer experience. PCCW Solutions helps service providers and retailers achieve workflow automation, and enhance communications with customers with advanced technology.</p>
						</div>
						<div class="xp-list-data xp-list-data-5" style="display:none;">
							<h2>Travel &amp; Transportation</h2>
							<p>PCCW Solutions delivers highly-sophisticated systems for transportation operators and airports based on extensive experience in transportation industry,  enabling service providers to furnish passengers with accurate and comprehensive service information in real time and manage their assets, information, operation and surveillance more effectively.</p>
						</div>
					</div>
				</div>
			</div>
			<div id="solutions" class="layer h-what-we-do pb10">
				<div class="container-fluid">
					<div class="container anim-content anim-rtl">
						<div class="row">
							<div class="col-sm-12 col-md-5 w-w-d-left">
								<div class="anim-content anim-rtl search-container bp-rel">
									<h2>What we do:<br>our end-to-end solutions</h2>
									<p>PCCW Solutions, the IT flagship of PCCW Group, is a leading IT services company in Hong Kong and mainland China. We offer a wide range of services including digital solutions, IT and business process outsourcing, cloud computing, system development and solutions integration, data centers, hosting and managed services, e-commerce and IoT solutions.</p>
									<!-- <div class="searchfield-holder bp-rel">
										<div class="searchfield bp-rel mt4">
											<input class="search" type="text" name="" value="" placeholder="SEARCH OR SOLUTIONS">
										</div>
									</div> -->
								</div>
								<div class="w-w-d-r-content bp-ab hidden-xs hidden-sm" style="background: url('dist/images/home/what_we_do_no_background.png');">
									<div class="w-w-d-r-c-inner bp-ab w-w-d-r-c-inner-0" style="display:none">
										<h2>Outsourcing</h2>
										<p>PCCW Solutions provides a full spectrum of services to the needs of different industries: data-center hosting and infrastructure design-and-build services; systems integration and consulting services; and business process outsourcing services.</p>
									</div>
									<div class="w-w-d-r-c-inner bp-ab w-w-d-r-c-inner-1" style="display:none">
										<h2>Infinitum™ Visum</h2>
										<p>Infinitum™ Visum, an internet connected mirror with high-definition touch screen with a preloaded suite of productivity, convenience and entertainment applications.</p>
									</div>
									<div class="w-w-d-r-c-inner bp-ab w-w-d-r-c-inner-2" style="display:none">
										<h2>Smart Parking and Charging</h2>
										<p>The solution is designed from the ground-up to be modular yet integrated, and interoperable. It consists of four major components including mobile apps, smart parking, smart charging and customer management.</p>
									</div>
									<div class="w-w-d-r-c-inner bp-ab w-w-d-r-c-inner-3" style="display:none">
										<h2>Big Data Analytics and Discovery Service</h2>
										<p>From user requirement study to analysis and evaluation, we recommend the most appropriate big data technologies and provide promising solution in collaboration with cutting-edge technology partners to help you derive business value.</p>
									</div>
									<div class="w-w-d-r-c-inner bp-ab w-w-d-r-c-inner-4" style="display:none">
										<h2>Virtual Desktop Infrastructure</h2>
										<p>Our VDI service provides a tailor-made model based on your specific business requirements. Through a single platform system, administrators can easily manage the virtual desktop of the users and associated applications anywhere anytime. </p>
									</div>
									<div class="w-w-d-r-c-inner bp-ab w-w-d-r-c-inner-5" style="display:none">
										<h2>Security Assessment</h2>
										<p>We help businesses to evaluate their current information security landscape, identify vulnerabilities and determine gaps, as well as provide recommendations for mitigating identified risks and protecting critical data based on industry best practices.</p>
									</div>
									<!-- <div class="w-w-d-r-c-inner bp-ab w-w-d-r-c-inner-6" style="display:none">
										<h2>Technical Services</h2>
										<p>Help reduce risk by providing the tool for performance management of the cloud infrastructure, backup and restoring associated workload storage.</p>
									</div>
									<div class="w-w-d-r-c-inner bp-ab w-w-d-r-c-inner-7" style="display:none">
										<h2>Infrastructure</h2>
										<p>Help reduce risk by providing the tool for performance management of the cloud infrastructure, backup and restoring associated workload storage.</p>
									</div>
									<div class="w-w-d-r-c-inner bp-ab w-w-d-r-c-inner-8" style="display:none">
										<h2>Business Process Outsourcing</h2>
										<p>Help reduce risk by providing the tool for performance management of the cloud infrastructure, backup and restoring associated workload storage.</p>
									</div> -->
								</div>
							</div>
							<div class="col-sm-12 col-md-7 w-w-d-r-holder bp-rel">
								<div class="w-w-d-r-inner">
									<div class="w-w-d-right">
										<div class="row anim-content anim-ltr">
											<div class="col-xs-4 w-w-d-list text-center" data-id="0">
												<a href="en/service/outsourcing">
													<img class="img-fluid" src="dist/images/home/home-icon-01.svg" width="100" height="100" alt="" title="">
													<h3>Outsourcing</h3>
												</a>
											</div>
											<div class="col-xs-4 w-w-d-list text-center" data-id="1">
												<a href="en/service/infinitum-visum">
													<img class="img-fluid" src="dist/images/home/home-icon-02.svg" width="100" height="100" alt="" title="">
													<h3>Infinitum™ Visum</h3>
												</a>
											</div>
											<div class="col-xs-4 w-w-d-list text-center" data-id="2">
												<a href="en/service/smart-parking-charging">
													<img class="img-fluid" src="dist/images/home/home-icon-03.svg" width="100" height="100" alt="" title="">
													<h3>Smart Parking and Charging</h3>
												</a>
											</div>
											<div class="col-xs-4 w-w-d-list text-center" data-id="3">
												<a href="en/service/big-data-analytics-discovery-services">
													<img class="img-fluid" src="dist/images/home/home-icon-04.svg" width="100" height="100" alt="" title="">
													<h3>Big Data Analytics and Discovery Service</h3>
												</a>
											</div>
											<div class="col-xs-4 w-w-d-list text-center" data-id="4">
												<a href="en/service/virtual-desktop-infrastructure">
													<img class="img-fluid" src="dist/images/home/home-icon-05.svg" width="100" height="100" alt="" title="">
													<h3>Virtual Desktop Infrastructure</h3>
												</a>
											</div>
											<div class="col-xs-4 w-w-d-list text-center" data-id="5">
												<a href="en/service/security-as-a-service">
													<img class="img-fluid" src="dist/images/home/home-icon-06.svg" width="100" height="100" alt="" title="">
													<h3>Security Assessment</h3>
												</a>
											</div>
											<!-- <div class="col-xs-4 w-w-d-list text-center" data-id="6">
												<a href="en/stories/">
													<img class="img-fluid" src="dist/images/icons/icon7.svg" width="100" height="100" alt="" title="">
													<h3>Technical Services</h3>
												</a>
											</div>
											<div class="col-xs-4 w-w-d-list text-center" data-id="7">
												<a href="#">
													<img class="img-fluid" src="dist/images/icons/icon8.svg" width="100" height="100" alt="" title="">
													<h3>Infrastructure</h3>
												</a>
											</div>
											<div class="col-xs-4 w-w-d-list text-center" data-id="8">
												<a href="#">
													<img class="img-fluid" src="dist/images/home/icon9.jpg" width="100" height="100" alt="" title="">
													<h3>Business Process Outsourcing</h3>
												</a>
											</div> -->
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="leadership-quote" class="layer h-testimonial pt5 pb5">
				<div class="container-fluid">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-9 col-md-offset-2">
								<div class="row">
									<div class="col-sm-12 col-md-8 anim-content animUp">
										<div class="pull-left test-img">
											<img class="img-responsive img-circle" src="dist/images/home/profile-placeholder.jpg" width="99" height="99" alt="" title="">
										</div>
										<div class="test-name hidden-md hidden-lg">
											<h3>Jason Ho</h3>
											<p class="no-margin">CTO</p>
											<p class="no-margin"><strong>William Marsh &amp; Company Limited</strong></p>
										</div>
										<div class="testimonial-content bp-rel anim-content animUp">
											<p>We are pleased to partner with PCCW Solutions to implement our first RFID-enabled warehouse management system. The automated system streamlined our workflow to distribute products in high quality and customer satisfaction.</p>
											<div class="hidden-xs hidden-sm">
												<h3>Jason Ho</h3>
												<p class="no-margin">Chief Technical Officer</p>
												<p class="no-margin"><strong>William Marsh &amp; Company Limited</strong></p>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-4 t-s-right anim-content animUp">
										<div class="t-s-r-inner bp-rel">
											<h4>Follow Us</h4>
											<p>Follow us on Social Media for the latest industry news and insight.</p>
											<div class="ts-sns mt1">
												<a class="linkedin" href="https://www.linkedin.com/company/3644035/" target="_blank"><i class="pw-linkedin-circle white"></i></a>
												<a class="fb" href="https://www.facebook.com/pccwsolutions/" target="_blank"><i class="pw-facebook-circle white"></i></a>
												<a class="twitter" href="https://twitter.com/pccwsolutions" target="_blank"><i class="pw-twitter-circle white"></i></a>
												<a class="youtube" style="background: #BC3432;" href="https://www.youtube.com/channel/UCQwUpKKVbTpdkh4pohrWTEw" target="_blank"><i class="pw-youtube-circle white"></i></a>
												<a class="wechat" href="http://pccwsolutions.com/wechat/"><i class="fa fa-weixin"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="case-study" class="layer h-how-we-innovate bp-rel">
				<!-- <div id="particles-js" class="particle-holder hidden-xs" data-stellar-ratio="0.5"></div> -->
				<!-- <div id="particles-js"></div> -->
				<div class="container-fluid pr-container">
					<div class="row">
						<div class="col-sm-12 col-md-4 no-padding">
							<div class="h-w-inner anim-content anim-ltr">
								<h2>How we innovate</h2>
								<p>PCCW Solutions takes an innovative, value-driven approach to the solutions we create and services we offer, helping businesses achieve breakthrough results. Here are some of their success stories.</p>
								<!-- <a class="pccw-btn green mt2" href="#">MORE CASE STUDY</a> -->
								<span class="button--bubble__container mt2 green">
									<a href="en/stories/" class="button button--bubble pccw-btn green">MORE CASE STUDY</a>
									<span class="button--bubble__effect-container">
										<span class="circle top-left"></span>
										<span class="circle top-left"></span>
										<span class="circle top-left"></span>
										<!-- <span class="button effect-button"></span> -->
										<span class="circle bottom-right"></span>
										<span class="circle bottom-right"></span>
										<span class="circle bottom-right"></span>
									</span>
								</span>
							</div>
						</div>
						<div class="col-sm-12 col-md-8 no-padding anim-content anim-ltr">
							<div class="col-sm-12 col-md-6 no-padding">
								<a class="h-w-r-i-tag" href="en/story/vitasoy-china-digitalizes-production-and-distribution-processes-with-sap-s4haha">
									<div class="h-w-r-inner bp-rel">
										<img class="img-auto" src="dist/images/home/h_w_innovate_1.jpg" width="480" height="300" alt="" title="">
										<div class="h-w-caption bp-ab">
											<h4>RETAIL, MANUFACTURING AND LOGISTICS</h4>
											<h3>Vitasoy China digitalizes production and distribution processes with SAP S/4HAHA</h3>
										</div>
									</div>
								</a>
							</div>
							<div class="col-sm-12 col-md-6 no-padding">
								<a class="h-w-r-i-tag" href="en/story/bank-of-shanghai-hk-established-new-presence-with-scalable-ict-infrastructure">
									<div class="h-w-r-inner bp-rel">
										<img class="img-auto" src="dist/images/home/h_w_innovate_2.jpg" width="480" height="300" alt="" title="">
										<div class="h-w-caption bp-ab">
											<h4>BANKING, FINANCIAL SERVICES &amp; INSURANCE</h4>
											<h3>Bank of Shanghai HK Established New Presence with Scalable ICT Infrastructure</h3>
										</div>
									</div>
								</a>
							</div>
							<div class="col-sm-12 col-md-6 no-padding">
								<a class="h-w-r-i-tag" href="en/story/rthk-broadcast-support-service">
									<div class="h-w-r-inner bp-rel">
										<img class="img-auto" src="dist/images/home/h_w_innovate_3.jpg" width="480" height="300" alt="" title="">
										<div class="h-w-caption bp-ab">
											<h4>COMMUNICATIONS, MEDIA, HIGH-TECH &amp; UTILITIES</h4>
											<h3>RTHK – Engineering and Technical Operations</h3>
										</div>
									</div>
								</a>
							</div>
							<div class="col-sm-12 col-md-6 no-padding">
								<a class="h-w-r-i-tag" href="en/story/e-government-infrastructure-services">
									<div class="h-w-r-inner bp-rel">
										<img class="img-auto" src="dist/images/home/h_w_innovate_4.jpg" width="480" height="300" alt="" title="">
										<div class="h-w-caption bp-ab">
											<h4>PUBLIC SECTOR</h4>
											<h3>OGCIO: e-Government Infrastructure Services</h3>
										</div>
									</div>
								</a>
							</div>
							<!-- <div class="col-xs-12 no-padding">
								<a class="h-w-r-i-tag" href="en/stories/">
									<div class="h-w-r-inner bp-rel">
										<img class="img-auto" src="dist/images/home/h_w_innovate_3.jpg" width="960" height="300" alt="" title="">
										<div class="h-w-caption bp-ab">
											<h4>HOSPITALITY</h4>
											<h3>Dunhuang Mogao Caves Visitor Center: Total Solutions For The Digital Theater Systems</h3>
										</div>
									</div>
								</a>
							</div> -->
						</div>
					</div>
				</div>
			</div>
			<div id="career" class="layer h-career bp-rel pt7 pb7 anim-content slides">
				<div class="container-fluid auto">
					<div class="row anim-content anim-ltr">
						<div class="col-sm-12 col-md-8 h-carrer-holder">
							<div class="career-img-holder">
								<img class="img-responsive" src="dist/images/home/career.jpg" with="908" height="460" alt="" title="">
							</div>
						</div>
						<div class="col-sm-12 col-md-4 pt2 anim-content anim-rtl">
							<h2>Starting your career in <br>PCCW Solutions</h2>
							<p>We believe that personal advancement of employees helps a company grow. With that in mind, we are fully aware of the need for our staff to  constantly upgrade skills and knowledge in such a fast-changing business environment.</p>
							<!-- <div class="searchfield-holder bp-rel">
								<div class="searchfield bp-rel mt3">
									<input id="careers" class="search" type="text" name="" value="" placeholder="SOLUTIONS DEVELOPER">
								</div>
							</div> -->
							<div class="career-btn mt4">
								<!-- <a class="pccw-btn" href="#">VIEW CAREERS</a> -->
								<span class="button--bubble__container">
									<a href="en/career/job-vacancies" class="button button--bubble pccw-btn">VIEW CAREERS</a>
									<span class="button--bubble__effect-container">
										<span class="circle top-left"></span>
										<span class="circle top-left"></span>
										<span class="circle top-left"></span>
										<span class="circle bottom-right"></span>
										<span class="circle bottom-right"></span>
										<span class="circle bottom-right"></span>
									</span>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="insight" class="layer h-whats-new bp-rel pt5 pb6 text-center">
				<div class="container-fluid">
					<div class="container anim-content animUp zx5 bp-rel">
						<div class="h-what-title">
							<h2>What's New on PCCW Solutions</h2>
							<p>Stay connected with us and stay up-to-date on the latest industry news and insights.</p>
						</div>
						<div class="h-whats-new-holder">
							<div class="row anim-content animUp h-whats-new-inner">
								<div class="col-xs-6 col-sm-6 col-md-4 w-n-l-holder pt3">
									<div class="w-n-list">
										<a href="http://www.pccwsolutions.com/promotion/D-Infinitum/" target="_blank">
											<div class="w-n-img-holder">
												<img class="img-auto" src="dist/images/home/whats_new_thumb1.jpg" width="314" height="230" alt="" title="">
												<p>DATA CENTER</p>
											</div>
										</a>
										<div class="w-n-content bp-rel clearfix">
											<a href="http://www.pccwsolutions.com/promotion/D-Infinitum/" target="_blank"><h3>Scale your business with D-Infinitum</h3></a>
											<a class="learn-more pull-left" href="http://www.pccwsolutions.com/promotion/D-Infinitum/" target="_blank">LEARN MORE</a>
											<div class="w-n-share pull-right bp-rel">
												<i class="fa fa-share-alt share-btn"></i>
												<div class="w-n-share-holder bp-ab">
													<div class="w-n-s-h-inner">
														<a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://www.pccwsolutions.com/promotion/D-Infinitum/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-linkedin"></i></a>
														<a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=http://www.pccwsolutions.com/promotion/D-Infinitum/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-facebook"></i></a>
														<a class="twitter" href="https://twitter.com/home?status=http://www.pccwsolutions.com/promotion/D-Infinitum/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-twitter"></i></a>
														<a class="googleplus" href="https://plus.google.com/share?url=http://www.pccwsolutions.com/promotion/D-Infinitum/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-google-plus"></i></a>
													</div>
												</div>
											</div>
											<!-- <a class="w-n-sns facebook bp-ab" href="#"><i class="pw-facebook-circle white"></i></a> -->
										</div>
										<span class="hover-top"></span>
										<span class="hover-bottom"></span>
									</div>
								</div>
								
								<div class="col-xs-6 col-sm-6 col-md-4 w-n-l-holder pt3">
									<div class="w-n-list">
										<a href="en/service/infinitum-cloud-solutions-suite#data-analytics-solutions">
											<div class="w-n-img-holder">
												<img class="img-auto" src="dist/images/home/whats_new_thumb3.jpg" width="314" height="230" alt="" title="">
												<p>INFINITUM</p>
											</div>
										</a>
										<div class="w-n-content bp-rel clearfix">
											<a href="en/service/infinitum-cloud-solutions-suite#data-analytics-solutions"><h3>Transforming unstructured data into actionable insights</h3></a>
											<a class="learn-more pull-left" href="en/service/infinitum-cloud-solutions-suite#data-analytics-solutions">LEARN MORE</a>
											<div class="w-n-share pull-right bp-rel">
												<i class="fa fa-share-alt share-btn"></i>
												<div class="w-n-share-holder bp-ab">
													<div class="w-n-s-h-inner">
														<a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $real_root_directory . $lang; ?>/service/infinitum-cloud-solutions-suite#data-analytics-solutions" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-linkedin"></i></a>
														<a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $real_root_directory . $lang; ?>/service/infinitum-cloud-solutions-suite#data-analytics-solutions" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-facebook"></i></a>
														<a class="twitter" href="https://twitter.com/home?status=<?php echo $real_root_directory . $lang; ?>/service/infinitum-cloud-solutions-suite#data-analytics-solutions" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-twitter"></i></a>
														<a class="googleplus" href="https://plus.google.com/share?url=<?php echo $real_root_directory . $lang; ?>/service/infinitum-cloud-solutions-suite#data-analytics-solutions" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-google-plus"></i></a>
													</div>
												</div>
											</div>
											<!-- <a class="w-n-sns twitter bp-ab" href="#"><i class="pw-twitter-circle white"></i></a> -->
										</div>
										<span class="hover-top"></span>
										<span class="hover-bottom"></span>
									</div>
								</div>


								<div class="col-xs-6 col-sm-6 col-md-4 w-n-l-holder pt3">
									<div class="w-n-list">
										<a href="https://www.habbitzz.com/" target="_blank">
											<div class="w-n-img-holder">
												<img class="img-auto" src="dist/images/home/whats_new_thumb2.jpg" width="314" height="230" alt="" title="">
												<p>ECOMMERCE</p>
											</div>
										</a>
										<div class="w-n-content bp-rel clearfix">
											<a href="https://www.habbitzz.com/" target="_blank"><h3>Experience a new way of shopping</h3></a>
											<a class="learn-more pull-left" href="https://www.habbitzz.com/" target="_blank">LEARN MORE</a>
											<div class="w-n-share pull-right bp-rel">
												<i class="fa fa-share-alt share-btn"></i>
												<div class="w-n-share-holder bp-ab">
													<div class="w-n-s-h-inner">
														<a class="linkedin" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://www.habbitzz.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-linkedin"></i></a>
														<a class="facebook" href="https://www.facebook.com/sharer/sharer.php?u=https://www.habbitzz.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-facebook"></i></a>
														<a class="twitter" href="https://twitter.com/home?status=https://www.habbitzz.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-twitter"></i></a>
														<a class="googleplus" href="https://plus.google.com/share?url=https://www.habbitzz.com/" onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=600');return false;"><i class="fa fa-google-plus"></i></a>
													</div>
												</div>
											</div>
											<!-- <a class="w-n-sns linkedin bp-ab" href="#"><i class="pw-linkedin-circle white"></i></a> -->
										</div>
										<span class="hover-top"></span>
										<span class="hover-bottom"></span>
									</div>
								</div>
								
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="layer h-f-o-sucess bp-rel pt5 pb5">
				<div class="container-fluid">
					<div class="container">
						<div class="row anim-content anim-ltr">
							<div class="col-sm-12 col-md-4 anim-content anim-ltr mb2">
								<h3>Who are we</h3>
								<p>PCCW Solutions provides leading-edge solutions and IT services, helping clients harness the power of innovation to seize opportunities for better business outcomes.</p>
								
							</div>
							<div class="col-sm-12 col-md-8 anim-content anim-ltr">
								<div class="row mb2 h-f-o-sucess-inner anim-content anim-ltr">
									<div class="col-sm-12 col-md-6 anim-content anim-ltr">
										<div class="f-o-s-inner clearfix">
											<div class="f-o-c-icon pull-left">
												<label>No.<i>1</i></label>
												<img class="gartner" src="dist/images/icons/Picture2.png" width="102" height="29" alt="" title="">
											</div>
											<div class="f-o-c-content">
												<p>IT services company in Hong Kong ranked by Gartner</p>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-6 anim-content anim-ltr">
										<div class="f-o-s-inner clearfix">
											<div class="f-o-c-icon pull-left">
												<label>No.<i>1</i></label>
												<img src="dist/images/icons/Picture1.png" width="102" height="29" alt="" title="">
											</div>
											<div class="f-o-c-content f-o-c-list">
												<p class="no-margin">Data center hosting services</p>
												<p class="no-margin">System integration</p>
												<p class="no-margin">Application development in Hong Kong ranked by IDC</p>
											</div>
										</div>
									</div>
								</div>
								<div class="row anim-content anim-ltr">
									<div class="col-sm-12 col-md-6 anim-content anim-ltr">
										<div class="f-o-s-inner clearfix">
											<div class="f-o-c-icon pull-left">
												<img src="dist/images/icons/Picture8.png" width="86" height="86" alt="" title="">
											</div>
											<div class="f-o-c-content">
												<p>Multi-country offshore development centers in China and the Philippines</p>
											</div>
										</div>
									</div>
									<div class="col-sm-12 col-md-6 anim-content anim-ltr">
										<div class="f-o-s-inner clearfix">
											<div class="f-o-c-icon pull-left">
												<img src="dist/images/icons/Picture7.png" width="94" height="auto" alt="" title="">
											</div>
											<div class="f-o-c-content">
												<p>Rich and qualified IT resources, multiple industry domain experts, call centers and helpdesk support</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="layer h-q-t-deliver bp-rel pt5 pb5 text-center">
				<div class="container-fluid">
					<div class="container anim-content animUp">
						<h2>Quality commitment</h2>
						<div class="row">
							<div class="col-sm-12 col-md-10 col-sm-offset-0 col-md-offset-1">
								<p>At PCCW Solutions, we strive for quality excellence and constantly seek for achieving industry best practices.</p>
							</div>
						</div>
						<div class="row pt2 anim-content animUp">
							<div class="col-7 text-center">
								<img class="img-responsive" src="dist/images/home/thumb_1.jpg" width="104" height="101" alt="" title="">
							</div>
							<div class="col-7">
								<img class="img-responsive" src="dist/images/home/thumb_2.jpg" width="104" height="101" alt="" title="">
							</div>
							<div class="col-7">
								<img class="img-responsive" src="dist/images/home/thumb_3.jpg" width="104" height="101" alt="" title="">
							</div>
							<div class="col-7">
								<img class="img-responsive" src="dist/images/home/thumb_4.jpg" width="104" height="101" alt="" title="">
							</div>
							<div class="col-7">
								<img class="img-responsive" src="dist/images/home/thumb_5.jpg" width="104" height="101" alt="" title="">
							</div>
							<div class="col-7">
								<img class="img-responsive" src="dist/images/home/thumb_6.jpg" width="104" height="101" alt="" title="">
							</div>
							<div class="col-7">
								<img class="img-responsive" src="dist/images/home/thumb_7.jpg" width="104" height="101" alt="" title="">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>

<?php include_once ('include/contactus_widget_desktop.php'); ?>
<?php include_once ('include/footer.php'); ?>
<script src="dist/js/particles.js"></script>
<script src="dist/js/app.js"></script>
