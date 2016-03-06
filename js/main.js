

jQuery(function ($) { 
	console.log("loaded main.js")




// LOAD UP THE SLIDER

$(window).load(function() {

  
  $( ".placeholder-img" ).remove()

  $('.flexslider').flexslider({
    animation: "fade",
    fadeFirstSlide: false,
        start: function(){
         $('.flexImages').show(); 
    },
  });



});


$("body").click(function() {
	console.log("working")
})


	})