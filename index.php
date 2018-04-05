<?php
      session_start();
      require_once('db.php');
      if ($conn->connect_errno) {
        printf("Connect failed: %s\n", $conn->connect_error);
        exit();
      }      
      if(isset($_POST)){
          
          if(isset($_POST['sendreply'])) {
          $name = $_POST['name'];
          $email = $_POST['email'];
          $message = $_POST['message'];
          $subject = $_POST['subject'];
          
          $query = "INSERT INTO contact (name, subject, email, message)
          VALUES ('".$name."','".$subject."','".$email."','".$message."')";
          $result = $conn->query($query) ;
          if($result){
            $_SESSION['query'] = "done" ;      
          }
          if(!$result){
            echo "bug";
          }          
          }
          }


?>     
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Ecell||ggsipu</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
  <link rel="shortcut icon" href="img/logo.ico" />
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
  <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/animate.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/events.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.13/semantic.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="css/team.css">
  <!-- =======================================================
    Theme Name: Baker
    Theme URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <style>
.no-js #loader { display: none;  }
.js #loader { display: block; position: absolute; left: 100px; top: 0; }
.se-pre-con {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url(img/Preloader_3.gif) center no-repeat #fff;
}
</style>
</head>

<body>
  <div class="se-pre-con"></div>
  <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
          <nav class="navbar navbar-default navbar-fixed-top">
            <div class="container">
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                  <p><a class="navbar-brand" href="#">e<span class="logo-dec">cell</span></a></p>
              </div>
             
              <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active"><a href="#main-header">Home</a></li>
                  <li class=""><a href="#feature">About</a></li>  
                  <li class=""><a href="#events">events</a></li>
                  <li class=""><a href="#portfolio">Startups</a></li>
                  <li class=""><a href="#testimonial">Testimonial</a></li>
                  <li class=""><a href="#team">Team</a></li>
                  <li class=""><a href="blog.php">Blog</a></li>
                  <li class=""><a href="#contact">Contact Us</a></li>
                </ul>
              </div>
            </div>
          </nav>
        </header>
        <div class="wrapper">
          <div class="container">
            <div class="row">
              <div class="banner-info text-center wow fadeIn delay-05s">
                <h1 class="bnr-title">We are at Ecell GGSIPU</h1>
                <h2 class="bnr-sub-title">Starting a new journey!!</h2>
                <p class="bnr-para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.<br> Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip <br>ex ea commodo consequat.</p>
                <div class="overlay-detail">
                  <a href="#feature"><i class="fa fa-angle-down"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->
    <!---->
    <section id="feature" class="section-padding wow fadeIn delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser01.png">
              </div>
              <h3 class="pad-bt15">Creative Concept</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser02.png">
              </div>
              <h3 class="pad-bt15">Amazing Design</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser03.png">
              </div>
              <h3 class="pad-bt15">Cost effective</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="wrap-item text-center">
              <div class="item-img">
                <img src="img/ser04.png">
              </div>
              <h3 class="pad-bt15">Secure</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <!---->
    <section id="service" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">What We Do?</h2>
            <p class="sub-title pad-bt15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore magna aliqua.</p>
            <hr class="bottom-line">
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>D</span>esign And Developement</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="">learn more...</a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>W</span>ebsite Maintenance</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="">learn more...</a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>S</span>eo Optimization</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="">learn more...</a>
            </div>
          </div>
          <div class="col-md-3 col-sm-6 col-xs-12">
            <div class="service-item">
              <h3><span>D</span>igital Marketing</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <a href="">Learn more...</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!---->
    <section id="events" class="events">
      <div class="u-center-text u-margin-bottom-big">
        <h2 class="heading-secondary">Upcoming events</h2>
      </div>
      <div class="section group">
        <div class="col span_1_of_3">
          <div class="card">
            <div class="card__side card__side--front card__side--front-1">
                <div class="card__picture card__picture-1">
                  &nbsp;
                </div>
                <h4 class="card__heading">
                  <span class="card__heading-span card__heading-span--1">vad vivad</span>
                </h4>
                <div class="card__details">
                  <ul>
                    <li>28th MARCH</li>
                    <li>10:30 AM</li>
                    <li>E BLOCK AUDI</li>
                    <li>2 MEMBERS TEAM</li>                    
                  </ul>
                </div>
            </div>
            <div class="card__side card__side--back card__side--back-1">
              <div class="card__cta">
                <div class="card__header">
                  <p class="card__heading--min">ecell</p>
                  <p class="card__heading--max">zenith</p>
                </div>
              <a href="#" class="btn btn--white">Book Now!</a>  
              </div>
            </div>
          </div>
        </div>
        <div class="col span_1_of_3">
          <div class="card">
              <div class="card__side card__side--front card__side--front-2">
                  <div class="card__picture card__picture-2">
                    &nbsp;
                  </div>
                  <h4 class="card__heading">
                    <span class="card__heading-span card__heading-span--2">whiz quiz</span>
                  </h4>
                  <div class="card__details">
                    <ul>
                      <li>28th MARCH</li>
                      <li>10:30 AM</li>
                      <li>E BLOCK AUDI</li>
                      <li>2 MEMBERS TEAM</li>                    
                    </ul>
                  </div>
              </div>
              <div class="card__side card__side--back card__side--back-2">
                <div class="card__cta">
                  <div class="card__header">
                    <p class="card__heading--min">ecell</p>
                    <p class="card__heading--max">zenith</p>
                  </div>
                <a href="#" class="btn btn--white">Book Now!</a>  
                </div>
              </div>
          </div>
        </div>
        <div class="col span_1_of_3">
          <div class="card">
              <div class="card__side card__side--front card__side--front-3">
                  <div class="card__picture card__picture-3">
                    &nbsp;
                  </div>
                  <h4 class="card__heading">
                    <span class="card__heading-span card__heading-span--3">illuminate</span>
                  </h4>
                  <div class="card__details">
                    <ul>
                      <li>28th MARCH</li>
                      <li>10:30 AM</li>
                      <li>E BLOCK AUDI</li>
                      <li>2 MEMBERS TEAM</li>                    
                    </ul>
                  </div>
              </div>
              <div class="card__side card__side--back card__side--back-3">
                <div class="card__cta">
                  <div class="card__header">
                    <p class="card__heading--min">ecell</p>
                    <p class="card__heading--max">zenith</p>
                  </div>
                <a href="#" class="btn btn--white">Book Now!</a>  
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <!---->
    <!---->
    <!---->
    <section id="portfolio" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15 heading-secondary">Our Recent Startups</h2>
            <!-- <p class="sub-title pad-bt15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore magna aliqua.</p> -->
            <hr class="bottom-line">
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <figure>
              <img src="img/s1.png" class="startup-img img-responsive">
              <figcaption class="figcaption-1">
                <h2 class="startup__header">Xampaperz</h2>
                <p class="startup__detail">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>                 
                <a href="http://www.xampaperz.com" target="_blank" class="btn btn--white">EXPLORE US!</a>  
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <figure>
              <img src="img/s2.png" class="startup-img">
              <figcaption class="figcaption-2">
                <h2>junksquare</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                <a href="http://junksquare.com" target="_blank" class="btn btn--white">EXPLORE US!</a>  
              </figcaption>
            </figure>
          </div>
          <div class="col-md-4 col-sm-6 col-xs-12 portfolio-item padding-right-zero mr-btn-15">
            <figure>
              <img src="img/s3.png" class="startup-img">
              <figcaption class="figcaption-3">
                <h2>News HQ</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nost.</p>
                <a href="http://newshq.io/" target="_blank" class="btn btn--white">EXPLORE US!</a>  
              </figcaption>
            </figure>
          </div>
        </div>
      </div>
    </section>
    
    <section id="testimonial">
        <div class="author-quote-wrap">
            <input class="toggle-quote" type="radio" id="AQ-1" name="quote" checked>
            <div class="author-quote">
              <div class="pull-left author-photo photo-a animated bounceInLeft">
                <div class="navigate">
                  <label class="label left" for="AQ-5">&nbsp;</label>
                  <label class="label right" for="AQ-2">&nbsp;</label>
                </div>
              </div>
              <div class="pull-right quote-content">
                <div class="clearfix animated zoomIn"><div class="quote-like pull-right"><span class="love"></span> 423</div></div>
                <div class="quote-text animated rotateInDownRight">Scale is important<br>for a startup.<br>Think big, but<br>take one day<br>at a time.</div>
                <div class="quote-author animated lightSpeedIn">kunal bahl (snapdeal)</div>
              </div>
            </div>
          
            <input class="toggle-quote" type="radio" id="AQ-2" name="quote">
            <div class="author-quote">
              <div class="pull-left author-photo photo-b animated bounceInLeft">
                <div class="navigate">
                  <label class="label left" for="AQ-1">&nbsp;</label>
                  <label class="label right" for="AQ-3">&nbsp;</label>
                </div>
              </div>
              <div class="pull-right quote-content">
                <div class="clearfix animated zoomIn"><div class="quote-like pull-right"><span class="love"></span> 512</div></div>
                <div class="quote-text animated zoomInDown">Be so sharp<br>in your skills<br>that you<br>cut deep.</div>
                <div class="quote-author animated lightSpeedIn">Vijay shekhar sharma (paytm)</div>
              </div>
            </div>
          
            <input class="toggle-quote" type="radio" id="AQ-3" name="quote">
            <div class="author-quote">
              <div class="pull-left author-photo photo-c animated bounceInLeft">
                <div class="navigate">
                  <label class="label left" for="AQ-2">&nbsp;</label>
                  <label class="label right" for="AQ-4">&nbsp;</label>
                </div>
              </div>
              <div class="pull-right quote-content">
                <div class="clearfix animated zoomIn"><div class="quote-like pull-right"><span class="love"></span> 618</div></div>
                <div class="quote-text animated bounceInRight">The goal has always  <br>been about <br> solving <br> a problem we <br>deeply care about.</div>
                <div class="quote-author animated lightSpeedIn">Shashank nd (practo)</div>
              </div>
            </div>
          
            <input class="toggle-quote" type="radio" id="AQ-4" name="quote">
            <div class="author-quote">
              <div class="pull-left author-photo photo-d animated bounceInLeft">
                <div class="navigate">
                  <label class="label left" for="AQ-3">&nbsp;</label>
                  <label class="label right" for="AQ-5">&nbsp;</label>
                </div>
              </div>
              <div class="pull-right quote-content">
                <div class="clearfix animated zoomIn"><div class="quote-like pull-right"><span class="love"></span> 741</div></div>
                <div class="quote-text animated lightSpeedIn">life's purpose is<br>to be happy! <br>so if you're happy <br>in life, you're<br>successful in life.</div>
                <div class="quote-author animated lightSpeedIn">rahul yadav (housing)</div>
              </div>
            </div>
          
            <input class="toggle-quote" type="radio" id="AQ-5" name="quote">
            <div class="author-quote">
              <div class="pull-left author-photo photo-e animated bounceInLeft">
                <div class="navigate">
                  <label class="label left" for="AQ-4">&nbsp;</label>
                  <label class="label right" for="AQ-1">&nbsp;</label>
                </div>
              </div>
              <div class="pull-right quote-content">
                <div class="clearfix animated zoomIn"><div class="quote-like pull-right"><span class="love"></span> 824</div></div>
                <div class="quote-text animated flipInX">Don’t start out alone.<br>it helps to have<br>a co-founder when <br>things are not <br>going your way.</div>
                <div class="quote-author animated lightSpeedIn">Sachin bansal (flipkart)</div>
              </div>
            </div>
          </div>
    </section>
        <!---->
    <section id="team">
        <h2 class="team">team</h2>
        <div class="slider--teams">
            <div class="slider--teams__team">
              <ul id="list" class="cf">
                
                <li>
                  <figure class="active">
                    <div>
                      <div></div>
                    </div>
                    <figcaption>
                      <h2>Billie</h2>
                      <p>(Head of Team)</p>
                      <a class="message" href="#"><i class="facebook icon"></i></a>
                      <a class="message" href="#"><i class="linkedin icon"></i></a>

                    </figcaption>
                  </figure>
                </li>
                
                <li>
                  <figure>
                    <div>
                      <div></div>
                    </div>
                    <figcaption>
                      <h2>Roger</h2>
                      <p>(Art Director)</p>
                      <a class="message" href="#"><i class="facebook icon"></i></a>
                      <a class="message" href="#"><i class="linkedin icon"></i></a>
                    </figcaption>
                  </figure>
                </li>
                
                <li>
                  <figure>
                    <div>
                      <div></div>
                    </div>
                    <figcaption>
                      <h2>Wendy</h2>
                      <p>(Designer)</p>
                      <a class="message" href="#"><i class="facebook icon"></i></a>
                      <a class="message" href="#"><i class="linkedin icon"></i></a>
                    </figcaption>
                  </figure>
                </li>
                
                <li>
                  <figure>
                    <div>
                      <div></div>
                    </div>
                    <figcaption>
                      <h2>Bill</h2>
                      <p>(Development)</p>
                      <a class="message" href="#"><i class="facebook icon"></i></a>
                      <a class="message" href="#"><i class="linkedin icon"></i></a>
                    </figcaption>
                  </figure>
                </li>
                
                <li>
                  <figure>
                    <div>
                      <div></div> 
                    </div>
                    <figcaption>
                      <h2>Lorraine</h2>
                      <p>(Front-End Development)</p>
                      <a class="message" href="#"><i class="facebook icon"></i></a>
                      <a class="message" href="#"><i class="linkedin icon"></i></a>
                    </figcaption>
                  </figure>
                </li>
                
                <li>
                  <figure>
                    <div>
                      <div></div> 
                    </div>
                    <figcaption>
                      <h2>Wesley</h2>
                      <p>(Marketing Lead)</p>
                      <a class="message" href="#"><i class="facebook icon"></i></a>
                      <a class="message" href="#"><i class="linkedin icon"></i></a>
                    </figcaption>
                  </figure>
                </li>

              </ul>
            </div>
          </div>
      </section>
    <!---->
    
    <!---->
    <section id="contact" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center white">
            <h2 class="service-title contact-header pad-bt15">Keep in touch with us</h2>
            <p class="sub-title contact-header pad-bt15">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore magna aliqua.</p>
            <hr class="bottom-line white-bg">
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="logo-box">
                <img src="img/logo.ico" alt="Logo" class= "logo">
            </div>
            <a href="#" class="fa fa-facebook"></a>
            <a href="#" class="fa fa-google"></a>
            <a href="#" class="fa fa-linkedin"></a>
            <a href="#" class="fa fa-instagram"></a>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div>
              <?php 
                if(isset($_SESSION)){ if(isset($_SESSION['query']))  { if($_SESSION['query']=="done") { $_SESSION['query']="ok"; ?> <div class="alert alert-success">your message is sent</div> <?php }}} ?>
              <div id="errormessage"></div>
              <form method="post">
                <div class="col-md-6 padding-right-zero">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required/>
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required />
                    <div class="validation"></div>
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                    <div class="validation"></div>
                  </div>
                  <input type="submit" class="btn btn-primary btn-submit" name="sendreply" value="SEND NOW">
                </div>
              </form>
        </div>
      </div>  
    </section>   
    <!-- FOOTER -->
    <footer id="footer">
      <div class="container">
        <div class="row text-center">
          <p class="footer-message">&copy; Ecell. All Rights Reserved.</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Baker
            -->
          </div>
        </div>
      </div>
    </footer>
    <!---->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/jquery.bxslider.min.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.1.0/velocity.min.js'></script>
  <script src="js/team.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
<script>

  $(window).load(function() {
    
    $(".se-pre-con").fadeOut("slow");;
  });
</script>
</body>
</html>
