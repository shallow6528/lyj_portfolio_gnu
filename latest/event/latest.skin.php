<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 1920;
$thumb_height = 886;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>


   

        <?php
            for ($i=0; $i<$list_count; $i++) {
            $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

            if($thumb['src']) {
                $img = $thumb['ori'];
            } else {
                $img = G5_IMG_URL.'/no_img.png';
                $thumb['alt'] = '이미지가 없습니다.';
            }
           
        ?>
        
    
<div class="container event_t">
<h2>
    <span class="">새로운 작가를 <span class="pt-2 d-block d-md-inline-block break-spaces">찾고있어요</span></span>
</h2>
    <div class="container_wr row m-auto ptb-7 d-flex w-100 justify-content-between">
    <div class="event_text col-md-6 p-lg-0 pb-5  d-md-block d-flex align-items-center flex-column">
    <p>
        <span class="ft500 ft-size-01  d-flex d-md-block align-items-center flex-column">지하철 광고 사진을 찍어
    <span>
    <span class="position-relative event-line ft700 ft-size-015 pt-2 d-md-inline-block break-spaces"> #MBC창작동화대상</span>
    <span class="ft500 ft-size-01">과 함께</span></span>
    </span>
    </p>

    <p><span class="ft500 ft-size-01">인스타그램에 게시해주세요 !</span></p>
    <p><span class="ft500 ft-size-01">추첨을 통해 4분에게 올해 선정될 대상작을 드립니다!</span></p>
    <p><span class="ft500 ft-size-01">(그림책, 단편책 1권씩 각 2명)</span></p>
    <div class="event_info  m-md-0 m-auto">
    <dl class="row m-0 justify-content-between pb-1">
    <dt><span class="ft500 ft-size-01">광고위치</span></dt>
    <dd class="col-9"><span class="ft500 ft-size-01"><?php echo $list[$i]['wr_1']?></span></dd></dl>
    <dl class="row m-0 justify-content-between pb-1">
    <dt><span class="ft500 ft-size-01">참가기간</span></dt>
    <dd class="col-9"><span class="ft500 ft-size-01"><?php echo $list[$i]['wr_2']?></span></dd></dl>
    <dl class="row m-0 justify-content-between pb-1">
    <dt><span class="ft500 ft-size-01">당첨발표</span></dt>
    <dd class="col-9"><span class="ft500 ft-size-01"><?php echo $list[$i]['wr_3']?></span></dd></dl>

    </div>
    </div>


    <div class="api col-md-6 d-flex justify-content-end  align-items-center">
    <div class="kakaomap m-auto m-md-0" id="kakaomap" style='width:300px; height:300px'>
    </div>
            <!--
        * 카카오맵 - 약도서비스
        * 한 페이지 내에 약도를 2개 이상 넣을 경우에는
        * 약도의 수 만큼 소스를 새로 생성, 삽입해야 합니다.
    -->
    <!-- 1. 약도 노드 -->

    <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=d65b1ac232e73044b1f033afd67c51d2"></script>
    <script>
    var mapContainer = document.getElementById('kakaomap'), // 지도를 표시할 div 
        mapOption = { 
            center: new kakao.maps.LatLng(37.56996251,126.97799122), // 지도의 중심좌표
            level: 4 // 지도의 확대 레벨
        };

    var map = new kakao.maps.Map(mapContainer, mapOption); // 지도를 생성합니다

    var imageSrc = '/award/img/mark.png', // 마커이미지의 주소입니다    
        imageSize = new kakao.maps.Size(64, 69), // 마커이미지의 크기입니다
        imageOption = {offset: new kakao.maps.Point(27, 69)}; // 마커이미지의 옵션입니다. 마커의 좌표와 일치시킬 이미지 안에서의 좌표를 설정합니다.
        
    // 마커의 이미지정보를 가지고 있는 마커이미지를 생성합니다
    var markerImage = new kakao.maps.MarkerImage(imageSrc, imageSize, imageOption),
        markerPosition = new kakao.maps.LatLng(37.56996251,126.97799122); // 마커가 표시될 위치입니다

    // 마커를 생성합니다
    var marker = new kakao.maps.Marker({
        position: markerPosition, 
        image: markerImage // 마커이미지 설정 
    });

    // 마커가 지도 위에 표시되도록 설정합니다
    marker.setMap(map);  
    </script>

    </div>
    </div>
</div>


      
       
    <?php }  ?>

    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
 
