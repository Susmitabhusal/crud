@extends('front.app')

@section('slider')
<ul class="rslides w3layouts agileits" id="slider">
				<li>
						<div class="layer w3layouts agileits-banner">
							<h3>fringilla id ipsum sit.</h3>
							<p>Phasellus fringilla faucibus ipsum, id pharetra massa consequat ac. Nullam at tempus urna.</p>
							<a href="#">read more</a>
						</div>
				</li>
				<li>
						<div class="layer w3layouts agileits-banner agileits-banner1">
							<h3>Suspen disse potenti.</h3>
							<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece.</p>
							<a href="#">read more</a>
						</div>
				</li>
				<li>
						<div class="layer w3layouts agileits-banner agileits-banner2">
							<h3>Lorem ipsum dolor sit.</h3>
							<p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p>
							<a href="#">read more</a>
						</div>
				</li>
			</ul>
@endsection

@section('content')
<!-- special models -->
		<div class="agileits-w3layouts-specials" id="models">
			<h3>OUR Models</h3>
			<span></span>
				<div class="special-grids">
					<div class="col-md-6 special-left l-grids">
						 <figure class="effect-bubba">
								<img src="images/s222.jpg" alt=""/>
								<figcaption>
									<h4>Fashion</h4>
									<p>In sit amet sapien eros quibusdam et aut officiis debitis aut rerum Integer in tincidunt labore et dolore magna aliqua</p>													
								</figcaption>			
						 </figure>
					</div>
					<div class="col-md-6 special-right">
						<div class="sp-wid">
							<h4>Lorem ipsum dolor sit</h4>
							<p>Suspendisse dignissim semper velit vitae bibendum. Morbi blandit malesuada eros vitae condimentum. Nam nec magna vel justo laoreet sagittis. Phasellus scelerisque dui a sodales porttitor. Pellentesque bibendum sem eu libero vestibulum fringilla</p>
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="where-spl">
					<div class="col-md-6 special-right l-left">
						<div class="l-wid">
							<h4>Sed odio arcu suscipit</h4>
							<p>Suspendisse dignissim semper velit vitae bibendum. Morbi blandit malesuada eros vitae condimentum. Nam nec magna vel justo laoreet sagittis. Phasellus scelerisque dui a sodales porttitor. Pellentesque bibendum sem eu libero vestibulum fringilla</p>
						</div>
						
					</div>
					<div class="col-md-6 special-left l-right l-grids">
						 <figure class="effect-bubba">
								<img src="images/s111.jpg" alt=""/>
								<figcaption>
									<h4>Fashion</h4>
									<p>In sit amet sapien eros quibusdam et aut officiis debitis aut rerum Integer in tincidunt labore et dolore magna aliqua</p>																
								</figcaption>			
						 </figure>
					</div>
					<div class="clearfix"></div>
				</div>
		</div>
		<!-- special models-->

<!--services-->
	<div id="services" class="services">
		<!-- container -->
		<div class="container">
			<h3 class="title wow zoomInLeft animated" data-wow-delay=".5s">Services</h3>
			<div class="services-row">
				<div class="col-md-3 services-grid services-grid1">
					<span class="glyphicon glyphicon-check effect-1" aria-hidden="true"></span>
					<div class="services-text">
						<h4>Vivamus finibus</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Donec vel felis vehicula erat</p>
					</div>
				</div>
				<div class="col-md-3 services-grid services-grid1">
					<span class="glyphicon glyphicon-user effect-1" aria-hidden="true"></span>
					<div class="services-text">
						<h4>Itaque ear</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Donec vel felis vehicula erat</p>
					</div>
				</div>
				<div class="col-md-3 services-grid services-grid2">
					<span class="glyphicon glyphicon-heart-empty effect-1" aria-hidden="true"></span>
					<div class="services-text">
						<h4>Mauris quam</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Donec vel felis vehicula erat</p>
					</div>
				</div>
				<div class="col-md-3 services-grid services-grid2">
					<span class="glyphicon glyphicon-bookmark effect-1" aria-hidden="true"></span>
					<div class="services-text">
						<h4>Lorem ipsum</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Donec vel felis vehicula erat</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!--//container-->
	</div>
	<!--//services-->
	<!-- gallery -->
	<div class="gallery team-bottom" id="gallery">
		<div class="container">
			<div class="w3l_head w3l_head1">
			<h3>Latest Gallery</h3>
			</div>
			<div class="w3layouts_gallery_grids">
				<ul class="w3l_gallery_grid" id="lightGallery">
					<li data-title="Fashion gaze" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/ga1.jpg" data-responsive-src="images/gal1234.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/ga1.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext">our fashions</h4>
									
								</div>
							</a>

						</div>
					</li>
					<li data-title="Fashion gaze" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/ga2.jpg" data-responsive-src="images/gal2.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/ga2.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext">our fashions</h4>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="Fashion gaze" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/ga3.jpg" data-responsive-src="images/gal3.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/ga3.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext">our fashions</h4>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="Fashion gaze" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/ga4.jpg" data-responsive-src="images/gal4.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/ga4.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext">our fashions</h4>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="Fashion gaze" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/ga5.jpg" data-responsive-src="images/gal55.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/ga5.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext">our fashions</h4>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="Fashion gaze" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/gal5.jpg" data-responsive-src="images/gal5.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/gal5.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext">our fashions</h4>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="Fashion gaze" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/ga6.jpg" data-responsive-src="images/gal6.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/ga6.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext">our fashions</h4>
								
								</div>
							</a>
						</div>
					</li>
					<li data-title="Fashion gaze" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/ga7.jpg" data-responsive-src="images/gal7.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/ga7.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext">our fashions</h4>
									
								</div>
							</a>
						</div>
					</li>
					<li data-title="Fashion gaze" data-desc="Lorem Ipsum is simply dummy text of the printing." data-src="images/ga8.jpg" data-responsive-src="images/gal8.jpg"> 
						<div class="w3layouts_gallery_grid1 box">
							<a href="#">
								<img src="images/ga8.jpg" alt=" " class="img-responsive" />
								<div class="overbox">
									<h4 class="title overtext">our fashions</h4>
								
								</div>
							</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- //gallery -->

	<!--/team-->
	<div class="team" id="team">
			<div class="w3-team-head">
				<h3>Our team</h3>
			</div>
			<div class="w3-agile-team-grids">
				<div class="w3-agile-team-grid1">
					<div class="col-md-4 w3-agile-team-img1">
					<div class="w3-agile-team-img-head">
					
						<h3>Blergonce</h3>
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
						</div>

					</div>
					</div>
					<div class="col-md-4 w3-agile-team-img1 w3-agile-team-img-1">
						<div class="w3-agile-team-img-head">
						<h3>Samuel Badree</h3>
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
						</div>
					</div>
					
					</div>
					<div class="col-md-4 w3-agile-team-img1 w3-agile-team-img-2">
						<div class="w3-agile-team-img-head">
						<h3>Shakeera ls</h3>
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
						</div>
					</div>
					
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="w3-agile-team-grid2">
					<div class="col-md-4 w3-agile-team-img1 w3-agile-team-img-3">
						<div class="w3-agile-team-img-head">
						<h3>sharapova</h3>
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
						</div>
					</div>
					
					</div>
					<div class="col-md-4 w3-agile-team-img1 w3-agile-team-img-4">
					<div class="w3-agile-team-img-head">
						<h3>Jinghat roy</h3>
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
						</div>
					</div>
					</div>
					<div class="col-md-4 w3-agile-team-img1 w3-agile-team-img-5">
						<div class="w3-agile-team-img-head">
						<h3>jessica rosey</h3>
						<i class="fa fa-long-arrow-right" aria-hidden="true"></i>
						<div class="team-social">
						<a href="#"><i class="fa fa-twitter"></i></a>
						<a href="#"><i class="fa fa-linkedin"></i></a>
						<a href="#"><i class="fa fa-pinterest-p"></i></a>
						</div>
					</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
	</div>
	<!--//team-->
	<!-- top-brands -->
	<div class="top-brands" id="brands">
		<div class="container">
			<div class="top-brands-agile-head">
			<h3>Top Brands</h3>
			</div>
			<div class="sliderfig brands-agile-grids">
				<ul id="flexiselDemo1">			
					<li>
						<img src="images/brand1.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/brand4.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/brand111.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/brand7.jpg" alt=" " class="img-responsive" />
					</li>
					<li>
						<img src="images/brand6.jpg" alt=" " class="img-responsive" />
					</li>
				</ul>
			</div>
			
		</div>
	</div>
	<!-- //top-brands --> 

<!--/contact-->
<div class="contact-main-agileits" id="contact">
		<div class="contact-w3-head">
			<h3>Contact us</h3>
		</div>
		<!--form-stars-here-->
		<div class="w3-agile-contact-grids">
				<div class="left-form-w3-agile">
					<h3>Get In Touch</h3>
					<form action="#" method="post">
					<div class="upper">
						<div class="form-sub-w3">
							<div class="icon-w3">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
								<input type="text" name="Username" placeholder="Username" required="" />
						</div>
						<div class="form-sub-w3">
								<div class="icon-w3">
									<i class="fa fa-envelope-o" aria-hidden="true"></i>
								</div>	
									<input type="email" name="Email" placeholder="Youremail@email.com" required="" />
						</div>
						<div class="form-sub-w3">
								<div class="icon-w3">
									<i class="fa fa-comment-o" aria-hidden="true"></i>
								</div>
									<textarea name="Comments" placeholder="Your Message" required=""></textarea>
						</div>
						</div>
						<div class="submit-w3l">
						<input type="submit" value="">
						</div>
					</form>
				</div>
					<!--//form-ends-here-->
					<div class="right-map-w3-agile">
							<h2>Locate us</h2>
							<div class="social-icons-right">
								<h3> Catch on Social</h3>
									<ol>
										<li class="fb"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
										<li class="twt"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
										<li class="drb"><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
										<li class="ldn"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
									</ol>
										<ul class="add">
											<li class="dot"> 123 san francisco New York City USA</li>
											<li class="mobile"> +212 422 275 786</li>
											<li class="mes"> <a href="mailto:info@example.com">Example @mail.com</a></li>
										</ul>
										<div class="clearfix"></div>
							</div>					
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359195.17562375!2d-113.7156245614499!3d36.2473834534249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1471497559566"  ></iframe>
								<div class="clearfix"></div>				
					</div>
					<div class="clearfix"></div>
		</div>
</div>
<!--/contact-->


@endsection
