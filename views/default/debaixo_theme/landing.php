<?php

elgg_load_css('debaixo:landing_page');

$title = elgg_echo('debaixo_theme:landing:title');
$subtitle = elgg_echo('debaixo_theme:landing:subtitle');

echo <<<HTML
<div id="debaixo-landing">
<div id="debaixo-landing-inner">
<p id="debaixo-landing-title">$title</p>
<p id="debaixo-landing-subtitle">$subtitle</p>
</div>
</div>
HTML;
