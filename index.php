<?php include 'template/head.php'; ?>

<body>

    <?php
    include 'template/header.php';
    include 'template/slider.php';
    ?>

    <main>
        <?php
        include 'sections/nav-articles.php';
        include 'sections/news-marquee.php';
        include 'sections/subhead.php';
        ?>
    </main>

    <?php
    include 'template/footer.php';
    include 'template/foot.php';
    ?>
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
        document.addEventListener('DOMContentLoaded', function() {
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