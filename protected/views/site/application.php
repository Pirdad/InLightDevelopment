<?php
/* @var $this SiteController */
Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl."/css/application.css");
$this->pageTitle=Yii::app()->name . ' - Application Development';
?>

<div id="page_application_bg">
	<div id="left_column">
		<h1>Android Application Development</h1>
		<div id="img_android">
			<img src="<?php echo Yii::app()->request->baseUrl."/images/Application/android.png" ?>" alt="Android Application Development" />
		</div>
	</div>
	<div id="right_column">
		<?php 
		$html_application_content =
<<<HTML
<div id="article_android">
Android is being used by millions of people around the
world as it is becoming more and more popular. It is a 
great platform because it supports a lot of smart features.
There are more than 10 device manufactureres like Samsung,
LG, and Acer that choose Android as their Operating System.
<br><br>
Having said that, we prepared ourselves for the future.
Inlight can now build great Android Applications that can be
used by millions of people. We have the necessary skills to
plan, design, build and publish your Android Application.
<br><br>
If you provide a service to people that could potentially be
converted to an Android Application, please don't hesitate
to get in touch with us.
<br><br>
Planning
<br><br>

We would sit with you and define requirements 
for the application. This would normally be 
converted to features. Also, it helps to 
define scopes for application.
</div>
HTML;
		Yii::import("ext.scrollablebox.ScrollableBox", true);
		$this->widget("ext.scrollablebox.ScrollableBox", array(
			ScrollableBox::$WIDGET_UNIQUE_ID => "_1",
			ScrollableBox::$WIDGET_HEIGHT => 370,
			ScrollableBox::$SCROLLBAR_CONTAINER_WIDTH => 18,
			ScrollableBox::$SCROLLBAR_WIDTH => 10,
			ScrollableBox::$SCROLLBAR_COLOR => '#a4ca39',
			ScrollableBox::$HTML_HEADER_CONTENT => $header_website_content,
			ScrollableBox::$HEADER_VISIBILITY => true,
			ScrollableBox::$FOOTER_VISIBILITY => false,
			ScrollableBox::$HTML_CONTENT => $html_application_content,
			ScrollableBox::$SCROLLABLE_INDICATOR_VISIBILITY => false,
		));
		?>
	</div>
</div>

