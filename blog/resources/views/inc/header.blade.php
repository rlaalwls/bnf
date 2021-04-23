<body>
    <div id="container">
        <span class="respon_menu_aside"></span>
        <div id="header">
            <div class="inner">
                <img src="/img/sub_bar.png" alt="" class="sub_bar">
                <h1><a href="/"><img src="/img/logo.png" alt=""></a></h1>
                <ul class="dep01">
                    <li class="dep01_li">
                        <a href="/introduction/greeting">회사소개</a>
                        <ul class="dep02">
                            <li><a href="/introduction/greeting">인사말</a></li>    
                            <li><a href="/introduction/history">연혁</a></li>    
                            <li><a href="/introduction/organization">조직도</a></li>    
                            <li><a href="/introduction/location">찾아오시는 길</a></li>    
                        </ul>    
                    </li>
                    <li class="dep01_li">
                        <a href="/product/tomoe/rebber">제품소개</a>
                        <ul class="dep02">
                            <li><a href="/product/tomoe/rebber">TOMOE</a></li>    
                            <li><a href="/product/koso/glode">KOSO</a></li>    
                        </ul>    
                    </li>
                    <li class="dep01_li">
                        <a href="/data_room/data_room">자료실</a>
                        <ul class="dep02">
                            <li><a href="/data_room/data_room">주요실적 (연도별 표)</a></li>    
                        </ul>    
                    </li>
                    <li class="dep01_li">
                        <a href="/customer/customer">주요고객사</a>
                        <ul class="dep02">
                            <li><a href="/customer/customer">이미지자료</a></li>     
                        </ul>    
                    </li>
                    <li class="dep01_li">
                        <a href="/contact_us/contact_us">CONTACT US</a>
                        <ul class="dep02">
                            <li><a href="/contact_us/contact_us">연락처</a></li>    
                        </ul>    
                    </li>
                </ul>
                <div class="respon_menu">
                    <img src="/img/close_btn.png" alt="" class="close_btn">
                    <img src="/img/logo.png" alt="" class="sub_logo">
                    <div class="sub_menu_box">
                        <div class="s_m">
                            <p>
                                <a href="javascript:void(0);">회사소개</a>
                                <img src="/img/down_ic.png" alt="" class="down_ic">
                            </p>                    
                            <ul>
                                <li><a href="/introduction/greeting">인사말</a></li>
                                <li><a href="/introduction/history">연혁</a></li>
                                <li><a href="/introduction/organization">조직도</a></li>
                                <li><a href="/introduction/location">찾아오시는 길</a></li>
                            </ul>
                        </div>
                        <div class="s_m">
                            <p>
                                <a href="javascript:void(0);">제품소개</a>
                                <img src="/img/down_ic.png" alt="" class="down_ic">
                            </p>                    
                            <ul>
                                <li><a href="/product/tomoe/rebber">TOMOE</a></li>
                                <li><a href="/product/koso/glode">KOSO</a></li>
                            </ul>
                        </div>
                        <div class="s_m">
                            <p>
                                <a href="javascript:void(0);">자료실</a>
                                <img src="/img/down_ic.png" alt="" class="down_ic">
                            </p>                    
                            <ul>
                                <li><a href="/data_room/data_room">주요실적(연도별 표)</a></li>
                            </ul>
                        </div>
                        <div class="s_m">
                            <p>
                                <a href="javascript:void(0);">주요고객사</a>
                                <img src="/img/down_ic.png" alt="" class="down_ic">
                            </p>                    
                            <ul>
                                <li><a href="/customer/customer">이미지자료</a></li>
                            </ul>
                        </div>
                        <div class="s_m">
                            <p>
                                <a href="javascript:void(0);">CONTACT US</a>
                                <img src="/img/down_ic.png" alt="" class="down_ic">
                            </p>                    
                            <ul>
                                <li><a href="/contact_us/contact_us">연락처</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
        <script>
            $(function(){
                $('#header .dep01').hover(function(){
                    $(this).find('.dep02').stop().slideToggle(300);
                    $(this).closest('#header').toggleClass('on');
                });
                
                /* 모바일메뉴 */
                $('#header .sub_bar').click(function(){
                    $(this).siblings('.respon_menu').addClass('active');
                    $('body').css({position:'fixed'});
                    $('body').addClass('body_bg');
                });

                $('#header .respon_menu .close_btn').click(function(){
                    $(this).closest('.respon_menu').removeClass('active');
                    $('body').css({position:''});
                    $('body').removeClass('body_bg');
                });

                $('#header .s_m p').click(function(){
                    $(this).siblings('ul').slideToggle();
                    $(this).toggleClass('on');
                });    
            });
        </script>