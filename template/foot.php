<!-- Bootstrap JS Bundle with Popper -->
<script src="assets/js/bootstrap.bundle.min.js"></script>

<script src="assets/js/swiper-bundle.min.js"></script>
<script>
    var swiper = new Swiper('.swiper-container', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,
        autoplay: {
            delay: 2000,
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