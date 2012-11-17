<?php

class ScrollableBox extends CWidget {

	// =================== STATIC VARIABLES FOR VARIABLE NAMES
	public static $WIDGET_UNIQUE_ID = "widget_unique_id";
	public static $WIDGET_WIDTH = "widget_width";
	public static $WIDGET_HEIGHT = "widget_height";
	public static $WIDGET_COLOR = "widget_color";
	
	public static $SCROLLBAR_CONTAINER_WIDTH = "scrollbar_container_width";
	public static $SCROLLBAR_CONTAINER_COLOR = "scrollbar_container_color";
	public static $SCROLLBAR_CONTAINER_IMAGE = "scrollbar_container_image";
	
	public static $SCROLLBAR_WIDTH = "scrollbar_width";
	public static $SCROLLBAR_VISIBILITY = "scrollbar_visibility";
	public static $SCROLLBAR_COLOR = "scrollbar_color";
	public static $SCROLLBAR_IMAGE = "scrollbar_image";
	
	public static $HTML_HEADER_CONTENT = "html_header_content";
	public static $HEADER_HEIGHT = "header_height";
	public static $HEADER_VISIBILITY = "header_visibility";
	public static $HEADER_COLOR = "header_color";
	
	public static $HTML_FOOTER_CONTENT = "html_footer_content";
	public static $FOOTER_HEIGHT = "footer_height";
	public static $FOOTER_VISIBILITY = "footer_visibility";
	public static $FOOTER_COLOR = "footer_color";
	
	public static $HTML_CONTENT = "html_content";
	public static $CONTENT_CONTAINER_COLOR = "content_container_color";
	public static $CONTENT_CONTAINER_IMAGE = "content_container_image";
	
	public static $CONTENT_COLOR = "content_color";
	public static $CONTENT_IMAGE = "content_image";
	
	public static $SCROLLABLE_INDICATOR_POSITION = "scrollable_indicator_position";
	public static $SCROLLABLE_INDICATOR_FONT_COLOR = "scrollable_indicator_font_color";
	public static $SCROLLABLE_INDICATOR_COLOR = "scrollable_indicator_color";
	public static $SCROLLABLE_INDICATOR_WIDTH = "scrollable_indicator_width";
	public static $SCROLLABLE_INDICATOR_HEIGHT = "scrollable_indicator_height";
	public static $SCROLLABLE_INDICATOR_VISIBILITY = "scrollable_indicator_visibility";
	
	// =================== STATIC VARIABLES FOR PROPERTY VALUES
	public static $SCROLLABLE_INDICATOR_RIGHT = "right";
	public static $SCROLLABLE_INDICATOR_LEFT = "left";
	public static $SCROLLABLE_INDICATOR_TOP = "top";
	public static $SCROLLABLE_INDICATOR_BOTTOM = "bottom";
	public static $SCROLLABLE_INDICATOR_CENTER = "center";
	
	// =================== VARIABLE NAMES
	private $registered_assests_path;
	
	public $widget_unique_id;
	public $widget_width;
	public $widget_height;
	public $widget_color;
	
	public $scrollbar_container_width;
	public $scrollbar_container_color;
	public $scrollbar_container_image;
	
	public $scrollbar_width;
	public $scrollbar_visibility;
	public $scrollbar_color;
	public $scrollbar_image; //??
	
	public $html_header_content;
	public $header_height;
	public $header_visibility;
	public $header_color;
	
	public $html_footer_content;
	public $footer_height;
	public $footer_visibility;
	public $footer_color;
	
	public $html_content;
	public $content_container_color;
	public $content_container_image;
	public $content_color;
	public $content_image;
	
	public $scrollable_indicator_position;
	public $scrollable_indicator_font_color;
	public $scrollable_indicator_color;
	public $scrollable_indicator_width;
	public $scrollable_indicator_height;
	public $scrollable_indicator_visibility;
	

	public function init() {

		//$this->registered_assests_path = Yii::app()->assetManager->publish(Yii::getPathOfAlias('ext.scrollablebox.assets')); //USE THIS PRODUCTION
		$this->registered_assests_path = Yii::app()->assetManager->publish(Yii::getPathOfAlias('ext.scrollablebox.assets'), false,1,YII_DEBUG); // USE THIS FOR DEBUGGING
		Yii::app()->getClientScript()->registerCssFile($this->registered_assests_path."/scrollablebox.css");
		Yii::app()->getClientScript()->registerScriptFile($this->registered_assests_path."/scrollablebox.js");
		$load_script = $this->createScrollableBoxWidget();

		Yii::app()->getClientScript()->registerScript('app_script'.$this->widget_unique_id, $load_script);
	}

	public function run() {
	
		$this->render("scrollablebox");
	}
	
	private function createScrollableBoxWidget() {
		
		$this->setInitialValues();
		$scrollablebox_js_script = 
<<<JAVASCRIPT
		
		$(window).load(function() {
			
			var scrollable_widget$this->widget_unique_id = new ScrollableBox('$this->widget_unique_id');
			
			scrollable_widget$this->widget_unique_id.setHeight($this->widget_height);
			scrollable_widget$this->widget_unique_id.setWidth($this->widget_width);
			scrollable_widget$this->widget_unique_id.setColor('$this->widget_color');
			
			scrollable_widget$this->widget_unique_id.setScrollbarContainerWidth($this->scrollbar_container_width);
			scrollable_widget$this->widget_unique_id.setScrollbarContainerColor('$this->scrollbar_container_color');
//			scrollable_widget$this->widget_unique_id.setScrollbarContainerImage('so/so/img.img');
			
			scrollable_widget$this->widget_unique_id.setScrollbarWidth($this->scrollbar_width);
			scrollable_widget$this->widget_unique_id.setScrollbarColor('$this->scrollbar_color');
			scrollable_widget$this->widget_unique_id.setScrollbarVisibility(new Boolean($this->scrollbar_visibility));
			
			scrollable_widget$this->widget_unique_id.setHeaderHeight($this->header_height);
			scrollable_widget$this->widget_unique_id.setHeaderColor('$this->header_color');
			scrollable_widget$this->widget_unique_id.setHeaderVisibility(new Boolean($this->header_visibility));
			
			scrollable_widget$this->widget_unique_id.setFooterHeight($this->footer_height);
			scrollable_widget$this->widget_unique_id.setFooterColor('$this->footer_color');
			scrollable_widget$this->widget_unique_id.setFooterVisibility(new Boolean($this->footer_visibility));
			
			scrollable_widget$this->widget_unique_id.setContentContainerColor('$this->content_container_color');
//			scrollable_widget$this->widget_unique_id.setContentContainerImage('so/so/img.img');

			scrollable_widget$this->widget_unique_id.setContentColor('$this->content_color');
//			scrollable_widget$this->widget_unique_id.setContentImage('so/so/img.img');

			scrollable_widget$this->widget_unique_id.setScrollableIndicatorFontColor('$this->scrollable_indicator_font_color');
			scrollable_widget$this->widget_unique_id.setScrollableIndicatorBackColor('$this->scrollable_indicator_color');
			scrollable_widget$this->widget_unique_id.setScrollableIndicatorWidth($this->scrollable_indicator_width);
			scrollable_widget$this->widget_unique_id.setScrollableIndicatorHeight($this->scrollable_indicator_height);
			scrollable_widget$this->widget_unique_id.setScrollableIndicatorVisiblity(new Boolean($this->scrollable_indicator_visibility));
			scrollable_widget$this->widget_unique_id.setScrollableIndicatorPosition('$this->scrollable_indicator_position');
			
			scrollable_widget$this->widget_unique_id.initialize();
		});
		
JAVASCRIPT;
		return $scrollablebox_js_script;
	}
	
	private function setInitialValues() {
		
		if (is_null($this->widget_unique_id)) $this->widget_unique_id = "";
		if (is_null($this->scrollbar_visibility)) $this->scrollbar_visibility = true;
		if (is_null($this->header_visibility)) $this->header_visibility = true;
		if (is_null($this->footer_visibility)) $this->footer_visibility = true;
		if (is_null($this->scrollable_indicator_visibility)) $this->scrollable_indicator_visibility = true;
		if (is_null($this->scrollable_indicator_position)) $this->scrollable_indicator_position = ScrollableBox::$SCROLLABLE_INDICATOR_CENTER;
	}
}

?>