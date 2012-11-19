var JQUERY_POUND = "#";
var SCROLLABLE_BOX = "scrollable_box_";
var CONTAINER_DIV = JQUERY_POUND + SCROLLABLE_BOX + "main";
var TITLE_DIV = JQUERY_POUND + SCROLLABLE_BOX + "title";
var FOOTER_DIV = JQUERY_POUND + SCROLLABLE_BOX + "footer";
var CONTENT_CONTAINER_DIV = JQUERY_POUND + SCROLLABLE_BOX + "content_container";
var CONTENT_DIV = JQUERY_POUND + SCROLLABLE_BOX + "content";
var SCROLLBAR_CONTAINER_DIV = JQUERY_POUND + SCROLLABLE_BOX + "scrollbar_container";
var SCROLLBAR_DIV = JQUERY_POUND + SCROLLABLE_BOX + "scrollbar";
var SCROLLABLE_INDICATOR = JQUERY_POUND + SCROLLABLE_BOX + "scrollable_indicator";

var SCROLLABLE_INDICATOR_RIGHT = "right";
var SCROLLABLE_INDICATOR_LEFT = "left";
var SCROLLABLE_INDICATOR_TOP = "top";
var SCROLLABLE_INDICATOR_BOTTOM = "bottom";
var SCROLLABLE_INDICATOR_CENTER = "center";


function ScrollableBox(unique_id) {

	this.widget_unique_id = unique_id;
	this.widget_hyt = null;
	this.widget_wid = null;
	this.widget_col = null;

	this.scrollbar_container_wid = null;
	this.scrollbar_container_col = null;
	this.scrollbar_container_img = null;

	this.scrollbar_wid = null;
	this.scrollbar_col = null;
	this.scrollbar_vis = true;

	this.header_hyt = null;
	this.header_col = null;
	this.header_vis = true;

	this.footer_hyt = null;
	this.footer_col = null;
	this.footer_vis = true;

	this.content_container_col = null;
	this.content_container_img = null;

	this.content_col = null;
	this.content_img = null;

	this.scrollable_indicator_pos = null;
	this.scrollable_indicator_font_col = null;
	this.scrollable_indicator_col = null;
	this.scrollable_indicator_wid = null;
	this.scrollable_indicator_hyt = null;
	this.scrollable_indicator_vis = true;

	this.min_scroll = 0;
	this.max_scroll = 200; // = scrollbar_container_h

	this.last_mouse_y_pos = 0;
	this.default_scroll_speed = 10;
	this.content_to_scrollbar_ratio = 0;

	this.is_scrollable = true;
	this.is_indicator_visible = false;

	this.creator = null;
}

ScrollableBox.prototype.initialize = function() {

	this.setWidgetProperties();
	this.setHeaderProperties();
	this.setFooterProperties();
	this.setScrollbarContainerProperties();
	this.setContentAreaProperties();
	this.setScrollbarProperties();
	this.setScrollbarContainerVisibility();
	this.setScrollableIndicator();

	this.max_scroll = $(SCROLLBAR_CONTAINER_DIV + this.widget_unique_id).height() - $(SCROLLBAR_DIV + this.widget_unique_id).height();

	this.creator = new creator(this);
}

ScrollableBox.prototype.setWidgetProperties = function() {

	if (this.widget_wid != null) $(CONTAINER_DIV + this.widget_unique_id).width(this.widget_wid);
	if (this.widget_hyt != null) $(CONTAINER_DIV + this.widget_unique_id).height(this.widget_hyt);
	if (this.widget_col != null) $(CONTAINER_DIV + this.widget_unique_id).css('background-color', this.widget_col);
}

ScrollableBox.prototype.setHeaderProperties = function() {

	if (this.header_hyt != null) $(TITLE_DIV + this.widget_unique_id).height(this.header_hyt);
	if (this.header_col != null) $(TITLE_DIV + this.widget_unique_id).css('background-color', this.header_col);
	if (this.header_vis == false) {
		$(TITLE_DIV + this.widget_unique_id).height(0);
		$(TITLE_DIV + this.widget_unique_id).css('visibility', 'hidden');
	} else {
		$(TITLE_DIV + this.widget_unique_id).css('visibility', 'visible');
	}
}

ScrollableBox.prototype.setScrollbarContainerProperties = function() {

	if (this.scrollbar_container_wid != null) $(SCROLLBAR_CONTAINER_DIV + this.widget_unique_id).width(this.scrollbar_container_wid);
	if (this.scrollbar_container_col != null) $(SCROLLBAR_CONTAINER_DIV + this.widget_unique_id).css('background-color', this.scrollbar_container_col);
	if (this.scrollbar_container_img != null) $(SCROLLBAR_CONTAINER_DIV + this.widget_unique_id).css('background-image', 'url('+this.scrollbar_container_img+')');
}

ScrollableBox.prototype.setContentAreaProperties = function() {

	if (this.content_container_col != null) $(CONTENT_CONTAINER_DIV + this.widget_unique_id).css('background-color', this.content_container_col);
	if (this.content_container_img != null) $(CONTENT_CONTAINER_DIV + this.widget_unique_id).css('background-image', 'url('+this.content_container_img+')');

	if (this.content_col != null) $(CONTENT_DIV + this.widget_unique_id).css('background-color', this.content_col);
	if (this.content_img != null) $(CONTENT_DIV + this.widget_unique_id).css('background-image', 'url('+this.content_img+')');

	$(CONTENT_CONTAINER_DIV + this.widget_unique_id).height($(CONTAINER_DIV + this.widget_unique_id).height() - $(TITLE_DIV + this.widget_unique_id).height() - $(FOOTER_DIV + this.widget_unique_id).height());
	$(CONTENT_DIV + this.widget_unique_id).width($(CONTAINER_DIV + this.widget_unique_id).width() - $(SCROLLBAR_CONTAINER_DIV + this.widget_unique_id).width());
}

ScrollableBox.prototype.setScrollbarProperties = function() {

	if (this.scrollbar_wid != null) $(SCROLLBAR_DIV + this.widget_unique_id).width(this.scrollbar_wid);

	$(SCROLLBAR_DIV + this.widget_unique_id).css('left', (($(SCROLLBAR_CONTAINER_DIV + this.widget_unique_id).width() - $(SCROLLBAR_DIV + this.widget_unique_id).width()) / 2));

	this.content_to_scrollbar_ratio = this.getScrollHeight(CONTENT_DIV + this.widget_unique_id, true) / $(CONTENT_CONTAINER_DIV + this.widget_unique_id).height();
	$(SCROLLBAR_DIV + this.widget_unique_id).height($(SCROLLBAR_CONTAINER_DIV + this.widget_unique_id).height() / this.content_to_scrollbar_ratio);

	if (this.scrollbar_col != null) $(SCROLLBAR_DIV + this.widget_unique_id).css('background-color', this.scrollbar_col);
}

ScrollableBox.prototype.setScrollbarContainerVisibility = function() {

	hide = false;
	if (this.scrollbar_vis == false) hide = true;

	if (hide == true || $(SCROLLBAR_DIV + this.widget_unique_id).height() >= $(SCROLLBAR_CONTAINER_DIV + this.widget_unique_id).height()) {
		$(SCROLLBAR_CONTAINER_DIV + this.widget_unique_id).width(0);
		$(SCROLLBAR_CONTAINER_DIV + this.widget_unique_id).css('visibility', 'hidden');
		$(CONTENT_DIV + this.widget_unique_id).width($(CONTAINER_DIV + this.widget_unique_id).width());
	}

	if ($(SCROLLBAR_DIV + this.widget_unique_id).height() >= $(SCROLLBAR_CONTAINER_DIV + this.widget_unique_id).height()) {
		this.is_scrollable = false;
	}
}

ScrollableBox.prototype.setFooterProperties = function() {

	if (this.footer_hyt != null) $(FOOTER_DIV + this.widget_unique_id).height(this.footer_hyt);
	if (this.footer_col != null) $(FOOTER_DIV + this.widget_unique_id).css('background-color', this.footer_col);
	if (this.footer_vis == false) {
		$(FOOTER_DIV + this.widget_unique_id).height(0);
		$(FOOTER_DIV + this.widget_unique_id).css('visibility', 'hidden');
	} else {
		$(FOOTER_DIV + this.widget_unique_id).css('visibility', 'visible');
	}
}

ScrollableBox.prototype.setScrollableIndicator = function() {

	if (this.scrollable_indicator_font_col != null) $(SCROLLABLE_INDICATOR + this.widget_unique_id).css('color', this.scrollable_indicator_font_col);
	if (this.scrollable_indicator_col != null) $(SCROLLABLE_INDICATOR + this.widget_unique_id).css('background-color', this.scrollable_indicator_col);
	if (this.scrollable_indicator_wid != null) {
		if (this.scrollable_indicator_wid > $(CONTENT_DIV + this.widget_unique_id).width()) $(SCROLLABLE_INDICATOR + this.widget_unique_id).width($(CONTENT_DIV + this.widget_unique_id).width());
		else $(SCROLLABLE_INDICATOR + this.widget_unique_id).width(this.scrollable_indicator_wid);
	}
	if (this.scrollable_indicator_hyt != null) {
		if (this.scrollable_indicator_hyt > $(CONTENT_DIV + this.widget_unique_id).height()) $(SCROLLABLE_INDICATOR + this.widget_unique_id).height($(CONTENT_DIV + this.widget_unique_id).height());
		else $(SCROLLABLE_INDICATOR + this.widget_unique_id).height(this.scrollable_indicator_hyt);
	}

	if (this.scrollable_indicator_vis == true) $(SCROLLABLE_INDICATOR + this.widget_unique_id).css('visibility', 'visible');
	if (this.scrollable_indicator_vis == false) $(SCROLLABLE_INDICATOR + this.widget_unique_id).css('visibility', 'hidden');

	$(SCROLLABLE_INDICATOR + this.widget_unique_id).css('line-height', 'normal');
	scroll_height = this.getScrollHeight(SCROLLABLE_INDICATOR + this.widget_unique_id, false);
	if (this.scrollable_indicator_pos != null) {

		$(SCROLLABLE_INDICATOR + this.widget_unique_id).css('margin-left', ($(CONTENT_DIV + this.widget_unique_id).width() / 2) - ($(SCROLLABLE_INDICATOR + this.widget_unique_id).width() / 2));
		if (this.scrollable_indicator_pos == SCROLLABLE_INDICATOR_TOP) {
			$(SCROLLABLE_INDICATOR + this.widget_unique_id).css('margin-top', (scroll_height > $(SCROLLABLE_INDICATOR + this.widget_unique_id).height()) ? ((scroll_height - $(SCROLLABLE_INDICATOR + this.widget_unique_id).height()) / 2) : 0);
		} else if (this.scrollable_indicator_pos == SCROLLABLE_INDICATOR_BOTTOM) {
			margin_top = $(CONTENT_CONTAINER_DIV + this.widget_unique_id).height();
			$(SCROLLABLE_INDICATOR + this.widget_unique_id).css('margin-top', (scroll_height > $(SCROLLABLE_INDICATOR + this.widget_unique_id).height()) ? margin_top - (scroll_height + $(SCROLLABLE_INDICATOR + this.widget_unique_id).height()) / 2 : margin_top - $(SCROLLABLE_INDICATOR + this.widget_unique_id).height());
		} else if (this.scrollable_indicator_pos == SCROLLABLE_INDICATOR_LEFT) {
			$(SCROLLABLE_INDICATOR + this.widget_unique_id).css('margin-top', ($(CONTENT_CONTAINER_DIV + this.widget_unique_id).height() / 2) - ($(SCROLLABLE_INDICATOR + this.widget_unique_id).height() / 2));
			$(SCROLLABLE_INDICATOR + this.widget_unique_id).css('margin-left', 0);
		} else if (this.scrollable_indicator_pos == SCROLLABLE_INDICATOR_RIGHT) {
			$(SCROLLABLE_INDICATOR + this.widget_unique_id).css('margin-top', ($(CONTENT_CONTAINER_DIV + this.widget_unique_id).height() / 2) - ($(SCROLLABLE_INDICATOR + this.widget_unique_id).height() / 2));
			$(SCROLLABLE_INDICATOR + this.widget_unique_id).css('margin-left', 'auto');
			$(SCROLLABLE_INDICATOR + this.widget_unique_id).css('margin-right', $(CONTENT_CONTAINER_DIV + this.widget_unique_id).width() - $(CONTENT_DIV + this.widget_unique_id).width());
		} else if (this.scrollable_indicator_pos == SCROLLABLE_INDICATOR_CENTER) {
			$(SCROLLABLE_INDICATOR + this.widget_unique_id).css('margin-top', ($(CONTENT_CONTAINER_DIV + this.widget_unique_id).height() / 2) - ($(SCROLLABLE_INDICATOR + this.widget_unique_id).height() / 2));
		}
	}
	$(SCROLLABLE_INDICATOR + this.widget_unique_id).css('line-height', $(SCROLLABLE_INDICATOR + this.widget_unique_id).height() + 'px');
	$(SCROLLABLE_INDICATOR + this.widget_unique_id).hide();
}

ScrollableBox.prototype.getScrollHeight = function(element, hide_overflow) {

	/*Note: this technique is purely for supporting Firefox
	 * otherwise other browsers work with just $(element)[0].scrollHeight
	 * It sets overflow of the element to scroll, gets the scrollHeight and hides the element's scrollbars
	 */

	$(element).css('overflow', 'scroll');
	element_total_height = $(element)[0].scrollHeight; //gives the total height of the content div including overflowed height

	if (hide_overflow) $(element).css('overflow', 'hidden');
	else $(element).css('overflow', 'visible');
	return element_total_height;
}

function creator(scrollable_box) {

	if (scrollable_box.scrollable_indicator_vis) {
		$(CONTENT_DIV + scrollable_box.widget_unique_id).mouseenter(function() {
			if (scrollable_box.is_scrollable && !scrollable_box.is_indicator_visible) {
				scrollable_box.is_indicator_visible = true;
				$(SCROLLABLE_INDICATOR + scrollable_box.widget_unique_id).fadeIn("slow").delay(3000).fadeOut("slow");
			}
		});
	}

	$(SCROLLBAR_DIV + scrollable_box.widget_unique_id).mousedown(function(event) {

		scrollable_box.last_mouse_y_pos = 0;
		if (scrollable_box.is_scrollable) {

			$(this).bind('mousemove', onMouseMoved);
			$(document).bind('mousemove', onMouseMoved);
			$(document).bind('selectstart dragstart', preventDefault);
			$('body').addClass('unselectable');
		}
	});

	$(document).mouseup(function(event) {

		$(SCROLLBAR_DIV + scrollable_box.widget_unique_id).unbind('mousemove', onMouseMoved);
		$(document).unbind('mousemove', onMouseMoved);
		$(document).unbind('selectstart dragstart', preventDefault);
		$('body').removeClass('unselectable');
		scrollable_box.last_mouse_y_pos = 0;
	});

	//attach event when mouse scrolls
	if (scrollable_box.is_scrollable) attachMouseScrollEvent(CONTENT_CONTAINER_DIV + scrollable_box.widget_unique_id);

	function onMouseMoved(event) {

		top_pos = $(SCROLLBAR_DIV + scrollable_box.widget_unique_id).position().top;

		//$(TITLE_DIV + widget_unique_id).html("top_pos: " + top_pos + " || min_scroll: " + min_scroll + " || max_scroll: " + max_scroll);

		if ((top_pos + 1) >= scrollable_box.min_scroll && (top_pos - 1) <= scrollable_box.max_scroll) { // +-1 makes sure it doesn't get stuck at min-scroll and max-scroll

			new_mouse_y_pos = event.clientY;
			if (scrollable_box.last_mouse_y_pos == 0) scrollable_box.last_mouse_y_pos = new_mouse_y_pos;

			movement_diff = (new_mouse_y_pos - scrollable_box.last_mouse_y_pos);

			new_bar_top_pos = top_pos + movement_diff;
			if (new_bar_top_pos > scrollable_box.max_scroll) new_bar_top_pos = scrollable_box.max_scroll;
			if (new_bar_top_pos < scrollable_box.min_scroll) new_bar_top_pos = scrollable_box.min_scroll;

			$(SCROLLBAR_DIV + scrollable_box.widget_unique_id).css('top', new_bar_top_pos);

			$(CONTENT_DIV + scrollable_box.widget_unique_id).css('top', -(scrollable_box.content_to_scrollbar_ratio * new_bar_top_pos));
			scrollable_box.last_mouse_y_pos = new_mouse_y_pos; //sets the last mouse position to the current mouse position
		}
	}

	function onMouseScrolled(event) {

		var evt = window.event || event;
		var delta = evt.detail ? evt.detail*(-120) : evt.wheelDelta; //delta returns +120 when wheel is scrolled up, -120 when scrolled down

		top_pos = $(SCROLLBAR_DIV + scrollable_box.widget_unique_id).position().top;
		//$(TITLE_DIV).html("top_pos: " + top_pos + " || min_scroll: " + min_scroll + " || max_scroll: " + max_scroll);

		if ((top_pos + 1) >= scrollable_box.min_scroll && (top_pos - 1) <= scrollable_box.max_scroll) { // +-1 makes sure it doesn't get stuck at min-scroll and max-scroll

			new_bar_top_pos = (delta < 0) ? (top_pos + scrollable_box.default_scroll_speed) : (top_pos - scrollable_box.default_scroll_speed);
			if (new_bar_top_pos > scrollable_box.max_scroll) new_bar_top_pos = scrollable_box.max_scroll;
			if (new_bar_top_pos < scrollable_box.min_scroll) new_bar_top_pos = scrollable_box.min_scroll;

			$(SCROLLBAR_DIV + scrollable_box.widget_unique_id).css('top', new_bar_top_pos);

			$(CONTENT_DIV + scrollable_box.widget_unique_id).css('top', -(scrollable_box.content_to_scrollbar_ratio * new_bar_top_pos));
			scrollable_box.last_mouse_y_pos = new_mouse_y_pos; //sets the last mouse position to the current mouse position
		}

		return false;
	}

	function attachMouseScrollEvent(element) {

		var elem = $(element)[0];
		if (elem.addEventListener) { // All browsers except IE before version 9
			elem.addEventListener ("mousewheel", onMouseScrolled, false);// Internet Explorer, Opera, Google Chrome and Safari
			elem.addEventListener ("DOMMouseScroll", onMouseScrolled, false);// Firefox
			elem.addEventListener ("mousewheel", preventDefault);
			elem.addEventListener ("DOMMouseScroll", preventDefault);
		} else {
			if (elem.attachEvent) { // IE before version 9
				elem.attachEvent ("onmousewheel", onMouseScrolled);
				elem.attachEvent ("onmousewheel", preventDefault);
			}
		}
	}

	function preventDefault(event) {

		event.preventDefault(); 
		return false;
	}
};

//============================================================================
//============================= [ SETTERS ]
//setters for widget
ScrollableBox.prototype.setHeight = function(height) {
	this.widget_hyt = height;
}
ScrollableBox.prototype.setWidth = function(width) {
	this.widget_wid = width;
}
ScrollableBox.prototype.setColor = function(color) {
	this.widget_col = color;
}

//setters for scrollbar container
ScrollableBox.prototype.setScrollbarContainerWidth = function(width) {
	this.scrollbar_container_wid = width;
}
ScrollableBox.prototype.setScrollbarContainerColor = function(color) {
	this.scrollbar_container_col = color;
}
ScrollableBox.prototype.setScrollbarContainerImage = function(image) {
	this.scrollbar_container_img = image;
}

//setters for scrollbar
ScrollableBox.prototype.setScrollbarWidth = function(width) {
	this.scrollbar_wid = width;
}
ScrollableBox.prototype.setScrollbarColor = function(color) {
	this.scrollbar_col = color;
}
ScrollableBox.prototype.setScrollbarVisibility = function(visibility) {
	this.scrollbar_vis = visibility;
}

//setters for header
ScrollableBox.prototype.setHeaderHeight = function(height) {
	this.header_hyt = height;
}
ScrollableBox.prototype.setHeaderColor = function(color) {
	this.header_col = color;
}
ScrollableBox.prototype.setHeaderVisibility = function(visibility) {
	this.header_vis = visibility;
}

//setters for footer
ScrollableBox.prototype.setFooterHeight = function(height) {
	this.footer_hyt = height;
}
ScrollableBox.prototype.setFooterColor = function(color) {
	this.footer_col = color;
}
ScrollableBox.prototype.setFooterVisibility = function(visibility) {
	this.footer_vis = visibility;
}

//setters for content container
ScrollableBox.prototype.setContentContainerColor = function(color) {
	this.content_container_col = color;
}
ScrollableBox.prototype.setContentContainerImage = function(image) {
	this.content_container_img = image;
}

//setters for content
ScrollableBox.prototype.setContentColor = function(color) {
	this.content_col = color;
}
ScrollableBox.prototype.setContentImage = function(image) {
	this.content_img = image;
}

//setters for scrollable indicator
ScrollableBox.prototype.setScrollableIndicatorFontColor = function(color) {
	this.scrollable_indicator_font_col = color;
}
ScrollableBox.prototype.setScrollableIndicatorBackColor = function(color) {
	this.scrollable_indicator_col = color;
}
ScrollableBox.prototype.setScrollableIndicatorWidth = function(width) {
	this.scrollable_indicator_wid = width;
}
ScrollableBox.prototype.setScrollableIndicatorHeight = function(height) {
	this.scrollable_indicator_hyt = height;
}
ScrollableBox.prototype.setScrollableIndicatorVisiblity = function(visibility) {
	this.scrollable_indicator_vis = visibility;
}
ScrollableBox.prototype.setScrollableIndicatorPosition = function(position) {
	this.scrollable_indicator_pos = position;
}