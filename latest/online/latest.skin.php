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
      
            
            <?php echo $list[$i]['wr_content']?>

<section id="online">
    <div class="container">
        <h2 class="mb-5">온라인 접수</h2>
        <div class="container_wr col-md-8 mx-md-auto">
        <form name="onlineform">
            <input class="form-control mb-3" type="text" placeholder="응모자 성명" aria-label="default input example">
            <input class="form-control mb-3" type="text" placeholder="연락처" aria-label="default input example">
            <input class="form-control mb-3" type="text" placeholder="이메일" aria-label="default input example">
            <select class="custom-select mb-3" id="inputGroupSelect02" aria-label=".form-select-lg example">
                <option selected="상세부문">상세부문
                    <option value="fairytale">저학년 동화책</option>
                    <option value="shortstory">고학년 단편</option>
                    <option value="novel">고학년 장편</option>
                </option>
            </select>
            <input class="form-control" type="text" placeholder="작품제목" aria-label="default input example">
            <div class="form-group">
                <label for="exampleFormControlTextarea1"></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="작품설명"></textarea>
            </div>
            <div class="input-group mb-3">
                <div class="custom-file">
                    <input type="file" class="custom-file-input" id="inputGroupFile02">
                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">원고첨부</label>
                </div>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea1"></label>
                <textarea class="form-control" id="exampleFormControlTextarea1" style="resize:none" rows="3" placeholder="유의사항 
    * 작품 응모시 파일명이나 내용에 이름(필명)을 기재 시 심사에서 제외될 수 있습니다. 
    ​*그림책은 1개의PDF파일로 변환하여 제출 바랍니다.
    * 단편은 3편을 한개의 파일로 한번에 응모 바랍니다. 
    (1편씩 3번 접수시 응모 편수 미달로 심사에서 제외될 수 있습니다.)
    *수상작에 대한 출판권은 출간일 후3년간 주최사(관계사)에 귀속됩니다.
    *상금에는 인세가 포함되어 있으며,제세공과금은 수상자 본인이 부담합니다.
    *심사 기준에 맞는 작품이 없을 경우 수상작이 없을 수 있습니다" readonly ></textarea>
            </div>
            <div class="form-check-all m-0">
                <dl class="row justify-content-between">
                    <dt class="">
                        <p class="">개인정보 수집 및 이용 동의</p>
                    </dt>
                    <dt class="row">
                        <div class="pr-3"><button class="btn btn_b">내용보기</button></div>
                        <div class="btn-agree-1"><button class="btn btn-primary">
                            <div class="form-check">
                                <input class="form-check-input d-none" type="checkbox" value="" id="defaultCheck1">
                                <label class="form-check-label" for="defaultCheck1"><i class="fa-solid fa-check"></i>동의하기</label>     
                            </div></button>
                        </div>
                        
                    </dt>
                </dl>
                <dl class="row justify-content-between">
                    <dt class="">
                        <p class="">개인정보 제공 동의</p>
                    </dt>
                    <dt class="row">
                        <div class="pr-3"><button class="btn btn_b">내용보기</button></div>
                        <div class="btn-agree-2"><button class="btn btn-primary">
                            <div class="form-check">
                                <input class="form-check-input d-none" type="checkbox" value="" id="defaultCheck2" >
                                <label class="form-check-label" for="defaultCheck2"><i class="fa-solid fa-check"></i>동의하기</label>     
                            </div></button>
                        </div>
                    </dt>
                </dl>
            </div>
            <div class="row justify-content-center">
                <div class="mr-3">
                   <button class="btn btn_b" type="reset">취소하기</button>
                </div>
                <div class="">
                   <button class="btn btn-primary" type="submit">접수하기</button>
                </div> 
            </div>
        </div>
        </form>
    </div>
   
</section>
       
    <?php }  ?>

    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
 
