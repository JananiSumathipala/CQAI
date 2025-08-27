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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
        }
        
        @media (max-width: 768px) {
            .swiper-container {
                height: 300px;
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
        }
    </style>
</head>
<body>
    <!-- header.php content -->
               
            <div class="position-relative top-8 start-8 p-4 z-3">
               <a href="index.php"> <img src="assets/img/logo/QAI_NEW_LOG.png" alt="Command Quality Assurance Inspectorate Logo" class="logo">
            </div>
    <div class="position-relative" style="margin-top: -6rem;">   
        <div class="swiper-container" style=" height: 580px; object-fit: cover;">  
            <div class="swiper-slide" style=" height: 580px; object-fit: cover;">
                <div class="swiper-slide" style="height: 580px; object-fit: cover;">
                    <img src="assets/img/slider/cqai-06.jpg" alt="Quality Inspection" style="height: 580px; object-fit: cover;">
                        <div class="slide-caption">
                            <h5>Ensuring Excellence in Every Operation</h5>
                        </div>
                </div>
               <!-- <div class="swiper-slide" style="width: 100%; height: 580px; object-fit: cover;">
                    <img src="assets/img/slider/cqai-6.jpg" alt="Our Team" style="width: 100%; height: 580px; object-fit: cover;">
                        <div class="slide-caption">
                            <h5>Dedicated Team of Quality Professionals</h5>
                        </div>
                </div>
                <div class="swiper-slide" style="width: 100%; height: 580px; object-fit: cover;">
                    <img src="assets/img/slider/cqai-6.jpg" alt="Innovation" style="width: 100%; height: 580px; object-fit: cover;">
                        <div class="slide-caption">
                            <h5>Innovative Solutions for Quality Assurance</h5>
                        </div>
                </div>-->
            </div>
        </div>
    </div>

    <!-- index.php main content -->
    <main>
        <!-- Circular Navigation Links -->
            <section class="nav-cards">
                <div class="card-nav">
                    <a href="qai/inspectorate.php" class="nav-card">
                    <h3>QAI</h3>
                    <p>Ensuring safety, compliance, and operational excellence.</p>
                    </a>
                    <a href="services/services.php" class="nav-card">
                    <h3>Services</h3>
                    <p>Support and logistics for air force operations.</p>
                    </a>
                    <a href="publication/publication.php" class="nav-card">
                    <h3>Publications</h3>
                    <p>Access official documents, manuals, and updates.</p>
                    </a>
                    <a href="training/training.php" class="nav-card">
                    <h3>Training</h3>
                    <p>Skill development and professional training programs.</p>
                    </a>
                    <a href="productivity/productivity.php" class="nav-card">
                    <h3>Productivity</h3>
                    <p>Tracking performance and continuous improvements.</p>
                    </a>
                </div>
                </section>

        <!-- News Marquee -->
        <section class="news-marquee">
            <div class="marquee-content">
                <span class="me-5"><i class="fas fa-bullhorn me-2"></i> New quality standards implemented effective June 2023</span>
                <span class="me-5"><i class="fas fa-bullhorn me-2"></i> Upcoming inspector training workshop - Register now!</span>
                <span class="me-5"><i class="fas fa-bullhorn me-2"></i> Annual quality assurance report now available</span>
            </div>
        </section>

        <!-- Subhead Columns -->
            <section class="subhead-columns">
                <div class="row" id="subhead-row">
                    <div class="col-md-2 mb-4 mb-md-0">
                        <div class="subhead-column">
                            <h4 class="subhead-title">Inspectorate</h4>
                            <ul class="subhead-list">
                                <li><a href="qai/inspectorate.php#org" style="text-decoration: none; color: var(--dark-color);"> About</a> </li>
                                <li><a href="qai/inspectorate.php#functions" style="text-decoration: none; color: var(--dark-color);">Policy</a></li>
                                <li><a href="qai/inspectorate.php#structure" style="text-decoration: none; color: var(--dark-color);">Structure</a></li>
                                <li><a href="qai/inspectorate.php#responsibilities" style="text-decoration: none; color: var(--dark-color);">Staff</a></li>
                                <li><a href="qai/inspectorate.php#history" style="text-decoration: none; color: var(--dark-color);">History</a></li>
                                <li><a href="qai/inspectorate.php#achievements" style="text-decoration: none; color: var(--dark-color);">Achievement</a></li>
                                <!-- <li>Risk Assessment</li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4 mb-md-0">
                        <div class="subhead-column">
                            <h4 class="subhead-title">Services</h4>
                            <ul class="subhead-list">
                                <li><a href="services.php#org" style="text-decoration: none;color: var(--dark-color);">Quality Assurance Audits </a></li>
                                <li>Aircraft Competency </li>
                                <li>Latitudes and extensions </li>
                                <li>Modifications / R&D Project</li>
                                <li>Vehicle Emission Test </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4 mb-md-0">
                        <div class="subhead-column">
                            <h4 class="subhead-title">Publication</h4>
                            <ul class="subhead-list">
                                <li>Airworthiness Directives and Bulletins</li>
                                <li>QAI Safety Newsletters</li>
                                <li>Maintenance Programme </li>
                                <li>Technical library </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2 mb-4 mb-md-0">
                        <div class="subhead-column">
                            <h4 class="subhead-title">Training</h4>
                            <ul class="subhead-list">
                                <li>Approved Training Syllabus</li>
                                <li>Continues Professional Development </li>
                                <li>Productivity Improvement Professional Development</li>
                                <li>Outside Training</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="subhead-column">
                            <h4 class="subhead-title">Productivity</h4>
                            <ul class="subhead-list">
                                <li>Occupational Safety & Health</li>
                                <li>Environment </li>
                                <li>Quality Control Circles</li>
                                <li>Awards </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
    </main>

    <!-- footer.php content -->
        <?php
            include 'template/footer.php';
            include 'template/foot.php';
        ?>


    <!-- Bootstrap JS Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- script.js content -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            direction: 'horizontal',
            loop: true,
            autoplay: {
                delay: 2500,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
    <script>
        // Slider functionality
        document.addEventListener('DOMContentLoaded', function() {
            const slider = document.getElementById('mainSlider');
            const slides = document.querySelectorAll('.slide');
            let currentSlide = 0;
            const slideCount = slides.length;
            
            // Auto slide every 5 seconds
            setInterval(() => {
                currentSlide = (currentSlide + 1) % slideCount;
                slider.style.transform = `translateX(-${currentSlide * 100}%)`;
            }, 5000);
            
            // Add hover effects to all links
            const links = document.querySelectorAll('a');
            links.forEach(link => {
                link.addEventListener('mouseenter', function() {
                    this.style.transition = 'all 0.2s ease';
                });
            });
            
            // Marquee animation pause on hover
            const marquee = document.querySelector('.marquee-content');
            marquee.addEventListener('mouseenter', function() {
                this.style.animationPlayState = 'paused';
            });
            
            marquee.addEventListener('mouseleave', function() {
                this.style.animationPlayState = 'running';
            });
        });
    </script>
</body>
</html>