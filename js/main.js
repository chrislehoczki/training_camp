


jQuery(function ($) { 
	console.log("loaded main.js")


  //REMOVE TITLE FROM HYPERLING

  $("a").attr("title", "")

  //CHANGE NAV ON SCROLL
	function changeNavStyle(ev){


		var offset = window.pageYOffset;

    if(offset>200) {

//HEADER BUTTONS
      $(".header-buttons").css({
   'position' : 'fixed',
   'top' : '0px',

   'right' : '0px',
   'z-index' : '1000'
                });

    $(".header-buttons button").css({
   'display' : 'inline',
   'width' : '120px',
   'height' : '40px',
   'margin-top' : '5px'
                });



  $(".social-links").css({
    'height': '50px'
                });

    }
    else if (offset<200) {

      $(".header-buttons").css({
   'position' : 'relative',
                });

    $(".header-buttons button").css({
   'display' : 'block',
   'width' : '170px',
   'height' : '50px',
   'margin-top' : '0px'
                });

  $(".social-links").css({
    'height': 'auto'
                });




    }
}



window.onscroll=changeNavStyle


// LOAD UP THE SLIDER

//$(window).load(function() {


  $('.flexslider').flexslider({
    animation: "slide",
    slideshowSpeed: 4000,
    fadeFirstSlide: false,
        start: function (slider) {
       // lazy load
       $(slider).find("img.lazy").each(function () {
          var src = $(this).attr("data-src");
          $(this).attr("src", src).removeAttr("data-src");
       });
     }
  });



//});



	})