<?php

$images;

for ($i=0; $i<count($images); $i++) {
	
	echo "<input type='hidden' id='$i' value='$images[$i]' />";
	$size = count($images);
	echo "<input type='hidden' id='size' value='$size' />";
}

?>

<div id="back_btn" onclick="goBack();" class="slider_button">Back</div>

<div id="image_holder"><img id="image" alt="" src=""></div>

<div id="forward_btn" onclick="goForward();" class="slider_button">Forward</div>
