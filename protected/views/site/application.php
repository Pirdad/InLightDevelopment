<?php
/* @var $this SiteController */
Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl."/css/application.css");
$this->pageTitle=Yii::app()->name . ' - Application Development';

$base_url = Yii::app()->request->baseUrl;
$img_android_img = $base_url."/images/Application/android_image.png";
$img_android = $base_url."/images/Application/android.png";
$img_android_love = $base_url."/images/Application/android_love.png";
$img_android_idea = $base_url."/images/Application/android_idea.png";
?>

<div id="page_application_bg">
	<div id="left_column">
		<h1>Android Application Development</h1>
		<div id="img_android">
			<img src="<?php echo $img_android_img ?>" alt="Android Application Development" />
		</div>
	</div>
	<div id="right_column">
		<?php 
		$html_application_content =
<<<HTML
<div id="article_android">

<h4>Love Android? Need Android? Use Android?</h4>
<p>
<img class="floatLeft" width="60px" src="$img_android_love" alt="Love Google Android" />
If you provide a service to people that could potentially be
converted to an Android Application, please don't hesitate to 
get in touch with <a href="$base_url/site/contact">us</a>.
</p>

<h4>Do you have a Mobile App Idea?</h4>
<p>
<img class="floatLeft" width="60px" src="$img_android_idea" alt="Google Android Application Ideas" />
The Mobile Platform will eventually replace the desktops and laptops. 
It is becoming more powerful yet smaller.
So if you have an App Idea, get it build as it's a very competitive market.
</p>

<h4>What is Android?</h4>
<img class="floatLeft" width="60px" src="$img_android" alt="Hi from Android" />
<p>
Android is a growing Mobile Platform from Google that hosts millions of
popular apps in it's Market.
</p>
<p>
It is being used by millions of people around the
world as it is becoming more and more popular. It is a 
great platform because of it's flexibility and the amount of
supported features, not to mention it keeps getting updated.
</p>
<p>
Having said that, we prepared ourselves for the future.
Inlight can now build great Android Applications that can be
used by millions of people. We have the necessary skills to
plan, design, build and publish your Android Application.
</p>
<p>
For more info on <a href="http://www.android.com">Android</a>.
<br>
To check out the Google <a href="http://play.google.com/store">Play Market</a>.
</p>
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

