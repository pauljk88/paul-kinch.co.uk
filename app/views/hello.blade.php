@extends('layouts.master')

@section('nav-row')
	<div class="nav-row">
		<nav class="large-12 large-centered column">
			<ul class="top-nav large-6 large-centered column no-margin">
				<div class="top-nav-left large-5 medium-12 small-12 columns no-padding">
					<li class="no-margin no-padding large-6 small-6 columns">{{ HTML::link('#Biography', 'Biography', array( 'class' => 'nav-item' ))}}</li>
					<li class="no-margin no-padding large-6 small-6 columns">{{ HTML::link('#Experience', 'Experience', array( 'class' => 'nav-item' ))}}</li>
				</div>
				<div class="top-nav-right large-7 medium-12 small-12 columns ">
					<li class="no-margin no-padding large-4 small-4 columns">{{ HTML::link('#Tools', 'Tools', array( 'class' => 'nav-item' ))}}</li>
					<li class="no-margin no-padding large-4 small-4 columns">{{ HTML::link('#Projects', 'Projects', array( 'class' => 'nav-item' ))}}</li>
					<li class="no-margin no-padding large-4 small-4 columns">{{ HTML::link('#Contact', 'Contact', array( 'class' => 'nav-item' ))}}</li>
				</div>
			</ul>
		</nav>
	</div>
	<div class="parallax-row">
		<div class="parallax-background">
		  <div class="intro-text">
		    <p>My picture here, with background and opacity</p>
		    <a href="#Contact" class="smooth-scroll">Find my info</a>
		  </div>
		</div>
	</div>

@stop

@section('bio-row')
	<section class="bio-row" id="Biography">
		<div class="row">
		<h2>Bio</h2>
			<p>After earning my BTEC diploma at College and then further studies at University, to obtain my degree in Web and Graphic design, my main objective was to secure employment, to gain experience in this field. I now wish to expand my knowledge and apply my skills into other areas of IT solutions and software development.</p>
		</div>
	</section>
@stop

@section('experience-row')
	<section class="experience-row" id="Experience">
		<div class="row">
		<h2>Experience</h2>
			<p>I currently work at Dentalserve, a dental company which comprises the following companies: Costech Elite, Nash Smile Centre, SaberToothWhite System, Comflexin Dentures and HealthCare Elite Dental Centre.</p>
			<div class="large-6 column">
				Web Design
			</div>
			<div class="large-6 column">
				Web Development
			</div>
			<div class="large-6 column">
				SEO
			</div>
			<div class="large-6 column">
				Responsive Web Design
			</div>

		</div>
	</section>
	<section class="tools-row" id="Tools">
		<div class="row">	
			<h2>Tools</h2>
				<p>At Dentalserve, I create and maintain all the websites using: HTML(5), CSS, SASS/SCSS, PHP 4/5, Laravel, ASP.NET, MySQL, JavaScript, JQuery and Angular JS. Tracking the develop of each project using Git and following design principles such as DRY and TTD to produce efficient maintainable code.</p>
		</div>
		<div class="row">
			<div class="large-6 column no-padding">
			<h2>Skills</h2>
				<ul class="large-12 column large-centered" style="list-style:none;">
				  <li>
				    <ul class="accordion" data-accordion="myAccordionGroup">
				      <li class="accordion-navigation">
				        <a href="#panel1c">Name of a Tool 1</a>
				        <div id="panel1c" class="content">
				        <div class="row">
				        	<div class="large-4 column">
				        	{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
				        	</div>
				        	<div class="large-8 column"> Display Icon and its use
				        	</div>
				        </div>
				        </div>
				      </li>
				      <li class="accordion-navigation">
				        <a href="#panel2c">Name of a Tool 2</a>
				        <div id="panel2c" class="content">
				        <div class="row">
				        	<div class="large-4 column">
				        	{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
				        	</div>
				        	<div class="large-8 column"> Display Icon and its use
				        	</div>
				        </div>
				        </div>
				      </li>
				      <li class="accordion-navigation">
				        <a href="#panel3c">Name of a Tool 3</a>
				        <div id="panel3c" class="content">
				        <div class="row">
				        	<div class="large-4 column">
				        	{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
				        	</div>
				        	<div class="large-8 column"> Display Icon and its use
				        	</div>
				        </div>
				        </div>
				      </li>
				    </ul>
				  </li>
				</ul>
			</div>
			<div class="large-6 column no-padding">
			<h2>Services</h2>
				<ul class="large-12 column large-centered" style="list-style:none;">
				  <li>
				    <ul class="accordion" data-accordion="myAccordionGroup2">
				      <li class="accordion-navigation">
				        <a href="#panel4c">Name of a Tool 4</a>
				        <div id="panel4c" class="content">
				        <div class="row">
				        	<div class="large-4 column">
				        	{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
				        	</div>
				        	<div class="large-8 column"> Display Icon and its use
				        	</div>
				        </div>
				        </div>
				      </li>
				      <li class="accordion-navigation">
				        <a href="#panel5c">Name of a Tool 5</a>
				        <div id="panel5c" class="content">
				        <div class="row">
				        	<div class="large-4 column">
				        	{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
				        	</div>
				        	<div class="large-8 column"> Display Icon and its use
				        	</div>
				        </div>
				        </div>
				      </li>
				      <li class="accordion-navigation">
				        <a href="#panel6c">Name of a Tool 6</a>
				        <div id="panel6c" class="content">
				        <div class="row">
				        	<div class="large-4 column">
				        	{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
				        	</div>
				        	<div class="large-8 column"> Display Icon and its use
				        	</div>
				        </div>
				        </div>
				      </li>
				    </ul>
				  </li>
				</ul>
			</div>
		</div>
	</section>
	<section class="projects-row" id="Projects">
		<div class="row">
		<h2>Projects</h2>
		<p>Bacon ipsum dolor sit amet chicken pork loin hamburger ball tip, swine tenderloin salami meatball boudin tri-tip fatback shank bacon. Pork salami kevin, brisket spare ribs strip steak ham hock porchetta. Pork belly short loin tail porchetta. Pork pig meatball, beef ribs doner jerky tri-tip hamburger filet mignon strip steak ball tip ham tail tongue corned beef.</p>
		</div>
	</section>
@stop

@section('contact-row')
	<section class="contact-row" id="Contact">
		<div class="row">
			<h2>Contact</h2>
			<div class="contact-container ">
				<hr>
				<div class="row">
					<div class="large-12 columns large-centered">
						{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
						{{ HTML::link('../downloads/paul-james-kinch-cv.pdf', 'Curriculum Vitae')}}
					</div>
					<div class="large-6 columns left">
						{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
						{{ HTML::link('mailto:pauljk1988@gmail.com', 'Email - pauljk1988@gmail.com')}}
					</div>
					<div class="large-6 columns left">
						{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
						{{ HTML::link('tel:07970271781', 'Mobile - 07970271781')}}
					</div>
					<div class="large-6 columns left">
						{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
						{{ HTML::link('https://bitbucket.org/pauljk88/paul-kinch.co.uk', 'BitBucket')}}

					</div>
					<div class="large-6 columns left">
						{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
						{{ HTML::link('https://github.com/pauljk88/paul-kinch.co.uk', 'GitHub')}}
					</div>
				</div>
				<hr>
			</div>
		</div>
	</section>
	<div class="copyright">Site content Copyright &copy; <?php echo date("Y"); ?> Paul Kinch.</div>
@stop