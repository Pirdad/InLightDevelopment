<?php

class ScrollableBox extends CWidget {

	// =================== STATIC VARIABLES FOR VARIABLE NAMES
	public static $HTML_CONTENT = "html_content";
	
	// =================== STATIC VARIABLES FOR PROPERTY VALUES

	
	// =================== VARIABLE NAMES
	private $registered_assests_path;
	
	public $html_content;
	

	public function init() {

		//$this->registered_assests_path = Yii::app()->assetManager->publish(Yii::getPathOfAlias('ext.scrollablebox.assets')); //USE THIS PRODUCTION
		$this->registered_assests_path = Yii::app()->assetManager->publish(Yii::getPathOfAlias('ext.scrollablebox.assets'), false,1,YII_DEBUG); // USE THIS FOR DEBUGGING
		Yii::app()->getClientScript()->registerCssFile($this->registered_assests_path."/scrollablebox.css");
		Yii::app()->getClientScript()->registerScriptFile($this->registered_assests_path."/scrollablebox.js");
		$load_script = 
<<<JAVASCRIPT
		
		$(window).load(function() {
		
			alert('scrollable_box_main got loaded.');
			
			var apple = new ScrollabeBox();
			apple.create();
					
		});
		
JAVASCRIPT;
		
		Yii::app()->getClientScript()->registerScript('app_script', $load_script);
	}

	public function run() {

		
		if ($this->html_content != NULL) {
			
			$this->render("scrollablebox");
		}
	}
	
}

?>