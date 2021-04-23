@include('/inc/head')
<link rel="stylesheet" href="/css/swiper.min.css">
<link rel="stylesheet" href="/css/main.css">
<script src="/js/swiper.min.js"></script>
@include('/inc/header')
    <div id="main">
        <div class="swiper-container main_slide">
            <div class="swiper-wrapper">
                <div class="swiper-slide slide01">
                    <div class="txt_box inner">
                        <img src="/img/p_red_ic.png" alt="">
                        <h2>Best-Valve and Facilities</h2>
                        <p> Bnfltd 리뉴얼 홈페이지 입니다.</p>
                    </div>
                </div>
                <div class="swiper-slide slide02">
                    <div class="txt_box inner">
                        <img src="/img/p_red_ic.png" alt="">
                        <h2>Best-Valve and Facilities</h2>
                        <p> Bnfltd 리뉴얼 홈페이지 입니다.</p>
                    </div>
                </div>
                <div class="swiper-slide slide03">
                    <div class="txt_box inner">
                        <img src="/img/p_red_ic.png" alt="">
                        <h2>Best-Valve and Facilities</h2>
                        <p> Bnfltd 리뉴얼 홈페이지 입니다.</p>
                    </div>
                </div>
                <div class="swiper-slide slide04">
                    <div class="txt_box inner">
                        <img src="/img/p_red_ic.png" alt="">
                        <h2>Best-Valve and Facilities</h2>
                        <p> Bnfltd 리뉴얼 홈페이지 입니다.</p>
                    </div>
                </div>
            </div>
            <div class="page_box inner">
                <div class="swiper-pagination"></div>
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>
        </div>
    </div>
@include('/inc/footer')
<script>
    $(function(){
        var mySwiper = new Swiper('.swiper-container', {
            effect : 'fade',
            direction: 'horizontal',
            loop: true,
            autoplay : {
                delay:2000,
            },
            speed : 1000,

            pagination: {
                el: '.swiper-pagination',
                clickable: true,   
                // dynamicBullets: true,
                // type: 'fraction',            

            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
   
</script>