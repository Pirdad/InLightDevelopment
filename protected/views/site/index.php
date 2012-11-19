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
		Yii::app()->baseUrl."/images/Home/Features/coming_soon.png",
		Yii::app()->baseUrl."/images/Home/Features/free_website_promo.png"
		);

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

//echo "<div id='cantainer'>";
//echo CHtml::link("<div class='image_cont'><img width='200' alt='ABc' src='".Yii::app()->baseUrl."/images/Home/Features/free_website_promo.png' ></div>","#data", array("id"=>"fancy-link"));
//echo CHtml::link("<div class='image_cont'><img width='200' alt='ABc' src='".Yii::app()->baseUrl."/images/Home/Features/aziz_reno.png' ></div>","#data1", array("id"=>"fancy-link"));
//echo CHtml::link("<div class='image_cont'><img width='200' alt='ABc' src='".Yii::app()->baseUrl."/images/Home/Features/inlightdev.png' ></div>","#data2", array("id"=>"fancy-link"));
//echo CHtml::link("<div class='image_cont'><img width='200' alt='ABc' src='".Yii::app()->baseUrl."/images/Home/Features/webpage_display1.png' ></div>","#data3", array("id"=>"fancy-link"));
//echo "</div>";

//put fancybox on page
$this->widget('ext.fancybox.EFancyBox', array(
        'target'=>'a#fancy-link',
        'config'=>array(),));
?>

<div id="cont_about_us">
	<h3>About Us</h3>
	<p>Lorem   ipsum   dolor   sit   amet,   consectet
	adipiscing   elit. Maecenas    feugiat j  usto
	mauris   commodo    adipiscing.
	Fusce ac  diam  sit amet  sem vehicula moles
	Integer aliquet viverra  metus  euismod temp
	Proin consequat pellentesque dolor ut biben
	Duis eget lectus quam. Duis id leo sed justo
	aliquet     volutpat.   Mauris    ut l  acus   ege.
	</p>
</div>

<div id="cont_samples">
	<h3>Samples</h3>
	<?php

		echo CHtml::link("<div class='image_cont'><img width='165' alt='web designed' src='".Yii::app()->baseUrl."/images/Samples/thumb_aziz_reno.png' ></div>","#data1", array("id"=>"fancy-link"));
		echo CHtml::link("<div class='image_cont'><img width='165' alt='web designed' src='".Yii::app()->baseUrl."/images/Samples/thumb_inlight_dev.png' ></div>","#data2", array("id"=>"fancy-link"));
		echo CHtml::link("<div class='image_cont'><img width='165' alt='web designed' src='".Yii::app()->baseUrl."/images/Samples/thumb_eagleontario.png' ></div>","#data3", array("id"=>"fancy-link"));

	?>
</div>


<div style="display:none">

	<div id="data1" >
		<img alt="web designed" src="<?php echo Yii::app()->baseUrl.'/images/Samples/aziz_reno.png'; ?>">
	</div>

	<div id="data2" >
		<img alt="web designed" src="<?php echo Yii::app()->baseUrl.'/images/Samples/inlightdev.png'; ?>">
	</div>

	<div id="data3" >
		<img alt="web designed" src="<?php echo Yii::app()->baseUrl.'/images/Samples/eagleontario.png'; ?>">
	</div>
</div>



