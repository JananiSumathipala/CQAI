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
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <!-- header.php content -->
               
            <div class="position-relative top-8 start-8 p-4 z-3">
               <a href="index.php"> <img src="assets/img/logo/QAI_NEW_LOG.png" alt="Command Quality Assurance Inspectorate Logo" class="logo">
            </div>
    <div class="position-relative" style="margin-top: -6rem;">   
        <div class="swiper-container">  
            <div class="swiper-slide">
                <div class="swiper-slide">
                    <img src="assets/img/slider/cqai-6.jpg" alt="Quality Inspection">
                        <div class="slide-caption">
                            <h5>Ensuring Excellence in Every Operation</h5>
                        </div>
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/slider/cqai-6.jpg" alt="Our Team">
                        <div class="slide-caption">
                            <h5>Dedicated Team of Quality Professionals</h5>
                        </div>
                </div>
                <div class="swiper-slide">
                    <img src="assets/img/slider/cqai-.jpg" alt="Innovation">
                        <div class="slide-caption">
                            <h5>Innovative Solutions for Quality Assurance</h5>
                        </div>
                </div>
            </div>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- script.js content -->
     <script>
        var swiper = new Swiper('.swiper-container', {
            // Optional parameters
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