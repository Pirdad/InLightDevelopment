<div id = "cont_services">

<h1>Services</h1>

<?php
$base_url = Yii::app()->request->baseUrl;
Yii::app()->getClientScript()->registerCssFile($base_url."/css/services.css");

$img_development_url = $base_url."/images/Services/development.png";

// ================================= WebSite
$header_website_content =
<<<HTML
<h3>Web Site Development</h3>
HTML;
$html_website_content =
<<<HTML
	<p style="padding-right:5px;font-family:serif;">

	<img src='$img_development_url' alt='development' />

	We have a great team of developers here at Inlight Development with a range of talents.
	We not only specialize in the coding, but in design as well. For us, if a website is not
	visually great then we don't accept it as a mean of presentation. But here are the technologies that
	we excel at:
	<ul>

		<li>HTML and CSS (learning HTML5 & CSS3)</li>
		<li>JavaScript and Jquery for client side</li>
		<li>PHP for server side</li>
		<li>Finally, the amazing Yii Framework</li>

	</ul>

	</p>
HTML;
echo "<div id = 'content_services_website'>";
Yii::import("ext.scrollablebox.ScrollableBox", true);
$this->widget("ext.scrollablebox.ScrollableBox", array(
	ScrollableBox::$WIDGET_UNIQUE_ID => "_1",
	ScrollableBox::$WIDGET_HEIGHT => 500,
	ScrollableBox::$WIDGET_WIDTH => 300,
	ScrollableBox::$SCROLLBAR_CONTAINER_WIDTH => 14,
	ScrollableBox::$SCROLLBAR_WIDTH => 8,
	ScrollableBox::$SCROLLBAR_COLOR => '#2d7198',
	ScrollableBox::$HTML_HEADER_CONTENT => $header_website_content,
	ScrollableBox::$HEADER_VISIBILITY => true,
	ScrollableBox::$FOOTER_VISIBILITY => false,
	ScrollableBox::$HTML_CONTENT => $html_website_content,
	ScrollableBox::$SCROLLABLE_INDICATOR_WIDTH => 100,
	ScrollableBox::$SCROLLABLE_INDICATOR_HEIGHT => 40,
	ScrollableBox::$SCROLLABLE_INDICATOR_FONT_COLOR => '#A9C9DB',
	ScrollableBox::$SCROLLABLE_INDICATOR_COLOR => 'rgba(45,113,152,0.7)',
	ScrollableBox::$SCROLLABLE_INDICATOR_POSITION => ScrollableBox::$SCROLLABLE_INDICATOR_BOTTOM,
));
echo "</div>";

// ================================= Web Application
$header_webapp_content =
<<<HTML
<h3>Application Development</h3>
HTML;
$html_webapp_content =
<<<HTML
	<p style="padding-right:5px; font-family:serif;">

	<img src='$img_development_url' alt='development' />

	Android is being used by millions of people around the World as it is becoming more and more popular.
	It is a great platform because it supports a lot of smart features.
	There are more than 10 device manufacturers like Samsung, LG, and Acer that choose Android as their Operating System.
	Having said that, we prepared ourselves for the future. Inlight Development can now build great Android Applications that can be used by millions of people.
	We have the necessary skills to plan, design, build and publish your Android Application.
	If you provide a service to people that could potentially be converted to an Android Application, please do not hesitate to get in touch with us.
	<ul>
		<li>Najeeb Sakhizada:(647)703 - 6603</li>
		<li>najeeb@inlightdevelopment.com</li>

	</ul>

	</p>
HTML;
echo "<div id='content_services_webapp'>";
Yii::import("ext.scrollablebox.ScrollableBox", true);
$this->widget("ext.scrollablebox.ScrollableBox", array(

	ScrollableBox::$WIDGET_UNIQUE_ID => "_2",
	ScrollableBox::$WIDGET_HEIGHT => 500,
	ScrollableBox::$WIDGET_WIDTH => 300,
	ScrollableBox::$SCROLLBAR_CONTAINER_WIDTH => 14,
	ScrollableBox::$SCROLLBAR_WIDTH => 8,
	ScrollableBox::$SCROLLBAR_COLOR => '#2d7198',
	ScrollableBox::$HTML_HEADER_CONTENT => $header_webapp_content,
	ScrollableBox::$HEADER_VISIBILITY => true,
	ScrollableBox::$FOOTER_VISIBILITY => false,
	ScrollableBox::$HTML_CONTENT => $html_webapp_content,
	ScrollableBox::$SCROLLABLE_INDICATOR_WIDTH => 100,
	ScrollableBox::$SCROLLABLE_INDICATOR_HEIGHT => 40,
	ScrollableBox::$SCROLLABLE_INDICATOR_FONT_COLOR => '#A9C9DB',
	ScrollableBox::$SCROLLABLE_INDICATOR_COLOR => 'rgba(45,113,152,0.7)',
	ScrollableBox::$SCROLLABLE_INDICATOR_POSITION => ScrollableBox::$SCROLLABLE_INDICATOR_BOTTOM,
));
echo "</div>";

// ================================= Design
$header_design_content =
<<<HTML
<h3>Web & Commercial Design</h3>
HTML;
$html_design_content =
<<<HTML
	<p style="padding-right:5px;"font-family:serif;>

	<img src='$img_development_url' alt='development' />

	If you want to attract customers or clients, you must be able to present yourself well.
	Websites are meant to  present your business, idea or yourself. But of course, you do not want to present poorly, therefore spending time and effort will pay off.
	We provide you the best design for your site. It will not just be a website like all the other because everything will be custom.
	Whatever the website is meant to present, it will portray through its design. We will not publish until you are satisfied with every single pixel
	We understand how difficult it is not just to start a business but maintain it as well because we have been there ourselves. Our costs are:

	<ul>

		<li>Search Engine Optimization</li>
		<li>Google AdWords</li>
		<li>amazon Product Ads</li>
		<li>MSN, Yahoo and More..</li>

	</ul>

	</p>
HTML;
echo "<div id='content_services_webapp'>";
Yii::import("ext.scrollablebox.ScrollableBox", true);
$this->widget("ext.scrollablebox.ScrollableBox", array(

	ScrollableBox::$WIDGET_UNIQUE_ID => "_3",
	ScrollableBox::$WIDGET_HEIGHT => 500,
	ScrollableBox::$WIDGET_WIDTH => 300,
	ScrollableBox::$SCROLLBAR_CONTAINER_WIDTH => 14,
	ScrollableBox::$SCROLLBAR_WIDTH => 8,
	ScrollableBox::$SCROLLBAR_COLOR => '#2d7198',
	ScrollableBox::$HTML_HEADER_CONTENT => $header_design_content,
	ScrollableBox::$HEADER_VISIBILITY => true,
	ScrollableBox::$FOOTER_VISIBILITY => false,
	ScrollableBox::$HTML_CONTENT => $html_design_content,
	ScrollableBox::$SCROLLABLE_INDICATOR_WIDTH => 100,
	ScrollableBox::$SCROLLABLE_INDICATOR_HEIGHT => 40,
	ScrollableBox::$SCROLLABLE_INDICATOR_FONT_COLOR => '#A9C9DB',
	ScrollableBox::$SCROLLABLE_INDICATOR_COLOR => 'rgba(45,113,152,0.7)',
	ScrollableBox::$SCROLLABLE_INDICATOR_POSITION => ScrollableBox::$SCROLLABLE_INDICATOR_BOTTOM,
));
echo "</div>";
?>

</div>