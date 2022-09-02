    // js
    $(document).ready(function(){

    const swiper = new Swiper('#ch .swiper', {
        // Optional parameters
      
        loop: true,
      
        // If we need pagination
        pagination: {
          el: '#ch .swiper-pagination',
        },
      
        // Navigation arrows
        navigation: {
          nextEl: '#ch .swiper-button-next',
          prevEl: '#ch .swiper-button-prev',
        },
        slidesPerView: 3,
        spaceBetween: 30,
        slidesPerGroup: 3,
        
        loopFillGroupWithBlank: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        
        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 50,
            slidesPerGroup: 1,
           },
          640: {
            slidesPerView: 1,
            spaceBetween: 30,
            slidesPerGroup: 1,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40,
            slidesPerGroup: 2,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50,
            slidesPerGroup: 3,
          },
        },
        
      });

    // $('#btn').click(function(){
    //   $('body').css('background-color','white')
    // });

  

// 제이쿼리
    $('.gnb_1da, .gnb_al_a, #quick > a').click(function(e){
        e.preventDefault(); // a 원래기능 없애
        $('.gnb_close_btn').click();
        $('body, html').animate({
            scrollTop : $($(this).attr('href')).offset().top
        }, 400)
    })

   
  //폼태그
  $('#onlineform [type=submit]').on('click submit',function(){
     
     if( $('#defaultCheck1').prop('checked') && $('#defaultCheck2').prop('checked')){
      return true;
     }else{
      alert('동의하기를 눌러주세요')
      return false;
     }
  })

  $('#online .click01').click(function(e){
    e.preventDefault();
    $('.popUpBox01').show();
  })
  $('.popUpBox01 button').click(function(e){
    e.preventDefault();
    $('.popUpBox01').hide();
  })

  $('#online .click02').click(function(e){
    e.preventDefault();
    $('.popUpBox02').show();
  })
  $('.popUpBox02 button').click(function(e){
    e.preventDefault();
    $('.popUpBox02').hide();
  })

 
   
})



