<?php

class ImageSlider extends CWidget {

	// =================== STATIC VARIABLES FOR VARIABLE NAMES
	public static $IMAGES = "images";
	
	public static $IMAGE_CONTAINER_BACKGROUND_COLOR = "image_container_background_color";
	public static $BACK_BUTTON_BACKGROUND_COLOR = "back_button_background_color";
	public static $FORWARD_BUTTON_BACKGROUND_COLOR = "forward_button_background_color";
	
	public static $BACK_BUTTON_IMAGE = "back_button_image";
	public static $BACK_BUTTON_HOVER_IMAGE = "back_button_hover_image";
	public static $FORWARD_BUTTON_IMAGE = "forward_button_image";
	public static $FORWARD_BUTTON_HOVER_IMAGE = "forward_button_hover_image";
	
	public static $BORDER_COLOR = "border_color";
	public static $BORDER_SIZE = "border_size";
	
	public static $OVERALL_WIDTH = "overall_width";
	public static $OVERALL_HEIGHT = "overall_height";
	public static $BACK_BUTTON_WIDTH = "back_button_width";
	public static $BACK_BUTTON_HEIGHT = "back_button_height";
	public static $FORWARD_BUTTON_WIDTH = "forward_button_width";
	public static $FORWARD_BUTTON_HEIGHT = "forward_button_height";
	
	// =================== STATIC VARIABLES FOR PROPERTY VALUES
	public static $WIDTH_MATCH_PARENT = "auto";
	public static $HEIGHT_MATCH_PARENT = "auto";
	
	// =================== VARIABLE NAMES
	private $registered_assests_path;
	
	public $images;
	
	public $back_button_image;
	public $back_button_hover_image;
	public $forward_button_image;
	public $forward_button_hover_image;
	
	public $image_container_background_color;
	public $back_button_background_color;
	public $forward_button_background_color;
	
	public $border_color;
	public $border_size;
	
	public $overall_width;
	public $overall_height;
	public $back_button_width;
	public $back_button_height;
	public $forward_button_width;
	public $forward_button_height;
	

	public function init() {

		$this->registered_assests_path = Yii::app()->assetManager->publish(Yii::getPathOfAlias('ext.imageslider.assets')); //USE THIS PRODUCTION
		//$this->registered_assests_path = Yii::app()->assetManager->publish(Yii::getPathOfAlias('ext.imageslider.assets'), false,1,YII_DEBUG); // USE THIS FOR DEBUGGING
		Yii::app()->getClientScript()->registerCssFile($this->registered_assests_path."/imageslider.css");
		Yii::app()->getClientScript()->registerScriptFile($this->registered_assests_path."/imageslider.js");
	}

	public function run() {

		$this->initializeVariables();
		if ($this->images != NULL) {
			
			$this->render("imageslider");
		}
	}
	
	public function initializeVariables() {
		
		$this->setupButtonImageVariables();
		$this->setupBackgroundColorVariables();
		$this->setupBorderVariables();
		$this->setupWidthVariables();
		$this->setupHeightVariables();
	}
	
	public function setupButtonImageVariables() {
		
		if (empty($this->back_button_image)) {
			$this->back_button_image = $this->registered_assests_path."/images/left_btn.png";
		}
		if (empty($this->back_button_hover_image)) {
			$this->back_button_hover_image = $this->registered_assests_path."/images/left_btn_selected.png";
		}
		if (empty($this->forward_button_image)) {
			$this->forward_button_image = $this->registered_assests_path."/images/right_btn.png";
		}
		if (empty($this->forward_button_hover_image)) {
			$this->forward_button_hover_image = $this->registered_assests_path."/images/right_btn_selected.png";
		}
	}
	
	public function setupBackgroundColorVariables() {
		
		if (empty($this->image_container_background_color)) {
			$this->image_container_background_color = "silver";
		}
		if (empty($this->back_button_background_color)) {
			$this->back_button_background_color = "gray";
		}
		if (empty($this->forward_button_background_color)) {
			$this->forward_button_background_color = "gray";
		}
	}
	
	public function setupBorderVariables() {
		
		if (empty($this->border_color)) {
			$this->border_color = "black";
		}
		if (empty($this->border_size)) {
			$this->border_size = "0px";
		}
	}
	
	public function setupWidthVariables() {
		
		if (empty($this->overall_width)) {
			$this->overall_width = "auto";
		}
		if (empty($this->back_button_width)) {
			$this->back_button_width = "60px";
		}
		if (empty($this->forward_button_width)) {
			$this->forward_button_width = "60px";
		}
	}
	
	public function setupHeightVariables() {
		
		if (empty($this->overall_height)) {
			$this->overall_height = '300px';
		}
		if (empty($this->back_button_height)) {
			$this->back_button_height = '300px';
		}
		if (empty($this->forward_button_height)) {
			$this->forward_button_height = '300px';
		}
	}
}
