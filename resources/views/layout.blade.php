
<!DOCTYPE html>
<html lang="fr">
<head>
	<title>FreeADS</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />

	<link rel="stylesheet" type="text/css" href="{{ asset('css/reset.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/responsive.css') }}">

	<script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
</head>
<body>

	<section class="hero">
		<header>
			<div class="wrapper">

				<a href="#" class="hamburger"></a>
				<nav>
					<ul>
						<li><a href="/show">Mon compte</a></li>
						<li><a href="/article/index">Mes Annonces</a></li>
						<li><a href="/article/add">Nouvelle Annonce</a></li>
						<li><a href="/article/index">Recherche</a></li>
						<li><a href="#">Contact</a></li>
					</ul>

				</nav>
			</div>
		</header><!--  end header section  -->

			<section class="caption">
				<h2 class="caption">Free ADS</h2>
				<h3 class="properties">Site de petites annonces</h3>
			</section>
    </section>

    @yield('content')
    @yield('contenu')
    @yield('content_user_index')
    <footer>
		<div class="wrapper footer">
			<!-- <ul>
			<li class="links"> -->
					<!-- <ul>
						<li><a href="#">About</a></li>
						<li><a href="#">Support</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Policy</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">Appartements</a></li>
						<li><a href="#">Houses</a></li>
						<li><a href="#">Villas</a></li>
						<li><a href="#">Mansions</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li>

				<li class="links">
					<ul>
						<li><a href="#">New York</a></li>
						<li><a href="#">Los Anglos</a></li>
						<li><a href="#">Miami</a></li>
						<li><a href="#">Washington</a></li>
						<li><a href="#">...</a></li>
					</ul>
				</li> -->

				<!-- <li class="about">
					<p>La Casa is real estate minimal html5 website template, designed and coded by pixelhint, tellus varius, dictum erat vel, maximus tellus. Sed vitae auctor ipsum</p>
                     -->
                     <!-- <ul>
						<li><a href="http://facebook.com/pixelhint" class="facebook" target="_blank"></a></li>
						<li><a href="http://twitter.com/pixelhint" class="twitter" target="_blank"></a></li>
						<li><a href="http://plus.google.com/+Pixelhint" class="google" target="_blank"></a></li>
						<li><a href="#" class="skype"></a></li>
					</ul>
				</li>
			</ul> -->
		</div>

	</footer><!--  end footer  -->

</body>
</html>
