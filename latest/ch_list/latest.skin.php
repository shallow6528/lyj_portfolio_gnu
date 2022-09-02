<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 500;
$thumb_height = 717;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

    <?php
        for ($i=0; $i<$list_count; $i++) {
      
            $img_link_html = '';
            
            $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);

            if( $i === 0 ) {
                $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

                if($thumb['src']) {
                    $img = $thumb['src'];
                } else {
                    $img = G5_IMG_URL.'/no_img.png';
                    $thumb['alt'] = '이미지가 없습니다.';
                }
                $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
                $img_link_html = '<a href="'.$wr_href.'" class="lt_img" >'.run_replace('thumb_image_tag', $img_content, $thumb).'</a>';
        }
    ?>
       <div class="container text-center py-5 position-relative">
        <h2>어린이 독서단</h2>
        <p class="ft600">새로운 상상을 먼저 경험하세요!</p>
           <div id="slidebook">
            <div class="swiper">  
                <div class="swiper-button-next d-md-block d-none">
                       <span class="sound_only">이전</span>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide book border bg-white d-flex" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=1">
                            <strong class="">                       
                                    <span class="d-block">이름 : 김○진</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 저학년 동화책</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award.jpg" alt="어린이 공모전 작품 1">
                        </a>
                    </div>
                    <div class="swiper-slide book border bg-white d-flex" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=2">
                            <strong>                       
                                    <span class="d-block">이름 : 김○지</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 고학년 단편</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award-2.jpg" alt="어린이 공모전 작품 2">
                        </a>
                    </div>
                    <div class="swiper-slide book border bg-white d-flex" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=3">
                            <strong>                       
                                    <span class="d-block">이름 : 곽○이</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 고학년 장편</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award-3.jpg" alt="어린이 공모전 작품 3">
                        </a>
                    </div>
                    <div class="swiper-slide book border bg-white d-flex" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=4">
                            <strong>                       
                                    <span class="d-block">이름 : 조○연</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 저학년 동화책</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award.jpg" alt="어린이 공모전 작품 4">
                        </a>
                    </div>
                    <div class="swiper-slide book border bg-white d-flex" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=5">
                            <strong>                       
                                    <span class="d-block">이름 : 김○니</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 저학년 동화책</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award-2.jpg" alt="어린이 공모전 작품 5">
                        </a>
                    </div>
                    <div class="swiper-slide book border bg-white d-flex" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=6">
                            <strong>                       
                                    <span class="d-block">이름 : 전○연</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 저학년 동화책</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award-3.jpg" alt="어린이 공모전 작품 6">
                        </a>
                    </div>
                    <div class="swiper-slide book border bg-white d-flex" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=7">
                            <strong>                       
                                    <span class="d-block">이름 : 송○기</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 저학년 동화책</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award.jpg" alt="어린이 공모전 작품 7">
                        </a>
                    </div>
                    <div class="swiper-slide book border bg-white d-flex" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=8">
                            <strong>                       
                                    <span class="d-block">이름 : 예○화</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 고학년 단편</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award-2.jpg" alt="어린이 공모전 작품 8">
                        </a>
                    </div>
                    <div class="swiper-slide book border bg-white d-flex" >
                        <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list&wr_id=9">
                            <strong>                       
                                    <span class="d-block">이름 : 엽○화</span>
                                    <span class="d-block">작품명: </span>
                                    <span class="d-block">분류: 고학년 장편</span>
                            </strong>
                            <img src="/award/img/QRCodeImg-award-3.jpg" alt="어린이 공모전 작품 9">
                        </a>
                    </div>                              
                </div>
                <div class="swiper-pagination d-block d-md-none"></div>
                <div class="swiper-button-prev d-md-block d-none">
                        <span class="sound_only">다음</span>
                </div>                
            </div>
        </div>
             <p class="ft500">
                <span class="d-block mb-3">QR코드 통해 친구들보다 먼저 읽고 감상을 남겨주세요.</span>
                <span class="d-block mb-3">우수한 감상평이 가장 많은 작품이<span class="pt-2 d-block d-md-inline-block break-spaces"> 눈높이 상으로 선정됩니다</span></span>
             </p>
            <a href="https://shallow6528.cafe24.com/award/bbs/board.php?bo_table=ch_list" class='btn p-2'>다른 작품도 읽어보기</a>
    </div>
         
       
    <?php }  ?>

    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
 
