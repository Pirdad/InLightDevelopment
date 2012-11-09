<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - Services';
$this->breadcrumbs=array(
	'Services',
);
?>
<h1>Services</h1>

<h4>This page is under construction and coming soon</h4>

<?php
$html_content = 
<<<HTML
	<div style="padding-top:10px; padding-bottom:10px; padding-right:10px; padding-left:10px;">
				<p style="background-color: #84BD99;" >Lorem   ipsum   dolor   sit   amet,   consectet
				adipiscing   elit. Maecenas    feugiat j  usto   
				mauris   commodo    adipiscing. 
				Fusce ac  diam  sit amet  sem vehicula moles
				Integer aliquet viverra  metus  euismod temp
				Proin consequat pellentesque dolor ut biben
				Duis eget lectus quam. Duis id leo sed justo 
				aliquet     volutpat.   Mauris    ut l  acus   ege.
				</p>
				<p style="background-color: #84BD99;" >Lorem   ipsum   dolor   sit   amet,   consectet
				adipiscing   elit. Maecenas    feugiat j  usto   
				mauris   commodo    adipiscing. 
				Fusce ac  diam  sit amet  sem vehicula moles
				Integer aliquet viverra  metus  euismod temp
				Proin consequat pellentesque dolor ut biben
				Duis eget lectus quam. Duis id leo sed justo 
				aliquet     volutpat.   Mauris    ut l  acus   ege.
				</p>
				<p style="background-color: #84BD99;" >Lorem   ipsum   dolor   sit   amet,   consectet
				adipiscing   elit. Maecenas    feugiat j  usto   
				mauris   commodo    adipiscing. 
				Fusce ac  diam  sit amet  sem vehicula moles
				Integer aliquet viverra  metus  euismod temp
				Proin consequat pellentesque dolor ut biben
				Duis eget lectus quam. Duis id leo sed justo 
				aliquet     volutpat.   Mauris    ut l  acus   ege.
				</p>
				<p style="background-color: #84BD99;" >Lorem   ipsum   dolor   sit   amet,   consectet
				adipiscing   elit. Maecenas    feugiat j  usto   
				mauris   commodo    adipiscing. 
				Fusce ac  diam  sit amet  sem vehicula moles
				Integer aliquet viverra  metus  euismod temp
				Proin consequat pellentesque dolor ut biben
				Duis eget lectus quam. Duis id leo sed justo 
				aliquet     volutpat.   Mauris    ut l  acus   ege.
				</p>
				<p style="background-color: #84BD99;" >Lorem   ipsum   dolor   sit   amet,   consectet
				adipiscing   elit. Maecenas    feugiat j  usto   
				mauris   commodo    adipiscing. 
				Fusce ac  diam  sit amet  sem vehicula moles
				Integer aliquet viverra  metus  euismod temp
				Proin consequat pellentesque dolor ut biben
				Duis eget lectus quam. Duis id leo sed justo 
				aliquet     volutpat.   Mauris    ut l  acus   ege.
				</p>
		</div>
HTML;

Yii::import("ext.scrollablebox.ScrollableBox", true);

$this->widget("ext.scrollablebox.ScrollableBox", array(
	ScrollableBox::$HTML_CONTENT => $html_content,
	ScrollableBox::$WIDGET_WIDTH => 800,
	ScrollableBox::$WIDGET_HEIGHT => 400,
	ScrollableBox::$WIDGET_COLOR => 'black',	
	ScrollableBox::$SCROLLBAR_CONTAINER_WIDTH => 20,
	ScrollableBox::$SCROLLBAR_CONTAINER_COLOR => 'white',
	ScrollableBox::$SCROLLBAR_WIDTH => 18,
	ScrollableBox::$SCROLLBAR_COLOR => 'orange',
	ScrollableBox::$SCROLLBAR_VISIBILITY => true,
	ScrollableBox::$HEADER_HEIGHT => 40,
	ScrollableBox::$HEADER_COLOR => 'white',
	ScrollableBox::$HEADER_VISIBILITY => true,
	ScrollableBox::$FOOTER_HEIGHT => 50,
	ScrollableBox::$FOOTER_COLOR => 'orange',
	ScrollableBox::$FOOTER_VISIBILITY => true,
	ScrollableBox::$CONTENT_CONTAINER_COLOR => 'green',
	ScrollableBox::$CONTENT_COLOR => 'yellow',
	ScrollableBox::$SCROLLABLE_INDICATOR_VISIBILITY => true,
	ScrollableBox::$SCROLLABLE_INDICATOR_WIDTH => 400,
	ScrollableBox::$SCROLLABLE_INDICATOR_HEIGHT => 100,
	ScrollableBox::$SCROLLABLE_INDICATOR_FONT_COLOR => '#ffffff',
	ScrollableBox::$SCROLLABLE_INDICATOR_COLOR => 'rgba(67,149,0,0.7)',
	ScrollableBox::$SCROLLABLE_INDICATOR_POSITION => ScrollableBox::$SCROLLABLE_INDICATOR_RIGHT,
));
?>