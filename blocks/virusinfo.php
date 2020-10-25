<?php

function b_virusinfo()
{
    global $xoopsConfig;

    $lang = $xoopsConfig['language'];

    $block = [];

    $block['content'] = '';

    // $block['title'] = _AG_VIRUSINFO_BLOCK;

    $module_dir = XOOPS_ROOT_PATH . '/modules/agnitioVirusInfo';

    $cache_dir = $module_dir . '/cache';

    $tmpfile = tempnam((string)$cache_dir, 'virusinfo');

    shell_exec("/usr/bin/php -q $module_dir/blocks/parser.php $lang> $tmpfile");

    $handle = fopen((string)$tmpfile, 'rb');

    while (!feof($handle)) {
        $block['content'] .= fread($handle, 1024);
    }

    fclose($handle);

    unlink($tmpfile);

    return $block;
}
