<?php
/*
Plugin Name: IE 6 Countdown
Plugin URI: http://museumthemes.com/plugins/IE-6-countdown/
Description: A way to integrate Microsoft's official IE 6 Countdown banner onto your site.
Version: 1.0.4
Author: Arcane Palette Creative Design
Author URI: http://www.arcanepalette.com
License: GPL3
*/

/* First thing's first.  If you're looking at this file to get a clue of how to install this plugin onto your site (and you didn't read the README file...), do this:

		// put this in your header, or wherever
		<?php do_action('apie6countdown'); ?>

   Got it?  Easy enough, right?  I recommend putting this in your header.php right under your banner/navbar and/or right above your content.  The banner from Microsoft is 820px wide, so the theory is that throwing it into your header shouldn't break anything since that's most likely to be the widest part of your theme.  However, your mileage may vary. */

/*
    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.


    http://www.opensource.org/licenses/gpl-3.0.html
*/

/* this is going to be stupidly simple.  ready? */
/* first, let's define the function.  like so: */
function apie6countdown() {
	/* this is the embed code directly from Microsoft's IE6 Countdown page here: http://ie6countdown.com/join-us.html */
	echo '<!--[if lt IE 7]><div style="width: 100%; text-align: center; clear: both; height: 59px; position: relative;"> <a href="http://www.microsoft.com/windows/internet-explorer/default.aspx?ocid=ie6_countdown_bannercode"><img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="" /></a></div><![endif]-->';
}
add_action ( 'apie6countdown', 'apie6countdown' ) /* creates an action that can be thrown wherever you want to put it in your theme. */
?>