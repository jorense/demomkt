	<section id="main-wrapper">
		<div class="contact-us-container bp-rel">
			<div id="map" class="archive-map"></div>
			<div class="contact-us-box contact-us-box-page zx5 bp-ab animated opac" data-animation="fadeInUp" data-delay="700">
				<div class="contact-tab text-center clearfix ">
					<ul class="contact-tabs">
						<li class="active">
							<a href="#tab1" data-toggle="tab">CONTACT US</a>
						</li>
						<li>
							<a href="#tab2" data-toggle="tab">OFFICE LOCATOR</a>
						</li>
					</ul>
				</div>
				<div class="contact-us-content tab-content">
					<div id="tab1" class="tab-pane contact-form active">
						<!-- Cover for ajax loading -->
						<div class="contact_us_load transition">
							<div class="success transition">
								<div class="vertical_align">
									<i class="fa fa-check-circle"></i>
									<div class="message">
										Thank you for your message.
									</div>
								</div>
							</div>
							<div class="vertical_align">
								<div class="lds-css ng-scope">
									<div class="lds-spinner" style="100%;height:100%">
										<div></div>
										<div></div>
										<div></div>
										<div></div>
										<div></div>
										<div></div>
										<div></div>
										<div></div>
										<div></div>
										<div></div>
									</div>
								</div>
							</div>
						</div>

						<!-- Contact Us Form 1 -->
						<div class="contact-form1">
							<div class="row contact-form-content">
								<div class="col-xs-12">
									<h3>Get in touch with us!</h3>
									<p>If you’re considering PCCW Solutions or just want more information, please simply fill out the form.</p>
									<form class="contact1 page">
										<input type="hidden" name="task" value="contact_step_1" />
										<input type="hidden" name="referer" value="<?php echo $_SERVER['HTTP_REFERER']; ?>" />
										<input type="hidden" name="source" value="<?php echo $source; ?>" />
										<input type="hidden" name="lang" value="<?php echo $lang; ?>" />
										<div class="form-groups">
											<input type="text" class="form-controls should_clear" name="name" value="" required>
											<span class="bars bp-ab"></span>
											<label for="">Name<span>*</span></label>
										</div>
										<div class="form-groups">
											<input type="text" class="form-controls should_clear" name="title" value="" required>
											<span class="bars bp-ab"></span>
											<label for="">Title<span>*</span></label>
										</div>
										<div class="form-groups">
											<input type="text" class="form-controls should_clear" name="company" value="" required>
											<span class="bars bp-ab"></span>
											<label for="">Company<span>*</span></label>
										</div>
										<div class="form-groups">
											<input type="email" class="form-controls should_clear email" name="email" value="" required>
											<span class="bars bp-ab"></span>
											<label for="">Email<span>*</span></label>
										</div>
										<div class="form-groups">
											<input type="number" class="form-controls should_clear" name="telephone" value="" required>
											<span class="bars bp-ab"></span>
											<label for="">Telephone<span>*</span></label>
										</div>
										<div class="form-groups msg-group">
											<textarea name="message" rows="0" cols="0" class="form-controls message should_clear" required></textarea>
											<span class="bars bp-ab"></span>
											<label for="" class="msg-label">Please leave your message<span>*</span></label>
										</div>
										<div class="form-groups">
											<div class="taglines mt1">
												<div class="form-group">
													<label class="form-check tagline">I have read and accept the <a href="#">data protection statement.*</a>
													  <input type="checkbox" name="agree1" value="I have read and accept the data protection statement." required>
													  <span class="checkmark"></span>
													</label>
												</div>
											</div>
										</div>
										<div class="form-groups">
											<div class="contact-p-btn mt2 bp-rel">
												<div class="row">
													<div class="col-sm-12 col-md-6">
														<div class="err-msg">
															<span>*</span> fields are mandatory
														</div>
													</div>
													<div class="col-sm-12 col-md-6">
														<span class="button--bubble__container green pull-right mt0">
															<input type="submit" id="" class="button button--bubble pccw-btn green contact-send" name="" value="SEND">
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
												<div class="clearfix"></div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

						<!-- Contact Us Form 2 -->
						<div class="contact-form2" style="display: none">
							<div class="row contact-form-content">
								<div class="col-xs-12">
									<h3>Sent</h3>
									<p>More data we got, make our services faster, smarter, and more useful to you. Please fill out our survey.</p>
									<form class="contact2 page">
										<input type="hidden" class="prev_id" name="prev_id" />
										<input type="hidden" name="task" value="contact_step_2" />
										<div class="form-groups">
											<div class="c-select mt1">
												<select class="selectpicker" name="industry" title="" required>
													<option selected value="">Industry</option>
													<option value="airline">Airline</option>
													<option value="banking">Banking</option>
													<option value="communications">Communications</option>
													<option value="consumer goods and services">Consumer Goods &amp; Services</option>
												</select>
											</div>
										</div>
										<p class="pt2 pb1">How did you first hear about PCCW Solutions?<br>(Please tick appropriate box, can tick multiple boxes.)</p>
										<div class="row">
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<label class="form-check">Seminar/Conference
													  <input type="checkbox" name="hear_about[]" value="seminar or conference">
													  <span class="checkmark"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="form-check">Trade&nbsp;Shows/Exhibitions
													  <input type="checkbox" name="hear_about[]" value="trade shows or exhibitions">
													  <span class="checkmark"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="form-check">Magazine
													  <input type="checkbox" name="hear_about[]" value="magazine">
													  <span class="checkmark"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="form-check">Newspaper
													  <input type="checkbox" name="hear_about[]" value="newspaper">
													  <span class="checkmark"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="form-check">Television
													  <input type="checkbox" name="hear_about[]" value="television">
													  <span class="checkmark"></span>
													</label>
												</div>
											</div>
											<div class="col-xs-12 col-sm-6">
												<div class="form-group">
													<label class="form-check">Social Media
													  <input type="checkbox" name="hear_about[]" value="social media">
													  <span class="checkmark"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="form-check">Online Publication
													  <input type="checkbox" name="hear_about[]" value="online publication">
													  <span class="checkmark"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="form-check">Recommendation Form Others
													  <input type="checkbox" name="hear_about[]" value="recommendation from others">
													  <span class="checkmark"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="form-check">Not Sure
													  <input type="checkbox" name="hear_about[]" value="not sure">
													  <span class="checkmark"></span>
													</label>
												</div>
												<div class="form-group">
													<label class="form-check">Others.
														<input type="checkbox">
														<span class="checkmark"></span>
														<div class="specify bp-set vm">
															<input type="text" name="hear_about[]" value="" placeholder="Please Specify">
														</div>
													</label>
												</div>
											</div>
										</div>
										<div class="row mt1">
											<div class="col-xs-12">
												<div class="form-group">
													<label class="form-check tagline">I have read and accept the <a href="#">data protection statement.*</a>
													  <input type="checkbox" name="agree2" value="I have read and accept the data protection statement." required>
													  <span class="checkmark"></span>
													</label>
												</div>
											</div>
										</div>
										<div class="row mt1">
											<div class="col-xs-12">
												<div class="form-groups">
													<span class="button--bubble__container green mt0">
														<input type="submit" id="" class="button button--bubble pccw-btn green contact-submit" name="" value="SUBMIT">
														<span class="button--bubble__effect-container">
															<span class="circle top-left"></span>
															<span class="circle top-left"></span>
															<span class="circle top-left"></span>
															<span class="circle bottom-right"></span>
															<span class="circle bottom-right"></span>
															<span class="circle bottom-right"></span>
														</span>
													</span>
													<a class="skip" href="javascript:void(0);"><span class="skip_step_2">SKIP</span></a>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

						<!-- Form 3-->
						<div class="contact-form3 text-center" style="display: none">
							<h3>Thank you for your message.</h3>
							<p>We have received your enquiry and <br>will contact you very soon.</p>
							<p class="mt2">Redirect to the form after 3 second(s).</p>
						</div>
					</div>

					<div id="tab2" class="tab-pane contact-us-location">
						<h3>Find your nearest office</h3>
						<div class="contact-location-list">
							<ul>
								<li>
									<div id="0" class="c-l-l-inner" onClick="javascript:triggerClick(0)">
										<h4>Hong Kong<span>, China</span></h4>
										<p>Level 2, The Long Beach Commercial Podium...</p>
									</div>
								</li>
								<li>
									<div id="1" class="c-l-l-inner" onClick="javascript:triggerClick(1)">
										<h4>Macau<span>, China</span></h4>
										<p>Unit B-C, 16 Floor, Macao Chamber of...</p>
									</div>
								</li>
								<li>
									<div id="2" class="c-l-l-inner" onClick="javascript:triggerClick(2)">
										<h4>Beijing<span>, China</span></h4>
										<p>Floor 15, Tower B, Pacific Century Place, 2A...</p>
									</div>
								</li>
								<li>
									<div id="3" class="c-l-l-inner" onClick="javascript:triggerClick(3)">
										<h4>Guangzhou<span>, China</span></h4>
										<p>Rm 707-713, 7/F, Dong Bao Tower, 767...</p>
									</div>
								</li>
								<li>
									<div id="4" class="c-l-l-inner" onClick="javascript:triggerClick(4)">
										<h4>Shanghai<span>, China</span></h4>
										<p>701-704/F,KIC Plaza, No. 333, Songhu Road,..</p>
									</div>
								</li>
								<li>
									<div id="5" class="c-l-l-inner" onClick="javascript:triggerClick(5)">
										<h4>Xian<span>, China</span></h4>
										<p>Room 401, Qinfeng Pavilion, Xi'an Software...</p>
									</div>
								</li>
								<li>
									<div id="6" class="c-l-l-inner" onClick="javascript:triggerClick(6)">
										<h4>Shenzhen<span>, China</span></h4>
										<p>2-3/F, Tower A, Building R3, Keyuan South...</p>
									</div>
								</li>
								<li>
									<div id="7" class="c-l-l-inner" onClick="javascript:triggerClick(7)">
										<h4>Wuhan<span>, China</span></h4>
										<p>20/F, Tower A, Guomao Building, 562...</p>
									</div>
								</li>
								<li>
									<div id="8" class="c-l-l-inner" onClick="javascript:triggerClick(8)">
										<h4>Pasig City<span>, Philippines</span></h4>
										<p>10th Floor, The 30th Corporate Center,...</p>
									</div>
								</li>
								<li>
									<div id="9" class="c-l-l-inner" onClick="javascript:triggerClick(9)">
										<h4>Singapore</h4>
										<p>7 Temasek Boulevard, #17-03 Suntec City...</p>
									</div>
								</li>
								<li>
									<div id="10" class="c-l-l-inner" onClick="javascript:triggerClick(10)">
										<h4>Taipei<span>, Taiwan</span></h4>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</section>

<script type="text/javascript">
var locations = [
	// Hong Kong
	['\
	<div class="g-info">\
		<h4>Hong Kong, <span class="g-info-sm">China<span></h4>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
			<div class="g-info-content">Level 2, The Long Beach Commercial Podium, 8 Hoi Fai Road, Kowloon</div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
			<div class="g-info-content"><a href="tel:+852 2296 8818">+852 2296 8818 (for Solutions)</a></br><a href="tel:+852 2296 8998">+852 2296 8998 (for General)</a></div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
			<div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
		</div>\
	</div>\
	', 22.319446, 114.15627999999992],

	// Macau
	['\
	<div class="g-info">\
		<h4>Macau, <span class="g-info-sm">China<span></h4>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
			<div class="g-info-content">Unit B-C, 16 Floor, Macao Chamber of Commerce Building, 175, Rua De Xangai, Macau</div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
			<div class="g-info-content">Live Chat</div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
			<div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
		</div>\
	</div>\
	', 22.1920649, 113.54750690000003],

	// Beijing
	['\
	<div class="g-info">\
		<h4>Beijing, <span class="g-info-sm">China<span></h4>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
			<div class="g-info-content">Floor 15, Tower B, Pacific Century Place, 2A Gong Ti Bei Road, Chaoyang District, Beijing</div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
			<div class="g-info-content"><a href="tel:+86 10 5732 0828">+86 10 5732 0828</a></div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
			<div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
		</div>\
	</div>\
	', 39.90419989999999, 116.40739630000007],

	// Guangzhou
	['\
	<div class="g-info">\
		<h4>Guangzhou, <span class="g-info-sm">China<span></h4>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
			<div class="g-info-content">Rm 707-713, 7/F, Dong Bao Tower, 767 Dongfeng Dong Road, Guangzhou</div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
			<div class="g-info-content"><a href="tel:+86 20 3832 0123">+86 20 3832 0123</a></div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
			<div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
		</div>\
	</div>\
	', 23.12911, 113.26438499999995],

	// Shanghai
	['\
	<div class="g-info">\
		<h4>Shanghai, <span class="g-info-sm">China<span></h4>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
			<div class="g-info-content">701-704/F,KIC Plaza, No. 333, Songhu Road, Yangpu District, Shanghai </div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
			<div class="g-info-content"><a href="tel:+86 21 60651788">+86 21 60651788</a></div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
			<div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
		</div>\
	</div>\
	', 31.2303904, 121.47370209999997],

	// Xian
	['\
	<div class="g-info">\
		<h4>Xian, <span class="g-info-sm">China<span></h4>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
			<div class="g-info-content">Room 401, Qinfeng Pavilion, Xian Software Park, No. 68, Keji 2nd Road, Xian City</div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
			<div class="g-info-content"><a href="tel:+86 29 6851 8188">+86 29 6851 8188</a></div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
			<div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
		</div>\
	</div>\
	', 34.341574, 108.93976999999995],

	// Shenzhen
	['\
	<div class="g-info">\
		<h4>Shenzhen, <span class="g-info-sm">China<span></h4>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
			<div class="g-info-content">2-3/F, Tower A, Building R3, Keyuan South Road, Hi-tech Industrial Park, Nanshan District, Shenzhen</div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
			<div class="g-info-content"><a href="tel:+86 755 2658 8228">+86 755 2658 8228</a></div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
			<div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
		</div>\
	</div>\
	', 22.543096, 114.05786499999999],

	// Wuhan
	['\
	<div class="g-info">\
		<h4>Wuhan, <span class="g-info-sm">China<span></h4>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
			<div class="g-info-content">20/F, Tower A, Guomao Building, 562 Jianshe Road, Wuhan</div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
			<div class="g-info-content"><a href="tel:+86 27 8535 7888">+86 27 8535 7888</a></div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
			<div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
		</div>\
	</div>\
	', 30.592849, 114.30553899999995],

	// PHILIPPINES
	['\
	<div class="g-info">\
		<h4>Pasig City, <span class="g-info-sm">Philippines<span></h4>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
			<div class="g-info-content">10th Floor, The 30th Corporate Center, 30 Meralco Avenue, Brgy. Ugong, Pasig City, Philippines 1605</div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>\
			<div class="g-info-content"><a href="tel:+63 28805800">+63 28805800</a></div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
			<div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
		</div>\
	</div>\
	', 14.5805198, 121.06408579999993],

	// Singapore
	['\
	<div class="g-info">\
		<h4>Singapore</h4>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/address.png" alt=""></span>\
			<div class="g-info-content">7 Temasek Boulevard, #17-03 Suntec City Tower 1, Singapore 038987</div>\
		</div>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
			<div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
		</div>\
	</div>\
	', 1.2951272, 103.8599418],

	// Taiwan
	['\
	<div class="g-info">\
		<h4>Taipei</h4>\
		<div class="g-info-c clearfix">\
			<span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>\
			<div class="g-info-content"><a href="mailto:pccwsolutions@pccw.com">pccwsolutions@pccw.com</a></div>\
		</div>\
	</div>\
	', 25.0329694, 121.56541770000001],
];
</script>
