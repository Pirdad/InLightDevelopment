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

<?php
Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl."/css/home.css");

$services_link = Yii::app()->request->baseUrl.'/site/services';

$header_content =
<<<HTML
<h3>About Us</h3>

HTML;
$html_content =
<<<HTML

	<p style="padding-right:5px;">
	Welcome to Inlight Development. We at Inlight Dev Shop create great looking websites, interactive web-apps and provide small business services.

	For more info, please visit our <a href="$services_link">services</a> page.


	</p>
HTML;

Yii::import("ext.scrollablebox.ScrollableBox", true);

$this->widget("ext.scrollablebox.ScrollableBox", array(


	ScrollableBox::$WIDGET_HEIGHT => 130,

	ScrollableBox::$SCROLLBAR_CONTAINER_WIDTH => 14,

	ScrollableBox::$SCROLLBAR_WIDTH => 8,
	ScrollableBox::$SCROLLBAR_COLOR => '#2d7198',

	ScrollableBox::$HTML_HEADER_CONTENT => $header_content,

	ScrollableBox::$HEADER_VISIBILITY => true,

	ScrollableBox::$FOOTER_VISIBILITY => false,
	ScrollableBox::$HTML_CONTENT => $html_content,

	ScrollableBox::$SCROLLABLE_INDICATOR_WIDTH => 100,

	ScrollableBox::$SCROLLABLE_INDICATOR_HEIGHT => 40,
	ScrollableBox::$SCROLLABLE_INDICATOR_FONT_COLOR => '#A9C9DB',

	ScrollableBox::$SCROLLABLE_INDICATOR_COLOR => 'rgba(45,113,152,0.7)',

	ScrollableBox::$SCROLLABLE_INDICATOR_POSITION => ScrollableBox::$SCROLLABLE_INDICATOR_BOTTOM,

));

?>


</div>

<div id="cont_samples">
	<h3>Samples</h3>

	<?php

		echo CHtml::link("<div class='image_cont'><img width='165' alt='ABc' src='".Yii::app()->baseUrl."/images/Samples/thumb_aziz_reno.png' ></div>","#data1", array("id"=>"fancy-link"));

		echo CHtml::link("<div class='image_cont'><img width='165' alt='ABc' src='".Yii::app()->baseUrl."/images/Samples/thumb_inlight_dev.png' ></div>","#data2", array("id"=>"fancy-link"));

		echo CHtml::link("<div class='image_cont'><img width='165' alt='ABc' src='".Yii::app()->baseUrl."/images/Samples/thumb_eagleontario.png' ></div>","#data3", array("id"=>"fancy-link"));


	?>
</div>



<div style="display:none">

	<div id="data1" >

		<img alt="ABc" src="<?php echo Yii::app()->baseUrl.'/images/Samples/aziz_reno.png'; ?>">

	</div>

	<div id="data2" >
		<img alt="ABc" src="<?php echo Yii::app()->baseUrl.'/images/Samples/inlightdev.png'; ?>">

	</div>

	<div id="data3" >
		<img alt="ABc" src="<?php echo Yii::app()->baseUrl.'/images/Samples/eagleontario.png'; ?>">

	</div>
</div>