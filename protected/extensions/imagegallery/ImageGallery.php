<?php
class ImageGallery extends CWidget
{

	private $registered_assests_path;
	public   $columns;
	public   $rows;
	public  $images;


	public static $COLUMNS = 'columns';
	public static $ROWS = 'rows';
	public static $IMAGES = 'images';





	public function init()
	{
		//$this->registered_assests_path = Yii::app()->assetManager->publish(Yii::getPathOfAlias('ext.imagegallery.assets')); //USE THIS PRODUCTION
		$this->registered_assests_path = Yii::app()->assetManager->publish(Yii::getPathOfAlias('ext.imagegallery.assets'), false,1,YII_DEBUG); // USE THIS FOR DEBUGGING
		Yii::app()->getClientScript()->registerCssFile($this->registered_assests_path."/imagegallery.css");
		Yii::app()->getClientScript()->registerCssFile($this->registered_assests_path."/imagegallery.js");
		Yii::app()->getClientScript()->registerCssFile($this->registered_assests_path."/images");
	}

	public function run()
	{

		$this->render("imagegallery");
	}
}