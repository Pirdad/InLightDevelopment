<?php

$IMG_SLIDER_ID = "img_slider_";

for ($i=0; $i<count($this->images); $i++) {
	
	$img_url = $this->images[$i];
	echo "<input type='hidden' id='$IMG_SLIDER_ID$i' value='$img_url' />";
}

$size = count($this->images);
echo "<input type='hidden' id='".$IMG_SLIDER_ID."size' value='$size' />";
if ($this->back_button) {
	
}
if ($this->back_button_hover) {
	
}
if ($this->forward_button) {
	
}
if ($this->forward_button_hover) {
	
}
echo "<input type='hidden' id='".$IMG_SLIDER_ID."back' value='$this->back_button' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."back_hover' value='$this->back_button_hover' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."forward' value='$this->forward_button' />";
echo "<input type='hidden' id='".$IMG_SLIDER_ID."forward_hover' value='$this->forward_button_hover' />";

?>

<div id="img_slider_back_btn" class="slider_button unselectable_box" ></div>

<div id="img_slider_image_holder" class="unselectable_box" ></div>

<div id="img_slider_forward_btn" class="slider_button unselectable_box" ></div>
