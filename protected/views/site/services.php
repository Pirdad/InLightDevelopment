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

Yii::import("ext.scrollablebox.ScrollableBox", true);

$this->widget("ext.scrollablebox.ScrollableBox", array(
	ScrollableBox::$HTML_CONTENT => '<div>I am crazy!</div>',
));
?>