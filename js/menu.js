function redirectToPage(page_url) {
	
	window.location.replace(page_url);
}

function setSelectedPage(page) {
	
	if (page == 'home') {
		
		$("#menu_home").addClass("menu_home_selected");
		
	} else if (page == 'application') {
		
		$("#menu_application").addClass("menu_application_selected");
		
	} else if (page == 'website') {
		
		$("#menu_website").addClass("menu_website_selected");
		
	} else if (page == 'design') {
		
		$("#menu_design").addClass("menu_design_selected");
		
	} else if (page == 'contact') {
		
		$("#menu_contact").addClass("menu_contact_selected");
	}
}