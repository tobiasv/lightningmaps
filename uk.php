<?php

$L['Real Time'] = 'Реальний час';
$L['Real-Time Lightning Map'] = 'Карта блискавок у реальному часі';

$L['lm_live_delay'] = 'Затримка';
$L['lm_live_strokes'] = 'Розряди';
$L['lm_live_realtime'] = 'Блискавки у реальному часі';

$L['lm_live_settings_info'] = 'Установки';

$L['lm_live_set_fullscreen'] = 'Повний екран';
$L['lm_live_set_fullscreen_on'] = 'увімк';
$L['lm_live_set_fullscreen_off'] = 'вимк';
$L['lm_live_set_fullscreen_info'] = 'Показує карту в повноекранному режимі (тільки якщо ваш браузер підтримує цю функцію).';

$L['lm_live_set_map_style'] = 'Стиль';
$L['lm_live_set_map_style_normal'] = 'Звичайний';
$L['lm_live_set_map_style_sat'] = 'Супутник';
$L['lm_live_set_map_style_terrain'] = 'Рельєф';
$L['lm_live_set_map_style_osm'] = 'OSM';
$L['lm_live_set_map_style_roads'] = 'Дороги';

$L['lm_live_set_thunder'] = 'Грім';
$L['lm_live_set_thunder_max'] = 'макс';
$L['lm_live_set_thunder_off'] = 'вимк';
$L['lm_live_set_thunder_info'] = 'Показує фронт звуку грому в реальному часі на більш високих рівнях масштабу.';

$L['lm_live_set_clouds'] = 'Хмари';
$L['lm_live_set_clouds_on'] = 'увімк';
$L['lm_live_set_clouds_off'] = 'вимк';
$L['lm_live_set_clouds_info'] = 'Хмари та опади з openweathermap.org (експериментально!).';

$L['lm_live_set_daynight'] = 'День/Ніч';
$L['lm_live_set_daynight_on'] = 'увімк';
$L['lm_live_set_daynight_off'] = 'вимк';
$L['lm_live_set_daynight_info'] = 'Показує лінію день/ніч.';

$L['lm_live_set_darkness'] = 'Яскравість карти';
$L['lm_live_set_darkness_info'] = 'Затіняє карту для покращення контрасту.';

$L['lm_live_set_radar'] = 'Радар';
$L['lm_live_set_radar_on'] = 'увімк';
$L['lm_live_set_radar_off'] = 'вимк';
$L['lm_live_set_radar_info'] = 'В даний час радар дощу доступний тільки для США!';

$L['lm_live_set_strokes_show'] = 'Показати розряди';
$L['lm_live_set_strokes_show_all'] = 'останню годину';
$L['lm_live_set_strokes_show_last'] = 'останню хвилину';
$L['lm_live_set_strokes_show_info'] = 'Оберіть, які розряди ви хочете побачити — "актуальні", або ті, що були близько години тому.';

$L['lm_live_stations_level'] = 'Станції';
$L['lm_live_stations_level_off'] = 'Приховати';
$L['lm_live_stations_level_max'] = 'Детально';
$L['lm_live_stations_level_info'] = 'Показує станції на карті. На більш високих рівнях також відображаються станції, активні (фіолетові), оффлайн та назви станцій.';

$L['lm_live_stations_lines'] = 'Лінії';
$L['lm_live_stations_lines_off'] = 'Приховати';
$L['lm_live_stations_lines_max'] = 'Детально';
$L['lm_live_stations_lines_info'] = 'Відображає лінії, що з\'єднують кожен удар блискавки з станцією, яка їх прийняла. Колір ліній означає відстань (близька: зелений, середня: синій, дальня: червоний). Зверніть увагу, що кут між станціями, що прийняли блискавку, теж важливий. Найкращий результат дає відстань до кількох сотень кілометрів та станції на різних сторонах грозового фронту. ';

$L['lm_live_stations_coverage'] = 'Покриття';
$L['lm_live_stations_coverage_off'] = 'вимк';
$L['lm_live_stations_coverage_on'] = 'увімк';
$L['lm_live_stations_coverage_info'] = 'Огляд нашої зони покриття. Чим більше кіл навколо станцій перекриваються тим більш насичений колір. Синій — найкраща точність, зелений — хороша, а червоний означає низьку.';

$L['lm_live_snd_sounds'] = 'Звуки';
$L['lm_live_snd_on'] = 'увімк';
$L['lm_live_snd_off'] = 'вимк';

$L['lm_live_snd_volume'] = 'Гучність';
$L['lm_live_snd_min'] = 'мін';
$L['lm_live_snd_max'] = 'макс';


$L['lm_live_pos_info'] = 'Показує вашу позицію на карті. Дані про місцезнаходження не надсилаються нам, це просто для відображення маркерів на карті.';

$L['lm_live_info'] = 'Показ розрядів за <strong>останні 60 хвилин</strong>. Дані в реальному часі надходять безпосередньо від обчислювальних серверів [Blitzortung], які генерують сотні станцій на декількох континентах. Затримка розраховується виходячи з часових міток в кожному розряді в порівнянні з поточним часом.';
$L['lm_live_info_legend_title'] = 'Легенда';
$L['lm_live_info_legend1'] = 'Нові розряди блискавки в <span id="live_legend1_1">червоному колі</span> яких стає все менше і які зникають, коли вони стають старше [sec] секунд.';
$L['lm_live_info_legend2'] = 'Колір необведених крапок означає час, пройдений після розрядів до [minutes] хвилин. Нові розряди - <span id="live_legend2_1">жовті</span>. Чим старіші вони стають, тим темніший колір. <span id="live_legend2_2">Темно-коричневий</span> рівний майже [minutes] хвилинам. Ці розряди скоро зникнуть.';
$L['lm_live_info_legend3'] = 'На більш високих рівнях масштабування фронт ударів грому показано як <span id="live_legend3_1">біле прозоре</span> зростаюче коло (швидкість звуку). Він стає більш прозорим під час подорожі і зникає через деякий час.';
$L['lm_live_snd_info'] = 'Відмічає "галочку" звук при кожному ударі блискавки в поточному вигляді карти. Ця функція може бути доступна на будь-якому пристрої/браузері.';

$L['lm_live_stations_hint'] = 'ВАЖЛИВО: Ці функції можуть негативно впливати на продуктивність вашої системи! Рекомендується використовувати швидкий браузер, як-от "Google Chrome".';
$L['lm_live_blitzortung_more'] = 'Дивіться в реальному часі на картах Blitzortung.org';
$L['lm_live_usage'] = 'ВАЖЛИВО: ця карта призначена тільки для розважальних цілей!';
$L['lm_live_terms'] = 'Умови використання / Контакти';
$L['lm_live_hideads'] = 'Приховати рекламу';

$L['meta_site_description'] = 'Переглядайте блискавки в реальному часі по всій планеті. Вільний доступ до карт попередніх гроз. Від Blitzortung.org та співучасників.';
$L['meta_site_keywords'] = 'гроза, грім, наживо, blitzortung, в реальному часі, по всьому світу, розряди, карти, блискавка, трекер, удар, погода, радар, детектор';

?>