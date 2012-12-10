<?php
Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl."/css/home.css");
$this->pageTitle = "InLight - Home";

Yii::import("ext.imageslider.ImageSlider", true);

$images = array(
	Yii::app()->baseUrl."/images/Home/Features/coming_soon.png",
	Yii::app()->baseUrl."/images/Home/Features/free_website_promo.png"
);

$this->widget("ext.imageslider.ImageSlider", array(

	ImageSlider::$IMAGES => $images,

	ImageSlider::$BORDER_COLOR_TOP => "393939",
	ImageSlider::$BORDER_SIZE_TOP => 4,

	ImageSlider::$OVERALL_HEIGHT => '394px',

	ImageSlider::$BORDER_COLOR_BOTTOM => "393939",

	ImageSlider::$BORDER_SIZE_BOTTOM => 4,

	ImageSlider::$BACK_BUTTON_BACKGROUND_COLOR => "393939",

	ImageSlider::$FORWARD_BUTTON_BACKGROUND_COLOR => "393939",

	ImageSlider::$TIMER_VALUE => 5000
));