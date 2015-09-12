@extends('layouts.master')

@section('nav-row')
	<div class="nav-row">
		<div class="row">
			<h2>Navigation</h2>
		</div>
	</div>
@stop

@section('bio-row')
	<div class="bio-row">
		<div class="row">
		<h2>Bio</h2>
			<p>Flank spare ribs capicola, strip steak biltong pancetta bresaola tri-tip cow landjaeger. Short ribs sirloin beef ribs, flank capicola ribeye turducken. Sirloin boudin andouille tail. Ham flank tail sausage t-bone, jerky landjaeger kevin porchetta ground round pork belly.</p>
		</div>
	</div>
@stop

@section('experience-row')
	<div class="experience-row">
		<div class="row">
		<h2>Experience</h2>
			<p>Bacon ipsum dolor sit amet chicken pork loin hamburger ball tip, swine tenderloin salami meatball boudin tri-tip fatback shank bacon. Pork salami kevin, brisket spare ribs strip steak ham hock porchetta. Pork belly short loin tail porchetta. Pork pig meatball, beef ribs doner jerky tri-tip hamburger filet mignon strip steak ball tip ham tail tongue corned beef.</p>
			<p>Flank spare ribs capicola, strip steak biltong pancetta bresaola tri-tip cow landjaeger. Short ribs sirloin beef ribs, flank capicola ribeye turducken. Sirloin boudin andouille tail. Ham flank tail sausage t-bone, jerky landjaeger kevin porchetta ground round pork belly.</p>
		</div>
	</div>
	<div class="tools-row">
		<div class="row">	
		<h2>Tools</h2>
		<p>Flank spare ribs capicola, strip steak biltong pancetta bresaola tri-tip cow landjaeger. Short ribs sirloin beef ribs, flank capicola ribeye turducken. Sirloin boudin andouille tail. Ham flank tail sausage t-bone, jerky landjaeger kevin porchetta ground round pork belly.</p>
		</div>
	</div>
	<div class="projects-row">
		<div class="row">
		<h2>Projects</h2>
		<p>Bacon ipsum dolor sit amet chicken pork loin hamburger ball tip, swine tenderloin salami meatball boudin tri-tip fatback shank bacon. Pork salami kevin, brisket spare ribs strip steak ham hock porchetta. Pork belly short loin tail porchetta. Pork pig meatball, beef ribs doner jerky tri-tip hamburger filet mignon strip steak ball tip ham tail tongue corned beef.</p>
		</div>
	</div>
@stop

@section('contact-row')
	<div class="contact-row">
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
	</div>
	<div class="copyright">Site content Copyright &copy; 2015 Paul Kinch.</div>
@stop