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
        <h2>
            <?php echo $list[$i]['wr_subject']?>
        </h2>
        <div class="container_wr row pt-4 m-auto">
            <div data-aos="fade-up" class="text_1 col-md-6">
                <?php echo $list[$i]['wr_content']?>
                <div class="make">
                    <ul>
                    <li><p><span class="ft-size-01"><?php echo $list[$i]['wr_1']?></span></p></li>
                    <li><p><span class="ft-size-01"><?php echo $list[$i]['wr_2']?></span></p></li>
                    </ul>
                    <ul>
                    <li><p><span class="ft-size-01"><?php echo $list[$i]['wr_3']?></span></p></li>
                    <li><p><span class="ft-size-01"><?php echo $list[$i]['wr_4']?></span></p></li>
                    </ul>
                </div>
            </div>
            <div class="about_img col-md-6">
                <?php echo $img_content ?>
            </div>

            </div>
    
        </div> 
    </div>
         
       
    <?php }  ?>

    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
 
