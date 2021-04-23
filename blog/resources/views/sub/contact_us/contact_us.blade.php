@include('/inc/head')
<link rel="stylesheet" href="/css/swiper.min.css">
<link rel="stylesheet" href="/css/sub.css">
<script src="/js/swiper.min.js"></script>
@include('/inc/header')
@include('/inc/sub_header')
    <div id="sub">
        <div class="sub_title">
            <p>INQUIRY</p>
            <h4>문의사항</h4>
        </div>
        <div class="contact_us">
            <div class="inner">
                <div class="swiper-container sub_slide">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide s_slide01">
                        </div>
                        <div class="swiper-slide s_slide02">
                        </div>
                    </div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="txt_box">
                    <ul>
                        <li>
                            <img src="/img/contact_ic01.png" alt="">
                            <p><span>연락처</span><em>|</em>02-452-2650</p>
                        </li>
                        <li>
                            <img src="/img/contact_ic02.png" alt="">
                            <p><span>팩스</span><em>|</em>02-452-2657</p>
                        </li>
                        <li>
                            <img src="/img/contact_ic03.png" alt="">
                            <p><span>이메일</span><em>|</em>bnf@bnfltd.co.kr</p>
                        </li>
                    </ul>
                    <img src="/img/contact_logo.png" alt="">
                </div>
            </div>          
        </div>
    </div>
@include('/inc/footer')
<script>
    $(function(){
        var mySwiper = new Swiper('.sub_slide', {
            // effect : 'fade',
            direction: 'horizontal',
            loop: true,
            autoplay : {
                delay:2000,
            },
            speed : 1000,
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
        });
    });
   
</script>