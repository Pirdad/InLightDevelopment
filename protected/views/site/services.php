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
	<p style="padding-right:5px;">
	
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
	<p style="padding-right:5px;">
	
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
<h3>Electronic & Commercial Design</h3>
HTML;
$html_design_content = 
<<<HTML
	<p style="padding-right:5px;">
	
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