<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

	<title>Josh Evensen, Web Developer</title>
	<meta name="description" content="I design, develop, and deploy websites.">

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<link href="css/styles.css" rel="stylesheet" type="text/css">

  <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>

<body>

	<!--
		|> Header
	 -->
	<div class="header">
		<h1 class="header__title">Hello, my name is Josh</h1>
		<hr class="header__rule">
		<img class="header__image" src="img/infinity.png" alt="Infinity Loop">
	</div>

	<!--
		|> Tagline
	 -->
	<h2 class="tagline">I design, develop, and deploy websites</h2>

	<!--
		|> About
	 -->
	<section>
		<h3 class="section__heading">About Me</h3>

		<p class="about__text">I admit it, I am a geek who loves coding websites. I started building websites with simple WYSIWYG builders over 6 years ago. Now I craft custom websites with HTML, SASS, and a little JavaScript. I've built dozens of websites over the years using straight HTML, WordPress, and Perch CMS. A little over a year ago I started working with PHP and the laravel framework. This allowed me build an amazing web app, called Novelize.</p>

		<p class="about__text">I'm always on the look out for new development tools and techniques to use on future projects. As well as new projects, especially those that allow me to do something that I haven't done before.</p>
	</section>

	<!--
		|> Skills
	 -->
	<section>
		<h3 class="section__heading">Skills</h3>


		<ul class="skills-chart">
			<li class="skills-chart__item" style="width: 85%">HTML</li>
			<li class="skills-chart__item" style="width: 90%">CSS/SASS</li>
			<li class="skills-chart__item" style="width: 70%">JavaScript</li>
			<li class="skills-chart__item" style="width: 80%">jQuery</li>
			<li class="skills-chart__item" style="width: 60%">SEO</li>
			<li class="skills-chart__item" style="width: 80%">PHP/Laravel</li>
			<li class="skills-chart__item" style="width: 70%">WordPress</li>
			<li class="skills-chart__item" style="width: 60%">Illustrator</li>
			<li class="skills-chart__item" style="width: 50%">Photoshop</li>
		</ul>
		<p class="skills-chart__key"><span class="first">beginner</span><span>&nbsp;</span><span>&nbsp;</span><span class="last">expert</span></p>
	</section>

	<!--
		|> Technology
	 -->
	<section>
		<h3 class="section__heading">Technology &amp; Services</h3>

		<ul class="technology-list">
			<li class="technology-list__item">GitHub</li>
			<li class="technology-list__item">Stripe</li>
			<li class="technology-list__item">PHP Storm</li>
			<li class="technology-list__item">GoDaddy</li>
			<li class="technology-list__item">FileZilla</li>
			<li class="technology-list__item">MailChimp</li>
			<li class="technology-list__item">Mercurial</li>
			<li class="technology-list__item">Perch CMS</li>
			<li class="technology-list__item">New Relic</li>
			<li class="technology-list__item">Emmet</li>
			<li class="technology-list__item">WAMP</li>
			<li class="technology-list__item">Digital Ocean</li>
			<li class="technology-list__item">Sublime Text</li>
			<li class="technology-list__item">Prepros</li>
			<li class="technology-list__item">Mandrill</li>
			<li class="technology-list__item">New Relic</li>
			<li class="technology-list__item">Basecamp</li>
		</ul>
	</section>

	<!--
		|> Projects
	 -->
	<section>
		<h3 class="section__heading">Recent Projects</h3>

		<div class="project-box">
			<h4 class="project-box__title">Novelize Writing App</h4>
			<p class="project-box__description">I've built an awesome SaaS tool for authors that provides an alternative to complex tools such as Scrivener or Word. It has been built on the Laravel framework and I"m hosting it on Digital Ocean with Laravel Forge.</p>
			<a class="project-box__link" href="http://www.getnovelize.com" target="_blank">CHECK IT OUT</a>
		</div>

		<div class="project-box">
			<h4 class="project-box__title">Stratasys Direct Manufacturing</h4>
			<p class="project-box__description">I'm a full-time contractor performing Front-End Web Development for them. At Stratasys Direct Manufacturing I work with a small team to develop and maintain several company websites. I'm given a design and UI specs, build out a site with HTML and SASS and hand it over to the Back-End Developer to complete the functionality.</p>
		</div>

		<div class="project-box">
			<h4 class="project-box__title">The Unassisted Baby</h4>
			<p class="project-box__description">This is part of my wife's passion, but I was lucky enough to get to build the website. This site is built on WordPress with custom post types.</p>
			<a class="project-box__link" href="http://www.theunassistedbaby.com/" target="_blank">CHECK IT OUT</a>
		</div>
	</section>

	<!--
		|> Hire
	 -->
	<section>
		<h3 class="section__heading">Need a Website?</h3>

		<button id="modalButton" class="hire__button">HIRE ME</button>

		<form id="modal" class="hire-form" action="php/mailer.php" method="post">
			<p class="hire-form__description">Use the form below to introduce yourself and let me know what kind of work you need done.</p>

			<div class="hire-form__block">
				<label for="name">Name</label>
				<input type="text" name="name" id="name" required>
			</div>

			<div class="hire-form__block">
				<label for="email">Email</label>
				<input type="email" name="email" id="email" required>
			</div>

			<div class="hire-form__block">
				<label for="phone">Phone</label>
				<input type="text" name="phone" id="phone">
			</div>

			<div class="hire-form__block">
				<label for="details">Project Details</label>
				<textarea name="details" id="details" required></textarea>
			</div>

			<input class="hire-form__submit" type="submit" value="SEND REQUEST">

			<button id="modalClose" class="hire-form__cancel">CANCEL</button>
		</form>
	</section>

	<!--
		|> Footer
	 -->
	<div class="footer">
		<p class="footer__copyright">&copy; 2011 - <?php echo date("Y"); ?> Copyright. All Rights Reserved.</p>
	</div>

	<script src="js/min/scripts.min.js"></script>
	<div class="modal-overlay" id="modalOverlay" style="display:none;"></div>
</body>
</html>