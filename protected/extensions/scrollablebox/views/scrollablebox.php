<?php

$SCROLLABLE_BOX = "scrollable_box_";

?>

<div id="<?php echo $SCROLLABLE_BOX; ?>main<?php echo $this->widget_unique_id; ?>"
class="<?php echo $SCROLLABLE_BOX; ?>main" >

	<div id="<?php echo $SCROLLABLE_BOX; ?>title<?php echo $this->widget_unique_id; ?>" 
		class="<?php echo $SCROLLABLE_BOX; ?>title" >
		<?php echo $this->html_header_content; ?>
	</div>
	
	<div id="<?php echo $SCROLLABLE_BOX; ?>content_container<?php echo $this->widget_unique_id; ?>"
	class="<?php echo $SCROLLABLE_BOX; ?>content_container" >
	
		<div id="<?php echo $SCROLLABLE_BOX; ?>content<?php echo $this->widget_unique_id; ?>"
		class="<?php echo $SCROLLABLE_BOX; ?>content" >
				<?php echo $this->html_content; ?>
		</div>
		
		<div id="<?php echo $SCROLLABLE_BOX; ?>scrollbar_container<?php echo $this->widget_unique_id; ?>"
		class="<?php echo $SCROLLABLE_BOX; ?>scrollbar_container" >
			<div id="<?php echo $SCROLLABLE_BOX; ?>scrollbar<?php echo $this->widget_unique_id; ?>"
			class="<?php echo $SCROLLABLE_BOX; ?>scrollbar" ></div>
		</div>
		
		<div id="<?php echo $SCROLLABLE_BOX; ?>scrollable_indicator<?php echo $this->widget_unique_id; ?>" 
			class="<?php echo $SCROLLABLE_BOX; ?>scrollable_indicator unselectable" >
			
		</div>
	</div>
	
	<div id="<?php echo $SCROLLABLE_BOX; ?>footer<?php echo $this->widget_unique_id; ?>" >
	</div>

</div>