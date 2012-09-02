var current_num = 0;

window.addEventListener('load', function() {
	
	$image_url = document.getElementById(current_num).value;
	document.getElementById('image').src = $image_url;
	
}, false);

function goBack() {
	
	$temp_num = current_num -1;
	
	if ($temp_num >= 0) {
		
		$image_url = document.getElementById($temp_num).value;
		document.getElementById('image').src = $image_url;
		current_num = $temp_num;
	}	
}

function goForward() {
	
	$size = document.getElementById('size').value;	
	$temp_num = current_num +1;
	
	if ($temp_num < $size) {
		
		$image_url = document.getElementById($temp_num).value;
		document.getElementById('image').src = $image_url;
		current_num = $temp_num;
	}
}