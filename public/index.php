<?php
include_once "../app/bootstrap.php";

use Util\Template;

$pageName = "Home";
$templateDir = "public"; // TODO configure the different base dirs in a separate file, e.g. JSON

echo Template::header($pageName, $templateDir);
?>


<div class="hero-wrap">
  <div class="overlay"></div>
  <div class="container-fluid">
    <div class="slider-text d-md-flex align-items-center" data-scrollax-parent="true">

      <div class="one-forth ftco-animate align-self-md-center" data-scrollax=" properties: { translateY: '70%' }">
        <h1 class="mb-4"> Management of
          <strong class="typewrite" data-period="4000" data-type='[ "Digital Agency", "Portfolio", "SEO Agency", "Business" ]'>
            <span class="wrap"></span>
          </strong>
        </h1>
        <p class="mb-md-5 mb-sm-3" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">No matter the reason for absence, you can record and monitor your staff attendance with our tailored absence management software.</p>
        <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><a href="#" class="btn btn-primary px-4 py-3">Get a Quote</a> <a href="#" class="btn btn-primary btn-outline-primary px-4 py-3">Our Portfolio</a></p>
      </div>
      <div class="one-half align-self-md-end align-self-sm-center">
        <div class="slider-carousel owl-carousel">
          <div class="item">
            <img src="images/dashboard_full_1.png" class="img-fluid img" alt="">
          </div>
          <div class="item">
            <img src="images/dashboard_full_2.png" class="img-fluid img" alt="">
          </div>
          <div class="item">
            <img src="images/dashboard_full_3.png" class="img-fluid img" alt="">
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="ftco-section ftco-section-2">
  <div class="overlay"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <h3 class="heading-white">We Provide High Quality HR Services</h3>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section ftco-services">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-5">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <h2 class="mb-2">HR is going digital</h2>
        <span class="subheading">Absence Management Tool</span>
      </div>
    </div>
    <div class="row">
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon"><span class="flaticon-research"></span></div>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Document Management</h3>
            <!-- <p>Automated leave tracking to simplify employee time off booking and approval by managers.</p> -->
          	<p>Issue, track and securely store all of your vital HR documents online with our straightforward HR document management software, allowing you to easily communicate all your policies and procedures.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon"><span class="flaticon-creativity"></span></div>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Business Strategy</h3>
            <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 d-flex align-self-stretch ftco-animate">
        <div class="media block-6 services d-block text-center">
          <div class="d-flex justify-content-center">
            <div class="icon"><span class="flaticon-market"></span></div>
          </div>
          <div class="media-body p-2 mt-3">
            <h3 class="heading">Employee Directory and Records</h3>
            <p>Our specialist HR reporting software provides critical information to help you make better decisions, plan for the future, identify areas for improvement and connect with your employees.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-wrap mt-5">
      	<div class="row d-flex no-gutters">
      		<div class="col-md-6 img ftco-animate" style="background-image: url(images/about.jpg);">
      		</div>
      		<div class="col-md-6 d-flex">
      			<div class="services-wrap">
      				<div class="heading-section mb-5 ftco-animate">
		            <h2 class="mb-2">Our Service Makes it Easy for You</h2>
		            <span class="subheading">Absence Management Tool</span>
		          </div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-pencil"></span>
      					</div>
      					<div class="text">
	      					<h3>Employee Self-Service</h3>
	      					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-web"></span>
      					</div>
      					<div class="text">
	      					<h3>Development</h3>
	      					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      					</div>
      				</div>
      				<div class="list-services d-flex ftco-animate">
      					<div class="icon d-flex justify-content-center align-items-center">
      						<span class="icon-pie-chart"></span>
      					</div>
      					<div class="text">
	      					<h3>Accurate HR Reports</h3>
	      					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
      					</div>
      				</div>
      			</div>
      		</div>
      	</div>
      </div>
    </section>

    <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    	<div class="container">
    		<div class="row justify-content-center">
    			<div class="col-md-11">
		    		<div class="row">
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="6780">0</strong>
		                <span>Days Off</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="4500">0</strong>
		                <span>Employees</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="4200">0</strong>
		                <span>Companies</span>
		              </div>
		            </div>
		          </div>
		          <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
		            <div class="block-18 text-center">
		              <div class="text">
		                <strong class="number" data-number="320">0</strong>
		                <span>Happy HRs</span>
		              </div>
		            </div>
		          </div>
		        </div>
	        </div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-work">
    	<div class="container-fluid">
    		<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Our Portfolio</h2>
            <span class="subheading">We're Happy to share our complete Projects</span>
          </div>
        </div>
        <div class="row">
        	<div class="col-md-4 ftco-animate">
        		<div class="work-entry">
	        		<a href="#" class="img" style="background-image: url(images/work-1.jpg);">
	        			<div class="text d-flex justify-content-center align-items-center">
		        			<div class="p-3">
		        				<span>Branding</span>
		        				<h3>Work 01</h3>
		        			</div>
	        			</div>
	        		</a>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="work-entry">
	        		<a href="#" class="img" style="background-image: url(images/work-2.jpg);">
	        			<div class="text d-flex justify-content-center align-items-center">
		        			<div class="p-3">
		        				<span>Branding</span>
		        				<h3>Work 02</h3>
		        			</div>
	        			</div>
	        		</a>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="work-entry">
	        		<a href="#" class="img" style="background-image: url(images/work-3.jpg);">
	        			<div class="text d-flex justify-content-center align-items-center">
		        			<div class="p-3">
		        				<span>Branding</span>
		        				<h3>Work 03</h3>
		        			</div>
	        			</div>
	        		</a>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="work-entry">
	        		<a href="#" class="img" style="background-image: url(images/work-4.jpg);">
	        			<div class="text d-flex justify-content-center align-items-center">
		        			<div class="p-3">
		        				<span>Branding</span>
		        				<h3>Work 01</h3>
		        			</div>
	        			</div>
	        		</a>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="work-entry">
	        		<a href="#" class="img" style="background-image: url(images/work-5.jpg);">
	        			<div class="text d-flex justify-content-center align-items-center">
		        			<div class="p-3">
		        				<span>Branding</span>
		        				<h3>Work 02</h3>
		        			</div>
	        			</div>
	        		</a>
        		</div>
        	</div>
        	<div class="col-md-4 ftco-animate">
        		<div class="work-entry">
	        		<a href="#" class="img" style="background-image: url(images/work-6.jpg);">
	        			<div class="text d-flex justify-content-center align-items-center">
		        			<div class="p-3">
		        				<span>Branding</span>
		        				<h3>Work 03</h3>
		        			</div>
	        			</div>
	        		</a>
        		</div>
        	</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section bg-light">
    	<div class="container">
    		<div class="row justify-content-center mb-5 pb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-3">Our Best Pricing</h2>
            <span class="subheading">Pricing Plans</span>
          </div>
        </div>
    		<div class="row">
	        <div class="col-md-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">Free</h2>
	            <span class="price"><sup>$</sup> <span class="number">0</span></span>
	            <span class="excerpt d-block">100% free. Forever</span>
	            <a href="#" class="btn btn-primary d-block px-2 py-3 mb-4">Get Started</a>
	            
	            <h3 class="heading-2 mb-4">Enjoy All The Features</h3>
	            
	            <ul class="pricing-text">
<!-- 	              <li><strong>150 GB</strong> Bandwidth</li>
	              <li><strong>100 GB</strong> Storage</li>
	              <li><strong>$1.00 / GB</strong> Overages</li> -->
	              <li><strong><span class="icon-check"></span>&nbsp;Max. 10 employees</strong></li>
	              <li><strong><span class="icon-check"></span>&nbsp;HR Dashboard</strong></li>
	              <li><strong><span class="icon-check"></span>&nbsp;Absence Calendar</strong></li>
	              <li><strong><span class="icon-check"></span>&nbsp;Time off management</strong></li>
	              <li>All features</li>
	            </ul>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">Startup</h2>
	            <span class="price"><sup>$</sup> <span class="number">19</span></span>
	            <span class="excerpt d-block">All features are included</span>
	            <a href="#" class="btn btn-primary btn-outline-primary d-block px-3 py-3 mb-4">Get Started</a>
	            
	            <h3 class="heading-2 mb-4">Enjoy All The Features</h3>
	            
	            <ul class="pricing-text">
	              <li><strong>450 GB</strong> Bandwidth</li>
	              <li><strong>400 GB</strong> Storage</li>
	              <li><strong>$2.00 / GB</strong> Overages</li>
	              <li>All features</li>
	            </ul>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">Premium</h2>
	            <span class="price"><sup>$</sup> <span class="number">49</span></span>
	            <span class="excerpt d-block">All features are included</span>
	            <a href="#" class="btn btn-primary btn-outline-primary d-block px-3 py-3 mb-4">Get Started</a>
	            
	            <h3 class="heading-2 mb-4">Enjoy All The Features</h3>
	            
	            <ul class="pricing-text">
	              <li><strong>250 GB</strong> Bandwidth</li>
	              <li><strong>200 GB</strong> Storage</li>
	              <li><strong>$5.00 / GB</strong> Overages</li>
	              <li>All features</li>
	            </ul>
	            </div>
	          </div>
	        </div>
	        <div class="col-md-3 ftco-animate">
	          <div class="block-7">
	            <div class="text-center">
	            <h2 class="heading">Pro</h2>
	            <span class="price"><sup>$</sup> <span class="number">99</span></span>
	            <span class="excerpt d-block">All features are included</span>
	            <a href="#" class="btn btn-primary btn-outline-primary d-block px-3 py-3 mb-4">Get Started</a>
	            
	            <h3 class="heading-2 mb-4">Enjoy All The Features</h3>
	            
	            <ul class="pricing-text">
	              <li><strong>450 GB</strong> Bandwidth</li>
	              <li><strong>400 GB</strong> Storage</li>
	              <li><strong>$20.00 / GB</strong> Overages</li>
	              <li>All features</li>
	            </ul>
	            </div>
	          </div>
	        </div>
	      </div>
    	</div>
    </section>

    <section class="ftco-quote">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6 pr-md-5 aside-stretch py-5 choose">
    				<div class="heading-section heading-section-white mb-5 ftco-animate">
	            <h2 class="mb-2">Reasons to choose AppSense</h2>
	          </div>
	          <div class="ftco-animate">
	          	<p>Our self service software solution ensures that you get a full set of policies and appropriate triggers (with key information being sent to relevant line managers, HR, and senior management as appropriate to your needs) based on best practices across a wide range of industries. In addition to this, the system can be customised to ensure compliance with your specific absence management policy and ensure that the relevant triggers are tripped - and information disseminated immediately to the right members of staff - as you require.</p>
	          	<ul class="un-styled my-5">
	          		<li><span class="icon-check"></span>Automate the HR process</li>
	          		<li><span class="icon-check"></span>Increase employee satisfaction</li>
	          		<li><span class="icon-check"></span>Save time and money</li>
	          	</ul>
	          </div>
    			</div>
    			<div class="col-md-6 py-5 pl-md-5">
    				<div class="heading-section mb-5 ftco-animate">
	            <h2 class="mb-2">Get a Free Quote</h2>
	          </div>
	          <form action="#" class="ftco-animate">
	          	<div class="row">
	          		<div class="col-md-6">
		              <div class="form-group">
		                <input type="text" class="form-control" placeholder="Full Name">
		              </div>
	              </div>
	              <div class="col-md-6">
		              <div class="form-group">
		                <input type="text" class="form-control" placeholder="Email">
		              </div>
	              </div>
	              <div class="col-md-6">
	              	<div class="form-group">
		                <input type="text" class="form-control" placeholder="Phone">
		              </div>
		            </div>
	              <div class="col-md-6">
	              	<div class="form-group">
		                <input type="text" class="form-control" placeholder="Website">
		              </div>
		            </div>
		            <div class="col-md-12">
		              <div class="form-group">
		                <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
		              </div>
		            </div>
		            <div class="col-md-12">
		              <div class="form-group">
		                <input type="submit" value="Get a Quote" class="btn btn-primary py-3 px-5">
		              </div>
	              </div>
              </div>
            </form>
    			</div>
    		</div>
    	</div>
    </section>
		

		<section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Testimony</h2>
            <span class="subheading">Our Happy Customer Says</span>
          </div>
        </div>
        <div class="row justify-content-center ftco-animate">
          <div class="col-md-8">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_2.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_3.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(images/person_1.jpg)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Dennis Green</p>
                    <span class="position">System Analytics</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <h2 class="mb-2">Latest Blog</h2>
            <span class="subheading">Read our blog</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_1.jpg');">
              </a>
              <div class="text py-4">
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="100">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_2.jpg');">
              </a>
              <div class="text py-4">
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
          <div class="col-md-4 ftco-animate">
            <div class="blog-entry" data-aos-delay="200">
              <a href="blog-single.html" class="block-20" style="background-image: url('images/image_3.jpg');">
              </a>
              <div class="text py-4">
                <div class="meta mb-3">
                  <div><a href="#">August 12, 2018</a></div>
                  <div><a href="#">Admin</a></div>
                  <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                </div>
                <h3 class="heading"><a href="#">Even the all-powerful Pointing has no control about the blind texts</a></h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php

echo Template::footer($templateDir);