$(window).load(function() {

	/*
	 * Notes:
	 * - in the imageslider.css - the image_slider_holder img tag's position must be set to absolute in order for
	 * slide functionality to work. It can not be set to relative.
	 * 
	 */


	var JQUERY_POUND = "#";
	var IMG_SLIDER_ID = "img_slider_";
	
	var SLIDER_CONTAINER = IMG_SLIDER_ID + "container";
	var BACK_BUTTON = IMG_SLIDER_ID + "back_btn";
	var FORWARD_BUTTON = IMG_SLIDER_ID + "forward_btn";
	var IMAGE_CONTAINER = IMG_SLIDER_ID + "image_holder";
	
	var BACKGROUND_COLOR = "_background_color";
	var BORDER_COLOR = IMG_SLIDER_ID + "border_color";
	var BORDER_SIZE = IMG_SLIDER_ID + "border_size";
	
	var IMAGE = IMG_SLIDER_ID + "image";

	var current_num = -1;
	var prev_num = -1;
	var next_num = -1;

	var left_btn_click_enabled = false;
	var right_btn_click_enabled = false;



	initialSetup();

	// ================================ EVENT METHODS =============================================
	// ============================================================================================

	function initialSetup() {

		setSliderWidth();
		setSliderHeight();
		//resizeAllImages();

		setupFirstImage();
		setupSlideStateVariables();
		
		setupBorder(SLIDER_CONTAINER, $(JQUERY_POUND + BORDER_COLOR).val(), $(JQUERY_POUND + BORDER_SIZE).val());
		
		changeBgColor(FORWARD_BUTTON, $(JQUERY_POUND + FORWARD_BUTTON + BACKGROUND_COLOR).val());
		changeBgColor(BACK_BUTTON, $(JQUERY_POUND  + BACK_BUTTON + BACKGROUND_COLOR).val());
		changeBgColor(IMAGE_CONTAINER, $(JQUERY_POUND + IMAGE_CONTAINER + BACKGROUND_COLOR).val());
		
		changeBg(FORWARD_BUTTON, document.getElementById(IMG_SLIDER_ID + "forward").value, 'right');
		changeBg(BACK_BUTTON, document.getElementById(IMG_SLIDER_ID + "back").value, 'left');
	}

	function setupFirstImage() {

		left = $(JQUERY_POUND + IMAGE_CONTAINER).css("left"); // get the x-pos of the image container
		$(JQUERY_POUND + IMG_SLIDER_ID + 0).css("left", left); // sets the first image's x-pos to the image container's x-pos
		$(JQUERY_POUND + IMG_SLIDER_ID + 0).animate({ opacity: 1 }, 500, "linear"); // fades in the first item.
	}

	function setupSlideStateVariables() {

		size = $(JQUERY_POUND + IMG_SLIDER_ID + 'size').val();
		if (size > 0) {

			current_num = 0;
			if (size > 1) {

				prev_num = size -1;
				next_num = current_num + 1;
				left_btn_click_enabled = true;
				right_btn_click_enabled = true;
			}
		}
	}
	
	function resizeAllImages() {
		
		size = $(JQUERY_POUND + IMG_SLIDER_ID + 'size').val();
		container_width = $(JQUERY_POUND + IMAGE_CONTAINER).width();
		container_height = $(JQUERY_POUND + IMAGE_CONTAINER).height();
		
		for (i = 0; i < size; i++) {
			
			alert(JQUERY_POUND + IMG_SLIDER_ID + 3 + "'s height is " + $(JQUERY_POUND + IMG_SLIDER_ID + 3).height() + " with i = " + i);
			img_height = $(JQUERY_POUND + IMG_SLIDER_ID + i).width();
			img_width = $(JQUERY_POUND + IMG_SLIDER_ID + i).height();
			resizeVertically(JQUERY_POUND + IMG_SLIDER_ID + i, container_height, img_height, img_width)
			//$(JQUERY_POUND + IMG_SLIDER_ID + i).width(container_width);
			//$(JQUERY_POUND + IMG_SLIDER_ID + i).height(container_height);
		}
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

		if (right_btn_click_enabled == true) {

			right_btn_click_enabled = false;
			goForward();
		}
	});

	$(JQUERY_POUND + IMAGE_CONTAINER).click(function() {

		if (right_btn_click_enabled == true) {

			right_btn_click_enabled = false;
			goForward();
		}
	});

	$(JQUERY_POUND + BACK_BUTTON).click(function() {

		if (left_btn_click_enabled == true) {

			left_btn_click_enabled = false;
			goBack();
		}
	});




	// ============================ HELPING METHODS =======================================
	// ====================================================================================

	function setSliderWidth() {

		overall_width = $(JQUERY_POUND + IMG_SLIDER_ID + "overall_width").val();
		right_button_width = $(JQUERY_POUND + IMG_SLIDER_ID + "forward_width").val();
		left_button_width = $(JQUERY_POUND + IMG_SLIDER_ID + "back_width").val();

		$(JQUERY_POUND + SLIDER_CONTAINER).css('width', overall_width);
		$(JQUERY_POUND + FORWARD_BUTTON).css('width', right_button_width);
		$(JQUERY_POUND + BACK_BUTTON).css('width', left_button_width);

		overall_width = $(JQUERY_POUND + SLIDER_CONTAINER).width();
		right_button_width = $(JQUERY_POUND + FORWARD_BUTTON).width();
		left_button_width = $(JQUERY_POUND + BACK_BUTTON).width();

		$(JQUERY_POUND + IMAGE_CONTAINER).width(overall_width - (left_button_width + right_button_width));
	}

	function setSliderHeight() {

		overall_height = $(JQUERY_POUND + IMG_SLIDER_ID + "overall_height").val();
		right_button_height = $(JQUERY_POUND + IMG_SLIDER_ID + "forward_height").val();
		left_button_height = $(JQUERY_POUND + IMG_SLIDER_ID + "back_height").val();

		$(JQUERY_POUND + SLIDER_CONTAINER).css('height', overall_height);
		$(JQUERY_POUND + IMAGE_CONTAINER).css('height', overall_height);
		$(JQUERY_POUND + FORWARD_BUTTON).css('height', right_button_height);
		$(JQUERY_POUND + BACK_BUTTON).css('height', left_button_height);
	}

	function changeBgColor(element_id, css_color) {
		
		$(JQUERY_POUND + element_id).css('background-color', css_color);
	}
	
	function setupBorder(element_id, css_border_color, css_border_size) {
		
		$(JQUERY_POUND + element_id).css('border-color', css_border_color);
		$(JQUERY_POUND + element_id).css('border-width', css_border_size);
		$(JQUERY_POUND + element_id).css('border-style', "solid");
	}
	
	function changeBg(element_id, img_url, background_position) {

		$(JQUERY_POUND + element_id).css('background-image', 'url("'+img_url+'")');
		$(JQUERY_POUND + element_id).css('background-repeat', 'no-repeat');
		$(JQUERY_POUND + element_id).css('background-position', background_position);
	}

	function goBack() {

		size = $(JQUERY_POUND + IMG_SLIDER_ID + 'size').val();

		slideRight();

		if (size > 1) {

			next_num = current_num;
			current_num = prev_num;
			prev_num = prev_num - 1;

			if (prev_num < 0) {
				prev_num = size - 1;
			}
		}
		//resizeImage();

	}

	function goForward() {

		size = $(JQUERY_POUND + IMG_SLIDER_ID + 'size').val();

		slideLeft();
		
		if (size > 1) {

			prev_num = current_num;
			current_num = next_num;
			next_num = next_num + 1;

			if (next_num >= size) {
				next_num = 0;
			}
		}
	}

	function slideLeft() { // sliding the images from right to left, bringing the next image

		img_container_width = $(JQUERY_POUND + IMAGE_CONTAINER).width();
		$(JQUERY_POUND + IMG_SLIDER_ID + next_num).css('left', img_container_width);//initially setting the next image to be position on the right

		$(JQUERY_POUND + IMG_SLIDER_ID + current_num).animate({ left: (0-img_container_width), opacity: 0 }, 500, "linear");//slide out current image
		$(JQUERY_POUND + IMG_SLIDER_ID + next_num).animate({ left: 0, opacity: 1 }, 500, "linear", function() {
			right_btn_click_enabled = true;
		});//slide in next image
	}

	function slideRight() { // sliding the images from left to right, bringing back previous image

		img_container_width = $(JQUERY_POUND + IMAGE_CONTAINER).width();
		$(JQUERY_POUND + IMG_SLIDER_ID + prev_num).css('left', (0-img_container_width));//initially setting the prev image to be position on the left

		$(JQUERY_POUND + IMG_SLIDER_ID + current_num).animate({ left: img_container_width, opacity: 0 }, 500, "linear");//slide out current image
		$(JQUERY_POUND + IMG_SLIDER_ID + prev_num).animate({ left: 0, opacity: 1 }, 500, "linear", function() {
			left_btn_click_enabled = true;
		});//slide in prev image
	}

	function setCurrentImage() {

//		$(JQUERY_POUND + IMG_SLIDER_ID + current_num).delay(1000).fadeOut('slow');

		img_pos = $(JQUERY_POUND + IMG_SLIDER_ID + current_num).position();
		img_container_width = $(JQUERY_POUND + IMAGE_CONTAINER).width();
		//alert(img_pos.left + " " + (img_width+10));
//		$(JQUERY_POUND + IMG_SLIDER_ID + current_num).animate({ left: img_container_width }, 500, "linear", function() {
//		$(this).hide();
//		});
//		$(JQUERY_POUND + IMG_SLIDER_ID + current_num).slideUp(3000);

//		$(JQUERY_POUND + IMG_SLIDER_ID + current_num).fadeOut('slow');

//		image_url = document.getElementById(IMG_SLIDER_ID + current_num).value;
//		$(JQUERY_POUND + IMAGE_CONTAINER).html("<img id='" + IMAGE + "' src='" + image_url + "' />");
//		$(JQUERY_POUND + IMAGE).width('auto').height('auto').css('display', 'none');
//		$(JQUERY_POUND + IMAGE).bind('load', function() {

//		img_container_width = $(JQUERY_POUND + IMAGE_CONTAINER).width();
//		img_container_height = $(JQUERY_POUND + IMAGE_CONTAINER).height();

//		img_width = $(JQUERY_POUND + IMAGE).width();
//		img_height = $(JQUERY_POUND + IMAGE).height();
//		resizeVertically(img_container_height, img_height, img_width);

//		img_width = $(JQUERY_POUND + IMAGE).width();
//		img_height = $(JQUERY_POUND + IMAGE).height();
//		resizeHorizontally(img_container_width, img_width, img_height);
//		centerVertically();

////		$(this).fadeIn('slow', function () {

////		});

//		$(this).fadeIn('slow', function () {

//		});
//		});
	}

	function resizeImage(img_id) {

		img_container_width = $(JQUERY_POUND + IMAGE_CONTAINER).width();
		img_container_height = $(JQUERY_POUND + IMAGE_CONTAINER).height();

		img_width = $(img_id).width();
		img_height = $(img_id).height();
		//resizeVertically(img_id, img_container_height, img_height, img_width);

		img_width = $(JQUERY_POUND + IMG_SLIDER_ID + i).width();
		img_height = $(JQUERY_POUND + IMG_SLIDER_ID + i).height();
		//resizeHorizontally(img_id, img_container_width, img_width, img_height);
		centerVertically(img_id);
	}

	function resizeVertically(img_id, img_container_height, img_height, img_width) {

		if (img_height > img_container_height) {

			vertical_ratio = img_container_height / img_height;

			$(img_id).height(img_height * vertical_ratio);
			$(img_id).width(img_width * vertical_ratio);
			
			alert(JQUERY_POUND + IMG_SLIDER_ID + 3 + "'s height is " + $(JQUERY_POUND + IMG_SLIDER_ID + 3).height());
		}
	}

	function resizeHorizontally(img_id, img_container_width, img_width, img_height) {

		if (img_width > img_container_width) {

			horizontal_ratio = img_container_width / img_width;

			$(img_id).width(img_width * horizontal_ratio);
			$(img_id).height(img_height * horizontal_ratio);
		}
	}

	function centerVertically(img_id) {

		img_container_height = $(JQUERY_POUND + IMAGE_CONTAINER).height();
		img_height = $(img_id).height();

		half_of_container = img_container_height / 2;
		half_of_img = img_height / 2;
		img_y = half_of_container - half_of_img;

		//$(img_id).css('position', 'relative');
		$(img_id).css('top', img_y);
	}
});

