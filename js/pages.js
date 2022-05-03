$(function(){
  var navItem = $('.nav_item'),
      pageBlock = $('.page');
  
  navItem.on('click', function(){
    // индекс пункта меню
    var thisIndex = $(this).index();
    logoItem.removeClass('active');
    mainpage.removeClass('active');
    // убрать актив у всех пунков меню
    navItem.removeClass('active');
    // добавить актив для пункта на который нажали
    $(this).addClass('active');
    
    // убрать актив у всех страниц
    pageBlock.removeClass('active');
    // добавить актив для страницы по индексу
    pageBlock.eq(thisIndex).addClass('active');
  });

    var logoItem = $('.block-logo'),
        mainpage = $('.main_page');

  logoItem.on('click', function(){

    navItem.removeClass('active');
    // убрать актив у всех страниц
    pageBlock.removeClass('active');
    mainpage.addClass('active');
    logoItem.addClass('active');
  });

});