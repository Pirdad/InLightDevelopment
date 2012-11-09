<?php

$SCROLLABLE_BOX = "scrollable_box_";

?>

<div id="<?php echo $SCROLLABLE_BOX; ?>main" >

	<div id="<?php echo $SCROLLABLE_BOX; ?>title" >
		<?php echo $this->html_header_content; ?>
	</div>
	
	<div id="<?php echo $SCROLLABLE_BOX; ?>content_container" >
	
		<div id="<?php echo $SCROLLABLE_BOX; ?>content" >
				<?php echo $this->html_content; ?>
		</div>
		
		<div id="<?php echo $SCROLLABLE_BOX; ?>scrollbar_container" >
			<div id="<?php echo $SCROLLABLE_BOX; ?>scrollbar" ></div>
		</div>
		
		<div id="<?php echo $SCROLLABLE_BOX; ?>scrollable_indicator" 
			class="unselectable" >
			SCROLLABLE
		</div>
	</div>
	
	<div id="<?php echo $SCROLLABLE_BOX; ?>footer" >
		Footer
	</div>

</div>