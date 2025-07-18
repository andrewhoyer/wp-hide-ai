=== Hide AI ===
Contributors: andrewhoyer
Tags: ai, posts, pages, media
Requires at least: 5.2
Tested up to: 6.8
Stable tag: 0.1
Requires PHP: 7.0
Author URI: https://andrewhoyer.com/hide-ai/
License: GPLv3 or later
License URI: https://www.gnu.org/licenses/gpl-3.0.html

A WordPress plugin that hides AI buttons and links in the admin area.

== Description ==

This plugin is for WordPress users who want a clutter-free interface, without AI buttons and options taking up space.

The point is not to discourage the use of AI in general. In fact, AI was used in research and development, and creation of assets for this plugin. However, theme and plugin developers are injecting buttons and links into core interfaces of the WordPress admin area, as well as in the Gutenburg editor, and it is these areas that this plugin is meant to clean up.

== Details ==

The areas in which AI buttons and links are hidden are limited to core interfaces such as the Media Gallery, Gutenburg, Posts, Pages, and other settings or configuration pages. The intent is not to alter interfaces specific to plugins that offer these AI options, but there is no guarantee as, for example, the elements on those pages may make use of the same CSS classes.

== How to use ==

Simply install and activate the plugin. That's it! There are no settings or options. The plugin takes action only in the admin area, and will automatically hide content from known sources.

== Plugins and Themes ==

The plugin hides AI options generated by the following:

* Elementor
* PostX
* Rank Math SEO

If you use a plugin or theme that is adding AI buttons to the interface, please submit an issue on GitHub to have it included in a later version:

<a href="https://github.com/andrewhoyer/wp-hide-ai/issues">https://github.com/andrewhoyer/wp-hide-ai/issues</a>

== Developers ==

If you're interested in furthering the development of the Hide AI plugin, please find the project on GitHub:

<a href="https://github.com/andrewhoyer/wp-hide-ai/">https://github.com/andrewhoyer/wp-hide-ai/</a>

== Frequently Asked Questions ==

= How can I help? =

There are a few ways you can help make Hide AI better and support more development:

* Install it on WordPress sites you manage or are developing
* Tell your friends, write a blog post, mention it on social media, etc
* Follow the project on GitHub
* Add an issue to the GitHub repo with additional AI options that can be hidden

= Why am I still seeing certain AI buttons or links even after installing the plugin?

Care is taken to hide only specific interface elements, and so they must be included on a case-by-case basis. If you know which plugin or theme is adding the AI buttons to your interface, please submit an issue on the GitHub repo:

<a href="https://github.com/andrewhoyer/wp-hide-ai/issues">https://github.com/andrewhoyer/wp-hide-ai/issues</a>

Also, if the AI option you are seeing is part of that plugin's interface, it probably falls outside the scope of what Hide AI is trying to do. The objective is to clean up the core areas of the admin interface (media, posts, pages, etc).

== Changelog ==

= 0.1 - Jul 14, 2025 =

* First release

== Screenshots ==

1. Before installing Hide AI

2. After installing Hide AI, with AI-related options hidden

== License ==

    Copyright (C) 2025 Andrew Hoyer

	This program is free software: you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation, either version 3 of the License, or
	(at your option) any later version.

	This program is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.

	You should have received a copy of the GNU General Public License
	along with this program.  If not, see <https://www.gnu.org/licenses/>.

== Upgrade Notice ==
