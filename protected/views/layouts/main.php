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

<div style="position: fixed; width: 100%; z-index: -2000; ">

	<img src="<?php echo Yii::app()->request->baseUrl;?>/images/Background/bg_wood.png" alt="" />

</div>

<div class="container over_top_shadow" id="page">


	<div id="header">
		<div id="logo"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/inLightDevelopment.png" /></div>

		<div id="mainmenu">
			<ul>
				<li>

					<a href="<?php echo getButtonUrl('home'); ?>" ><img src="<?php echo getButtonImage('home'); ?>" /></a>

				</li><li>
					<a href="<?php echo getButtonUrl('services'); ?>" ><img src="<?php echo getButtonImage('services'); ?>" /></a>

				</li><li>
					<a href="<?php echo getButtonUrl('portfolio'); ?>" ><img src="<?php echo getButtonImage('portfolio'); ?>" /></a>

				</li><li>
					<a href="<?php echo getButtonUrl('contact'); ?>" ><img src="<?php echo getButtonImage('contact'); ?>" /></a>

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
