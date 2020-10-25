<?php

$modversion['name'] = _AG_VIRUSINFO_NAME;
$modversion['version'] = '1.00';
$modversion['description'] = _AG_VIRUSINFO_DESC;
$modversion['author'] = 'Der-Johng Sun<br>( dj.sun@mail.agnitio.com.tw )<br>';
$modversion['credits'] = 'The Agnitio Project';
// $modversion['help']          =       "help.html";
$modversion['license'] = 'GPL see LICENSE';
$modversion['official'] = 0;
$modversion['image'] = 'images/agnitioVirusInfo_slogo.jpg';
$modversion['dirname'] = 'agnitioVirusInfo';

$modversion['hasMain'] = 0;
$modversion['hasAdmin'] = 0;

// Blocks
$modversion['blocks'][1]['file'] = 'virusinfo.php';
$modversion['blocks'][1]['name'] = _AG_VIRUSINFO_BLOCK;
$modversion['blocks'][1]['description'] = 'Trend Virus Info';
$modversion['blocks'][1]['show_func'] = 'b_virusinfo';
