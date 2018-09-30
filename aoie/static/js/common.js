
jQuery(function($){
  
  $('a[href^="#"]').on("click",function(){
  	var speed = 500; 
  	var href= $(this).attr("href");
  	var target = $(href == "#" || href == "" ? 'html' : href);
  	if(target.length){
  	  var position = target.offset().top;
  	}
  	if($(window).width() > 960){
    	$("body,html").animate({scrollTop:position}, speed, 'swing');
  	}else{
    	$("body,html").animate({scrollTop:position-65}, speed, 'swing');
  	}
  	
  	return false;
  });
  
 
  $("#MenuBtn").on("click",function(){
    $(this).toggleClass("active");
    $(".sp_header_nav").slideToggle();
  });
  
  $(".sp_header_nav .header_nav_link").on("click",function(){
    $("MenuBtn").removeClass("active");
    $(".sp_header_nav").slideUp();
  });

 
  
  $(window).on("scroll load",function(){
    
    var WinScroll = $(this).scrollTop();
    console.log(WinScroll);
    
    if($("#Point01").length){
  	  var Point01_Pos = $("#Point01").offset().top;
  	}
  	if($("#Point02").length){
  	  var Point02_Pos = $("#Point02").offset().top;
  	}
    
    if($(window).width()>960){

    	if(WinScroll > Point01_Pos/4){
      	$("#Point01 .point_title").css({"right": -500+WinScroll/5+"px"});
    	}

    	if(WinScroll > Point02_Pos/4){
      	$("#Point02 .point_title").css({"left": -500+WinScroll/5+"px"});
    	}
    }else{
      if(WinScroll > Point01_Pos/4){
      	$("#Point01 .point_title").css({"right": -200+WinScroll/6+"px"});
    	}

    	if(WinScroll > Point02_Pos/4){
      	$("#Point02 .point_title").css({"left": -200+WinScroll/6+"px"});
    	}
    }
  	
  	var FlowBlock = $(".FlowBlock");
  	
  	$(FlowBlock).each(function(){
      var FlowTitle = $(this).find(".FlowTitle");
      var FlowContents = $(this).find(".FlowContents");
      var WinHeight = $(window).height();
      
      if($(FlowTitle).length){
        var FlowTitlePos = $(FlowTitle).offset().top;
      }
      if($(FlowContents).length){
        var FlowContentsPos = $(FlowContents).offset().top; 
      }   

      if (WinScroll > FlowTitlePos-WinHeight+200){
        $(FlowTitle).addClass("flow_active");
      } else {
        $(FlowTitle).removeClass("flow_active");
      }
      if (WinScroll > FlowContentsPos-WinHeight+200){
        $(FlowContents).addClass("flow_active");
      } else {
        $(FlowContents).removeClass("flow_active");
      }
    });
    
  });
  
  
  
});