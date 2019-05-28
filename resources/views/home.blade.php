<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LGS - Lords Gate Montessori </title>
    <link rel="shortcut icon" href="{{'images/logo.ico'}}" />

    <!-- Bootstrap core CSS -->
    <link href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{URL::asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="{{URL::asset('css/agency.min.css')}}" rel="stylesheet">

    <style>
      nav{
        background-color: black; 
      }
    </style>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav style="background-color: black;" class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img style = "width: 50px; height: 50px;" src = "{{'images/logo.png'}}" />
          Lords Gate Montessori
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Campus</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio">Events</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
            <li class= "nav-item">
			  <a class = "nav-link js-scroll-trigger" href = "#careers"> Careers</a>
			</li>
			<li class = "nav-item">
			  <a class = "nav-link js-scroll-trigger" href= "#youtube-channel"> LordsGate TV</a>
			</li>
			
			<li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">{{$welcome_text}}</div>
          <div class="intro-heading text-uppercase">{{$intro_text}}</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">{{$button_text}}</a>
        </div>
      </div>
    </header>

    <!-- Services -->
    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Campuses</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row text-center">
          
          <div class="col-md-6">
  			    <img class = "img-fluid" src = "{{URL::asset('images/campus1.jpg')}}" />
            <h4 class="service-heading"> {{$campus_name1}} </h4>
            <p class="text-muted">{{$campus_description1}}</p>
          </div>
          <div class = "col-md-6">
		     	  <img class = "img-fluid" src = "{{URL::asset('images/campus2.jpg')}}" />
            <h4 class="service-heading"> {{$campus_name2}} </h4>
            <p class="text-muted">{{$campus_description2}}</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Events Grid -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Events </h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>

       {{-- @foreach($events as $event) --}} 
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-image fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{URL::asset('images/portfolio/cheer_leading.jpg')}}" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Cheer Leading Competition</h4>
              <p class="text-muted">Illustration</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-image fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{URL::asset('images/portfolio/prefects.jpg')}}" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Prefects Day </h4>
              <p class="text-muted">Get The Maths Right.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fas fa-image fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="{{URL::asset('images/portfolio/staff_love.jpg')}}" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>Staff Love Day</h4>
              <p class="text-muted">Celebrate The World.</p>
            </div>
          </div>
          
        </div>
        {{-- @endforeach --}}

      </div>
    </section>

    <!-- About -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">About</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        @foreach( $abouts as $about_detail)
        <div class="row">
          <div class="col-lg-12">
            <ul class="timeline">
              <li>
                <div class="timeline-image">
                  <img class="rounded-circle img-fluid" src="{{URL::asset('images/about/1.jpg')}}" alt="">
                </div>
                <div class="timeline-panel">
                  <div class="timeline-heading">
                    <h4>{{$about_detail->year_range}}</h4>
                    <h4 class="subheading">{{$about_detail->year_heading}}</h4>
                  </div>
                  <div class="timeline-body">
                    <p class="text-muted">{{$about_detail->year_description}}</p>
                  </div>
                </div>
              </li>
              @endforeach
              <li class="timeline-inverted">
                <div class="timeline-image">
                  <h4>Be Part
                    <br>Of Our
                    <br>Story!</h4>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
        @foreach($teams as $team)
          <div class="col-sm-4">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="{{URL::asset('images/team/1.jpg')}}" alt="">
              <h4>{!! $team -> staff_name !!}</h4>
              <p class="text-muted">{!! $team -> staff_role !!}</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section>

    <!-- Clients -->
    <section class="py-5" style = "background-color:#212529; margin-bottom: 10px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 text-center">
            <a href="#" class = "text-center">
					
				<h5>"We were all correct."</h5>
            </a>
          </div>
        </div>
      </div>
    </section>

 <!-- Carreers -->
    <section id="careers">
      <div class="container" style = "background-color:white; ">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Careers</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Position Applying For *" required="required" data-validation-required-message="Please Enter The Position">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
				          
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Age *" required="required" data-validation-required-message="Please Enter your age">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class = "form-group">
                    <input class = "form-control" id = "CV" type = "file"/>
                    <p class = "help-block text-danger"></p>
                  </div>

                  <div class = "form-group">
                    <input class = "form-control" id = "cover_letter" type = "file"/>
                    <p class = "help-block text-danger"></p>
                  </div>
                </div>
                

                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Submit</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

  <!-- Youtube Channel -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row" id = "youtube-channel" >
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Youtube Videos </h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>

        <div class="row">
        @foreach($youtubes as $youtube)
          <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#youtubeModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-play fa-3x"></i>
                </div>
              </div>
		      <!---  <iframe style = "width: 99.9%; " height = "350" src="https://www.youtube.com/embed/8OERJQ4ssoU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>			  
			  !-->
          <img class="img-fluid" src="/images/portfolio/{{ $youtube->display_image }}" alt="">
            </a>
            <div class="portfolio-caption">
              <h4>{{ $youtube->video_name }}</h4>
              <p class="text-muted">{{ $youtube->image_description }}</p>
            </div>
          </div>
        @endforeach
      </div>       
      </div>
      </div>
    </section>
	
    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contact Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <form id="contactForm" name="sentMessage" novalidate="novalidate">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                    <p class="help-block text-danger"></p>
                  </div>
                  <div class="form-group">
                    <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                    <p class="help-block text-danger"></p>
                  </div>
                </div>
                <div class="clearfix"></div>
                <div class="col-lg-12 text-center">
                  <div id="success"></div>
                  <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Lords Gate 2019</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a target= "_blank" href="https://www.facebook.com/pages/category/Education/Lordsgate-Schools-888177694540798/">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h3 class="text-uppercase">Event Name</h3>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
				  <div class= "container">
					<div class="row">
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/cheer_6.jpg')}}"alt="">
						</a>
						
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal" >
						  
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/cheer_1.jpg')}}" alt="">
						</a>
						
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/cheer_2.jpg')}}" alt="">
						</a>
					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/cheer_3.jpg')}}" alt="">
						</a>
					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal" >
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/cheer_4.jpg')}}" alt="">
						</a>					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/cheer_5.jpg')}}" alt="">
						</a>
						
					  </div>
					</div>
				  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <b>27 June 1998</b></p>
                 
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-calendar-check-o"></i>
                    More Events</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	 <!-- Youtube Modal 1-->
    <div class="portfolio-modal modal fade" id="youtubeModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
              <div class="col-lg-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h3 class="text-uppercase">Video Name</h3>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
				  
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/8OERJQ4ssoU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <b>27 June 1998</b></p>
                 
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-calendar-check-o"></i>
                    More Events</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h3 class="text-uppercase">Event Name</h3>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
				  <div class= "container">
					<div class="row">
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/prefect/prefect_1.jpg')}}" alt="">
						</a>
						
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal" >
						  
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/prefect/prefect_2.jpg')}}" alt="">
						</a>
						
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/prefect/prefect_3.jpg')}}" alt="">
						</a>
					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/prefect/prefect_4.jpg')}}" alt="">
						</a>
					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal" >
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/prefect/prefect_5.jpg')}}" alt="">
						</a>					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/prefect/prefect_6.jpg')}}" alt="">
						</a>
						
					  </div>
					</div>
				  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <b>27 June 1998</b></p>
                 
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-calendar-check-o"></i>
                    More Events</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

 <!-- Youtube Modal 2-->
    <div class="portfolio-modal modal fade" id="youtubeModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
              <div class="col-lg-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h3 class="text-uppercase">Video Name</h3>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
				  
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/8OERJQ4ssoU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <b>27 June 1998</b></p>
                 
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-calendar-check-o"></i>
                    More Events</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h3 class="text-uppercase">Event Name</h3>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
				  <div class= "container">
					<div class="row">
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/staff/staff_1.jpg')}}" alt="">
						</a>
						
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal" >
						  
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/staff/staff_2.jpg')}}" alt="">
						</a>
						
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/staff/staff_3.jpg')}}" alt="">
						</a>
					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/staff/staff_4.jpg')}}"alt="">
						</a>
					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal" >
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/staff/staff_5.jpg')}}" alt="">
						</a>					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/staff/staff_6.jpg')}}" alt="">
						</a>
						
					  </div>
					</div>
				  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <b>27 June 1998</b></p>
                 
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-calendar-check-o"></i>
                    More Events</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Youtube Modal 3-->
    <div class="portfolio-modal modal fade" id="youtubeModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
              <div class="col-lg-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h3 class="text-uppercase">Video Name</h3>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
				  
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/8OERJQ4ssoU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <b>27 June 1998</b></p>
                 
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-calendar-check-o"></i>
                    More Events</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h3 class="text-uppercase">Event Name</h3>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
				  <div class= "container">
					<div class="row">
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/01-thumbnail.jpg')}}" alt="">
						</a>
						
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal" >
						  
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/02-thumbnail.jpg')}}" alt="">
						</a>
						
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/03-thumbnail.jpg')}}" alt="">
						</a>
					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/04-thumbnail.jpg')}}" alt="">
						</a>
					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal" >
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/05-thumbnail.jpg')}}" alt="">
						</a>					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/06-thumbnail.jpg')}}" alt="">
						</a>
						
					  </div>
					</div>
				  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <b>27 June 1998</b></p>
                 
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-calendar-check-o"></i>
                    More Events</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	<!-- Youtube Modal 4-->
    <div class="portfolio-modal modal fade" id="youtubeModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
              <div class="col-lg-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h3 class="text-uppercase">Video Name</h3>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
				  
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/8OERJQ4ssoU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <b>27 June 1998</b></p>
                 
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-calendar-check-o"></i>
                    More Events</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h3 class="text-uppercase">Event Name</h3>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
				  <div class= "container">
					<div class="row">
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/01-thumbnail.jpg')}}" alt="">
						</a>
						
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal" >
						  
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/02-thumbnail.jpg')}}" alt="">
						</a>
						
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/03-thumbnail.jpg')}}" alt="">
						</a>
					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/04-thumbnail.jpg')}}" alt="">
						</a>
					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal" >
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/05-thumbnail.jpg')}}" alt="">
						</a>					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/06-thumbnail.jpg')}}" alt="">
						</a>
						
					  </div>
					</div>
				  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <b>27 June 1998</b></p>
                 
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-calendar-check-o"></i>
                    More Events</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- Youtube Modal 5-->
    <div class="portfolio-modal modal fade" id="youtubeModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
              <div class="col-lg-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h3 class="text-uppercase">Event Name</h3>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
				  
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/8OERJQ4ssoU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <b>27 June 1998</b></p>
                 
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-calendar-check-o"></i>
                    More Events</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
       <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h3 class="text-uppercase">Event Name</h3>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
				  <div class= "container">
					<div class="row">
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/01-thumbnail.jpg')}}" alt="">
						</a>
						
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal" >
						  
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/02-thumbnail.jpg')}}" alt="">
						</a>
						
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/03-thumbnail.jpg')}}" alt="">
						</a>
					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/04-thumbnail.jpg')}}" alt="">
						</a>
					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal" >
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/05-thumbnail.jpg')}}" alt="">
						</a>					   
					  </div>
					  <div class="col-md-4 col-sm-6 portfolio-item">
						<a class="portfolio-link" data-toggle="modal">
						 
						  <img class="img-fluid" src="{{URL::asset('images/portfolio/06-thumbnail.jpg')}}" alt="">
						</a>
						
					  </div>
					</div>
				  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <b>27 June 1998</b></p>
                 
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-calendar-check-o"></i>
                    More Events</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
	
	<!-- Youtube Modal 6-->
    <div class="portfolio-modal modal fade" id="youtubeModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
              <div class="col-lg-12 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h3 class="text-uppercase">Event Name</h3>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
				  
				  <iframe width="560" height="315" src="https://www.youtube.com/embed/8OERJQ4ssoU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

				  </div>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. <b>27 June 1998</b></p>
                 
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fas fa-calendar-check-o"></i>
                    More Events</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{URL::asset('vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{URL::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{URL::asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Contact form JavaScript -->
    <script src="{{URL::asset('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{URL::asset('js/contact_me.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{URL::asset('js/agency.min.js')}}"></script>

  </body>

</html>
