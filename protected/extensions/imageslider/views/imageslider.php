<?php

$IMG_SLIDER_ID = "img_slider_";

for ($i=0; $i<count($this->images); $i++) {
	
	$img_url = $this->images[$i];
	echo "<input type='hidden' id='$IMG_SLIDER_ID$i' value='$img_url' />";
}

$size = count($this->images);
echo "<input type='hidden' id='".$IMG_SLIDER_ID."size' value='$size' />";

echo "<input type='hidden' id='".$IMG_SLIDER_ID."back' value='$this->back_button_image' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."back_hover' value='$this->back_button_hover_image' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."forward' value='$this->forward_button_image' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."forward_hover' value='$this->forward_button_hover_image' />";

echo "<input type='hidden' id='".$IMG_SLIDER_ID."overall_width' value='$this->overall_width' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."overall_height' value='$this->overall_height' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."back_width' value='$this->back_button_width' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."back_height' value='$this->back_button_height' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."forward_width' value='$this->forward_button_width' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."forward_height' value='$this->forward_button_height' />";

?>

<div id="img_slider_container">
	<div id="img_slider_back_btn" class="slider_button unselectable_box" ></div>
	
	<div id="img_slider_image_holder" class="unselectable_box" ></div>
	
	<div id="img_slider_forward_btn" class="slider_button unselectable_box" ></div>
</div>