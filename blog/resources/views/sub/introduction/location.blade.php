@include('/inc/head')
<link rel="stylesheet" href="/css/sub.css">
@include('/inc/header')
@include('/inc/sub_header')
    <div id="sub">
        <div class="sub_title">
            <p>location</p>
            <h4>찾아오시는 길</h4>
        </div>
        <div class="location">
            <div class="inner">
                <div>
                    <h5><i class="fas"></i><span>본사</span>서울시 송파구 송파대로 167, B동 11층 09호</h5>
                    <div id="daumRoughmapContainer1618819620798" class="map root_daum_roughmap root_daum_roughmap_landing"></div>
                </div>
                <div>
                    <h5><i class="fas"></i><span>공장</span>경기도 광주시 곤지암읍 연곡길 42번길 10</h5>
                    <div id="daumRoughmapContainer1618819771788" class="map root_daum_roughmap root_daum_roughmap_landing"></div>
                </div>
            </div>
        </div>
    </div>
@include('/inc/footer')
<script charset="UTF-8" class="daum_roughmap_loader_script" src="https://ssl.daumcdn.net/dmaps/map_js_init/roughmapLoader.js"></script>

<script charset="UTF-8">
	new daum.roughmap.Lander({
		"timestamp" : "1618819620798",
		"key" : "25fab",
		"mapWidth" : "588",
		"mapHeight" : "400"
	}).render();

    new daum.roughmap.Lander({
		"timestamp" : "1618819771788",
		"key" : "25fae",
		"mapWidth" : "588",
		"mapHeight" : "400"
	}).render();
</script>
