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



<div class="container">
    <h2 class="pb-5">
        <?php echo $list[$i]['wr_subject']?>
    </h2>
    <div class="container_wr">
    <ul>
        <li class="info_01  row justify-content-between">
			<h5 class=" ft700 ft_size_012 position-relative col-md-3 col-sm-12 pt-3">
				<span class="number">01</span> 공모 부문 및 작품 분량<span>
			</span></h5>
			<div class="col-md-9 col-sm-12">
					<div class="info_img  row justify-content-center p-3">
						<img src="https://shallow6528.cafe24.com/award/data/editor/2207/5dfb3d3f818d263924ac3a65c253a667_1658381877_9121.png" title="5dfb3d3f818d263924ac3a65c253a667_1658381877_9121.png"><br>
					</div>
					<div class="info_text01 row justify-content-between pl-3 pr-3 align-items-center">
							<div class="info_text01_t ">
								<p>작품 분량은 심사에 큰 영향을 미치지 않습니다.<br>
								그림책은 글과 그림을 포함한 한 권 분량의 동화<br>
								(팀워크 가능/ 유아~초등 저학년 대상 그림책)<br>
								단편은 3편 이상 응모해야 정상 접수(단행본 1권 분량)</p>
							</div>
							<div class="info_text01_svg  m-md-0 m-auto">
								<h4 class="font-weight-bold pr-md-5 pr-0"><?php echo $list[$i]['wr_1']?><br></h4>
							</div>
					</div>
				</div>
			</li>

<li class="info_01  row justify-content-between">
		<h5 class=" ft700 ft_size_012 position-relative col-md-3 col-sm-12">
				<span class="number">02</span> 주제 및 자격
		</h5>
		<div class="col-md-9 col-sm-12">
		<p>제한 없음 (단, 본 MBC창작동화대상 기 입상자 응모 불가능)<br></p>
		<p>1인당 출품작 제한 없음 (단, 수상은 1인 1작품)</p>
		</div>
		</li>
<li class="info_01  row justify-content-between">
		<h5 class=" ft700 ft_size_01 position-relative col-md-3 col-sm-12">
				<span class="number">03</span> 응모방법</h5>
		<div class="col-md-9 col-sm-12">
<dl class="row ft-size-01">
<dt class="col-3 ft400 info_bf"> 접수신청</dt>
<dd class="pl-3 pl-md-0">페이지 내에서 응모지원서와 함께 작품 첨부 후 개인정보공개<span class="d-block d-md-inline-block break-spaces">동의하고 접수</span></dd>
</dl></div>
</li>
<li class="info_01  row justify-content-between">
<h5 class=" ft700 position-relative col-md-3 col-sm-12">
				<span class="number">04</span> 원고마감 및 발표</h5>
		<div class="col-md-9 col-sm-12">
<dl class="row ft-size-01">
<dt class="col-3 ft400 info_bf"> 원고마감</dt>
<dd> <?php echo $list[$i]['wr_2']?></dd>
</dl>
<dl class="row ft-size-01">
<dt class="col-3 ft400 info_bf"> 발표</dt>
<dd class=""> <?php echo $list[$i]['wr_3']?></dd>
</dl></div>

</li>
<li class="info_01  row justify-content-between">
<h5 class=" ft700 ft_size_012 position-relative col-md-3 col-sm-12">
				<span class="number">05</span> 문의</h5>
		<div class="col-md-9 col-sm-12">
<p><?php echo $list[$i]['wr_4']?><br></p></div>
</li>
<li class="info_01  row justify-content-between">
<h5 class=" ft700 ft_size_012 position-relative col-md-3 col-sm-12">
				<span class="number">06</span> 응모 시 유의사항</h5>
		<div class="col-md-9 col-sm-12">
<p class="info_bf"> 응모작품은 국내외에 발표된 적이 없는 순수 창작품이어야 합니다. 
<br> (표절 또는 기타 저작권 문제가 발생할 경우에는 당선이 취소되며 모든 법적 책임은 응모자에게 있음.)</p>
<p class="info_bf"> 공모신청시 기입한 작가의 성명(반드시 본명 후 필명 기입), 생년월일, 연락처 등 기재사항이 사실과 다를 경우에는 당선이 취소됩니다.</p>
<p class="info_bf"> 응모작품은 반환되지 않습니다.</p></div>
</li>
</ul>
</div>
</div>

    <?php }  ?>

    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
 
