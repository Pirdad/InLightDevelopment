<?php

class ImageSlider extends CWidget {

	public static $IMAGES = "images";
	public static $BACK_BUTTON = "back_button";
	public static $BACK_BUTTON_HOVER = "back_button_hover";
	public static $FORWARD_BUTTON = "forward_button";
	public static $FORWARD_BUTTON_HOVER = "forward_button_hover";
	
	public $images;
	public $back_button;
	public $back_button_hover;
	public $forward_button;
	public $forward_button_hover;

	public function init() {

		$registered_assests_path = Yii::app()->assetManager->publish(Yii::getPathOfAlias('ext.imageslider.assets'), false, 1, YII_DEBUG);//,false,1,YII_DEBUG);
		Yii::app()->getClientScript()->registerCssFile($registered_assests_path."/imageslider.css");
		Yii::app()->getClientScript()->registerScriptFile($registered_assests_path."/jquery.js");
		Yii::app()->getClientScript()->registerScriptFile($registered_assests_path."/imageslider.js");
	}

	public function run() {

		if ($this->images != NULL) {
				
			$this->render("imageslider");
		}
	}
}