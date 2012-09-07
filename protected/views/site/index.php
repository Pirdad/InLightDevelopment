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
		Yii::app()->baseUrl."/images/Home/sample_aziz_reno.png", 
		Yii::app()->baseUrl."/images/Home/sample_inlight_dev.png", 
		Yii::app()->baseUrl."/images/inLightLogo.png");

$this->widget("ext.imageslider.ImageSlider", array(
	ImageSlider::$IMAGES=>$images,
	ImageSlider::$BACK_BUTTON=>Yii::app()->baseUrl."/images/Home/Slider/left_btn.png",
	ImageSlider::$FORWARD_BUTTON=>Yii::app()->baseUrl."/images/Home/Slider/right_btn.png"));

?>
Github is really cool!

<?php 
//$css_path = Yii::app()->getClientScript()->getPackageBaseUrl("ext.imageslider");
//echo "package url: ".$css_path;
?>
