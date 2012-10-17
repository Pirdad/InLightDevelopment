<?php

class GridGallery extends CWidget {

	// =================== STATIC VARIABLES FOR VARIABLE NAMES
	public static $IMAGES = "images";
	
	// =================== STATIC VARIABLES FOR PROPERTY VALUES
	public static $WIDTH_MATCH_PARENT = "auto";
	public static $HEIGHT_MATCH_PARENT = "auto";
	
	// =================== VARIABLE NAMES
	private $registered_assests_path;
	
	public $images;
	

	public function init() {

		//$this->registered_assests_path = Yii::app()->assetManager->publish(Yii::getPathOfAlias('ext.imageslider.assets')); //USE THIS PRODUCTION
		$this->registered_assests_path = Yii::app()->assetManager->publish(Yii::getPathOfAlias('ext.gridgallery.assets'), false,1,YII_DEBUG); // USE THIS FOR DEBUGGING
		Yii::app()->getClientScript()->registerCssFile($this->registered_assests_path."/gridgallery.css");
		Yii::app()->getClientScript()->registerScriptFile($this->registered_assests_path."/gridgallery.js");
	}

	public function run() {

		$this->initializeVariables();
		if ($this->images != NULL) {
			
			$this->render("imageslider");
		}
	}
	
	public function initializeVariables() {
		
		
	}
}