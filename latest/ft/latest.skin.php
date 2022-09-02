<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
    require_once(G5_THEME_PATH.'/tail.php');
    return;
}

if (G5_IS_MOBILE) {
    include_once(G5_MOBILE_PATH.'/tail.php');
    return;
}
?>

    </div>

</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">

    <div id="ft_wr">
        <div class="ft_top bg-light"></div>
        <div id="ft_link" class="ft_cnt row pb-3 m-auto">
            <!-- <a href="<?php echo get_pretty_url('content', 'company'); ?>">회사소개</a> -->
            <a href="<?php echo get_pretty_url('content', 'privacy'); ?>" class="pr-5">개인정보처리방침</a>
            <!-- <a href="<?php echo get_pretty_url('content', 'provision'); ?>">서비스이용약관</a> -->
            <a href="<?php echo get_device_change_url(); ?>">모바일버전</a>
        </div>
        <div id="ft_company" class="ft_cnt row m-auto">
            <div id="logo" class="pt-3 pb-5">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_IMG_URL ?>/logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
            </div>
	        <p class="ft_info">
                (재)금성    문화재단  이사장 : 김무상<br>
				사업자등록번호 : 105-82-08884<br>
				<?php echo $list[$i]['wr_1']?><br>
                <?php echo $list[$i]['wr_2']?><br>
			</p>
	    </div>
    </div>
    
   
    <div id="ft_copy">Copyright &copy; <b>이유진</b> All rights reserved.</div>

    


    <div id="quick" class="q-menu text-center bg-white overflow-hidden position-fixed">
        <a href="#none">
            <i class="fa-solid fa-plus" aria-hidden="true"></i><span class="sound_only">퀵메뉴</span>
        </a>
        <ul class=" position-absolute">
            <li id="up" class="">
                <a href="#">
                    <i class="fa fa-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
                </a>
            </li>
            <li>
                <a href="#about">
                    <i class="fa-solid fa-user" aria-hidden="true"></i><span class="sound_only">소개</span>
                </a>
            </li>
            <li>
                <a href="#ch">
                <i class="fa-solid fa-book" aria-hidden="true"></i><span class="sound_only">어린이 독서단</span>
                </a>
            </li>
            <li>
                <a href="#event">
                <i class="fa-solid fa-location-dot" aria-hidden="true"></i><span class="sound_only">이벤트</span>
                </a>
            </li>
            <li>
                <a href="#info">
                    <i class="fa-solid fa-circle-info" aria-hidden="true"></i><span class="sound_only">공모전 정보</span>
                </a>
            </li>
            <li class="pb-1">
                <a href="#online">
                    <i class="fa-solid fa-file-lines" aria-hidden="true"></i><span class="sound_only">접수하기</span>
                </a>
            </li>
        </ul>
    </div>

    <script>
        $(document).ready(function(){
            $('#quick > a').click(function(){
                $('#quick').toggleClass('on');
            });
            $('#quick .up').click(function(){
                $('body, html').animate({ 
                    scrollTop : $($(this).attr('href')).offset().top 
                    },400,function(){
                    $('#quick .up').removeClass('on')         
                });
            });
        });
    </script>
        
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_PATH."/tail.sub.php");