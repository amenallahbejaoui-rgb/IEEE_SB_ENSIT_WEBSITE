<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>IEEE WIE ENSIT</title>
	<meta content="width=device-width, initial-scale=1.0" name="viewport">
	<meta content="" name="keywords">
	<meta content="" name="description">

	<!-- Favicon -->
	<link href="../../../../img/logos/wie1.png" rel="icon">

	<!-- Google Web Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

	<!-- Icon Font Stylesheet -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

	<!-- Libraries Stylesheet -->
	<link href="../../../../lib/animate/animate.min.css" rel="stylesheet">
	<link href="../../../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
	<link href="../../../../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

	<!-- Customized Bootstrap Stylesheet -->
	<link href="../../../../css/bootstrap.min.css" rel="stylesheet">

	<!-- Template Stylesheet -->
	<link href="../../../../css/style.css" rel="stylesheet">
	<link href="../../stylewie.css" rel="stylesheet">

	<style>
		:root {
			--wie: #5f2d67;
			--bs-primary: var(--wie);
			--bs-primary-rgb: 95, 45, 103;
		}

		.text-wie { color: var(--wie) !important; }
		.btn-wie {
			background-color: var(--wie) !important;
			border-color: var(--wie) !important;
			color: #ffffff !important;
		}
		.btn-wie:hover {
			background-color: #400B49 !important;
			border-color: #400B49 !important;
			color: #ffffff !important;
		}
		.btn-outline-wie {
			color: var(--wie) !important;
			border-color: var(--wie) !important;
		}
		.btn-outline-wie:hover {
			background-color: var(--wie) !important;
			border-color: var(--wie) !important;
			color: #ffffff !important;
		}

		.navbar-nav .nav-link { position: relative; text-decoration: none; }
		.navbar-nav .nav-link::after {
			content: '';
			position: absolute;
			width: 0;
			height: 2px;
			bottom: 19px;
			left: 0;
			background-color: #ffffff;
			transition: width 0.3s ease-in-out;
		}
		.navbar-nav .nav-link:hover::after,
		.navbar-nav .nav-link:focus::after { width: 100%; }

		.dropdown-menu {
			background-color: #1e1e2e !important;
			border: 1px solid #2d2d3d !important;
			border-radius: 16px !important;
			padding: 16px !important;
			min-width: 400px;
			box-shadow: 0 20px 60px rgba(0, 0, 0, 0.6) !important;
			margin-top: 12px !important;
		}
		.dropdown-item {
			color: #e5e7eb !important;
			padding: 16px !important;
			border-radius: 12px !important;
			transition: all 0.3s ease !important;
			font-size: 15px !important;
			font-weight: 500 !important;
			display: flex !important;
			align-items: flex-start !important;
			gap: 16px !important;
			margin-bottom: 6px !important;
			white-space: normal !important;
		}
		.dropdown-item:last-child { margin-bottom: 0 !important; }
		.dropdown-item .dropdown-icon {
			width: 56px;
			height: 56px;
			min-width: 56px;
			background-color: #2d2d3d;
			border-radius: 12px;
			display: flex;
			align-items: center;
			justify-content: center;
			font-size: 24px;
			color: #ffffff;
			overflow: hidden;
		}
		.dropdown-item .dropdown-icon img {
			width: 100%;
			height: 100%;
			object-fit: contain;
			padding: 8px;
		}
		.dropdown-item .dropdown-content { flex: 1; display: flex; flex-direction: column; gap: 4px; }
		.dropdown-item .dropdown-title { color: #ffffff; font-weight: 600; font-size: 16px; line-height: 1.3; }
		.dropdown-item .dropdown-desc { color: #9ca3af; font-size: 13px; font-weight: 400; line-height: 1.4; }
		.dropdown-item:hover { background-color: #2a2a3a !important; color: #ffffff !important; }
		.dropdown-item:hover .dropdown-icon { background-color: #3d3d4d; }
		.dropdown-item:active { background-color: #3a3a4a !important; }

		.theme-toggle {
			width: 40px;
			height: 40px;
			border-radius: 50%;
			background-color: rgba(255, 255, 255, 0.1);
			border: 1px solid rgba(255, 255, 255, 0.2);
			display: flex;
			align-items: center;
			justify-content: center;
			cursor: pointer;
			transition: all 0.3s ease;
			margin-left: 12px;
			color: #ffffff;
			font-size: 18px;
			padding: 0;
		}
		.theme-toggle:hover { background-color: rgba(255, 255, 255, 0.2); transform: scale(1.05); }

		body.light-mode { background-color: #ffffff; color: #1a1a1a; }
		body.light-mode .container-fluid.sticky-top { background-color: #ffffff !important; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); }
		body.light-mode .navbar-nav .nav-link { color: #1a1a1a !important; }
		body.light-mode .navbar-nav .nav-link::after { background-color: var(--wie); }
		body.light-mode .theme-toggle { background-color: rgba(0, 0, 0, 0.05); border-color: rgba(0, 0, 0, 0.1); color: #1a1a1a; }
		body.light-mode .theme-toggle:hover { background-color: rgba(0, 0, 0, 0.1); }

		.event-card { padding: 40px 0 60px; }
		.event-content {
			width: min(1180px, calc(100% - 32px));
			margin: 0 auto;
			display: grid;
			grid-template-columns: minmax(0, 1fr) minmax(0, 1fr);
			gap: 32px;
			align-items: start;
		}
		.event-media {
			background: #ffffff;
			border-radius: 24px;
			padding: 18px;
			box-shadow: 0 18px 45px rgba(18, 18, 18, 0.08);
			border: 1px solid rgba(95, 45, 103, 0.12);
		}
		.event-image { width: 100%; border-radius: 18px; display: block; object-fit: cover; aspect-ratio: 3 / 4; }
		.event-text h1 { color: var(--wie); font-weight: 800; letter-spacing: -0.02em; }
		.event-description {
			background: rgba(95, 45, 103, 0.05);
			border: 1px solid rgba(95, 45, 103, 0.12);
			border-radius: 24px;
			padding: 24px;
			color: #374151;
			line-height: 1.8;
			font-size: 16px;
		}
		.event-description p { margin-bottom: 14px; }
		.event-description p:last-child { margin-bottom: 0; }
		.event-description strong { color: var(--wie); }

		@media (max-width: 991.98px) {
			.event-content { grid-template-columns: 1fr; }
		}
		@media (max-width: 575.98px) {
			.event-card { padding: 24px 0 44px; }
			.event-content { width: calc(100% - 20px); gap: 22px; }
			.event-media, .event-description { border-radius: 20px; }
		}
	</style>
</head>

<body>
	<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
		<div class="spinner-border" role="status" style="width: 3rem; height: 3rem; color: var(--wie);"></div>
	</div>

	<?php include(__DIR__ . '/../../components/navbar.php'); ?>

	<div class="event-card">
		<div class="event-content">
			<div class="event-media">
				<img src="img/681332933_18109837313506352_6366025777134321239_n.jpg" alt="GitHub Workshop" class="event-image">
			</div>

			<div class="event-text">
				<h1 class="mb-4">Career Bootcamp – Session 1: GitHub Workshop</h1>
				<div class="event-description">
					<p class="text-warning mb-4">Event date: 2026</p>
					<p>We’re kicking off our Career Bootcamp with the very first session: a <strong>GitHub Workshop</strong> led by <strong>Med Amine Bouaziz</strong> ✨</p>
					<p>Participants will explore the fundamentals of version control, improve collaboration skills, and learn how to effectively manage and elevate their projects using GitHub 🔥</p>
					<p>A great starting point to level up every developer’s workflow and teamwork skills 💻🚀</p>
				</div>
			</div>
		</div>
	</div>

	<?php include(__DIR__ . '/../../components/footer.php'); ?>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
	<script src="../../../../lib/wow/wow.min.js"></script>
	<script src="../../../../lib/easing/easing.min.js"></script>
	<script src="../../../../lib/waypoints/waypoints.min.js"></script>
	<script src="../../../../lib/owlcarousel/owl.carousel.min.js"></script>
	<script src="../../../../lib/lightbox/js/lightbox.min.js"></script>
	<script src="../../../../js/main.js"></script>
	<script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
	<script>
		AOS.init({ duration: 1000, once: true });

		function toggleTheme() {
			const body = document.body;
			const themeIcon = document.getElementById('theme-icon');
			body.classList.toggle('light-mode');
			if (body.classList.contains('light-mode')) {
				themeIcon.classList.remove('bi-moon-stars');
				themeIcon.classList.add('bi-sun-fill');
				localStorage.setItem('theme', 'light');
			} else {
				themeIcon.classList.remove('bi-sun-fill');
				themeIcon.classList.add('bi-moon-stars');
				localStorage.setItem('theme', 'dark');
			}
		}

		window.addEventListener('DOMContentLoaded', () => {
			const savedTheme = localStorage.getItem('theme');
			const themeIcon = document.getElementById('theme-icon');
			if (savedTheme === 'light') {
				document.body.classList.add('light-mode');
				themeIcon.classList.remove('bi-moon-stars');
				themeIcon.classList.add('bi-sun-fill');
			}
		});
	</script>

	<?php include(__DIR__ . '/../../components/theme-toggle-script.php'); ?>
</body>
</html>
