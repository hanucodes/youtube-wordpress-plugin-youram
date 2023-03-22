=== YouTube Embed - YouTube Gallery, Vimeo Gallery - Wordpress Plugin ===
Contributors: hanucodes, freemius
Tags: youtube embed, youtube gallery, vimeo gallery, youtube playlist, youtube channel, youtube feed, youtube grid, youtube plugin, youtube wordpress plugin
Donate link: https://dailydhyaan.com/
Requires at least: 5.0
Tested up to: 6.1.1
Requires PHP: 7.2
Stable tag: 10.3
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

YouRam YouTube Plugin: Displays a Single Embed/Gallery of Videos automatically using the YouTube/Vimeo Playlist/Channel links - try now!

== Description ==
[Live Edit Demo](https://dailydhyaan.com/youtube-wordpress-plugin/demo.html)

[WP Admin Demo](https://tastewp.com/plugins/youram-youtube-embed)

YouTube WordPress Plugin, YouTube Embed, YouTube Gallery, Vimeo Gallery, Video Grid!

Displays a Gallery of Videos automatically using the YouTube/Vimeo Playlist links.

Top Features of YouRam:

1.	**Video Source**
a.	`YouTube`
b.	`Vimeo`
2.	**Tabs for every video source**
a.	`YouTube Channel Uploads`
b.	`YouTube Playlist Videos`
c.	`Vimeo User Videos`
3.	**Video Thumbnail Types**
a.	`only image`
b.	`title`
b.	`title + description`
c.	`title + description + views + date`
d.	`title + views + date`
e.	`any combination of above`
4.	**Youram Cache Files**
a.	`provides faster load speed.` 
b.	`avoids multiple API calls to YouTube/Vimeo.`
c.	`Async API calls for faster Building of Cache`
c.	`auto re-build cache: daily|triweekly|weekly|monthly|none`
d.	`manual re-build cache: button in WP Admin`
e.	`UI progress bar during build cache`
5.	**Load More Mechanism**
a.	`Previous - Next Buttons`
a.1 `with Page Numbers ||2/10||`
a.2 `with Remaining Video Counts ||Next(20)||`
b.	`Load More Button`
6.	**Responsive** upto 1-2-3-4-5 column layout Grid
7.	**Video Display**
a.	`Popups`
b.	`Inline Embed Top player`
c.	`Link to YouTube`
8.	**Video Player Options**
a.	`Auto Play`
b.	`Mute Play`
c.	`Display Title+Desc below Player`
8.	**Styling Options** for Colors, Fonts, Sizes etc.
a.	`for Thumbnails, Player`
b.	`for Title, Description`
c.	`for Tabs, Loading Buttons`
d.	`for Duration, Views, Date`
e.	`Custom CSS Option`
9.	**Hiding Options** - `tabs, load more, duration, borders, icons etc`.
10.	**Subscribe Buttons** - 
a.	`YouTube Channel`
11.	**WP Admin Live Edit Preview**
a.	`with Tv,Desktop,Laptop,Tablet,Mobile Views`
b.	`multiple instances of galleries`
c.	`12+ types of preset galleries provided`

Support is Provided - [Drop comment!](https://wordpress.org/support/plugin/youram-youtube-embed/)

[Generate YouTube API Key](https://blog.hubspot.com/website/how-to-get-youtube-api-key)

[Generate Un-Authenticated Vimeo Access Token](https://vimeo.zendesk.com/hc/en-us/articles/360042445032-How-do-I-generate-a-personal-access-token-)

== First Time Setup ==
1.	Install & Activate the Plugins
2.	Save Settings in YouRam Admin page
3.	Add [youram] shortcode on your Post/Page


== Features in Versions ==

= 10.3 =
* Release Date - 21 March 2023
* Fix: Skip current directories in linux while moving cache files
* Fix: Added version number with js and css minified files

= 10.2 =
* Release Date - 20 March 2023
* Update: Initial Cache Files added for activation
* Update: Initial Load speed increased!
* Update: Collapse sidebar in WP Admin preview

= 10.1 =
* Release Date - 20 March 2023
* Option: Full width Tabs
* Build Cache in background when source links changed in WP Admin
* Update: WP Admin UI Upgraded
* Update: Auto Refresh Youram in WP Admin when options are changed
* Update: Single Playlist Mode added
* Update: Load Speed Increased - sourceIds moved to options


= 10.0 =
* Release Date - 15 March 2023
* Option: Padding around thumbnail Grid
* Option Gallery Padding Amount
* Preset: Added new Preset Instances
* Fix: Multiple YouRam Galleries on same page
* Fix: Added NonPriv Ajax for Cache
* Option: To Show More Button or not
* Update: List View Added

= 9.3 =
* Upped to 9.3

= 9.2 =
* Release Date - 8 March 2023
* Fix: Default Gallery Instance in Youram Block
* Fix: Minor CSS fixes

= 9.1 =
* Release Date - 8 March 2023
* Update: Guttenberg Block Added for YouTube Gallery (YouRam)
* Fix: Columns fixed for preset instances.
* Fix: Minor fixes on pagination UI
* Update: Added default preset for Clean UI

= 9.0 =
* Release Date - 6 March 2023
* Update: Single Video Embed Mode Added
* Option: to display/hide YouRam Padding 
* Option: Allow Fullscreen Video Play
* Option: Play video in Loop
* Update: Added Options Changed Notice
* Multiple Instances of YouRam can be saved!
* Shortcodes for every YouRam Instance.
* Update: Loading Image Added
* Update: Ask Question from WP Admin
* Update: Youram 9 Preset Instances!

= 8.4 =
* Release Date - 27 February 2023
* Update: Enabled Load More Count + Pagination
* Option: to not wait for all playlist sources to be loaded into cache
* Update: Manual Build Cache Speed up
* Fix: Removed minor JS Errors
* Fix: Youram Upload Folder permission update

= 8.3 =
* Release Date - 26 February 2023
* Update: Opt-in update to create Youram Account
* Fix: Removed some loggers - speed up.

= 8.2 =
* Release Date - 25 February 2023
* Fix: Auto Build Cache when TabCache is not found - initial setup
* Fix: PHP Error in Youram Option Generator removed extra attribute class
* Fix: PHP Warnings on Checkboxes fixed.

= 8.1 =
* Release Date - 24 February 2023
* Fix: Show loading screen on Tab Click
* Fix: Tab Clicks are also Asynchronous AJAX calls now
* Fix: Fixed Height Container added for load more mode 
* Fix: Live Tag on Live Streaming Videos
* Option: Text Align : left|center|right for Thumbnail Data
* Option: Border on Thumbnail Image
* Option: Video Player can show Title + Desc of Video (Inline + Popup)
* Option: Text Align : left|center|right for Player Data

= 8.0 =
* Release Date - 21 February 2023
* Integration with Freemius
* Premium Options disabled for Free Version
* Automatic Scroll To Inline Embed - Option **`(Premium)`**
* Pagination Option - to display page number Ex: 2/10 **`(Premium)`**
* Option to Hide/Show YT Subscribe Button
* Minor code upgrades and fixes

= 7.0 =
* Full Asynchronous YT/Vimeo API Calls for Build Cache
* Build Cache Stages - Create|Ready|Complete + Speed increased 
* Build Cache - UI Progress Bar Display
* Auto Re-Build Cache Option: daily|triweekly|weekly|monthly|none **`(Premium)`**
* Fixed Height Bug Fix for Prev-Next Buttons
* Auto Replace YTChannel/@Handle links with Uploads Playlist link in WP Admin - this saves YT API Quota
* WP Admin Preview Button forces re-build cache - if Save done with source link add/remove
* Premium Option Highlight in WP Admin
* Auto Play Video Fix - added https
* YouTube Subscribe Link Option


= 6.0 =
* Loading Mechanism Update
* Previous Next Buttons Support
* Video count in LoadMore & Prev-Next Button **`(Premium)`**
* Fixed Container Height option for Prev-Next Mode
* Rows Option for Prev-Next Mode
* Join Prev-Next Button Option
* Auto Play, Mute Play Options


= 5.0 =
* Live Edit Preview in WP Admin
* WP Admin Options moved to Tabs
* 5 Width Preview - Tv,Comp,Lapi,Tab,Mob
* Update in Styles - reduce size of Tabs+Load Bttn+Gutters
* Separate Options for Tabs/Loading/Thumbnails etc.
* Custom CSS 

= 4.0 =
* Vimeo User Video Support
* Statistics Icon views + date (+hiding)
* Duration icon (+hiding)
* Duration Background + Text Color
* Admin Options Categories
* Auto Build Cache First Time
* Auto Build Cache if tabs cache file not found
* Provided test Tokens for immediate setup
* Added Un-install php to remove options
* Un-install php deletes cache files


= 3.0 =
* Video Thumbnail Types - image/title/description/views/date
* Hide Views, Date options
* Description Styles - Color, Size, Weight
* Adjusted Styles, Line heights etc.
* Added new Roboto, Open Sans fonts
* Added Font Dropdown
* Style Groupings in Admin Menu


= 2.0 =
* Separate named cache files for every playlist(tab)
* Lazy Cache load - invoked on individual tab click (fast load speed)
* Separate Cache File for Tabs
* Support for Block Themes
* Support for all types of YouTube Channel Links
* Syncronized API Calls to YouTube to simplify caching
* Simplified Options Page to collect Youtube links
* Added Styling options - borders, shadows, fixed heights etc.
* Code re-write to minimize errors

= 1.0 =
* Initial release.
* Responsive Grid Layout
* Youram Cache
* Popup/Inline/Link Videos
* Theme based Styles
* Tabs for multiple Playlists
* Hiding options
* Load More Button

== Installation ==
1. Use the WordPress plugin installer to install the plugin. 
2. Or you can just extract the folder in our download package and upload it to your plugin directory.
3. In your WordPress Admin > Plugins menu, activate the YouRam plugin.
4. YouRam menu item will shows up in your admin panel. Save your settings. Play with Preview!
5. Simply add the youram shortcode in your page or post - [youram]


== Screenshots ==

1. Youram frontend with hidden Tabs - cute look
2. YouRam frontend with Tabs and Loading buttons
3. YouRam frontend with different style
4. YouRam popup view
5. YouRam Basic Options
6. YouRam Styling Options
7. YouRam Caching Options
8. YouRam Advanced Options
9. YouRam Hiding Options

== Changelog ==

= 10.3 =
* Release Date - 21 March 2023
* Fix: Skip current directories in linux while moving cache files
* Fix: Added version number with js and css minified files

= 10.2 =
* Release Date - 20 March 2023
* Update: Initial Cache Files added for activation
* Update: Initial Load speed increased!
* Update: Collapse sidebar in WP Admin preview

= 10.1 =
* Release Date - 20 March 2023
* Option: Full width Tabs
* Build Cache in background when source links changed in WP Admin
* Update: WP Admin UI Upgraded
* Update: Auto Refresh Youram in WP Admin when options are changed
* Update: Single Playlist Mode added
* Update: Load Speed Increased - sourceIds moved to options

= 10.0 =
* Release Date - 15 March 2023
* Option: Padding around thumbnail Grid
* Option Gallery Padding Amount
* Preset: Added new Preset Instances
* Fix: Multiple YouRam Galleries on same page
* Fix: Added NonPriv Ajax for Cache
* Option: To Show More Button or not
* Update: List View Added
* Build Cache in background when source links changed in WP Admin

= 9.2 =
* Release Date - 8 March 2023
* Fix: Default Gallery Instance in Youram Block
* Fix: Minor CSS fixes

= 9.1 =
* Release Date - 8 March 2023
* Update: Guttenberg Block Added for YouTube Gallery (YouRam)
* Fix: Columns fixed for preset instances.
* Fix: Minor fixes on pagination UI
* Update: Added default preset for Clean UI

= 9.0 =
* Release Date - 6 March 2023
* Update: Single Video Embed Mode Added
* Option: to display/hide YouRam Padding 
* Option: Allow Fullscreen Video Play
* Option: Play video in Loop
* Update: Added Options Changed Notice
* Multiple Instances of YouRam can be saved!
* Shortcodes for every YouRam Instance.
* Update: Loading Image Added
* Update: Ask Question from WP Admin
* Update: Youram 9 Preset Instances!

= 8.4 =
* Release Date - 27 February 2023
* Update: Enabled Load More Count + Pagination
* Option: to not wait for all playlist sources to be loaded into cache
* Update: Manual Build Cache Speed up
* Fix: Removed minor JS Errors
* Fix: Youram Upload Folder permission update

= 8.3 =
* Release Date - 26 February 2023
* Update: Opt-in update to create Youram Account
* Fix: Removed some loggers - speed up.

= 8.2 =
* Release Date - 25 February 2023
* Fix: Auto Build Cache when TabCache is not found - initial setup
* Fix: PHP Error in Youram Option Generator removed extra attribute class
* Fix: PHP Warnings on Checkboxes fixed.

= 8.1 =
* Release Date - 24 February 2023
* Fix: Show loading screen on Tab Click
* Fix: Tab Clicks are also Asynchronous AJAX calls now
* Fix: Fixed Height Container added for load more mode 
* Fix: Live Tag on Live Streaming Videos
* Option: Text Align : left|center|right for Thumbnail Data
* Option: Border on Thumbnail Image
* Option: Video Player can show Title + Desc of Video (Inline + Popup)
* Option: Text Align : left|center|right for Player Data

= 8.0 =
* Release Date - 21 February 2023
* Integration with Freemius
* Premium Options disabled for Free Version
* Automatic Scroll To Inline Embed - Option **`(Premium)`**
* Pagination Option - to display page number 2/10 **`(Premium)`**
* Option to Hide/Show YT Subscribe Button
* Minor code upgrades and fixes

= 7.0 =
* Release Date - 15 February 2023
* Full Asynchronous YT/Vimeo API Calls for Build Cache
* Build Cache Stages - Create|Ready|Complete + Speed increased 
* Build Cache - UI Progress Bar Display
* Auto Re-Build Cache Option: daily|triweekly|weekly|monthly|none
* Fixed Height Bug Fix for Prev-Next Buttons
* Auto Replace YTChannel/@Handle links with Uploads Playlist link in WP Admin - this saves YT API Quota
* WP Admin Preview Button forces re-build cache - if Save done with source link add/remove
* Premium Option Highlight in WP Admin
* Auto Play Video Fix - added https
* YouTube Subscribe Link Option

= 6.0 =
* Release Date - 5 February 2023
* Loading Mechanism Update
* Previous Next Buttons Support
* Video count in LoadMore Button Option
* Video count in Prev-Next Button Option
* Fixed Container Height option for Prev-Next Mode
* Rows Option for Prev-Next Mode
* Join Prev-Next Button Option
* Auto Play, Mute Play Options

= 5.0 =
* Release Date - 27 January 2023
* Live Edit Preview in WP Admin
* WP Admin Options moved to Tabs
* 5 Width Preview - Tv,Comp,Lapi,Tab,Mob
* Update in Styles - reduce size of Tabs+Load Bttn+Gutters
* Separate Options for Tabs/Loading/Thumbnails etc.
* Custom CSS 

= 4.0 =
* Release Date - 15 January 2023
* Vimeo User Video Support
* Statistics Icon views + date (+hiding)
* Duration icon (+hiding)
* Duration Background + Text Color
* Admin Options Categories
* Auto Build Cache First Time
* Auto Build Cache if tabs cache file not found
* Provided test Tokens for immediate setup
* Added Un-install php to remove options
* Un-install php deletes cache files

= 3.0 =
* Release Date - 6 January 2023
* Video Thumbnail Types - image/title/description/views/date
* Hide Views, Date options
* Description Styles - Color, Size, Weight
* Adjusted Styles, Line heights etc.
* Added new Roboto, Open Sans fonts
* Added Font Dropdown
* Style Groupings in Admin Menu

= 2.0 =
* Release Date - 21 December 2022
* Separate named cache files for every playlist(tab)
* Lazy Cache load - invoked on individual tab click (fast load speed)
* Separate Cache File for Tabs
* Support for Block Themes
* Support for all types of YouTube Channel Links
* Syncronized API Calls to YouTube to simplify caching
* Simplified Options Page to collect Youtube links
* Added Styling options - borders, shadows, fixed heights etc.
* Code re-write to minimize errors

= 1.0 =
* Release Date - 14 July 2020
* Initial release.
* Responsive Grid Layout
* Youram Cache
* Popup/Inline/Link Videos
* Theme based Styles
* Tabs for multiple Playlists
* Hiding options
* Load More Button