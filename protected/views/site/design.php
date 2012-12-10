<?php
Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl."/css/design.css");
$this->pageTitle=Yii::app()->name . ' - Design';
$base_url = Yii::app()->request->baseUrl;
$img_design_img = $base_url."/images/design/design_image.png";
$img_phon_brush = $base_url."/images/design/phone_brush.png";
$img_globe_brush = $base_url."/images/design/globe_brush.png";

?>

<div id="page_design_bg">
	<div id="left_column">
		<h1>Web &#38; Commercial Design</h1>
		<div id="img_design">
			<img src="<?php echo $img_design_img ?>" alt="Android Application Development" />
		</div>
	</div>
	<div id="right_column">
		<?php
		$html_design_content =
<<<HTML
<div id="article_android">

<h4>Application Design</h4>
<p>
<img class="floatLeft" width="60px" src="$img_phon_brush" alt="Love Google Android" />
Aproximetly a decade ago, design was not as important
as the functionality of the application. This was due to
the beginning of technology as it was still in it is youth.
However, now everyone can agree that design is as
important and perhaps a little more so.
We understand that if the application is not designed well,
it will not be used as much. Having said that, we focus in
this area as much as we can in order to perfect every pixel
that you see on the screen, so your user feels welcomed.
If you provide a service to people that could potentially be
converted to an Android Application, please don't hesitate to
get in touch with <a href="$base_url/site/contact">us</a>.
</p>

<h4>Website Design</h4>
<p>
<img class="floatLeft" width="60px" src="$img_globe_brush" alt="Google Android Application Ideas" />
Websites are there to be your presentation. Now a days,
who even looks at an old boring website that is full of text
with minimal number of images, not to mention poor
layout. What are the rules of a powerpoint presentation as
we all learned in school, 1: Concise and minimal text,
2: meaningful pictures, and 3: Simple layout. Of course,
powerpoint have it is limitations so you can not really be
creative enough, but that is not the case with websites.
</p>

</div>
HTML;
		Yii::import("ext.scrollablebox.ScrollableBox", true);
		$this->widget("ext.scrollablebox.ScrollableBox", array(
			ScrollableBox::$WIDGET_UNIQUE_ID => "_1",
			ScrollableBox::$WIDGET_HEIGHT => 370,
			ScrollableBox::$SCROLLBAR_CONTAINER_WIDTH => 18,
			ScrollableBox::$SCROLLBAR_WIDTH => 10,
			ScrollableBox::$SCROLLBAR_COLOR => '#ffc23f',
			ScrollableBox::$HEADER_VISIBILITY => true,
			ScrollableBox::$FOOTER_VISIBILITY => false,
			ScrollableBox::$HTML_CONTENT => $html_design_content,
			ScrollableBox::$SCROLLABLE_INDICATOR_VISIBILITY => false,
		));
		?>
	</div>
</div>
