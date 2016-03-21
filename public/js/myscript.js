jQuery(document).ready(function($) {
jQuery.fn.exist = function() {
   return $(this).length;
}
  function setHeiHeight() {
      $('.height').css({
          height: $(window).height() + 'px'
      });
  }
  setHeiHeight(); // устанавливаем высоту окна при первой загрузке страницы
  $(window).resize( setHeiHeight ); // обновляем при изменении размеров окна
  });
  
  $(window).scroll(function() {
  var par = $(this).scrollTop();
  /*Лого*/
  $("#logo").css({
  	"transform" :"translate3d(0px , " + par /2 + "%, .0px)",
  	"-webkit-transform" : "translate3d(0px , " + par /2 + "%, .0px)",
  	"-moz-transform" : "translate3d(0px , " + par /2 + "%, .0px)"

  });
  
  $('.tabs').easytabs();
  });