<?php

$meta = [
    'title' => 'About',
    'desc' => 'About this framework',
    'robots' => 'noindex nofollow',
];

require VIEWS.'/inc.view.php';

ob_start();

require VIEWS.'/about/index.view.php';

$mainContent = ob_get_clean();

template($meta, '', $mainContent);
