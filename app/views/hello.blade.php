@extends('layouts.master')

@section('nav-row')
	<div class="nav-row">
		<nav class="large-12 large-centered column">
			<ul class="top-nav large-6 large-centered column no-margin">
				<div class="top-nav-right large-12 medium-12 small-12 columns ">
					<li class="no-margin no-padding large-3 small-3 columns">{{ HTML::link('#Biography', 'Biography', array( 'class' => 'nav-item' ))}}</li>
					<li class="no-margin no-padding large-3 small-3 columns">{{ HTML::link('#Tools', 'Tools', array( 'class' => 'nav-item' ))}}</li>
					<li class="no-margin no-padding large-3 small-3 columns">{{ HTML::link('#Projects', 'Projects', array( 'class' => 'nav-item' ))}}</li>
					<li class="no-margin no-padding large-3 small-3 columns">{{ HTML::link('#Contact', 'Contact', array( 'class' => 'nav-item' ))}}</li>
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
		<div class="large-3 column">
			{{ HTML::image('../images/profile-background.svg', 'Biography', array( 'class' => 'nav-item' ))}}
		</div>
		<div class="large-9 column">
			<p>My name is Paul Kinch, I'm a Web Developer, Web Designer, focusing primarily on the Front-end Development with enough knowledge to get me by in Back-end Developemnt.</p>
			<p>After earning my BTEC diploma at College and then further studies at University, to obtain my degree in Web and Graphic design, my main objective was to secure employment, to gain experience in this field. I now wish to expand my knowledge and apply my skills into other areas of IT solutions and software development.</p>
		</div>
		</div>
	</section>
@stop

@section('experience-row')
	<section class="tools-row" id="Tools">
		<div class="row">	
			<h2>Tools &amp; Experience</h2>
				<p>All of these tools I have used within a working environment, under tight deadlines and as a team, this list is also not exshautive. Tracking the develop of each project using Git and following design principles such as DRY and TTD to produce efficient maintainable code.</p>
		</div>
		<div class="row">
			<div class="large-6 column no-padding">
				<ul class="large-12 column large-centered" style="list-style:none;">
				  <li>
				    <ul class="accordion" data-accordion="myAccordionGroup">
				    <li class="accordion-navigation">
				        <a href="#panel1c">Git, Grunt, Gulp<span class="competence">Confident / Capable</a>
				        <div id="panel1c" class="content">
				        <div class="row">
				        	<div class="large-2 column">
				        	{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
				        	</div>
				        	<div class="large-10 column">
				        	<p>Through my experience on setting up Web Projects, I have used Git, BitBucket, Forge and Shippable to track my work flow and push content to live.</p>
				        	<p>I am also familar with Nodejs, Grunt and Gulp to package up my websites for fast and easier development</p>
				        	</div>
				        </div>
				        </div>
				      </li>
				      <li class="accordion-navigation">
				        <a href="#panel2c">XHTML, Foundation<span class="competence">Confident</a>
				        <div id="panel2c" class="content">
				        <div class="row">
				        	<div class="large-2 column">
				        	{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
				        	</div>
				        	<div class="large-10 column"> 
				        		I predominately work with Frameworks, notebly with the {{ HTML::link('#', 'Foundation Framework ')}}to form the base structure for most of my websites.</br>
				        		I have also started to look into {{ HTML::link('#', 'View.js')}} for some side Projects.
				        	</div>
				        </div>
				        </div>
				      </li>
				      <li class="accordion-navigation">
				        <a href="#panel3c">CSS, SASS/SCSS<span class="competence">Confident</a>
				        <div id="panel3c" class="content">
				        <div class="row">
				        	<div class="large-2 column">
				        	{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
				        	</div>
				        	<div class="large-10 column">I have been using {{ HTML::link('#', 'SASS')}} since 2012 and have not looked back. All of my projects use SASS and would not be complete without it.
				        	</div>
				        </div>
				        </div>
				      </li>
				      <li class="accordion-navigation">
				        <a href="#panel4c">JS, JQuery, Angular<span class="competence">Capable</a>
				        <div id="panel4c" class="content">
				        <div class="row">
				        	<div class="large-2 column">
				        	{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
				        	</div>
				        	<div class="large-10 column"> I have used JS for a variety of situations, mostly for low-end visuals. But I have recently started to look into larger Frameworks such as {{ HTML::link('#', 'Angular.js')}}
				        	</div>
				        </div>
				        </div>
				      </li>
				    </ul>
				  </li>
				</ul>
			</div>
			<div class="large-6 column no-padding">
				<ul class="large-12 column large-centered" style="list-style:none;">
				  <li>
				    <ul class="accordion" data-accordion="myAccordionGroup2">
				      <li class="accordion-navigation">
				        <a href="#panel5c">PHP, Laravel<span class="competence">Capable</a>
				        <div id="panel5c" class="content">
				        <div class="row">
				        	<div class="large-2 column">
				        	{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
				        	</div>
				        	<div class="large-10 column">From 2013, all my projects have had a {{ HTML::link('#', 'Laravel')}} Framework, touching upon other frameworks such as {{ HTML::link('#', 'codeIgniter')}} and ASP.net, but my main experience is within Laravel
				        	</div>
				        </div>
				        </div>
				      </li>
				      <li class="accordion-navigation">
				        <a href="#panel6c">MySQL<span class="competence">Minimal / Capable</a>
				        <div id="panel6c" class="content">
				        <div class="row">
				        	<div class="large-2 column">
				        	{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
				        	</div>
				        	<div class="large-10 column">Used in conjunction with Laravel, my knowledge here will be with regards obtaining emails and recording them and running Reports from Databases to product client details.
				        	<p>Although I am capable, I feel that my experience is focused in other areas.</p>
				        	</div>
				        </div>
				        </div>
				      </li>
				      <li class="accordion-navigation">
				        <a href="#panel7c">SEO<span class="competence">Confident</a>
				        <div id="panel7c" class="content">
				        <div class="row">
				        	<div class="large-2 column">
				        	{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
				        	</div>
				        	<div class="large-10 column"> Display Icon and its use
				        	</div>
				        </div>
				        </div>
				      </li>
				      <li class="accordion-navigation">
				        <a href="#panel8c">CMS<span class="competence">Confident</a>
				        <div id="panel8c" class="content">
				        <div class="row">
				        	<div class="large-2 column">
				        	{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
				        	</div>
				        	<div class="large-10 column"> Display Icon and its use
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
			<label>**Background picture here of my laptop**</label>
				<hr>
				<div class="row">
					<div class="large-12 columns large-centered">
						<p>My preferred contact method would be {{ HTML::link('mailto:pauljk1988@gmail.com', 'Email')}}, I may not be able to take your call during Office Hours.<br /> I am sometimes available to take a {{ HTML::link('tel:07970271781', 'Call')}} between 13:00 - 14:00. A better time to contact me via {{ HTML::link('tel:07970271781', 'phone')}} would be after 17:00</p>
						<p><b>Office Hours</b>: Monday to Friday 8:00 - 17:00</p>
					</div>
				</div>
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