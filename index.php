<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<title>Lucas Spitzer - Portfolio</title>
	<!-- BOOTSTRAP + CUSTOM CSS -->
	<link href="/assets/style.css" rel="stylesheet" />
	<!-- BOOTSTRAP ICON-->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
</head>

<body class="bg-black">
	<section class="section" id="accueil">
		<!-- NAVBAR -->
		<nav class="navbar navbar-expand-lg bg-black fixed-top navbar-dark">
			<div class="container-fluid text-center">
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="bi bi-list text-white" style="font-size: 2em"></i></button>
				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-auto">
						<li class="nav-item" data-aos="fade-down">
							<a class="nav-link text-white" aria-current="page" href="#accueil">Accueil</a>
						</li>
						<li class="nav-item" data-aos="fade-down">
							<a class="nav-link text-white" aria-current="page" href="#apropos">A propos</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" aria-current="page" href="#parcours">Parcours</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" aria-current="page" href="#projets">Projets</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" aria-current="page" href="#stages">Stages</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" aria-current="page" href="#veille">Veille</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-white" aria-current="page" href="#contact">Contact</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="d-flex justify-content-center align-items-center mx-5" style="height: 100vh">
			<div class="text-center">
				<h1 class="display-5 fw-bold text-white lh-1 mb-sm-4">Hello, moi c'est Lucas 👋</h1>
				<p class="lead text-white" id="typingtext"></p>
			</div>
		</div>
	</section>

	<!-- A PROPOS -->
	<section id="apropos" class="section">
		<div class="d-flex justify-content-center align-items-center mx-4" style="height: 100vh">
			<div class="container col-xxl-8 px-4 py-5">
				<div class="row flex-lg-row-reverse align-items-center g-5 py-5">
					<div class="col-12 col-lg-6">
						<img src="assets/img/profil-min.jpg" class="d-block mx-lg-auto img-fluid rounded-circle profil w-100" alt="Photo de profil (ma tête)" loading="lazy" />
					</div>
					<div class="col-lg-6">
						<h1 class="display-5 fw-bold text-white lh-1 mb-3">👤 <span class="mon-nom">Lucas Spitzer</span></h1>
						<p class="lead text-white">Etudiant en <span class="btssio">BTS SIO</span> et passionné par l'informatique depuis le plus jeune âge, j'ai choisi ce domaine afin de me consacrer au développement web.</p>
						<a class="btn border-white text-white" href="assets/lucas-spitzer-cv.pdf"><i class="bi bi-download"></i>&nbsp&nbspCV</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- PARCOURS-->
	<section id="parcours" class="section">
		<div class="d-flex justify-content-center align-items-center mx-4" style="height: 100vh">
			<div class="container">
				<h1 class="display-5 fw-bold text-white text-center mb-5">🏫 Parcours</h1>
				<div class="row">
					<div class="col-sm-6 mb-3 mb-sm-0">
						<div class="card bg-black border-white rounded-2 text-white h-100">
							<div class="card-body">
								<h5 class="card-title">Baccalauréat STI2D SIN</h5>
								<p class="card-subtitle mb-2">Lycée LaSalle - Alès</p>
								<p class="card-text">Baccalauréat Sciences et Technologies de l'Ingenierie et du Développement Durable option Système Information Numérique.</p>
								<a href="https://www.onisep.fr/ressources/univers-formation/formations/Lycees/bac-techno-sti2d-sciences-et-technologies-de-l-industrie-et-du-developpement-durable-enseignement-specifique-systemes-d-information-et-numerique" class="card-link text-white">C'est quoi STI2D ?</a>
							</div>
							<div class="card-footer border-white"><small class="text-white">Obtenu en 2023</small></div>
						</div>
					</div>
					<div class="col-sm-6 mb-3 mb-sm-0">
						<div class="card bg-black border-white rounded-2 text-white h-100">
							<div class="card-body">
								<h5 class="card-title">BTS SIO SLAM</h5>
								<p class="card-subtitle mb-2">Campus CCI - Nîmes</p>
								<p class="card-text">Brevet de Technicien Supérieur en Services Informatiques aux Organisations option Solutuion Logicielles et Applications Métiers.</p>
								<a href="https://www.onisep.fr/ressources/univers-formation/formations/Post-bac/bts-services-informatiques-aux-organisations-option-b-solutions-logicielles-et-applications-metiers" class="card-link text-white">C'est quoi SIO ?</a>
							</div>
							<div class="card-footer border-white"><small class="text-white">En cours de préparation</small></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- PROJETS-->
	<section id="projets" class="section">
		<div class="d-flex justify-content-center align-items-center mx-4" style="height: 100vh">
			<div class="container">
				<h1 class="display-5 fw-bold text-white text-center mb-5">🧱 Mes projets</h1>
				<div class="row">
					<div class="col-sm-6 mb-3 mb-sm-0">
						<div class="card bg-black border-white text-white h-100">
							<div class="card-body">
								<h5 class="card-title"><a href="https://lucasspitzer.xyz">Portfolio</a></h5>
								<p class="card-subtitle mb-2">Création d'un portfolio dans le cadre du BTS SIO</p>
							</div>
							<div class="card-footer border-white">
								<small class="text-white">Octobre 2023</small>
							</div>
						</div>
					</div>
					<div class="col-sm-6 mb-3 mb-sm-0">
						<div class="card bg-black border-white text-white h-100">
							<div class="card-body">
								<h5 class="card-title"><a href="https://flowtech-sio.fr">FlowTech</a></h5>
								<p class="card-subtitle mb-2">Projet de 1ère année de BTS visant a développer un site pour une entreprise fictive.</p>
							</div>
							<div class="card-footer border-white">
								<small class="text-white">Octobre à Decembre 2023</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- STAGES-->
	<section id="stages" class="section">
		<div class="d-flex justify-content-center align-items-center mx-4" style="height: 100vh">
			<div class="container">
				<h1 class="display-5 fw-bold text-white text-center mb-5">📅 Mes stages</h1>
				<div class="row">
					<div class="col-sm-6 mb-3 mb-sm-0">
						<div class="card bg-black border-white text-white h-100">
							<div class="card-body">
								<h5 class="card-title">👷🏼 Géomètre topographe</h5>
								<p class="card-subtitle mb-2">Stage de 3ème dans un cabinet de géomètre topographe.</p>
								<ul>
									<li>Accueil de la clientèle</li>
									<li>Gestion et classement des archives</li>
									<li>Prise de mesures sur le terrain</li>
								</ul>
							</div>
							<div class="card-footer border-white">
								<small class="text-white">Janvier 2019</small>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card bg-black border-white text-white h-100">
							<div class="card-body">
								<h5 class="card-title">👷🏼 Géomètre topographe</h5>
								<p class="card-subtitle mb-2">Stage de 2nde dans un cabinet de géomètre topographe.</p>
								<ul>
									<li>Accueil de la clientèle</li>
									<li>Gestion et classement des archives</li>
									<li>Prise de mesures sur le terrain</li>
									<li>Conception de plans à l'ordinateur</li>
								</ul>
							</div>
							<div class="card-footer border-white">
								<small class="text-white">Janvier 2020</small>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- VEILLE -->
	<section id="veille" class="section">
		<div class="d-flex justify-content-center align-items-center mx-4" style="height: 100vh">
			<div class="container">
				<h1 class="display-5 fw-bold text-white text-center mb-5">🕵🏼 Veille</h1>

				<div class="card bg-black border-white" aria-hidden="true">
					<div class="card-body">
						<h5 class="card-title placeholder-glow">
							<span class="placeholder col-6"></span>
						</h5>
						<p class="card-text placeholder-glow">
							<span class="placeholder col-7"></span>
							<span class="placeholder col-4"></span>
							<span class="placeholder col-4"></span>
							<span class="placeholder col-6"></span>
							<span class="placeholder col-8"></span>
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- CONTACT -->
	<section id="contact" class="section">
		<div class="d-flex justify-content-center align-items-center mx-4" style="height: 100vh">
			<div class="container">
				<h1 class="display-5 fw-bold text-white text-center mb-5">📬 Contact</h1>

				<div class="row justify-content-center">
					<div class="col-md-8">
						<form class="form-container" action="assets/script/traitement.php" id="form-contact" method="POST">
							<div class="form-group">
								<label for="nom" class="text-white fw-bold">Nom :</label>
								<input type="text" class="form-control bg-black border-white border-2 text-white" id="nom" name="nom" required>
							</div>
							<div class="form-group mt-2">
								<label for="email" class="text-white fw-bold">Email :</label>
								<input type="email" class="form-control bg-black border-white border-2 text-white" id="email" name="email" required>
							</div>
							<div class="form-group mt-2">
								<label for="message" class="text-white fw-bold">Message :</label>
								<textarea class="form-control bg-black border-white border-2 text-white" id="message" name="message" rows="4" required></textarea>
							</div>
							<button class="btn btn-outline-white border-2 mt-2">Envoyer</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- FOOTER -->
	<div class="container text-white">
		<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
			<div class="col-md-4 d-flex align-items-center">
				<a href="/" class="mb-3 me-2 mb-md-0 text-body-secondary text-decoration-none lh-1">
					<svg class="bi" width="30" height="24">
						<use xlink:href="#bootstrap"></use>
					</svg>
				</a>
				<span class="mb-3 mb-md-0">© 2023 Lucas Spitzer</span>
			</div>

			<ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
				<li class="ms-3 mx-3">
					<a href="https://www.linkedin.com/in/lucas-spitzer-871599293/" class="text-white"><i class="bi bi-linkedin"></i></a>
				</li>
				<li class="ms-3 mx-3">
					<a href="https://github.com/pangolino30" class="text-white"><i class="bi bi-github"></i></a>
				</li>
			</ul>
		</footer>
	</div>

	<!-- TYPEWRITER.JS-->
	<script src="https://unpkg.com/typewriter-effect@latest/dist/core.js"></script>
	<script src="assets/js/textanim.js"></script>
	<!-- MAIN.JS -->
	<script src="assets/js/main.js"></script>
	<!-- BOOTSTRAP -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
	<!-- ANIME.JS -->
	<script src=" https://cdn.jsdelivr.net/npm/animejs@3.2.1/lib/anime.min.js "></script>

</body>

</html>