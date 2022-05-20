
	$('.nav-toggle').click(function(){

		if($('.menu').css('display') == 'none'){
			$('.main-header').addClass('is-active');
			$('.main-header').removeClass('not-active');
			freeze()
		}else {
			$('.main-header').addClass('not-active');
			$('.main-header').removeClass('is-active');
			unfreeze();
			// $("body").css("max-height","auto");
			// $("body").css("overflow-y","auto");
			// $("html").css("max-height","auto");
			// $("html").css("overflow-y","auto");
		}


	});

	$("#intro-btn").click(function(){
		$("#d-studio").css("display","block");
	});
	$("#modal-close").click(function(){
		$("#d-studio").css("display","none");
	});



	setupSlideSize("slides-1")
	setupSlide("slides-1", 7500);
	setupSlideSize("slides-2")
	setupSlide("slides-2", 8500);
    setupSlideSize("slides-3")
	setupSlide("slides-3", 8500);
	setupSlideSize("slides-4");
	setupSlide("slides-4", 7500);

	setupSlideSize("m-slides-1")
	setupSlide("m-slides-1", 8500);
	setupSlideSize("m-slides-2")
	setupSlide("m-slides-2", 7500);
    setupSlideSize("m-slides-3")
	setupSlide("m-slides-3", 7000);

	setupSlide("ribbon-content",5000)

	function setupSlide(name, interval){
		var current = 0;
		var slides = document.getElementsByClassName(name);
		setInterval(function() {
	 	for (var i = 0; i < slides.length; i++) {
	    slides[i].style.opacity = 0;
	    slides[current].classList.remove("on");
	  	}
		  current = (current != slides.length - 1) ? current + 1 : 0;
		  if(slides[current]) {
		  	slides[current].style.opacity = 1;
		  	slides[current].classList.add("on");
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
		if($(".dropdown-content").css("display") == "none"){
			$(this).find('i').removeClass('fa-angle-dwon');
			$(this).find('i').addClass('fa-angle-up');
			$(".dropdown-content").css("display","grid");
			$(".dropdown-content").find("div").css("display","block");
			freeze();

		}else {
			$(this).find('i').addClass('fa-angle-dwon');
			$(this).find('i').removeClass('fa-angle-up');
			$(".dropdown-content").css("display","none");
			$(".dropdown-content").find("div").css("display","none");
			$("#us").css("display","none");
			unfreeze();

		}
		
	})

//Adding image dynamically

	// $('.gallery-tile').each(function(){
	// 	if($(this).css('background-image') == 'none'){
	// 	}
	// })

//Trigger image modal
	function zoomImage(images,modalId, imageId, btnId){
		$('.' + images).each(function(){

		$(this).click(function(){

			var url = null;
			url = $(this).find('.on').attr('src');
			if(url == null){
				url = $(this).find('img').attr('src');
			}
			//var url = $(this).find('img').attr('src');
			$('#' + modalId).css('display','block');
			$('#' + imageId).attr('src',url);
			freeze();
			$('header').css('display','none');
			console.log(url);

		});

		$('#' + btnId).click(function(){
			$('#' + modalId).css('display','none');
			unfreeze();
			$('header').css('display','block');
		});
	});
	}
	

	zoomImage('gallery-tile','myModal','img01','close');
	zoomImage('slides-img','homeModal','img00','homeClose');

	function filter(array){
		array.forEach(function(a){
			$('.gallery-tile').each(function(){
			if($(this).hasClass(a)){
				$(this).css('display','block');
			}else{
				$(this).css('display','none');
			}
		}) ;
			
		}) ;
	}

	setImageSize();


	function setImageSize(){
		$('.gallery-tile').each(function(){
		var width = $(this).find('img').css('width');
		var height = $(this).find('img').css('height');
		var div_h = $(this).css('height');
		var div_w = $(this).css('width');
		var ratio = 1 ;
		if(width){
			width = parseFloat(width.substring(0, width.length - 2));
			height = parseFloat(height.substring(0, height.length - 2));
			div_h = parseFloat(div_h.substring(0, div_h.length - 2));
			div_w = parseFloat(div_w.substring(0, div_w.length - 2));
			ratio = width/height;
		}

		var ratio = width/height;
		console.log(ratio);


		if(width > height){
			if($(window).width() > 600){
				$(this).css('width', (div_h-40)*ratio.toString() + 'px');
				console.log(div_h*ratio);
				console.log($(this).css('height'));
				console.log($(this).css('width'));
			}else{
				$(this).css('height', (div_w-20)/ratio.toString() + 'px');
			}
			
		}else{
			if($(window).width() > 600){
				//$(this).css('width','15rem');
				$(this).css('width', div_h*ratio + 'px');
			}else{
				$(this).css('height', (div_w-20)/ratio.toString() + 'px');
			}

		}
	}) ;
	}
	

	function freeze(){
		$("body").css("max-height","100%");
		$("body").css("overflow-y","hidden");
		$("html").css("max-height","100%");
		$("html").css("overflow-y","hidden");
	}

	function unfreeze(){
		$("body").css("max-height","auto");
		$("body").css("overflow-y","auto");
		$("html").css("max-height","auto");
		$("html").css("overflow-y","auto");
	}
	window.addEventListener("resize", respond);

	function respond(){
		setupSlideSize("slides-1");
		setupSlideSize("slides-2");
		setupSlideSize("slides-3");
		setupSlideSize("slides-4");
		setupSlideSize("m-slides-1");
		setupSlideSize("m-slides-2");
		setupSlideSize("m-slides-3");
		setImageSize();
	}

	window.addEventListener("scroll", function(e){
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
