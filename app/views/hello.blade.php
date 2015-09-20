@extends('layouts.master')

@section('nav-row')
	<div class="nav-row">
		<nav class="large-12 large-centered column">
			<ul class="top-nav large-6 large-centered column no-margin">
				<div class="top-nav-left large-5 medium-12 small-12 columns no-padding">
					<li class="no-margin no-padding large-6 small-6 columns">{{ HTML::link('#Biography', 'Biography', array( 'class' => 'nav-item' ))}}</li>
					<li class="no-margin no-padding large-6 small-6 columns">{{ HTML::link('#Experience', 'Experience', array( 'class' => 'nav-item' ))}}</li>
				</div>
				<div class="top-nav-right large-7 medium-12 small-12 columns no-padding">
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
		    I'm a parallax!
		    <p><i class="fi-arrow-down"></i></p>
		    <button class="top-parallax-btn">I am a Button</button>
		  </div>
		</div>
	</div>

@stop

@section('bio-row')
	<section class="bio-row" id="Biography">
		<div class="row">
		<h2>Bio</h2>
			<p>Flank spare ribs capicola, strip steak biltong pancetta bresaola tri-tip cow landjaeger. Short ribs sirloin beef ribs, flank capicola ribeye turducken. Sirloin boudin andouille tail. Ham flank tail sausage t-bone, jerky landjaeger kevin porchetta ground round pork belly.</p>
		</div>
	</section>
@stop

@section('experience-row')
	<section class="experience-row" id="Experience">
		<div class="row">
		<h2>Experience</h2>
			<p>Bacon ipsum dolor sit amet chicken pork loin hamburger ball tip, swine tenderloin salami meatball boudin tri-tip fatback shank bacon. Pork salami kevin, brisket spare ribs strip steak ham hock porchetta. Pork belly short loin tail porchetta. Pork pig meatball, beef ribs doner jerky tri-tip hamburger filet mignon strip steak ball tip ham tail tongue corned beef.</p>
			<p>Flank spare ribs capicola, strip steak biltong pancetta bresaola tri-tip cow landjaeger. Short ribs sirloin beef ribs, flank capicola ribeye turducken. Sirloin boudin andouille tail. Ham flank tail sausage t-bone, jerky landjaeger kevin porchetta ground round pork belly.</p>
		</div>
	</section>
	<section class="tools-row" id="Tools">
		<div class="row">	
		<h2>Tools</h2>
		<p>Flank spare ribs capicola, strip steak biltong pancetta bresaola tri-tip cow landjaeger. Short ribs sirloin beef ribs, flank capicola ribeye turducken. Sirloin boudin andouille tail. Ham flank tail sausage t-bone, jerky landjaeger kevin porchetta ground round pork belly.</p>
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
					<div class="large-6 columns left">
						{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
						{{ HTML::link('mailto:pauljk1988@gmail.com', 'pauljk1988@gmail.com')}}
					</div>
					<div class="large-6 columns left">
						{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
						{{ HTML::link('tel:07970271781', '07970271781')}}
					</div>
					<div class="large-6 columns left">
						{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
						{{ HTML::link('https://bitbucket.org/pauljk88/paul-kinch.co.uk', 'https://bitbucket.org/pauljk88/paul-kinch.co.uk')}}

					</div>
					<div class="large-6 columns left">
						{{ HTML::image('path', 'icon', array( 'width' => 70, 'height' => 70 )) }}
						{{ HTML::link('https://github.com/pauljk88/paul-kinch.co.uk', 'https://github.com/pauljk88/paul-kinch.co.uk')}}
					</div>
				</div>
				<hr>
			</div>
		</div>
	</section>
	<div class="copyright">Site content Copyright &copy; 2015 Paul Kinch.</div>
@stop