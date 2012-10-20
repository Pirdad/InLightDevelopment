<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<!-- <h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully created your Yii application.</p>

<p>You may change the content of this page by modifying the following two files:</p>
<ul>
	<li>View file: <code><?php echo __FILE__; ?></code></li>
	<li>Layout file: <code><?php echo $this->getLayoutFile('main'); ?></code></li>
</ul>

<p>For more details on how to further develop this application, please read
the <a href="http://www.yiiframework.com/doc/">documentation</a>.
Feel free to ask in the <a href="http://www.yiiframework.com/forum/">forum</a>,
should you have any questions.</p>

-->

<?php

Yii::import("ext.imageslider.ImageSlider", true);

$images = array(
		Yii::app()->baseUrl."/images/Home/Features/free_website_promo.png",
		Yii::app()->baseUrl."/images/Home/sample_aziz_reno.png", //Yii::app()->baseUrl."/images/Home/sample_aziz_reno.png',
		Yii::app()->baseUrl."/images/Home/sample_inlight_dev.png",//Yii::app()->baseUrl."/images/Home/sample_inlight_dev.png',
		Yii::app()->baseUrl."/images/inLightLogo.png");           //Yii::app()->baseUrl."/images/inLightLogo.png'

$this->widget("ext.imageslider.ImageSlider", array(
	ImageSlider::$IMAGES => $images,
	ImageSlider::$BORDER_COLOR_TOP => "393939",
	ImageSlider::$BORDER_SIZE_TOP => 4,
	ImageSlider::$BORDER_COLOR_BOTTOM => "393939",
	ImageSlider::$BORDER_SIZE_BOTTOM => 4,
	ImageSlider::$BACK_BUTTON_BACKGROUND_COLOR => "393939",
	ImageSlider::$FORWARD_BUTTON_BACKGROUND_COLOR => "393939",
	ImageSlider::$TIMER_VALUE => 5000
));

echo "<div id='cantainer'>";
echo CHtml::link("<div class='image_cont'><img width='200' alt='ABc' src='".Yii::app()->baseUrl."/images/Home/Features/free_website_promo.png' ></div>","#data", array("id"=>"fancy-link"));
echo CHtml::link("<div class='image_cont'><img width='200' alt='ABc' src='".Yii::app()->baseUrl."/images/Home/Features/aziz_reno.png' ></div>","#data1", array("id"=>"fancy-link"));
echo CHtml::link("<div class='image_cont'><img width='200' alt='ABc' src='".Yii::app()->baseUrl."/images/Home/Features/inlightdev.png' ></div>","#data2", array("id"=>"fancy-link"));
echo CHtml::link("<div class='image_cont'><img width='200' alt='ABc' src='".Yii::app()->baseUrl."/images/Home/Features/webpage_display1.png' ></div>","#data3", array("id"=>"fancy-link"));
echo "</div>";
//put fancybox on page
$this->widget('ext.fancybox.EFancyBox', array(
        'target'=>'a#fancy-link',
        'config'=>array(),));


?>

<div style="display:none">
	<div id="data" >
		<img alt="ABc" src="<?php echo Yii::app()->baseUrl.'/images/Home/Features/free_website_promo.png'; ?>">
	</div>

	<div id="data1" >
		<img alt="ABc" src="<?php echo Yii::app()->baseUrl.'/images/Home/Features/aziz_reno.png'; ?>">
	</div>

	<div id="data2" >
		<img alt="ABc" src="<?php echo Yii::app()->baseUrl.'/images/Home/Features/inlightdev.png'; ?>">
	</div>

	<div id="data3" >
		<img alt="ABc" src="<?php echo Yii::app()->baseUrl.'/images/Home/Features/webpage_display1.png'; ?>">
	</div>
</div>




