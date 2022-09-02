<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
$thumb_width = 210;
$thumb_height = 150;
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
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
 
    ?>
       <?php echo run_replace('thumb_image_tag', $img_content, $thumb); ?>
  
    <?php }  ?>
  


<?php
$end_date = date(20230630); //디데이 날짜
$d_day = ceil((strtotime($end_date) - time()) / 86400);

if ($end_date == date('Ymd')) {
$d_day = '오늘은 D-Day입니다';
} elseif ($d_day < 0) {
$d_day = 'D-Day가 종료 되었습니다.';
}
// } else {   
// $d_day = "D-$d_day 일 전입니다.";
// }
?>
 

<span class="font-weight-bold d-block ft700 ft-size-03">D-<?php echo $d_day ?></span>
<span class="font-weight-bold d-block ft700 ft-size-015">마감일 까지 <?php echo $d_day ?> 일 남았습니다.</span>





    