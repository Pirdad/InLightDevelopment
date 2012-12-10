<?php
Yii::app()->getClientScript()->registerCssFile(Yii::app()->request->baseUrl."/css/contact.css");
$this->pageTitle=Yii::app()->name . ' - Contact Us';

$base_url = Yii::app()->request->baseUrl;
$contact_image = $base_url."/images/Contact/contact_image.png";
$ic_office = $base_url."/images/Contact/ic_office.png";
$ic_email = $base_url."/images/Contact/ic_email.png";
$ic_phone = $base_url."/images/Contact/ic_phone.png";
?>

<div id="page_contact_bg">
	<div id="left_column">
		<h1>Contact Us</h1>
		<div id="img_contact">
			<img src="<?php echo $contact_image ?>" alt="Contact Inlight Development" />
		</div>
	</div>
	<div id="right_column">
		<?php
		$html_contact_content =
<<<HTML
<div id="article_contact">

<iframe width="425" height="200" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.ca/maps?hl=en&amp;q=107+-+1560+Brimley+Rd.+Toronto+ontario&amp;ie=UTF8&amp;hq=&amp;hnear=1560+Brimley+Rd,+Toronto,+Toronto+Division,+Ontario+M1P+2X9&amp;gl=ca&amp;ll=43.770528,-79.261637&amp;spn=0.012582,0.033023&amp;t=m&amp;z=14&amp;output=embed"></iframe><br /><small><a href="https://maps.google.ca/maps?hl=en&amp;q=107+-+1560+Brimley+Rd.+Toronto+ontario&amp;ie=UTF8&amp;hq=&amp;hnear=1560+Brimley+Rd,+Toronto,+Toronto+Division,+Ontario+M1P+2X9&amp;gl=ca&amp;ll=43.770528,-79.261637&amp;spn=0.012582,0.033023&amp;t=m&amp;z=14&amp;source=embed" text-align:left">View Larger Map</a></small>

<div id="contact_pars">
<p class="contact_par">
<img class="floatLeft" width="24px" src="$ic_office" alt="Cost Effective" />
Unit 107 - 1560 Brimley Rd. Toronto, ON
</p>
<p class="contact_par">
<img class="floatLeft" width="24px" src="$ic_email" alt="Cost Effective" />
najeeb@inlightdevelopment.com
</p>
<p class="contact_par">
<img class="floatLeft" width="24px" src="$ic_phone" alt="Cost Effective" />
(647) 703 - 6603
</p>
</div>

</div>
HTML;
		Yii::import("ext.scrollablebox.ScrollableBox", true);
		$this->widget("ext.scrollablebox.ScrollableBox", array(
			ScrollableBox::$WIDGET_UNIQUE_ID => "_1",
			ScrollableBox::$WIDGET_HEIGHT => 370,
			ScrollableBox::$SCROLLBAR_CONTAINER_WIDTH => 18,
			ScrollableBox::$SCROLLBAR_WIDTH => 10,
			ScrollableBox::$SCROLLBAR_COLOR => '#989696',
			ScrollableBox::$HEADER_VISIBILITY => true,
			ScrollableBox::$FOOTER_VISIBILITY => false,
			ScrollableBox::$HTML_CONTENT => $html_contact_content,
			ScrollableBox::$SCROLLABLE_INDICATOR_VISIBILITY => false,
		));
		?>
	</div>
</div>


