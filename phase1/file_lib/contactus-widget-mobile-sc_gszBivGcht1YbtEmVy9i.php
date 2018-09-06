<div class="contact-us-box contact-us-box-page c-u-w-mobile bp-ab">
  <div class="contact-us-content tab-content">
    <div class="tab-pane contact-form active">
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
            <h3>请与我们联系！</h3>
            <p>If you’re considering PCCW Solutions or just want more information, please simply fill out the form.</p>
            <form class="contact1 mobile_widget">
				<input type="hidden" name="task" value="contact_step_1" />
				<input type="hidden" name="referer" value="<?php echo $_SERVER['HTTP_REFERER']; ?>" />
				<input type="hidden" name="source" value="<?php echo "Mobile Widget on this page: " . $url; ?>" />
				
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
                <label for="">company<span>*</span></label>
              </div>
              <div class="form-groups">
                <input type="email" class="form-controls should_clear" name="email" value="" required>
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
        <div class="contact-l-widget">
          <div class="g-info">
            <h4>Hongkong<span>, China</span></h4>
            <div class="g-info-c clearfix">
              <span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>
              <div class="g-info-content">+852 2296 8818</div>
            </div>
            <div class="g-info-c clearfix">
              <span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>
              <div class="g-info-content">pccwsolutions@pccw.com</div>
            </div>
            <a class="find-btn mt1" href="#">FIND OUR OFFICE</a>
          </div>
        </div>
      </div>

      <!-- Contact Us Form 2 -->
      <div class="contact-form2" style="display: none">
        <div class="row contact-form-content">
          <div class="col-xs-12">
            <h3>Sent</h3>
            <p>More data we got, make our services faster, smarter, and more useful to you. Please fill out our survey.</p>
            <form class="contact2 mobile_widget">
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
                      <input type="checkbox" name="hear_about[]" value="online publication">
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
              <div class="row mt3">
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
        <div class="contact-l-widget">
          <div class="g-info">
            <h4>Hongkong<span>, China</span></h4>
            <div class="g-info-c clearfix">
              <span class="g-info-icon pull-left"><img src="dist/images/page_template/phone.png" alt=""></span>
              <div class="g-info-content">+852 2296 8818</div>
            </div>
            <div class="g-info-c clearfix">
              <span class="g-info-icon pull-left"><img src="dist/images/page_template/mail.png" alt=""></span>
              <div class="g-info-content">pccwsolutions@pccw.com</div>
            </div>
            <a class="find-btn mt1" href="#">FIND OUR OFFICE</a>
          </div>
        </div>
      </div>

      <!-- Form 3-->
      <div class="contact-form3 text-center" style="display: none">
        <h3>Thank you for your message.</h3>
        <p>We have received your enquiry and <br>will contact you very soon.</p>
      </div>
    </div>
  </div>
</div>
