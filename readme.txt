=== Jigoshop Magnify ===
Contributors: chriscct7
Requires at least: 3.4.2
Tested up to: 3.6 Beta 3
Contributors: chriscct7
Donate link: http://donate.chriscct7.com/
Tags: jigoshop, magnify, jigoshop magnify, zoom, jigoshop zoom
Requires at least: 3.4.2
Tested up to: 3.6 Beta 3
Stable tag: 4.1
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html


== Description ==

It gives the ability to users to zoom in on your main product image by simply hovering the mouse over it.

This was previously a premium extension, made free per [this blog post of mine](http://chriscct7.me/on-retiring-jigoshop-extensions/).

== Installation ==

1. Unzip the archive on your computer  
2. Upload `jigoshop-magnify` directory to the `/wp-content/plugins/` directory
3. Activate the plugin through the 'Plugins' menu in WordPress

== Screenshots ==

See it in action here:
https://docs.google.com/file/d/0B5gnRVM4YOkob2RhMzJZcFZNMkE/


== Support And Contributing ==

All support for chriscct7 plugins are done via the forum on wordpress.org. 

If you'd like to help, feel free to contribute at the [GitHub Repo](https://github.com/chriscct7/Jigoshop-List-View) for this plugin.

== Frequently Asked Questions ==

1. What Settings Can Users Change?

The user can change the following:

zoomWidth - The width of the zoom window in pixels
zoomHeight - The height of the zoom window in pixels
position - Specifies the position of the zoom window relatie to the small image. Allowable values are 'left', 'right', 'top', 'bottom', or 'inside', or the user can specify the id of an html element to place the zoom window (e.g. position: 'element1')
adjustX - Allows the user to fine tune the x-position of the zoom window in pixels
adjustY - Allows the user to fine tune the y-position of the zoom window in pixels
tint - Specifies a tint color which will cover the small image. Colors should be specified in hex format (e.g. '#aa00aa'). Does not work with softFocus
tintOpacity - Opacity of the tint, where 0 is fully transparent and 1
lensOpacity - Opacity of te lens mouse pointer, where 0 is fully transparent and 1 is fully opaque. In tint and soft-focus modes, it will always be transparent
softFocus - Applies a subtle blur effect to the small image. Set to 'true' or 'false'. Does not work with tint.
smoothMove - Amount of smoothness/drift of the image as it moves. The higher the number, the smoother/more drifty the movement will be. 1 = no smoothing
showTitle - Shows the title tage of the image. 'True' or 'false'.
titleOpacity - Specifies the opacity of the title if displayed, where 0 is fully transparent and 1 is fully opaque

The default values are as follows:

zoomWidth - auto
zoomHeight - auto
position - Right
adjustX - 0
adjustY - o
tint - false
tintOpacity - 0.5
lensOpacity - 0.5
softFocus - False
smoothMove - 3
showTitle - False
titleOpactiy - 0.5


== Changelog ==
= 4.1 =
* Bugfix

= 4.0 = 
* Released on wordpress.org

= 3.0 branch =
* Updates to autoupdater

= 2.0 branch =
* Updates to autoupdater

= 1.0.0 =
* Initial Release

== Upgrade Notice ==
= 4.1 =
* Bugfix - Important Update

= 4.0 = 
* Released on wordpress.org

= 3.0 branch =
* Updates to autoupdater

= 2.0 branch =
* Updates to autoupdater

= 1.0.0 =
* Initial Release