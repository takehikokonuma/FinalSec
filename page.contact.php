<?php

/*
Template Name: page-language
*/

  get_header();

  while(have_posts()) {
    the_post(); ?>


    <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg') ?>);"></div>
    </div>
      <!-- Page Title
      ============================================= -->
      <section id="page-title">

        <div class="container clearfix">
          <h1>Contact</h1>
          <span>ご質問等ございましたら、お気軽にお問合せください</span>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Contact</li>
          </ol>
        </div>

      </section><!-- #page-title end -->

     <!-- Content
 		============================================= -->
 		<section id="content">

 			<div class="content-wrap">

 				<div class="container clearfix">

 					<!-- Contact Form
 					============================================= -->
 					<div class="col_half">

 						<div class="fancy-title title-dotted-border">
 							<h3>お問い合わせ</h3>
 						</div>

 						<div class="contact-widget">

 							<div class="contact-form-result"></div>

 							<form class="nobottommargin" id="template-contactform" name="template-contactform" action="include/sendemail.php" method="post">

 								<div class="form-process"></div>

 								<div class="col_one_third">
 									<label for="template-contactform-name">お名前 <small>*</small></label>
 									<input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
 								</div>

 								<div class="col_one_third">
 									<label for="template-contactform-email">Email <small>*</small></label>
 									<input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
 								</div>

 								<div class="col_one_third col_last">
 									<label for="template-contactform-phone">電話番号</label>
 									<input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
 								</div>

 								<div class="clear"></div>

 								<div class="col_two_third">
 									<label for="template-contactform-subject">件名 <small>*</small></label>
 									<input type="text" id="template-contactform-subject" name="template-contactform-subject" value="" class="required sm-form-control" />
 								</div>

 								<div class="col_one_third col_last">
 									<label for="template-contactform-service">問い合わせ内容</label>
 									<select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
 										<option value="">-- 選択 --</option>
 										<option value="Wordpress">家庭教師派遣</option>
 										<option value="PHP / MySQL">企業研修</option>
 										<option value="HTML5 / CSS3">ミャンマー語検定</option>
 										<option value="Graphic Design">その他</option>
 									</select>
 								</div>

 								<div class="clear"></div>

 								<div class="col_full">
 									<label for="template-contactform-message">メッセージ <small>*</small></label>
 									<textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
 								</div>

 								<div class="col_full hidden">
 									<input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
 								</div>

 								<div class="col_full">
 									<button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">送信</button>
 								</div>

 							</form>
 						</div>

 					</div><!-- Contact Form End -->

 					<!-- Google Map
 					============================================= -->
 					<div class="col_half col_last">

 						<section id="google-map" class="gmap" style="height: 410px;">
              <iframe < src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3819.1880306573926!2d96.15439855011765!3d16.817025523373747!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30c1ecaba1f35b85%3A0xf16442b2d0f0a71c!2sPearl+Condo+C%2C+Kabar+Aye+Pagoda+Rd%2C+Yangon!5e0!3m2!1sja!2smm!4v1536832689342"
              width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </section>

 					</div><!-- Google Map End -->

 					<div class="clear"></div>

          <hr>

 					<!-- Contact Info
 					============================================= -->
 					<div class="row clear-bottommargin">

 						<div class="col-lg-3 col-md-6 bottommargin clearfix">
 							<div class="feature-box fbox-center fbox-bg fbox-plain">
 								<div class="fbox-icon">
 									<a href="#"><i class="fa fa-map-marker"></i></a>
 								</div>
 								<h3>本社<span class="subtitle">Pearl Condo, Bahan</span></h3>
 							</div>
 						</div>

 						<div class="col-lg-3 col-md-6 bottommargin clearfix">
 							<div class="feature-box fbox-center fbox-bg fbox-plain">
 								<div class="fbox-icon">
 									<a href="#"><i class="fa fa-phone"></i></a>
 								</div>
 								<h3>問い合わせ<span class="subtitle">09-7777-41162</span></h3>
 							</div>
 						</div>

 						<div class="col-lg-3 col-md-6 bottommargin clearfix">
 							<div class="feature-box fbox-center fbox-bg fbox-plain">
 								<div class="fbox-icon">
 									<a href="#"><i class="fa fa-facebook-square"></i></a>
 								</div>
 								<h3>Facebookで連絡<span class="subtitle"><a href="https://www.facebook.com/word.crews.3">Facebook</a></span></h3>
 							</div>
 						</div>

 						<div class="col-lg-3 col-md-6 bottommargin clearfix">
 							<div class="feature-box fbox-center fbox-bg fbox-plain">
 								<div class="fbox-icon">
 									<a href="#"><i class="fa fa-comments-o"></i></a>
 								</div>
 								<h3>メール<span class="subtitle">ほげほげ</span></h3>
 							</div>
 						</div>

 					</div><!-- Contact Info End -->

 				</div>

 			</div>

 		</section><!-- #content end -->


    <?php  }

    get_footer();
  ?>
