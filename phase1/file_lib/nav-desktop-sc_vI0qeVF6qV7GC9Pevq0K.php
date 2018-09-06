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
							<a>行业<i class="fa"></i></a>
							<div class="main-dropdown bp-ab">
								<div class="row">
									<div class="col-xs-3">
										<div class="m-d-left">
											<ul>
												<li class="active" data-tab="tab-1">
													<a><i class="pw"><img src="dist/images/icons/banking_and_finance.svg" width="29" height="25" alt="" title=""></i><span>银行、金融和保险业</span></a>
												</li>
												<li data-tab="tab-2">
													<a><i class="pw"><img src="dist/images/icons/communication.svg" width="29" height="25" alt="" title=""></i><span>通信、媒体和公用事业</span></a>
												</li>
												<li data-tab="tab-3">
													<a><i class="pw"><img src="dist/images/icons/hospitality.svg" width="29" height="25" alt="" title=""></i><span>酒店和旅游业</span></a>
												</li>
												<li data-tab="tab-4">
													<a><i class="pw"><img src="dist/images/icons/public_sector.svg" width="29" height="25" alt="" title=""></i><span>公共事业</span></a>
												</li>
												<li data-tab="tab-5">
													<a><i class="pw"><img src="dist/images/icons/retail.svg" width="29" height="25" alt="" title=""></i><span>零售、制造和物流业</span></a>
												</li>
												<li data-tab="tab-6">
													<a><i class="pw"><img src="dist/images/icons/travel.svg" width="29" height="25" alt="" title=""></i><span>交通运输业</span></a>
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
															<h3>银行、金融和保险业</h3>
															<?php
															$bankingFinancialServicesAndInsurance = (isset($semantic) && $semantic == 'banking-financial-services-and-insurance') ? "#" : "sc/industry/banking-financial-services-and-insurance";
															?>
															<p><a class="clickScroll" href="<?php echo $bankingFinancialServicesAndInsurance; ?>" data-id="简介">行业简介</a></p>
															<p><a class="clickScroll" href="<?php echo $bankingFinancialServicesAndInsurance; ?>" data-id="story">成功案例</a></p>
															<p><a class="clickScroll" href="<?php echo $bankingFinancialServicesAndInsurance; ?>" data-id="solutions">有关银行、金融和保险业的解决方案</a></p>
														</div>

													</div>

												</div>
											</div>
											<div class="nav-tab tab-2">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">

														<div class="col-xs-6 mb2">
															<h3>通信、媒体和公用事业</h3>
															<?php
															$communicationMediaUtilities= (isset($semantic) && $semantic == 'communication-media-and-utilities') ? "#" : "sc/industry/communication-media-and-utilities";
															?>
															<p><a class="clickScroll" href="<?php echo $communicationMediaUtilities; ?>" data-id="简介">行业简介</a></p>
															<p><a class="clickScroll" href="<?php echo $communicationMediaUtilities; ?>" data-id="story">成功案例</a></p>
															<p><a class="clickScroll" href="<?php echo $communicationMediaUtilities; ?>" data-id="solutions">有关通信、媒体和公用事业的解决方案 </a></p>
														</div>

													</div>

												</div>
											</div>
											<div class="nav-tab tab-3">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">

														<div class="col-xs-6 mb2">
															<h3>酒店和旅游业</h3>
															<?php
															$hospitality= (isset($semantic) && $semantic == 'hospitality') ? "#" : "sc/industry/hospitality";
															?>
															<p><a class="clickScroll" href="<?php echo $hospitality; ?>" data-id="简介">行业简介</a></p>
															<p><a class="clickScroll" href="<?php echo $hospitality; ?>" data-id="story">成功案例</a></p>
															<p><a class="clickScroll" href="<?php echo $hospitality; ?>" data-id="solutions">有关酒店和旅游业的解决方案</a></p>
														</div>

													</div>
												</div>
											</div>
											<div class="nav-tab tab-4">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">

														<div class="col-xs-6 mb2">
															<h3>公共事业</h3>
															<?php
															$publicsector= (isset($semantic) && $semantic == 'public-sector') ? "#" : "sc/industry/public-sector";
															?>
															<p><a class="clickScroll" href="<?php echo $publicsector; ?>" data-id="简介">行业简介</a></p>
															<p><a class="clickScroll" href="<?php echo $publicsector; ?>" data-id="story">成功案例</a></p>
															<p><a class="clickScroll" href="<?php echo $publicsector; ?>" data-id="solutions">有关公共事业的解决方案</a></p>
														</div>

													</div>
												</div>
											</div>
											<div class="nav-tab tab-5">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">

														<div class="col-xs-6 mb2">
															<h3>零售、制造和物流业</h3>
															<?php
															$retailmanufacturingandlogistics= (isset($semantic) && $semantic == 'retail-manufacturing-and-logistics') ? "#" : "sc/industry/retail-manufacturing-and-logistics";
															?>
															<p><a class="clickScroll" href="<?php echo $retailmanufacturingandlogistics; ?>" data-id="简介">行业简介</a></p>
															<p><a class="clickScroll" href="<?php echo $retailmanufacturingandlogistics; ?>" data-id="story">成功案例</a></p>
															<p><a class="clickScroll" href="<?php echo $retailmanufacturingandlogistics; ?>" data-id="solutions">有关零售、制造和物流业的解决方案</a></p>
														</div>

													</div>
												</div>
											</div>
											<div class="nav-tab tab-6">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">

														<div class="col-xs-6 mb2">
															<h3>交通运输业</h3>
															<?php
															$travelandtransportation= (isset($semantic) && $semantic == 'travel-and-transportation') ? "#" : "sc/industry/travel-and-transportation";
															?>
															<p><a class="clickScroll" href="<?php echo $travelandtransportation; ?>" data-id="简介">行业简介</a></p>
															<p><a class="clickScroll" href="<?php echo $travelandtransportation; ?>" data-id="story">成功案例</a></p>
															<p><a class="clickScroll" href="<?php echo $travelandtransportation; ?>" data-id="solutions">有关交通运输业的解决方案</a></p>
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
															<p><a href="sc/service/">Infinitum 简介</a></p>
															<p><a href="sc/service/">Cloud</a></p>
															<p><a href="sc/service/">Artificial Intelligence</a></p>
														</div>
														<div class="col-xs-6 mb2 mt2">

															<p><a href="sc/service/">Digital Solutions</a></p>
															<p><a href="sc/service/">Analytics</a></p>
															<p><a href="sc/service/">IoT</a></p>
														</div>
													</div>

												</div>
											</div>

											<div class="nav-tab tab-9">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Digital Solutions</h3>
															<p><a href="sc/service/">简介</a></p>
															<p><a href="sc/service/">Digital Banking</a></p>
															<p><a href="sc/service/">Digital Insurance Platform</a></p>
															<p><a href="sc/service/">In-store Digital Experience (AR/VR)</a></p>
														</div>
														<div class="col-xs-6 mb2 mt2">

															<p><a href="sc/service/">Location-based Marketing</a></p>
															<p><a href="sc/service/">Digital Supply Chain</a></p>
															<p><a href="sc/service/">Omni-Channel Retailing</a></p>
														</div>
													</div>

												</div>
											</div>
											<div class="nav-tab tab-7">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Cloud</h3>
															<p><a href="sc/service/">简介</a></p>
															<p><a href="sc/service/cloud-end-point-service">云终端服务</a></p>
															<p><a href="sc/service/cloud-management-suites">云管理服务套件</a></p>
															<p><a href="sc/service/server-cloud">云服务器服务</a></p>

														</div>
														<div class="col-xs-6 mb2 mt2">

															<p><a href="sc/service/virtual-desktop-infrastructure">虚拟桌面</a></p>
															<p><a href="sc/service/cloud-based-track-and-trac-platform">物流追踪与搜索云平台</a></p>
															<p><a href="sc/service/infinitum-cloud-solutions-suite">Infinitum™</a></p>
															<p><a href="sc/service/streaming-service-streaming-server-cluster">流媒体服务</a></p>
														</div>
													</div>


												</div>
											</div>
											<div class="nav-tab tab-8">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Artifical Intelligence</h3>
															<p><a href="sc/service/">简介</a></p>
															<p><a href="sc/service/business-intelligence">商务智能</a></p>
															<p><a href="sc/service/">Artifical Intelligence</a></p>
														</div>
														<div class="col-xs-6 mb2 mt2">

															<p><a href="sc/service/">Biometrics</a></p>
															<p><a href="sc/service/">Ai-powered Personalization</a></p>
														</div>
													</div>


												</div>
											</div>
											<div class="nav-tab tab-10">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Analytics</h3>
															<p><a href="sc/service/">简介</a></p>
															<p><a href="sc/service/">Customer Analytics</a></p>
															<p><a href="sc/service/">Social Media Analytics</a></p>
														</div>
														<div class="col-xs-6 mb2 mt2">

															<p><a href="sc/service/">Video Analytics</a></p>
															
															<p><a href="sc/service/">Smart Contract</a></p>
														</div>
													</div>


												</div>
											</div>
											<div class="nav-tab tab-11">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>IoT</h3>
															<p><a href="sc/service/">简介</a></p>
															<p><a href="sc/service/">Smart Parking &amp; Charging</a></p>
															<p><a href="sc/service/">IoT EAS Retail Solution</a></p>
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
							<a href="#">解决方案<i class="fa fa-angle-down"></i></a>
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
															<p><a href="sc/service/application-development">应用程序的开发</a></p>
															<p><a href="sc/service/it-consulting">IT咨询服务</a></p>
															<p><a href="sc/service/software-sinofication">软件本地化</a></p>
															<p><a href="sc/service/testing-services">测试服务</a></p>
														</div>
														<div class="col-xs-6 mb2">
															<h3>System Integration Services</h3>
															<p><a href="sc/service/customer-relationship-management">客户关系管理</a></p>
															
															<p><a href="sc/service/it-service-management">IT服务管理</a></p>
															<p><a href="sc/service/service-oriented-architecture">面向服务架构</a></p>
														</div>
													</div>
													<div class="row explore-in">
														<div class="col-xs-6 mb2 mt2">
															<h3>Application Maintenance &amp; <br>Managed Services</h3>
															<p><a href="sc/service/application-maintenance">应用程序维护</a></p>
														</div>
														<div class="col-xs-6 mb2">
															<h3>Security Solutions</h3>
															<p><a href="sc/service/intelligence-threat-management-system">智能威胁管理服务</a></p>
															<p><a href="sc/service/end-to-end-security-solutions">端到端的安全解决方案</a></p>
															<p><a href="sc/service/security-as-a-service">安全即服务</a></p>
															<p><a href="sc/service/backup-as-a-service">云备份服务</a></p>
															<p><a href="sc/service/business-resumption-center">业务恢复方案</a></p>
														</div>
													</div>

												</div>
											</div>
											<div class="nav-tab tab-15">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Application Development</h3>
															<p><a href="sc/service/mobile-application-solutions">移动应用解决方案</a></p>
															<p><a href="sc/service/web-applications-development">网络应用和开发</a></p>
															<p><a href="sc/service/clinic-management-system">诊所管理系统</a></p>
															<p><a href="sc/service/e-health-record-system">电子健康记录系统</a></p>
															<p><a href="sc/service/hospital-rfid-monitoring-solutions">医院无线射频识别系统（RFID）监控解决方案</a></p>
															<p><a href="sc/service/digital-airport-solutions">数字化机场解决方案</a></p>
															<p><a href="sc/service/ivisionbanking">银行及金融业务系统应用方案 － iVisionBanking</a></p>
															
															
															<p><a href="sc/service/digital-marketing-solutions">数字营销解决方案</a></p>
															
														</div>
														<div class="col-xs-6 mb2 mt2">
															<h3></h3>
															<p><a href="sc/service/online-payment">支付网关（EPAYLINK）</a></p>
															
															<p><a href="sc/service/elogistics-management-system">电子物流管理系统（ELMS）</a></p>
															
															<p><a href="sc/service/social-customer-relationship-management">Social Customer Relationship Management</a></p>
															<p><a href="sc/service/mobile-payment">Mobile Payment</a></p>
														</div>
													</div>
												</div>
											</div>

											<div class="nav-tab tab-17">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Oracle Services</h3>
															<p><a href="sc/service/oracle-services">简介</a></p>

															<p><a href="sc/service/oracle-enterprise-performance-management-system">ORACLE 企业资源规划 (ERP)</a></p>
															<p><a href="sc/service/database-as-a-service">数据库即服务</a></p>
															
															<p><a href="sc/service/oracle-upgrade-service">ORACLE 升级服务</a></p>
															<p><a href="sc/service/oracle-enterprise-process-solution">ORACLE EBS - 企业流程管理解决方案</a></p>
															<p><a href="sc/service/sc/service/oracle-fusion-hcm">ORACLE FUSION HCM实施服务</a></p>
														</div>
														<div class="col-xs-6 mb2">
															<h3>SAP Services</h3>
															<p class="pb3"><a href="sc/service/sap-services">简介</a></p>

															<h3>Miscellaneous</h3>
															<p><a href="sc/service/enterprise-resources-planning">Enterprise Resouces Planning</a></p>
															<p><a href="sc/service/core-banking">Core Banking</a></p>
														</div>
													</div>


													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Miscellaneous</h3>
															<p><a href="sc/service/enterprise-resources-planning">Enterprise Resouces Planning</a></p>
															<p><a href="sc/service/core-banking">Core Banking</a></p>
															<p><a href="sc/service/visionbanking-v2-suite-total-solution">银行整体解决方案</a></p>
															<p><a href="sc/service/visionbanking-v2-suite-core">银行核心业务系统解决方案</a></p>
															<p><a href="sc/service/visionbanking-suite-enterprise-service-bus">银行VESB企业服务总线解决方案</a></p>
															<p><a href="sc/service/visionbanking-suite-internet-banking">互联网金融解决方案</a></p>
														</div>
														<div class="col-xs-6 mb2">
															
															<h3>Miscellaneous</h3>
															<p><a href="sc/service/enterprise-resources-planning">银行全维度运维管理平台解决方案</a></p>
															<p><a href="sc/service/visionbanking-suite-data-warehouse">银行数据中心系统解决方案</a></p>
															<p><a href="sc/service/visionbanking-suite-customer-relationship-management">银行CRM客户关系管理系统解决方案</a></p>
															<p><a href="sc/service/visionbanking-suite-mobile-marketing-platform">移动营销平台解决方案</a></p>
															<p><a href="sc/service/visionfinance-suite-finance-company-management-system">财务公司资金管理系统解决方案</a></p>
															<p><a href="sc/service/visionfinance-suite-auto-finance">汽车金融业务系统解决方案</a></p>
														</div>
													</div>



												</div>
											</div>

											<div class="nav-tab tab-18">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Technical Services</h3>
															<p><a href="sc/service/multi-function-display-system">多功能显示系统(MFDS)</a></p>
															<p><a href="sc/service/audio-visual-solutions">影音系统解决方案</a></p>
															<p><a href="sc/service/cctv-security">闭路电视与安全解决方案</a></p>
															<p><a href="sc/service/communication-navigation-system-management">通信与导航系统管理</a></p>
															
														</div>
														<div class="col-xs-6 mb2 mt2">
															<h3></h3>
															<p><a href="sc/service/information-display-system-management">信息显示系统管理</a></p>
															<p><a href="sc/service/radio-tv-broadcasting-show-business">广播和娱乐业</a></p>
															<p><a href="sc/service/rfid-system">无线射频识别系统(RFID)</a></p>
															<p><a href="sc/service/traffic-information-display-system">航班信息显示系统</a></p>
														</div>
													</div>
												</div>
											</div>

											<div class="nav-tab tab-19">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>IT Outsourcing</h3>
															
															<p class="pb3"><a href="sc/service/outsourcing">IT外包服务</a></p>


															<h3>Business Process</h3>
															<p><a href="sc/service/campaign-monitoring-marketing-analytics">推广监测与市场分析</a></p>
															
															<p><a href="sc/service/customer-data-document-management">客户数据和文件管理</a></p>
															<p><a href="sc/service/logistics-delivery-management">物流和仓储管理</a></p>
															<p><a href="sc/service/electronic-document-management-system">电子文档管理系统（EDMS）</a></p>
															
															<p><a href="sc/service/printing-as-a-service">打印服务</a></p>

														</div>
														<div class="col-xs-6 mb2">

															<h3>IT Management (Hardware &amp; Software)</h3>
															<p><a href="sc/service/desktop-management">桌面管理</a></p>
															<p><a href="sc/service/it-security-management">IT安全管理</a></p>
															<p><a href="sc/service/network-management">网络管理</a></p>
															<p><a href="sc/service/operation-management">运营管理</a></p>
															<p><a href="sc/service/platform-management">平台管理</a></p>
															

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
							<a>数据中心<i class="fa fa-angle-down"></i></a>
							<div class="main-dropdown bp-ab">
								<div class="row">
									<div class="col-xs-3">
										<div class="m-d-left">
											<ul>
												<li class="active" data-tab="tab-12">
													<a href="#"><i class="pw"><img src="dist/images/icons/Cross-border-network.svg" width="29" height="25" alt="" title=""></i><span>数据中心服务</span></a>
												</li>
												<li data-tab="tab-13">
													<a href="#"><i class="pw"><img src="dist/images/icons/d-infinitum.svg" width="29" height="25" alt="" title=""></i><span>D-Infinitum<br>环球数据中心联盟</span></a>
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
															<h3>简介</h3>
															<p><a href="sc/data-center/简介">数据中心简介</a></p>
															<p><a href="sc/data-center/简介">Our Commitment</a></p>
															<p><a href="sc/data-center/简介">Unique Competitive Edge</a></p>
														</div>
														<div class="col-xs-6 mb2">
															<h3>Services</h3>
															<p><a href="sc/data-center/capabilities">Data Center Design and Build</a></p>
															<p><a href="sc/data-center/capabilities">Managed Services</a></p>
															<p><a href="sc/data-center/capabilities">Hosting &amp; Facility Management</a></p>
															<p><a href="sc/data-center/capabilities">Network Services</a></p>
														</div>
													</div>
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>Extensive Coverage</h3>
															<?php
															$extensiveCoverage = (isset($semantic) && $semantic == 'extensive-coverage') ? "#" : "sc/data-center/extensive-coverage";
															?>
															<p><a class="clickScroll" href="<?php echo $extensiveCoverage; ?>" data-id="MCX10">Hong Kong</a></p>
															<p><a class="clickScroll" href="<?php echo $extensiveCoverage; ?>" data-id="Guangzhou">China</a></p>
															<p><a href="sc/data-center/d-infinitum-overview">D-Infinitum 环球数据中心联盟</a></p>
														</div>
													</div>

												</div>
											</div>
											<div class="nav-tab tab-13">
												<div class="m-d-right bp-rel">
													<div class="row explore-in">
														<div class="col-xs-6 mb2">
															<h3>D-Infinitum 环球数据中心联盟</h3>
															<p><a href="sc/data-center/d-infinitum-简介">简介</a></p>
															<p><a href="sc/data-center/d-infinitum-global-coverage">环球覆盖</a></p>
															<p><a href="sc/data-center/d-infinitum-partners">联盟伙伴</a></p>
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
							<a href="sc/stories/">客户个案</a>
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
							<a href="#">关于我们<i class="fa fa-angle-down"></i></a>
							<ul>
								<li><a href="sc/about-us/company-简介">企业简述</a></li>
								<li><a href="sc/about-us/quality">认证</a></li>
								<li><a href="sc/about-us/awards">奖项</a></li>

								<li><a href="sc/about-us/partners">商业伙伴</a></li>
							</ul>
						</li>
						<li>
							<a href="sc/news/">新闻中心</a>
						</li>
						
						<li>
							<a href="sc/events/">市场活动</a>
						</li>
						<li>
							<a href="#">招聘<i class="fa fa-angle-down"></i></a>
							<ul>
								<li><a href="sc/career/why-join-us">加入我们</a></li>

								<li><a href="sc/career/job-vacancies">职位空缺</a></li>

								<li><a href="sc/career/graduate-trainee">毕业生培训计划</a></li>
							</ul>
						</li>
						<li>
							<a href="sc/contact-us/">联系我们</i></a>
						</li>
						<li>
							<a href="<?php echo $switch_lang; ?>">ENGLISH</a>
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
