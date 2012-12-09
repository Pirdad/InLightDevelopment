<?php

function getSelected() {

	$button_name = "";
	if (Yii::app()->getController()->id == "site") {
		
		$page = Yii::app()->getController()->getAction()->id;
		if ($page == 'index') {

			$button_name = "home";
			
		} else if ($page == "application") {

			$button_name = "application";
			
		} else if ($page == "website") {

			$button_name = "website";
			
		} else if ($page == "design") {

			$button_name = "design";
			
		} else if ($page == "contact") {

			$button_name = "contact";
			
		} else {

			$button_name = "";
		}
	}
	return $button_name;
}

function getButtonUrl($button) {

	if ($button == "home") {

		return  Yii::app()->request->baseUrl.'/site/index';

	} else if ($button == "application") {

		return  Yii::app()->request->baseUrl.'/site/application';

	} else if ($button == "website") {

		return  Yii::app()->request->baseUrl.'/site/website';

	} else if ($button == "design") {

		return  Yii::app()->request->baseUrl.'/site/design';

	} else if ($button == "contact") {

		return  Yii::app()->request->baseUrl.'/site/contact';
	}
}

?>