ACF Shortcodes WordPress plugin
===============================
Adds support of shortcodes that can output data from ACF-fields.


Installation
------------
Download as zip. Extract folder into `wp-content/plugins`. Activate in WordPress admin.


Usage
-----
Render a field with the current post as context:

	[acfsc field="name-of-acf-field"]

Render a field with the provided post as context:

	[acfsc field="name-of-acf-field" post="15"]

By default shortcodes can be used in post and pages. To activate shortcodes in text widgets paste the following into your `functions.php` file:

	add_filter('widget_text', 'do_shortcode');


License
-------
This software is free and carries a MIT license.


Changelog
---------
v1.0.0 (2015-10-13)
* First release.