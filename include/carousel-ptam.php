<div class="center">
    <div class="container-fluid">
        <div class="text-center">

            <style>
                .swiper-container {
                    width: 1280px;
                    height: 400px;
                }
            </style>
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide">
                        <img src="./image/ptam1.jpg" alt="">
                    </div>
                    <div class="swiper-slide"><img src="./image/carousel/PTAM/slide1.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./image/carousel/PTAM/slide2.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./image/carousel/PTAM/slide3.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./image/carousel/PTAM/slide4.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="./image/carousel/PTAM/slide5.jpg" alt=""></div>
                </div>
                <!-- If we need pagination -->
                <div class="swiper-pagination"></div>

                <!-- If we need navigation buttons -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>

                <!-- If we need scrollbar -->
                <div class="swiper-scrollbar"></div>
            </div>
        </div>
    </div>
    <script>
        var mySwiper = new Swiper('.swiper-container', {
            // Optional parameters
            centeredSlides: true,
            autoplay: {
                delay: 4500,
                disableOnInteraction: false,
            },

            breakpoints: {
                '320': {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                '480': {
                    slidesPerView: 1,
                    spaceBetween: 40,
                },
                '640': {
                    slidesPerView: 3,
                    spaceBetween: 60,
                },
                '1280': {
                    slidesPerView: 1,
                    spaceBetween: 80,
                },

            },

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        })
    </script>
</div>