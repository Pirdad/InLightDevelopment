<?php /* @var $this Controller */
include_once 'menu.php';
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />
<meta name="keywords"
	content="Website Services, Website builder, Website developer services , Good Website developer services, Website developer services in Toronto , Developing and Designing Website, Website development and design, Web Developing service, Toronto Website Developing and services , Web Design Services ," />
<meta name="description"
	content=" Android is being used by millions of people around the World as it is becoming more and more popular.
		It is a great platform because it supports a lot of smart features.
		There are more than 10 device manufacturers like Samsung, LG, and Acer that choose Android as their Operating System.
		Having said that, we prepared ourselves for the future. Inlight Development can now build great Android Applications and website Application that can be used by millions of people.
		We have the necessary skills to plan, design, build and publish your Android and website Application.
		If you provide a service to people that could potentially be converted to an Android  and website Application, please do not hesitate to get in touch with us. If you want to attract customers or clients, you must be able to present yourself well.
		Websites application are meant to  present your business, idea or yourself. But of course, you do not want to present poorly your website application, therefore spending time and effort will pay off.
		We provide you the best design for your website application . It will not just be a website application like all the other because everything will be custom.
		Whatever the website application  is meant to present, it will portray through its design Website. We will not publish until you are satisfied with every single pixel
		We understand how difficult it is not just to start a business but maintain it as well because we have been there ourselves. Our costs are:  We have a great team of website developers here at Inlight Development with a range of talents.
		We not only specialize in the coding Website applications, but in design website application as well. For us, if a website is not
		visually great then we don't accept it as a mean of presentation. But here are the technologies that
		we excel at: " />
<meta name="revisit-after" content="30 days" />
<meta name="classification" content="Industry" />
<meta name="robots" content="index,follow" />
<meta name="distribution" content="Global" />
<meta name="rating" content="General" />
<meta name="copyright" content="2012 Inlightdevelopment" />
<!-- blueprint CSS framework -->
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css"
	media="screen, projection" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css"
	media="print" />
<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
<link rel="stylesheet" type="text/css"
	href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />
<script type="text/javascript"
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>
<script type="text/javascript"
	src="<?php echo Yii::app()->request->baseUrl; ?>/js/menu.js"></script>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
<script type="text/javascript">
	$(document).ready(function() {
		
		setSelectedPage('<?php echo getSelected(); ?>');
	});
</script>
</head>


<body>
	<!-- <div style="position: fixed; width: 100%; z-index: -2000; ">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Background/wood_bg.png" alt="background Website Application" />
	</div> -->
	<div id="wood_bg">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/Background/wood_bg.png" alt="Application Background" />
	</div>
	<div id="page" class="container over_top_shadow">
		<div id="page_center_wrapper">
			<div id="page_border_gradient_left" class="page_border_gradient"></div>
			<div id="page_content">
				<?php echo $content; ?>
				<div id="page_content_shadow"></div>
			</div>
			
			<div id="mainmenu" class="unselectable">
				<div id="menu_home" class="menu_item unselectable menu_unselected" onclick="redirectToPage('<?php echo getButtonUrl('home'); ?>');">
					Home
				</div><div id="menu_application" class="menu_item unselectable menu_unselected" onclick="redirectToPage('<?php echo getButtonUrl('application'); ?>');">
					Application
				</div><div id="menu_website" class="menu_item unselectable menu_unselected" onclick="redirectToPage('<?php echo getButtonUrl('website'); ?>');">
					Website
				</div><div id="menu_design" class="menu_item unselectable menu_unselected" onclick="redirectToPage('<?php echo getButtonUrl('design'); ?>');">
					Design
				</div><!--<div>
					Portfolio
				</div>--><div id="menu_contact" class="menu_item unselectable menu_unselected" onclick="redirectToPage('<?php echo getButtonUrl('contact'); ?>');">
					Contact
				</div>
				<div class="menu_highlight_top"></div><div class="menu_highlight_bottom"></div>
			</div>
			<div id="page_border_gradient_right" class="page_border_gradient"></div>
			
			<div id="welcome_to_inlight" class="unselectable">
				<img class="float_left unselectable" width="70px" src="<?php echo Yii::app()->request->baseUrl; ?>/images/inLightLogo.png" alt="Inlight Development Logo" />
				<span class="welcome_text unselectable">Welcome to </span><span class="inlight_text unselectable">InLight</span>
			</div>
			
		</div>
	</div>
</body>
</html>
