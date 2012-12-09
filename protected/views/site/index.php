<?php
Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl."/css/home.css");
$this->pageTitle=Yii::app()->name;
?>

<?php
Yii::import("ext.imageslider.ImageSlider", true);
$images = array(
	Yii::app()->baseUrl."/images/Home/Features/coming_soon.png",
	Yii::app()->baseUrl."/images/Home/Features/free_website_promo.png"
);

$this->widget("ext.imageslider.ImageSlider", array(

	ImageSlider::$IMAGES => $images,
	ImageSlider::$OVERALL_HEIGHT => 394,

	ImageSlider::$BORDER_COLOR_TOP => "393939",
	ImageSlider::$BORDER_SIZE_TOP => 0,

	ImageSlider::$BORDER_COLOR_BOTTOM => "393939",

	ImageSlider::$BORDER_SIZE_BOTTOM => 0,

	ImageSlider::$BACK_BUTTON_BACKGROUND_COLOR => "393939",

	ImageSlider::$FORWARD_BUTTON_BACKGROUND_COLOR => "393939",

	ImageSlider::$TIMER_VALUE => 5000
));


//echo "<div id='cantainer'>";
//echo CHtml::link("<div class='image_cont'><img width='200' alt='Website application ' src='".Yii::app()->baseUrl."/images/Home/Features/free_website_promo.png' ></div>","#data", array("id"=>"fancy-link1"));

//echo CHtml::link("<div class='image_cont'><img width='200' alt='Website application' src='".Yii::app()->baseUrl."/images/Home/Features/aziz_reno.png' ></div>","#data1", array("id"=>"fancy-link2"));

//echo CHtml::link("<div class='image_cont'><img width='200' alt='Website application' src='".Yii::app()->baseUrl."/images/Home/Features/inlightdev.png' ></div>","#data2", array("id"=>"fancy-link3"));

//echo CHtml::link("<div class='image_cont'><img width='200' alt='Website application' src='".Yii::app()->baseUrl."/images/Home/Features/webpage_display1.png' ></div>","#data3", array("id"=>"fancy-link4"));

//echo "</div>";

//put fancybox on page
$this->widget('ext.fancybox.EFancyBox', array(

        'target'=>'a#fancy-link',
        'config'=>array(),));

?>