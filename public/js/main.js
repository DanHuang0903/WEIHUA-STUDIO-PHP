
	$('.nav-toggle').click(function(){

		if($('.menu').css('display') == 'none'){
			$('.main-header').addClass('is-active');
			$('.main-header').removeClass('not-active');
		}else {
			$('.main-header').addClass('not-active');
			$('.main-header').removeClass('is-active');
			$("body").css("max-height","auto");
			$("body").css("overflow-y","auto");
			$("html").css("max-height","auto");
			$("html").css("overflow-y","auto");
		}


	});

	$("#intro-btn").click(function(){
		$("#d-studio").css("display","block");
	});
	$("#modal-close").click(function(){
		$("#d-studio").css("display","none");
	});



	setupSlideSize("slides-1")
	setupSlide("slides-1", 10500);
	setupSlideSize("slides-2")
	setupSlide("slides-2", 9500);
    setupSlideSize("slides-3")
	setupSlide("slides-3", 9500);
	setupSlideSize("slides-4");
	setupSlide("slides-4", 10500);

	setupSlideSize("m-slides-1")
	setupSlide("m-slides-1", 10500);
	setupSlideSize("m-slides-2")
	setupSlide("m-slides-2", 9500);
    setupSlideSize("m-slides-3")
	setupSlide("m-slides-3", 9000);

	setupSlide("ribbon-content",5000)

	function setupSlide(name, interval){
		var current = 0;
		var slides = document.getElementsByClassName(name);
		setInterval(function() {
	 	for (var i = 0; i < slides.length; i++) {
	    slides[i].style.opacity = 0;
	  	}
		  current = (current != slides.length - 1) ? current + 1 : 0;
		  if(slides[current]) {
		  	slides[current].style.opacity = 1;
		  }
		}, interval);
	}

	function setupSlideSize(name){
		var width = $("."+name).parent().css("width");
		var height = $("."+name).parent().css("height");
		$("."+name).css("width", width);
		$("."+name).css("height",height);
	}
	
	$("#about-btn").click(function(){
		console.log($(window).width());
		console.log($(".dropdown-content").css("display"));
		if($(".dropdown-content").css("display") == "none"){
			$(this).find('i').removeClass('fa-angle-dwon');
			$(this).find('i').addClass('fa-angle-up');
			$(".dropdown-content").css("display","grid");
			$(".dropdown-content").find("div").css("display","block");
			$("body").css("max-height","100%");
			$("body").css("overflow-y","hidden");
			$("html").css("max-height","100%");
			$("html").css("overflow-y","hidden");

		}else {
			$(this).find('i').addClass('fa-angle-dwon');
			$(this).find('i').removeClass('fa-angle-up');
			$(".dropdown-content").css("display","none");
			$(".dropdown-content").find("div").css("display","none");
			$("#us").css("display","none");
			$("body").css("max-height","auto");
			$("body").css("overflow-y","auto");
			$("html").css("max-height","auto");
			$("html").css("overflow-y","auto");

		}
		
	})
	window.addEventListener("resize", respond);

	function respond(){
		setupSlideSize("slides-1");
		setupSlideSize("slides-2");
		setupSlideSize("slides-3");
		setupSlideSize("slides-4");
		setupSlideSize("m-slides-1");
		setupSlideSize("m-slides-2");
		setupSlideSize("m-slides-3");
	}

	window.addEventListener("scroll", function(e){
		console.log(screen.width);
		if(window.scrollY > 5) {
			$("header").css("box-shadow", "8px 0 8px 0 rgba(0, 0, 0, 0.2)");
			$("header").css("background-color", "white");
			$(".ribbon").hide("slow");
		

		}else{
			$("header").css("box-shadow", "none");
			if(screen.width > 560){
				$("header").css("background-color", "rgba(0, 0, 0, 0)");
			}
			$(".ribbon").css("display","block");
		}

	}) ;
