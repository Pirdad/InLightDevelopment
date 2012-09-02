<?php

class ImageSlider extends CWidget {

	public $images;

	public function init() {

		$registered_assests_path = Yii::app()->assetManager->publish(Yii::getPathOfAlias('ext.imageslider.assets'), false, 1, YII_DEBUG);//,false,1,YII_DEBUG);
		Yii::app()->getClientScript()->registerCssFile($registered_assests_path."/imageslider.css");
		Yii::app()->getClientScript()->registerScriptFile($registered_assests_path."/imageslider.js");
	}

	public function run() {

		if ($this->images != NULL) {
				
			$this->render("imageslider", array("images" => $this->images));
		}
	}
}