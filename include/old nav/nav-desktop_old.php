<section id="main-container">
	<header class="animated opac" data-animation="fadeInDown" data-delay="700">
		<div class="header auto">
			<div class="header-top clearfix">
				<div class="logo pull-left">
					<a href="#"><img src="dist/images/page_template/logo.jpg" width="224" height="27" alt="" title=""></a>
				</div>
				<div class="header-nav pull-right clearfix hidden-xs hidden-sm">
					<ul>
						<li class="dDown">
							<a>INDUSTRIES<i class="fa"></i></a>
							<div class="main-dropdown bp-ab">
								<div class="row">
									<div class="col-xs-3">
										<div class="m-d-left">
											<ul>
												<li class="active" data-tab="tab-1">
													<a><i class="pw"><img src="dist/images/icons/banking_and_finance.svg" width="29" height="25" alt="" title=""></i><span>Banking, Financial Services &amp; Insurance</span></a>
												</li>
												<li data-tab="tab-2">
													<a><i class="pw"><img src="dist/images/icons/communication.svg" width="29" height="25" alt="" title=""></i><span>Communication, Media, Utilities &amp; High-Tech</span></a>
												</li>
												<li data-tab="tab-3">
													<a><i class="pw"><img src="dist/images/icons/hospitality.svg" width="29" height="25" alt="" title=""></i><span>Hospitality</span></a>
												</li>
												<li data-tab="tab-4">
													<a><i class="pw"><img src="dist/images/icons/public_sector.svg" width="29" height="25" alt="" title=""></i><span>Public Sector</span></a>
												</li>
												<li data-tab="tab-5">
													<a><i class="pw"><img src="dist/images/icons/retail.svg" width="29" height="25" alt="" title=""></i><span>Retail, Manufacturing &amp; Logistics</span></a>
												</li>
												<li data-tab="tab-6">
													<a><i class="pw"><img src="dist/images/icons/travel.svg" width="29" height="25" alt="" title=""></i><span>Travel &amp; Transportation</span></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-xs-9">
										<div class="back-top bp-ab"><i class="pw-arrowUp blue"></i></div>
										<div class="ov-auto">

											<div class="nav-tab tab-1 active">
												<div class="m-d-right bp-rel">

													<div class="row explore-in">

														<div class="col-xs-6 mb2">
															<h3>Banking, Financial Services &amp; Insurance</h3>
															<?php
															$bankingFinancialServicesAndInsurance = (isset($myPage) && $myPage == 'banking-financial-services-and-insurance') ? "#" : "en/industry/banking-financial-services-and-insurance";
															?>
															<p><a class="clickScroll" href="<?php echo $bankingFinancialServicesAndInsurance; ?>" data-id="overview">Industry Overview</a></p>
															<p><a class="clickScroll" href="<?php echo $bankingFinancialServicesAndInsurance; ?>" data-id="story">Related Stories</a></p>
															<p><a class="clickScroll" href="<?php echo $bankingFinancialServicesAndInsurance; ?>" data-id="">Solutions For Banking, Financial Services &amp; Insurance</a></p>
														</div>

													</div>

												</div>
											</div>
											<div class="nav-tab tab-2">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">

														<div class="col-xs-6 mb2">
															<h3>Communication, Media, Utilities &amp; High-Tech</h3>
															<?php
															$communicationMediaUtilities= (isset($myPage) && $myPage == 'communication-media-and-utilities') ? "#" : "industry-communication-media-and-utilities.php";
															?>
															<p><a class="clickScroll" href="<?php echo $communicationMediaUtilities; ?>" data-id="">Industry Overview</a></p>
															<p><a class="clickScroll" href="<?php echo $communicationMediaUtilities; ?>" data-id="">Related Stories</a></p>
															<p><a class="clickScroll" href="<?php echo $communicationMediaUtilities; ?>" data-id="">Solutions For Communication, Media, Utilities &amp; High-Tech </a></p>
														</div>

													</div>

												</div>
											</div>
											<div class="nav-tab tab-3">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">

														<div class="col-xs-6 mb2">
															<h3>Hospitality</h3>
															<?php
															$hospitality= (isset($myPage) && $myPage == 'hospitality') ? "#" : "industry-hospitality.php";
															?>
															<p><a class="clickScroll" href="<?php echo $hospitality; ?>" data-id="">Industry Overview</a></p>
															<p><a class="clickScroll" href="<?php echo $hospitality; ?>" data-id="">Related Stories</a></p>
															<p><a class="clickScroll" href="<?php echo $hospitality; ?>" data-id="">Solutions For Hospitality</a></p>
														</div>

													</div>
												</div>
											</div>
											<div class="nav-tab tab-4">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">

														<div class="col-xs-6 mb2">
															<h3>Public Sector</h3>
															<?php
															$publicsector= (isset($myPage) && $myPage == 'public-sector') ? "#" : "industry-public-sector.php";
															?>
															<p><a class="clickScroll" href="<?php echo $publicsector; ?>" data-id="">Industry Overview</a></p>
															<p><a class="clickScroll" href="<?php echo $publicsector; ?>" data-id="">Related Stories</a></p>
															<p><a class="clickScroll" href="<?php echo $publicsector; ?>" data-id="">Solutions For Public Sector</a></p>
														</div>

													</div>
												</div>
											</div>
											<div class="nav-tab tab-5">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">

														<div class="col-xs-6 mb2">
															<h3>Retail, Manufacturing &amp; Logistics</h3>
															<?php
															$retailmanufacturingandlogistics= (isset($myPage) && $myPage == 'retail-manufacturing-and-logistics') ? "#" : "industry-retail-manufacturing-and-logistics.php";
															?>
															<p><a class="clickScroll" href="<?php echo $retailmanufacturingandlogistics; ?>" data-id="">Industry Overview</a></p>
															<p><a class="clickScroll" href="<?php echo $retailmanufacturingandlogistics; ?>" data-id="">Related Stories</a></p>
															<p><a class="clickScroll" href="<?php echo $retailmanufacturingandlogistics; ?>" data-id="">Solutions For Retail, Manufacturing &amp; Logistics</a></p>
														</div>

													</div>
												</div>
											</div>
											<div class="nav-tab tab-6">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">

														<div class="col-xs-6 mb2">
															<h3>Travel &amp; Transportation</h3>
															<?php
															$travelandtransportation= (isset($myPage) && $myPage == 'travel-and-transportation') ? "#" : "industry-travel-and-transportation.php";
															?>
															<p><a class="clickScroll" href="<?php echo $travelandtransportation; ?>" data-id="">Industry Overview</a></p>
															<p><a class="clickScroll" href="<?php echo $travelandtransportation; ?>" data-id="">Related Stories</a></p>
															<p><a class="clickScroll" href="<?php echo $travelandtransportation; ?>" data-id="">Solutions For Travel &amp; Transportation</a></p>
														</div>

													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="dDown">
							<a>DIGITAL<i class="fa fa-angle-down"></i></a>
							<div class="main-dropdown bp-ab">
								<div class="row">
									<div class="col-xs-3">
										<div class="m-d-left">
											<ul>
												<li class="active" data-tab="tab-16">
													<a href="#"><i class="pw"><img src="dist/images/icons/icon-infinitum-blue.svg" width="29" height="25" alt="" title=""></i><span>Infinitum</span></a>
												</li>
												<li data-tab="tab-7">
													<a href="#"><i class="pw"><img src="dist/images/icons/cloud.svg" width="29" height="25" alt="" title=""></i><span>Cloud</span></a>
												</li>
												<li data-tab="tab-8">
													<a href="#"><i class="pw"><img src="dist/images/icons/artificial-intelligence.svg" width="29" height="25" alt="" title=""></i><span>Artificial Intelligence</span></a>
												</li>
												<li data-tab="tab-9">
													<a href="#"><i class="pw"><img src="dist/images/icons/digital.svg" width="29" height="25" alt="" title=""></i><span>Digital Solutions</span></a>
												</li>
												<li data-tab="tab-10">
													<a href="#"><i class="pw"><img src="dist/images/icons/advanced-analytic.svg" width="29" height="25" alt="" title=""></i><span>Analytics</span></a>
												</li>
												<li data-tab="tab-11">
													<a href="#"><i class="pw"><img src="dist/images/icons/IoT.svg" width="29" height="25" alt="" title=""></i><span>IoT</span></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-xs-9">
										<div class="back-top bp-ab"><i class="pw-arrowUp blue"></i></div>
										<div class="ov-auto">

											<div class="nav-tab tab-16 active">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>About Infinitum</h3>
															<p><a href="solutions.php">Infinitum Overview</a></p>
															<p><a href="solutions.php">Cloud</a></p>
															<p><a href="solutions.php">Artificial Intelligence</a></p>
														</div>
														<div class="col-xs-6 mb2 mt2">

															<p><a href="solutions.php">Digital Solutions</a></p>
															<p><a href="solutions.php">Analytics</a></p>
															<p><a href="solutions.php">IoT</a></p>
														</div>
													</div>

												</div>
											</div>

											<div class="nav-tab tab-9">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Digital Solutions</h3>
															<p><a href="solutions.php">Overview</a></p>
															<p><a href="solutions.php">Digital Banking</a></p>
															<p><a href="solutions.php">Digital Insurance Platform</a></p>
															<p><a href="solutions.php">In-store Digital Experience (AR/VR)</a></p>
														</div>
														<div class="col-xs-6 mb2 mt2">

															<p><a href="solutions.php">Location-based Marketing</a></p>
															<p><a href="solutions.php">Digital Supply Chain</a></p>
															<p><a href="solutions.php">Omni-Channel Retailing</a></p>
														</div>
													</div>

												</div>
											</div>
											<div class="nav-tab tab-7">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Cloud</h3>
															<p><a href="solutions.php">Overview</a></p>
															<p><a href="solutions.php">Cloud End-Point Service</a></p>
															<p><a href="solutions.php">Cloud Management Suites</a></p>
															<p><a href="solutions.php">Server Cloud</a></p>

														</div>
														<div class="col-xs-6 mb2 mt2">

															<p><a href="solutions.php">Virtual Desktop Infrastructure</a></p>
															<p><a href="solutions.php">Cloud-Based Track-and-Trac Platform</a></p>
															<p><a href="solutions.php">Infinitum™ Cloud Solutions Suite</a></p>
															<p><a href="solutions.php">Streaming Service (Streaming Server Cluster)</a></p>
														</div>
													</div>


												</div>
											</div>
											<div class="nav-tab tab-8">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Artifical Intelligence</h3>
															<p><a href="solutions.php">Overview</a></p>
															<p><a href="solutions.php">Business Intelligence</a></p>
															<p><a href="solutions.php">Artifical Intelligence</a></p>
														</div>
														<div class="col-xs-6 mb2 mt2">

															<p><a href="solutions.php">Biometrics</a></p>
															<p><a href="solutions.php">Ai-powered Personalization</a></p>
														</div>
													</div>


												</div>
											</div>
											<div class="nav-tab tab-10">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Analytics</h3>
															<p><a href="solutions.php">Overview</a></p>
															<p><a href="solutions.php">Customer Analytics</a></p>
															<p><a href="solutions.php">Social Media Analytics</a></p>
														</div>
														<div class="col-xs-6 mb2 mt2">

															<p><a href="solutions.php">Video Analytics</a></p>
															<p><a href="solutions.php">Big Data Analytics &amp; Discovery Services</a></p>
															<p><a href="solutions.php">Smart Contract</a></p>
														</div>
													</div>


												</div>
											</div>
											<div class="nav-tab tab-11">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>IoT</h3>
															<p><a href="solutions.php">Overview</a></p>
															<p><a href="solutions.php">Smart Parking &amp; Charging</a></p>
															<p><a href="solutions.php">IoT EAS Retail Solution</a></p>
														</div>

													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="dDown">
							<a href="#">SOLUTIONS<i class="fa fa-angle-down"></i></a>
							<div class="main-dropdown bp-ab">
								<div class="row">
									<div class="col-xs-3">
										<div class="m-d-left">
											<ul>

												<li class="active" data-tab="tab-14">
													<a href="#"><i class="pw"><img src="dist/images/icons/icon-managed-services-blue.svg" width="29" height="25" alt="" title=""></i><span>Managed Services</span></a>
												</li>
												<li data-tab="tab-15">
													<a href="#"><i class="pw"><img src="dist/images/icons/icon-applications-development-blue.svg" width="29" height="25" alt="" title=""></i><span>Application Development</span></a>
												</li>

												<li data-tab="tab-17">
													<a href="#"><i class="pw"><img src="dist/images/icons/icon-enterprise-applications-blue.svg" width="29" height="25" alt="" title=""></i><span>Enterprise Applications</span></a>
												</li>


												<li data-tab="tab-18">
													<a href="#"><i class="pw"><img src="dist/images/icons/icon-technical-services-blue.svg" width="29" height="25" alt="" title=""></i><span>Technical Services</span></a>
												</li>

												<li data-tab="tab-19">
													<a href="#"><i class="pw"><img src="dist/images/icons/icon-outsourcing-blue.svg" width="29" height="25" alt="" title=""></i><span>Outsourcing</span></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-xs-9">
										<div class="back-top bp-ab"><i class="pw-arrowUp blue"></i></div>
										<div class="ov-auto">
											<div class="nav-tab tab-14 active">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Application Consultation &amp; <br>Development</h3>
															<p><a href="en/service/application-development">Application Development</a></p>
															<p><a href="en/service/it-consulting">IT Consulting</a></p>
															<p><a href="en/service/software-sinofication">Software Sinofication</a></p>
															<p><a href="en/service/testing-services">Testing Services</a></p>
														</div>
														<div class="col-xs-6 mb2">
															<h3>System Integration Services</h3>
															<p><a href="en/service/customer-relationship-management">Customer Relationship Management</a></p>
															<p><a href="en/service/enterprise-performance-management">Enterpriese Performance Management</a></p>
															<p><a href="en/service/it-service-management">IT Service Management (ITSM)</a></p>
															<p><a href="en/service/service-oriented-architecture">Service-Oriented Architecture</a></p>
														</div>
													</div>
													<div class="row explore-in">
														<div class="col-xs-6 mb2 mt2">
															<h3>Application Maintenance &amp; <br>Managed Services</h3>
															<p><a href="en/service/application-maintenance">Application Maintenance</a></p>
														</div>
														<div class="col-xs-6 mb2">
															<h3>Security Solutions</h3>
															<p><a href="en/service/intelligence-threat-management-system">Intelligence Threat Management System</a></p>
															<p><a href="en/service/end-to-end-security-solutions">End-to-End Security Solutions</a></p>
															<p><a href="en/service/security-as-a-service">Security-as-a-Service</a></p>
															<p><a href="en/service/backup-as-a-service">Backup-as-a-Service</a></p>
															<p><a href="en/service/business-resumption-center">Business Resumption Service</a></p>
														</div>
													</div>

												</div>
											</div>
											<div class="nav-tab tab-15">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Application Development</h3>
															<p><a href="en/service/mobile-application-solutions">Mobile Application Solutions</a></p>
															<p><a href="en/service/web-applications-development">Web Applications Solutions</a></p>
															<p><a href="en/service/clinic-management-system">Clinic Management System</a></p>
															<p><a href="en/service/e-health-record-system">e-Health Record System</a></p>
															<p><a href="en/service/hospital-rfid-monitoring-solutions">Hospital RFID Monitoring Solutions</a></p>
															<p><a href="en/service/digital-airport-solutions">Digital Airport Solutions</a></p>
															<p><a href="en/service/ivisionbanking">iVisionBanking</a></p>
															<p><a href="en/service/ecommerce-as-a-service">eCommerce-as-a-Service</a></p>
															<p><a href="en/service/payment-services">Payment Services (ePayLink)</a></p>
															<p><a href="en/service/digital-marketing-solutions">Digital Marketing Solutions</a></p>
															<p><a href="en/service/membership-bonus-points-system">Membership Bonus Points System</a></p>
														</div>
														<div class="col-xs-6 mb2 mt2">
															<h3></h3>
															<p><a href="en/service/online-payment">Online Payment (ePayLink)</a></p>
															<p><a href="en/service/electronic-smart-label">Electronic Smart Label</a></p>
															<p><a href="en/service/elogistics-management-system">eLogistics Management System (eLMS)</a></p>
															<p><a href="en/service/iot-eas-retail-solution">IoT EAS Retail Solution</a></p>
															<p><a href="en/service/live-chat-system">Live Chat System</a></p>
															<p><a href="en/service/retail-solutions">Retail Solutions</a></p>
															<p><a href="en/service/smart-mirror">Smart Mirror</a></p>
															<p><a href="en/service/smart-shelf">Smart Shelf</a></p>
															<p><a href="en/service/social-customer-relationship-management">Social Customer Relationship Management</a></p>
															<p><a href="en/service/mobile-payment">Mobile Payment</a></p>
														</div>
													</div>
												</div>
											</div>

											<div class="nav-tab tab-17">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Oracle Services</h3>
															<p><a href="en/service/oracle-services">Overview</a></p>
															<p><a href="en/service/oracle-enterprise-performance-management-system">Oracle Enterprise Performance Management System</a></p>
															<p><a href="en/service/database-as-a-service">Database-as-a-Service</a></p>
															<p><a href="en/service/oracle-ebs-health-check">Oracle EBS Health Check</a></p>
															<p><a href="en/service/oracle-upgrade-service">Oracle Upgrade Service</a></p>
														</div>
														<div class="col-xs-6 mb2">
															<h3>SAP Services</h3>
															<p class="pb3"><a href="#">Overview</a></p>

															<h3>Miscellaneous</h3>
															<p><a href="en/service/enterprise-resources-planning">Enterprise Resouces Planning</a></p>
															<p><a href="en/service/core-banking">Core Banking</a></p>
														</div>
													</div>

												</div>
											</div>

											<div class="nav-tab tab-18">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Technical Services</h3>
															<p><a href="en/service/multi-function-display-system">Multi-Function Display System</a></p>
															<p><a href="en/service/audio-visual-solutions">Audio &amp; Visual Solutions</a></p>
															<p><a href="en/service/cctv-security">CCTV &amp; Security</a></p>
															<p><a href="en/service/communication-navigation-system-management">Communication &amp; Navigation System Management</a></p>
															<p><a href="en/service/information-display-system-management">Information Display System Management</a></p>
														</div>
														<div class="col-xs-6 mb2 mt2">
															<h3></h3>
															<p><a href="en/service/led-display-system">LED Display System</a></p>
															<p><a href="en/service/networked-smart-control-energy-management-system">Networked Smart Control &amp; Energy Management System</a></p>
															<p><a href="en/service/radio-tv-broadcasting-show-business">Radio &amp; TV Broadcasting &amp; Show Business</a></p>
															<p><a href="en/service/rfid-system">RFID System</a></p>
															<p><a href="en/service/traffic-information-display-system">Traffic Information Display System</a></p>
														</div>
													</div>
												</div>
											</div>

											<div class="nav-tab tab-19">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>IT Outsourcing</h3>
															<p><a href="en/service/insourcing">Insourcing</a></p>
															<p class="pb3"><a href="en/service/outsourcing">Outsourcing</a></p>


															<h3>Business Process</h3>
															<p><a href="en/service/campaign-monitoring-marketing-analytics">Campaign Monitoring &amp; Marketing Analytics</a></p>
															<p><a href="en/service/customer-communication-management">Customer Communication Management</a></p>
															<p><a href="en/service/customer-data-document-management">Customer Data &amp; Document Management</a></p>
															<p><a href="en/service/logistics-delivery-management">Logistics &amp; Delivery Management</a></p>
															<p><a href="en/service/electronic-document-management-system">Electronic Document Management System</a></p>
															<p><a href="en/service/retail-solutions">Retail Solutions</a></p>
															<p><a href="en/service/printing-as-a-service">Printing-as-a-Service</a></p>

														</div>
														<div class="col-xs-6 mb2">

															<h3>IT Management (Hardware &amp; Software)</h3>
															<p><a href="en/service/desktop-management">Desktop Management</a></p>
															<p><a href="en/service/it-security-management">IT Security Management</a></p>
															<p><a href="en/service/network-management">Network Management</a></p>
															<p><a href="en/service/operation-management">Operation Management</a></p>
															<p><a href="en/service/platform-management">Platform Management</a></p>
															<p><a href="en/service/enterprise-performance-management">Enterprise Performance Management</a></p>

														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li class="dDown">
							<a>DATA CENTER<i class="fa fa-angle-down"></i></a>
							<div class="main-dropdown bp-ab">
								<div class="row">
									<div class="col-xs-3">
										<div class="m-d-left">
											<ul>
												<li class="active" data-tab="tab-12">
													<a href="#"><i class="pw"><img src="dist/images/icons/Cross-border-network.svg" width="29" height="25" alt="" title=""></i><span>Data Center Services</span></a>
												</li>
												<li data-tab="tab-13">
													<a href="#"><i class="pw"><img src="dist/images/icons/d-infinitum.svg" width="29" height="25" alt="" title=""></i><span>D-Infinitum<br>Global Alliance</span></a>
												</li>
											</ul>
										</div>
									</div>
									<div class="col-xs-9">
										<div class="back-top bp-ab"><i class="pw-arrowUp blue"></i></div>
										<div class="ov-auto">
											<div class="nav-tab tab-12 active">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Overview</h3>
															<p><a href="en/data-center/overview">Data Center Overview</a></p>
															<p><a href="en/data-center/overview">Our Commitment</a></p>
															<p><a href="en/data-center/overview">Unique Competitive Edge</a></p>
														</div>
														<div class="col-xs-6 mb2">
															<h3>Services</h3>
															<p><a href="en/data-center/capabilities">Data Center Design and Build</a></p>
															<p><a href="en/data-center/capabilities">Managed Services</a></p>
															<p><a href="en/data-center/capabilities">Hosting &amp; Facility Management</a></p>
															<p><a href="en/data-center/capabilities">Network Services</a></p>
														</div>
													</div>
													<div class="row explore-in">
														<?php
														$myPage = isset($myPage) ? $myPage : "";
														if ($myPage == 'extensiveCoverage'): ?>
														<div class="col-xs-6 mb2">
															<h3>Extensive Coverage</h3>

															<p><a class="clickScroll" href="#" data-id="MCX10">Hong Kong</a></p>
															<p><a class="clickScroll" href="#" data-id="Guangzhou">China</a></p>
															<p><a href="#">D-Infinitum Global Alliance</a></p>
														</div>

														<?php endif ?>
													</div>

												</div>
											</div>
											<div class="nav-tab tab-13">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>D-Infinitum Global Alliance</h3>
															<p><a href="en/data-center/d-infinitum-overview">Overview</a></p>
															<p><a href="en/data-center/d-infinitum-global-coverage">Global Footprint</a></p>
															<p><a href="en/data-center/d-infinitum-partners">Alliance Partners</a></p>
														</div>
													</div>

												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="en/stories/">STORIES</a>
						</li>
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
					<a href="https://www.linkedin.com/company/3644035/"><i class="pw-linkedin"></i></a>
					<a href="https://www.facebook.com/pccwsolutions/"><i class="pw-facebook"></i></a>
					<a href="https://twitter.com/pccwsolutions"><i class="pw-twitter"></i></a>
					<a href="https://www.youtube.com/channel/UCQwUpKKVbTpdkh4pohrWTEw"><i class="pw-youtube"></i></a>
					<a href="http://www.pccwsolutions.com/wechat/"><i class="fa fa-weixin"></i></a>
				</div>
				<div class="header-b-nav pull-right">
					<ul>
						<li>
							<a href="#">ABOUT US <i class="fa fa-angle-down"></i></a>
							<ul>
								<li><a href="en/about-us/company-overview">OVERVIEW</a></li>
								<li><a href="en/about-us/quality">QUALITY</a></li>
								<li><a href="en/about-us/awards">AWARDS</a></li>

								<li><a href="en/about-us/partners">PARTNERS</a></li>
							</ul>
						</li>
						<li>
							<a href="en/news/">NEWS</a>
						</li>
						<li>
							<a href="en/insights/">INSIGHTS</a>
						</li>
						<li>
							<a href="en/events/">EVENTS</a>
						</li>
						<li>
							<a href="#">CAREER <i class="fa fa-angle-down"></i></a>
							<ul>
								<li><a href="en/career/why-join-us">WHY JOIN US</a></li>

								<li><a href="en/career/job-vacancies">JOB VACANCY</a></li>

								<li><a href="en/career/graduate-trainee">GRADUATE TRAINEE</a></li>
							</ul>
						</li>
						<li>
							<a href="en/contact-us/">CONTACT</i></a>
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
