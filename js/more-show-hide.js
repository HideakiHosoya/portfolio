// JavaScript Document
	 $(document).ready(function(){
	
	$(".portfolio").hide();

	$("h2.down").toggle(function(){
		$(this).addClass("active"); 
		}, function () {
		$(this).removeClass("active");
	});
	
	$("h2.down").click(function(){
		$(this).next(".portfolio").slideToggle("slow,");
	});

});

	 $(document).ready(function() {
        $('h2.down').click(function() {
		  var content = $(this).next().next().slideToggle('medium');
		  if (!$(this).hasClass('up')) {
			  $('img', content).hide().fadeIn("slow");
		  }
		  $(this).toggleClass("up");
		          });
      });
