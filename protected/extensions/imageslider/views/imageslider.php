<?php

for ($i=0; $i<count($this->images); $i++) {
	
	$img_url = $this->images[$i];
	echo "<input type='hidden' id='$i' value='$img_url' />";
}
$size = count($this->images);
echo "<input type='hidden' id='size' value='$size' />";

?>

<div id="img_slider_back_btn" class="slider_button unselectable_box" style="background-image: <?php echo "url($this->back_button)" ?>;">Back</div>

<div id="img_slider_image_holder" class="unselectable_box" ></div>

<div id="img_slider_forward_btn" class="slider_button unselectable_box" style="background-image: <?php echo "url($this->forward_button)" ?>;">Forward</div>
