<?php

$IMG_SLIDER_ID = "img_slider_";

$size = count($this->images);
echo "<input type='hidden' id='".$IMG_SLIDER_ID."size' value='$size' />";

echo "<input type='hidden' id='".$IMG_SLIDER_ID.ImageSlider::$BACK_BUTTON_IMAGE."' value='$this->back_button_image' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID.ImageSlider::$BACK_BUTTON_HOVER_IMAGE."' value='$this->back_button_hover_image' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID.ImageSlider::$FORWARD_BUTTON_IMAGE."' value='$this->forward_button_image' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID.ImageSlider::$FORWARD_BUTTON_HOVER_IMAGE."' value='$this->forward_button_hover_image' />";

echo "<input type='hidden' id='".$IMG_SLIDER_ID."image_holder_background_color' value='$this->image_container_background_color' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."back_btn_background_color' value='$this->back_button_background_color' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."forward_btn_background_color' value='$this->forward_button_background_color' />";

echo "<input type='hidden' id='".$IMG_SLIDER_ID.ImageSlider::$BORDER_COLOR_LEFT."' value='$this->border_color_left' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID.ImageSlider::$BORDER_COLOR_RIGHT."' value='$this->border_color_right' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID.ImageSlider::$BORDER_COLOR_TOP."' value='$this->border_color_top' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID.ImageSlider::$BORDER_COLOR_BOTTOM."' value='$this->border_color_bottom' />";

echo "<input type='hidden' id='".$IMG_SLIDER_ID.ImageSlider::$BORDER_SIZE_LEFT."' value='$this->border_size_left' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID.ImageSlider::$BORDER_SIZE_RIGHT."' value='$this->border_size_right' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID.ImageSlider::$BORDER_SIZE_TOP."' value='$this->border_size_top' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID.ImageSlider::$BORDER_SIZE_BOTTOM."' value='$this->border_size_bottom' />";

echo "<input type='hidden' id='".$IMG_SLIDER_ID."overall_width' value='$this->overall_width' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."overall_height' value='$this->overall_height' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."back_width' value='$this->back_button_width' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."back_height' value='$this->back_button_height' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."forward_width' value='$this->forward_button_width' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."forward_height' value='$this->forward_button_height' />";

?>

<div id="img_slider_container">
	<div id="img_slider_back_btn" class="slider_button unselectable_box" ></div>
	
	<div id="img_slider_image_holder" class="unselectable_box" >
	
	<?php 
		for ($i=0; $i<count($this->images); $i++) {
			
			$img_url = $this->images[$i];
			echo "<img id='".$IMG_SLIDER_ID."$i' src='$img_url' />";
		}
	?>
	</div>
	
	<div id="img_slider_forward_btn" class="slider_button unselectable_box" ></div>
</div>
