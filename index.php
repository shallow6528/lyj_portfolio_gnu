<?php
include_once('./_common.php');

define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/index.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_PATH.'/head_main.php');
?>



<section id="main" class="d-flex justify-content-center w-100 h-100">
        <div id="main_p" class="d-flex justify-content-around flex-column vw100 w-100" class="container_wr">
            <div class="main_t mw-100">
                <?php echo latest('main_logo','as',1,0); ?>
            </div>
            <div class="main_s">
                <h2 class="text-right pr-5 font-weight-bold">총 상금 5,000만원</h2>
                <div class="slide mw-100">
                    <?php echo latest('slide','red',4,1000);?>
                </div>
            </div>
        </div> 
        <div class="main_bg position-absolute row m-0">
            <div class="main_bg_01 col-12 col-lg-6 mw-100">
                <img src="https://shallow6528.cafe24.com/award/data/editor/2207/thumb-2ecda41053eb69031df57b0e160e4d1a_1658471565_5308_835x938.png" alt="배경1">
            </div>
            <div class="main_bg_02 d-none d-lg-block col-lg-6 mw-100">
                <img src="https://shallow6528.cafe24.com/award/data/editor/2207/thumb-2ecda41053eb69031df57b0e160e4d1a_1658471622_332_835x939.png" alt="배경2">
            </div>
        </div>
</section>    

<section id="about" class="m-auto w-100 mb-0 ">
    <?php echo latest('about','about',1,100);?>
</section>

<section id="ch">
    <?php echo latest('free','free',1,100);?>
</section>

<section id="event" class="ptb-7 d-flex h-auto justify-content-center bg-white">
    <?php echo latest('event','event',1,100);?>
    <?php //include_once(G5_PATH.'/map.php'); ?>
</section>

<section id="info">
    <?php echo latest('info','info',1,0);?>
</section>

<?php include_once(G5_PATH.'/online.php'); ?>

<?php include_once(G5_PATH.'/tail.php');