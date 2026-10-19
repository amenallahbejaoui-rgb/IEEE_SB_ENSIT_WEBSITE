<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>IEEE WIE ENSIT</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="../../../img/logos/wie1.png" rel="icon">

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../../../lib/animate/animate.min.css" rel="stylesheet">
    <link href="../../../lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="../../../lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../../../css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="../../../css/style.css" rel="stylesheet">
    <link href="../stylewie.css" rel="stylesheet">

    <style>
        :root {
            --wie: #5f2d67;
            --bs-primary: var(--wie);
            --bs-primary-rgb: 95, 45, 103;
        }

        .text-wie {
            color: var(--wie) !important;
        }

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

        /* Navbar link underline */
        .navbar-nav .nav-link {
            position: relative;
            text-decoration: none;
        }

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
        .navbar-nav .nav-link:focus::after {
            width: 100%;
        }

        /* Dropdown Menu Styling */
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

        .dropdown-item:last-child {
            margin-bottom: 0 !important;
        }

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

        .dropdown-item .dropdown-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            gap: 4px;
        }

        .dropdown-item .dropdown-title {
            color: #ffffff;
            font-weight: 600;
            font-size: 16px;
            line-height: 1.3;
        }

        .dropdown-item .dropdown-desc {
            color: #9ca3af;
            font-size: 13px;
            font-weight: 400;
            line-height: 1.4;
        }

        .dropdown-item:hover {
            background-color: #2a2a3a !important;
            color: #ffffff !important;
        }

        .dropdown-item:hover .dropdown-icon {
            background-color: #3d3d4d;
        }

        .dropdown-item:active {
            background-color: #3a3a4a !important;
        }

        /* Dark Mode Toggle Button */
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
        }

        .theme-toggle:hover {
            background-color: rgba(255, 255, 255, 0.2);
            transform: scale(1.05);
        }

        /* Light mode styles */
        body.light-mode {
            background-color: #ffffff;
            color: #1a1a1a;
        }

        body.light-mode .container-fluid.sticky-top {
            background-color: #ffffff !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        body.light-mode .navbar-nav .nav-link {
            color: #1a1a1a !important;
        }

        body.light-mode .navbar-nav .nav-link::after {
            background-color: var(--wie);
        }

        body.light-mode .theme-toggle {
            background-color: rgba(0, 0, 0, 0.05);
            border-color: rgba(0, 0, 0, 0.1);
            color: #1a1a1a;
        }

        body.light-mode .theme-toggle:hover {
            background-color: rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner"  class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border" role="status" style="width: 3rem; height: 3rem; color: var(--wie);"></div>
    </div>
    <!-- Spinner End -->
    <?php include(__DIR__ . '/../components/navbar.php'); ?>
    <div class="container-fluid events-wie-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" data-aos="fade-up" data-aos-duration="800">
        <div class="container text-center py-2">
            <h1 class="display-5 text-white mb-4 animated slideInDown">Our Main Events IEEE WIE Ensit</h1>
        </div>
    </div>
    <div id="eventsWIEPage" class="container-xxl py-5 home-section-spacious">
        <div class="container">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" data-aos="fade-up" data-aos-duration="800">
                <div class="events-pinboard">
                    <h3 class="ev-date text-wie">Events</h3>
                    <section class="mt-4">
                        <div class="card-container">
                            <div class="card-ev">
                                <img src="education-week20/img/672332269_122187509636466690_9121808534991073561_n.jpg" alt="Education Week" />
                                <h6>Education Week: Entrepreneurship<br> Master Class</h6>
                                <br>
                                <button class="btn btn-wie" style="font-weight: bold; text-transform: capitalize ; font-size: 12px">
                                    <a href="education-week20/education-week.html">Show More</a>
                                </button>
                            </div>
                            <div class="card-ev">
                                <img src="LaTeX_Workshop/img/latex_wie.jpg" alt="LaTeX Workshop" />
                                <h6>Career Bootcamp – Session 2:<br> LaTeX Workshop</h6>
                                <br>
                                <button class="btn btn-wie" style="font-weight: bold; text-transform: capitalize ; font-size: 12px">
                                    <a href="LaTeX_Workshop/LaTeX_Workshop.php">Show More</a>
                                </button>
                            </div>
                            <div class="card-ev">
                                <img src="GitHub_Workshop/img/681332933_18109837313506352_6366025777134321239_n.jpg" alt="GitHub Workshop" />
                                <h6>Career Bootcamp – Session 1:<br> GitHub Workshop</h6>
                                <br>
                                <button class="btn btn-wie" style="font-weight: bold; text-transform: capitalize ; font-size: 12px">
                                    <a href="GitHub_Workshop/GitHub_Workshop.php">Show More</a>
                                </button>
                            </div>
                            <div class="card-ev">
                                <img src="Light_For_Little_Fighters/img/666728937_1380280414128052_4050919631545849242_n.jpg" alt="Light for Little Fighters" />
                                <h6>Light for Little Fighters</h6>
                                <br>
                                <button class="btn btn-wie" style="font-weight: bold; text-transform: capitalize ; font-size: 12px">
                                    <a href="Light_For_Little_Fighters/Light_For_Little_Fighters.php">Show More</a>
                                </button>
                            </div>
                            <div class="card-ev">
                                <img src="Childhood Cancer Awareness Day_session1/1.jpg" alt="Childhood Cancer Awareness Day session 1" />
                                <h6>Childhood Cancer Awareness<br> Session 1 : Visit to Mostapha Khasnadar High School</h6>
                                <br>
                                <button class="btn btn-wie" style="font-weight: bold; text-transform: capitalize ; font-size: 12px">
                                    <a href="Childhood Cancer Awareness Day_session1/ev.php">Show More</a>
                                </button>
                            </div>

                            <div class="card-ev">
                                <img src="Childhood Cancer Awareness Day_session2/1.jpg" alt="Childhood Cancer Awareness Day session 2" />
                                <h6>Childhood Cancer Awareness Day:<br> Session 2 : Visit to Aziza Othmena Hospital</h6>
                                <br>
                                <button class="btn btn-wie" style="font-weight: bold; text-transform: capitalize ; font-size: 12px">
                                    <a href="Childhood Cancer Awareness Day_session2/ev.php">Show More</a>
                                </button>
                            </div>

                            <div class="card-ev">
                                <img src="First aid workshop/FB_IMG_1732816423382.jpg" alt="First aid workshop" />
                                <h6>First aid workshop</h6>
                                <br>
                                <button class="btn btn-wie" style="font-weight: bold; text-transform: capitalize ; font-size: 12px">
                                    <a href="First aid workshop/ev.php">Show More</a>
                                </button>
                            </div>

                            <div class="card-ev">
                                <img src="Global SheRise_ Empowering Women in STEM/FB_IMG_1732816104396.jpg" alt="Global SheRise Empowering Women in STEM" />
                                <h6>Global SheRise Empowering<br> Women in STEM</h6>
                                <br>
                                <button class="btn btn-wie" style="font-weight: bold; text-transform: capitalize ; font-size: 12px">
                                    <a href="Global SheRise_ Empowering Women in STEM/ev.php">Show More</a>
                                </button>
                            </div>

                            <div class="card-ev">
                                <img src="Cyber Bridge/1.jpg" alt="Cyber Bridge" />
                                <h6>Event Cyber Bridge</h6>
                                <br>
                                <button class="btn btn-wie" style="font-weight: bold; text-transform: capitalize ; font-size: 12px">
                                    <a href="Cyber Bridge/ev.php">Show More</a>
                                </button>
                            </div>

                            <div class="card-ev">
                                <img src="IEEE ENSIT MEETUP/FB_IMG_1732815982935.jpg" alt="IEEE ENSIT MEETUP" />
                                <h6>IEEE ENSIT MEETUP</h6>
                                <br>
                                <button class="btn btn-wie" style="font-weight: bold; text-transform: capitalize ; font-size: 12px">
                                    <a href="IEEE ENSIT MEETUP/ev.php">Show More</a>
                                </button>
                            </div>

                            <div class="card-ev">
                                <img src="Junior astronauts/FB_IMG_1732816355762.jpg" alt="Junior astronauts" />
                                <h6>Junior astronauts</h6>
                                <br>
                                <button class="btn btn-wie" style="font-weight: bold; text-transform: capitalize ; font-size: 12px">
                                    <a href="Junior astronauts/ev.php">Show More</a>
                                </button>
                            </div>

                            <div class="card-ev">
                                <img src="Shetech/FB_IMG_1732816244072.jpg" alt="Shetech" />
                                <h6>Shetech</h6>
                                <br>
                                <button class="btn btn-wie" style="font-weight: bold; text-transform: capitalize ; font-size: 12px">
                                    <a href="Shetech/ev.php">Show More</a>
                                </button>
                            </div>

                            <div class="card-ev">
                                <img src="Education week/1.jpg" alt="Education week" />
                                <h6>IEEE Education Week Celebration</h6>
                                <br>
                                <button class="btn btn-wie" style="font-weight: bold; text-transform: capitalize ; font-size: 12px">
                                    <a href="Education week/ev.php">Show More</a>
                                </button>
                            </div>

                            <div class="card-ev">
                                <img src="Ensitopia/1.jpg" alt="Ensitopia" />
                                <h6>Ensitopia 3.0</h6>
                                <br>
                                <button class="btn btn-wie" style="font-weight: bold; text-transform: capitalize ; font-size: 12px">
                                    <a href="Ensitopia/ev.php">Show More</a>
                                </button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <?php include(__DIR__ . '/../components/footer.php'); ?>
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../lib/wow/wow.min.js"></script>
    <script src="../../../lib/easing/easing.min.js"></script>
    <script src="../../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../../lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../../js/main.js"></script>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

    <script>
        // Dark/Light Mode Toggle
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

        // Load saved theme on page load
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
</body>
</html>
