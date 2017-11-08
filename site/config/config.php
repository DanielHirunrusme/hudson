<?php

/*

---------------------------------------
License Setup
---------------------------------------

Please add your license key, which you've received
via email after purchasing Kirby on http://getkirby.com/buy

It is not permitted to run a public website without a
valid license key. Please read the End User License Agreement
for more information: http://getkirby.com/license

*/

c::set('license', 'put your license key here');
c::set('debug', true);
c::set('panel.stylesheet', 'assets/css/panel.css');

c::set('plg_masonry.enable', true);         // enable additional scripts
//c::set('plg_masonry.lightbox', 'swipebox'); // swipebox, fancybox
c::set('plg_masonry.width', 600);           // set a width for masonry images
c::set('plg_masonry.quality', 90);
c::set('plg_masonry.class');                // html class to be set
c::set('plg_masonry.sizelimit', 1300);      // limit the source image size (long edge)
c::set('plg_masonry.sort', 'title');        // sortBy parameter: sort, title, etc.
c::set('plg_masonry.dir', 'desc');          // sortBy direction: asc, desc

/*

---------------------------------------
Kirby Configuration
---------------------------------------

By default you don't have to configure anything to
make Kirby work. For more fine-grained configuration
of the system, please check out http://getkirby.com/docs/advanced/options

*/