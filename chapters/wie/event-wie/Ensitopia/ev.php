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
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

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
</head>
<body>
    <!-- Spinner Start -->
    <div id="spinner"  class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border color-wie" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->

    <?php include(__DIR__ . '/../../components/navbar.php'); ?>
    <div class="event-card">
        <div class="event-content">
            <img src="1.jpg" alt="Event Image" class="event-image" id="mainEventImage" style="width: 100%;">
            <div class="event-text">
                <h1 class="mb-5">Event Cyber Bridge</h1>
                <div class="event-info">
                    <div class="event-description">
                        <p class="text-warning">Event date: 15/07/2025</p>
                        <p>
                            On July 15, 2025, the IEEE ENSIT Student Branch proudly hosted the third edition of ENSITOPIA at ENSIT, Tunis. While previous editions were held online, this year marked the first time the forum was organized in person, offering participants a unique and immersive on-campus experience. <br>

ENSITOPIA 3.0 was designed as a space for discovery, orientation and connection. The event brought together students, faculty and alumni to share insights, answer questions and showcase the richness of ENSIT’s academic and community life. Participants had the opportunity to explore different departments, engage in discussions with mentors and graduates and gain valuable guidance to help them define their academic choices and future career paths.<br>

With its mix of interactive exchanges, networking opportunities and first-hand exposure to ENSIT’s environment, ENSITOPIA 3.0 successfully reinforced the sense of community within ENSIT while inspiring participants to envision their journey as future engineers.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include(__DIR__ . '/../../components/footer.php'); ?>
    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../../../lib/wow/wow.min.js"></script>
    <script src="../../../../lib/easing/easing.min.js"></script>
    <script src="../../../../lib/waypoints/waypoints.min.js"></script>
    <script src="../../../../lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="../../../../lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="../../../../js/main.js"></script>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000,
            once: true
        });
    </script>

    <?php include(__DIR__ . '/../../components/theme-toggle-script.php'); ?>
</body>
</html>
