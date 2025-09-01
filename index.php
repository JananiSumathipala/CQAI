<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Command Quality Assurance Inspectorate</title>
    <!-- Bootstrap CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="assets/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="assets/css/icons.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css" />
    <!-- Swiper JS -->
    <script src="assets/js/swiper-bundle.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="fontawesome-free-6.7.2-web/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        :root {
            --primary-color: #1a4f72;
            --secondary-color: #ffcc00;
            --light-bg: #f8f9fa;
            --dark-bg: #343a40;
            --dark-color: #333;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: var(--light-bg);
            color: #333;
            line-height: 1.6;
        }
        
        .colour-defult {
            color: var(--primary-color) !important;
        }
        
        /* Slider Styles */
        .swiper-container {
            width: 100%;
            height: 580px;
        }
        
        .swiper-slide {
            position: relative;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        
        .swiper-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .slide-caption {
            position: absolute;
            bottom: 50px;
            left: 50%;
            transform: translateX(-50%);
            background-color: rgba(0, 0, 0, 0.6);
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
        }
        
        .slide-caption h5 {
            margin: 0;
            font-size: 1.5rem;
        }
          
        /* News Marquee */
        .news-marquee {
            background-color: var(--primary-color);
            color: white;
            padding: 10px 0;
            overflow: hidden;
        }
        
        .marquee-content {
            display: flex;
            animation: marquee 30s linear infinite;
            white-space: nowrap;
        }
        
        .marquee-content span {
            padding: 0 20px;
        }
        
        @keyframes marquee {
            0% { transform: translateX(100%); }
            100% { transform: translateX(-100%); }
        }
        
        /* Subhead Columns */
        .subhead-columns {
            padding: 40px 0;
            background-color: #f1f1f1;
        }
        
        .subhead-column {
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            height: 100%;
        }
        
        .subhead-title {
            color: var(--primary-color);
            border-bottom: 2px solid var(--secondary-color);
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        
        .subhead-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        
        .subhead-list li {
            padding: 5px 0;
            border-bottom: 1px dotted #ddd;
        }
        
        .subhead-list li:last-child {
            border-bottom: none;
        }
        
        .subhead-list li:hover {
            color: var(--primary-color);
            cursor: pointer;
        }
        
        /* Footer */
        footer {
            background-color: var(--primary-color);
            color: white;
            padding: 40px 0 20px;
        }
        
        footer h5 {
            border-bottom: 1px solid var(--secondary-color);
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        
        footer a {
            color: #ddd;
            text-decoration: none;
        }
        
        footer a:hover {
            color: white;
            text-decoration: underline;
        }
        
        .social-links a {
            display: inline-block;
            margin-right: 15px;
            font-size: 1.2rem;
        }
        
        /* Responsive adjustments */
        @media (max-width: 992px) {
            .card-nav {
                gap: 15px;
            }
            
            .nav-card {
                width: 150px;
                height: 150px;
            }
            
            .swiper-container, .swiper-slide {
                height: 400px;
            }
        }
        
        @media (max-width: 768px) {
            .swiper-container, .swiper-slide {
                height: 300px;
            }
            
            .slide-caption h5 {
                font-size: 1.2rem;
            }
            
            .nav-card {
                width: 130px;
                height: 130px;
            }
            
            .nav-card h3 {
                font-size: 1rem;
            }
            
            .nav-card p {
                font-size: 0.75rem;
            }
        }
        
        @media (max-width: 576px) {
            .card-nav {
                gap: 10px;
            }
            
            .nav-card {
                width: 110px;
                height: 110px;
                padding: 15px;
            }
            
            .nav-card h3 {
                font-size: 0.9rem;
                margin-bottom: 5px;
            }
            
            .nav-card p {
                display: none;
            }
            
            #subhead-row .col-md-2 {
                flex: 0 0 50%;
                max-width: 50%;
                margin-bottom: 20px;
            }
            
            .swiper-container, .swiper-slide {
                height: 250px;
            }
            
            .slide-caption {
                bottom: 20px;
                padding: 8px 15px;
            }
            
            .slide-caption h5 {
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- header.php content -->
               
    <div class="position-relative top-8 start-8 p-4 z-3">
        <a href="index.php"> <img src="assets/img/logo/QAI_NEW_LOG.png" alt="Command Quality Assurance Inspectorate Logo" class="logo">
    </div>
    
    <!-- Fixed slider container -->
    <div class="position-relative" style="margin-top: -6rem;">   
        <div class="swiper-container">  
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="assets/img/slider/cqai-06.jpg" alt="Quality Inspection">
                    <div class="slide-caption">
                        <h5>Ensuring Excellence in Every Operation</h5>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/slider/Aircraft.jpg" alt="Our Team">
                    <div class="slide-caption">
                        <h5>Dedicated Team of Quality Professionals</h5>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/slider/cqai-5.jpg" alt="Innovation">
                    <div class="slide-caption">
                        <h5>Innovative Solutions for Quality Assurance</h5>
                    </div>
                </div>
            </div>
            <!-- Add pagination if needed -->
            <div class="swiper-pagination"></div>
            
            <!-- Add navigation buttons if needed -->
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    <!-- index.php main content -->
    <main>
        <!-- Circular Navigation Links -->
        <?php
            include 'sections/nav-articles.php';
        ?>

        <!-- News Marquee -->
        <?php
            include 'sections/news-marquee.php';
        ?>

        <!-- Subhead Columns -->
        <?php
            include 'sections/subhead.php';
        ?>
    </main>

    <!-- footer.php content -->
        <?php
            include 'template/footer.php';
            include 'template/foot.php';
        ?>


    <!-- Bootstrap JS Bundle with Popper -->
    <script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Fixed Swiper initialization -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var swiper = new Swiper('.swiper-container', {
                direction: 'horizontal',
                loop: true,
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                // Optional effect parameters
                effect: 'slide', // You can try 'fade', 'cube', 'coverflow', etc.
                speed: 800,
            });
            
            // Add hover effects to all links
            const links = document.querySelectorAll('a');
            links.forEach(link => {
                link.addEventListener('mouseenter', function() {
                    this.style.transition = 'all 0.2s ease';
                });
            });
            
            // Marquee animation pause on hover
            const marquee = document.querySelector('.marquee-content');
            if (marquee) {
                marquee.addEventListener('mouseenter', function() {
                    this.style.animationPlayState = 'paused';
                });
                
                marquee.addEventListener('mouseleave', function() {
                    this.style.animationPlayState = 'running';
                });
            }
        });
    </script>
</body>
</html>