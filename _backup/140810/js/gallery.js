$(function(){
    $(".gallery_thumb a").click(function(){
       var classname = $(this).attr("class");
       $("div."+classname+" img").before("<img src='"+$(this).attr("href")+"' alt=''>");
       $("div."+classname+" img:last").fadeOut("fast",function(){
            $(this).remove();
          });
       return false;
   });
});