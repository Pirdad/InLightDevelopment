<?php

class GridGallery extends CWidget {

	// =================== STATIC VARIABLES FOR VARIABLE NAMES
	public static $IMAGES = "images";
	
	public static $WIDGET_WIDTH = "widget_width";
	public static $WIDGET_HEIGHT = "widget_height";
	
	public static $NUM_COLUMNS = "num_columns";
	public static $NUM_ROWS = "num_rows";
	
	public static $CELL_SPACING = "cell_spacing";
	
	public static $EMPTY_TEXT = "empty_text";
	
	// =================== STATIC VARIABLES FOR PROPERTY VALUES
	public static $WIDTH_MATCH_PARENT = "auto";
	public static $HEIGHT_MATCH_PARENT = "auto";
	
	// =================== VARIABLE NAMES
	private $registered_assests_path;
	
	// =================== VARIABLES
	public $images;
	
	public $widget_width;
	public $widget_height;
	
	public $num_columns;
	public $num_rows;
	
	public $cell_spacing;
	
	public $empty_text;
	

	
	public function init() {

		//$this->registered_assests_path = Yii::app()->assetManager->publish(Yii::getPathOfAlias('ext.imageslider.assets')); //USE THIS PRODUCTION
		$this->registered_assests_path = Yii::app()->assetManager->publish(Yii::getPathOfAlias('ext.gridgallery.assets'), false,1,YII_DEBUG); // USE THIS FOR DEBUGGING
		Yii::app()->getClientScript()->registerCssFile($this->registered_assests_path."/gridgallery.css");
		Yii::app()->getClientScript()->registerScriptFile($this->registered_assests_path."/gridgallery.js");
		
		$this->initializeVariables();
		$this->createGridGalleryWidget();
	}
	
	public function initializeVariables() {
		
		if (is_null($this->empty_text)) $this->empty_text = "Ohh my, seems like there is no content available";
		if (is_null($this->widget_width)) $this->widget_width = GridGallery::$WIDTH_MATCH_PARENT;
		if (is_null($this->widget_height)) $this->widget_height = GridGallery::$HEIGHT_MATCH_PARENT;
		if (is_null($this->num_columns)) $this->num_columns = 4;
		if (is_null($this->num_rows)) $this->num_rows = 3;
		if (is_null($this->cell_spacing)) $this->cell_spacing = 10;
	}
	
	private function createGridGalleryWidget() {
		
		$gridgallery_js_script = 
<<<JAVASCRIPT
		
		$(window).load(function() {
			
			var grid_gallery_widget = new GridGallery();
			
			grid_gallery_widget.setHeight($this->widget_height);
			grid_gallery_widget.setWidth($this->widget_width);
			
			grid_gallery_widget.setNumColumns($this->num_columns);
			grid_gallery_widget.setNumRows($this->num_rows);
			
			grid_gallery_widget.setCellSpacing($this->cell_spacing);
			grid_gallery_widget.setEmptyText($this->empty_text);
			
			grid_gallery_widget.initialize();
			grid_gallery_widget.create();	
		});
		
JAVASCRIPT;
		return $gridgallery_js_script;
	}

	public function run() {

		$this->render("imageslider");
	}
}