=== Artiss AdSense Insert ===
Contributors: dartiss
Donate link: http://artiss.co.uk/donate
Tags: adsense, ad, advert, advertisement, google, insert, display, artiss, show, banner
Requires at least: 2.0
Tested up to: 3.3.1
Stable tag: 1.3.1

Artiss AdSense Insert provides a basic method of displaying AdSense adverts on your blog.

== Description ==

Artiss AdSense Insert provides a basic way of inserting AdSense adverts into your WordPress installation, whilst having full control of display and content.

**Adding the Code**

If you've not done so already, create your AdSense advert via the Google Adsense website. The code you are provided by Google contains the parameters that are required by Artiss AdSense Insert.

The 4 pieces of information you require are the values in `google_ad_client`, `google_ad_slot`, `google_ad_width` and `google_ad_height`.

To display your AdSense advert you will need to insert the following code, where appropriate, into your theme...

`<?php artiss_adsense_insert( 'client=pub-0743991857092062&slot=5302103070&width=468&height=60' ); ?>`

In the above example, I've used my credentials, but you will need to use the details that I suggested you note before, as supplied by AdSense.

The `client=` is your publisher ID (i.e. `google_ad_client`), `slot=` is `google_ad_slot`, `width=` is the width of the advert (i.e. `google_ad_width`) and `height=` is the height of the advert (i.e. `google_ad_height`).

Alternatively, if you wish to ensure that your code still works correctly, even if Simple AdSense Insert is switched off, you can use the following format of code...

`<?php if ( function_exists( 'artiss_adsense_insert' ) ) artiss_adsense_insert( 'client=pub-0743991857092062&slot=5302103070&width=468&height=60 '); ?>`

**For help with this plugin, or simply to comment or get in touch, please read the appropriate section in "Other Notes" for details. This plugin, and all support, is supplied for free, but [donations](http://artiss.co.uk/donate "Donate") are always welcome.**

== Licence ==

This WordPress plugin is licensed under the [GPLv2 (or later)](http://wordpress.org/about/gpl/ "GNU General Public License").

The banner image is courtesy of [kexino.com](http://kexino.com/blog "kexino.com").

== Support ==

All of my plugins are supported via [my website](http://www.artiss.co.uk "Artiss.co.uk").

Please feel free to visit the site for plugin updates and development news - either visit the site regularly or [follow me on Twitter](http://www.twitter.com/artiss_tech "Artiss.co.uk on Twitter") (@artiss_tech).

For problems, suggestions or enhancements for this plugin, there is [a dedicated page](http://www.artiss.co.uk/adsense-insert "Artiss AdSense Insert") and [a forum](http://www.artiss.co.uk/forum "WordPress Plugins Forum"). The dedicated page will also list any known issues and planned enhancements.

**This plugin, and all support, is supplied for free, but [donations](http://artiss.co.uk/donate "Donate") are always welcome.**

== Installation ==

1. Upload the entire `simple-adsense-insert` folder to your wp-content/plugins/ directory.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. That's it, you're done - configuration is done in your code!

== Frequently Asked Questions ==

= My AdSense code doesn't have a slot number =

Ah, yes. Google changed the format of their AdSense code - if you're looking at some existing AdSense code and it doesn't look the same as my examples, then head back to the AdSense website and get it to create the code again.

= Which version of PHP does this plugin work with? =

It has been tested and been found valid from PHP 4 upwards.

Please note, however, that the minimum for WordPress is now PHP 5.2.4. Even though this plugin supports a lower version, I am not coding specifically to achieve this - therefore this minimum may change in the future.

== Changelog ==

= 1.3.1 =
* Maintenance: Removed dashboard widget

= 1.3 =
* Maintenance: Renamed plugin to Artiss Adsense Insert
* Enhancement: Improved code - brought shared functions up-to-date
* Enhancement: Created new function with new plugin name - this is not backwards compatible with previous versions. Previous function exists for this purpose.
* Enhancement: Plugin information output along with code to assist in future support

= 1.2 =
* Maintenance: Google script checked
* Maintenance: Code optimised
* Enhancement: Parameters now sent via single string to plugin

= 1.1 =
* Enhancement: Minor code modifications to improve size and performance

= 1.0 =
* Initial release

== Upgrade Notice ==

= 1.3.1 =
* Upgrade to remove the dashboard widget

= 1.3 =
* Upgrade to bring plugin up-to-date