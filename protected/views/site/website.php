<?php
Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl."/css/website.css");
$this->pageTitle=Yii::app()->name . ' - Website Development';

$base_url = Yii::app()->request->baseUrl;
$website_image = $base_url."/images/Website/website_image.png";
$presentation = $base_url."/images/Website/presentation.png";
$clean = $base_url."/images/Website/clean.png";
$cost = $base_url."/images/Website/cost.png";
?>

<div id="page_website_bg">
	<div id="left_column">
		<h1>Web Site Development</h1>
		<div id="img_website">
			<img src="<?php echo $website_image ?>" alt="Web Site Development" />
		</div>
	</div>
	<div id="right_column">
		<?php
		$html_website_content =
<<<HTML
<div id="article_website">

<h4>Means of Presenting Your Self</h4>
<p>
<img class="floatLeft" width="60px" src="$presentation" alt="Web Site as Presentation" />
If you want to attract customers or clients, you must be
able to present yourself well. Websites are meant to
present your business, idea or yourself.
But of course, you don't want to present poorly, therefore
spending time and effort will pay off.
</p>

<h4>Clean and Custom Design</h4>
<p>
<img class="floatLeft" width="60px" src="$clean" alt="Design should be Clean and Custom" />
We provide you the best design for your site. It will not
just be a website like all the other because everything
will be custom. Whatever the website is meant to
present, it will portray through it's design. We will not
publish untill you are satisfied with every single pixel.
</p>

<h4>Cost Effective</h4>
<img class="floatLeft" width="60px" src="$cost" alt="Cost Effective" />
<p>
We understand how difficult it is not just to start a
business but maintain it as well because we've been
there ourselves. Our costs are fair, however if your on a
tight budget, we can definetly work something out
therefore don't hesitate to <a href="$base_url/site/contact">get in touch</a>.
</p>
</div>
HTML;
		Yii::import("ext.scrollablebox.ScrollableBox", true);
		$this->widget("ext.scrollablebox.ScrollableBox", array(
			ScrollableBox::$WIDGET_UNIQUE_ID => "_1",
			ScrollableBox::$WIDGET_HEIGHT => 370,
			ScrollableBox::$SCROLLBAR_CONTAINER_WIDTH => 18,
			ScrollableBox::$SCROLLBAR_WIDTH => 10,
			ScrollableBox::$SCROLLBAR_COLOR => '#44c8ff',
			ScrollableBox::$HEADER_VISIBILITY => true,
			ScrollableBox::$FOOTER_VISIBILITY => false,
			ScrollableBox::$HTML_CONTENT => $html_website_content,
			ScrollableBox::$SCROLLABLE_INDICATOR_VISIBILITY => false,
		));
		?>
	</div>
</div>

