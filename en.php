<?php

$L['Real Time'] = 'Real Time';
$L['Real-Time Lightning Map'] = 'Real-Time Lightning Map';

$L['lm_live_delay'] = 'Delay';
$L['lm_live_strokes'] = 'Strokes';
$L['lm_live_realtime'] = 'Real-Time Lightning';

$L['lm_live_settings_info'] = 'Settings';

$L['lm_live_set_fullscreen'] = 'Fullscreen';
$L['lm_live_set_fullscreen_on'] = 'on';
$L['lm_live_set_fullscreen_off'] = 'off';
$L['lm_live_set_fullscreen_info'] = 'Shows the map in fullscreen mode (only if your browser supports it).';

$L['lm_live_set_map_style'] = 'Map Style';
$L['lm_live_set_map_style_normal'] = 'Google';
$L['lm_live_set_map_style_sat'] = 'Sat';
$L['lm_live_set_map_style_terrain'] = 'Terrain';
$L['lm_live_set_map_style_osm'] = 'OSM';
$L['lm_live_set_map_style_roads'] = 'Roads';

$L['lm_live_set_thunder'] = 'Thunder';
$L['lm_live_set_thunder_max'] = 'max';
$L['lm_live_set_thunder_off'] = 'off';
$L['lm_live_set_thunder_info'] = 'Shows the thunder sound front in realtime on higher zoom levels.';

$L['lm_live_set_clouds'] = 'Clouds';
$L['lm_live_set_clouds_on'] = 'on';
$L['lm_live_set_clouds_off'] = 'off';
$L['lm_live_set_clouds_info'] = 'Satellite image, will be updated every 15 minutes. Source: NOAA';

$L['lm_live_set_daynight'] = 'Day/Night';
$L['lm_live_set_daynight_on'] = 'on';
$L['lm_live_set_daynight_off'] = 'off';
$L['lm_live_set_daynight_info'] = 'Shows current day/night line.';

$L['lm_live_set_darkness'] = 'Map Brightness';
$L['lm_live_set_darkness_info'] = 'Darker map gives better contrast.';

$L['lm_live_set_radar'] = 'Rain Radar';
$L['lm_live_set_radar_on'] = 'on';
$L['lm_live_set_radar_off'] = 'off';
$L['lm_live_set_radar_info'] = 'Currently only available for the United States!';

$L['lm_live_set_strokes_show'] = 'Show Strokes';
$L['lm_live_set_strokes_show_all'] = 'last hour';
$L['lm_live_set_strokes_show_last'] = 'last minutes';
$L['lm_live_set_strokes_show_info'] = 'Decide whether you want to see only "current" strokes or also those occurred up to an hour ago.';

$L['lm_live_stations_level'] = 'Stations';
$L['lm_live_stations_level_off'] = 'Hide';
$L['lm_live_stations_level_max'] = 'Detailed';
$L['lm_live_stations_level_info'] = 'Shows stations on the map. Higher levels also show currently participarting stations (purple), offline ones and station names.';

$L['lm_live_stations_lines'] = 'Lines';
$L['lm_live_stations_lines_off'] = 'Hide';
$L['lm_live_stations_lines_max'] = 'Detailed';
$L['lm_live_stations_lines_info'] = 'Displays lines for each lightning stroke connected with participating stations. The color of the lines depends on the distance (close: green, medium: blue, far: red). Note that the angle spanned station is also important. Distances up to a few 100km and stations on every side of the t-storm give best results. ';

$L['lm_live_stations_coverage'] = 'Coverage';
$L['lm_live_stations_coverage_off'] = 'Off';
$L['lm_live_stations_coverage_on'] = 'On';
$L['lm_live_stations_coverage_info'] = 'A rought overview of our covered area. The more cirlces around stations overlap the higher the opacity of the colors. Blue is best, green still very good and red means low accuracy.';

$L['lm_live_snd_sounds'] = 'Sounds';
$L['lm_live_snd_on'] = 'on';
$L['lm_live_snd_off'] = 'off';

$L['lm_live_snd_volume'] = 'Volume';
$L['lm_live_snd_min'] = 'min';
$L['lm_live_snd_max'] = 'max';

$L['lm_live_set_pos_show'] = 'Show Position';
$L['lm_live_set_pos_show_on'] = 'On';
$L['lm_live_set_pos_show_off'] = 'Off';
$L['lm_live_pos_info'] = 'Shows your position on the map. No position data will be sent to us, it\'s just for displaying the marker on the map.';

$L['lm_live_set_pos_follow'] = 'Follow';
$L['lm_live_set_pos_follow_on'] = 'On';
$L['lm_live_set_pos_follow_off'] = 'Off';
$L['lm_live_follow_info'] = 'The map will follow your position.';

$L['lm_live_shortlink_descr'] = 'Shortlink';
$L['lm_live_shortlink_info'] = 'Use this URL to share the map with others.';


$L['lm_live_info'] = 'Strokes of the <strong>last 60 minutes</strong> are shown. The real-time data comes directly from the computing servers of [Blitzortung], which are fed by hundreds of stations on several continents. The delay is calculated from the time stamps of each strokes compared to the current time.';
$L['lm_live_info_legend_title'] = 'Legend';
$L['lm_live_info_legend1'] = 'New lightning strikes have a <span id="live_legend1_1">red circle</span> which gets smaller and disappears when it gets older than [sec] seconds.';
$L['lm_live_info_legend2'] = 'The color of filled circles represent the age of strikes up to [minutes] minutes. New strikes are <span id="live_legend2_1">yellow</span>. The older they get, the darker the color. <span id="live_legend2_2">Dark brown</span> is equal to almost [minutes] minutes. Those strikes will vanish soon.';
$L['lm_live_info_legend3'] = 'On higher zoom levels the thunder front of current strikes is shown as <span id="live_legend3_1">white transparent</span> growing circle (speed of sound). It gets more transparent while travelling and disappears after a while.';
$L['lm_live_snd_info'] = 'Enable "tick" sound on every lightning stroke in the current map view. This feature might not be available on every device/browser.';

$L['lm_live_stations_hint'] = 'IMPORTANT: These features may have negative impact on your system performance! Using a fast Browser like "Google Chrome" is recommended.';
$L['lm_live_blitzortung_more'] = 'See more real-time maps on Blitzortung.org';
$L['lm_live_usage'] = 'IMPORTANT: This map is intended for entertainment purposes only!';
$L['lm_live_terms'] = 'Terms / Contact';
$L['lm_live_hideads'] = 'Hide ads';

$L['meta_site_description'] = 'See lightning strikes in real time across the planet. Free access to maps of former thunderstorms. By Blitzortung.org and contributors.';
$L['meta_site_keywords'] = 'lightning,thunderstorm,realtime,blitzortung,live,worldwide,strike,maps,thunder,tracker,current,weather,radar,detector';

$L['Privacy Policy'] = 'Privacy Policy';
$L['Lightning data by'] = 'Lightning data by';
$L['and contributors'] = 'and contributors';
$L['Blitzortung.org is a free community project'] = 'Blitzortung.org is a free community project';


?>