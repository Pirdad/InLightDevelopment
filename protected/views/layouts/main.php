<?php /* @var $this Controller */

function getSelected($button) {


	if (Yii::app()->getController()->id == "site")

	{
		$page = Yii::app()->getController()->getAction()->id;

		if ($button == $page) {

			return "_selected";
		} else if ($page == "index" && $button == "home") {

			return "_selected";
		} else {

			return "";
		}
	}

}

function getButtonImage($button) {


	if ($button == "home") {

		return  Yii::app()->request->baseUrl.'/images/Buttons/home_btn'.getSelected($button).'.png';

	} else if ($button == "services") {

		return  Yii::app()->request->baseUrl.'/images/Buttons/services_btn'.getSelected($button).'.png';

	} else if ($button == "portfolio") {

		return  Yii::app()->request->baseUrl.'/images/Buttons/portfolio_btn'.getSelected($button).'.png';

	} else if ($button == "contact") {

		return  Yii::app()->request->baseUrl.'/images/Buttons/contact_btn'.getSelected($button).'.png';

	}
}

function getButtonUrl($button) {


	if ($button == "home") {

		return  Yii::app()->request->baseUrl.'/site/index';

	} else if ($button == "services") {

		return  Yii::app()->request->baseUrl.'/site/services';

	} else if ($button == "portfolio") {

		return  Yii::app()->request->baseUrl.'/site/portfolio';

	} else if ($button == "contact") {

		return  Yii::app()->request->baseUrl.'/site/contact';

	}
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

<meta name="keywords" content="Website Services, Website builder, Website developer services , Good Website developer services, Website developer services in Toronto , Developing and Designing Website, Website development and design, Web Developing service, Toronto Website Developing and services , Web Design Services ,"/>

<meta name="description" content=" Android is being used by millions of people around the World as it is becoming more and more popular.
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
	we excel at: "/>
<meta name="revisit-after" content="30 days" />
<meta name="classification" content="Industry" />
<meta name="robots" content="index,follow" />
<meta name="distribution" content="Global" />
<meta name="rating" content="General" />
<meta name="copyright" content="2012 Inlightdevelopment" />


	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />

	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />

	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />


	<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.js"></script>


	<title><?php echo CHtml::encode($this->pageTitle); ?></title>

</head>
<body>

<div style="position: fixed; width: 100%; z-index: -2000; ">

	<img src="<?php echo Yii::app()->request->baseUrl;?>/images/Background/bg_wood.png" alt="background Website Application" />

</div>

<div class="container over_top_shadow" id="page">


	<div id="header">
		<div id="logo"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/inLightDevelopment.png" alt="logImage"/></div>

		<div id="mainmenu">
			<ul>
				<li>

					<a href="<?php echo getButtonUrl('home'); ?>" ><img src="<?php echo getButtonImage('home'); ?> " alt="Website application" /> </a>

				</li><li>
					<a href="<?php echo getButtonUrl('services'); ?>" ><img src="<?php echo getButtonImage('services'); ?> " alt="Website application" /> </a>

				</li><!--<li>
					<a href="<?php echo getButtonUrl('portfolio'); ?>" ><img src="<?php echo getButtonImage('portfolio'); ?> " alt="Website application" /> </a>

				</li>  --><li>
					<a href="<?php echo getButtonUrl('contact'); ?>" ><img src="<?php echo getButtonImage('contact'); ?> " alt="Website application" /> </a>

				</li>
			</ul>
		</div><!-- mainmenu -->

	</div><!-- header -->


	<?php if(isset($this->breadcrumbs)):?>

		<?php $this->widget('zii.widgets.CBreadcrumbs', array(

			'links'=>$this->breadcrumbs,

		)); ?><!-- breadcrumbs -->
	<?php endif?>


	<?php echo $content; ?>


	<div class="clear"></div>

	<div id="footer">

		Copyright &copy; <?php echo date('Y'); ?> by InLight Development.<br/>

		All Rights Reserved.<br/>
	</div><!-- footer -->


</div><!-- page -->

</body>
</html>
