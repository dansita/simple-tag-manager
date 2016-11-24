=== Simple Tag Manager ===
Contributors: @dan.sed
Donate link: https://dansedmak.com/donate
Tags: Google, Tag, Manager, Install, Setup, Manage
Requires at least: 4.0
Tested up to: 4.6.1
Stable tag: 4.3
License: MIT License
License URI: https://raw.githubusercontent.com/dansita/simple-tag-manager/master/LICENSE

A simple plugin through which you can insert Google Tag Manager in the website.

== Description ==

Simple Tag Manager is a simple plugin created in order to easily install Google Tag Manager in WordPress.
Just copy and paste the Tag Manager Script and ... it's done!

In order to use Simple Tag Manager the theme must:

*   Use wp_head()
*   Use wp_footer()

Don't worry: if you're not sure if your theme is compatible, you can try it without any danger for your site.

== Installation ==

Installing this plugin is very simple:

1. Upload the plugin files to the `/wp-content/plugins/` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Settings->Simple Tag Manager screen to configure the plugin

== Frequently Asked Questions ==

= How can I get the Google Tag Manager Script? =

You have to open the Google Tag Manager dashboard (https://tagmanager.google.com) and create a new container.
The page will display a message with the to add in the head and in the body.


== Google Tag Manager Errors ==

Sometime there are some errors caused by Google Tag Manager (and not by this plugin).
These errors are mainly caused by certain rules of ModSecurity, causing the server to respond with a 403 (Forbidden) error.
If you're encountering this error, just contact your hosting provider and ask to white list the Google Tag Manager script.
