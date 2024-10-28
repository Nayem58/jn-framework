<?php

$meta = [
    'title' => '404 Not Found',
    'desc' => 'Page not found',
    'robots' => 'noindex nofollow',
];

require VIEWS.'/inc.view.php';

ob_start();

require VIEWS.'/404.view.php';

$mainContent = ob_get_clean();

template($meta, '', $mainContent);
