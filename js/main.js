

jQuery(function ($) { 
	console.log("loaded main.js")

	function changeNavStyle(ev){


		var offset = window.pageYOffset;

    if(offset>400) {




    	$(".site-header").css("background-color", "black").css("opacity", "0.9").css("top", "0px")
    	$(".site-header").find("h1").css("margin-top", "20px")
    	$(".site-header").find("ul").css("margin-top", "-90px")

    }
    else if (offset<400) {
    	$(".site-header").css("background-color", "").css("opacity", "1").css("top", "60px")
    	$(".site-header").find("h1").css("margin-top", "0px")
    	$(".site-header").find("ul").css("margin-top", "0px")
    }
}





window.onscroll=changeNavStyle


// LOAD UP THE SLIDER

//$(window).load(function() {

  
  $( ".placeholder-img" ).remove()

  $('.flexslider').flexslider({
    animation: "fade",
    slideshowSpeed: 4000,
    fadeFirstSlide: false,
        start: function(){
         $('.flexImages').show(); 
    },
  });



//});


$("body").click(function() {
	console.log("working")
})


	})