$(window).load(function() {

	var JQUERY_POUND = "#";
	var IMG_SLIDER_ID = "img_slider_";
	var BACK_BUTTON = IMG_SLIDER_ID + "back_btn";
	var FORWARD_BUTTON = IMG_SLIDER_ID + "forward_btn";
	var IMAGE_CONTAINER = IMG_SLIDER_ID + "image_holder";
	var IMAGE = IMG_SLIDER_ID + "image";
	
	var current_num = 0;
	

	
	initialSetup();
	
	// ================================ EVENT METHODS =============================================
	// ============================================================================================
	
	function initialSetup() {
		
		setCurrentImage();
		changeBg(FORWARD_BUTTON, document.getElementById(IMG_SLIDER_ID + "forward").value, 'right');
		changeBg(BACK_BUTTON, document.getElementById(IMG_SLIDER_ID + "back").value, 'left');
	}
	
	// ============== ON HOVERS
	$(JQUERY_POUND + FORWARD_BUTTON).hover
	(function(){
		
		changeBg(FORWARD_BUTTON, document.getElementById(IMG_SLIDER_ID + "forward_hover").value, 'right');
		
	}, function(){
		
		changeBg(FORWARD_BUTTON, document.getElementById(IMG_SLIDER_ID + "forward").value, 'right');
	});
	
	$(JQUERY_POUND + BACK_BUTTON).hover
	(function(){
		
		changeBg(BACK_BUTTON, document.getElementById(IMG_SLIDER_ID + "back_hover").value, 'left');
		
	}, function(){
		
		changeBg(BACK_BUTTON, document.getElementById(IMG_SLIDER_ID + "back").value, 'left');
	});
	
	// ============ ON CLICKS
	$(JQUERY_POUND + FORWARD_BUTTON).click(function() {

		goForward();
	});

	$(JQUERY_POUND + IMAGE_CONTAINER).click(function() {

		goForward();
	});
	
	$(JQUERY_POUND + BACK_BUTTON).click(function() {

		goBack();
	});
	
	

	
	// ============================ HELPING METHODS =======================================
	// ====================================================================================
	
	function changeBg(element_id, img_url, background_position) {
		
		$(JQUERY_POUND + element_id).css('background-image', 'url("'+img_url+'")');
		$(JQUERY_POUND + element_id).css('background-repeat', 'no-repeat');
		$(JQUERY_POUND + element_id).css('background-position', background_position);
	}
	
	function goBack() {

		current_num = current_num -1;
		if (current_num < 0) {
			$size = document.getElementById(IMG_SLIDER_ID + 'size').value;	
			current_num = $size - 1;
		}
		setCurrentImage();
	}

	function goForward() {

		$size = document.getElementById(IMG_SLIDER_ID + 'size').value;	
		current_num = current_num +1;
		if (current_num >= $size) {
			current_num = 0;
		}
		setCurrentImage();
	}
	
	function setCurrentImage() {
		
		image_url = document.getElementById(IMG_SLIDER_ID + current_num).value;
		$(JQUERY_POUND + IMAGE_CONTAINER).html("<img id='" + IMAGE + "' src='" + image_url + "' />");
		$(JQUERY_POUND + IMAGE).width('auto').height('auto').css('display', 'none');
		$(JQUERY_POUND + IMAGE).bind('load', function() {
		
			img_container_width = $(JQUERY_POUND + IMAGE_CONTAINER).width();
			img_container_height = $(JQUERY_POUND + IMAGE_CONTAINER).height();
			
			img_width = $(JQUERY_POUND + IMAGE).width();
			img_height = $(JQUERY_POUND + IMAGE).height();
			
			resizeVertically(img_container_height, img_height, img_width);
			resizeHorizontally(img_container_width, img_width, img_height);
			centerVertically();
			
			$(this).fadeIn('slow', function () {
	            
	        });
		});
	}
	
	function resizeVertically(img_container_height, img_height, img_width) {
		
		if (img_height > img_container_height) {
			
			vertical_ratio = img_container_height / img_height;
			
			$(JQUERY_POUND + IMAGE).height(img_height * vertical_ratio);
			$(JQUERY_POUND + IMAGE).width(img_width * vertical_ratio);
		}
	}
	
	function resizeHorizontally(img_container_width, img_width, img_height) {
		
		if (img_width > img_container_width) {
			
			horizontal_ratio = img_container_width / img_width;
			
			$(JQUERY_POUND + IMAGE).width(img_width * horizontal_ratio);
			$(JQUERY_POUND + IMAGE).height(img_height * horizontal_ratio);
		}
	}
	
	function centerVertically() {
		
		img_container_height = $(JQUERY_POUND + IMAGE_CONTAINER).height();
		img_height = $(JQUERY_POUND + IMAGE).height();
		
		half_of_container = img_container_height / 2;
		half_of_img = img_height / 2;
		img_y = half_of_container - half_of_img;
		
		$(JQUERY_POUND + IMAGE).css('position', 'relative');
		$(JQUERY_POUND + IMAGE).css('top', img_y);
	}
});

