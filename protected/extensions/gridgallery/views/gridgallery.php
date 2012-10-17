<?php

$GRID_GALLERY_ID = "grid_gallery_";

for ($i=0; $i<count($this->images); $i++) {
	
	$img_url = $this->images[$i];
	echo "<input type='hidden' id='$GRID_GALLERY_ID$i' value='$img_url' />";
}

$size = count($this->images);
echo "<input type='hidden' id='".$GRID_GALLERY_ID."size' value='$size' />";


?>

<div id="grid_gallery_container"> <!-- Main Div -->

<!-- [[ THE CONTENT HERE WILL BE GENERATED USING JAVASCRIPT/JQUERY ]] -->
	
</div> <!-- Main Div -->