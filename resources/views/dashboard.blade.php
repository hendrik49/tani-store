<!DOCTYPE html>
<html>
@include('layouts.header')

      
    <!-- Start Home Page Slider -->
    <section id="home">
      <!-- Carousel -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <!--/ Indicators end-->

        <!-- Carousel inner -->
        <div class="carousel-inner">
          <div class="item active">
            <img class="img-responsive" src="{{ asset('assets/images/slider/bg1.jpg') }}" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated2">
                              <span>Welcome to <strong>AppXoffer</strong></span>
                              </h2>
                <h3 class="animated3">
                                <span>the world's marketing analytics platform</span>
                              </h3>
                <p class="animated4"><a href="#" class="slider btn btn-system btn-large">Check Now</a>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="{{ asset('assets/images/slider/bg2.jpg') }}" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated4">
                                <span><strong>AppXoffer</strong> for the highest</span>
                            </h2>
                <h3 class="animated5">
                              <span>The Key of your Success Analitics</span>
                            </h3>
                <p class="animated6"><a href="#" class="slider btn btn-system btn-large">Register Now</a>
                </p>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
          <div class="item">
            <img class="img-responsive" src="{{ asset('assets/images/slider/bg3.jpg') }}" alt="slider">
            <div class="slider-content">
              <div class="col-md-12 text-center">
                <h2 class="animated7 white">
                                <span>The way of <strong>Success</strong></span>
                            </h2>
                <h3 class="animated8 white">
                              <span>Why you are waiting</span>
                            </h3>
                <div class="">
                  <a class="animated4 slider btn btn-system btn-large btn-min-block" href="#">Get Now</a><a class="animated4 slider btn btn-default btn-min-block" href="#">Live Demo</a>
                </div>
              </div>
            </div>
          </div>
          <!--/ Carousel item end -->
        </div>
        <!-- Carousel inner end-->

        <!-- Controls -->
        <a class="left carousel-control" href="#main-slide" data-slide="prev">
          <span><i class="fa fa-angle-left"></i></span>
        </a>
        <a class="right carousel-control" href="#main-slide" data-slide="next">
          <span><i class="fa fa-angle-right"></i></span>
        </a>
      </div>
      <!-- /carousel -->
    </section>
    <!-- End Home Page Slider -->


    <!-- Start Services Section -->
    <div class="section service">
      <div class="container">
        <div class="row">

          <!-- Start Service Icon 1 -->
          <div class="col-md-4 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="01">
            <div class="service-icon">
              <i class="fa fa-compass icon-large"></i>
            </div>
            <div class="service-content">
              <h4>Understand every user's journey</h4>
              <p>Follow the digital footprint of every user across mobile and web devices. Know precisely what happens inside your product.</p>

            </div>
          </div>
          <!-- End Service Icon 1 -->

          <!-- Start Service Icon 2 -->
          <div class="col-md-4 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="02">
            <div class="service-icon">
              <i class="fa fa-comments icon-large"></i>
            </div>
            <div class="service-content">
              <h4>Build faster with instant answers</h4>
              <p>Pull up the numbers you need at a moment's notice. Experiment immediately with A/B testing and notifications.</p>
            </div>
          </div>
          <!-- End Service Icon 2 -->

          <!-- Start Service Icon 3 -->
          <div class="col-md-4 col-sm-6 service-box service-center" data-animation="fadeIn" data-animation-delay="03">
            <div class="service-icon">
              <i class="fa fa-unlock icon-large"></i>
            </div>
            <div class="service-content">
              <h4>Unlock insights for everyone</h4>
              <p>Whether you're an executive, product manager, or data scientist, you have a set of tools tailored to your unique product questions.</p>
            </div>
          </div>
          <!-- End Service Icon 3 -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </div>
    <!-- End Services Section -->


    <!-- Start Purchase Section -->
    <div class="section purchase">
      <div class="container">

        <!-- Start Video Section Content -->
        <div class="section-video-content text-center">

          <!-- Start Animations Text -->
          <h1 class="fittext wite-text uppercase tlt">
                        MEASURE 
                      <span class="texts">
                        <span>In-App Events</span>
                        <span>ROI</span>
                        <span>Lifetime Value</span>
                        <span>CPI</span>
                        <span>Social Ads</span>
                      </span>
                        TO GROW YOUR MOBILE BUSINESS 
                    </h1>
                    <h1 class="fittext wite-text">AppXoffer is the world's leading mobile attribution & marketing analytics platform, helping app marketers around the world make better decisions.</h1></br>
          <!-- End Animations Text -->


          <!-- Start Buttons -->
          <a href="#" class="btn-system btn-large"><i class="fa fa-tasks"></i> Check Out Features</a>
          <a href="#" class="btn-system btn-large btn-wite"><i class="fa fa-download"></i> Purchase This Now</a>

        </div>
        <!-- End Section Content -->

      </div>
      <!-- .container -->
    </div>
    <!-- End Purchase Section -->


    <!-- Start Portfolio Section -->
    <div class="section full-width-portfolio" style="border-top:0; border-bottom:0; background:#fff;">

      <!-- Start Big Heading -->
      <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
        <h1>This is Our Latest <strong>Work</strong></h1>
      </div>
      <!-- End Big Heading -->

      <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore
        <br/>veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>


      <!-- Start Recent Projects Carousel -->
      <ul id="portfolio-list" data-animated="fadeIn">
        <li>
          <img src="{{ asset('assets/images/portfolio-1/1.png') }}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Town winter 2013</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
        <li>
          <img src="{{ asset('assets/images/portfolio-1/2.png') }}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Quarterly Musashino</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
        <li>
          <img src="{{ asset('assets/images/portfolio-1/3.png') }}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Mainichi April 2014</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
        <li>
          <img src="{{ asset('assets/images/portfolio-1/4.png') }}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Shitamachi Rocket</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
        <li>
          <img src="{{ asset('assets/images/portfolio-1/5.png') }}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Majesty express vol. 01</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
        <li>
          <img src="{{ asset('assets/images/portfolio-1/6.png') }}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Monocle issue 69</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
        <li>
          <img src="{{ asset('assets/images/portfolio-1/7.png') }}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Monocle issue 69</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
        <li>
          <img src="{{ asset('assets/images/portfolio-1/8.png') }}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Monocle issue 69</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
        <li>
          <img src="{{ asset('assets/images/portfolio-1/9.png') }}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Monocle issue 69</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
        <li>
          <img src="{{ asset('assets/images/portfolio-1/10.png') }}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Monocle issue 69</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
        <li>
          <img src="{{ asset('assets/images/portfolio-1/11.png') }}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Monocle issue 69</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
        <li>
          <img src="{{ asset('assets/images/portfolio-1/12.png') }}" alt="" />
          <div class="portfolio-item-content">
            <span class="header">Monocle issue 69</span>
            <p class="body">web develpment, design</p>
          </div>
          <a href="#"><i class="more">+</i></a>

        </li>
      </ul>

      <!-- End Recent Projects Carousel -->


    </div>
    <!-- End Portfolio Section -->


   
    <!-- Start Team Member Section -->
    <div class="section" style="background:#fff;">
      <div class="container">

        <!-- Start Big Heading -->
        <div class="big-title text-center" data-animation="fadeInDown" data-animation-delay="01">
          <h1>Our Great <strong>Team</strong></h1>
        </div>
        <!-- End Big Heading -->

        <!-- Some Text -->
        <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium <span class="accent-color sh-tooltip" data-placement="right" title="Simple Tooltip">doloremque laudantium</span>, totam rem aperiam, eaque ipsa quae ab illo inventore
          <br/>veritatis et quasi <span class="accent-color sh-tooltip" data-placement="bottom" title="Simple Tooltip">architecto</span> beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.</p>


        <!-- Start Team Members -->
        <div class="row">

          <!-- Start Memebr 1 -->
          <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="03">
            <div class="team-member modern">
              <!-- Memebr Photo, Name & Position -->
              <div class="member-photo">
                <img alt="" src="{{ asset('assets/images/team/face_1.png') }}" />
                <div class="member-name">John Doe <span>Developer</span>
                </div>
              </div>
              <!-- Memebr Words -->
              <div class="member-info">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
              </div>
              <!-- Start Progress Bar 1 -->
              <div class="progress-label">Photoshop</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="96%" data-appear-animation-delay="400">
                  <span class="percentage">96%</span>
                </div>
              </div>
              <!-- Start Progress Bar 2 -->
              <div class="progress-label">Logo Design</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="88%" data-appear-animation-delay="800">
                  <span class="percentage">88%</span>
                </div>
              </div>
              <!-- Start Progress Bar 3 -->
              <div class="progress-label">Vectors Design</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="100%" data-appear-animation-delay="1200">
                  <span class="percentage">100%</span>
                </div>
              </div>
              <!-- Memebr Social Links -->
              <div class="member-socail">
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
          <!-- End Memebr 1 -->

          <!-- Start Memebr 2 -->
          <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="04">
            <div class="team-member modern">
              <!-- Memebr Photo, Name & Position -->
              <div class="member-photo">
                <img alt="" src="{{ asset('assets/images/team/face_2.png') }}" />
                <div class="member-name">Silly Sally <span>Developer</span>
                </div>
              </div>
              <!-- Memebr Words -->
              <div class="member-info">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
              </div>
              <!-- Start Progress Bar 1 -->
              <div class="progress-label">Photoshop</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="96%" data-appear-animation-delay="400">
                  <span class="percentage">96%</span>
                </div>
              </div>
              <!-- Start Progress Bar 2 -->
              <div class="progress-label">Logo Design</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="88%" data-appear-animation-delay="800">
                  <span class="percentage">88%</span>
                </div>
              </div>
              <!-- Start Progress Bar 3 -->
              <div class="progress-label">Vectors Design</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="100%" data-appear-animation-delay="1200">
                  <span class="percentage">100%</span>
                </div>
              </div>
              <!-- Memebr Social Links -->
              <div class="member-socail">
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
          <!-- End Memebr 2 -->

          <!-- Start Memebr 3 -->
          <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="05">
            <div class="team-member modern">
              <!-- Memebr Photo, Name & Position -->
              <div class="member-photo">
                <img alt="" src="{{ asset('assets/images/team/face_3.png') }}" />
                <div class="member-name">Chris John <span>Developer</span>
                </div>
              </div>
              <!-- Memebr Words -->
              <div class="member-info">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
              </div>
              <!-- Start Progress Bar 1 -->
              <div class="progress-label">Photoshop</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="96%" data-appear-animation-delay="400">
                  <span class="percentage">96%</span>
                </div>
              </div>
              <!-- Start Progress Bar 2 -->
              <div class="progress-label">Logo Design</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="94%" data-appear-animation-delay="800">
                  <span class="percentage">94%</span>
                </div>
              </div>
              <!-- Start Progress Bar 3 -->
              <div class="progress-label">Vectors Design</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="90%" data-appear-animation-delay="1200">
                  <span class="percentage">90%</span>
                </div>
              </div>
              <!-- Memebr Social Links -->
              <div class="member-socail">
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
          <!-- End Memebr 3 -->

          <!-- Start Memebr 4 -->
          <div class="col-md-3 col-sm-6 col-xs-12" data-animation="fadeIn" data-animation-delay="06">
            <div class="team-member modern">
              <!-- Memebr Photo, Name & Position -->
              <div class="member-photo">
                <img alt="" src="{{ asset('assets/images/team/face_4.png') }}" />
                <div class="member-name">Sara John <span>Developer</span>
                </div>
              </div>
              <!-- Memebr Words -->
              <div class="member-info">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore fugiat.</p>
              </div>
              <!-- Start Progress Bar 1 -->
              <div class="progress-label">Photoshop</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="96%" data-appear-animation-delay="400">
                  <span class="percentage">96%</span>
                </div>
              </div>
              <!-- Start Progress Bar 2 -->
              <div class="progress-label">Logo Design</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="85%" data-appear-animation-delay="800">
                  <span class="percentage">85%</span>
                </div>
              </div>
              <!-- Start Progress Bar 3 -->
              <div class="progress-label">Vectors Design</div>
              <div class="progress">
                <div class="progress-bar progress-bar-primary" data-progress-animation="100%" data-appear-animation-delay="1200">
                  <span class="percentage">100%</span>
                </div>
              </div>
              <!-- Memebr Social Links -->
              <div class="member-socail">
                <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
                <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                <a class="flickr" href="#"><i class="fa fa-flickr"></i></a>
                <a class="mail" href="#"><i class="fa fa-envelope"></i></a>
              </div>
            </div>
          </div>
          <!-- End Memebr 4 -->

        </div>
        <!-- End Team Members -->

      </div>
      <!-- .container -->
    </div>
    <!-- End Team Member Section -->


    <div id="parallax-one" class="parallax" style="background-image:url({{ asset('assets/images/parallax/bg-02.jpg') }});">
      <div class="parallax-text-container-1">
        <div class="parallax-text-item">
          <div class="container">
            <div class="row">
              <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="counter-item">
                  <i class="fa fa-cloud-upload"></i>
                  <div class="timer" id="item1" data-to="991" data-speed="5000"></div>
                  <h5>Files uploaded</h5>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="counter-item">
                  <i class="fa fa-check"></i>
                  <div class="timer" id="item2" data-to="7394" data-speed="5000"></div>
                  <h5>Projects completed</h5>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="counter-item">
                  <i class="fa fa-code"></i>
                  <div class="timer" id="item3" data-to="18745" data-speed="5000"></div>
                  <h5>Lines of code written</h5>
                </div>
              </div>
              <div class="col-xs-12 col-sm-3 col-md-3">
                <div class="counter-item">
                  <i class="fa fa-male"></i>
                  <div class="timer" id="item4" data-to="8423" data-speed="5000"></div>
                  <h5>Happy clients</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Start Pricing Table Section -->
    <div class=" section pricing-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Start Big Heading -->
            <div class="big-title text-center">
              <h1>We Have Nice Pricing Plans For <strong>You!</strong></h1>
            </div>
            <!-- End Big Heading -->

            <!-- Text -->
            <p class="text-center">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
          </div>
        </div>

        <div class="row pricing-tables">

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="pricing-table">
              <div class="plan-name">
                <h3>Basic</h3>
              </div>
              <div class="plan-price">
                <div class="price-value">$49<span>.00</span></div>
                <div class="interval">per month</div>
              </div>
              <div class="plan-list">
                <ul>
                  <li><strong>40 GB</strong> Storage</li>
                  <li><strong>40GB</strong> Transfer</li>
                  <li><strong>10</strong> Domains</li>
                  <li><strong>20</strong> Projects</li>
                  <li><strong>Free</strong> installation</li>
                </ul>
              </div>
              <div class="plan-signup">
                <a href="#" class="btn-system btn-small">Sign Up Now</a>
              </div>
            </div>
          </div>

          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="pricing-table highlight-plan">
              <div class="plan-name">
                <h3>Advanced</h3>
              </div>
              <div class="plan-price">
                <div class="price-value">$99<span>.00</span></div>
                <div class="interval">per month</div>
              </div>
              <div class="plan-list">
                <ul>
                  <li><strong>40 GB</strong> Storage</li>
                  <li><strong>40GB</strong> Transfer</li>
                  <li><strong>10</strong> Domains</li>
                  <li><strong>20</strong> Projects</li>
                  <li><strong>Free</strong> installation</li>
                </ul>
              </div>
              <div class="plan-signup">
                <a href="#" class="btn-system btn-small border-btn">Sign Up Now</a>
              </div>
            </div>
          </div>


          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="pricing-table">
              <div class="plan-name">
                <h3>Professional</h3>
              </div>
              <div class="plan-price">
                <div class="price-value">$199<span>.00</span></div>
                <div class="interval">per month</div>
              </div>
              <div class="plan-list">
                <ul>
                  <li><strong>40 GB</strong> Storage</li>
                  <li><strong>40GB</strong> Transfer</li>
                  <li><strong>10</strong> Domains</li>
                  <li><strong>20</strong> Projects</li>
                  <li><strong>Free</strong> installation</li>
                </ul>
              </div>
              <div class="plan-signup">
                <a href="#" class="btn-system btn-small">Sign Up Now</a>
              </div>
            </div>
          </div>


          <div class="col-md-3 col-sm-3 col-xs-12">
            <div class="pricing-table">
              <div class="plan-name">
                <h3>Extreme</h3>
              </div>
              <div class="plan-price">
                <div class="price-value">$299<span>.00</span></div>
                <div class="interval">per month</div>
              </div>
              <div class="plan-list">
                <ul>
                  <li><strong>40 GB</strong> Storage</li>
                  <li><strong>40GB</strong> Transfer</li>
                  <li><strong>10</strong> Domains</li>
                  <li><strong>20</strong> Projects</li>
                  <li><strong>Free</strong> installation</li>
                </ul>
              </div>
              <div class="plan-signup">
                <a href="#" class="btn-system btn-small">Sign Up Now</a>
              </div>
            </div>
          </div>


        </div>
      </div>
    </div>
    <!-- End Pricing Table Section -->


    <!-- Start Client/Partner Section -->
    <div class="partner">
      <div class="container">
        <div class="row">

          <!-- Start Big Heading -->
          <div class="big-title text-center">
            <h1>Our Happy <strong>Clients</strong></h1>
            <p class="title-desc">Partners We Work With</p>
          </div>
          <!-- End Big Heading -->

          <!--Start Clients Carousel-->
          <div class="our-clients">
            <div class="clients-carousel custom-carousel touch-carousel navigation-3" data-appeared-items="5" data-navigation="true">

              <!-- Client 1 -->
              <div class="client-item item">
                <a href="#"><img src="{{ asset('assets/images/c1.png') }}" alt="" /></a>
              </div>

              <!-- Client 2 -->
              <div class="client-item item">
                <a href="#"><img src="{{ asset('assets/images/c2.png') }}" alt="" /></a>
              </div>

              <!-- Client 3 -->
              <div class="client-item item">
                <a href="#"><img src="{{ asset('assets/images/c3.png') }}" alt="" /></a>
              </div>

              <!-- Client 4 -->
              <div class="client-item item">
                <a href="#"><img src="{{ asset('assets/images/c4.png') }}" alt="" /></a>
              </div>

              <!-- Client 5 -->
              <div class="client-item item">
                <a href="#"><img src="{{ asset('assets/images/c5.png') }}" alt="" /></a>
              </div>

              <!-- Client 6 -->
              <div class="client-item item">
                <a href="#"><img src="{{ asset('assets/images/c6.png') }}" alt="" /></a>
              </div>

              <!-- Client 7 -->
              <div class="client-item item">
                <a href="#"><img src="{{ asset('assets/images/c7.png') }}" alt="" /></a>
              </div>

              <!-- Client 8 -->
              <div class="client-item item">
                <a href="#"><img src="{{ asset('assets/images/c8.png') }}" alt="" /></a>
              </div>

            </div>
          </div>
          <!-- End Clients Carousel -->
        </div>
        <!-- .row -->
      </div>
      <!-- .container -->
    </div>
    <!-- End Client/Partner Section -->
@include('layouts.footer') 
</body>
</html>

