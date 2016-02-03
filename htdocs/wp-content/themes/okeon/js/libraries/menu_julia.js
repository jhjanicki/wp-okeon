jQuery(document).ready(function($){

	var cssmenu = $("#cssmenu");
	
	cssmenu.prepend('<div id="menu-button"> Menu </div>');
        cssmenu.find("#menu-button").on('click', function(){
          cssmenu.toggleClass('menu-opened');
          var mainmenu = cssmenu.next('ul');
          
          if (mainmenu.hasClass('open')) { 
            mainmenu.hide().removeClass('open');
          }
          else {
            mainmenu.show().addClass('open');
             // mainmenu.find('ul').show();
          }
        });


		
		 cssmenu.find('li ul').parent().addClass('has-sub');

        
          cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
          cssmenu.find('.submenu-button').on('click', function() {
            $(this).toggleClass('submenu-opened');
            if ($(this).siblings('ul').hasClass('open')) {
              $(this).siblings('ul').removeClass('open').hide();
            }
            else {
              $(this).siblings('ul').addClass('open').show();
            }
          });
  

		resizeFix = function() {
          if ($( window ).width() > 1024) {
            cssmenu.find('ul').show();
          }

          if ($(window).width() <= 768) {
            cssmenu.find('ul').hide().removeClass('open');
          }
        };
        resizeFix();

});