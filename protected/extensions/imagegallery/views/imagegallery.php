<?php
echo <<<_END
<table bordercolor="black" border="1" >

_END;

$img_ctr = 0;
for ($i = 0; $i< $this->rows; $i++)
{

	echo "<div id='main'>";

	for ($x = 0; $x< $this->columns;$x++)
	{

		echo "<div class='first'>";

		if  ($img_ctr < count($this->images)) {
			$img_url = $this->images[$img_ctr];
			if (!empty($img_url)) {

				echo "<img src=".$img_url.">";
				//echo "aaaa";
				$img_ctr++;
			}
		}

		echo "</div>";
	}


	echo "</div>";
}
echo <<<_END

</table >

_END;
?>

<!--  <div id="main">
	<div class="first">firs</div>
	<div class="first">second</div>
	<div class="first">third</div>
	<div class="first">fourth</div>
	<div class="first">fith</div>
</div>-->