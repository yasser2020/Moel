
$(document).ready(function() {
    
    'use strict';
    $('#formBtnTarget').on('click', function () {
    	// body...
    	$('#sideBar').slideToggle();

    })

	$('input, textarea').on('blur', function() {

    	if( $(this).val() != '') {

    		$(this).next().css({'top':'-1.3em', 'color': '#333'});
    	}
    	
	})

	

   


	 /* Toggle menu button*/
    $('.hamburger').on('click', function() {
      $(this).toggleClass('is-active','fast');
      $('.navbar-collapse').toggleClass('toggle');
      $('.collapse.toggle .nav-link').removeClass('fadeIn, fadeInRight');
      $('body').toggleClass('toggleBody');
     }) 

});    