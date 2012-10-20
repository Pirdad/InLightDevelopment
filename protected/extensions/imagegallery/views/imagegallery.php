<?php

$img_ctr = 0;
for ($i = 0; $i< $this->rows; $i++)
{

	echo "<div id='center'>";

	for ($x = 0; $x< $this->columns;$x++)
	{

		echo "<div class='first'>";

		if  ($img_ctr < count($this->images)) {
			$img_url = $this->images[$img_ctr];
			if (!empty($img_url)) {

				echo "<img src=".$img_url.">";
				$img_ctr++;
			}
		}

		echo "</div>";
	}


	echo "</div>";
}

?>
<!--
 <div id="main">
 <table id="tbl">
  <tr id="row">
    <div class="first">firs</div>
		<div class="first">second</div>
		<div class="first">third</div>
		<div class="first">fourth</div>
 </tr>
</table>


</div>-->