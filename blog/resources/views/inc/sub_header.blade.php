@php
    $dep01_title = '';
    $dep02_title = '';
    $dep03_title = '';

    $re_sg_01 = request()->segment(1);
    $re_sg_02 = request()->segment(2);
    $re_sg_03 = request()->segment(3);

    switch ($re_sg_01) {
        case 'introduction':
            $dep01_title = '회사소개';
            break;
        case 'product':
            $dep01_title = '제품소개';
            break;
        case 'data_room':
            $dep01_title = '자료실';
            break;
        case 'customer':
        $dep01_title = '주요고객사';
        break;

        default:
            $dep01_title = 'CONTACT US';
            break;
    }

    switch ($re_sg_02) {
        case 'greeting':
            $dep02_title = '인사말';
            break;
        case 'history':
            $dep02_title = '연혁';
            break;
        case 'organization':
            $dep02_title = '조직도';
            break;
        case 'location':
            $dep02_title = '찾아오시는 길';
            break;
        case 'tomoe':
            $dep02_title = 'TOMOE';
            break;
        case 'koso':
            $dep02_title = 'KOSO';
            break;
        case 'data_room':
            $dep02_title = '자료실';
            break;
        case 'customer':
            $dep02_title = '파트너사';
            break;
        default:
            $dep02_title = '문의사항';
            break;
    }

    switch ($re_sg_03) {
        case 'rebber':
            $dep03_title = 'RUBBER LINED';
            break;
        case 'high':
            $dep03_title = 'HIGH PERFORMANCE';
            break;
        case 'terlon':
            $dep03_title = 'TEFLON LINED';
            break;
        case 'rotary':
            $dep03_title = 'ROTARY CONTROL';
            break;
        case 'check':
            $dep03_title = 'CHECK VALVE';
            break;

        default:
            $dep03_title = 'GLOBE CONTROL VALVE';
            break;
    }
@endphp


<div class="sub_header {{request()->segment(1)}}">
    <h3>{{$dep01_title}}</h3>
    <div class="sub_menu">
        <span><a href="/">HOME</a></span>
        <img src="/img/arrow_r.png" alt="">
        <span>{{$dep01_title}}</span>
        <img src="/img/arrow_r.png" alt="">
        <span>{{$dep02_title}}</span>
        @if(request()->segment(3) != '')
            <img src="/img/arrow_r.png" alt="">
            <span>{{$dep03_title}}</span>
        @endif
    </div>
</div>
@if(request()->segment(2) == 'tomoe')
    <div class="sub_sub_menu">
        <ul>
            <li class="@if(request()->segment(3) == 'rebber') on @endif"><a href="/product/tomoe/rebber">RUBBER LINED</a></li>
            <li class="@if(request()->segment(3) == 'high') on @endif"><a href="/product/tomoe/high">HIGH PERFORMANCE</a></li>
            <li class="@if(request()->segment(3) == 'terlon') on @endif"><a href="/product/tomoe/terlon">TEFLON LINED</a></li>
            <li class="@if(request()->segment(3) == 'rotary') on @endif"><a href="/product/tomoe/rotary">ROTARY CONTROL</a></li>
            <li class="@if(request()->segment(3) == 'check') on @endif"><a href="/product/tomoe/check">CHECK VALVE</a></li>
        </ul>
    </div>
@elseif(request()->segment(2) == 'koso')
    <div class="sub_sub_menu">
        <ul>
            <li class="@if(request()->segment(3) == 'glode') on @endif"><a href="/product/koso/glode">GLOBE CONTROL VALVE</a></li>
        </ul>
    </div>
@endif
